<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: Education Time
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Education Time</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
    <script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
    <!-- liteAccordion is Homepage Only -->
    <link rel="stylesheet" href="layout/scripts/liteaccordion-v2.2/css/liteaccordion.css" type="text/css" />
</head>
<body id="top">
<div class="wrapper row1">
    <div id="header" class="clear">
        <div class="fl_left">
            <h1><a href="index.html">Education Time</a></h1>
            <p>Free Website Template</p>
        </div>
        <form action="#" method="post" id="login">
            <fieldset>
                <legend>Student Login</legend>
                <input type="password" />
                <input type="text" />
                <div id="forgot">Need <a href="#">Help ?</a> or <a href="#">Forgot Your Details ?</a></div>
                <input type="image" src="layout/images/sign_in.gif" id="signin" alt="Sign In" />
            </fieldset>
        </form>
    </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row2">
    <div id="topnav">
        <ul>
            <li class="{{ Route::is('welcome') ? 'active' : '' }}"><a href="{{ route('welcome') }}">Homepage</a></li>
            <li class="{{ Route::is('about') ? 'active' : '' }}"><a href="{{ route('about') }}">About</a></li>
            <li><a href="pages/full-width.html">Full Width</a></li>
            <li><a href="#">DropDown</a>
                <ul>
                    <li><a href="#">Link 1</a></li>
                    <li><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                </ul>
            </li>
            <li><a href="pages/3-columns.html">3 Columns</a></li>
            <li class="last"><a href="pages/gallery.html">Gallery</a></li>
        </ul>
        <div  class="clear"></div>
    </div>
</div>

@yield('content')

<!-- ####################################################################################################### -->
<div class="wrapper row5">
    <div id="footer" class="clear">
        <!-- ####################################################################################################### -->
        <div class="foot_contact">
            <h2>University Name Here</h2>
            <address>
                Address Line 1<br />
                Address Line 2<br />
                Town/City<br />
                Postcode/Zip
            </address>
            <ul>
                <li><strong>Tel:</strong> xxxxx xxxxxxxxxx</li>
                <li><strong>Fax:</strong> xxxxx xxxxxxxxxx</li>
                <li class="last"><strong>Email:</strong> <a href="#">contact@mydomain.com</a></li>
            </ul>
        </div>
        <div class="footbox">
            <h2>Administration</h2>
            <ul>
                <li><a href="#">Disclaimer</a></li>
                <li><a href="#">Accessibility</a></li>
                <li><a href="#">Freedom of Information</a></li>
                <li><a href="#">Website Privacy</a></li>
                <li><a href="#">Press Release Information</a></li>
                <li><a href="#">Annual Report</a></li>
                <li><a href="#">Financial Statements</a></li>
                <li><a href="#">Job Vacancies</a></li>
                <li class="last"><a href="#">Semester Dates</a></li>
            </ul>
        </div>
        <div class="footbox">
            <h2>Link Block 2</h2>
            <ul>
                <li><a href="#">Schools and Colleges</a></li>
                <li><a href="#">Student Activities</a></li>
                <li><a href="#">Student Affairs</a></li>
                <li><a href="#">Student Development</a></li>
                <li><a href="#">Student Financial Services</a></li>
                <li><a href="#">Student Group Directory</a></li>
                <li><a href="#">Student Life</a></li>
                <li><a href="#">International Students</a></li>
                <li class="last"><a href="#">Global Learning</a></li>
            </ul>
        </div>
        <div class="footbox last">
            <h2>Link Block 3</h2>
            <ul>
                <li><a href="#">Academic Advisory</a></li>
                <li><a href="#">Academic Assistance</a></li>
                <li><a href="#">Academic Calendars</a></li>
                <li><a href="#">Academics Office</a></li>
                <li><a href="#">Administration</a></li>
                <li><a href="#">Adult Learners</a></li>
                <li><a href="#">Alumni Chapters</a></li>
                <li><a href="#">Alumni Events</a></li>
                <li class="last"><a href="#">Residential Colleges</a></li>
            </ul>
        </div>
        <!-- ####################################################################################################### -->
    </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
    <div id="copyright" class="clear">
        <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">Domain Name</a></p>
        <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    </div>
</div>
<!-- liteAccordion is Homepage Only -->
<script type="text/javascript" src="layout/scripts/liteaccordion-v2.2/js/liteaccordion.jquery.min.js"></script>
<script type="text/javascript">
    $("#featured_slide").liteAccordion({
        theme: "os-tpl",
        containerWidth: 960, // fixed (px)
        containerHeight: 360, // fixed (px) - overall height of the slider
        headerWidth: 48, // fixed (px) - slide spine title
        firstSlide: 1, // displays slide (n) on page load
        activateOn: "click", // click or mouseover
        autoPlay: false, // automatically cycle through slides
        pauseOnHover: true, // pause slides on hover
        rounded: false, // square or rounded corners
        enumerateSlides: true, // put numbers on slides
        slideSpeed: 800, // slide animation speed
        cycleSpeed: 6000, // time between slide cycles
    });
</script>
</body>
</html>

