<?php include "header.php";?>
<h1>Contactez-nous</h1>
<p>Si vous désirez nous envoyer vos commentaires et suggestions, veuillez remplir le formulaire ci-dessous :</p>
<div class="contact-form">
    
        <form action="contact.php" method="post">
            <label for="name">Nom:</label><br>
            <input type="text" name="name" placeholder="enter full name" required><br>
            <label for="email">Votre adresse de courriel: </label><br>
            <input type="email" name="email" placeholder="enter valid email address" required><br>
            <label for="message">Message</label><br>
            <textarea maxlength="100000" id="message" name="message" placeholder="Write something.." style="height:18%" required></textarea>
<!--
            <label for="verify">Verify:</label><br>
            <input type="text" name="verify" placeholder="enter contents of the image" required><br>
-->
            <input type="submit" name="submit" value="Envoyez votre message">
        
        </form>
    
    </div>
<?php include "../shared/fb_link.php";?>
<?php include "footer.php";?>