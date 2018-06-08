<?php include "header.php"; ?>

<section class="petition">

<div class="petition-address">
    
    <div class="petition-add">To His Holiness, Pope Francis<br>
and to all Church leaders</div>
    
    </div>

    <p>Your Holiness, Your Beatitudes, Your Eminences, Your Excellencies and most Reverend Dignitaries of all the Christian Churches, </p>

    <p>In a spirit of filial love, we as members of the People of God from a variety of Christian churches united in a desire for Christian unity, humbly bring before you this petition to secure the celebration of Easter at one common date so that all Christians may celebrate this feast in union. With this petition we also offer our ardent prayer for the fulfilment of this petition.</p> 

    <p>We believe the present schisms between the Christian churches are a sin against Christ who prayed to the Father: ‘I do not pray for these only, but also for those who believe in me through their word, that they may all be one; even as thou, Father, art in me, and I in thee, that they also may be in us, so that the world may believe that thou hast sent me.’ (Jn 17:20-21). We believe this lack of visible unity causes dismay and disrespect for Christianity and leads many souls away from Christ.</p> 

    <p>Many obstacles inhibit this reunification, but we believe there is one significant step that does not present moral nor dogmatic obstacles, but that will nevertheless be a major step toward the lost union: The unification of the Dates of Easter! We believe this act will be a decisive step toward reunion, a reunion that will cause many to believe and bring peace to this ailing world.</p> 

    <p>We will pray ardently to the Lord that he will help you, the dignitaries of the churches, to find the best way to achieve this important step and pledge to pray that you may be successful.</p> 

    <p>Yours sincerely and respectfully,</p>

</section>
<section class="petition2">

    <div class="petition-form">
    
        <form action="petition.php" method="post">
            <label for="name">Name:</label><br>
            <input type="text" name="name" placeholder="enter full name" required><br>
            <label for="email">Email:</label><br>
            <input type="email" name="email" placeholder="enter valid email address" required><br>
            <label for="city">City:</label><br>
            <input type="text" name="city" placeholder="enter current city" required><br>
            <label for="country">Country:</label><br>
            <input type="text" name="country" placeholder="enter your country" required><br>
            <input type="checkbox" name="progress" value="Checked" required checked> Please tick this box if you wish to be kept informed as to the progress of this petition<br><br>
<!--
            <label for="country">Verify:</label><br>
            <input type="text" name="verify" placeholder="enter contents of the image" required><br>
-->
            <input type="submit" name="submit" value="SIGNUP">
        
        </form>
    
    </div>
    
    <?php include "fb_link.php";?>
</section>




<?php include "footer.php"; ?>