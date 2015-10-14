<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Life Hacking</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.min.css"/>
    <script src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery_ui_style.js"></script>
</head>
<body>

<div class="container">
    <!-- Head/Nav -->
    <header class="row">
        <div>
            <ul>
                <li class='has-sub'><?php

                    echo "Welcome User";
                    echo $user;
                    echo "<br><br>";
                    ?> </li>
            </ul>
        </div>
        <br><br>
        <div>
            <li><a href="<?php echo base_url(); ?>index.php/site">Logout</a></li>
        </div>
        <div id='cssmenu'>
            <ul>
                <li class='has-sub'><a href='<?php echo base_url(); ?>index.php/site/add_hacks'><span>Hacks</span></a></li>
                <li class='active has-sub'><a href='#'><span>User Content</span></a>
                    <ul>
                        <li class='has-sub'><a href='<?php echo base_url(); ?>index.php/site/profile'><span>Profile</span></a></li>
                        <li class='has-sub'><a href='<?php echo base_url(); ?>index.php/site/bookmark'><span>Bookmarked Hacks</span></a></li>
                    </ul>
                </li>
                <li class='has-sub'><a href='<?php echo base_url(); ?>index.php/site/about'><span>About Us</span></a></li>
                <li class='active has-sub'><a href='#'><span>Contact Us</span></a>
                    <ul>
                        <li class='has-sub'><a href='<?php echo base_url(); ?>index.php/site/contact'><span>Contact Info</span></a></li>
                        <li class='has-sub'><a href='<?php echo base_url(); ?>index.php/site/job'><span>Job Opportunities</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <br><br><br>
        <div class="row">
            <div class="logo">
                <a href='<?php echo base_url(); ?>'index.php/site'><img src="<?php echo base_url(); ?>assets/img/website-tagline.png" alt="Life Hacking Logo"></a>
            </div>
        </div>
        <br>
    </header>
    <!--body-->
    <div class="body">
        <div class="row">
            <div class="col-md-6 col-xs-6">
                <h3>Welcome to Our Site!</h3>
                <p>Hello, Thank you for stopping in at Life
                    Hacking site. We are a site providing a
                    numerous amount of authentic life hacks
                    just for you. Just click on the Hacks tab
                    and you will be taken right to all the hacks
                    to scroll through. Thank you for supporting
                    us and feel free to follow us on Facebook
                    or share hacks through Facebook as well.</p>
            </div>
            <div class="col-md-6 col-xs-6">
                <h3>Sign Up Benefits</h3>
                <p>If you would like to help contribute to the
                    site and add hacks you know please feel
                    free to sign up. There is no cost to signing
                    up with Life Hacking. Signing up allows you
                    to post hacks of your own and bookmark
                    hacks you enjoy.
                    <br><br>
                    For more Information
                    <br><br>
                    Click the About Us tab.</p>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="bottom">
        <footer class="row">
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <img src="<?php echo base_url(); ?>assets/img/facebook.png" alt="bookmark">
                </div>
                <div class="col-md-3 col-xs-6">
                </div>
                <div class="col-md-3 col-xs-6">
                    <ul>
                        <li><a href='#'><span>Home</span></a></li>
                        <li><a href='<?php echo base_url(); ?>index.php/site/addhacks'>Hacks</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-xs-6">
                    <ul>
                        <li><a href='<?php echo base_url(); ?>index.php/site/about'>About Us</a></li>
                        <li><a href='<?php echo base_url(); ?>index.php/site/contact'>Contact Us</a></li>
                        <li><a href='<?php echo base_url(); ?>index.php/site/job'>Job Opportunities</a></li>
                        <li><a href='#'>Terms of Use</a></li>
                    </ul>
                </div>
            </div>
            <br><br>
            <div class="col-md-8 col-xs-6">
                <p>Copyright &copy; 2015 | Life Hacking | All rights reserved.</p>
            </div>
        </footer>
    </div>
</div>
</div>

</body>
</html>