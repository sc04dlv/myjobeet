#/usr/bin/php
#php ./symfony doctrine:data-dump
php ./symfony cc
php ./symfony doctrine:build --all --and-load --no-confirmation
php ./symfony doctrine:clean-model-files
php ./symfony plugin:publish-assets
php ./symfony cc

