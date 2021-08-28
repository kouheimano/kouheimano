<?php

$name = "mano";

if ($name == "mano") {
 echo "私は". $name ."です";
 echo "\n";
 } else {
    echo $name . "ではありません";
}

$total = 0;
echo $total;
echo "\n";

for ($i = 1; $i <=10000; $i++){
 // if(0 <= $i and $i <= 2){
 //  echo "カウンタ-" . $i;
 // }
 $total += $i;
}
echo $total;
echo "\n";

$fruits = array("りんご","オレンジ","レモン","メロン","バナナ");
foreach($fruits as $fruit){
 echo $fruit;
 echo "\n";
}

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}