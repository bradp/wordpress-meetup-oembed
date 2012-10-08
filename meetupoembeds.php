<?php
/*
Plugin Name: Meetup.com oEmbeds - Easily embed events
Description: Simply paste in a Meetup.com URL, and it will display the event, group, ect. 
Version: 1.0
Author: Brad Parbs
Author URI: http://bradparbs.com/
*/

wp_oembed_add_provider('http://www.meetup.com/*','http://api.meetup.com/oembed?url=');
wp_oembed_add_provider('http://meetup.com/*','http://api.meetup.com/oembed?url=');
wp_oembed_add_provider('http://www.wpmke.com/*','http://api.meetup.com/oembed?url='); //love to #wpmke
wp_oembed_add_provider('http://www.mkepug.org/*','http://api.meetup.com/oembed?url=');