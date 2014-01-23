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
 * Moodle's sparkle theme, an example of how to make a Bootstrap theme
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

$temp = null;
$settings = null;

defined('MOODLE_INTERNAL') || die;

$ADMIN->add('themes', new admin_category('theme_sparkle', 'sparkle'));

/* "genericsettings" settingpage *
 * ----------------------------- */
$temp = new admin_settingpage('theme_sparkle_generic',  get_string('genericsettings', 'theme_sparkle'));

    // Custom CSS file.
    $name = 'theme_sparkle/customcss';
    $title = get_string('customcss', 'theme_sparkle');
    $description = get_string('customcssdesc', 'theme_sparkle');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Footnote setting.
    $name = 'theme_sparkle/footnote';
    $title = get_string('footnote', 'theme_sparkle');
    $description = get_string('footnotedesc', 'theme_sparkle');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    
    //This is the descriptor for the following settings
    $name = 'theme_sparkle/mydashboardinfo';
    $heading = get_string('mydashboardinfo', 'theme_sparkle');
    $information = get_string('mydashboardinfodesc', 'theme_sparkle');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Toggle dashboard display in custommenu.
    $name = 'theme_sparkle/displaymydashboard';
    $title = get_string('displaymydashboard', 'theme_sparkle');
    $description = get_string('displaymydashboarddesc', 'theme_sparkle');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    //This is the descriptor for the following settings
    $name = 'theme_sparkle/mycoursesinfo';
    $heading = get_string('mycoursesinfo', 'theme_sparkle');
    $information = get_string('mycoursesinfodesc', 'theme_sparkle');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Toggle courses display in custommenu.
    $name = 'theme_sparkle/displaymycourses';
    $title = get_string('displaymycourses', 'theme_sparkle');
    $description = get_string('displaymycoursesdesc', 'theme_sparkle');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Set terminology for dropdown course list
	$name = 'theme_sparkle/mycoursetitle';
	$title = get_string('mycoursetitle','theme_sparkle');
	$description = get_string('mycoursetitledesc', 'theme_sparkle');
	$default = 'course';
	$choices = array(
		'course' => get_string('mycourses', 'theme_sparkle'),
		'unit' => get_string('myunits', 'theme_sparkle'),
		'class' => get_string('myclasses', 'theme_sparkle'),
		'module' => get_string('mymodules', 'theme_sparkle')
	);
	$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);
    
$ADMIN->add('theme_sparkle', $temp);

/* Colour Settings */
    $temp = new admin_settingpage('theme_sparkle_colours', get_string('coloursheading', 'theme_sparkle'));
    $temp->add(new admin_setting_heading('theme_sparkle_colours', get_string('coloursheadingsub', 'theme_sparkle'),
            format_text(get_string('coloursdesc' , 'theme_sparkle'), FORMAT_MARKDOWN)));

    // Logo file setting.
    $name = 'theme_sparkle/logo';
    $title = get_string('logo','theme_sparkle');
    $description = get_string('logodesc', 'theme_sparkle');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Background Image.
    $name = 'theme_sparkle/pagebackground';
    $title = get_string('pagebackground', 'theme_sparkle');
    $description = get_string('pagebackgrounddesc', 'theme_sparkle');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'pagebackground');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Login Page Background Image.
    $name = 'theme_sparkle/loginbg';
    $title = get_string('loginpagebackground', 'theme_sparkle');
    $description = get_string('loginpagebackgrounddesc', 'theme_sparkle');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'loginbg');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Main theme background colour setting.
    $name = 'theme_sparkle/themebackgroundcolor';
    $title = get_string('themebackgroundcolor', 'theme_sparkle');
    $description = get_string('themebackgroundcolordesc', 'theme_sparkle');
    $default = '#ffffff';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Main theme font colour setting.
    $name = 'theme_sparkle/themecolor';
    $title = get_string('themecolor', 'theme_sparkle');
    $description = get_string('themecolordesc', 'theme_sparkle');
    $default = '#1E1E1E';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Main theme link colour setting.
    $name = 'theme_sparkle/themelinkcolor';
    $title = get_string('themelinkcolor', 'theme_sparkle');
    $description = get_string('themelinkcolordesc', 'theme_sparkle');
    $default = '#193D8B';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Main theme hover colour setting.
    $name = 'theme_sparkle/themehovercolor';
    $title = get_string('themehovercolor', 'theme_sparkle');
    $description = get_string('themehovercolordesc', 'theme_sparkle');
    $default = '#191970';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Main theme header background main colour setting.
    $name = 'theme_sparkle/themeheaderbackgroundcolor1';
    $title = get_string('themeheaderbackgroundcolor1', 'theme_sparkle');
    $description = get_string('themeheaderbackgroundcolordesc', 'theme_sparkle');
    $default = '#F0F8FF';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Main theme header background gradient colour setting.
    $name = 'theme_sparkle/themeheaderbackgroundcolor2';
    $title = get_string('themeheaderbackgroundcolor2', 'theme_sparkle');
    $description = get_string('themeheaderbackgroundcolordesc', 'theme_sparkle');
    $default = '#B0C4DE';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Main theme header font colour setting.
    $name = 'theme_sparkle/themeheadercolor';
    $title = get_string('themeheadercolor', 'theme_sparkle');
    $description = get_string('themeheadercolordesc', 'theme_sparkle');
    $default = '#193D8B';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Main theme header icon colour setting.
    $name = 'theme_sparkle/themeiconcolor';
    $title = get_string('themeiconcolor', 'theme_sparkle');
    $description = get_string('themeiconcolordesc', 'theme_sparkle');
    $default = '#666666';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

