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
        <br><br><br>
        <div class="row">
            <a href='<?php echo base_url(); ?>'index.php/site'><img src="<?php echo base_url(); ?>assets/img/website-tagline.png" alt="Life Hacking Logo"></a>
        </div>
    </header>
    <br><br><br>
    <!--body-->
    <div class="row">
        <div class="col-md-5 col-xs-6">
            <h3>Welcome to Sign Up!</h3>
            <p>Signing up for a newsletter allows you
                to see what new updates we will make to
                the site. We will email with news of our
                progress and of any new updates to the
                site. Allowing you in depth inside info
                about more things coming soon. Click the
                button below to sign up for your newsletter
                today.
        </div>
        <div class="col-md-6 col-xs-6">
            <a name="register"><h3>Register</h3></a>
            <br>
            <?php $this->load->helper('form'); ?>
            <?php echo form_open('site/register'); ?>
            <ul id="register">
                        <label for="name">Name:</label>
                        <input type="text" name="name" placeholder="name" value="<?php echo set_value('name'); ?>" />
                        <?php echo form_error('name'); ?>
                <br><br>
                        <label for="email">Email:</label>
                        <input type="text" name="email" placeholder="example@email.com" value="<?php echo set_value('email'); ?>" />
                        <?php echo form_error('email'); ?>
                <br><br>
                        <input type="submit" value="Register" />
            </ul>
            <?php echo form_close(); ?>
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

</body>
</html>