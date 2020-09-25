<?php $tafelnummer = htmlspecialchars($_GET["tn"]);?> 
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
<form  method="post" action="index.php" name="pagepass">
<label>
    <input readonly name="tnummer" type="number" min="0" value="<?php echo $tafelnummer ?>"/>
</label>
</form>

<script>
window.onload = function(){
  document.forms['pagepass'].submit();
}
</script>
</body>
</html>