# Hydra

Container Application Framework

## Setup

 - Web root of your web server should be www/

## Install
 - `php composer.phar create-project geggleto/hydra [your-project-name]`

## Example
 - See www/auth/index.php


## Todo

 - Write composer script to auto-copy the public directory to www/

## Thoughts

I am not totally convinced that we should be letting modules access Slim 
directly since it could possibly cause overlap in some areas. The container
instances should be initialized on a per sub-application basis then merged
into Slim's DIC.