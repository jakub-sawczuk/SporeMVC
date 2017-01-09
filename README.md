<html>
	<head>
	<meta charset="UTF-8">
	<meta name="language" content="English">
	<title>SporeMVC Site Index</title>
		<style>
		* {background-color:floralwhite ; color:DarkSlateBlue ;font-family: sans-serif }
		body {min-width:400px;max-width:900px}
		code,pre {display:block;padding:10px;background-color:gainsboro;font-family:monospace;margin-top:10px;margin-bottom:10px;margin-left:30px}
		div.par {display:block;padding:10px;border:none;font-size:100%;background-color:ghostwhite;margin-bottom:10px;box-shadow: 5px 5px 2px #888888;line-height:150%}
		div.h1 {display:block;padding:5px;margin-bottom:5px;border:none;font-size:160%;background-color:lavender }
		div.h2 {display:block;padding:5px;margin-bottom:5px;border:none;font-size:130%;background-color:lavender }
		div.h3 {display:block;padding:5px;margin-bottom:5px;border:none;font-size:110%;background-color:lavender }
		ul,li,a,em {background-color:ghostwhite}
		li {font-size:85%}
	
		table.changelog, table.changelog tr, table.changelog td {background-color:ghostwhite;text-align:right}
		table.changelog tr.header {font-size:80%;font-weight:bold}
		table.changelog td {padding-left:30px}
		table.changelog pre {text-align:left}
		</style>
	</head>
	<body>
<div class='par'>
	<div class='h1'>Welcome to SporeMVC</div>

	If you see this it means your SporeMVC site is running and ready to develop.
	</div>
	<div class='par'>
	<div class='h2'>Changelog</div>
	<table class='changelog'>
	<tr class='header'>
		<td>version number</td><td>version date</td><td>change description</td>
	</tr>
	<tr>
		<td>1.0</td><td>2017/JAN/09</td><td>
		Initial version of this little and unneeded nothing framework. 
<pre>
Files created:

sporemvc.php     - the whole framework code
index.php        - site runner
sitecontrols.php - user logic
manual.html      - this user manual
</pre>		</td>
	</tr>
	</table>
	</div>
	<div class='par'>
	<div class='h2'>What is SporeMVC?</div>
	It is pretty much nothing. Well, you may guess it is a scratch of some MVC framework and you're right. Still you must be warned SporeMVC does NOT provide:
	<ul>
	  <li>any kind of helpers (HTML, JavaScript, CSS, JSON, XML, ...)</li>
	  <li>nor libraries of functions of any purpose</li>
	  <li>support for databases</li>
	  <li>query builders</li>
	  <li>validators</li>
	  <li>CRUDs</li>
	  <li>security solutions like Cross Site Scripting or SQL Injection prevention</li>
	  <li>templating engines</li>
	  <li>flash data solutions</li>
	  <li>support for JQuery, Bootstrap, Skeleton, Toast, Tuktuk and so forth</li>
	</ul>
	It is not even object-oriented. Why would you use it then after all?
	</div>
	<div class='par'>
	<div class='h2'>So what SporeMVC really is?</div>
	It is one tiny MVC framework that provides the minimum to satisfy Model-View-Controller concept:
	<ul>
	<li>MVC-like URL support - controller/action/parameter(s) oriented application routing and code triggering</li>
	<li>skeleton for operating controllers, models and views</li>
	<li>unified method of passing arguments and performin system calls</li>
	<li>late binding of code pieces</li>
	</ul>
	All the rest of your application is at your hands. And even after you read what SporeMVC is NOT, you may still develop,
	employ or integrate all mentioned techniques (like OOP), frameworks (like Bootstrap) and 
	solutions (validators, templating, flashing etc). SporeMVC doesn't limit what and how you achieve these. 
	There are only few rules you need to follow to learn and use the whole framework.
	</div>
	<div class='par'>

	<div class='h2'>So why would you use it?</div>
	There is a number of mature PHP MVC frameworks there. They offer vast number of solutions to typical problems being real time saver in development, validation and maintenance. 
	But also their learning curve is high. You must know much before you start developing your site as many of things may be done 'their way' or 'bad way'. 
	SporeMVC doesn't tell you how to build your site, almost never. Then in spite of many, many, many functional shortages of SporeMVC I encourage you to give it a try especially if:
	<ul>
	<li>you never programmed MVC and want to start with something small and made for fun</li>
	<li>you want to start coding right now, with minimum effort for learning</li>
	<li>you're not really friends with object-oriented programming</li>
	<li>you want to achieve some proper MVC-related habits</li>
	<li>you've got some PHP, HTML, CSS, JavaScript etc. knowledge and you wish to utilize it your way, in unchained manner</li>
	<li>you don't want to mess with Apache configs too much or even at all</li>
	<li>you tend to use compact solution and don't whant to deal with numbers of code and configuration files (in SporeMVC you work witg one php file unless you decide otherwise)</li>
	<li>you plan to learn some real, mature framework like Symphony or CodeIgniter <em>but not yet now</em></li>
	
	</ul>
	</div>
	<div class='par'>
	<div class='h2'>Let's get started with MVC basics</div>
	You must be familiar with URLs like:
	<code>http://somedomain.com/index.php/something/somethingelse/anotherpiece/yetanotherone</code>
	But you are more familiar with URLs like:
	<code>http://somedomain.com/index.php?parameter=value&amp;parameter=value</code>
	This is how you called php scripts and passed GET parameters to them. If you wanted perform another action, you went to another script like login.php or welcome.php. 
	In MVC the role of index.php is different. This will be the only script you will see in your site's URLs and still <em>the only index.php</em> script will controll the whole application.
	Let's see MVC link once more:
	<code>http://somedomain.com/index.php/something/somethingelse/anotherpiece/yetanotherone</code>
	It says (to index.php script) that in subject of 'something' action called 'somethingelse' must be performed and must take in account two string parameters: 'anotherpiece' and 'yetanotherone'.
	Let's use a bit more real example:
	<code>http://myshop.com/index.php/customer/listall/1/100</code>
	It may say (to index.php script, again) that for registered customers their list must be displayed and the list is limited from the first customer to the hundredth one.
	What we expect, <em>controller</em> of name Customer will execute its <em>action</em> called ListAll taking two parameters: 1 and 100. What we imagine is:
	<ul>
	<li>some php code will be launched like CustomerListAll(1,100)</li>
	<li>some other piece of code will bring list of 100 customers from some database or file</li>
	<li>yet another piece of code will process the list and pring customer names and details on the page</li>
	</ul>
	In MVC it is:
	<ul>
	<li>Controller</li>
	<li>Model</li>
	<li>View</li>
	</ul>
	The action flow is that <em>controller.action</em> decides which <em>model</em> will be executed (which data will be brought) and how it will be printed in the page (which <em>view</em> will arrange printing).
	</div>
	<div class='par'>
	To sum it up, <em>views</em> are the places you will code page outputs (HTML tags with their contents) and that <em>views</em> may have access to some data brought by a <em>model</em>. 
	The <em>model's</em> role is to access and bring the data. Within <em>controller action</em> you decide which model(s) to execute and which view(s) to use to output data. 
	And all you want to say is to ask index.php to run given controller's action with given parameters. It is then all about calling functions, nothing more. Well, yet another thing must be mentioned. 
	In <em>models</em> not only data <em>retrieval</em> takes place. Also you will use <em>models</em> to send data do database (or file or wherever data is supposed to be stored). That's it, really.
	</div>
	<div class='par'>
	One more thing to make sure all is clear. With no MVC your 'scripts' were like index.php, welcome.php, login.php and with some parameters. 
	In MVC your 'script' and parameters is everything in URL which comes <em>after</em> index.php. Index.php itself is only where all the magic happens and belive me, there's no magic at all.
	</div>
	
	<div class='par'>
	<div class='h2'>Prepare for development</div>
	I assume you alredy know PHP and have minimum experience. Also you got PHP and web server properly configured to work together as well as any text script editor like Notepad++, Sublime, Atom or VIM. If not, get them.
	Notepad++ is my preference with all respect for others mentioned. If you don't want to install and configure Apache, you may use embedded PHP server like this (in MS Windows):
	<code>
	create some folder on your PC<br>
	copy all SporeMVC files there<br>
	run cmd.exe and cd to that folder
    then run php embedded server:	c:\php\php.exe -S 0.0.0.0:8000</code>
	and you got your SporeMVC development site at
	<code>http://localhost/index.php</code>
	</div>
	
	<div class='par'>
	<div class='h2'>Framework files</div>
	<ul>
	<li>sporemvc.php - this is main framework file which does all the magic. You need it but will not change anything there.</li>
	<li>index.php - this is your site master script that triggers all the magic. It is very simple and you don't need to change anything there to have your site running.</li>
	<li>sitecontrols.php - this is where you gonna code all aplication logic like your own controllers, models and views. Initially there is some code responsible for showing <em>this tutorial</em></li>
	</ul>
	</div>
	<div class='par'>
	index.php looks like this and is enough to run even complex site with no modification:
	<code>
	&lt;?php<br>
require_once('sporemvc.php');<br>
require_once('sitecontrols.php');<br>
site();<br>
?&gt;<br>
	</code>
	</div>
	<div class='par'>
	<div class='h2'>Site coding starts here</div>
	As you may decide of host name and port of the webserver, it will be noted below as '...'. If you run your webserwer at localhost and on port 8000 the '...' stands for localhost:8000
	<br><br>First of all, when the framework receives request to index.php with no other arguments in URL:
	<code>http://.../index.php</code>	
	it assumes you want to call index controller's index action:
	<code>http://.../index.php/index/index</code>
	If the framework gets request for:
	<code>http://.../index.php/index</code>
	it also assumes you want to call index action in given index controller:
	<code>http://.../index.php/index/index</code>
	Moreover, if you call <em>any</em> controller with no other arguments (no action, no parameters)
	<code>http://.../index.php/anycontroller</code>
	it assumes you request for 'index' action of this controller:
	<code>http://.../index.php/anycontroller/index</code>
	In other words, if controller is not specified in URL, 'index' controller will be used. And if an action is not specified for the given controller, by default 'index' action will be assumed as requested. 
	That's why an empty call to index.php itself is considered as it was:
	<code>http://.../index.php/index/index</code>
	</div>
	<div class='par'>
	<div class='h2'>Let's hello-world for the sake of...</div>
	All right then. All the job goes in sitecontrols.php. Open it in your editor. Yes, there is a lot of stuff already there, later you will get rid of it.
	You want to <em>print</em> Hello World! welcome message. If we're about <em>printing</em> there must be something to do with <em>views</em>, right? 
	Go to your editor and sitecontrols.php. Create function there:
	<pre>
function v_welcome_english($parameters)
{
	return 'Hello, World!';
}
</pre>
	Allright, then. You've got some code that returns welcome message and this is fine. But there must be some way to say you want this function excecuted and the message printed. And there controller comes in. Controller to welcome users may 
	have name 'welcome'. And let the action decide which language to use. Add another function:
	<pre>
function c_welcome_english($parameters)
{
	print view('v_welcome_english',$parameters);
}	
</pre>
	Now go to your browser and enter URL:
	<code>http://.../index.php/welcome/english</code>
	(Remember to replace '...' with your hostname and port) See what happens. There should be 'Hello, World!' typing in the browser.
	
	<br><br>What happened there in the framework? It received request to 'welcome' controller to execute 'english' action. How did happen?
	Framework assumes all controller actions are function of specific name. It is always c_ + controllername + actionname. In this case the 
	framework looked for function c_welcome_english and found it, so launched it. In case there's no function of that name, framework yells 
	error message. Ok then, so framework found controller function and launched it. What happened then? You can see in c_welcome_english function
	there is sigle call of view function:
	<pre>print view('v_welcome_english',$parameters)</pre>
	
	We would also greet German spoken people. We may add another view:
	
	<pre>
function v_welcome_german($parameters)
{
	return 'Hallo, Welt!';
}	
</pre>
	and another controller action:
<pre>
function c_welcome_german($parameters)
{
    print view('v_welcome_german',$parameters);
}
</pre>	
Obviously when you type 
<code>http://.../index.php/welcome/german</code>
in your browser, there will be 'Hallo, Welt!' message in German. <br><br>
Well, we may also want to greet people in English by default as it is popular language. For that let's create default action for the 'welcome' controller. Yes, it will be called 'index':
<pre>
function c_welcome_index($parameters)
{
	print view('v_welcome_english',$parameters);
}
</pre>	
So for two actions we used the same <em>view</em> called 'v_welcome_english'. This is nice, still stupid. Why wouldn't you just create two static HTML pages with no messing with <em>any</em> framework?

Another example will show you why it is not stupid at all and let you understand the idea of <em>controllers</em>.	Let's update c_welcome_index action a little:
<pre>
function c_welcome_index($parameters)
{
	if ( substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2)=='de')
	{
		print view('v_welcome_german',$parameters);
	}
	else
	{
		print view('v_welcome_english',$parameters);
	}
}
</pre>
Now go to:
<code>http://.../index.php/welcome</code>
and see what happens. If your browser's language preference is German, you will see welcome message in German. Otherwise controller will show English (most universal) one. 
Now you see the role of controller well. This is the place where you make decisions and choose what to print (which view or views to load)
and what data bring from database for display and/ or processing (with models, but be patient).

