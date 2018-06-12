<?php include "header.php";?>
<h1>お問い合わせ</h1>
<p>コメント／フィードバックはこのフォームに入力してください</p>
<div class="contact-form">
    
        <form action="contact.php" method="post">
            <label for="name">氏名:</label><br>
            <input type="text" name="name" placeholder="enter full name" required><br>
            <label for="email">メールアドレス:</label><br>
            <input type="email" name="email" placeholder="enter valid email address" required><br>
            <label for="message">メッセージ:</label><br>
            <textarea maxlength="100000" id="message" name="message" placeholder="Write something.." style="height:18%" required></textarea>
<!--
            <label for="verify">Verify:</label><br>
            <input type="text" name="verify" placeholder="enter contents of the image" required><br>
-->
            <input type="submit" name="submit" value="メールを送信する">
        
        </form>
    
    </div>
<?php include "../shared/fb_link.php";?>
<?php include "footer.php";?>