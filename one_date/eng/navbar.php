<div class="topnav" id="myTopnav">
   <div class="dropdown">
    <button class="dropbtn">English 
      <i class="ion-chevron-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../chin/index.php">Chinese</a>
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
  <a href="index.php">Home</a>  
  <a href="different-dates.php">Different Dates?</a>
  <a href="why-one-date.php">Why One Easter Date?</a>
  <a href="what-can-we-do.php">What can we do?</a>
  <a href="endorsement.php">Endorsements</a>
  <a href="inspiration.php">Inspiration</a>
  <a href="sign-petition.php">Sign the Petition</a>
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
