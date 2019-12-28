<?php 
/*19, while文 do-while文
1000から2000までの間で1の桁が7の数字の最初の数字を求めて出力してください
for文　while文　do-while文を使ってそれぞれ出力してください*/
echo "問題19" . PHP_EOL;
for($i = 1000; $i <= 2000; $i++){
   $one = $i % 10;
   if($one == 7){
        echo $i . PHP_EOL;
        break;
   }
}

$j = 1000;
while($j < 2000){
    $one = $j % 10;
    if($one == 7){
        echo $i . PHP_EOL;
        break;
   }
   $j++;
}

$k = 1000;
do{
    $one = $j % 10;
    if($one == 7){
        echo $i . PHP_EOL;
        break;
   }  
   $k++;
}while($k < 2000);


/*20. 関数の基礎
int型の変数を宣言してください。
変数を渡して二乗の整数を返す関数を作成してください*/
echo "問題20" . PHP_EOL;

$num = 100;

function factorial($num){
    $pow = pow($num,2) . PHP_EOL;
    return $pow;
}

$total = factorial($num);
echo $total;


/*21. 関数の基礎2
boolean型を渡すと別のboolean型を返す関数を作成してください
ex) trueを渡す→falseが返ってくる*/
echo "問題21" . PHP_EOL;
$isflag = true;
function reverseBool($isflag){
    if($isflag === true){
        $isbool = false;
        return $isbool;
    }else{
        $isbool = true;
        return $isbool;
    }
}
var_dump(reverseBool($isflag));

?>