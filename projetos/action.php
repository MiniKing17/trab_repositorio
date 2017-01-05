<?php
if(count($_POST) > 0){
		$db = new mysqli("localhost", "root", "usbw", "mini_game");
		$qr = $db->query("INSERT INTO comentarios(comentario) VALUES ('{$_POST['mensagem']}')");
		echo "<fieldset id='toogle'>";
		echo "<p>";
		$row = $db->query("SELECT * FROM comentarios ORDER BY id DESC LIMIT 1")->fetch_assoc();
		echo $row["comentario"];
		echo "</p>";
		echo "</fieldset>";
	}
?>