custom-cmf-example
==================

Example for Custom CMF

Installation guide for example application
-------------

#### Clone Custom CMF example application

    git clone git@github.com:itcreator/custom-cmf-example.git

#### Use Composer

If you don't have Composer yet, download it following the instructions on
http://getcomposer.org/ or just run the following command:

    curl -s http://getcomposer.org/installer | php

Then, use the install command to configure the Custom CMF example application:

    COMPOSER_PROCESS_TIMEOUT=4000 ./composer.phar install

#### Web server

For running of the Custom CMF example application you can use built-in web server:

    bin/console server:start

You can also use other servers

nginx: https://github.com/itcreator/custom-cmf/blob/master/misc/nginx.config

apache2: https://github.com/itcreator/custom-cmf/blob/master/misc/apache2.conf


####Other

See Custom CMF https://github.com/itcreator/custom-cmf

