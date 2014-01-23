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
 * @package   theme_sparkle
 * @copyright 2014 R Oelmann
 * @credits - Bootstrapbase/Clean - Mary Evans, David Scotson, Stuart Lamour, Bas Brands, Gareth Barnard
 * @credits - Essential - Julian Ridden
 * @credits - All other theme creators from whom I have no doubt borrowed ideas or code
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['choosereadme'] = '
<div class="clearfix">
<div class="well">
<h2>Sparkle3</h2>
<p><img class=img-polaroid src="sparkle/pix/screenshot.jpg" /></p>
</div>
<div class="well">
<h3>About</h3>
<p>Sparkle is a modified Moodle bootstrap theme which inherits styles from its parent theme. It applies flexbox layouts instead of the standard bootstrap grid. Although there are fallbacks in place for older browsers which do not support flexbox, it is not recommended for production sites where WinXP and IE8 are the predominant user experience.</p>
<h3>Parents</h3>
<p>This theme is based upon the Clean theme, which was created for Moodle 2.5, with the help of:<br>
Bas Brands, David Scotson, Mary Evans, Stuart Lamour and others.</p>
<h3>Theme Credits</h3>
<p>Authors: Richard Oelmann<br>
Contact: contact@editcons.net<br>
Website: <a href="http://editcons.net">editcons.net</a>
</p>
<h3>Report a bug:</h3>
<p><a href="http://tracker.moodle.org">http://tracker.moodle.org</a></p>
<h3>More information</h3>
<p><a href="sparkle/README.txt">How to copy and customise this theme.</a></p>
</div></div>';

$string['configtitle'] = 'Sparkle';
$string['visibleadminonly'] = 'Blocks moved into the area below will only be seen by admins';

$string['customcss'] = 'Custom CSS';
$string['customcssdesc'] = 'Whatever CSS rules you add to this textarea will be reflected in every page, making for easier customization of this theme.';

$string['footnote'] = 'Footnote';
$string['footnotedesc'] = 'Whatever you add to this textarea will be displayed in the footer throughout your Moodle site.';

$string['invert'] = 'Invert navbar';
$string['invertdesc'] = 'Swaps text and background for the navbar at the top of the page between black and white.';

$string['logo'] = 'Logo';
$string['logodesc'] = 'Please upload your custom logo here if you want to add it to the header.<br>
If the height of your logo is more than 75px add the following CSS rule to the Custom CSS box below.<br>
a.logo {height: 100px;} or whatever height in pixels the logo is.';

$string['pluginname'] = 'Sparkle';

$string['region-side-post'] = 'Right';
$string['region-side-pre'] = 'Left';
$string['region-dock'] = 'Admin Dock';
$string['region-topblock'] = 'Top Block';
$string['region-bottomblock'] = 'Bottom Block';

$string['mydashboard'] = 'My Dashboard';
$string['mycourses'] = 'My Courses';
$string['myunits'] = 'My Units';
$string['mymodules'] = 'My Modules';
$string['myclasses'] = 'My Classes';
$string['allcourses'] = 'All Courses';
$string['allunits'] = 'All Units';
$string['allmodules'] = 'All Modules';
$string['allclasses'] = 'All Classes';
$string['noenrolments'] = 'You have no current enrolments';
$string['myhome'] = 'My Home Page';
$string['genericsettings'] = 'General Settings';

/* Layout settings */
$string['layoutsheading'] = 'Page layouts';
$string['layoutsheadingsub'] = 'These options will override the settings for the page layouts from the config.php (which should be left allowing all regions and not edited)';
$string['layoutsdesc'] = 'Where config is set to side-pre and side-post regions, this setting can overrride that and create a single sidebar and can set the layout as -pre only or -post only. It is also be used to set the default layout as "HolyGrail", or both columns to the -pre or -post side.<br />Side-pre is generally to the left in a LtR language, Side-post is on the right in a LtR language, and swapped for RtL language layouts.<br />Page layouts set in config.php: Base, Standard, Course, CourseCategory, InCourse, Frontpage, Admin, MyDashboard, MyPublic, Login, PopUp, Frametop, Embedded, Maintenance, Print, Redirect, Report, Secure.<br />Not all of these layout options are configurable on this page as this may conflict with other areas, or with the purpose of the layout itself (e.g. embedded pages should not have any additional regions, simply embed the content)';

