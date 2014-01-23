<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Moodle's Clean theme, an example of how to make a Bootstrap theme
 *
 * DO NOT MODIFY THIS THEME!
 * COPY IT FIRST, THEN RENAME THE COPY AND MODIFY IT INSTEAD.
 *
 * For full information about creating Moodle themes, see:
 * http://docs.moodle.org/dev/Themes_2.0
 *
 * @package   theme_sparkle
 * @copyright 2013 Moodle, moodle.org
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
 
 function theme_sparkle_page_init(moodle_page $page) {
    $page->requires->jquery();
    $page->requires->jquery_plugin('modernizr', 'theme_sparkle');
    $page->requires->jquery_plugin('cslider', 'theme_sparkle');
    $page->requires->jquery_plugin('custom', 'theme_sparkle');
    $page->requires->jquery_plugin('alert', 'theme_sparkle');
    $page->requires->jquery_plugin('carousel', 'theme_sparkle');
    $page->requires->jquery_plugin('collapse', 'theme_sparkle');
    $page->requires->jquery_plugin('modal', 'theme_sparkle');
    $page->requires->jquery_plugin('scrollspy', 'theme_sparkle');
    $page->requires->jquery_plugin('tab', 'theme_sparkle');
    $page->requires->jquery_plugin('tooltip', 'theme_sparkle');
    $page->requires->jquery_plugin('transition', 'theme_sparkle');

}

/**
 * Parses CSS before it is cached.
 *
 * This function can make alterations and replace patterns within the CSS.
 *
 * @param string $css The CSS
 * @param theme_config $theme The theme config object.
 * @return string The parsed CSS The parsed CSS.
 */
function theme_sparkle_process_css($css, $theme) {

    // Set the background image for the logo.
    $logo = $theme->setting_file_url('logo', 'logo');
    $css = theme_sparkle_set_logo($css, $logo);
    
    // Set custom CSS.
    if (!empty($theme->settings->customcss)) {
        $customcss = $theme->settings->customcss;
    } else {
        $customcss = null;
    }
    $css = theme_sparkle_set_customcss($css, $customcss);
    
    //set themebackgroundcolor
    if (!empty($theme->settings->themebackgroundcolor)) {
        $themebackgroundcolor = $theme->settings->themebackgroundcolor;
    } else {
        $themebackgroundcolor = null;
    }
    $css = theme_sparkle_set_themebackgroundcolor($css, $themebackgroundcolor);
    
    // Set the background image for the theme.
    $pagebackground = $theme->setting_file_url('pagebackground', 'pagebackground');
    $css = theme_sparkle_set_pagebackground($css, $pagebackground);
    // Set the background image for the login page.
    $loginbg = $theme->setting_file_url('loginbg', 'loginbg');
    $css = theme_sparkle_set_loginbg($css, $loginbg);



    //set themecolor
    if (!empty($theme->settings->themecolor)) {
        $themecolor = $theme->settings->themecolor;
    } else {
        $themecolor = null;
    }
    $css = theme_sparkle_set_themecolor($css, $themecolor);

    //set themelinkcolor
    if (!empty($theme->settings->themelinkcolor)) {
        $themelinkcolor = $theme->settings->themelinkcolor;
    } else {
        $themelinkcolor = null;
    }
    $css = theme_sparkle_set_themelinkcolor($css, $themelinkcolor);

    //set themehovercolor
    if (!empty($theme->settings->themehovercolor)) {
        $themehovercolor = $theme->settings->themehovercolor;
    } else {
        $themehovercolor = null;
    }
    $css = theme_sparkle_set_themehovercolor($css, $themehovercolor);

    //set themeheaderbackgroundcolor1
    if (!empty($theme->settings->themeheaderbackgroundcolor1)) {
        $themeheaderbackgroundcolor1 = $theme->settings->themeheaderbackgroundcolor1;
    } else {
        $themeheaderbackgroundcolor1 = null;
    }
    $css = theme_sparkle_set_themeheaderbackgroundcolor1($css, $themeheaderbackgroundcolor1);

    //set themeheaderbackgroundcolor2
    if (!empty($theme->settings->themeheaderbackgroundcolor2)) {
        $themeheaderbackgroundcolor2 = $theme->settings->themeheaderbackgroundcolor2;
    } else {
        $themeheaderbackgroundcolor2 = null;
    }
    $css = theme_sparkle_set_themeheaderbackgroundcolor2($css, $themeheaderbackgroundcolor2);

    //set themeheadercolor
    if (!empty($theme->settings->themeheadercolor)) {
        $themeheadercolor = $theme->settings->themeheadercolor;
    } else {
        $themeheadercolor = null;
    }
    $css = theme_sparkle_set_themeheadercolor($css, $themeheadercolor);

    //set themeiconcolor
    if (!empty($theme->settings->themeiconcolor)) {
        $themeiconcolor = $theme->settings->themeiconcolor;
    } else {
        $themeiconcolor = null;
    }
    $css = theme_sparkle_set_themeiconcolor($css, $themeiconcolor);


    return $css;
}

/**
 * Adds the logo to CSS.
 *
 * @param string $css The CSS.
 * @param string $logo The URL of the logo.
 * @return string The parsed CSS
 */
