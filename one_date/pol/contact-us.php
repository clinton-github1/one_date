<?php include "header.php";?>
<h1>Skontaktuj się z nami</h1>
<p>Wypełnij poniższy formularz, żeby przesłać nam swój komentarz / swoje wsparcie.</p>
<div class="contact-form">
    
        <form action="contact.php" method="post">
            <label for="name">Imię i nazwisko:</label><br>
            <input type="text" name="name" placeholder="enter full name" required><br>
            <label for="email">Email:</label><br>
            <input type="email" name="email" placeholder="enter valid email address" required><br>
            <label for="message">Wiadomość:</label><br>
            <textarea maxlength="100000" id="message" name="message" placeholder="Write something.." style="height:18%" required></textarea>
<!--
            <label for="verify">Verify:</label><br>
            <input type="text" name="verify" placeholder="enter contents of the image" required><br>
-->
            <input type="submit" name="submit" value="Wyślij email">
        
        </form>
    
    </div>
<?php include "../shared/fb_link.php";?>
<?php include "footer.php";?>