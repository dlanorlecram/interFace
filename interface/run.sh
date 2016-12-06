#!/bin/sh -e
composer install
php app/console doctrine:schema:update --force
app/console server:run

exit 0
