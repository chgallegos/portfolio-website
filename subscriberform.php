<?php
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>
    <form id="contact_form" action="subscriberform.php" method="POST" enctype="multipart/form-data">
										<div class="col-6 col-12-xsmall">
										  <label class="required" for="name">Your name:</label><br />
										  <input id="name" class="input" name="name" type="text" value="" size="30" /><br />
										  <span id="name_validation" class="error_message"></span>
										</div>
										<div class="col-6 col-12-xsmall">
										  <label class="required" for="email">Your email:</label><br />
										  <input id="email" class="input" name="email" type="text" value="" size="30" /><br />
										  <span id="email_validation" class="error_message"></span>
										</div>
										<div class="col-12">
										  <label class="required" for="message">Your message:</label><br />
										  <textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
										  <span id="message_validation" class="error_message"></span>
										</div>
										<div class="col-12">
											<ul class="actions">
												<li><input type="submit" class="primary" value="Send Message" /></li>
												<li><input type="reset" value="Reset Form" /></li>
											</ul>
										</div>  
										  <!-- <input id="submit_button" type="submit" value="Send email" /> -->
									  </form>
    <?php
    } 
else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
        echo "All fields are required, please fill <a href=\"\">the form</a> again.";
        }
    else{        
        $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
        mail("chrisale89@gmail.com", $subject, $message, $from);
        echo "Email sent!";
        }
    }  
?>