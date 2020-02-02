<?php
$kredit=40000;
$percent=1.03;
$komis=1000;
$money=5000;
$sum=0;
for ($month=1; $kredit > 0 ; $month++) { 
	$kredit=($kredit*$percent)+1000;
	if ($kredit>$money) {
		$sum+=$money;
		$kredit-=$money;
	}
	else {
		$sum+=$kredit;
		$kredit=0;
	}
	echo "Спустя $month -ый месяц осталось выплатить:$kredit<br>";
}
echo "Школьник выплатил кредит к $month месяцу<br> Телефон обошелся в $sum рублей";

?>