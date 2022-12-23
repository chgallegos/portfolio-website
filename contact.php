<?php
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>
   <form method="post" action="contact.php">
		<div class="row gtr-uniform">
			<div class="col-6 col-12-xsmall"><input type="text" name="name" id="name" placeholder="Name" /></div>
				<div class="col-6 col-12-xsmall"><input type="email" name="email" id="email" placeholder="Email" /></div>
					<div class="col-12"><input type="text" name="subject" id="subject" placeholder="Subject" /></div>
						<div class="col-12"><textarea name="message" id="message" placeholder="Message" rows="6"></textarea></div>
							<div class="col-12">
								<ul class="actions">
									<li><input type="submit" class="primary" value="Send Message" /></li>
									<li><input type="reset" value="Reset Form" /></li>
								</ul>
							</div>
						</div>
					</form>
    <?php
    } 
// Redirect to
header("Location:index.html");

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
// Redirect to
header("Location:index.html");
?>