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
            <li class='has-sub'><a href='<?php echo base_url(); ?>index.php/site/logsign#login'><span>Log In</span></a> | <a href='<?php echo base_url(); ?>index.php/site/logsign#register'><span>Sign Up</span></a></li>
        </div>
        <div id='cssmenu'>
            <ul>
                <li class='has-sub'><a href='<?php echo base_url(); ?>index.php/site/all_hacks'><span>Hacks</span></a></li>
                <li class='active has-sub'><a href='#'><span>User Content</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>Profile</span></a></li>
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
        <br><br><br><br><br>
        <div class="row">
            <a href='<?php echo base_url(); ?>'index.php/site'><img src="<?php echo base_url(); ?>assets/img/website-tagline.png" alt="Life Hacking Logo"></a>
        </div>
    </header>
    <br><br><br>
    <!--body-->
    <div class="row">
        <div class="profile">
            <div class="col-md-6 col-xs-6">
                <h3>Your Profile</h3>
                <img src="<?php echo base_url(); ?>assets/img/placeholder.jpg" alt="bookmark">
            </div>
            <br><br><br>
            <div class="col-md-6 col-xs-6">
                <p>Name: Here</p>
                <p>Username: Here</p>
                <p>Password: ********</p>
                <p>Email: Here@email.com</p>
                <a href='<?php echo base_url(); ?>index.php/site/bookmark'><span>Bookmarked Hacks</span></a>
                <a href='<?php echo base_url(); ?>index.php/site/editprofile'><button type="button">Edit</button></a>

            </div>
        </div>

    </div>
    <br>
    <hr>
    <br>
    <div class="row">
        <div class="col-md-8 col-xs-6">
            <h3>About You</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vehicula sagittis lectus,
                eu rutrum felis ultricies in. Curabitur laoreet elementum lectus non imperdiet. Vestibulum
                ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris fermentum
                euismod tellus ac vulputate. Donec porta leo sed lorem tristique venenatis. Sed ut faucibus dui,
                sit amet convallis nisi. Ut imperdiet dignissim augue, vitae blandit velit sodales at. Mauris auctor
                nisl et euismod auctor. Suspendisse hendrerit diam sed turpis accumsan porta.</p>
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
                    <li><a href='<?php echo base_url(); ?>index.php/site'>Home</a></li>
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
        <p>Copyright &copy; 2015 | Life Hacking | All rights reserved.</p>
    </footer>
</div>
</div>

</body>
</html>