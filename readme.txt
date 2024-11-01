=== Suppress Shortcodes ===
Contributors: dartiss
Donate link: http://artiss.co.uk/donate
Tags: interpret, prevent, shortcode, suppress
Requires at least: 2.5
Tested up to: 4.7
Stable tag: 1.0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A way to suppress shortcodes from being actioned in a post on an individual basis

== Description ==

Writing a technical post about WordPress and wanting to mention a shortcode that you actually use? It's not easy to do it, as the shortcode will get interpreted each time.

Well, this very simply plugin provides a shortcode that you can wrap around any other shortcode to prevent it from being interpreted and, hence, actioned.

Simply use the shortcode `[noin]` around anywhere that you want to prevent from being interpreted. For example...

`And use the [noin][youtube][/noin] shortcode to embed a YouTube video.`

This will display, even if you have the YouTube shortcode in use, as...

`And use the [youtube] shortcode to embed a YouTube video.`

No parameters, no admin screens, just simplicity. Indeed, the original version of this was just one line of code but, adding having it to all my sites, I thought it was time to share!

Technical specification...

* Designed for both single and multi-site installations
* PHP7 compatible
* Fully internationalized, ready for translations **If you would like to add a translation to his plugin then please head to our [Translating WordPress](https://translate.wordpress.org/projects/wp-plugins/suppress-shortcodes "Translating WordPress") page**
* WCAG 2.0 Compliant at AA level

But, most importantly, there are no premium features and no adverts - this is 100% complete and free! 

== Installation ==

Suppress Shortcodes can be found and installed via the Plugin menu within WordPress administration (Plugins -> Add New). Alternatively, it can be downloaded from WordPress.org and installed manually...

1. Upload the entire `suppress-shortcodes` folder to your `wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress administration.

Voila! It's ready to go.

== Changelog ==

[Learn more about my version numbering methodology](http://www.artiss.co.uk/2016/09/wordpress-plugin-versioning/ "WordPress Plugin Versioning")

= 1.0.1 =
* Enhancement: After WordPress 4.6 you no longer need to load your text domain, so I don't!

= 1.0 =
* Initial release

== Upgrade Notice ==

= 1.0.1 =
* Minor performance updated for WordPress 4.6 onwards