1) Unzip the files

2) Copy "urbanhip" folder, from the unzipped archive, to wordpress/wp-content/themes/ and activate the theme from the Admin area.

3) Copy everything from the "plugins" directory to wordpress/wp-content/plugins

4) Copy "flashxml" folder to wordpress/wp-content

5) In the admin area of wordpress, go to "Plugins" menu, and activate the following plugins:   
    - Contact Form 7
    - Dock Gallery FX
    - Kadom Ads Management
    - Photo Flipper FX
    - Photo Gallery FX
    - WP-PageNavi

6) Insert an image into a post:
    - To add an image to your post:    
        a) Click on the "Add an image" icon on the top of the text editor > select an image > Insert into Post > Save all changes
             or
        b) Add it with the help of the shortcodes included in the theme. The shortcodes options appear under the text editor of the post in the Admin Area of the theme.
    
       - To add a featured image (thumbnail) to your posts, first upload it to your media library. Then write your post and, scroll to the "Custom fields" section of the page and add the following custom field(In the name field write: post-img. In the value field, paste the url of the image from the media library). Click on "Add custom field" button, and update the post.

7) Creating a category:
       - To create a category, click on "Posts" > "Categories" and use the form to create a new category.

8) Pages:

	- Create a new page, select "Pages" > click "Add New" to create a new page. 

a) For the Homepage you have 2 choices :

	- Home with Dock Gallery FX component (Create a new page with the name "Home", select the "Home with Dock Gallery FX" template for it and click "Publish".)
	- Home with Photo Gallery FX Component (Create a new page with the name "Home", select the "Home with Photo Gallery FX" template for it and click "Publish".)
	
	If you want to choose one of these to be your front page, go to the Admin Panel > Settings > Reading > Front page displays : A static page (choose this option, and select a page you want your front page to display)

b) Portfolio page:
    - Create a new page, select the "Portfolio" Template (in the right sidebar there is a drop-down labeled "Page Attributes" ) and click "Publish".
    - Create a Category named "Portfolio". All the posts from this category will appear on your "Portfolio" page.
    
c) Blog page:
     - Create a new page, select the "Blog" Template (on the sidebar is a drop-down labeled "Page Attributes" ) and click "Publish".

d) Fullwidth page (no sidebars):
     - Create a new page, select the "Fullwidth" Template (on the sidebar is a drop-down labeled "Page Attributes" ) and click "Publish".

e) Gallery page (no sidebars):
     - Create a new page, select the "Gallery" Template (on the sidebar is a drop-down labeled "Page Attributes" ) and click "Publish".

f) Contact page:
    - Create a new page, select the "Contact" Template and insert the following line into the page content: [contact-form 1 "Contact form 1"] and click "Publish".
    - Then, in the Admin Area, click on "Contact" menu on the left at the bottom, and replace the code from the Form content with the following lines:

    ------------------------------------

    <div class="form_row">
    <label>Your name</label>[text* your-name class:contact_text]
    </div>
    <div class="form_row">
    <label>Your email</label>[email* your-email class:contact_text]
    </div>
    <div class="form_row">
    <label>Your subject</label>[text your-name class:contact_text]
    </div>
    <div class="form_row">
    [textarea your-message]
    </div>
    <div class="form_row">
    [submit class:contact_submit "Submit a message"]
    </div>

    -------------------------------------

    Then click on the "Save" button on the right.

f) For any other page, create a new page and select the "Default Template" or any other existing template.

9) Shortcodes:
    - All available shortcodes can be inserted from the Admin Area, under the text editor of a page or a post.

10) Sidebars and widgets:

    Sidebars:

    There are 4 widget areas for this theme.
    The advantage of using the custom page widget is that you can upload and add content more easily.

    Widget areas:
    
    To add widgets, go to the Admin Area, click on "Appearance" menu > the click on the "Widgets" submenu
    - Main Sidebar - for inner pages (The right sidebar displayed if widgets are added to it) - all kind of widgets can be added to it. The other sidebar will dissapear once you will populate this sidebar.
    - Ads - for inner pages (The right box displayed on the right side of the content, containing the ads) - Kadom Ads Widget is used
    - Social Icons - for inner pages (The right box displayed on the right side of the content, containing social icons) - The text widget is used
    - Blog Sidebar - for the blog page (The right sidebar of the blog page displayed if widgets are added to it) - all kind of widgets can be added to it. The other sidebar will dissapear once you will populate this sidebar.

11) Urbanhip can be translated in other languages through .mo and .po files. For this follow the next steps:

    - Create a "languages" folder in your wp-content.
    - Copy the .mo and .po files for your language from http://svn.automattic.com/wordpress-i18n/ or from another location.
    - Copy them to your "languages" folder in wp-content.
    - In the "wp-config.php" file of your wordpress, change the following line:

        define ('WPLANG', '');
        to
        define ('WPLANG', 'language_LANGUAGE');
        
        For example: define ('WPLANG', 'fr_FR'); - for French

    - In your theme folder, you have a .mo and a .po file. They are for English. For other languages, duplicate the .po file, rename it, change it's header to correspond with your chosen language, and translate the lines it contains. For this, install Poedit, edit the .po file, translate it to your language, and generate a .mo file for it. Both files should be located in your theme folder.

12) Cufon font replacement:
    - Allows you to change the fonts of the whole website, enable or disable cufon, and edit their sizes. This can be done through the Admin Area, the "Urbanhip - Fonts" menu.

This template includes everything you need to get started whether you're using it as a Content Management System, blog or combination of the two.

Click on the last button on the left of the Admin Area, and you can change your top logo, footer logo, skins and copyright information. You can also configure your 404 error message or even get some SEO options.