<?php
/*
せっかくですので、ここで追加問題といきますね。再帰関数の問題です。
設問13ですが、現状では２つの変数が固定値となっていますので、これをランダムな数字が代入された２つの値を返すような関数を作成してみましょう。
また２つの変数の差がマイナスになる場合は、再度、同じ関数を呼び、再代入するような関数を作成してみてください。
13. 条件式
整数型の２つの変数を宣言してください。
上記で宣言した２つの変数の内、1つ目を2つ目で引いた数字が偶数、奇数、0で「偶数です」「奇数です」「0です」と表示させるような条件式を書いてください。
*/
echo "問題13" . PHP_EOL;

function randTotal(){
	
	list($num1,$num2) = getRandNum();

    if(($num1 - $num2) % 2 === 0){
        echo "偶数です" . PHP_EOL;
    }elseif(($num1 - $num2) % 2 === 1){
        echo "奇数です" . PHP_EOL;
    }elseif(($num1 - $num2)  === 0){
        echo "0です" . PHP_EOL;
    }
}

function getRandNum(){
    $num1 = mt_rand(1,10);
    $num2 = mt_rand(1,5); 
    $diff = $num1 - $num2;
	
    if($diff < 0){
        return getRandNum();
    }
	
    return [$num1,$num2];
	
}

randTotal();

/*25,
配列を宣言してください
Integer(整数) 1個の配列　
String(文字列) 3個の配列
$num  =[1];
$fruit = ["apple","orange","melon"];
*/

/*26,
配列は初期化の際に初めから配列の値の代入までまとめて行う事ができます。
Integer(整数)　3個の配列で　　1,2,3という数字を値に持たせたい。
宣言、要素の確保ののちそれぞれに代入する配列の用意の仕方と
代入までまとめて行う書き方で用意する仕方にて配列を用意してください
$num2 = [];
$num2 = [1,2,3];
$num3  = [1,2,3];
*/

/*27,
26の続き、
用意した配列をfor文を使って値を出力してください。
foreach文を使った値の出力をしてください。

echo "問題27" . PHP_EOL;
for($i=0;$i <=2; $i++){
    echo $num2[$i] . PHP_EOL;
}

foreach($num3 as $value){
    echo $value . PHP_EOL;
}
*/


/*28,
27の続き、
値を出力したあとにそれぞれの値の２乗の値を代入し直すよう修正してください。*/
$nums2 = [];
$nums2 = [1, 2, 3];
$nums3  = [1, 2, 3];

echo "問題28" . PHP_EOL;
for($i=0;$i <=2; $i++){
    echo $nums2[$i] . PHP_EOL;
    
    $double_for = pow($nums2[$i], 2);
    var_dump($double_for);
}

foreach($nums3 as $value){
    echo $value . PHP_EOL;
    $double_each = pow($value,2);
    var_dump($double_each);
}

?>

