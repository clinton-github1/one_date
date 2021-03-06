<?php include "header.php"; ?>

<section class="petition">

<div class="petition-address">
    
    <div class="petition-add">À Sa Sainteté Pope Francis<br>
et à tous les chefs de l’Eglise</div>
    
    </div>

    <p>Sainteté, Béatitudes, Éminences, Excellences et très révérends dignitaires de toutes les Églises chrétiennes,  </p>

    <p>En esprit d’amour filial, nous, membres du peuple de Dieu de différentes Églises chrétiennes, unis par le désir d’unité chrétienne, vous présentons humblement cette pétition pour la célébration de Pâques à une date commune, afin que tous les Chrétiens puissent célébrer cette fête en union. Avec cette pétition, nous vous offrons également nos ardentes prières pour l’accomplissement de cette pétition.</p> 

    <p>Nous pensons que les schismes actuels entre les Églises chrétiennes sont un péché contre le Christ, qui a prié le Père : 'Je ne prie pas seulement pour ceux qui sont là, mais encore pour ceux qui accueilleront leur parole et croiront en moi : Que tous, ils soient un, comme toi, Père, tu es en moi, et moi en toi. Qu’ils soient un en nous, eux aussi, pour que le monde croie que tu m’as envoyé.' (Jn 17, 20-21). Nous croyons que ce manque d’unité visible est cause de désarroi et d’irrespect envers le Christianisme, et éloigne du Christ beaucoup d’âmes. </p>

    <p>De nombreux obstacles inhibent cette réunification, mais nous croyons qu’il y a une démarche significative qui ne présente aucun obstacle moral ni dogmatique, mais qui sera néanmoins une avancée majeure vers l’unité retrouvée: l’unification des dates de Pâques ! Nous croyons que cet acte sera une avancée décisive vers la réunion, une réunion qui en amènera beaucoup à croire et à apporter la paix à ce monde malade. </p>

    <p>Nous prierons ardemment le Seigneur qu’il vous aide, vous dignitaires des Églises, à trouver la meilleure voie pour accomplir ce pas important et nous engageons à prier pour que vous y réussissiez.</p> 

<p>Veuillez agréer l’expression de notre sincérité et de notre filial respect.</p> 

</section>
<section class="petition2">

    <div class="petition-form">
    
        <form action="petition.php" method="post">
            <label for="name">Nom:</label><br>
            <input type="text" name="name" placeholder="enter full name" required><br>
            <label for="email">Votre adresse de courriel:</label><br>
            <input type="email" name="email" placeholder="enter valid email address" required><br>
            <label for="city">Ville:</label><br>
            <input type="text" name="city" placeholder="enter current city" required><br>
            <label for="country">Pays:</label><br>
            <input type="text" name="country" placeholder="enter your country" required><br>
            <input type="checkbox" name="progress" value="Checked" required checked> Veuillez sélectionner cette option si vous désirez rester informé quant à l’évolution de cette pétition<br><br>
<!--
            <label for="country">Verify:</label><br>
            <input type="text" name="verify" placeholder="enter contents of the image" required><br>
-->
            <input type="submit" name="submit" value="Votez">
        
        </form>
    
    </div>
    
    <?php include "../shared/fb_link.php";?>
</section>




<?php include "footer.php"; ?>