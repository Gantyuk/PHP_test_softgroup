<div class="content">
	<p>
		<i> 
			Завдання 4
		</i>
		<p>
				Політичне життя однієї країни дуже жваве. У країні діє K політичних
			партій, кожна з яких регулярно оголошує національний страйк. Дні, коли
			хоча б одна з партій оголошує страйк, за умови, що це не субота або неділя
			(коли і так ніхто не працює), завдають великої шкоди економіці країни.
			i-та партія оголошує страйки строго кожні bi днів, починаючи з дня з
			номером ai. Тобто i-та партія оголошує страйки в дні ai, ai + bi, ai + 2bi і т.д.
		</p>
		<p>
				Якщо в якийсь день кілька партій оголошує страйк, то це вважається
			загальнонаціональним страйком.
		</p>
		<p>
				У календарі країни N днів, пронумерованих від 1 до N. Перший день
			року є понеділком, шостий і сьомий дні року - вихідні, тиждень складається
			з семи днів.
		</p>
	</p>
	<form id="form1" name="form1" method="post" action="">
		<p>
			<p>
				Кількість днів:
			</P>
			<P>
				<input type="text"  name="N" id="" />
				<p>
						Кількість партій:
				</P>
				<p>					
					<input type="text" name="K" id="" />
					<p>
						Матриця ai i bi:
					</P>
					<p>
						<textarea name="matr" form="form1"></textarea>
						<p>
							<input type="submit" name="task4" id="faind" value="Підрахувати" />
						</p>
					</p>
				</p>
		
			</p>
		</p>
	</form>
	<?php
		if(isset($_POST['N']) && !empty($_POST['N']) && isset($_POST['K']) && !empty($_POST['K']) && isset($_POST['matr']) && !empty($_POST['matr'])){
			$n = $_POST['N'];
			$k = $_POST['K'];
			$mat = split("\n",$_POST['matr']); 
			for ($i = 0; $i < $k; $i++){
				$mat[$i] = split(" ",$mat[$i]);
				for ($j = 2; $j < $n; $j++){
					if (($j*$mat[$i][1]+$mat[$i][0])<$n){
						array_push(	$mat[$i],($j*$mat[$i][1]+$mat[$i][0])); 
					} else break;
				}
				$mat[$i][1]=$mat[$i][1]+$mat[$i][0];
			}
			$vix[] = 6;
			array_push($vix,$vix[0]+1);
			for ($j = 0; $j < $n; $j += 2){
				if (($vix[$j]+7) <= $n){
					array_push($vix,$vix[$j]+7,$vix[$j]+8);
				}else break;
			}
			$rez[] = $mat[0][0];
			$fl = 0;
			for ($i = 0; $i < $k; $i++){
				for ($j =0; $j < count($mat[$i]);$j++){
					for ($g =0; $g < count($rez);$g++){
						if ($mat[$i][$j] == $rez[$g]){
							$fl = 1;
							break;
						}
					}
					if ($fl == 0){
						array_push($rez,$mat[$i][$j]);
					}	else $fl = 0;
				}
						
			}
			for ($i = 0; $i < count($rez); $i++){
				for ($j = 0; $j < count($vix); $j++)
				if ($rez[$i] == $vix[$j]){
					$arr[] = $i; 	
				}
			}
			for ($i = 0; $i < count($arr); $i++){
				unset( $rez[$arr[$i]] );
			}
			$countt = count($rez); 
			echo "Кількість страйків, що відбулися протягом року:$countt";
		}
	?>
</div>