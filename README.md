APIne Framework Example
================

An example project showcasing most of the features available on APIne Framework. 

> This example is currently using an undocumented and unstable version of APIne Framework. 

## Requirements

See [APIne Framework](https://github.com/Youmy001/apine-framework)'s project on GitHub for more information on requirements

## How to use the example

1. Clone this project in your working directory : `$ git clone https://github.com/Youmy001/apine-framework-example.git`
2. Setup a virtual host for the project directory that allow rewrite rules and optionaly has mod\_deflate and filter\_module enabled in apache for version 2.4 or greater.
3. Import `apine_sql_tables.sql` into your database. This file includes the instructions to create the tables needed by the framework.
4. Create a copy of `sample_config.ini` named `config.ini`.
5. Edit the `Database` section in `config.ini` to include connection to your database. Check the [wiki](https://github.com/Youmy001/apine-framework/wiki) for more informations on configuration.
6. Install composer depandancies with the following command : `$ php composer.phar install`
7. Open your browser and go to your virtual host address. APIne Framework is now ready to work.
