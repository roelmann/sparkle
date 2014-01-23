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

include ('includes/theme_preheader.php');
include ('includes/theme_header.php');
?>

<div id="page" class="container-fluid">

    <div id="page-content" class="flexible">
        <section id="region-main" class="maincontent flexible">
            <?php

            echo $OUTPUT->course_content_header();
            echo $OUTPUT->main_content();
            echo $OUTPUT->course_content_footer();

            ?>
        </section>
    </div>

<?php include ('includes/theme_footer.php'); ?>

</div>
</body>
</html>
