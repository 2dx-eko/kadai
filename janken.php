<?php

const TIE = 0;
const LOSE = 1;
const WIN = 2;
const MATCH_JUDGE = [TIE,LOSE,WIN];//"あいこ","負け","勝ち"
const MATCH_JUDGE_FINISH = ["あいこ","負け","勝ち"];
const STONE = 1;
const SCISSORS = 2;
const SPREAD = 3;
const HAND_ARRAY = [
	STONE   => "グー",
	SCISSORS => "チョキ",
	SPREAD   => "パー",
];

const START_TEXT = "じゃんけん！！(グー(1)、チョキ(2)、パー(3)いずれかを入力してください)";

const TIE_TEXT = "あいこです!もう一度!";

//コンティニュー用の定数
const CONTINUE_TEXT = "ゲームを続ける場合は【1】,やめる場合は【2】を入力してください";

//バリデーションの定数
const EMPTY_TEXT_CONTUNUE = "入力が空です、【1】,【2】のいずれかを入力してください";
const EMPTY_NUM_CONTUNUE = "【1】,【2】いずれかを入力してください";

const EMPTY_TEXT_HAND = "入力が空です、グー(1)、チョキ(2)、パー(3)いずれかを入力してください";

const EMPTY_NUM_HAND = "グー(1)、チョキ(2)、パー(3)いずれかを入力してください";

janken();
 
function janken(){
	echo START_TEXT . PHP_EOL;

    //自分の手を入力
	$myhand = input();
	
	//com 手取得
	$comhand = getComHand();
	
    //判定
	$result = judge($myhand, $comhand);
	
	if($result == 0){
		echo TIE_TEXT . PHP_EOL;
		return janken();
	}

	//結果表示
	show($result);
	
	//ゲームを続けるかどうかの関数
	$continue_match  = continueGame();

	if($continue_match == MATCH_JUDGE[LOSE]){
		return janken();
	}elseif($continue_match == MATCH_JUDGE[WIN]){
		return;
	}

}

//自分の手関数
function input(){
	$input = trim(fgets(STDIN));
	$check = validation($input);
	if($check === false){
		return input();
	}
	return $input;
}

//相手の手関数(COM)
function getComHand(){
	$rand = mt_rand(1,3);
	$rand_comhand = HAND_ARRAY[$rand];
	echo "相手の手は【" . $rand_comhand . "】です！" .PHP_EOL;
	return $rand;
}

//自分の手と相手の手を比較
function judge($myhand, $comhand){
	$judge_num = (($myhand-1) - $comhand + 3) % 3;
	if($judge_num == TIE ){
		$result = TIE;
		return $result;
	}elseif($judge_num == LOSE ){
		$result = LOSE;
		return $result;
	}elseif($judge_num == WIN ){
		$result = WIN;
		return $result;
	}

}

//勝ち負けの出力
function show($result){
	echo "あなたの". MATCH_JUDGE_FINISH[$result] . "です('ω')" . PHP_EOL;
	echo CONTINUE_TEXT . PHP_EOL;
}

//ゲームを続けるかどうかの関数
function continueGame(){
	$continue_input = trim(fgets(STDIN));
	$continue_check = continueValidation($continue_input);
	if($continue_check === false){
		return continueGame();
	}
	return $continue_input;
}

//コンティニュー用バリデーション
function continueValidation($continue_input){
    if($continue_input === ""){
        echo EMPTY_TEXT_CONTUNUE . PHP_EOL;
        return false;
	}
	if(!in_array($continue_input,MATCH_JUDGE)  || !is_numeric($continue_input) ){
        echo EMPTY_NUM_CONTUNUE  . PHP_EOL;
        return false;
    }
}

//自分の手用の(1,2,3)バリデーション
function validation($input){
    if($input === ""){
        echo EMPTY_TEXT_HAND . PHP_EOL;
        return false;
	}
	if(in_array($input,HAND_ARRAY) || !is_numeric($input)){
        echo EMPTY_NUM_HAND . PHP_EOL;
        return false;
    }
}

?>