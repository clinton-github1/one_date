<div class="topnav" id="myTopnav">
   <div class="dropdown">
    <button class="dropbtn">Chinese
      <i class="ion-chevron-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../eng/index.php">English</a>
      <a href="#">Czech</a>
      <a href="#">Danish</a>
      <a href="#">Deutsch</a>
      <a href="#">Espanol</a>
      <a href="#">Francais</a>
      <a href="#">Greek</a>
      <a href="#">Hungarian</a>
      <a href="#">Italiano</a>
      <a href="#">Japanese</a>
      <a href="#">Nederlands</a>
      <a href="#">Polska</a>
      <a href="#">Portuguese</a>
      <a href="#">Russian</a>
    </div>
  </div>  
  <a href="index.php">首頁</a>  
  <a href="different-dates.php">不同的日期?</a>
  <a href="why-one-date.php">為什麼要只有一個復活節?</a>
  <a href="what-can-we-do.php">我們能做什麼</a>
  <a href="endorsement.php">Endorsements</a>
  <a href="inspiration.php">靈感</a>
  <a href="sign-petition.php">簽請願書</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

<!--

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("myTopnav");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
-->
