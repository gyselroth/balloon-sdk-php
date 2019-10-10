SHELL=/bin/bash

# DIRECTORIES
BASE_DIR = .
SRC_DIR = $(BASE_DIR)/src
VENDOR_DIR = $(BASE_DIR)/vendor
TESTS_DIR = $(BASE_DIR)/tests
SWAGGER_DIR = $(BASE_DIR)/generated

# PHP BINARY
PHP_BIN = php
# COMPOSER STUFF
COMPOSER_BIN = composer
COMPOSER_LOCK = $(BASE_DIR)/composer.lock
# PHP CS FIXER STUFF
PHPCS_FIXER_SCRIPT = $(VENDOR_DIR)/bin/php-cs-fixer
PHPCS_FIXER_LOCK = $(BASE_DIR)/.php_cs.cache
# PHPUNIT STUFF
PHPUNIT_SCRIPT = $(VENDOR_DIR)/bin/phpunit
PHPUNIT_BOOTSTRAP_SCRIPT = $(UNITTESTS_DIR)/Bootstrap.php
PHPUNIT_LOCK = $(BASE_DIR)/.phpunit.lock
# PHPSTAN STUFF
PHPSTAN_SCRIPT = $(VENDOR_DIR)/bin/phpstan
PHPSTAN_LOCK = $(BASE_DIR)/.phpstan.lock
# SWAGGER STUFF
SWAGGER_SPECS = $(BASE_DIR)/openapi.yml
SWAGGER_JAR = $(BASE_DIR)/openapi-generator/openapi-generator-cli

# TARGET ALIASES
COMPOSER_TARGET = $(COMPOSER_LOCK)
PHPCS_CHECK_TARGET = $(PHPCS_FIXER_LOCK)
PHPUNIT_TARGET = $(PHPUNIT_LOCK)
PHPSTAN_TARGET = $(PHPSTAN_LOCK)
SWAGGER_TARGET = $(SWAGGER_DIR)
BUILD_TARGET = $(SWAGGER_TARGET) $(COMPOSER_TARGET) $(PHPCS_CHECK_TARGET) $(PHPUNIT_TARGET)

# MACROS
macro_find_phpfiles = $(shell find $(1) -type f -name "*.php")

# SOURCECODE FILESETS
PHP_FILES = $(call macro_find_phpfiles,$(SRC_DIR))
PHP_CORE_FILES = $(call macro_find_phpfiles,$(CORE_DIR))
PHP_CORE_API_FILES = $(call macro_find_phpfiles,$(CORE_API_DIR))
PHP_TEST_FILES = $(call macro_find_phpfiles,$(TESTS_DIR))

# TARGETS
.PHONY: all
all: build


.PHONY: clean
clean: mostlyclean
	@-test ! -d $(VENDOR_DIR) || rm -rfv $(VENDOR_DIR)/*
	@-test ! -d $(SWAGGER_DIR) || rm -rfv $(SWAGGER_DIR)/*


.PHONY: mostlyclean
mostlyclean:
	@-test ! -f $(COMPOSER_LOCK) || rm -fv $(COMPOSER_LOCK)
	@-test ! -f $(PHPCS_FIXER_LOCK) || rm -fv $(PHPCS_FIXER_LOCK)
	@-test ! -f $(PHPUNIT_LOCK) || rm -fv $(PHPUNIT_LOCK)
	@-test ! -f $(PHPSTAN_LOCK) || rm -fv $(PHPSTAN_LOCK)


.PHONY: deps
deps: composer

.PHONY: build
build: $(BUILD_TARGET)

.PHONY: composer
composer: $(COMPOSER_TARGET)

$(COMPOSER_TARGET) $(PHPCS_FIXER_SCRIPT) $(PHPUNIT_SCRIPT) $(PHPSTAN_SCRIPT): $(BASE_DIR)/composer.json
	$(COMPOSER_BIN) update
	@touch $@

.PHONY: phpcs
phpcs: $(PHPCS_CHECK_TARGET)

$(PHPCS_CHECK_TARGET): $(PHPCS_FIXER_SCRIPT) $(PHP_FILES) $(COMPOSER_LOCK)
	$(PHP_BIN) $(PHPCS_FIXER_SCRIPT) fix --config=.php_cs.dist -v --using-cache=no
	@touch $@

.PHONY: test
test: $(PHPUNIT_TARGET)

.PHONY: phpunit
phpunit: $(PHPUNIT_TARGET)

$(PHPUNIT_TARGET): $(PHPUNIT_SCRIPT) $(PHP_FILES) $(PHP_TEST_FILES)
	$(PHP_BIN) $(PHPUNIT_SCRIPT) --stderr --debug -c phpunit.xml
	@touch $@

.PHONY: phpstan
phpstan: $(PHPSTAN_TARGET)

$(PHPSTAN_TARGET): $(PHPSTAN_SCRIPT) $(PHP_FILES) $(PHP_TEST_FILES)
	$(PHP_BIN) $(PHPSTAN_SCRIPT) analyse -c phpstan.neon $(SRC_DIR) $(TESTS_DIR)
	@touch $@

.PHONY: swagger
swagger: $(SWAGGER_TARGET)

$(SWAGGER_TARGET): $(SWAGGER_SPECS)
	$(SWAGGER_JAR) generate -i $(SWAGGER_SPECS) -g php --reserved-words-mappings=List=ResourceList --http-user-agent "balloon php sdk" -t templates -o ${SWAGGER_DIR} -D variableNamingConvention=snake_case --invoker-package Balloon\\Sdk
	@rm -rfv $(BASE_DIR)/tests/*
	@rm -rfv $(BASE_DIR)/src/*
	@rm -rfv $(BASE_DIR)/docs/*
	@mv $(SWAGGER_DIR)/test/* tests
	@mv $(SWAGGER_DIR)/lib/* src
	@mv $(SWAGGER_DIR)/docs/* docs
	@sed s/"const ACCESS_W = 'w+';"/"const ACCESS_INBOX = 'w+';"/g -i src/Model/CoreV2Node.php
	@sed s/"const ACCESS_W = 'w+';"/"const ACCESS_INBOX = 'w+';"/g -i src/Model/CoreV2Collection.php
	@sed s/"const ACCESS_W = 'w+';"/"const ACCESS_INBOX = 'w+';"/g -i src/Model/CoreV2File.php
	@sed s/"const ACCESS_W = 'w+';"/"const ACCESS_INBOX = 'w+';"/g -i src/Model/CoreV2NodeAllOf.php
	@sed s/"const PRIVILEGE_W = 'w+';"/"const PRIVILEGE_INBOX = 'w+';"/g -i src/Model/CoreV2AclRule.php
