<?php

	if(isset($_POST['nom']) && isset($_POST['idad'])){
		$nom = $_POST['nom'];
		$idad = $_POST['idad'];
		$diasvid = $idade * 365;

		echo "<p>$nom possui $diasvid dias de vida.</p>";
	}else{
		echo "<p>Nenhum dado foi submetido.</p>";
	}
	?>