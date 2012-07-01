=== Cookie Control ===
Contributors: sherred
Donate link: 
Tags: cookie, eu cookie law, cookies
Requires at least: 3.0
Tested up to: 3.3.2
Stable tag: 1.4
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin enables you to comply with the UK and EU law on cookies.

== Description ==

This a Wordpress plugin implementation of the Cookie Control created by [Civic UK](http://civicuk.com/ "Civic UK").

Cookie Control is a mechanism for obtaining a user's explicit consent for the use of cookies on their computer.

It was created by [Civic UK](http://civicuk.com/ "Civic UK") because recent legislation requires websites to obtain explicit consent before leaving behind or reading files (mostly cookies) on user's computers.

To find out more about Cookie Control please visit [Civic's Cookie Control home page](http://civicuk.com/cookie-law/index "Civic's Cookie Control home page").

**Please Note**: Cookie Control is simply a mechanism to enable you to comply with UK and EU law on cookies, **you need to determine** which elements of your website are using cookies (this can be done via a [Cookie Audit](http://civicuk.com/cookie-law/deployment#audit", "Cookie audit") ), and ensure they are connected to Cookie Control.

== Installation ==

1. Upload the entire `cookiecontrol` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Configure the plugin
1. Done

== Frequently Asked Questions ==

= Is installing and configuring the plugin enough for compliance? =

Only if the only cookies your site uses are the Google Analytics ones. 
If other plugins set cookies, it is possible that you will need to write additional JavaScript.
To determine what cookies your site uses do a a [Cookie Audit](http://civicuk.com/cookie-law/deployment#audit", "Cookie audit"). You will need to do this n any case in order to have a compliant privacy policy.
It is your responsibility as a webmaster to know what cookies your site sets, what they do and when they expire. If you don't you may need to consult whoever put your site together.

= I'm getting an error message/ Cookie Control isn't working? =

Feel free to get in touch.
Your best bet is Twitter, where I am @sherred. If you don't use Twitter go to [my website](http://sherred.com/ "My Website") and send an email to the address you find there.

== Changelog ==

= 1.4 =
* Using version 4.1 of Cookie Control
* Added Google Analytics tracking code field and javascript handling code
* Added Plugin intro text and explanation of what it does and doesn't do
* Improved settings page layout
* Clarify and added settings explanations
* Fixed hiding behind Twenty Eleven banner image

= 1.3 =
* include folder updated

= 1.2 =
* Version number fix

= 1.1 =
* Small typo fix

= 1.0 =
* Initial Release

== Upgrade Notice ==

= 1.4 =
Bug fix. Improved and added more settings. Easier to deal with Google Analytics cookies.