$string['layoutbase'] = 'Base page layout'; /* No setting - onecol*/
$string['layoutbasedescription'] = 'Most backwards compatible layout without the blocks - this is the layout used by default.';
$string['layoutstandard'] = 'Standard page layout';
$string['layoutstandarddescription'] = 'Standard layout with blocks, this is the default layout that most others will fall back to if they are not individually set here. It defaults to the three column side-main-side layout.';
$string['layoutcourse'] = 'Course page layout';
$string['layoutcoursedescription'] = 'Main course page - defaults back to the "standard" layout above if not individually set.';
$string['layoutcoursecategory'] = 'Course Category page layout';
$string['layoutcoursecategorydescription'] = 'Course Category listings page - defaults back to the "standard" layout above if not individually set.';
$string['layoutincourse'] = 'In Course layout';
$string['layoutincoursedescription'] = 'Part of course, typical for modules etc. - defaults back to the "Course" layout if not individually set.';
$string['layoutfrontpage'] = 'FrontPage layout';
$string['layoutfrontpagedescription'] = 'The site home page - defaults back to the "standard" layout above if not individually set.';
$string['layoutadmin'] = 'Admin page layout';
$string['layoutadmindescription'] = 'Server administration scripts and administration pages - defaults to a single "pre" column if not individually set.';
$string['layoutdashboard'] = 'MyDashboard (MyHome) page layout';
$string['layoutdashboarddescription'] = 'My dashboard page - defaults back to the "standard" layout above if not individually set.';
$string['layoutmypublic'] = 'MyPublic (MyProfile) page layout';
$string['layoutmypublicdescription'] = 'My public page - defaults back to admin layout if not individually set.';
$string['layoutlogin'] = 'Login page layout';
$string['layoutlogindescription'] = 'Login page.';/*No setting - onecol*/
$string['layoutpopup'] = 'Popup page layout';
$string['layoutpopupdescription'] = 'Pages that appear in pop-up windows - no navigation, no blocks, no header.';/*No setting - onecol*/
$string['layoutframetop'] = 'Frametop page layout';/*No setting - onecol*/
$string['layoutframetopdescription'] = 'No blocks and minimal footer - used for legacy frame layouts only!';
$string['layoutembedded'] = 'Embedded page layout';/*No setting - onecol*/
$string['layoutembeddeddescription'] = 'Embeded pages, like iframe/object embeded in moodleform - it needs as much space as possible';
$string['layoutmaintenance'] = 'Maintenance page layout';/*No setting - onecol*/
$string['layoutmaintenancedescription'] = 'Used during upgrade and install, and for the "This site is undergoing maintenance" message';
$string['layoutprint'] = 'Print page layout';/*No setting - onecol*/
$string['layoutprintdescription'] = 'Should normally display the content and basic headers only';
$string['layoutredirect'] = 'redirect page layout';/*No setting - onecol*/
$string['layoutredirectdescription'] = 'The pagelayout used when a redirection is occuring';
$string['layoutreport'] = 'Report page layout';
$string['layoutreportdescription'] = 'The pagelayout used for reports - defaults back to admin layout if not individually set.';
$string['layoutsecure'] = 'Secure page layout';
$string['layoutsecuredescription'] = 'The pagelayout used for safebrowser and securewindow - defaults back to course layout if not individually set.';

/* Social Networks */
$string['socialheading'] = 'Social Networking';
$string['socialheadingsub'] = 'Engage your users with Social Networking';
$string['socialdesc'] = 'Provide direct links to the core social networks that promote your brand.  These will appear in the header of every page.';
$string['socialnetworks'] = 'Social Networks';
$string['facebook'] = 'Facebook URL';
$string['facebookdesc'] = 'Enter the URL of your Facebook page. (i.e http://www.facebook.com/mycollege)';

$string['twitter'] = 'Twitter URL';
$string['twitterdesc'] = 'Enter the URL of your Twitter feed. (i.e http://www.twitter.com/mycollege)';

$string['googleplus'] = 'Google+ URL';
$string['googleplusdesc'] = 'Enter the URL of your Google+ profile. (i.e http://plus.google.com/107817105228930159735)';

