<?php
$now = date("H");
if ((6<=$now) && ($now<12)) {
	echo "Доброе утро!";
}
if ((12<=$now) && ($now<18)) {
	echo "Добрый день!";
}
if ((18<=$now) && ($now<24)) {
	echo "Добрый вечер!";
}
if ((00<=$now) && ($now<6)) {
	echo "Доброй ночи!";
}
?>