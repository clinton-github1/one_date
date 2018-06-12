<?php include "header.php";?>
<h1>Contattaci</h1>
<p>Compila il modulo qui sotto e mandaci i tuoi commenti o il tuo riscontro.</p>
<div class="contact-form">
    
        <form action="contact.php" method="post">
            <label for="name">Nome:</label><br>
            <input type="text" name="name" placeholder="enter full name" required><br>
            <label for="email">Email:</label><br>
            <input type="email" name="email" placeholder="enter valid email address" required><br>
            <label for="message">Messaggio: </label><br>
            <textarea maxlength="100000" id="message" name="message" placeholder="Write something.." style="height:18%" required></textarea>
<!--
            <label for="verify">Verify:</label><br>
            <input type="text" name="verify" placeholder="enter contents of the image" required><br>
-->
            <input type="submit" name="submit" value="Invia">
        
        </form>
    
    </div>
<?php include "../shared/fb_link.php";?>
<?php include "footer.php";?>