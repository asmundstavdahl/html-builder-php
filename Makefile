.PHONY: test setup-dev

test:
	php tests/full-story-test.php
	php tests/text-node-test.php
	php tests/pretty-formatting-test.php
	php tests/element-node-test.php
	php tests/html-root-element-test.php
	php tests/add-child-test.php
	php tests/element-attributes-test.php
	php tests/script-tag-test.php

setup-dev:
	composer install
