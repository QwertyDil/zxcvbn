<?php
 
error_reporting(-1);
mb_internal_encoding('utf-8');
 
$text = 
"Дым табачный воздух выел.
Комната —
глава в крученыховском аде.
Вспомни —
за этим окном
впервые
руки твои, исступлённый, гладил.
Сегодня сидишь вот,
сердце в железе.
День ещё —
выгонишь,
может быть, изругав.
В мутной передней долго не влезет
сломанная дрожью рука в рукав.";
$sentence=preg_split('/[\n]+/u', $text); #делим построкам
$maxStroka = 33;
for ($i=0; $i < count($sentence); $i++) { 
	$sentence[$i] = mb_substr($sentence[$i], 0, mb_strlen($sentence[$i])-1);
	$sentence[$i] .= str_repeat(" ", ($maxStroka - mb_strlen($sentence[$i])));
} #дополняем строку
for ($i=0; $i < count($sentence); $i++) { 
	$sentence[$i] = preg_split("//u", $sentence[$i], -1, PREG_SPLIT_NO_EMPTY);
} #делим на массив по буквам
echo "<pre>";
for ($i=0; $i < $maxStroka; $i++) {
	$r = " ";
	foreach ($sentence as $value) {
		$r .= "| " . $value[$i] . " ";
	}
	echo "$r|<br>";
}