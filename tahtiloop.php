<!DOCTYPE html>
<html>
<body>

<form method="post" action="tahtiloop.php">
  Valitse tähtien määrä:
  <input type="number" name="maara" min="1" max="100">
  <input type="submit">
</form>
    <br>
    
<?php
$maara = $_POST['maara'];

for($i=1;$i<=$maara;$i++){
for($j=1;$j<=$i;$j++){
echo "*&nbsp;";
}
echo "<br>";
}
?>

  <p>TÄHDET TÄHDET</p>    
</body>
</html>