<br><br>
Just one more thing. Go to c_welcome_index function again and change both views names like that:
<pre>
function c_welcome_index($parameters)
{
	if ( substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2)=='de')
	{
		print view('german',$parameters);
	}
	else
	{
		print view('english',$parameters);
	}
}
</pre>
As you can see, it is possible to use short names of views. The framework 'knows' you're about 'welcome' controller so when there is no 'v_' prefix to a view name it assumes you want 'german' or 'english' view 
for 'welcome' controller. You may use this shortened convention. 
<br><br>
With view names there's something more. You may create 'global' views. Their functions' names must follow the naming convention v_viewname. In other words you may create view function for instance
v_htmlheader and reuse it in as many controllers as you want. If you want to develop some templating for html header or page headers and footers - this is something for you. Just remember, you must call such views with their full names and their names 
must not match existing controllers and view short names. 

<br><br>
Also you may want to know sometimes which controller and which action is being executed. For that there are two globals defined:
<pre>
$GLOBALS['sporemvc_controller_name']
$GLOBALS['sporemvc_controller_action']
</pre>
You may read these variables, but do not set them with any own values.
	</div>
<div class='par'>

<div class='h2'>Finally something with models</div>	
Take a look back to sitecontrols.php and look for c_frameworkinfo_index controller. It is there to display this tutorial in the newly installed SporeMVC site. When you enter this 
URL <code>http://.../index.php/frameworkinfo</code> in browser, following controller is employed:
<pre>
function c_frameworkinfo_index($parameters)
{
	$data = model('m_frameworkinfo_index');
	print view('v_frameworkinfo_index', $data);
}
</pre>
You can see it calls one model and one view. The model brings content from some data source. Then the view renders it and returns to the controller for printing (or post-processing if needed). The model's code is:
<pre>
function m_frameworkinfo_index($parameters)
{
	return file_get_contents('manual.html');
}
</pre>
Well this is not much. It just reads this manual's html file to single string. Anyway it delivers some data from some datasource. Later this data is passed to view call in controller. And what does view do is:
<pre>
function v_frameworkinfo_index($parameters)
{
	return $parameters;
}
</pre>
Even less. Still this is proper MVC flow. Controller asks for data by calling a model. Then passess retrieved data to view and lets the view to process it and return printable result. Imagine model's
code establishes database connection and perfoms query to MySQL and as a result provides controller with NxM table of records in array(0=&gt; array(id=&gt;3, name=&gt;Bill, ...), 1=&gt; array(id=&gt;4, name=&gt;Max, ...)...). 
Its all up to you. The result passed to view may be then dressed in the view with 
&lt;table&gt;, &lt;row&gt; and &lt;td&gt; tags and returned to controller for printing. But like I said in the beginning you have to code it yourself, no helpers of any kind for you here, just the skeleton.
</div>
<div class='par'>
<div class='h2'>Yeah, what's with these $parameters all around?</div>	
All user defined (your) model, view and controller functions as well as framework 'model' function and 'view' function accept $parameters variable.
Everything with $parameters is different for controller action functions that for other rest. 
<div class='h3'>$Parameters in controller action functions</div>	
When you see URL like <code>http://site/index.php/user/list/200/220/ascending</code> 
you may be sure that:
<ul>
<li>controller name is <em>user</em> and ...</li>
<li>... controller action is <em>list</em> so ...</li>
<li><em>function c_user_list($parameters)</em> will be called by the framework.</li>
<li>The parameter <em>$parameters</em> will be an array[0=>200,1=>220,2=>'ascending']</li>
</ul>
These parameters in the list you may use in controller's code... however you want. The framework really does not care. You may ignore it, process it and pass them to model and/ or view if URL parameters are intended
to do so. 
<div class='h3'>$Parameters in other places</div>	
Whenever you ask for calling model or view function with framework functions <em>model($name, $parameters=[ ])</em> or <em>view($name, $parameters=[ ])</em> 
the framework really does not care what values and types you pass. As there is only one <em>$parameters</em> argument available it is pretty obvious you will 
pass some arrays but you don't have to. The only thing you have to remember is how you deal with these parameters in your controller's code and your own view and model functions. 
</div>
<div class='par'>
<div class='h2'>And that's it!</div>
Now you know everything you need to start developing your own site. Just go to <em>sitecontrols.php</em> and remove the content. Seriously, delete it and paste this for a good start:
<pre>
&lt;?php
function c_index_index($parameters)
{
	print view('index');
}
function v_index_index($parameters)
{
	return 'Hello, World!';
}
?&gt;</pre>
And keep your <em>index.php</em> file intact:
<pre>
&lt;?php
require_once('sporemvc.php');
require_once('sitecontrols.php');
site();
?&gt;</pre>
Start coding your site, integrate it with Bootstrap, employ JQuery, use OOP for your defined functionalities, connect to databases... or go for CodeIgniter and Symphony if you feel like having something more serious and bold.
<br><br>Feel free to reach me and enjoy!

<br><br><a href='mailto:jakub.sawczuk@gmail.com?subject=SporeMVC%20comments' target='_top'>Jakub Sawczuk</a>
</div>
	</body>
</html>
