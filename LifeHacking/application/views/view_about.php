<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
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
        <div id='cssmenu'>
            <ul>
                <li class='has-sub'><a href='<?php echo base_url(); ?>index.php/site/add_hacks'><span>Hacks</span></a></li>
                <li class='has-sub'><a href='#'><span>User Content</span></a>
                    <ul>
                        <li class='has-sub'><a href='<?php echo base_url(); ?>index.php/site/about'><span>About Us</span></a></li>
                        <li class='has-sub'><a href='<?php echo base_url(); ?>index.php/site/sign'><span>Newsletter</span></a></li>
                    </ul>
                </li>
                <li class='active has-sub'><a href='#'><span>Contact Us</span></a>
                    <ul>
                        <li class='has-sub'><a href='<?php echo base_url(); ?>index.php/site/contact'><span>Contact Info</span></a></li>
                        <li class='has-sub'><a href='<?php echo base_url(); ?>index.php/site/job'><span>Job Opportunities</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="row">
            <a href='<?php echo base_url(); ?>'index.php/site'><img src="<?php echo base_url(); ?>assets/img/website-tagline.png" alt="Life Hacking Logo"></a>
        </div>
    </header>
    <br><br><br>
    <!--body-->
    <div class="row">
        <div class="col-md-6 col-xs-6">
            <h3>About Us</h3>
            <p>We are a site made due to the hard time
                finding a real life hacking site. This site
                offers authentic hacks with low risk to any
                security issues and low advertising on the
                site as well.
                <br><br>
                Over all we wanted to provide something
                hard to find on today's web and offer an
                easy site to navigate for even the newest
                members of technology.</p>
        </div>
        <div class="col-md-6 col-xs-6">
            <h3>Sign Up Benefits</h3>
            <p>Signing up for a newsletter allows you
                to see what new updates we will make to
                the site. We will email with news of our
                progress and of any new updates to the
                site. Allowing you in depth inside info
                about more things coming soon. Click the
                button below to sign up for your newsletter
                today.
                <br><br>
                <a href='<?php echo base_url(); ?>index.php/site/sign'><button type="button">Sign Up!</button></p></a>
        </div>
    </div>
    <br><br><br>
    <footer class="row">
        <div class="row">
            <div class="col-md-3 col-xs-6">
                <a href="https://www.facebook.com/Life-Hacking-516502108516139/"><img src="<?php echo base_url(); ?>assets/img/facebook.png" alt="bookmark"></a>
            </div>
            <div class="col-md-3 col-xs-6">
            </div>
            <div class="col-md-3 col-xs-6">
                <ul>
                    <li><a href='<?php echo base_url(); ?>index.php/site'><span>Home</span></a></li>
                    <li><a href='<?php echo base_url(); ?>index.php/site/add_hacks'>Hacks</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-xs-6">
                <ul>
                    <li><a href='#'>About Us</a></li>
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

</body>
</html>