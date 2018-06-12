<?php include "header.php";?>
<h1>Kontaktujte nás</h1>
<p>Vepište váš komentář/zpětnou vazbu do následujícího formuláře</p>
<div class="contact-form">
    
        <form action="contact.php" method="post">
            <label for="name">Jméno:</label><br>
            <input type="text" name="name" placeholder="enter full name" required><br>
            <label for="email">Email:</label><br>
            <input type="email" name="email" placeholder="enter valid email address" required><br>
            <label for="message">Text zprávy:</label><br>
            <textarea maxlength="100000" id="message" name="message" placeholder="Write something.." style="height:18%" required></textarea>
<!--
            <label for="verify">Verify:
            <input type="text" name="verify" placeholder="enter contents of the image" required><br>
-->
            <input type="submit" name="submit" value="Pošlete email">
        
        </form>
    
    </div>
<?php include "../shared/fb_link.php";?>
<?php include "footer.php";?>