$ADMIN->add('theme_sparkle', $temp);

    
/* Layout Settings *
 *-----------------*/
    $temp = new admin_settingpage('theme_sparkle_layouts', get_string('layoutsheading', 'theme_sparkle'));
    $temp->add(new admin_setting_heading('theme_sparkle_layouts', get_string('layoutsheadingsub', 'theme_sparkle'),
            format_text(get_string('layoutsdesc' , 'theme_sparkle'), FORMAT_MARKDOWN)));

    //base - onecol - no setting
    //standard - flex+allblocks (default to 3colhg)
    $name = 'theme_sparkle/layoutstandard';
    $title = get_string('layoutstandard', 'theme_sparkle');
    $description = get_string('layoutstandarddescription', 'theme_sparkle');
    $default = 'premainpost';
    $choices = array('premainpost'=>'2 Sidebar columns, pre and post', 'mainprepost'=>'2 Sidebar columns, -post only', 'prepostmain'=>'2 Sidebar columns, -pre only', 'mainside'=>'1 sidebar column, -post only', 'sidemain'=>'1 sidebar column, -pre only', 'mainonly'=>'No sidebars - main content only'); //replace with proper language strings
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    //frontpage - flex+allblocks (default to standard if not set)
    $name = 'theme_sparkle/layoutfrontpage';
    $title = get_string('layoutfrontpage', 'theme_sparkle');
    $description = get_string('layoutfrontpagedescription', 'theme_sparkle');
    $default = '';
    $choices = array(''=>'As Standard', 'premainpost'=>'2 Sidebar columns, pre and post', 'mainprepost'=>'2 Sidebar columns, -post only', 'prepostmain'=>'2 Sidebar columns, -pre only', 'mainside'=>'1 sidebar column, -post only', 'sidemain'=>'1 sidebar column, -pre only', 'mainonly'=>'No sidebars - main content only'); //replace with proper language strings
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Columns Layout - Courses page (default to standard if not set)
    $name = 'theme_sparkle/layoutcourse';
    $title = get_string('layoutcourse', 'theme_sparkle');
    $description = get_string('layoutcoursedescription', 'theme_sparkle');
    $default = '';
    $choices = array(''=>'As Standard','premainpost'=>'2 Sidebar columns, pre and post', 'mainprepost'=>'2 Sidebar columns, -post only', 'prepostmain'=>'2 Sidebar columns, -pre only', 'mainside'=>'1 sidebar column, -post only', 'sidemain'=>'1 sidebar column, -pre only', 'mainonly'=>'No sidebars - main content only'); //replace with proper language strings
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    //course category - flex+allblocks (default to standard if not set)
    $name = 'theme_sparkle/layoutcoursecategory';
    $title = get_string('layoutcoursecategory', 'theme_sparkle');
    $description = get_string('layoutcoursecategorydescription', 'theme_sparkle');
    $default = '';
    $choices = array(''=>'As Standard','premainpost'=>'2 Sidebar columns, pre and post', 'mainprepost'=>'2 Sidebar columns, -post only', 'prepostmain'=>'2 Sidebar columns, -pre only', 'mainside'=>'1 sidebar column, -post only', 'sidemain'=>'1 sidebar column, -pre only', 'mainonly'=>'No sidebars - main content only'); //replace with proper language strings
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    //incourse - flex+allblocks (default to standard layout)
    $name = 'theme_sparkle/layoutincourse';
    $title = get_string('layoutincourse', 'theme_sparkle');
    $description = get_string('layoutincoursedescription', 'theme_sparkle');
    $default = '';
    $choices = array(''=>'As Standard','premainpost'=>'2 Sidebar columns, pre and post', 'mainprepost'=>'2 Sidebar columns, -post only', 'prepostmain'=>'2 Sidebar columns, -pre only', 'mainside'=>'1 sidebar column, -post only', 'sidemain'=>'1 sidebar column, -pre only', 'mainonly'=>'No sidebars - main content only'); //replace with proper language strings
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    //admin - flex+sideblocks+hiddenblocks ie no top/bottom (default to 2colpre)
    $name = 'theme_sparkle/layoutadmin';
    $title = get_string('layoutadmin', 'theme_sparkle');
    $description = get_string('layoutadmindescription', 'theme_sparkle');
    $default = 'sidemain';
    $choices = array('premainpost'=>'2 Sidebar columns, pre and post', 'mainprepost'=>'2 Sidebar columns, -post only', 'prepostmain'=>'2 Sidebar columns, -pre only', 'mainside'=>'1 sidebar column, -post only', 'sidemain'=>'1 sidebar column, -pre only', 'mainonly'=>'No sidebars - main content only'); //replace with proper language strings
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    //mydashboard  - flex+allblocks (default to standard if not set)
    $name = 'theme_sparkle/layoutdashboard';
    $title = get_string('layoutdashboard', 'theme_sparkle');
    $description = get_string('layoutdashboarddescription', 'theme_sparkle');
    $default = '';
    $choices = array(''=>'As Standard','premainpost'=>'2 Sidebar columns, pre and post', 'mainprepost'=>'2 Sidebar columns, -post only', 'prepostmain'=>'2 Sidebar columns, -pre only', 'mainside'=>'1 sidebar column, -post only', 'sidemain'=>'1 sidebar column, -pre only', 'mainonly'=>'No sidebars - main content only'); //replace with proper language strings
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    //mypublic - flex+sideblocks+hiddenblocks ie no top/bottom (default to standard)
    $name = 'theme_sparkle/layoutmypublic';
    $title = get_string('layoutmypublic', 'theme_sparkle');
    $description = get_string('layoutmypublicdescription', 'theme_sparkle');
    $default = '';
    $choices = array(''=>'As Standard','premainpost'=>'2 Sidebar columns, pre and post', 'mainprepost'=>'2 Sidebar columns, -post only', 'prepostmain'=>'2 Sidebar columns, -pre only', 'mainside'=>'1 sidebar column, -post only', 'sidemain'=>'1 sidebar column, -pre only', 'mainonly'=>'No sidebars - main content only'); //replace with proper language strings
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    //login - onecol - no setting
    //popup - onecol - no setting
    //frametop - onecol - no setting
    //embedded - onecol - no setting
    //maintenance - onecol - no setting
    //print - onecol - no setting
    //redirect - onecol - no setting

    //report - flex+sideblocks+hiddenblocks ie no top/bottom (default to standard)
    $name = 'theme_sparkle/layoutreport';
    $title = get_string('layoutreport', 'theme_sparkle');
    $description = get_string('layoutreportdescription', 'theme_sparkle');
    $default = '';
    $choices = array(''=>'As Standard','premainpost'=>'2 Sidebar columns, pre and post', 'mainprepost'=>'2 Sidebar columns, -post only', 'prepostmain'=>'2 Sidebar columns, -pre only', 'mainside'=>'1 sidebar column, -post only', 'sidemain'=>'1 sidebar column, -pre only', 'mainonly'=>'No sidebars - main content only'); //replace with proper language strings
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    //secure - flex+allblocks (default to standard layout)
    $name = 'theme_sparkle/layoutsecure';
    $title = get_string('layoutsecure', 'theme_sparkle');
    $description = get_string('layoutsecuredescription', 'theme_sparkle');
    $default = '';
    $choices = array(''=>'As Standard','premainpost'=>'2 Sidebar columns, pre and post', 'mainprepost'=>'2 Sidebar columns, -post only', 'prepostmain'=>'2 Sidebar columns, -pre only', 'mainside'=>'1 sidebar column, -post only', 'sidemain'=>'1 sidebar column, -pre only', 'mainonly'=>'No sidebars - main content only'); //replace with proper language strings
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

