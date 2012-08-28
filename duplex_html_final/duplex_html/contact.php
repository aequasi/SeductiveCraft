<?php 
if(isset($_POST['submitted'])) {
		if(trim($_POST['contactName']) === '') {
			$nameError = 'Please enter your name.';
			$hasError = true;
		} else {
			$name = trim($_POST['contactName']);
		}
		
		if(trim($_POST['email']) === '')  {
			$emailError = 'Please enter your email address.';
			$hasError = true;
		} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
			$emailError = 'You entered an invalid email address.';
			$hasError = true;
		} else {
			$email = trim($_POST['email']);
		}
			
		if(trim($_POST['comments']) === '') {
			$commentError = 'Please enter a message.';
			$hasError = true;
		} else {
			if(function_exists('stripslashes')) {
				$comments = stripslashes(trim($_POST['comments']));
			} else {
				$comments = trim($_POST['comments']);
			}
		}
			
		if(!isset($hasError)) {
			$emailTo = "youremail@mail.com";
			if (!isset($emailTo) || ($emailTo == '') ){
				$emailTo = "youremail@mail.com";
			}
			$subject = '[Contact Form] From '.$name;
			$body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
			$headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
			
			mail($emailTo, $subject, $body, $headers);
			$emailSent = true;
		}
	
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<title>Duplex HTML Template</title>

<link rel="stylesheet" href="style.css" />

<!--[if IE 7]>
<link rel="stylesheet" href="css/ie.css" />
<![endif]-->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> 
<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script> 

<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery("#contactForm").validate();
	});
</script>

</head>

