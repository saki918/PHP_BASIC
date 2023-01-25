<?php
// 変数
const NUMBER = 2;
// ブログのタイトル
// ブログ①
const ID = 1;
$title = "PHP";
$content = "PHPテストです。";
$post_at = "2023/01/25";
$tag = ["PHP","プログラミング"];
$status = true; // 公開の場合は true 非公開の場合はfalse

// ブログ②
const ID2 = 2;
$title2 = "PHP2";
$content2 = "PHPテストです。2";
$post_at2 = "2023/01/25";
$tag2 = ["PHP2","プログラミング2"];
$status2 = true; // 公開の場合は true 非公開の場合はfalse

// ２つの記事データを配列に入れて、ループ処理で表示する。：前半
// ブログ①
$blog1 = array(
    'id' => ID,
    "title" => $title,
    'content' => $content,
    'post_at' => $post_at,
    'tag' => $tag,    // データ型が出力される
    'status' => $status
);

// 配列の取り出し方
// 配列の中から漢字orキーを指定する
echo $blog1['tag'];
echo "<br>";

// PHP 5.4以降では配列の短縮構文が追加され、
// array() の代わりに [] を使えるようになった。
// ブログ②
$blog2 = [
  'id2' => ID2,
  "title2" => $title2,
  'content2' => $content2,
  'post_at2' => $post_at2,
  'tag2' => $tag2,
  'status2' => $status2
];

echo '<pre>';       // 配列の前にpreタブを入れると見やすくなる。
var_dump($blog2);
echo '</pre>';
echo "<br>";

// 多次元配列
// 配列の中に配列
$blogs = [$blog1, $blog2];

echo '<pre>';       // 配列の前にpreタブを入れると見やすくなる。
var_dump($blogs);   // var_dump はデバッグ用の関数
echo '</pre>';
echo "<br>";

// ループ処理
// foreach の処理
// ①バリューのみの出力
foreach($blog1 as $blog) {
  echo '<pre>';   
  echo $blog;
  echo '</pre>';   
};
echo "<br>";

// ②キーとバリューを出力
foreach ($blog2 as $key => $value) {
  # code...
  echo '<pre>'; 
  echo $key , ' = ' , $value;
  echo '</pre>'; 
};
echo "<br>";

// 多次元配列blogsを展開するには？
foreach ($blogs as $blog) {
  # code...
  foreach ($blog as $value) {
    # code...
    echo '<pre>';   
    echo $value;
    echo '</pre>';     
  }
};

?>