<?php header ('Content-Type:text/html; charset=utf-8');
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Oldman php</title>
		<link id="style" href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<form method="post" action="index.php">
			<fieldset class="field">
				<legend> Решаем... </legend>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<div id="abc">
					<br>a:
					<input type="text" name="a"></br>
					<br>b:
					<input type="text" name="b"></br>
					<br>c:
					<input type="text" name="c"></br>
				</div>
				
				<div id="XnShag">
					<br>X min:
					<input type="text" name="xmin"></br>
					<br>X max:
					<input type="text" name="max"></br>
					<br>Шаг:
					<input type="text" name="shag"></br>
				</div>
				<div id="func">
					<br>Функция: <input list="function" name="functions" id="functions"></br>				
					<datalist id="function">
						<option value="Квадратичная">
						<option value="Синусоидальная">
						<option value="Линейная">
					</datalist>
				</div>
				<br>
			</fieldset>
			<br><input type="submit" name="okButton" value="Расчитать"></br>
				<?php
					if (isset($_POST['okButton'])){
						
						$a = $_POST['a'];
						$b = $_POST['b'];
						$c = $_POST['c'];
						$xmin = $_POST['xmin'];
						$xmax = $_POST['max'];
						$shag = $_POST['shag'];
						
						if($_POST['functions'] == "Квадратичная"){

							if($a == null || $b == null || $c == null || $xmin == null || $xmax == null || $shag == null)
								echo "Заполните все поля!";
								
							else{

								echo 
									"<table border = '1'> <tr><th>X</th><th>Y</th></tr>";

								for ($i = $xmin; $i <= $xmax; $i += $shag){
									$solution = $a*$i*$i + $b*$i + $c;
									echo
										"<tr><th>$i</th><th>$solution</th></tr>";
								};

								echo "</table>";
							}
							
						}
						elseif($_POST['functions'] == "Синусоидальная"){

							if($a == null || $b == null || $c == null || $xmin == null || $xmax == null || $shag == null)
								echo "Заполните все поля!";

							else{

								echo 
									"<table border = '1'> <tr><th>X</th><th>Y</th></tr>";

								for ($i = $xmin; $i <= $xmax; $i += $shag){
									$solution = $a + $b*sin($c*$i);
									echo
										"<tr><th>$i</th><th>$solution</th></tr>";
								};

								echo "</table>";
							}

						}
						elseif($_POST['functions'] == "Линейная"){
							if($a == null || $b == null || $xmin == null || $xmax == null || $shag == null)
								echo "Заполните все поля!";

							else{

								echo 
									"<table border = '1'> <tr><th>X</th><th>Y</th></tr>";

								for ($i = $xmin; $i <= $xmax; $i += $shag){
									$solution = $a*$i + $b;
									echo
										"<tr><th>$i</th><th>$solution</th></tr>";
								};

								echo "</table>";
							}	
						}
					}
				?>
		</form>
	</body>
</html>