<body>
    
    <div id="header">
        
        <div id="top">
        
            <div class="container_12">

                <div class="grid_9">
                
                    <div id="second_nav">
                    
                    	<ul class="sf-menu">
                    	  <li class="first"><a href="index.html">Homepage</a></li>
                    	  <li><a href="single.html">Post Page</a></li>
                    	  <li><a href="#">Dropdowns</a>
                    	  	<ul>
                    	  		<li class="first"><a href="#">Dropdown One</a></li>
                    	  		<li><a href="#">Dropdown Two</a></li>
                    	  		<li class="last"><a href="#">Dropdown Three</a></li>
                    	  	</ul>
                    	  </li>
                    	  <li><a href="fullwidth.html">Full Width</a></li>
                    	  <li><a href="archive.html">Archives</a></li>
                    	  <li><a href="contact.php">Contact</a></li>
                          <li><a href="http://www.premiumpixels.com/duplex-html">Buy this template</a></li>
                    	  <li class="last"><a href="http://www.premiumpixels.com/duplex">View the WP Version</a></li>
                    	</ul>
                    
                    </div><!--second_nav-->
                
                </div><!--grid_9-->
                
                <div class="grid_3">
                
                    <div id="rss">
                    
                    	<span>Subscribe</span> by <a href="http://feeds.feedburner.com/premiumpixels">RSS</a> or <a href="http://feedburner.google.com/fb/a/mailverify?uri=premiumpixels">Email</a>
                    
                    </div><!--rss-->
                
                </div><!--grid_3-->
                
                <div class="clear"></div>
    
            </div><!--container_12-->
        
        </div><!--top-->
        
        <div id="bottom">
        
            <div class="container_12">
            
                <div class="grid_5">
                
                  <div id="logo">
                  	
                    <a href="index.html"><img src="images/logo.png" alt="Duplex"></a>
                  
                  </div><!--logo-->
                  
                </div><!--grid_5-->
                
                <div class="grid_7">
                
                  <div id="header_advert">
                  
                  	<a href="#"><img src="images/header_advert.jpg" alt="advert"></a>
                    
                  </div><!--header_advert-->
                  
                </div><!--grid_7-->
                
                <div class="clear"></div>
                
            </div><!--container_12-->
        
        </div><!--bottom-->
        
    </div><!--header-->
    
    <div id="the_body">
    
        <div class="container_12">
        
        	<div id="single_bg" class="grid_12">
            
                <div class="grid_12 alpha omega">
                    
                        <div id="nav">
                        
                            <ul class="sf-menu">
                              <li class="first"><a href="#">Home</a></li>
                              <li><a href="#">Culture</a></li>
                              <li><a href="#">Lifestyle</a></li>
                              <li><a href="#">World News</a></li>
                              <li><a href="#">Sport</a></li>
                              <li><a href="#">Travel</a></li>
                              <li><a href="#">Health</a></li>
                              <li><a href="#">Dropdowns</a>
                              	<ul>
                              		<li class="first"><a href="#">Dropdown One</a></li>
                              		<li><a href="#">Dropdown Two</a></li>
                              		<li class="last"><a href="#">Dropdown Three</a></li>
                              	</ul>
                              </li>
                              <li><a href="#">Weird</a></li>
                              <li><a href="#">Celebrity</a></li>
                            </ul>
                            
                            <div class="clear"></div>
                        
                        </div><!--nav-->
                    
                    </div><!--grid_12-->
                    
                    <div class="grid_12 alpha omega">
                    	<div class="gap"></div>
                    </div>
					
                    <div id="single">
                    
                        <div class="grid_8 alpha">
                            
                            <div class="breadcrumb">
                            
                                <p>Home > <a href="#">World News</a> > <a href="#">Contact</a></p>
                                
                            </div><!--nreadcrumb-->
                            
                            <div id="content" class="contact">
                            
                            	<h1>Get in Touch</h1>


								<p>The simple contact form below comes packed within this template. The form includes jQuery validation to enhance user experience and the recipient email can be configured from the code.</p>
                            </div><!--content-->
                            
                            <div id="respond" class="contact">
                            
                                <?php if(isset($emailSent) && $emailSent == true) { ?>
            
                                <div class="thanks">
                                    <p>Thanks, your email was sent successfully.</p>
                                </div>
            
                                <?php } else { ?>
                    
                                <?php if(isset($hasError) || isset($captchaError)) { ?>
                                    <p class="error">Sorry, an error occurred.<p>
                                <?php } ?>
                
                                <form action="#" id="contactForm" method="post">
                                    
                                    <p><label for="contactName">Name</label>
                                    <input type="text" name="contactName" id="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" class="required requiredField" />
                                    </p>
									<?php if($nameError != '') { ?>
                                        <span class="error"><?=$nameError;?></span> 
                                    <?php } ?>
                            
                                    <p>
                                     <?php if($emailError != '') { ?>
                                        <span class="error"><?=$emailError;?></span>
                                    <?php } ?>
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" class="required requiredField email" />
                                   
                                    </p>
									
                            
                                    <p>
                                    <label for="commentsText">Message</label>
                                    <textarea name="comments" id="commentsText" rows="20" cols="30" class="required requiredField"><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea></p>
									<?php if($commentError != '') { ?>
                                        <span class="error"><?=$commentError;?></span> 
                                    <?php } ?>
            
                            
            
                                    <p><input type="hidden" name="submitted" id="submitted" value="true" />
                                    
                                    <p class="submit">
                                            
                                        <span class="left_side"><span class="right_side"><button class="btn" type="submit">Send Email</button></span></span>
                                        
                                    </p>
                                    
                                    <p class="submit_preload">
                                            
                                        <img src="images/duplex_comment_btn_bg_hover.png" alt="comm">
                                        <img src="images/duplex_comment_btn_right_hover.png" alt="comm">
                                        <img src="images/duplex_comment_btn_left_hover.png" alt="comm">
                                        
                                    </p>
            
                                </form>
                                
                            <?php } ?>
                                
                                <div class="clear"></div>
                            
                            </div><!--respond-->
                            
                            <div class="clear"></div>

                        </div><!--grid_8 alpha -->

                        <div class="clear"></div>
                        
                    </div><!--archive-->
                
                	<div class="grid_4 omega">
                
                        <div id="sidebar">
                        
                            <div class="widget">
                            
                                <form action="">
                                    <input type="text" class="s" name="s" value="to search, type and hit enter">
                                </form>
                            
                            </div><!--widget-->
                            
                            <div class="widget">
                        
                                <div class="tabs">
                                    
                                    <div class="tab_wrap">
                                    
                                        <ul class="nav">
                                            <li class="first tab_nav_1"><a href="#tabs-1">Popular</a></li>
                                            <li class="tab_nav_2"><a href="#tabs-2">Recent</a></li>
                                            <li class="tab_nav_3"><a href="#tabs-3">Comments</a></li>
                                            <li class="last tab_nav_4"><a href="#tabs-4">Tags</a></li>
                                        </ul>
                                        
                                        <div class="tab" id="tabs-1">
                                          
                                            <ul>
                                    
                                                <li>
                                                    <div class="image">
                                                        <a href="#"><img src="images/category_pic.jpg" alt="category pic"></a>
                                                    </div><!--image-->
                                                    
                                                    <div class="details">
                                                        <h5><a href="#">Fly Fishers Serving as Transports for Noxious Little</a></h5>
                                                        <span class="date">August 4 2010, <a href="#">8 Comments</a></span>
                                                    </div><!--details-->
                                                </li>
                                                
                                                <li>
                                                    <div class="image">
                                                        <a href="#"><img src="images/category_pic.jpg" alt="category pic"></a>
                                                    </div><!--image-->
                                                    
                                                    <div class="details">
                                                        <h5><a href="#">Fly Fishers Serving as Transports for Noxious Little</a></h5>
                                                        <span class="date">August 4 2010, <a href="#">8 Comments</a></span>
                                                    </div><!--details-->
                                                </li>
                                                
                                                <li>
                                                    <div class="image">
                                                        <a href="#"><img src="images/category_pic.jpg" alt="category pic"></a>
                                                    </div><!--image-->
                                                    
                                                    <div class="details">
                                                        <h5><a href="#">Fly Fishers Serving as Transports for Noxious Little</a></h5>
                                                        <span class="date">August 4 2010, <a href="#">8 Comments</a></span>
                                                    </div><!--details-->
                                                </li>
                                                
                                                <li>
                                                    <div class="image">
                                                        <a href="#"><img src="images/category_pic.jpg" alt="category pic"></a>
                                                    </div><!--image-->
                                                    
                                                    <div class="details">
                                                        <h5><a href="#">Fly Fishers Serving as Transports for Noxious Little</a></h5>
                                                        <span class="date">August 4 2010, <a href="#">8 Comments</a></span>
                                                    </div><!--details-->
                                                </li>
                                                
        
                                                <li class="last">
                                                    <div class="image">
                                                        <a href="#"><img src="images/category_pic.jpg" alt="category pic"></a>
                                                    </div><!--image-->
                                                    
                                                    <div class="details">
                                                        <h5><a href="#">Fly Fishers Serving as Transports for Noxious Little</a></h5>
                                                        <span class="date">August 4 2010, <a href="#">8 Comments</a></span>
                                                    </div><!--details-->
                                                </li>
                                            </ul>
                                          
                                        </div><!--tab-->
                                        
                                        <div class="tab" id="tabs-2">
                                           
                                           <ul>
                                    
                                                <li>
                                                    <div class="image">
                                                        <a href="#"><img src="images/category_pic.jpg" alt="category pic"></a>
                                                    </div><!--image-->
                                                    
                                                    <div class="details">
                                                        <h5><a href="#">Fly Fishers Serving as Transports for Noxious Little</a></h5>
                                                        <span class="date">August 4 2010, <a href="#">8 Comments</a></span>
                                                    </div><!--details-->
                                                </li>
                                                
                                                <li>
                                                    <div class="image">
                                                        <a href="#"><img src="images/category_pic.jpg" alt="category pic"></a>
                                                    </div><!--image-->
                                                    
                                                    <div class="details">
                                                        <h5><a href="#">Fly Fishers Serving as Transports for Noxious Little</a></h5>
                                                        <span class="date">August 4 2010, <a href="#">8 Comments</a></span>
                                                    </div><!--details-->
                                                </li>
                                                
                                                <li>
                                                    <div class="image">
                                                        <a href="#"><img src="images/category_pic.jpg" alt="category pic"></a>
                                                    </div><!--image-->
                                                    
                                                    <div class="details">
                                                        <h5><a href="#">Fly Fishers Serving as Transports for Noxious Little</a></h5>
                                                        <span class="date">August 4 2010, <a href="#">8 Comments</a></span>
                                                    </div><!--details-->
                                                </li>
                                                
                                                <li>
                                                    <div class="image">
                                                        <a href="#"><img src="images/category_pic.jpg" alt="category pic"></a>
                                                    </div><!--image-->
                                                    
                                                    <div class="details">
                                                        <h5><a href="#">Fly Fishers Serving as Transports for Noxious Little</a></h5>
                                                        <span class="date">August 4 2010, <a href="#">8 Comments</a></span>
                                                    </div><!--details-->
                                                </li>
                                                
                                                <li class="last">
                                                    <div class="image">
                                                        <a href="#"><img src="images/category_pic.jpg" alt="category pic"></a>
                                                    </div><!--image-->
                                                    
                                                    <div class="details">
                                                        <h5><a href="#">Fly Fishers Serving as Transports for Noxious Little</a></h5>
                                                        <span class="date">August 4 2010, <a href="#">8 Comments</a></span>
                                                    </div><!--details-->
                                                </li>
                                            </ul>
                                           
                                        </div><!--tab-->
                                        
                                        <div class="tab" id="tabs-3">
                                           
                                           <ul>
                                                <li>
                                                    <div class="image">
                                                        <a href="#"><img src="images/category_pic.jpg" alt="category pic"></a>
                                                    </div><!--image-->
                                                    
                                                    <div class="details">
                                                        <h5><a href="#">admin: Fly Fishers Serving as Transports for Noxious Little</a></h5>
                                                    </div><!--details-->
                                                </li>
                                                
                                                <li>
                                                    <div class="image">
                                                        <a href="#"><img src="images/category_pic.jpg" alt="category pic"></a>
                                                    </div><!--image-->
                                                    
                                                    <div class="details">
                                                        <h5><a href="#">admin: Fly Fishers Serving as Transports for Noxious Little</a></h5>
                                                    </div><!--details-->
                                                </li>
                                                
                                                <li>
                                                    <div class="image">
                                                        <a href="#"><img src="images/category_pic.jpg" alt="category pic"></a>
                                                    </div><!--image-->
                                                    
                                                    <div class="details">
                                                        <h5><a href="#">admin: Fly Fishers Serving as Transports for Noxious Little</a></h5>
                                                    </div><!--details-->
                                                </li>
                                                
                                                <li>
                                                    <div class="image">
                                                        <a href="#"><img src="images/category_pic.jpg" alt="category pic"></a>
                                                    </div><!--image-->
                                                    
                                                    <div class="details">
                                                        <h5><a href="#">admin: Fly Fishers Serving as Transports for Noxious Little</a></h5>
                                                    </div><!--details-->
                                                </li>
                                                
                                                <li class="last">
                                                    <div class="image">
                                                        <a href="#"><img src="images/category_pic.jpg" alt="category pic"></a>
                                                    </div><!--image-->
                                                    
                                                    <div class="details">
                                                        <h5><a href="#">admin: Fly Fishers Serving as Transports for Noxious Little</a></h5>
                                                    </div><!--details-->
                                                </li>
                                            </ul>
                                           
                                        </div><!--tab-->
                                        
                                        <div class="tab tab_tags" id="tabs-4">
                                            
                                            <div class="tag_wrap">
                                            
                                                <a href="#">news</a> <a href="#">twitter</a> <a href="#">apple</a>
                                                
                                                <div class="clear"></div>
                                                
                                            </div><!--tag_wrap-->
                                            
                                            <div class="clear"></div>
                                            
                                        </div><!--tab-->
                                        
                                    </div><!--tab_wrap-->
                                    
                                </div><!--tabs-->
                            
                            </div><!--widget-->
                        
                            <div class="widget">
                            
                                <div class="advert">
                                
                                    <ul>
                                        <li class="left"><a href="#"><img src="images/advert_125.jpg" alt="advert"></a></li>
                                        <li><a href="#"><img src="images/advert_125.jpg" alt="advert"></a></li>
                                    </ul>
                                    
                                </div><!--advert-->
                            
                            </div><!--widget-->
                            
                            <div class="widget">
                                
                                <div class="video">
                                
                                    <img src="images/video.jpg" alt="video">
                                    
                                    <p>Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scripta patrioque scribentur</p>
                                
                                </div><!--video-->
                            
                            </div><!--widget-->
                            
                            <div class="widget last">
                            
                                <div class="twitter">
                                
                                    <ul>
                                        <li><p><a href="#">@laurakalbag</a> I will be very soon. As a result of your previous recommendation on a blog post so it happens. Now just a few more letters here <small>31 minutes ago</small></p></li>
                                        <li><p><a href="#">@laurakalbag</a> I will be very soon. As a result of your previous recommendation on a blog post so it happens. Now just a few more letters here <small>31 minutes ago</small></p></li>
                                        <li class="last"><p><a href="#">@laurakalbag</a> I will be very soon. As a result of your previous recommendation on a blog post so it happens. Now just a few more letters here <small>31 minutes ago</small></p></li>
                                    </ul>
                                    
                                    <div class="clear"></div>
                                
                                </div><!--twitter-->
                                
                                <div class="follow"><a href="#">follow on Twitter....</a></div>
                                
                                <div class="twitter_bird"></div>
                                
                            </div><!--widget-->
                        
                        </div><!--sidebar-->
                  
                	</div><!--grid_4-->
        
                	<div class="clear"></div>
            
            	</div><!--single_bg-->
            
           		<div class="clear"></div>
            
        	</div><!--container_12-->
    
   		</div><!--the_body-->
    
    	<div id="footer">
    
            <div class="container_12">
                
                <div class="grid_12">
                
                    <div id="footer_bg">
                    
                        <div id="third_nav">
                        
                            <ul>
                                <li><span> // </span><a href="#">Elements</a></li>
                                <li><span> // </span><a href="#">Archives</a></li>
                                <li><span> // </span><a href="#">Full Width</a></li>
                                <li><span> // </span><a href="#">Contact Form</a></li>
                                <li><span> // </span><a href="#">Another 3.0 Menu</a></li>
                            </ul>
                            
                            <div id="back_to_top"><a href="#header"><span>Back to top </span><span class="arrow"></span></a></div>
                            
                        </div><!--third_nav-->
                        
                        <div id="footer_bar"></div>
                        
                        <div class="column">
                        
                            <div class="widget">
                                
                                <h6>About Duplex</h6>
                                
                                <p>The Duplex theme comes with support for WP3.0 menus and an extensive set of back-end options.</p>
    
                                <p>The theme supports 10 widget locations and 8 custom-made widgets; 300x200 Ad Widget, 125x125 Ads Widget, 120x240 Ad Widget, Flickr Photos Widget, Latest Tweets Widget, Tabbed Content Widget, RSS Subscribers and Followers Widget and a Video Widget - Phew!</p>
    
                                <p>Inbuilt related posts, contact form, author bios, archives template, threaded comments, shortcodes, image slider.... you get the idea ;)</p>
                                
                            </div><!--widget-->
                        
                        </div><!--column-->
                        
                        <div class="column">
                        
                            <div class="widget">
                                
                                <h6>Latest Posts</h6>
                                
                                <ul>
                                    <li class="first"><a href="#">Skype 5.0 Beta for Mac Arrives… But Where's Facebook?</a></li>
                                    <li><a href="#">Apple Fails to Fix iPhone Daylight Savings Time Alarm Bug</a></li>
                                    <li><a href="#">71% of Internet Users Run Latest Version of Their Browsers</a></li>
                                    <li><a href="#">Netgear Wants to Wirelessly Connect New Televisions</a></li>
                                    <li><a href="#">With Homegrown Talent, a Rising Power on Long Island</a></li>
                                    <li class="last"><a href="#">Displaying Shooting Touch, Knicks Return to Prime Time</a></li>
                                </ul>
                                
                            </div><!--widget-->
                        
                        </div><!--column-->
                        
                        <div class="column last">
                        
                            <div class="widget">
                                
                                <h6>Flickr Photostream</h6>
                                
                                <div class="flickr">
                                    
                                    <div><a href="#"><img src="images/content/flickr.jpg" width="55" height="55" alt="flickr"></a></div>
                                    <div><a href="#"><img src="images/content/flickr.jpg" width="55" height="55" alt="flickr"></a></div>
                                    <div><a href="#"><img src="images/content/flickr.jpg" width="55" height="55" alt="flickr"></a></div>
                                    <div class="last"><a href="#"><img src="images/content/flickr.jpg" width="55" height="55" alt="flickr"></a></div>
                                    
                                    <div><a href="#"><img src="images/content/flickr.jpg" width="55" height="55" alt="flickr"></a></div>
                                    <div><a href="#"><img src="images/content/flickr.jpg" width="55" height="55" alt="flickr"></a></div>
                                    <div><a href="#"><img src="images/content/flickr.jpg" width="55" height="55" alt="flickr"></a></div>
                                    <div class="last"><a href="#"><img src="images/content/flickr.jpg" width="55" height="55" alt="flickr"></a></div>
                                    
                                    <div><a href="#"><img src="images/content/flickr.jpg" width="55" height="55" alt="flickr"></a></div>
                                    <div><a href="#"><img src="images/content/flickr.jpg" width="55" height="55" alt="flickr"></a></div>
                                    <div><a href="#"><img src="images/content/flickr.jpg" width="55" height="55" alt="flickr"></a></div>
                                    <div class="last"><a href="#"><img src="images/content/flickr.jpg" width="55" height="55" alt="flickr"></a></div>
                                    
                                    <span class="clear"></span>
                                    
                                </div><!--flickr-->
                                
                            </div><!--widget-->
                            
                            <div class="clear"></div>
                        
                        </div><!--column-->
                        
                        <div class="clear"></div>
                        
                    </div><!--foote_bg-->
                    
                    <div id="footer_bottom">
                    
                        <p class="left">Copyright 2010 <a href="index.html">Duplex</a>. All Rights Reserved.</p>
                    <p class="right"><a href="http://www.premiumpixels.com/duplex-html">Duplex template</a> by <a href="http://www.premiumpixels.com">Orman</a></p>
                        
                        <div class="clear"></div>
                    
                    </div><!--bottom-->
                    
                </div><!--grid_12-->
                
                <div class="clear"></div>
                    
             </div><!--container_12-->
         
         <div class="clear"></div>
      
    </div><!--footer-->
	
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
    <script type="text/javascript" src="js/jquery.cycle.all.min.js"></script> 
    <script type="text/javascript" src="js/jquery-ui-1.8.5.custom.min.js"></script> 
    <script type="text/javascript" src="js/custom.js"></script> 

</body>
</html>