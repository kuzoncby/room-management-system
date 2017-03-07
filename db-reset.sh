#!/usr/bin/env bash
mysql -hmariadb -uroot -proot room < clean-db.sql
php artisan migrate -vvv
php artisan db:seed -vvv