<?php

    $layoutorder = 'premainpost'; //default value

    $pagetype=$PAGE->pagelayout;
    switch($pagetype) {
        case "standard":
            $layoutorder=(empty($PAGE->theme->settings->layoutstandard)) ? 'premainpost' : $PAGE->theme->settings->layoutstandard;
            break;
        case "frontpage":
            $layoutorder=(empty($PAGE->theme->settings->layoutfrontpage)) ? ((empty($PAGE->theme->settings->layoutstandard)) ? 'premainpost' : $PAGE->theme->settings->layoutstandard) : $PAGE->theme->settings->layoutfrontpage;
            break;
        case "course":
            $layoutorder=(empty($PAGE->theme->settings->layoutcourse)) ? ((empty($PAGE->theme->settings->layoutstandard)) ? 'premainpost' : $PAGE->theme->settings->layoutstandard) : $PAGE->theme->settings->layoutcourse;
            break;
        case "coursecategory":
            $layoutorder=(empty($PAGE->theme->settings->layoutcoursecategory)) ? ((empty($PAGE->theme->settings->layoutstandard)) ? 'premainpost' : $PAGE->theme->settings->layoutstandard) : $PAGE->theme->settings->layoutcoursecategory;
            break;
        case "incourse":
            $layoutorder=(empty($PAGE->theme->settings->layoutincourse)) ? ((empty($PAGE->theme->settings->layoutstandard)) ? 'premainpost' : $PAGE->theme->settings->layoutstandard) : $PAGE->theme->settings->layoutincourse;
            break;
        case "admin":
            $layoutorder=(empty($PAGE->theme->settings->layoutadmin)) ? 'sidemain' : $PAGE->theme->settings->layoutadmin;
            break;
        case "mydashboard":
            $layoutorder=(empty($PAGE->theme->settings->layoutdashboard)) ? ((empty($PAGE->theme->settings->layoutstandard)) ? 'premainpost' : $PAGE->theme->settings->layoutstandard) : $PAGE->theme->settings->layoutdashboard;
            break;
        case "mypublic":
            $layoutorder=(empty($PAGE->theme->settings->layoutmypublic)) ? ((empty($PAGE->theme->settings->layoutstandard)) ? 'premainpost' : $PAGE->theme->settings->layoutstandard) : $PAGE->theme->settings->layoutmypublic;
            break;
        case "report":
            $layoutorder=(empty($PAGE->theme->settings->layoutreport)) ? ((empty($PAGE->theme->settings->layoutstandard)) ? 'premainpost' : $PAGE->theme->settings->layoutstandard) : $PAGE->theme->settings->layoutreport;
            break;
        case "secure":
            $layoutorder=(empty($PAGE->theme->settings->layoutsecure)) ? ((empty($PAGE->theme->settings->layoutstandard)) ? 'premainpost' : $PAGE->theme->settings->layoutstandard) : $PAGE->theme->settings->layoutsecure;
            break;
    }

$extradiv='';
if ($layoutorder == 'sidemain' || $layoutorder == 'mainside' || $layoutorder == 'mainonly') {$extradiv = TRUE;}
?>
