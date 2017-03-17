<!DOCTYPE html>
<html>
<head>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'>
</script>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("p").toggle();
        });
    });
</script>
</head>
<body>
    
<p>Lorem Ipsum jne</p>
    
<button>Nappi</button>
<br />
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

    
</body>
</html>