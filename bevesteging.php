
<?php $tafelnummer = htmlspecialchars($_GET["tn"]);?> 

<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="bevesteging.css">
    <title>Document</title>
</head>
<style>

</style>
<body>

<div class="center">
<div class="groenebg">
<h1>Dank u voor de bestelling</h1>

<p style="margin-bottom:0px;">Jouw bestelling is onderweg</p>
<p style="margin-top:4px;">Wij zijn sneller bij u dan Bol.com</p>
<div class="marginbot">
	<p class="font">We keren terug naar begin pagina</p>
	<progress min="0" max="10" value="0" id="progressBar" />
</div>




</div>
<img class="fotoklj" src="./fotos/KLJslogan.png" alt="KLJ logo">
</div>

<script>
var timeleft = 10;
var downloadTimer = setInterval(function(){
  if(timeleft <= 0){
    clearInterval(downloadTimer);
  }
  document.getElementById("progressBar").value = 10 - timeleft;
  timeleft -= 1;

  if(timeleft < 0){
  location.replace('./verwijspagina.php?tn=<?php echo $tafelnummer; ?>')
  } 
}, 1000);
</script>
</body>
</html>