<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; require 'connect.php'; ?>

<h1>Sell Your Character</h1>
<p>Enter char id: </p>
<form action="sellcharacter.php" method="post">
ID: <input type="text" name="id">
<input type="submit" name="submit" value="Auction">
</form>

<?php

function sell(){
  $aucPlayers = $db->query("SELECT a.id, a.name, a.level, a.vocation FROM players AS a WHERE a.id=$_POST["id"]"); 
  while($row = $aucPlayers->fetch_object()){
			echo $row->name;
	       }
		   $aucPlayers->free();
}

if(isset($_POST['submit']))
{
   sell();
} 

?>

<?php include 'layout/overall/footer.php'; ?>
