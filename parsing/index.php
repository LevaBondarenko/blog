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

$html = file_get_html('http://the-flow.ru/');
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
foreach($html->find('div.publication__item') as $article) {
    $item['title']     = $article->find('div.publication__item-title', 0)->plaintext;
    $item['src']     = $article->find('div.publication__item-title a', 0)->href;
    $item['text']     = $article->find('div.publication__item-text', 0)->plaintext;
    $item['date']     = $article->find('div.publication__item-date', 0)->plaintext;
    $articles[] = $item;
}

//$i=0;
foreach($articles as $item)
{
//   $sql ="INSERT INTO flow VALUES (NULL ,'".$item['title']."','".$item['text']."','".$item['date']."','".$item['src']."');";
//    if($mysqli->query("SELECT *") )
//        $mysqli->query($sql)
//        echo 'New element add :'.$i.'<br>';
//    else
//        echo 'error';

    $sql ="SELECT * FROM flow WHERE title ='".trim($item['title'])."';";
    $result=$mysqli->query($sql);
    if($result->num_rows > 0)
    {
        echo 'Записи существуют'.'<br>';
    }
    else
    {
//       echo $sql ="SELECT * FROM flow WHERE title ='".trim($item['title'])."',text='".trim($item['text'])."',src='".trim($item['src'])."');".'<br>';
        $sql2 ="INSERT INTO flow VALUES (NULL ,'".trim($item['title'])."','".trim($item['text'])."','".trim($item['date'])."','".trim($item['src'])."');";
        $mysqli->query($sql2);
        echo 'New element add :'.$i.'<br>';

    }
}

//print '<pre>';print_r($articles);print '</pre>';

include ('header.php');
?>