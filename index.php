<?php 
session_start();
	include("connections.php");
	include("functions.php");

	$user_data = check_login($con);

  ?>

  <!DOCTYPE html>
<html>
<head>
	<title>Állatok Othona</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
#rendeles{
  text-align: center;
}
</style>
</head>
<body class="w3-light-grey">

    <a href="logout.php">logout</a>
    
    <br>
    Hello <?php echo $user_data['user_name']; ?>

    <div class="w3-content" style="max-width:1400px">

<header class="w3-container w3-center w3-padding-32"> 
  <h1><b>Állatmenhely - Az állatok otthona.</b></h1>
  <p>Unalmas napjainkban mire másra lenne szükség? <span class="w3-tag">Állatokra!</span></p>
  <p><b>Eddig örökbefogadott állatok:  </b> <span class="w3-tag">1305</span></span></p>
</header>


<div class="w3-col l5 s10 w3-right">
  <div class="w3-card-4  w3-margin w3-white">
    <div class="w3-container">
      <h3><b>Örökbefogadási feltételeink</b></h3>
      <h5>Örökbefogadás feltételei: <span class="w3-opacity">Az örökbefogadás nálunk a legegyszerűbb!</span></h5>
    </div>

    <div class="w3-container">
      <p>Feltételeink:</p>
      <p>- cselekvőképes személy</p>
      <p>- Ajándékba állatot nem adhatunk ki! Senkit nem szabad meglpeni álattal.</p>
      <p>- Az örökbefogadó életkorának el kell érnie a 18 életkort.</p>
      <p>- Megfelelő életkörülmény biztosítása</p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><button class="w3-button w3-padding-large w3-white w3-border"><b>Tovább a rendeléshez</b></button></p>
        </div>
        <div class="w3-col m4 w3-hide-small">
          <p><span class="w3-padding-large w3-right"><b>Pozitív Reakciók:  </b> <span class="w3-tag">135</span></span></p>
        </div>
      </div>
    </div>
  </div>
</div>
  <hr>

  <div class="w3-col l5 s10 w3-left">
    <div class="w3-card-4  w3-margin w3-white">
      <div class="w3-container">
      <h3><b>Az örökbefogadás menete</b></h3>
      <h5>Az örökbefogadást próbáltuk a legrövidebbre intézni.<span class="w3-opacity"> És sikerült is!</span></h5>
    </div>

    <div class="w3-container">
      <p>Az örökbefogadás menete:</p>
      <p>- Bekérjük a megrendelő adatait.</p>
      <p>- A kijelölt állat két hét karanténba kerül.</p>
      <p>- Az állat egy teljes ellenörzésen esik át</p>
      <p>- A megrendelő személy után egy vizsgálat indul, hogy valóban megfelel-e a feltételeknek.</p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><button class="w3-button w3-padding-large w3-white w3-border"><b>Tovább a rendeléshez</b></button></p>
        </div>
        <div class="w3-col m4 w3-hide-small">
          <p><span class="w3-padding-large w3-right"><b>Pozitív reakciók: </b> <span class="w3-badge">120</span></span></p>
        </div>
      </div>
    </div>
  </div>
</div>

  
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>Eddigi rendelők:</h4>
    </div>
    <ul class="w3-ul w3-hoverable w3-white">
      <li class="w3-padding-16">
        <span class="w3-large">Juhász Máté</span><br>
        <span>2 Állat</span>
      </li>
      <li class="w3-padding-16">
        <span class="w3-large">Molnár Zsombor</span><br>
        <span>1 Állat</span>
      </li> 
      <li class="w3-padding-16">
        <span class="w3-large">Szász Benjámin</span><br>
        <span>1 Állat</span>
      </li>   
      <li class="w3-padding-16 w3-hide-medium w3-hide-small">
        <span class="w3-large">Ádám Kalapos</span><br>
        <span>3 Állat</span>
      </li>  
    </ul>
  </div>
  <hr> 
<br>


<div id="rendeles">
    Az állat fajtája: <select><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select>
<br>
    A megrendelő email címe: <input type="email">
<br>
    A megrendelő Telefonszáma: <input type="number">
<br>
    A megrendelő Neve:: <input type="text">
<br>
<br>
<input type="button" value="Kérvény Leadása" onclick="alert('Sikeresen leadtad a kérvényt')">
</div>

<footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
  <button class="w3-button w3-black w3-disabled w3-padding-large w3-margin-bottom">Örökbefogadási feltételeink</button>
  <button class="w3-button w3-black w3-padding-large w3-margin-bottom">Az örökbefogadás menete</button>
  <button class="w3-button w3-black w3-padding-large w3-margin-bottom">Örökbefogadás kérvény leadása</button>
</footer>
</body>
</html>