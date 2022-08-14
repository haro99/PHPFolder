<?php
// Your code here!
/*
    $url = "http://ext.nicovideo.jp/api/getthumbinfo/sm4465139";
    
    $xml = simplexml_load_file($url);
    
    var_dump($xml);
    
    foreach ($xml->thumb->tags->tag as $value) {
        echo $value. "\n";
    }
    echo $xml->thumb->tag[1];
*/

$document = new DOMDocument();
 
$title = $document->createElement('title');
$title->appendChild($document->createTextNode('Hello DOM Document!'));
 
$description = $document->createElement('description');
$description->appendChild($document->createTextNode('Message'));
 
$item = $document->createElement('item'); 
$item->appendChild($title);
$item->appendChild($description);
 
$document->appendChild($item);
 
echo $document->saveXML();