$string['linkedin'] = 'LinkedIn URL';
$string['linkedindesc'] = 'Enter the URL of your LinkedIn profile. (i.e http://www.linkedin.com/company/mycollege)';

$string['youtube'] = 'YouTube URL';
$string['youtubedesc'] = 'Enter the URL of your YouTube channel. (i.e http://www.youtube.com/mycollege)';

$string['flickr'] = 'Flickr URL';
$string['flickrdesc'] = 'Enter the URL of your Flickr page. (i.e http://www.flickr.com/mycollege)';

$string['skype'] = 'Skype Account';
$string['skypedesc'] = 'Enter the Skype username of your organisations Skype account';

$string['pinterest'] = 'Pinterest URL';
$string['pinterestdesc'] = 'Enter the URL of your Pinterest page. (i.e http://pinterest.com/mycollege)';

$string['instagram'] = 'Instagram URL';
$string['instagramdesc'] = 'Enter the URL of your Instagram page. (i.e http://instagram.com/mycollege)';

$string['website'] = 'Website URL';
$string['websitedesc'] = 'Enter the URL of your own website. (i.e http://www.pukunui.com)';

/* Colour settings */
$string['coloursheading'] = 'Theme colours';
$string['coloursheadingsub'] = 'These colours override some of the core bootstrap defaults';
$string['coloursdesc'] = 'Additional settings will be developed to override other areas of bootstrap, in the meantime the customcss section can also be used.';
$string['pagebackground'] = 'Page Background Image';
$string['pagebackgrounddesc'] = 'Upload your own background image.  This will be tiled in the background on all pages.  If none is uploaded a default image is used.';
$string['loginpagebackground'] = 'Login Page Background Image';
$string['loginpagebackgrounddesc'] = 'Upload your own background image for the login page.  This will be placed in the top right of the login page background.';
$string['themebackgroundcolor'] = 'Theme Background Colour';
$string['themebackgroundcolordesc'] = 'What colour should your main theme page background be.  This will change mulitple components to produce the colour you wish across the moodle site';
$string['themecolor'] = 'Theme Font Colour';
$string['themecolordesc'] = 'What colour should your theme fonts be.  This will change mulitple components to produce the colour you wish across the moodle site';
$string['themelinkcolor'] = 'Theme Link Colour';
$string['themelinkcolordesc'] = 'What colour should your theme links be. This is used for links, menus, etc';
$string['themehovercolor'] = 'Theme Link Hover Colour';
$string['themehovercolordesc'] = 'What colour should your theme links be when hovered, active or in focus. This is used for links, menus, etc';
$string['themeheaderbackgroundcolor1'] = 'Theme Header Background Colour (Main)';
$string['themeheaderbackgroundcolor2'] = 'Theme Header Background Colour (Gradient)';
$string['themeheaderbackgroundcolordesc'] = 'What colour should the background of your theme headers be.  This will change mulitple components to produce the colour you wish across the moodle site, including block headers and menu bars.<br />2 colours can be given to create a gradient effect';
$string['themeheadercolor'] = 'Theme Header Font Colour';
$string['themeheadercolordesc'] = 'What colour should your header fonts be.';
$string['themeiconcolor'] = 'Theme Font-Awesome Icon Colour';
$string['themeiconcolordesc'] = 'What colour should the font-awesome icons in your headers and blocks be.';

/* Alerts */
$string['alertsheading'] = 'User Alerts';
$string['alertsheadingsub'] = 'Display important messages to your users on the frontpage';
$string['alertsdesc'] = 'This will display an alert (or multiple) in three different styles to your users on the Moodle frontpage. Please remember to disable these when no longer needed.';

$string['enablealert'] = 'Enable Alert';
$string['enablealertdesc'] = 'Enable or disable alerts';

$string['alert1'] = 'First Alert';
$string['alert2'] = 'Second Alert';
$string['alert3'] = 'Third Alert';

$string['alerttitle'] = 'Title';
$string['alerttitledesc'] = 'Main title/heading for your alert';

$string['alerttype'] = 'Level';
$string['alerttypedesc'] = 'Set the appropriate alert level/type to best inform your users';

$string['alerttext'] = 'Alert Text';
$string['alerttextdesc'] = 'What is the text you wish to display in your alert';

