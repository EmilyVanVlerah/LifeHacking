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
            <li class='has-sub'><a href='<?php echo base_url(); ?>index.php/site/logsign'><span>Log In | Sign Up</span></a></li>
        </div>
        <div id='cssmenu'>
            <ul>
                <li class='has-sub'><a href='<?php echo base_url(); ?>index.php/site/all_hacks'><span>Hacks</span></a></li>
                <li class='active has-sub'><a href='#'><span>User Content</span></a>
                    <ul>
                        <li class='has-sub'><a href='<?php echo base_url(); ?>index.php/site/profile'><span>Profile</span></a></li>
                        <li class='has-sub'><a href='#'><span>Bookmarked Hacks</span></a></li>
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
        <br><br><br><br><br><br>
        <div class="row">
            <a href='<?php echo base_url(); ?>'index.php/site'><img src="<?php echo base_url(); ?>assets/img/website-tagline.png" alt="Life Hacking Logo"></a>
        </div>
    </header>
    <br><br><br><br><br><br>
    <!--body-->
    <div class="content">
        <h2>Bookmarked Hacks:</h2>
        <br>
        <div>
            <h3>Hack Title</h3>
            <p>Author: Here</p>
            <p>Date: Here</p>
            <img src="<?php echo base_url(); ?>assets/img/bm-unclick.png" alt="bookmark">
        </div>
        <br>
        <hr>
        <br>
        <div>
            <h3>Hack Title</h3>
            <p>Author: Here</p>
            <p>Date: Here</p>
            <img src="<?php echo base_url(); ?>assets/img/bm-unclick.png" alt="bookmark">
        </div>
        <br>
        <hr>
        <br>
        <div>
            <h3>Hack Title</h3>
            <p>Author: Here</p>
            <p>Date: Here</p>
            <img src="<?php echo base_url(); ?>assets/img/bm-unclick.png" alt="bookmark">
        </div>
    </div>
    <br><br><br>
    <footer class="row">
        <div class="row">
            <div class="col-md-3 col-xs-6">
                <img src="<?php echo base_url(); ?>assets/img/facebook.png" alt="bookmark">
            </div>
            <div class="col-md-3 col-xs-6">
            </div>
            <div class="col-md-3 col-xs-6">
                <ul>
                    <li><a href='<?php echo base_url(); ?>index.php/site'><span>Home</span></a></li>
                    <li><a href='<?php echo base_url(); ?>index.php/site/profile'>Your Profile</a></li>
                    <li><a href='#'>Bookmarked Hacks</a></li>
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
        <p>Copyright &copy; 2015 | Life Hacking | All rights reserved.</p>
    </footer>
</div>
</div>

</body>
</html>