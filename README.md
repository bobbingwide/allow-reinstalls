# allow-reinstalls 
![banner](https://raw.githubusercontent.com/bobbingwide/allow-reinstalls/master/assets/allow-reinstalls-banner-772x250.jpg)
* Contributors: bobbingwide
* Donate link: http://www.oik-plugins.com/oik/oik-donate/
* Tags: upload, plugin, theme
* Requires at least: 4.3.0
* Tested up to: 4.6
* Stable tag: 0.0.1
* License: GPLv2 or later
* License URI: http://www.gnu.org/licenses/gpl-2.0.html

## Description 
Allows plugins and themes to be updated using the standard WordPress plugin or theme update process.


When you want to update a custom plugin or theme but don't have an automated process
then you can use this plugin to allow you to install a new version of a plugin or theme
without having to delete the existing plugin.

Tested with WordPress 4.6 and WordPress MultiSite.



## Installation 
1. Upload the contents of the allow-reinstalls plugin to the `/wp-content/plugins/allow-reinstalls` directory
1. Do nothing until you want to update another plugin or theme.


If you've attempted to upload a plugin and you've received the message that says

`
Destination folder already exists. path-to/wp-content/plugins/your-plugin/

Plugin install failed.
`

or you've attempted to upload a theme and got

`
Destination folder already exists. path-to/wp-content/themes/your-theme/

Theme install failed.
`

then you need to


1. Activate the allow-reinstalls plugin through the 'Plugins' menu in WordPress.
1. Upload the plugin or theme you want to replace.
1. Deactivate the allow-reinstalls plugin.

## Frequently Asked Questions 

# Does this work on WordPress MultiSite? 
Yes. Use it as a super administrator.

# Can I downgrade a plugin or theme? 
You'll be able to do it, but whether or not the system works afterwards depends on the plugin or theme.

# Can I leave the plugin active? 
No point.

# Why doesn't WordPress allow this anyway? 
Safety and security; just in case you overwrite the latest version with a back level.

WordPress expects to receive most of its updates automatically, not via a manual upload process.

# Where can I read more? 

[allow-reinstalls on oik-plugins](http://www.oik-plugins.com/oik-plugins/allow-reinstalls)


## Screenshots 
1. Upload fails when allow-reinstalls is already installed but inactive
2. Try again after activating the allow-reinstalls plugin
3. Upload succeeds this time.

## Upgrade Notice 
# 0.0.1 
Tested with WordPress 4.6. Used to apply updates to plugins such as oik-weight-zone-shipping-pro.

# 0.0.0 
New plugin, also available from GitHub and oik-plugins.

## Changelog 
# 0.0.1 
* Changed: Added PHPUnit tests in the GitHub version [github bobbingwide allow-reinstalls issues 1]
* Tested: With WordPress 4.6

# 0.0.0 
* Added: New plugin - to allow oik-weightcountryshipping-pro to be updated using WordPress Plugin Install


