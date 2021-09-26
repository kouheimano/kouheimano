<?php

function sum($max) {
return $max * 2;
}
echo sum(100);
echo "\n";

function add($a, $b){
 return $a + $b;
 }
 echo add(1,2);
 echo "\n";

function fact($arr){
     $result = 1;
     foreach($arr as $a){
         $result =$result * $a;
     }
    return $result;
}
echo fact(array(1,3,5,7,9));
echo "\n";

function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
     if($max_number<$a){
         $max_number = $a;
    }
 }
 //どうしたらいいかわからない・・・・
 return $max_number;
}
echo max_array([5, 2, 100, 9, 7]);
echo "\n";    

$str = "<h1>strip_tags関数</h1><p>タグをとる</p>";
 
echo strip_tags($str,"<p>");
 echo "\n";


$fruits1 = ['apple', 'orange', 'melon', 'banana', 'pineapple'];
$fruits2 = ['strawberry', 'cherry', 'watermelon'];
$fruits3 = ['anzu', 'papaya'];
 
//配列を結合する
$fruits_merge = array_merge($fruits1, $fruits2, $fruits3);
 
print_r($fruits_merge);
echo "\n";

$ntime = time();
echo '現在のUnixスタンプ：'.$ntime;
echo "\n";
//3日後のタイムスタンプを取得
$nweek = time() + (3 * 24 * 60 * 60);
echo '3日後のUnixタイムスタンプ：'.$nweek;

$members=array("一郎","二郎","三郎");
            array_push($members,"四郎","五郎");
            print_r($members);
            echo "\n";
            
$time = mktime(9);
  var_dump(date('Y年m月d日h時i分s秒', $time));
  echo "\n";

  $time = mktime(10, 10, 10);
  var_dump(date('Y年m月d日h時i分s秒', $time));
  echo "\n";

  $time = mktime(0, 0, 0, 1, 1, 2020);
  var_dump(date('Y年m月d日h時i分s秒', $time));
  echo "\n";
  
// 現在日付をフォーマットする
echo date('Y/m/d');
echo "\n";
// 現在日時をフォーマットする
echo date('Y-m-d H:i:s');
echo "\n";
echo date('Y年m月d日 H時i分s秒');
 
?>
