<?php
// 文字の出力 Web上に表示される
echo "Hello World";
echo "<br>";
// コメントアウト
// ブログのタイトル
$title = "PHPテスト";
$content = "PHPテストです。";
$post_at = "2023/01/25";
$tag = ["PHP","プログラミング"];
$status = true; // 公開の場合は true 非公開の場合はfalse

// 定数
const ID = 1;

echo ID;
echo "<br>";
echo $title;
echo "<br>"; // 改行
echo $content;
echo "<br>";
echo $post_at;
echo "<br>";
print_r($tag);
echo "<br>";

// データ型の調査
var_dump($ID); // NULL と出力される
echo "<br>";
var_dump(ID); // 定数の場合は "$"は先頭に不要
echo "<br>";
var_dump($title); // String型の場合は String()内にバイト数 その後に変数の中身が出力される
echo "<br>";
var_dump(title); // 文字列と判定される string(5)"title と表示される。"
echo "<br>";
var_dump("title"); // 文字列と判定される string(5)"title と表示される。"
echo "<br>"; 

// "" と '' の違い '' で囲んだほうが処理速度が早い
echo "タイトル名：$title";
echo "<br>";
echo 'タイトル名：$title'; // ''で囲むと変数名が文字列で認識されてしまう。
echo "<br>";

?>