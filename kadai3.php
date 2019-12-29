
11111111111
]<?php 
/*9. for文と条件式の組み合わせ3
20 ~ 50までの数字の中で2で割ったら奇数となる数字のみを出力してください*/
echo "課題9" . PHP_EOL;

for($i = 20; $i <= 50; $i++){

	$div = $i / 2;
	if(is_float($div)){ 
		continue;
	}

	if($div % 2 == 1){
		echo $i . PHP_EOL;
	}
}



/*10. for文と条件式の組み合わせ4
20 ~ 50までの数字の中で2で割ったら奇数となる数字の個数を出力してください*/
echo "課題10" . PHP_EOL;

$count = 0;

for($i = 20; $i  <= 50; $i++){
	$div = $i / 2;

	if(is_float($div)){ //小数点じゃなかったらここでおわり
		continue;
	}

	if($div % 2 == 1){
		$count++;
	}
}

echo $count . "個!!!" . PHP_EOL;




/*11. for文を使用した計算
1000未満の「3と7の倍数」は何個あるか　個数を出力してください*/
echo "課題11" . PHP_EOL;


$count = 0; //countが一個の場合だとどう書けばいいのだ・・・

// 333 142
for($i = 3; $i < 1000; $i++){
	
	if($i % 3 == 0 || $i % 7 == 0){
		$count++;
		
	}
		
}

echo "3と７の倍数が" . $count . "個!!" . PHP_EOL;







/*12. for文を使用した計算2
1000未満の「3と7の倍数」の5番目に大きい数を出力してください*/
echo "課題12" . PHP_EOL;


$count = 0;

for($i = 1000; $i > 0; $i--){
	
	if($i % 3 == 0 || $i % 7 == 0){ 
		$count++;
	}

	if($count === 5){
		break;
	}
}

echo $i;

//$count3_eq5 = ($count3 - 5) * 3; //5番目に大きい数字987
//$count7_eq5 = ($count7 - 5) * 7; //5番目に大きい数字966
//echo "3の倍数の５番目に大きいのは" . "「{$count3_eq5}」" . "!!!" . PHP_EOL;
//echo "7の倍数の５番目に大きいのは" . "「{$count7_eq5}」" . "!!!" . PHP_EOL;

?>