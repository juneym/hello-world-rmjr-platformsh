SHELL := /bin/bash

PWDIR = $(shell pwd)
HOMEY = $(shell echo \${HOME})

php-deps:
	docker run --network=host --rm -v $(PWDIR):/app -v $(HOMEY)/.ssh:/root/.ssh composer:1.6 install