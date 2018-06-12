<?php include "header.php"; ?>

<section class="petition">

<div class="petition-address">
    
    <div class="petition-add">A Sua Santidade, o Papa Francis<br>
e a todos os líderes da Igreja</div>
    
    </div>

    <p>Santidade, Beatitudes, Eminências, Excelências e Reverendíssimos Dignatários de todas as Igrejas Cristãs: </p>

<p>Em espírito de amor filial, nós, membros do Povo de Deus de diversas igrejas cristãs, unidos no desejo da unidade cristã, humildemente lhes apresentamos este abaixo-assinado para assegurar a celebração da Páscoa em uma data única para todos, para que todos os cristãos possam celebrar esta festa em união. Com esse abaixo-assinado também oferecemos nossa fervorosa oração para a concretização deste pedido.</p> 

<p>Acreditamos que os presentes cismas entre as igrejas cristãs são um pecado contra Cristo, que orou ao Pai: Não rogo só por eles, mas também por aqueles que hão-de crer em mim, por meio da sua palavra, para que todos sejam um só, como Tu, Pai, estás em mim e Eu em ti; para que assim eles estejam em Nós e o mundo creia que Tu me enviaste (Jo 17, 20-21). Acreditamos que essa falta de unidade visível causa espanto e desrespeito para com a Cristandade e afasta de Cristo muitas almas.</p> 

<p>Muitos obstáculos impedem essa reunificação, mas cremos que há um passo significativo que não apresenta obstáculos morais nem dogmáticos e que, contudo, será um importante passo para a unidade perdida: a unificação das datas da Páscos! Acreditamos que esse ato será um passo decisivo para a reconciliação, uma reconciliação que leverá muitos a crer e trará paz a esse mundo aflito.</p> 

<p>Vamos orar fervorosamente ao Senhor para que ajude vocês, dignatários das igrejas, a encontrar a melhor forma de dar esse importante passo e nos comprometemos a rezar para que sejam bem-sucedidos.</p> 

    <p>Respeitosamente,</p>

</section>
<section class="petition2">

    <div class="petition-form">
    
        <form action="petition.php" method="post">
            <label for="name">Nome:</label><br>
            <input type="text" name="name" placeholder="enter full name" required><br>
            <label for="email">Email:</label><br>
            <input type="email" name="email" placeholder="enter valid email address" required><br>
            <label for="city">Cidade:</label><br>
            <input type="text" name="city" placeholder="enter current city" required><br>
            <label for="country">País:</label><br>
            <input type="text" name="country" placeholder="enter your country" required><br>
            <input type="checkbox" name="progress" value="Checked" required checked> Marque esta caixa se quiser manter-se informado(a) sobre o progresso deste abaixo-assinado<br><br>
<!--
            <label for="country">Verify:</label><br>
            <input type="text" name="verify" placeholder="enter contents of the image" required><br>
-->
            <input type="submit" name="submit" value="Assine">
        
        </form>
    
    </div>
    
    <?php include "../shared/fb_link.php";?>
</section>




<?php include "footer.php"; ?>