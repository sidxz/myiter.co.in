=== Dock Gallery FX ===
Contributors: flashxml
Tags: images, photos, widget, post, plugin, posts, sidebar, free, flash, dock, gallery, as3, thumb, effect, thumbs, image, full, screen, text, effects, animation, xml, tooltip, roll, over, out, transition, auto, scroll, css
Requires at least: 2.8.0
Tested up to: 3.0.1
Stable tag: trunk

An original "Dock Gallery". Completely XML customizable without any Flash knowledge. And it's free!

== Description ==

You can integrate it in any website for free without even using Flash. The overall width and height can be customized up to 1680 x 1050 pixels. It's fully customizable and uses the Dock Menu FX component, keeping the same many customizable variables of the menu and adding many gallery properties, text effects and image transitions. You can place the dock menu on any position over the gallery, and you can have it hidden on mouse out. You can configure your XML list of text effects and image transitions. The images in the gallery can be shown according to boxFit, bestFit or forceFit options. The specific properties from the Dock Menu FX like thumbs spacing, scrolling speed, mouse over behaviors and HTML-CSS formatted tooltip are also available.

== Installation ==

Make sure your Wordpress version is greater than 2.8 and your hosting provider is using PHP5.

1. There are two files to download: [WordPress Plugin](http://downloads.wordpress.org/plugin/dock-gallery-fx.zip "Dock Gallery FX Plugin") (that you have to install and activate) & [Free package](http://www.flashxml.net/free/download/dock-gallery.zip "Dock Gallery FX")
2. Create a new folder inside your **wp-content** folder called **flashxml**, inside this folder create a new one called **dock-gallery-fx** and copy the content of the **free package** there
3. If you copied the **free package** to a location different than the one above, go to **Dock Gallery FX** from the **Settings** tab in your **WordPress Dashboard** and update the path accordingly
4. Add `[dock-gallery-fx width="600" height="400"][/dock-gallery-fx]` where you want the Flash to show up in your post/page. Don't forget to provide your own width and height values, since 600 and 400 are just examples
5. If you want to make the Dock Gallery FX part of your theme, edit the template files and add `<?php dockgalleryfx_echo_embed_code(600, 400); ?>` where you want it to show up
6. Go to [FlashXML.net](http://www.flashxml.net/ "Free Flash Components") and [customize your Dock Gallery FX](http://www.flashxml.net/dock-gallery.html "Dock Gallery FX") using the Live Demo. Generate the `settings.xml` text and use it to overwrite `wp-content/flashxml/dock-gallery-fx/settings.xml`, `wp-content/flashxml/dock-gallery-fx/dockMenu/settings.xml` and `wp-content/flashxml/dock-gallery-fx/holder/settings.xml` files accordingly
7. To use your own images, upload them to `wp-content/flashxml/dock-gallery-fx/images/` and update the `wp-content/flashxml/dock-gallery-fx/images/thumbs.xml` and `wp-content/flashxml/dock-gallery-fx/images/big.xml` files accordingly

= No Flash support text =

To support visitors without Adobe Flash Player, you can provide alternative content by adding the text between `[dock-gallery-fx width="600" height="400"]` and `[/dock-gallery-fx]`. If you made the Flash part of your theme, add the text as **the third argument** of the `dockgalleryfx_echo_embed_code()` function call (for example `<?php dockgalleryfx_echo_embed_code(600,400,"Alternative content"); ?>`).

= Additional settings file =

To embed the Dock Gallery FX more than once, you will need another set of settings file and (probably) another set of images. Let's assume your new files are called `settings2.xml`. Add `[dock-gallery-fx width="600" height="400" settings="settings2.xml"][/dock-gallery-fx]` where you want the Flash to show up in your post/page. If you made the Flash part of your theme, add the file name as **the fourth argument** of the `dockgalleryfx_echo_embed_code()` function call (for example `<php dockgalleryfx_echo_embed_code(600,400,"Alternative content","settings2.xml"); >`).

= Getting rid of the FlashXML.net label =

To remove the FlashXML.net label from the top-left corner you'll need to buy the [paid package](http://www.flashxml.net/dock-gallery.html" Dock Gallery FX"). Once you'll do that, simply use the SWF file from the paid package to overwrite the SWF file from the `wp-content/flashxml/dock-gallery-fx/` folder.

== Screenshots ==

1. The Live Demo on [FlashXML.net](http://www.flashxml.net/dock-gallery.html "Dock Gallery FX") is the utility that helps easily customize your Dock Gallery FX to fit all your needs.