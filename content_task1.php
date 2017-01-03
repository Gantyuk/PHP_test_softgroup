<div class="content">
	<p>
		<i> 
			Завдання 1
		</i>
		<br>
		У форму вводиться число N. Знайти всі досконалі числа до N.
		Досконале число - це таке число, що дорівнює сумі всіх своїх дільників,
		крім себе самого. Наприклад, число 6 є досконалим, тому що крім себе
		самого ділиться на числа 1, 2 і 3, які в сумі дають 6.</p>
	<form id="form1" name="form1" method="post" action="">
		<p>
			<input type="text" name="N" id="" />     
			<input type="submit" name="Perfect_number" id="faind" value="Знайти" />
		</p>
	</form>
	 <?php
		if(isset($_POST['N']) && !empty($_POST['N'])){
			$n = $_POST['N'];
			for ($i = 1; $i <= $n; $i++) {
				$sum = 0;
				for ($j = 1; $j < $i; $j++) {
					if ($i % $j == 0){
						$sum = $sum + $j;
						if ($sum == $i){
							echo "Досконале число : $sum <br>";
						}
					}
				}
			}
		}
	?>
</div>