<?php
session_start();
$counter_name = "counter.txt";
if (!file_exists($counter_name)) {
  $f = fopen($counter_name, "w");
  fwrite($f,"0");
  fclose($f);
}
// Read the current value of our counter file
$f = fopen($counter_name,"r");
$counterVal = fread($f, filesize($counter_name));
fclose($f);

$tnummer = $_GET["tnummer"];
$comments= $_GET["comments"];
$cola=$_GET["cola"];
$colamax=$_GET["colamax"];
$icetea=$_GET["icetea"];
$water=$_GET["water"];
$bwater=$_GET["bwater"];
$bier=$_GET["bier"];
$kriek=$_GET["kriek"];
$wlimo=$_GET["wlimo"];
$glimo=$_GET["glimo"];
$wtrapist=$_GET["wtrapist"];
$wtrippel=$_GET["wtrippel"];
$koffie=$_GET["koffie"];
$dkoffie=$_GET["dkoffie"];
$duvel=$_GET["duvel"];
$karmeliet=$_GET["karmeliet"];
$wwijn=$_GET["wwijn"];
$rwijn=$_GET["rwijn"];
$hugo=$_GET["hugo"];
$sangria=$_GET["sangria"];
$bmoketail=$_GET["bmoketail"];
$pwg=$_GET["pwg"];
$ps=$_GET["ps"];
$pk=$_GET["pk"];
$psk=$_GET["psk"];
$zchips=$_GET["Zchips"];
$pchips=$_GET["Pchips"];


$betaal = $_GET["re"]; 

$Totalekost=0;


$tnummer1= 'tafelnummer:' . $tnummer;

$body = " De bestelling  <table> <tr> <td style=\"width:40%\"> <p> Bestelling </p></td> <td style=\"width:20%\"><p>Aantal</p> </td> <td style=\"width:20%\"> <p>Prijs per</p> </td><td style=\"width:20%\"> <p>Totale prijs</p> </td></tr>" ;