$string['alert_info'] = 'Information';
$string['alert_warning'] = 'Warning';
$string['alert_general'] = 'Announcement';

$string['alwaysdisplay'] = 'Always Show';
$string['displaybeforelogin'] = 'Show before login only';
$string['displayafterlogin'] = 'Show after login only';
$string['dontdisplay'] = 'Never Show';

/* CustomMenu */
$string['custommenuheading'] = 'Custom Menu';
$string['custommenuheadingsub'] = 'Add additional functionality to your custommenu.';
$string['custommenudesc'] = 'Settings here allow you to add new dynamic functionality to the custommenu (also refered to as Dropdown menu)';

$string['mydashboardinfo'] = 'Custom User Dashboard';
$string['mydashboardinfodesc'] = 'Displays a list of common functions used by users.';
$string['displaymydashboard'] = 'Display Dashboard';
$string['displaymydashboarddesc'] = 'Display Dashboard of user links in the Custom Menu';

$string['mycoursesinfo'] = 'Dynamic Enrolled Courses List';
$string['mycoursesinfodesc'] = 'Displays a dynamic list of enrolled courses to the user.';
$string['displaymycourses'] = 'Display enrolled courses';
$string['displaymycoursesdesc'] = 'Display enrolled courses for users in the Custom Menu';

$string['mycoursetitle'] = 'Terminology';
$string['mycoursetitledesc'] = 'Change the terminology for the "My Courses" link in the dropdown menu';
$string['mycourses'] = 'My Courses';
$string['myunits'] = 'My Units';
$string['mymodules'] = 'My Modules';
$string['myclasses'] = 'My Classes';
$string['allcourses'] = 'All Courses';
$string['allunits'] = 'All Units';
$string['allmodules'] = 'All Modules';
$string['allclasses'] = 'All Classes';
$string['noenrolments'] = 'You have no current enrolments';

/* My Dashboard custommenu dropdown */
$string['mydashboard'] = 'My Dashboard';

/* Slideshow */
$string['slideshowheading'] = 'Frontpage Slideshow';
$string['slideshowheadingsub'] = 'Dynamic Slideshow for the frontpage';
$string['slideshowdesc'] = 'This creates a dynamic slideshow of up to 4 slides for you to promote important elements of your site.';

$string['toggleslideshow'] = 'Toggle Slideshow display';
$string['toggleslideshowdesc'] = 'Choose if you wish to hide or show the Slideshow.';

$string['hideonphone'] = 'Slideshow on Mobiles';
$string['hideonphonedesc'] = 'Choose if you wish to have the slideshow shown on mobiles or not';
$string['readmore'] = 'Read More';

$string['slidecolor'] = 'Slide Text Colour';
$string['slidecolordesc'] = 'What colour should the main side text be.';
$string['slideheadercolor'] = 'Slide Heading Colour';
$string['slideheadercolordesc'] = 'What colour should the slide header be';
$string['slidebuttoncolor'] = 'Slide Button Colour';
$string['slidebuttoncolordesc'] = 'What colour should the slide "read more" button be';

$string['slideshowvariant'] = 'Slideshow Design';
$string['slideshowvariantdesc'] = 'Choose the style of slideshow you would like to display';
$string['slideshow1'] = 'Small Image on Right';
$string['slideshow2'] = 'Large Background Image';
$string['slideshow3'] = 'Design Three';

$string['slideshowTitle'] = 'Slideshow';
$string['slideinfodesc'] = 'Enter the settings for your slide.';
$string['slide1'] = 'Slide One';
$string['slide2'] = 'Slide Two';
$string['slide3'] = 'Slide Three';
$string['slide4'] = 'Slide Four';

$string['slidetitle'] = 'Slide Title';
$string['slidetitledesc'] = 'Enter a descriptive title for your slide';
$string['slideimage'] = 'Slide Image';
$string['slideimagedesc'] = 'Image works best if it is transparent. (Image size should be 256px x 256px)';
$string['slidecaption'] = 'Slide Caption';
$string['slidecaptiondesc'] = 'Enter the caption text to use for the first slide';
$string['slideurl'] = 'Slide Link';
$string['slideurldesc'] = 'Enter the target destination of the first slide\'s image link';


