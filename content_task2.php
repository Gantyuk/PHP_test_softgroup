<div class="content">
	<p>
		<i> 
			Завдання 2
		</i>
		<br>
		У форму вводиться текст, слова в якому розділені пробілами і
		розділовими знаками. Вилучити з цього тексту всі слова найбільшої
		довжини. (Слів найбільшої довжини може бути декілька).
	</p>
	<form id="form1" name="form1" method="post" action="">
		<p>
			<input type="text" name="N" id="" />     
			<input type="submit" name="Perfect_number" id="faind" value="Знайти" />
			<br>
			<i >
				*Числа розділити пробілами, крапками або комами.
			</i>
		</p>
	</form>
	<?php
		if(isset($_POST['N']) && !empty($_POST['N'])){
			$n = split('[ .,]',$_POST['N']);
			$lengt = 0;
			for ($i = 0; $i < count($n); $i++){
				if ($lengt < strlen($n[$i])){
					$lengt = strlen($n[$i]);
				}
			}
			for ($i = 0; $i < count($n); $i++){
				if ($lengt == strlen($n[$i])){
					$arr[] = $i; 	
				}
			}
			for ($i = 0; $i < count($arr); $i++){
				unset( $n[$arr[$i]] );
			}
			print_r ( $n );
		}
	?>
</div>