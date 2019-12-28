<?php 
/*20. 関数の基礎
int型の変数を宣言してください。
変数を渡して二乗の整数を返す関数を作成してください
echo "問題20" . PHP_EOL;

$num = 100;
$double = 4;
function factorial($num,$double){
    $pow = pow($num,$double);
    return $pow;
}

$total = factorial($num,$double);
echo $total . PHP_EOL;
*/
/*22.
int型とString型の２つの変数を引数で渡すと 「int型:String型」という文字列を返す関数を作成してください
※int型,String型は引数で渡してください
ex)出力例「 5: ああああ」
echo "問題22" . PHP_EOL;

$num = "10";
$text = "は齢年のんさルケイマ";

function type($num,$text){
    $coalescence = $num . ":" . $text;
    return $coalescence;
}

$total = type($num,$text);
echo $total . PHP_EOL;
*/
/*23.
int型とboolean型を渡し boolean型がtrueなら　int型を1プラスする　falseなら1マイナスする関数を作成してください
echo "問題23" . PHP_EOL;

$num = 20;
$isflag = true;

function fluctuation($num, $isflag){
    if($isflag){
        $num++;
    }else{
        $num--;
    }
    return $num; 
}

$total = fluctuation($num, $isflag);
echo $total .PHP_EOL;

*/
/*24.
int型とString型を渡しそのint型の数値の回数分　型の内容Stringを出力する関数を作成してください
(int型が0以下の場合　「範囲外の入力値です」と出力してください
echo "問題24" . PHP_EOL;

$num = 5;
$text = "マイケル氏";

function textloop($num,$text){
    if($num === 0){
        echo "範囲外の入力値です";
        return;
    }
    for($i = 0; $i < $num; $i++){
        echo $text;
    }
}

textloop($num,$text);
*/

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
	
	getRandnum();
	list($num1,$num2) = call_user_func("getRandnum");

    if(($num1 - $num2) % 2 === 0){
        echo "偶数です" . PHP_EOL;
    }elseif(($num1 - $num2) % 2 === 1){
        echo "奇数です" . PHP_EOL;
    }elseif(($num1 - $num2)  === 0){
        echo "0です" . PHP_EOL;
    }
}

function getRandnum(){
    $num1 = mt_rand(1,10);
    $num2 = mt_rand(1,5); 
    $diff = $num1 - $num2;
	
    if(substr($diff,0,0) == "-"){
        return getrandnum();
    }
	
    return [$num1,$num2];
	
}

randTotal();

?>