$ADMIN->add('theme_sparkle', $temp);

/* Social Network settings */
    $temp = new admin_settingpage('theme_sparkle_social', get_string('socialheading', 'theme_sparkle'));
    $temp->add(new admin_setting_heading('theme_sparkle_social', get_string('socialheadingsub', 'theme_sparkle'),
            format_text(get_string('socialdesc' , 'theme_sparkle'), FORMAT_MARKDOWN)));

    // Website url setting.
    $name = 'theme_sparkle/website';
    $title = get_string('website', 'theme_sparkle');
    $description = get_string('websitedesc', 'theme_sparkle');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Facebook url setting.
    $name = 'theme_sparkle/facebook';
    $title = get_string('facebook', 'theme_sparkle');
    $description = get_string('facebookdesc', 'theme_sparkle');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Flickr url setting.
    $name = 'theme_sparkle/flickr';
    $title = get_string('flickr', 'theme_sparkle');
    $description = get_string('flickrdesc', 'theme_sparkle');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Twitter url setting.
    $name = 'theme_sparkle/twitter';
    $title = get_string('twitter', 'theme_sparkle');
    $description = get_string('twitterdesc', 'theme_sparkle');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Google+ url setting.
    $name = 'theme_sparkle/googleplus';
    $title = get_string('googleplus', 'theme_sparkle');
    $description = get_string('googleplusdesc', 'theme_sparkle');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // LinkedIn url setting.
    $name = 'theme_sparkle/linkedin';
    $title = get_string('linkedin', 'theme_sparkle');
    $description = get_string('linkedindesc', 'theme_sparkle');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Pinterest url setting.
    $name = 'theme_sparkle/pinterest';
    $title = get_string('pinterest', 'theme_sparkle');
    $description = get_string('pinterestdesc', 'theme_sparkle');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Instagram url setting.
    $name = 'theme_sparkle/instagram';
    $title = get_string('instagram', 'theme_sparkle');
    $description = get_string('instagramdesc', 'theme_sparkle');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // YouTube url setting.
    $name = 'theme_sparkle/youtube';
    $title = get_string('youtube', 'theme_sparkle');
    $description = get_string('youtubedesc', 'theme_sparkle');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Skype url setting.
    $name = 'theme_sparkle/skype';
    $title = get_string('skype', 'theme_sparkle');
    $description = get_string('skypedesc', 'theme_sparkle');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

