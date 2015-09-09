HealthTools
===========

A suite of web and SMS based health applications

Installation
============

**Clone this repository to your working directory**

<pre>
git clone git@github.com:CodeForAfrica/HealthTools.git
</pre>

**Update composer**

<pre>
cd HealthTools/
</pre>

<pre>
composer update
</pre>


You can now navigate to {your localhost}/HealthTools/public to run the app

Set Up
===========

HealthTools uses [Fusion Tables]  to store the data and execute queries for the different apps. Here will walk you on the step by step for each of the appications


**Apps**

In order to set up the apps with your data follow the following steps:

1. Upload your data to Google Fusion Tables

2. Change the share settings to publicly available on the web

3. Grab the table id and set it accordingly on the custom config file: app/config/custom_config.php
   
4. Change google_api_key to your Google API key



**News Feed**

To configure the news feed, you will need to set up a cron job that points to public/cron/run_cron.php


**SMS Apps**

If you are not running an SMS service you can ignore this section.
This set up might be a little complicated and depends your SMS gateway provider. However SMS is handled as follows:

1. Incoming query

The requests are made as {your url to public}/sms?phoneNumber={the phone number}&message={the message}

2. Response

The response is a http request who's format you can modify according to your gateway provider on the send_response method of the SMSController.

You can also modify the SMS settings accordingly on the config file. Or even create our own.


**Congrats! All done!**


### Built using Laravel PHP Framework

[![Latest Stable Version](https://poser.pugx.org/laravel/framework/version.png)](https://packagist.org/packages/laravel/framework) [![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.png)](https://packagist.org/packages/laravel/framework) [![Build Status](https://travis-ci.org/laravel/framework.png)](https://travis-ci.org/laravel/framework) [![License](https://poser.pugx.org/laravel/framework/license.png)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.

Laravel aims to make the development process a pleasing one for the developer without sacrificing application functionality. Happy developers make the best code. To this end, we've attempted to combine the very best of what we have seen in other web frameworks, including frameworks implemented in other languages, such as Ruby on Rails, ASP.NET MVC, and Sinatra.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.