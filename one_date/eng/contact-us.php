<?php include "header.php";?>
<h1>Contact us</h1>
<p>Fill in the form below to send us your comments / feedback</p>
<div class="contact-form">
    
        <form action="contact.php" method="post">
            <label for="name">Name:</label><br>
            <input type="text" name="name" placeholder="enter full name" required><br>
            <label for="email">Email:</label><br>
            <input type="email" name="email" placeholder="enter valid email address" required><br>
            <label for="message">Message</label><br>
            <textarea maxlength="100000" id="message" name="message" placeholder="Write something.." style="height:18%" required></textarea>
<!--
            <label for="verify">Verify:</label><br>
            <input type="text" name="verify" placeholder="enter contents of the image" required><br>
-->
            <input type="submit" name="submit" value="SEND">
        
        </form>
    
    </div>
<?php include "fb_link.php";?>
<?php include "footer.php";?>