if ($cola > 0){
    $pcola = $cola * 2;
    $body = $body . " <tr> <td>" .'Pepsi cola: '."</td> <td>". $cola . "</td> <td> €2 </td><td>€".$pcola."</td></tr>" ;
    $Totalekost=$Totalekost + $pcola ;
}
if ($colamax > 0){
    $pcolamax = $colamax * 2;
    $body = $body . " <tr> <td>" .'Pepsi max: '."</td> <td>". $colamax . "</td> <td> €2 </td><td>€".$pcolamax."</td></tr>" ;
    $Totalekost=$Totalekost + $pcolamax ;
}
if ($icetea > 0){
    $picetea = $icetea * 2;
    $body = $body . " <tr> <td>" .'Icetea: ' . "</td> <td>". $icetea . "</td><td> €2 </td><td>€".$picetea."</td> </tr>";
    $Totalekost=$Totalekost + $picetea ;
}
if ($wlimo > 0){
    $pwlimo = $wlimo * 2;
    $body = $body .  " <tr> <td>" .'Witte limonade: ' . "</td> <td>". $wlimo . "</td><td> €2 </td><td>€".$pwlimo."</td> </tr>";
    $Totalekost=$Totalekost + $pwlimo ;
}
if ($glimo > 0){
    $pglimo = $glimo * 2;
    $body = $body .  " <tr> <td>" .'Gele limonade: ' . "</td> <td>". $glimo . "</td><td> €2 </td><td>€".$pglimo."</td> </tr>";
    $Totalekost=$Totalekost + $pglimo ;
}
if ($water > 0){
    $pwater = $water * 2;
    $body = $body .  " <tr> <td>" .'Plat water: ' . "</td> <td>". $water . "</td><td> €2 </td><td>€".$pwater."</td> </tr>";
    $Totalekost=$Totalekost + $pwater ;
}
if ($bwater > 0){
    $pbwater = $bwater * 2;
    $body = $body .  " <tr> <td>" .'Bruiswater: ' . "</td> <td>". $bwater . "</td><td> €2 </td><td>€".$pbwater."</td> </tr>";
    $Totalekost=$Totalekost + $pbwater ;
}
if ($koffie > 0){
    $pkoffie = $koffie * 2;
    $body = $body .  " <tr> <td>" .'Koffie: ' . "</td> <td>". $koffie . "</td><td> €2 </td><td>€".$pkoffie."</td> </tr>";
    $Totalekost=$Totalekost + $pkoffie ;
}
if ($dkoffie > 0){
    $pdkoffie = $dkoffie * 2;
    $body = $body .  " <tr> <td>" .'Déca koffie: ' . "</td> <td>". $dkoffie . "</td><td> €2 </td><td>€".$pdkoffie."</td> </tr>";
    $Totalekost=$Totalekost + $pdkoffie ;
}
if ($bier > 0){
    $pbier = $bier * 2;
    $body = $body .  " <tr> <td>" .'Bier: ' . "</td> <td>". $bier . "</td> <td> €2</td><td>€".$pbier."</td></tr>";
    $Totalekost=$Totalekost + $pbier ;
}
if ($kriek > 0){
    $pkriek = $kriek * 2.5;
    $body = $body .  " <tr> <td>" .'Kriek: ' . "</td> <td>". $kriek . "</td> <td> €2,5 </td><td>€".$pkriek."</td></tr>";
    $Totalekost=$Totalekost + $pkriek ;
}
if ($wtrippel > 0){
    $pwtrippel = $wtrippel * 3.6;
    $body = $body .  " <tr> <td>" .'Westmalle tripel: ' . "</td> <td>". $wtrippel . "</td><td> €3,6 </td><td>€".$pwtrippel."</td> </tr>";
    $Totalekost=$Totalekost + $pwtrippel ;
}
if ($wtrapist > 0){
    $pwtrapist = $wtrapist * 3.6;
    $body = $body .  " <tr> <td>" .'Westmalle trappist: ' . "</td> <td>". $wtrapist . "</td> <td> €3,6 </td><td>€".$pwtrapist."</td></tr>";
    $Totalekost=$Totalekost + $pwtrapist ;
}
if ($karmeliet > 0){
    $pkarmeliet = $karmeliet * 3.6;
    $body = $body .  " <tr> <td>" .'Tripel karmeliet: ' . "</td> <td>". $karmeliet . "</td><td> €3,6 </td><td>€".$pkarmeliet."</td></tr>";
    $Totalekost=$Totalekost + $pkarmeliet;
}
if ($duvel > 0){
    $pduvel = $duvel * 3.6;
    $body = $body .  " <tr> <td>" .'Duvel: ' . "</td> <td>". $duvel . "</td><td> €3,6 </td><td>€".$pduvel."</td> </tr>";
    $Totalekost=$Totalekost + $pduvel;
}
if ($wwijn > 0){
    $pwwijn = $wwijn * 3.5;
    $body = $body .  " <tr> <td>" .'Witte wijn: ' . "</td> <td>". $wwijn . "</td> <td> €3,5 </td><td>€".$pwwijn."</td></tr>";
    $Totalekost=$Totalekost + $pwwijn;
}
if ($rwijn > 0){
    $prwijn = $rwijn * 3.5;
    $body = $body .  " <tr> <td>" .'Rosé wijn: ' . "</td> <td>". $rwijn . "</td><td> €3,5 </td><td>€".$prwijn."</td> </tr>";
    $Totalekost=$Totalekost + $prwijn;
}
if ($hugo > 0){
    $phugo = $hugo * 3.5;
    $body = $body .  " <tr> <td>" .'Hugo: ' . "</td> <td>". $hugo . "</td><td> €3,5 </td><td>€".$phugo."</td> </tr>";
    $Totalekost=$Totalekost + $phugo;
}
if ($bmoketail > 0){
    $pbmocketail = $bmoketail * 3;
    $body = $body .  " <tr> <td>" .'Virgin mojito: ' . "</td> <td>". $bmoketail . "</td><td> €3 </td><td>€".$pbmocketail."</td> </tr>";
    $Totalekost=$Totalekost + $pbmocketail;
}
if ($sangria > 0){
    $psangria = $sangria * 3;
    $body = $body .  " <tr> <td>" .'Sangria: ' . "</td> <td>". $sangria . "</td><td> €3 </td><td>€".$psangria."</td> </tr>";
    $Totalekost=$Totalekost + $psangria;
}
if ($ps > 0){
    $pps = $ps * 3;
    $body = $body .  " <tr> <td>" .'Portie salami: ' . "</td> <td>". $ps . "</td><td> €3 </td><td>€".$pps."</td> </tr>";
    $Totalekost=$Totalekost + $pps;
}
if ($pk > 0){
    $ppk = $pk * 3;
    $body = $body .  " <tr> <td>" .'Portie kaas: ' . "</td> <td>". $pk . "</td><td> €3 </td><td>€".$ppk."</td> </tr>";
    $Totalekost=$Totalekost + $ppk;
}
if ($psk > 0){
    $ppsk = $psk * 3;
    $body = $body .  " <tr> <td>" .'Portie salami-kaas: ' . "</td> <td>". $psk . "</td><td> €3 </td><td>€".$ppsk."</td> </tr>";
    $Totalekost=$Totalekost + $ppsk;
}
if ($pwg > 0){
    $ppwg = $pwg * 3;
    $body = $body .  " <tr> <td>" .'Portie warm gemengd: ' . "</td> <td>". $pwg . "</td><td> €3 </td><td>€".$ppwg."</td> </tr>";
    $Totalekost=$Totalekost + $ppwg;
}
if ($zchips > 0){
    $pzchips = $zchips * 1.5;
    $body = $body .  " <tr> <td>" .'Zoute chips: ' . "</td> <td>". $zchips . "</td><td> €1,5 </td><td>€".$pzchips."</td> </tr>";
    $Totalekost=$Totalekost + $pzchips;
}
if ($pchips > 0){
    $ppchips = $pchips * 1.5;
    $body = $body .  " <tr> <td>" .'Paprika chips: ' . "</td> <td>". $pchips . "</td><td> €1,5 </td><td>€".$ppchips."</td> </tr>";
    $Totalekost=$Totalekost + $ppchips;
}
$body = $body . "</table> <br>";
if ($comments != ''){
    $body = $body .'Comment: ' . $comments ;
}

