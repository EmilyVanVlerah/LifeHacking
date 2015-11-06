<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html">
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
                <li class='has-sub'><a href='#'><span>Hacks</span></a></li>
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
        <br><br><br><br><br><br><br><br><br>
        <div class="row">
            <a href='<?php echo base_url(); ?>'index.php/site'><img src="<?php echo base_url(); ?>assets/img/website-tagline.png" alt="Life Hacking Logo"></a>
        </div>
    </header>
    <br><br><br>
    <!--body-->
    <div class="content">
        <div id="posts">

            <h2>Add Hacks</h2><br>
            <?php echo validation_errors(); ?>
            <?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');}?>
            <?php echo form_open('site/hack_insert', 'site/upload_file');?>
            <p>Title:<br />
                <input type="text" name="entry_title" />
            </p>
            <p>Body:<br />
                <textarea name="entry_body" rows="5" cols="50" style="resize:none;"></textarea>
            </p>
            <p>Date:<br />
                <input type="text" name="entry_date" />
            </p>
            <p>Add Photo:</p>
            <input type="file" name="entry_pic">
            <br/>
            <input type="submit" value="Submit" />
            </form>
            <?php echo form_close();?>


            <!--<form action="</?php echo base_url('site/hack_insert'); ?>" method="post" enctype="multipart/form-data">
                <p>Add Photo:</p>
                <input type="file" name="entry_pic">
            </form>-->
        </div>


        <hr>
        <br>
        <div>

            <h2><u>All Hacks</u></h2>
            <br>
            <?php foreach($this->blog_model->getPosts()as $post):?>
                <h3><?php echo $post->entry_title;?></h3>
                <p><?php echo $post->entry_body;?></p>
                <h5><?php echo $post->entry_date;?></h5>
                <img style="width: 150px;height: 150px;" src="<?php echo base_url('file/'.$post->entry_pic) ?>" >
                <!--<div class="image-popup-no-margins">
                        <a href="</?php echo $post->entry_pic;?>" data-source="http://500px.com/photo/32736307" title="Hack Photo" style="width:193px;height:125px;">
                            <img src="</?php echo site_url("site/displayimage/$Id"); ?>" >
                        </a>
                    </div>-->
                <br><hr><br>
                <?php endforeach;?>


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
                    <li><a href='#'>Hacks</a></li>
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

</body>
</html>