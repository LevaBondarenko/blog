<?php
include ('header.php');
include('simple_html_dom.php');
$mysqli = new mysqli('127.0.0.1', 'root', '', 'news');
if ($mysqli->connect_error) {
    die('Ошибка подключения (' . $mysqli->connect_errno . ') '
        . $mysqli->connect_error);
}
//
header("Content-type: text/html; charset=utf-8");

$html = file_get_html('http://weproject.kz/');
//
//
//    // replace all input
//    foreach($html->find('div.publication__item') as $e){
//        $item['title']= $e->find('div.publication__item-title',0);
//    }
//        var_dump($articles);
//
//    // dump contents
//

//    $html = file_get_html('http://slashdot.org/');

// Find all article blocks
foreach($html->find('article.we-article-block') as $article) {
    $item['TITLE']     = $article->find('div.name', 0)->plaintext;
    $item['URL']     = $article->find('div.name a', 0)->href;
    $item['TEXT']     = $article->find('h2', 0)->plaintext;
    $item['DATE']     = $article->find('div.info span', 0)->plaintext;
    $item['SRC']     = $article->find('img', 0)->src;
    $articles[] = $item;
}

//
////$i=0;
foreach($articles as $item)
{
//   $sql ="INSERT INTO flow VALUES (NULL ,'".$item['title']."','".$item['text']."','".$item['date']."','".$item['src']."');";
//    if($mysqli->query("SELECT *") )
//        $mysqli->query($sql)
//        echo 'New element add :'.$i.'<br>';
//    else
//        echo 'error';

    $sql ="SELECT * FROM weproject WHERE TITLE ='".trim($item['TITLE'])."';";
    $result=$mysqli->query($sql);
    if($result->num_rows > 0)
    {
        echo 'Записи существуют'.'<br>';
    }
    else
    {
//       echo $sql ="SELECT * FROM flow WHERE title ='".trim($item['title'])."',text='".trim($item['text'])."',src='".trim($item['src'])."');".'<br>';
        $sql2 ="INSERT INTO weproject VALUES (NULL ,'".trim($item['TITLE'])."','".trim($item['TEXT'])."','".trim($item['DATE'])."','".trim($item['URL'])."','".trim($item['SRC'])."');";
        $mysqli->query($sql2);
        echo 'New element add :'.$i.'<br>';

    }
}

//print '<pre>';print_r($articles);print '</pre>';


include ('footer.php');
?>