$mailbody = $body. "<br\> <p> De totale kost is: €".  $Totalekost . ", betaald met: " . $betaal."</p><p>emailcounter:". $counterVal . "</p>"; 

if(isset($_POST['button1'])) {
    require_once('PHPMailer/PHPMailerAutoload.php');
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'SSL';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = '587';
    $mail->isHTML();
    $mail->Username = 'Hier moet je je email om te versturen ingeven';
    $mail->Password = 'Hier moet je je wachtwoord van het zendende email ingeven';
    $mail->AddAddress('Hier moet je je email om te ontvangen ingeven');
    $mail->Subject = $tnummer1;
    $mail->Body = $mailbody;


    if(!$mail->send()) {

        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;


    } else {
        echo 'Message has been sent';
        header("Location: bevesteging.php?tn=$tnummer");


	$counterVal++;
	$f = fopen($counter_name, "w");
	fwrite($f, $counterVal);
	fclose($f);
    }
}


?>
<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="afrekenen.css">
    <title>Document</title>
</head>
<body>
<div class="center">
<div class="groenebg">
<h1>Bevestiging </h1>
<h3>Tafelnummer: <?php echo $tnummer?></h3>
<p style="margin-bottom: 0px"><?php echo $body; ?></p>

<div class="borderprijs">
<p>De totale kost is: €<?php echo $Totalekost; ?></p>
</div>

<p>Klopt deze bestelling?</p>

<table>
    <tr>
        <td style="width:45%"><form method="post"><input type="submit" name="button1" class="buttontwee" value="Laat maar komen"/></form></td>
        <td style="width:45%"><button class="buttontwee groote"><a class="linkya" href="./verwijspagina.php?tn=<?php echo $tnummer ?>">Oei, foutje!</a></button></td>
    </tr>
</table>

</div>
</div>
</body>
</html>