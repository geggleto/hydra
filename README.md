# Hydra

Container Application Framework

## Setup

 - Web root of your web server should be www/

## Install
 - `php composer.phar create-project geggleto/hydra [your-project-name]`

## Example
 - See www/auth/index.php
 
## Container Access in sub-apps
Note that the sub-apps do not have access directly to the container, this
is to prevent sub-apps overwriting other module's settings. Sub-apps have
read access to the container through the ContainerInterop interface.

The ContainerProxy disables the \ArrayAccess component of the container.


## Todo

 - Write composer script to auto-copy the public directories to `www/`

## Thoughts

I am not totally convinced that we should be letting modules access Slim 
directly since it could possibly cause overlap in some areas. The container
instances should be initialized on a per sub-application basis then merged
into Slim's DIC.