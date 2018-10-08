.PHONY: test setup-dev

test:
	php tests/*.php

setup-dev:
	composer install
