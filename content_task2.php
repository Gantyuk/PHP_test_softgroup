<div class="content">
	<p>
		<i> 
			Завдання 2
		</i>
		<p>
			У форму вводиться текст, слова в якому розділені пробілами і
			розділовими знаками. Вилучити з цього тексту всі слова найбільшої
			довжини. (Слів найбільшої довжини може бути декілька).
		</p>
	</p>
	<form id="form1" name="form1" method="post" action="">
		<p>
			<input type="text" name="N" id="" />     
			<input type="submit" name="task2" id="faind" value="Вилучити" />
			<br>
			<i>
				*Слова розділити пробілами, крапками або комами.
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
			$flag = 0;
			echo " <p> Вихідний техт:";
			for ($i = 0; $i < count($n); $i++){
				for ($j = 0; $j < count($arr); $j++){
					if ($i == $arr[$j] ){
						$flag = 1;
					}
				}
				if ($flag == 0){
					echo " $n[$i]";
				}else $flag = 0;
			}
			echo " </p>";
		}
	?>
</div>