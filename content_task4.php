<div class="content">
	<p>
		<i> 
			Завдання 4
		</i>
		<br>
		Політичне життя однієї країни дуже жваве. У країні діє K політичних
	партій, кожна з яких регулярно оголошує національний страйк. Дні, коли
	хоча б одна з партій оголошує страйк, за умови, що це не субота або неділя
	(коли і так ніхто не працює), завдають великої шкоди економіці країни.
	i-та партія оголошує страйки строго кожні bi днів, починаючи з дня з
	номером ai. Тобто i-та партія оголошує страйки в дні ai, ai + bi, ai + 2bi і т.д.
		Якщо в якийсь день кілька партій оголошує страйк, то це вважається
	загальнонаціональним страйком.
		У календарі країни N днів, пронумерованих від 1 до N. Перший день
	року є понеділком, шостий і сьомий дні року - вихідні, тиждень складається
	з семи днів.
	</p>
	<form id="form1" name="form1" method="post" action="">
		<p>
			<input type="text" name="N" id="" />
			<br>
			<p>
				<input type="text" name="K" id="" />
				<br>
				<p><textarea name="matr" form="form1"></textarea>
					<br>
					<p>
						<input type="submit" name="Perfect_number" id="faind" value="Знайти" />
					</p>
				</p>
			</p>
	
	</p>
	</form>
	<?php
		if(isset($_POST['N']) && !empty($_POST['N']) && isset($_POST['K']) && !empty($_POST['K'])){
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