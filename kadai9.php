<?php
/*28,
27の続き、
値を出力したあとにそれぞれの値の２乗の値を代入し直すよう修正してください。
echo "問題28" . PHP_EOL;
$nums2 = [];
$nums2 = [1, 2, 3];
$nums3  = [1, 2, 3];

for($i=0;$i <=2; $i++){  
	echo $nums2[$i] .PHP_EOL;
    $double_for[$i] = pow($nums2[$i], 2);
}

var_dump($double_for);

foreach($nums3 as $value){
    echo $value . PHP_EOL;
	for($i=0;$i <=2; $i++){  
		$double_each[$i] = pow($nums3[$i],2);
	}
}

var_dump($double_each);

*/
/*29,
5個のString(文字列)の配列を用意し適当な文字を代入してください。
その2番目の値を出力してください。
echo "問題29" . PHP_EOL;
$texts = ["マ", "イ", "ケ", "ル", "氏"];
echo $texts[1] . PHP_EOL;
*/

/*30,
10個のInteger(整数)の配列を用意し適当な値を代入してください。
添字が偶数番目の合計値と添字が奇数番目の合計値を出力してください。
echo "問題30" . PHP_EOL;

$nums = [1,2,3,4,5,6,7,8,9,10];
$events = [];
$odds = [];

for($i = 0; $i < 10; $i++){
    if($i % 2 === 0){
        $events[$i] = $nums[$i];
    }else{
        $odds[$i] = $nums[$i];
    }
}

$events_total = array_sum($events);
$odds_total = array_sum($odds);

echo $events_total . PHP_EOL;
echo $odds_total . PHP_EOL;
*/

/*31,
Integer(整数)の配列を渡すと、配列の中身が３乗される関数を作ってください。
なお、関数の中で引数に必要だと思うvalidationも作成してください。（validationの意味がわからない場合は、お調べください）
引数が配列であること
空でないこと
配列の中身が数値であること
*/
echo "問題31" . PHP_EOL;

$nums = [1,2,3];

function multiPlication($nums){
	
	if(check($nums) === false){
		return;
	}
	
	for($i=0;$i <=2; $i++){   
		$double_for = pow($nums[$i], 2);
		var_dump($double_for);
	}
    
}

function check($nums) {
	if(!is_array($nums)){
		return false;
	}
	if(empty($nums)){
		return false;
  }
  for($i = 0; $i < count($nums); $i++){
    if(in_array(!$nums[$i],$nums,true)){
      return false;
    }
  }
}

multiPlication($nums);


/*32,
2つのInteger(整数)の配列を引数にもち、それぞれ同じ順番の値が合計された配列を作る関数を作ってください(配列を返り値として持つ)
作られる配列は２つの入力された配列のうち少ない個数の配列の個数とします。*/
echo "問題32" . PHP_EOL;

$nums1 = [1, 2];
$nums2 = [1, 2, 3, 4, 5];

function totalArray($nums1,$nums2){
	
	if($nums1 < $nums2){
		$total = count($nums1);
	}else{
		$total = count($nums2);
	}
	
    for($i = 0; $i < $total; $i++){
      $array_nums[$i] = $nums1[$i] + $nums2[$i];
    }
    
    return $array_nums;
}

$total = totalArray($nums1,$nums2);
var_dump($total);

/*33,
1階層3部屋ある3階建てのアパートがある。101 102、、、という部屋番号で管理するとする。
多次元配列で表してください。*/
echo "問題33" . PHP_EOL;

$rooms = [
	["101","102","103"],
	["201","202","203"],
	["301","302","303"],
];

var_dump($rooms);

/*34,連想配列
メンバーを意味する配列に下記内容をキーに持つ値を格納したい。
名前
    -性別
    -年齢
メンバーを意味する配列を宣言し、上記内容を保持する配列を作成してください。*/
echo "問題34" . PHP_EOL;

$member = [
	"名前" => "マイケル氏",
	"性別" => "女性",
	"年齢" => "57"
];

var_dump($member);

/*35,
次の配列を使用して、2という値を出力してください。
$test = array(
  array(
    array(
      1,1,1
    ),
    array(
      1,1,1
    ),
    array(
      1,1,1
    )
  ),
  array(
    array(
      1,1,2
    ),
    array(
      1,1,1
    )
  )
);*/
echo "問題35" . PHP_EOL;

$test = array(
  array(
    array(1, 1, 1),
    array(1, 1, 1),
    array(1, 1, 1),
  ),
  array(
    array(1, 1, 2),
    array(1, 1, 1)
  )
);

echo $test[1][0][2];


?>

