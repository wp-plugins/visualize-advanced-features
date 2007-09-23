<?php
/*
Plugin Name: ST Visualize Advanced Features
Plugin URI: http://www.solo-technology.com/blog/2007/02/28/first-release-visualize-advanced-features/
Description: Show the advanced options button on the WYSIWYG editor all the time.  Conceived by Chris Kasten.  Efficient code from <a href="http://www.blogitude.com/">Mark Steel</a>.  <strong>Not needed with WordPress 2.3 and higher</strong>
Version: .04
Author: Chris Kasten
Author URI: http://www.solo-technology.com/blog/

 ========================================================================== */

/*
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 */

add_filter('mce_buttons', 'st_addAdvanced', 0);
function st_addAdvanced($buttons) {
	$x=$buttons[21];
	$buttons[21]='wp_adv';
	$buttons[22]=$x;
	return $buttons;
}
?>