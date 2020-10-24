<?php
$site = file_get_contents("http://www.yalova.edu.tr/");
$site2 = "http://www.yalova.edu.tr/";
preg_match_all('@<img src="(.*?)>@si', $site, $sliderfoto);
$sliderfotocikti = implode("^", $sliderfoto[1]);
$sliderfotodizi = explode ("^",$sliderfotocikti);

preg_match_all('@<div><a(.*?)>@si', $site, $sliderlink);
$sliderlinkcikti = implode('href="', $sliderlink[1]);
$sliderlinkdizi = explode ('"',$sliderlinkcikti);

preg_match_all('@<img src="(.*?)>@si', $site, $haberfoto);
$haberfotocikti = implode('', $haberfoto[1]);
$haberfotodizi = explode ('"',$haberfotocikti);

$person = array(
'sliders' =>array(
    'slider_1' =>array(
      "img_link"=>"$site2$sliderfotodizi[6]",
      "url"=>"$sliderlinkdizi[1]"
    ),
    'slider_2' =>array(
      "img_link"=>"$site2$sliderfotodizi[7]",
      "url"=>"$sliderlinkdizi[4]"
    ),
    'slider_3' =>array(
      "img_link"=>"$site2$sliderfotodizi[8]",
      "url"=>"$sliderlinkdizi[7]"
    ),
    'slider_4' =>array(
      "img_link"=>"$site2$sliderfotodizi[9]",
      "url"=>"$sliderlinkdizi[10]"
    ),
    'slider_5' =>array(
      "img_link"=>"$site2$sliderfotodizi[10]",
      "url"=>"$sliderlinkdizi[12]"
    ),
    'slider_6' =>array(
      "img_link"=>"$site2$sliderfotodizi[11]",
      "url"=>"$sliderlinkdizi[14]"
    ),
    'slider_7' =>array(
      "img_link"=>"$site2$sliderfotodizi[12]",
      "url"=>"$sliderlinkdizi[17]"
    ),
    'slider_8' =>array(
      "img_link"=>"$site2$sliderfotodizi[13]",
      "url"=>"$sliderlinkdizi[20]"
    ),
    'slider_9' =>array(
      "img_link"=>"$site2$sliderfotodizi[14]",
      "url"=>"$sliderlinkdizi[22]"
    ),
    'slider_0' =>array(
      "img_link"=>"$site2$sliderfotodizi[15]",
      "url"=>"$sliderlinkdizi[24]"
    )
  ),
  'news_block' =>array(
      'news_1' =>array(
        "img_link"=>"$haberfotodizi[85]",
        "url"=>"$haberfotodizi[1]",
        "date"=>"$haberfotodizi[1]"
      ),
      'news_2' =>array(
        "img_link"=>"$haberfotodizi[92]",
        "url"=>"$haberfotodizi[4]",
        "date"=>"$haberfotodizi[1]"
      ),
      'news_3' =>array(
        "img_link"=>"$haberfotodizi[99]",
        "url"=>"$haberfotodizi[7]",
        "date"=>"$haberfotodizi[1]"
      ),
      'news_4' =>array(
        "img_link"=>"$haberfotodizi[106]",
        "url"=>"$haberfotodizi[10]",
        "date"=>"$haberfotodizi[1]"
      ),
      'news_5' =>array(
        "img_link"=>"$haberfotodizi[103]",
        "url"=>"$haberfotodizi[12]",
        "date"=>"$haberfotodizi[1]"
      )
    )

);
echo $personJSON=json_encode($person);//returns JSON string





 ?>
