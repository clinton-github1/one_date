<?php include "header.php";?>

<h1>聯絡我們</h1>
<p>在下面表格填入資料，送給我們您的意見</p>

<div class="contact-form">
    
        <form action="contact.php" method="post">
            <label for="name">姓名: </label><br>
            <input type="text" name="name" placeholder="enter full name" required><br>
            <label for="email">電子郵件:</label><br>
            <input type="email" name="email" placeholder="enter valid email address" required><br>
            <label for="message">留言內容:</label><br>
            <textarea maxlength="100000" id="message" name="message" placeholder="Write something.." style="height:18%" required></textarea>
<!--
            <label for="verify">Verify:</label><br>
            <input type="text" name="verify" placeholder="enter contents of the image" required><br>
-->
            <input type="submit" name="submit" value="傳送電子郵件">
        
        </form>
    
    </div>
<?php include "fb_link.php";?>
<?php include "footer.php";?>