<?php 
$tafelnummer = $_POST["tnummer"];
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>BeachBar-KLJZoersel</title>
    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Beachbar bestelling</title>

</head>
<body>




<div class="img">
<div class="container center  ">
<div class="groenebg">
<h1>Wat wil je bestellen ?</h1>
<h2>KLJ Zoersel</h2>
    <div class="row">
        <div class="col-md-8" style="margin:0 auto; float:none;">
            <form method="GET" id="my-form" action="afrekenen.php">
                <div class="form-group">
                    <H3>Jouw tafelnummer is:</H3>
                    <label>
                        <input readonly name="tnummer" type="number" min="0" value="<?php echo $tafelnummer ?>"/>
                    </label>
                    <div>
                        <h2>Frisdranken</h2>
                        <table>
                            <tr>
								<td style="width:45%">Pepsi cola</td>
								<td style="width:35%"><input name="cola" type="number" min="0" value="0"/></td>
                                <td style="width:20%">€2</td>
                            </tr>
                            <tr>
								<td>Pepsi Max</td>
								<td><input name="colamax" type="number" min="0" value="0"/></td>
                                <td>€2</td>
                            </tr>							
                            <tr>
                                <td>Ice-Tea</td>
                                <td><input name="icetea" type="number" min="0" value="0"/></td>
                                <td>€2</td>
                            </tr>
                            <tr>
                                <td>Gele limonade</td>
                                <td><input name="glimo" type="number" min="0" value="0"/></td>
                                <td>€2</td>
                            </tr>
                            <tr>
                                <td>Witte limonade</td>
                                <td><input name="wlimo" type="number" min="0" value="0"/></td>
                                <td>€2</td>
                            </tr>
							<tr>
                                <td>Plat water</td>
                                <td><input name="water" type="number" min="0" value="0"/></td>
                                <td>€2</td>
                            </tr>
							<tr>
                                <td>Bruiswater</td>
                                <td><input name="bwater" type="number" min="0" value="0"/></td>
                                <td>€2</td>
                            </tr>
							
                        </table>
						<h2>Warme dranken</h2>
                        <table>
                            <tr>
								<td style="width:45%">Koffie</td>
								<td style="width:35%"><input name="koffie" type="number" min="0" value="0"/></td>
                                <td style="width:20%">€2</td>
                            </tr>
<!--
                            <tr>
								<td>Déca koffie</td>
								<td><input name="dkoffie" type="number" min="0" value="0"/></td>
                                <td>€2</td>
                            </tr>
-->							
                        </table>
                        <h2>Bieren</h2>
                        <table>
                            <tr>
                                <td style="width:45%">Bier</td>
                                <td style="width:35%"><input name="bier" type="number" min="0" value="0"/></td>
                                <td style="width:20%">€2</td>
                            </tr>
                            <tr>
                                <td>Kriek</td>
                                <td><input name="kriek" type="number" min="0" value="0"/></td>
                                <td>€2,5</td>
                            </tr>
                            <tr>
                                <td>Westmalle dubbel</td>
                                <td><input name="wtrapist" type="number" min="0" value="0"/></td>
                                <td>€3,6</td>
                            </tr>
                            <tr>
                                <td>Westmalle tripel</td>
                                <td><input name="wtrippel" type="number" min="0" value="0"/></td>
                                <td>€3,6</td>
                            </tr>
                            <tr>
                                <td>Tripel Karmeliet</td>
                                <td><input name="karmeliet" type="number" min="0" value="0"/></td>
                                <td>€3,6</td>
                            </tr>
                            <tr>
                                <td>Duvel</td>
                                <td><input name="duvel" type="number" min="0" value="0"/></td>
                                <td>€3,6</td>
                            </tr>
                        </table>
                        <h2>Cocktails & wijnen</h2>
                        <table>
                            <tr>
                                <td style="width:45%">Witte wijn</td>
                                <td style="width:35%"><input name="wwijn" type="number" min="0" value="0"/></td>
                                <td style="width:20%">€3,5</td>
                            </tr>
                            <tr>
                                <td>Rosé wijn</td>
                                <td><input name="rwijn" type="number" min="0" value="0"/></td>
                                <td>€3,5</td>
                            </tr>				
							<tr>
                                <td>Hugo</td>
                                <td><input name="hugo" type="number" min="0" value="0"/></td>
                                <td>€3,5</td>
                            </tr>
							
                            <tr>
                                <td>Sangria</td>
                                <td><input name="sangria" type="number" min="0" value="0"/></td>
                                <td>€3</td>
                            </tr>
							<tr>
                                <td>Virgin mojito</td>
                                <td><input name="bmoketail" type="number" min="0" value="0"/></td>
                                <td>€3</td>
                            </tr>
                        </table>
						 <h2>Hapjes</h2>
                        <table>
                            <tr>
                                <td style="width:45%">Portie salami</td>
                                <td style="width:35%"><input name="ps" type="number" min="0" value="0"/></td>
                                <td style="width:20%">€3</td>
                            </tr>
							<tr>
                                <td>Portie kaas</td>
                                <td><input name="pk" type="number" min="0" value="0"/></td>
                                <td>€3</td>
                            </tr>

							<tr>
                                <td>Portie salami-kaas (nog 2)</td>
                                <td><input name="psk" type="number" min="0" value="0"/></td>
                                <td>€3</td>
                            </tr>		
									
       			<tr>
                                <td>Paprika chips</td>
                                <td><input name="Pchips" type="number" min="0" value="0"/></td>
                                <td>€1,5</td>
                            </tr>
                               
                            <tr>
                                <td>Zoute chips (nog 2 )</td>
                                <td><input name="Zchips" type="number" min="0" value="0"/></td>
                                <td>€1,5</td>
                            </tr>
                        </table>
						<h2>Betaalmiddel</h2>
						<table>
							<tr>
                                <td  style="width: 50%;" class="round" >  	
									<input type="radio" id="betaal1" name="re" value="Contant" required>Contant</input>
								</td>
                                <td  style="width: 50%;" class="round">  
									<input type="radio" id="betaal2" name="re" value="Bankcontact">Bankcontact</input>
								</td>

                            </tr>
						</table>
                    </div>
                    <H3>Extra's</H3>
                    <label>
                        <textarea cols="35" rows="3" name="comments" placeholder="Wat heb je nog nodig ?" class="textaream" ><?php echo $comments; ?></textarea><br>
                    </label>
                </div>
				<div style="text-align: center; " >
                <input type="submit" name="Submit1"  value="Bestellen" class=" submitbutton" />
				</div>
            </form>
        </div>
    </div>
	</div>
</div>
</div>
</div>
<script>
var allRadios = document.getElementsByName('re');
var booRadio;
var x = 0;
for(x = 0; x < allRadios.length; x++){

        allRadios[x].onclick = function(){

            if(booRadio == this){
                this.checked = false;
        booRadio = null;
            }else{
            booRadio = this;
        }
        };

}
</script>
</body>
</html>






