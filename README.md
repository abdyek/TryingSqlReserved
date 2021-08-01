[look at](https://github.com/propelorm/Propel2/issues/1745) about this repository

# Usage

Clone repository

`git clone https://github.com/abdyek/TryingSqlReserved`

Change directory

`cd TryingSqlReserved`

Install dependence

`composer install`

Generate schema.xml

`php ./schema-generator.php`

It should create **schema.xml** file in root directory

Generate sql file by propel

`./vendor/bin/propel sql:build --output-dir="propel"`

import sql file on mysql server any way

Generate propel model classes

`./vendor/bin/propel model:build --output-dir="propel/model"`

Generate propel config file
`./vendor/bin/propel config:convert --output-dir="propel"`

Generate model classes that using propel models

`php ./models-generator.php`

Generate phpunit test classes

`php ./phpunit-generator.php`

Start testing to check all sql reserved keyword as table or column name in propel orm

`./vendor/bin/phpunit --testsuite models --color`
