SHELL := /bin/bash

help:
	# shellcheck disable=SC2046
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$|(^#--)' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[32m %-43s\033[0m %s\n", $$1, $$2}' | sed -e 's/\[32m #-- /[33m/'

.PHONY: help
.DEFAULT_GOAL := help

#-- db
db-clean: ## clean the db
	symfony console doctrine:database:drop --if-exists -n --force
	symfony console doctrine:database:create --if-not-exists -n

db-migrate: ## doctrine migrate
	symfony console doctrine:migrations:migrate -n


#-- E2E tests
test: ## start the cypress E2E tests
	node_modules/cypress/bin/cypress run --spec 'cypress/integration/login_*.spec.js'
test-open: ## open the cypress E2E runner
	node_modules/cypress/bin/cypress open
