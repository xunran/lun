<?php
function num($n){
	if(!is_numeric($n)){
		return  "不是一个数字";
		
	}
	$num =$n;
	while ($n%2==0) {
		$n/=2;
	}
	while ($n%3==0) {
		$n/=3;
	}
	while ($n%5==0) {
		$n/=5;
	}
	if($n==1){
		echo $num.":是丑数";
	}else{
		echo $num.":不是丑数";
	}
}

echo num('asd');
echo 'test';
?>