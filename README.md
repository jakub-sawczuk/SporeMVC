# SporeMVC
Smallest PHP MVC framework with barely nothing onboard. It's not even oop.
## What is SporeMVC?

It is pretty much **nothing**. Well, you may guess it is a scratch of some MVC framework and you're right. Still you must be warned 
SporeMVC does **NOT** provide:
* any kind of helpers (HTML, JavaScript, CSS, JSON, XML, ...)
* nor libraries of functions of any purpose
* support for databases
* query builders
* validators
* CRUDs
* security solutions like Cross Site Scripting or SQL Injection prevention
* templating engines
* flash data solutions
* support for JQuery, Bootstrap, Skeleton, Toast, Tuktuk and so forth

It is **not even object-oriented**. Why would you use it then after all?

## So what SporeMVC really is?
It is one tiny MVC framework that provides the minimum to satisfy Model-View-Controller concept:
* MVC-like URL support - controller/action/parameter(s) oriented application routing and code triggering
* skeleton for operating controllers, models and views
* unified method of passing arguments and performing system calls
* late binding of code pieces

All the rest of your application is at your hands. And even after you read what SporeMVC is NOT, you may still develop, 
employ or integrate all mentioned techniques (like OOP), frameworks (like Bootstrap) 
and solutions (validators, templating, flashing etc, database connectivity). 
SporeMVC **doesn't limit what and how you achieve these**. There are **only few rules** you need to follow to 
learn and use the whole framework.

## So why would you use it?
There is a number of mature PHP MVC frameworks there. They offer vast number of solutions to typical problems being real time saver 
in development, validation and maintenance. But also their learning curve is high. You must know much 
before you start developing your site as many of things may be done 'their way' or 'bad way'. 
**SporeMVC doesn't tell you how to build your site, almost never**. Then in spite of many, many, many functional 
shortages of SporeMVC I encourage you to give it a try especially if:
* you never programmed MVC and want to start with something small and made for fun
* you want to start coding right now, with minimum effort for learning
* you're not really friends with object-oriented programming
* you want to achieve some proper MVC-related habits
* you've got some PHP, HTML, CSS, JavaScript etc. knowledge and you wish to utilize it **your way, in unchained manner**
* you don't want to mess with Apache configs too much or even at all
* you tend to use compact solutions and don't whant to deal with numbers of code and configuration files (in SporeMVC you work with **one php file** unless you decide otherwise)
* you plan to learn some real, mature framework like Symphony or CodeIgniter *but not yet now*

Source code of the framework is about 2kB. It consists of 4 files:
* index.php which is never changed and is three lines long.
* sporemvc.php which includes the whole framework which is literally 3 php functions
* sitecontrols.php - the only file developer changes by adding controller/view/model logic
* manual.html - which is manual/tutorial

Let the example speak. For typical 'hello world' you just add to *sitecontrols.php* this:
```php
<?php
function c_index_index($parameters) # this is controller_action 
{
	print view('index');
}
function v_index_index($parameters) #this is controller_view or just view
{
	return 'Hello, World!';
}
?>
```
For more examples and tutorial please refer to **manual.html** which is a part of this package.

Enjoy!

