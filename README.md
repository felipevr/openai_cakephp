# CakePHP OpenAI App Skeleton

[![Build Status](https://img.shields.io/travis/cakephp/app/master.svg?style=flat-square)](https://travis-ci.org/cakephp/app)
[![Total Downloads](https://img.shields.io/packagist/dt/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)

A skeleton for creating applications with [CakePHP](https://cakephp.org) 3.x.

The framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Installation

1. Clone the repository
2. Download [Composer](https://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
3. Run `php composer.phar install`.

You can now either use docker-compose to view the default home page, or,
if you have php locally installed, start up the built-in webserver with:

```bash
bin/cake server -p 8795
```

Then visit `http://localhost:8795` to see the welcome page.

## Configuration

Read and edit `config/app_local.php` and setup the `'Datasources'`.

Then you need to run `bin/cake migrations migrate` to start the database.

## Layout

The app skeleton uses a subset of [Foundation](http://foundation.zurb.com/) (v5) CSS
framework by default. You can, however, replace it with any other library or
custom styles.
