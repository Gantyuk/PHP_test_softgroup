<div class="content">
	<p>
		<i> Завдання 3</i><br>
		Вводяться N натуральних чисел більше 2. Підрахувати, скільки серед
		них простих чисел.
		<form id="form1" name="form1" method="post" action="">
			<p>
				<input type="text" name="N" id="" />     
				<input type="submit" name="Perfect_number" id="faind" value="Підрахувати" />
				<br><i >*Числа розділити пробілами</i>
			</p>
		</form>
		<?php
	if(isset($_POST['N']) && !empty($_POST['N'])){
		$n = split(' ',$_POST['N']);
		$count = 0;
		echo "<br>[";
		for ($i = 0; $i < count($n); $i++){
			echo "$n[$i] ";
			$sum = 0;
			$m = intval($n[$i]);
			for ($j = 2; $j < $m; $j++) {
				if ($m % $j == 0)$sum = $sum + 1;
			}
			if ($sum == 0) $count++;
		}
	echo " ]<br>Кількість простих чисел: $count";
		
	}
		?>
	</p>
</div>