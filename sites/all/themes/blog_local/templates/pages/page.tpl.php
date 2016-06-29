<?php

/**
 * @file
 * Bartik's theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template normally located in the
 * modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $hide_site_name: TRUE if the site name has been toggled off on the theme
 *   settings page. If hidden, the "element-invisible" class is added to make
 *   the site name visually hidden, but still accessible.
 * - $hide_site_slogan: TRUE if the site slogan has been toggled off on the
 *   theme settings page. If hidden, the "element-invisible" class is added to
 *   make the site slogan visually hidden, but still accessible.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['featured']: Items for the featured region.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['triptych_first']: Items for the first triptych.
 * - $page['triptych_middle']: Items for the middle triptych.
 * - $page['triptych_last']: Items for the last triptych.
 * - $page['footer_firstcolumn']: Items for the first footer column.
 * - $page['footer_secondcolumn']: Items for the second footer column.
 * - $page['footer_thirdcolumn']: Items for the third footer column.
 * - $page['footer_fourthcolumn']: Items for the fourth footer column.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see bartik_process_page()
 * @see html.tpl.php
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
  <head>
    <title>960 Robots | Making Drupal look good</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" media="all" href="css/reset.css" />
    <link type="text/css" rel="stylesheet" media="all" href="css/960.css" />
    <link type="text/css" rel="stylesheet" media="all" href="css/main.css" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.autofill.js"></script>
    <script type="text/javascript" src="js/javascript.js"></script>
  </head>
  <body>

    <!-- header starts-->
    <div id="header-wrap">
      <div id="header" class="container_16">
        <div id="header-main">
          <h1 id="logo-text"><a href="#">960 Robots</a></h1>
          <p id="slogan">Making Drupal look good</p>
        </div><!-- navigation -->
        <div id="nav">
          <ul>
            <li class="active"><a href="#" title="" class="active">Home</a></li>
            <li><a href="#" title="About Us">About</a></li>
            <li><a href="#">Images</a></li>
            <li><a href="#" title="">Sign in</a></li>
          </ul>
        </div>
        <div id="block-search-form">
          <form action="/drupal7/" method="post" id="search-block-form" accept-charset="UTF-8">
            <div>
              <div class="container-inline">
                <div class="form-item form-type-textfield form-item-search-block-form">
                  <label class="element-invisible" for="edit-search-block-form--2">Search </label>
                  <input title="Enter the terms you wish to search for." type="text" id="edit-search-block-form--2" name="search_block_form" value="" size="15" maxlength="128" class="form-text" />
                </div>
                <div class="form-actions form-wrapper" id="edit-actions">
                  <input type="submit" id="edit-submit" name="op" value="Search" class="form-submit" />
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- header ends here -->
    
    <!-- content starts -->
    <div id="content-wrapper" class="container_16">

    	<div id="breadcrumb" class="grid_16"><a href="#">Home</a></div>

      <!-- main -->
      <div id="main" class="grid_8">
        <div id="content-output">            
          <div class="post">
            <h2 class="title"><a href="#">Facilisi Mos Vel Proprius</a></h2>
            <div class="post-info">Posted by <a href="#">Jennifer Robbins</a> | Filed under: <span class="tags"><a href="#">dagakig</a> <a href="#">sichudadrel</a> <a href="#">stetha</a> <a href="#">swoshaloca</a></span></div>
            <div class="content">
              <div class="dateblock">
                <span class="month">Apr</span>
                <span class="day">4</span>
                <span class="year">2009</span>
              </div>
              <p>Refero uxor vero. Commoveo singularis minim odio tincidunt lenis odio praesent. Vindico letalis huic pneum comis nimis tego. Diam te eum ulciscor ibidem typicus. Consectetuer iaceo veniam magna sudo illum abbas damnum.Olim vindico pecus vulputate. Tego consectetuer wisi diam secundum ulciscor. Natu valde singularis virtus mos tum magna. Vicis gemino importunus aptent refoveo. Oppeto hendrerit valetudo modo virtus dolor accumsan causa pagus refero. Gemino tincidunt suscipere appellatio ex commodo.</p>
            </div>
            <div class="postmeta">
              <a href="#" title="Read the rest of Commodo Jumentum.">Read more</a> | <a href="#" title="">22 comments</a>
            </div>
          </div>
        </div>
        <div class="post">
          <h2 class="title"><a href="#">Vulpes Interdico Sit Premo Validus Minim Blandit Eum</a></h2>
          <div class="post-info">Posted by <a href="#">Jeff Robbins</a> | Filed under: <span class="tags"><a href="#">tags</a> <a href="#">samples</a> <a href="#">wabawaba</a></span></div>
          <div class="content">
            <div class="dateblock">
              <span class="month">Apr</span>
              <span class="day">3</span>
              <span class="year">2009</span>
            </div>
            <p>Hendrerit pneum autem vero modo praesent antehabeo laoreet quadrum. Importunus imputo nobis. Saluto qui quae valetudo in eum. Uxor quibus imputo nobis tation abico cogo haero.</p>
            <p>Erat iriure persto rusticus virtus antehabeo abbas quae ibidem erat. Quibus pecus velit diam paulatim abbas secundum elit proprius minim. Feugiat proprius appellatio. Genitus interdico accumsan. Ille pala amet. Antehabeo abico vel mauris. Torqueo euismod ludus ulciscor uxor letalis.</p>
            <p>Capto olim sudo aliquam caecus paulatim ille dolor ulciscor suscipit. Vindico vero plaga inhibeo meus ibidem secundum.</p>
          </div>
          <div class="postmeta">
            <a href="#" title="Read the rest of Vulpes Interdico Sit Premo Validus Minim Blandit Eum.">Read more</a> | <a href="#" title="">8 comments</a>
          </div>
        </div>
        <div>
          <div class="post">
            <h2 class="title"><a href="#">Commodo Jumentum</a></h2>
            <div class="post-info">Posted by <a href="#">Jennifer Robbins</a> | Filed under <span class="tags"><a href="#">test</a>, <a href="#">internet</a></span></div>
            <div class="content">
              <div class="dateblock">
                <span class="month">Mar</span>
                <span class="day">31</span>
                <span class="year">2009</span>
              </div>
              <p>Feugiat dolor capto pecus persto defui sit. Camur turpis metuo patria validus proprius utrum abdo. Abbas jus quidem blandit metuo.Ludus conventio molior tego velit. Ymo valetudo wisi erat incassum vero. Pneum augue virtus pertineo ad humo voco vulputate. Ex loquor jumentum mos probo sino haero neo abluo. Vereor gilvus dolus ideo caecus sino pagus mauris. Suscipit nimis vindico.Magna accumsan inhibeo quae consectetuer. Mauris iriure aptent jumentum dolus nostrud. Similis quidne pneum singularis lobortis ludus vel.</p>
            </div>
            <div class="postmeta">
              <a href="#" title="Read the rest of Commodo Jumentum.">Read more</a> | <a href="#" title="">22 comments</a>
            </div>
          </div>
        </div><!-- /#content-output -->
      </div>
      <!-- main ends here -->

      <!-- sidebars starts here -->
      <div id="sidebars" class="grid_8">

        <!-- left sidebar starts here -->
        <div class="grid_4 alpha sidebar-left">
          <div class="block">
            <h3 class="title">Popular</h3>
            <ul>
              <li><a href="#">Jumentum Aptent Aliquip Occuro Iusto Quia Aliquip Tamen</a></li>
              <li><a href="#">Jumentum Aptent Aliquip Occuro Iusto Quia Aliquip Tamen</a></li>
              <li><a href="#">Jumentum Aptent Aliquip Occuro Iusto Quia Aliquip Tamen</a></li>
              <li><a href="#">Jumentum Aptent Aliquip Occuro Iusto Quia Aliquip Tamen</a></li>
              <li><a href="#">Jumentum Aptent Aliquip Occuro Iusto Quia Aliquip Tamen</a></li>
            </ul>
            <div class="more-link"><a href="#">more</a></div>
          </div>

          <div class="block">
            <h3 class="title">Our sponsors</h3>
            <div class="content">
              <p>Omnis bonorum ne has, has etiam nihil facilisi ne, his singulis intellegat ea. Vim consul laudem quaestio in, no nobis dolores comprehensam duo, quot elit molestie et sea.</p>
              <ul>
                <li>
                  <a href="#">PHP wackiness<br />
                  <span>Consistency in a programming language? You must be joking.</span></a>
                </li>
                <li>
                  <a href="#">CSS frustrations<br />
                  <span>More lucrative than Rubic's Cube, but slightly more challenging.</span></a>
                </li>
                <li>
                  <a href="#">Internet Explorer incompatibilities<br />
                  <span>Just when everything was looking great...</span></a>
                </li>
              </ul>
            </div>
          </div>

          <div class="block">
            <h3 class="title">
              Quote of the moment
            </h3>
            <div class="content">
              <p>
                “Nunc vel velit feugiat odio pulvinar vestibulum. Etiam pellentesque viverra orci. Vestibulum tellus tellus, elementum sit amet, venenatis at, scelerisque non, arcu.” – Horace
              </p>
            </div>
          </div>

        </div>
        <!-- left sidebar ends here -->

        <!-- right sidebar starts here -->
        <div class="grid_4 omega sidebar-right">

          <div class="block">
            <h3 class="title">Featured</h3>
            <div class="featured-item">
              <h4><a href="#">Hos Rusticus Jus Olim</a></h4>
              <p>Iriure antehabeo populus. Molior loquor ad nostrud olim loquor tation lucidus. Neque iustum inhibeo diam iustum verto sino dolus validus si. Meus oppeto ymo comis obruo ibidem meus...</p>
            </div>
            <div class="featured-item">
              <h4><a href="#">Hos Rusticus Jus Olim</a></h4>
              <p>Iriure antehabeo populus. Molior loquor ad nostrud olim loquor tation lucidus. Neque iustum inhibeo diam iustum verto sino dolus validus si. Meus oppeto ymo comis obruo ibidem meus...</p>
            </div>
            <div class="featured-item">
              <h4><a href="#">Hos Rusticus Jus Olim</a></h4>
              <p>Iriure antehabeo populus. Molior loquor ad nostrud olim loquor tation lucidus. Neque iustum inhibeo diam iustum verto sino dolus validus si. Meus oppeto ymo comis obruo ibidem meus...</p>
            </div>
            <div class="featured-item">
              <h4><a href="#">Hos Rusticus Jus Olim</a></h4>
              <p>Iriure antehabeo populus. Molior loquor ad nostrud olim loquor tation lucidus. Neque iustum inhibeo diam iustum verto sino dolus validus si. Meus oppeto ymo comis obruo ibidem meus...</p>
            </div>
          </div>

        </div>
        <!-- right sidebar ends here -->

      </div>
      <!-- sidebars end here -->

    </div>
    <!-- content ends here -->

    <!-- footer starts here -->
    <div id="footer-wrapper" class="container_16">

      <!-- footer top starts here -->
      <div id="footer-content">

        <!-- footer left starts here -->
        <div class="grid_8" id="footer-left">
          <div class="block">
            <h3 class="title">Elsewhere on the web</h3>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit amet enim. Suspendisse id velit vitae ligula volutpat condimentum. Aliquam erat volutpat.</p>
              <ul class="footer-list">
                <li><a href="#">Lullabot - <span>Makers of fine Drupal products and services.</span></a></li>
                <li><a href="#">The Lullabot Podcast - <span>Listen to Drupal!</span></a></li>
                <li><a href="#">Do It With Drupal - <span>Learn Drupal from the people who wrote it.</span></a></li>
                <li><a href="#">Drupal.org - <span>Everything Drupal.</span></a></li>
                <li><a href="#">Drupal Groups - <span>Find Drupal people near you.</span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- footer left ends here -->

        <!-- footer right starts here -->
        <div class="grid_8" id="footer-right">
          <div class="block">
            <h3 class="title">Recent images</h3>
            <table>
              <tr class="row-1 row-first">
                <td><a href="#"><img src="images/thumbs/IMG_5473.jpg" alt="" title="" width="40" height="40" /></a></td>
                <td><a href="#"><img src="images/thumbs/IMG_5487.jpg" alt="" title="" width="40" height="40" /></a></td>
                <td><a href="#"><img src="images/thumbs/IMG_5485.jpg" alt="" title="" width="40" height="40" /></a></td>
                <td><a href="#"><img src="images/thumbs/IMG_5463.jpg" alt="" title="" width="40" height="40" /></a></td>
                <td><a href="#"><img src="images/thumbs/IMG_5494.jpg" alt="" title="" width="40" height="40" /></a></td>
              </tr>
            </table>
          </div>
          <div class="block">
            <h3 class="title">About us</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit amet enim. Suspendisse id velit vitae ligula volutpat condimentum. Aliquam erat volutpat. Sed quis velit. Nulla facilisi. Nulla libero. Vivamus pharetra posuere sapien. <a href="#">more...</a></p>
          </div>
        </div>
        <!-- footer right ends here -->

      </div>
      <!-- footer top ends here -->

      <!-- footer bottom starts here -->
      <div id="footer-bottom">
        <p class="bottom-left">All your base are belong to us!</p>
        <ul class="links secondary-links">
          <li><a href="index.html" title="" class="active">Home</a></li>
          <li><a href="rss.xml" title="">RSS Feed</a></li>
          <li><a href="http://jigsaw.w3.org/css-validator/check/referer" title="">CSS</a></li>
          <li><a href="http://validator.w3.org/check/referer" title="">XHTML</a></li>
        </ul>
      </div>
      <!-- footer bottom ends here -->

    </div>
    <!-- footer ends here -->

  </body>
</html>