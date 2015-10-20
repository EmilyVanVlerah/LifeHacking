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
            <li class='has-sub'><a href='#'><span>Log In</span></a> | <a href='#'><span>Sign Up</span></a></li>
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
            <a href='<?php echo base_url(); ?>'index.php/site'><img src="<?php echo base_url(); ?>assets/img/website-tagline.png" alt="Life Hacking Logo"></a>
        </div>
    </header>
    <br><br><br>
    <!--body-->
    <div class="row">
        <div class="col-md-6 col-xs-6">
            <a name="login"><div id="login"></a>
                    <h2>Login</h2>
                    <hr/>
                    <?php echo form_open('site/user_login'); ?>
                    <?php
                    echo "<div class='error_msg'>";
                    if (isset($error_message)) {
                        echo $error_message;
                    }
                    echo validation_errors();
                    echo "</div>";
                    ?>
                    <label>User Name:</label>
                    <input type="text" name="username" id="name" placeholder="username"/><br /><br />
                    <label>Password:</label>
                    <input type="password" name="password" id="password" placeholder="**********"/><br/><br />
                    <input type="submit" value=" Login " name="submit"/><br />
                    <?php echo form_close(); ?>
                </div>
        </div>
        <div class="col-md-6 col-xs-6">
            <a name="register"><h3>Register</h3></a>
            <br>
            <?php $this->load->helper('form'); ?>
            <?php echo form_open('site/register'); ?>
            <ul id="register">
                        <label for="username">Username:</label>
                        <input type="text" name="username" placeholder="username" value="<?php echo set_value('username'); ?>" />
                        <?php echo form_error('username'); ?>
                <br><br>
                        <label for="password">Password:</label>
                        <input type="password" name="password" placeholder="6-8 characters" />
                        <?php echo form_error('password'); ?>
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