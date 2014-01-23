<!-- Browser flexbox warnings -->
<div class="browserwarningnoflex useralerts alert alert-error"><span class="fa fa-stack"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-warning fa-stack-1x fa-inverse"></i></span><?php echo "Your Browser does not support Flexbox layouts, so some of the features and layouts of this theme may not be available to you. For best results please upgrade your browser (IE10+, Firefox22+, Chrome21+, Safari7+)"?></div>
<div class="browserwarningflexleg useralerts alert alert-error"><span class="fa fa-stack"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-warning fa-stack-1x fa-inverse"></i></span><?php echo "Your Browser supports legacy flexbox layouts, so while you should be able to use this theme as intended, some of the features and layouts of this theme may not be available to you. For best results please upgrade your browser (IE10+, Firefox22+, Chrome21+, Safari7+)"?></div>

<header role="banner" id="page-header" class="clearfix mainheader">
    <?php echo $html->heading; ?>
        <?php if ($hassocialnetworks) { ?>
        <div class="socialmediaicons">
            <?php if ($haswebsite) { ?>
            <span class="btn btn-primary">
                <a href="<?php echo $haswebsite; ?>"><i class="fa fa-lg fa-globe fa-inverse"></i></a>
            </span>
            <?php } ?>
            <?php if ($hasgoogleplus) { ?>
            <span class="btn btn-primary">
                <a href="<?php echo $hasgoogleplus; ?>"><i class="fa fa-lg fa-google-plus fa-inverse"></i></a>
            </span>
            <?php } ?>
            <?php if ($hastwitter) { ?>
            <span class="btn btn-primary">
                <a href="<?php echo $hastwitter; ?>"><i class="fa fa-lg fa-twitter fa-inverse"></i></a>
            </span>
            <?php } ?>
            <?php if ($hasfacebook) { ?>
            <span class="btn btn-primary">
                <a href="<?php echo $hasfacebook; ?>"><i class="fa fa-lg fa-facebook fa-inverse"></i></a>
            </span>
            <?php } ?>
            <?php if ($hasyoutube) { ?>
            <span class="btn btn-primary">
                <a href="<?php echo $hasyoutube; ?>"><i class="fa fa-lg fa-youtube fa-inverse"></i></a>
            </span>
            <?php } ?>
            <?php if ($haslinkedin) { ?>
            <span class="btn btn-primary">
                <a href="<?php echo $haslinkedin; ?>"><i class="fa fa-lg fa-linkedin fa-inverse"></i></a>
            </span>
            <?php } ?>
            <?php if ($hasflickr) { ?>
            <span class="btn btn-primary">
                <a href="<?php echo $hasflickr; ?>"><i class="fa fa-lg fa-flickr fa-inverse"></i></a>
            </span>
            <?php } ?>
            <?php if ($haspinterest) { ?>
            <span class="btn btn-primary">
                <a href="<?php echo $haspinterest; ?>"><i class="fa fa-lg fa-pinterest fa-inverse"></i></a>
            </span>
            <?php } ?>
            <?php if ($hasskype) { ?>
            <span class="btn btn-primary">
                <a href="<?php echo $hasskype; ?>"><i class="fa fa-lg fa-skype fa-inverse"></i></a>
            </span>
            <?php } ?>
            <?php if ($hasinstagram) { ?>
            <span class="btn btn-primary">
                <a href="<?php echo $hasinstagram; ?>"><i class="fa fa-lg fa-instagram fa-inverse"></i></a>
            </span>
            <?php } ?>
        </div>
        <?php } ?>
        <div class="headingprofile">
            <div class="headingmenu">
                <?php echo $OUTPUT->page_heading_menu(); ?>
            </div>
                <?php echo $OUTPUT->login_info();?>
                <?php echo $OUTPUT->lang_menu();; ?>
        </div>
</header>

<header role="banner" class="navbar <?php echo $html->navbarclass ?> moodle-has-zindex">
    <nav role="navigation" class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="workaround-collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="nav-collapse collapse">
                <?php echo $OUTPUT->custom_menu(); ?>
                <ul class="nav pull-right">
                    <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<header id="page-header" class="clearfix breadcrumbbar">
    <div id="page-navbar" class="clearfix breadcrumb">
        <div class="breadcrumb-nav"><?php echo $OUTPUT->navbar(); ?></div>
        <nav class="breadcrumb-button"><?php echo $OUTPUT->page_heading_button(); ?></nav>
    </div>

    <div id="course-header">
        <?php echo $OUTPUT->course_header(); ?>
    </div>
</header>