function theme_sparkle_set_logo($css, $logo) {
    $tag = '[[setting:logo]]';
    $replacement = $logo;
    if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

/**
 * Serves any files associated with the theme settings.
 *
 * @param stdClass $course
 * @param stdClass $cm
 * @param context $context
 * @param string $filearea
 * @param array $args
 * @param bool $forcedownload
 * @param array $options
 * @return bool
 */
function theme_sparkle_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = array()) {
    if ($context->contextlevel == CONTEXT_SYSTEM) {
        $theme = theme_config::load('sparkle');
        if ($filearea === 'logo') {
            return $theme->setting_file_serve('logo', $args, $forcedownload, $options);
        } else if ($filearea === 'pagebackground') {
            return $theme->setting_file_serve('pagebackground', $args, $forcedownload, $options);
        } else if ($filearea === 'loginbg') {
            return $theme->setting_file_serve('loginbg', $args, $forcedownload, $options);
        } else if ($filearea === 'slide1image') {
            return $theme->setting_file_serve('slide1image', $args, $forcedownload, $options);
        } else if ($filearea === 'slide2image') {
            return $theme->setting_file_serve('slide2image', $args, $forcedownload, $options);
        } else if ($filearea === 'slide3image') {
            return $theme->setting_file_serve('slide3image', $args, $forcedownload, $options);
        } else if ($filearea === 'slide4image') {
            return $theme->setting_file_serve('slide4image', $args, $forcedownload, $options);

        } else {
            send_file_not_found();
        }
    } else {
        send_file_not_found();
    }
}

/**
 * Adds any custom CSS to the CSS before it is cached.
 *
 * @param string $css The original CSS.
 * @param string $customcss The custom CSS to add.
 * @return string The CSS which now contains our custom CSS.
 */
function theme_sparkle_set_customcss($css, $customcss) {
    $tag = '[[setting:customcss]]';
    $replacement = $customcss;
    if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}
/* Settings for colour schemes
 * --------------------------- */
function theme_sparkle_set_pagebackground($css, $pagebackground) {
    global $CFG, $OUTPUT;
    $tag = '[[setting:pagebackground]]';
    $replacement = $pagebackground;
    if (is_null($replacement)) {
        $replacement = $OUTPUT->pix_url('pagebackground', 'theme');
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}
function theme_sparkle_set_loginbg($css, $loginbg) {
    global $CFG, $OUTPUT;
    $tag = '[[setting:loginbg]]';
    $replacement = $loginbg;
    if (is_null($replacement)) {
        $replacement = $OUTPUT->pix_url('loginbg', 'theme');
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

function theme_sparkle_set_themebackgroundcolor($css, $themebackgroundcolor) {
    $tag = '[[setting:themebackgroundcolor]]';
    $replacement = $themebackgroundcolor;
    if (is_null($replacement)) {
        $replacement = '#ffffff';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function theme_sparkle_set_themecolor($css, $themecolor) {
    $tag = '[[setting:themecolor]]';
    $replacement = $themecolor;
    if (is_null($replacement)) {
        $replacement = '#1e1e1e';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function theme_sparkle_set_themelinkcolor($css, $themelinkcolor) {
    $tag = '[[setting:themelinkcolor]]';
    $replacement = $themelinkcolor;
    if (is_null($replacement)) {
        $replacement = '#193D8B';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function theme_sparkle_set_themehovercolor($css, $themehovercolor) {
    $tag = '[[setting:themehovercolor]]';
    $replacement = $themehovercolor;
    if (is_null($replacement)) {
        $replacement = '#191970';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function theme_sparkle_set_themeheaderbackgroundcolor1($css, $themeheaderbackgroundcolor1) {
    $tag = '[[setting:themeheaderbackgroundcolor1]]';
    $replacement = $themeheaderbackgroundcolor1;
    if (is_null($replacement)) {
        $replacement = '#F0F8FF';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function theme_sparkle_set_themeheaderbackgroundcolor2($css, $themeheaderbackgroundcolor2) {
    $tag = '[[setting:themeheaderbackgroundcolor2]]';
    $replacement = $themeheaderbackgroundcolor2;
    if (is_null($replacement)) {
        $replacement = '#B0C4DE';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function theme_sparkle_set_themeheadercolor($css, $themeheadercolor) {
    $tag = '[[setting:themeheadercolor]]';
    $replacement = $themeheadercolor;
    if (is_null($replacement)) {
        $replacement = '#193D8B';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function theme_sparkle_set_themeiconcolor($css, $themeiconcolor) {
    $tag = '[[setting:themeiconcolor]]';
    $replacement = $themeiconcolor;
    if (is_null($replacement)) {
        $replacement = '#666666';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Returns an object containing HTML for the areas affected by settings.
 *
 * @param renderer_base $output Pass in $OUTPUT.
 * @param moodle_page $page Pass in $PAGE.
 * @return stdClass An object with the following properties:
 *      - navbarclass A CSS class to use on the navbar. By default ''.
 *      - heading HTML to use for the heading. A logo if one is selected or the default heading.
 *      - footnote HTML to use as a footnote. By default ''.
 */
function theme_sparkle_get_html_for_settings(renderer_base $output, moodle_page $page) {
    global $CFG;
    $return = new stdClass;

    $return->navbarclass = '';
    if (!empty($page->theme->settings->invert)) {
        $return->navbarclass .= ' navbar-inverse';
    }

    $tempheading = '';
    $tempheading .= '<div class="pageheading">';
    $tempheading .= html_writer::link($CFG->wwwroot, '', array('title' => get_string('home'), 'class' => 'logo'));
    $tempheading .= $output->page_heading();
    $tempheading .= '</div>';
    $return->heading = $tempheading;
    $return->footnote = '';
    if (!empty($page->theme->settings->footnote)) {
        $return->footnote = '<div class="footnote text-center">'.$page->theme->settings->footnote.'</div>';
    }

    return $return;
}

