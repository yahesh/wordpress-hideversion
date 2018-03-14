<?php
  /*
    Plugin Name: HideVersion
    Plugin URI: http://yahe.sh/
    Description: Hides the WordPress version from generated pages.
    Version: 0.1c1
    Author: Yahe
    Author URI: http://yahe.sh/

    this code is based on http://www.wpbeginner.com/wp-tutorials/the-right-way-to-remove-wordpress-version-number/
  */

  /* STOP EDITING HERE IF YOU DO NOT KNOW WHAT YOU ARE DOING */

  // remove generator from HTML head
  remove_action("wp_head", "wp_generator");

  // remove generator from RSS
  function hideversion_returnempty() {
    return "";
  }
  add_filter("the_generator", "hideversion_returnempty");
?>
