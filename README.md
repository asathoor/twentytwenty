# Per's Commented version for Multimedia Students

I have forked the theme, but it is shipped with WordPress. This fork is meant as a reference for child theme development.

## The files

# Understanding the files

In the list below you can read about the the most important files of this theme and what they do. If you want to tweak one of them the general recipe is:

* A) Copy the file to your child theme folder.
* B) If it's found in a subfolder make sure that you have a similar directory structure in the child theme.
* C) In the child theme folder: edit the file you copied.

For instance if you want to add content to the footer, you'll have to copy the footer.php to the childtheme. Then you can edit the file.

## File list

### 404.php

"Page does not exist" or a general error page. A well designed 404 page will help the user. Make sure that they'll find a search form, see searchform.php.

### comments.php

Display comments for pages / posts

### footer.php

The stuff found in the footer section.

### functions.php

Don't copy this file to your child theme folder. If you want to add funtionality you must edit the function.php file in your child theme folder.

### header.php

All the stuff in the header from the start of the html more or less to the menu.

### index.php

Here is the main template file. A rather [long series of conditionals](https://github.com/asathoor/twentytwenty/blob/master/index.php#L20-L112) decide which template parts should be loaded. The main content is looped out into this tag:

~~~~
<main id="site-content" role="main">

</main>
~~~~

The PHP will produce semantic HTML. If you want to tweak the file, or find out which ids or classes belong to a section, you should search out relevant HTML tags, e.g.

* The `<header>` [is here](https://github.com/asathoor/twentytwenty/blob/master/index.php#L58-L72)
* The posts are looped out [here](https://github.com/asathoor/twentytwenty/blob/master/index.php#L77-L90)
* If it's a search the relevant template part will be loaded [here](https://github.com/asathoor/twentytwenty/blob/master/index.php#L77-L90)

You can use this page as a model when you want to add costum pages or templates. Please refer to the WP template hierarchy in the Developer's Handbook:

* [The WordPress Template Hierarchy](https://wphierarchy.com/)
* [Developer's Handbook](https://developer.wordpress.org/themes/basics/template-hierarchy/)


### postcss.config.js

Script.

### print.css

If print styles are needed edit the style.css in your child theme folder.

### screenshot.png

Download this file. Edit the file either preferably in GIMP, or if you cannot help it use Photoshop. Upload your creative screenshot.png to your childtheme's folder on the web host. Now have a look at the themes in your Dashboard.

### searchform.php

You can tweak the search form here. [Get more info about it here](https://developer.wordpress.org/reference/functions/get_search_form/).

### singular.php

The template for displaying single posts and pages.

Used in the template hierarchy if you don't have a page.php. It is used for full width templates, see the *templates/* comment.

### style.css

Here are the styles that the child theme will import via it's functions.php. Don't copy this file to your child theme folder. Add whatever changes you need in the childtheme folder's style.css.

### style-rtl.css

See the style.css comment.

### templates/

Here you find a few interesting files:

* template-cover.php
* template-full-width.php

The last file is a fine example of WordPress includes. The template will simply import singular.php:

~~~~
<?php
get_template_part( 'singular' );
~~~~

----


## Original README.md

**This theme has been merged to core. Any future issues or contributions should be created on the WordPress trac instance**

https://core.trac.wordpress.org/search?q=twenty+twenty%3A

**If you open a ticket please prefix it with `Twenty Twenty:` so they are easy to find and work through.**

---

**Theme Name:** Twenty Twenty  
**Theme URI:** https://wordpress.org/themes/twentytwenty/  
**Contributors:** the WordPress team  
**Requires at least:** WordPress 4.7  
**Version:** 1.0  
**License:** GPLv2 or later  
**License URI:** http://www.gnu.org/licenses/gpl-2.0.html  
**Tags:** blog, one-column, custom-background, custom-colors, custom-logo, custom-menu, editor-style, featured-images, footer-widgets, full-width-template, rtl-language-support, sticky-post, theme-options, threaded-comments, translation-ready, block-styles, wide-blocks, accessibility-ready

## Description

Our default theme for 2020 is designed to take full advantage of the flexibility of the block editor. Organizations and businesses have the ability to create dynamic landing pages with endless layouts using the group and column blocks. The centered content column and fine-tuned typography also makes it perfect for traditional blogs. Complete editor styles give you a good idea of what your content will look like, even before you publish. You can give your site a personal touch by changing the background colors and the accent color in the Customizer. The colors of all elements on your site are automatically calculated based on the colors you pick, ensuring a high, accessible color contrast for your visitors.

## Installation

1. In your admin panel, go to Appearance -> Themes and click the 'Add New' button.
2. Type in Twenty Twenty in the search form and press the 'Enter' key on your keyboard.
3. Click on the 'Activate' button to use your new theme right away.
4. Go to https://wordpress.org/support/article/twenty-twenty/ for a guide on how to customize this theme.
5. Navigate to Appearance > Customize in your admin panel and customize to taste.

## Copyright

Twenty Twenty WordPress Theme, Copyright 2019 WordPress.org. Twenty Twenty is distributed under the terms of the GNU GPL.

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

Twenty Twenty is derived from the Chaplin Theme, Copyright 2019 Anders Norén. Chaplin Theme is distributed under the terms of the GNU GPL version 2.0.

Twenty Twenty bundles the following third-party resources:

Illustrations in screenshot.png by Tammie Lister
License: Creative Commons Zero (CC0), https://creativecommons.org/publicdomain/zero/1.0/  

Inter Font  
Copyright (c) 2016-2019 The Inter Project Authors (me@rsms.me)  
License: SIL Open Font License, 1.1, https://opensource.org/licenses/OFL-1.1  
Source: https://rsms.me/inter/  

Bespoke Icons Created For Twenty Twenty  
License: Creative Commons Zero (CC0), https://creativecommons.org/publicdomain/zero/1.0/  
List of bespoke icons:  
- Search icon  
- Menu icon  

Feather Icons  
Copyright (c) 2013-2017 Cole Bemis  
License: MIT License, https://opensource.org/licenses/MIT  
Source: https://feathericons.com  
Used for post meta icons, and the link icon in the social menu.  

Social Icons
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Source: WordPress Social Link Block (See wp-includes\blocks\social-link.php)

Code from Twenty Nineteen  
Copyright (c) 2018 WordPress.org  
License: GPLv2  
Source: https://wordpress.org/themes/twentynineteen/  
Included as part of the following classes and functions:  
- TwentyTwenty_SVG_Icons  
- twentytwenty_the_theme_svg()  
- twentytwenty_get_theme_svg()  
- twentytwenty_nav_menu_social_icons()  

Code from Twenty Seventeen  
Copyright (c) 2016 WordPress.org  
License: GPLv2  
Source: https://wordpress.org/themes/twentyseventeen/  
Included as part of the following classes and functions:  
- twentytwenty_unique_id()  

Underscores  
https://underscores.me/, (C) 2012-2019 Automattic, Inc., [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)  

## Changelog  

### 1.0  

* Released: November 12, 2019  

Initial release  
