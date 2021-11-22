.PHONY: qa dev cs csfix phpstan tests build

qa: cs phpstan

cs:
	vendor/bin/codesniffer app

csfix:
	vendor/bin/codefixer app

phpstan:
	vendor/bin/phpstan analyse -l max -c phpstan.neon --memory-limit=512M app

tests:
	echo "OK"

tests-coverage:
	echo "OK"
