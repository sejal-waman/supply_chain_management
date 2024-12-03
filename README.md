# CodeIgniter 4 Application Starter

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds a composer-installable app starter.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

The user guide corresponding to the latest version of the framework can be found
[here](https://codeigniter4.github.io/userguide/).

## Installation & updates

`composer create-project codeigniter4/appstarter` then `composer update` whenever
there is a new release of the framework.

When updating, check the release notes to see if there are any changes you might need to apply
to your `app` folder. The affected files can be copied or merged from
`vendor/codeigniter4/framework/app`.

## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library






#Supply Chain Management System#

This Supply Chain Management System is designed to streamline vendor coordination, optimize database performance, and provide insightful reporting for key metrics. Built using HTML, CSS, JavaScript, Bootstrap, and the CodeIgniter Framework (PHP), this web application is tailored for farmers to sell their products online without incurring additional expenses such as transportation.

#Key Features#

1. Vendor Management Module

Facilitates seamless communication and coordination between farmers and suppliers.

Simplifies the onboarding process for suppliers and ensures transparency in operations.



2. Database Optimization

Enhanced query efficiency for faster system performance.

Structured database schema for better data handling and storage.



3. Reporting System

Monitors critical metrics like sales, inventory, and vendor performance.

Generates detailed reports for informed decision-making.



4. Farmer-Centric Platform

Allows farmers to list their products easily.

Eliminates the need for intermediaries and reduces transportation costs.

Provides an online marketplace for direct sales to buyers.




#Technologies Used#

Frontend: HTML, CSS, JavaScript, Bootstrap

Backend: PHP (CodeIgniter Framework)

Database: MySQL


#Objective#

The primary goal of this project is to empower farmers by providing them with a user-friendly platform to market their products without incurring additional costs, thus increasing their profitability and market reach.




#Future Enhancements#

Integration of payment gateways for seamless transactions.

Advanced analytics for predicting demand and supply trends.

Multilingual support for better accessibility.