$ADMIN->add('theme_sparkle', $temp);

/* User Alerts */
    $temp = new admin_settingpage('theme_sparkle_alerts', get_string('alertsheading', 'theme_sparkle'));
    $temp->add(new admin_setting_heading('theme_sparkle_alerts', get_string('alertsheadingsub', 'theme_sparkle'),
            format_text(get_string('alertsdesc' , 'theme_sparkle'), FORMAT_MARKDOWN)));

    //This is the descriptor for Alert One
    $name = 'theme_sparkle/alert1info';
    $heading = get_string('alert1', 'theme_sparkle');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Enable Alert
    $name = 'theme_sparkle/enable1alert';
    $title = get_string('enablealert', 'theme_sparkle');
    $description = get_string('enablealertdesc', 'theme_sparkle');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Alert Type.
    $name = 'theme_sparkle/alert1type';
    $title = get_string('alerttype' , 'theme_sparkle');
    $description = get_string('alerttypedesc', 'theme_sparkle');
    $alert_info = get_string('alert_info', 'theme_sparkle');
    $alert_warning = get_string('alert_warning', 'theme_sparkle');
    $alert_general = get_string('alert_general', 'theme_sparkle');
    $default = 'info';
    $choices = array('info'=>$alert_info, 'error'=>$alert_warning, 'success'=>$alert_general);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Alert Title.
    $name = 'theme_sparkle/alert1title';
    $title = get_string('alerttitle', 'theme_sparkle');
    $description = get_string('alerttitledesc', 'theme_sparkle');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Alert Text.
    $name = 'theme_sparkle/alert1text';
    $title = get_string('alerttext', 'theme_sparkle');
    $description = get_string('alerttextdesc', 'theme_sparkle');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    //This is the descriptor for Alert Two
    $name = 'theme_sparkle/alert2info';
    $heading = get_string('alert2', 'theme_sparkle');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Enable Alert
    $name = 'theme_sparkle/enable2alert';
    $title = get_string('enablealert', 'theme_sparkle');
    $description = get_string('enablealertdesc', 'theme_sparkle');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Alert Type.
    $name = 'theme_sparkle/alert2type';
    $title = get_string('alerttype' , 'theme_sparkle');
    $description = get_string('alerttypedesc', 'theme_sparkle');
    $alert_info = get_string('alert_info', 'theme_sparkle');
    $alert_warning = get_string('alert_warning', 'theme_sparkle');
    $alert_general = get_string('alert_general', 'theme_sparkle');
    $default = 'info';
    $choices = array('info'=>$alert_info, 'error'=>$alert_warning, 'success'=>$alert_general);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Alert Title.
    $name = 'theme_sparkle/alert2title';
    $title = get_string('alerttitle', 'theme_sparkle');
    $description = get_string('alerttitledesc', 'theme_sparkle');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Alert Text.
    $name = 'theme_sparkle/alert2text';
    $title = get_string('alerttext', 'theme_sparkle');
    $description = get_string('alerttextdesc', 'theme_sparkle');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    //This is the descriptor for Alert Three
    $name = 'theme_sparkle/alert3info';
    $heading = get_string('alert3', 'theme_sparkle');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Enable Alert
    $name = 'theme_sparkle/enable3alert';
    $title = get_string('enablealert', 'theme_sparkle');
    $description = get_string('enablealertdesc', 'theme_sparkle');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Alert Type.
    $name = 'theme_sparkle/alert3type';
    $title = get_string('alerttype' , 'theme_sparkle');
    $description = get_string('alerttypedesc', 'theme_sparkle');
    $alert_info = get_string('alert_info', 'theme_sparkle');
    $alert_warning = get_string('alert_warning', 'theme_sparkle');
    $alert_general = get_string('alert_general', 'theme_sparkle');
    $default = 'info';
    $choices = array('info'=>$alert_info, 'error'=>$alert_warning, 'success'=>$alert_general);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Alert Title.
    $name = 'theme_sparkle/alert3title';
    $title = get_string('alerttitle', 'theme_sparkle');
    $description = get_string('alerttitledesc', 'theme_sparkle');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Alert Text.
    $name = 'theme_sparkle/alert3text';
    $title = get_string('alerttext', 'theme_sparkle');
    $description = get_string('alerttextdesc', 'theme_sparkle');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

