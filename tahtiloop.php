<!DOCTYPE html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
        $("button").click(function(){
        $("p").toggle();
        });
    });
    </script>
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
      <button>Toggle between hide() and show()</button>
</body>
</html>
