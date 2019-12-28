<?php

/*14. FizzBuzz
1 ~ 100の数字をfor文でループしてください。
ただし3の倍数のときは数の代わりに｢Fizz｣と、5の倍数のときは｢Buzz｣、3と5両方の倍数の場合には｢FizzBuzz｣と出力すること。*/
echo "問題14" . PHP_EOL;
for($i = 1; $i < 100; $i++){
	if(($i % 3) === 0 && ($i % 5) === 0){
		echo "FizzBuzz" . PHP_EOL;
	}elseif(($i % 5) === 0){
		echo "Buzz" . PHP_EOL;
	}elseif(($i % 3) === 0){
		echo "Fizz" . PHP_EOL;
	}
}


/*16, 図形の表示
 0
 00
 000
この図形をfor文を使って出力してください。
*/
echo "問題16";
for($i = 0; $i < 3; $i++){
    for($j = 1; $j <= $i; $j++){
        echo "0";  
    }
    echo PHP_EOL;
}


/*17, 図形の表示
   0
  000
 00000
この図形をfor文を使って出力してください。*/
echo "問題17" . PHP_EOL;
for($i = 0; $i < 3; $i++){
    for($j = 0; $j < 3 - ($i+1); $j++){
        echo " ";  
	}
	for($k = 0; $k < ($i+1) * 2-1; $k++){
        echo "0";  
    }
    echo PHP_EOL;
}


/*18, 図形の表示
   0
  000
 00000
  000
   0
この図形をfor文を使って出力してください。*/
echo "問題18" . PHP_EOL;

for($i = 0; $i < 3; $i++){
    for($j = 0; $j < 3 - ($i+1); $j++){
        echo " ";  
	}
	for($k = 0; $k < ($i+1) * 2-1; $k++){
        echo "0";  
    }
    echo  PHP_EOL;
}
for($i = 0; $i < 2; $i++){
    for($j = 0; $j < 0 + ($i+1); $j++){
        echo " ";  
	}
	for($k = 6; $k > ($i+2) * 2-1; $k--){
        echo "0";  
    }
    echo  PHP_EOL;
}

?>