$ADMIN->add('theme_sparkle', $temp);

    /* Slideshow Widget Settings */
    $temp = new admin_settingpage('theme_sparkle_slideshow', get_string('slideshowheading', 'theme_sparkle'));
    $temp->add(new admin_setting_heading('theme_sparkle_slideshow', get_string('slideshowheadingsub', 'theme_sparkle'),
            format_text(get_string('slideshowdesc' , 'theme_sparkle'), FORMAT_MARKDOWN)));
    
    // Toggle Slideshow.
    $name = 'theme_sparkle/toggleslideshow';
    $title = get_string('toggleslideshow' , 'theme_sparkle');
    $description = get_string('toggleslideshowdesc', 'theme_sparkle');
    $alwaysdisplay = get_string('alwaysdisplay', 'theme_sparkle');
    $displaybeforelogin = get_string('displaybeforelogin', 'theme_sparkle');
    $displayafterlogin = get_string('displayafterlogin', 'theme_sparkle');
    $dontdisplay = get_string('dontdisplay', 'theme_sparkle');
    $default = 'alwaysdisplay';
    $choices = array('1'=>$alwaysdisplay, '2'=>$displaybeforelogin, '3'=>$displayafterlogin, '0'=>$dontdisplay);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Hide slideshow on phones.
    $name = 'theme_sparkle/hideonphone';
    $title = get_string('hideonphone' , 'theme_sparkle');
    $description = get_string('hideonphonedesc', 'theme_sparkle');
    $display = get_string('alwaysdisplay', 'theme_sparkle');
    $dontdisplay = get_string('dontdisplay', 'theme_sparkle');
    $default = 'display';
    $choices = array(''=>$display, 'hidden-phone'=>$dontdisplay);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Slideshow Design Picker.
    $name = 'theme_sparkle/slideshowvariant';
    $title = get_string('slideshowvariant' , 'theme_sparkle');
    $description = get_string('slideshowvariantdesc', 'theme_sparkle');
    $slideshow1 = get_string('slideshow1', 'theme_sparkle');
    $slideshow2 = get_string('slideshow2', 'theme_sparkle');
    $default = 'slideshow1';
    $choices = array('1'=>$slideshow1, '2'=>$slideshow2);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    /*
     * Slide 1
     */
     
    //This is the descriptor for Slide One
    $name = 'theme_sparkle/slide1info';
    $heading = get_string('slide1', 'theme_sparkle');
    $information = get_string('slideinfodesc', 'theme_sparkle');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Title.
    $name = 'theme_sparkle/slide1';
    $title = get_string('slidetitle', 'theme_sparkle');
    $description = get_string('slidetitledesc', 'theme_sparkle');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $default = '';
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Image.
    $name = 'theme_sparkle/slide1image';
    $title = get_string('slideimage', 'theme_sparkle');
    $description = get_string('slideimagedesc', 'theme_sparkle');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'slide1image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Caption.
    $name = 'theme_sparkle/slide1caption';
    $title = get_string('slidecaption', 'theme_sparkle');
    $description = get_string('slidecaptiondesc', 'theme_sparkle');
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // URL.
    $name = 'theme_sparkle/slide1url';
    $title = get_string('slideurl', 'theme_sparkle');
    $description = get_string('slideurldesc', 'theme_sparkle');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    /*
     * Slide 2
     */
     
    //This is the descriptor for Slide Two
    $name = 'theme_sparkle/slide2info';
    $heading = get_string('slide2', 'theme_sparkle');
    $information = get_string('slideinfodesc', 'theme_sparkle');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Title.
    $name = 'theme_sparkle/slide2';
    $title = get_string('slidetitle', 'theme_sparkle');
    $description = get_string('slidetitledesc', 'theme_sparkle');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $default = '';
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Image.
    $name = 'theme_sparkle/slide2image';
    $title = get_string('slideimage', 'theme_sparkle');
    $description = get_string('slideimagedesc', 'theme_sparkle');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'slide2image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Caption.
    $name = 'theme_sparkle/slide2caption';
    $title = get_string('slidecaption', 'theme_sparkle');
    $description = get_string('slidecaptiondesc', 'theme_sparkle');
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // URL.
    $name = 'theme_sparkle/slide2url';
    $title = get_string('slideurl', 'theme_sparkle');
    $description = get_string('slideurldesc', 'theme_sparkle');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    /*
     * Slide 3
     */

    //This is the descriptor for Slide Three
    $name = 'theme_sparkle/slide3info';
    $heading = get_string('slide3', 'theme_sparkle');
    $information = get_string('slideinfodesc', 'theme_sparkle');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Title.
    $name = 'theme_sparkle/slide3';
    $title = get_string('slidetitle', 'theme_sparkle');
    $description = get_string('slidetitledesc', 'theme_sparkle');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $default = '';
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Image.
    $name = 'theme_sparkle/slide3image';
    $title = get_string('slideimage', 'theme_sparkle');
    $description = get_string('slideimagedesc', 'theme_sparkle');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'slide3image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Caption.
    $name = 'theme_sparkle/slide3caption';
    $title = get_string('slidecaption', 'theme_sparkle');
    $description = get_string('slidecaptiondesc', 'theme_sparkle');
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // URL.
    $name = 'theme_sparkle/slide3url';
    $title = get_string('slideurl', 'theme_sparkle');
    $description = get_string('slideurldesc', 'theme_sparkle');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    /*
     * Slide 4
     */
     
    //This is the descriptor for Slide Four
    $name = 'theme_sparkle/slide4info';
    $heading = get_string('slide4', 'theme_sparkle');
    $information = get_string('slideinfodesc', 'theme_sparkle');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Title.
    $name = 'theme_sparkle/slide4';
    $title = get_string('slidetitle', 'theme_sparkle');
    $description = get_string('slidetitledesc', 'theme_sparkle');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $default = '';
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Image.
    $name = 'theme_sparkle/slide4image';
    $title = get_string('slideimage', 'theme_sparkle');
    $description = get_string('slideimagedesc', 'theme_sparkle');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'slide4image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Caption.
    $name = 'theme_sparkle/slide4caption';
    $title = get_string('slidecaption', 'theme_sparkle');
    $description = get_string('slidecaptiondesc', 'theme_sparkle');
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // URL.
    $name = 'theme_sparkle/slide4url';
    $title = get_string('slideurl', 'theme_sparkle');
    $description = get_string('slideurldesc', 'theme_sparkle');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
$ADMIN->add('theme_sparkle', $temp);
