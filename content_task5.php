<div class="content">
	<p>
		<i> 
			Завдання 5
		</i>
		<br>
			Задано текст. Словом вважається послідовність непробільних символів,
		які йдуть підряд. Слова розділені одним або більшим числом пробілів або
		символами кінця рядка.
			Для кожного слова з цього тексту підрахуйте, скільки разів воно
		зустрічалося в цьому тексті раніше. Використайте словники.
	</p>
	<form id="form1" name="form1" method="post" action="">					
		<p>
			<textarea name="matr" form="form1"></textarea>
		</p>
		<p>
		<input type="submit" name="task5" id="faind" value="Підрахувати" />
		</p>			
	</form>
	<?php
		if(isset($_POST['matr']) && !empty($_POST['matr'])){
			$mat = split("[ \n]",$_POST['matr']); 
			for ($i = 0; $i < count($mat); $i++){
				$vid[$i] = 0;
				for ($j = 0; $j < $i; $j++){
					if ($mat[$j] == $mat[$i]){
						$vid[$i]++;
					}
				}
				
			}
			for ($i = 0; $i < count($mat); $i++){
				echo "$mat[$i] ";
			}
			echo "<br>";
			for ($i = 0; $i < count($mat); $i++){
				echo "$vid[$i] ";
			}
		}
	?>	
</div>