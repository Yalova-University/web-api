<?php
$site = file_get_contents("http://www.yalova.edu.tr/");
$site2 = "http://www.yalova.edu.tr/";
preg_match_all('@<img src="(.*?)">@si', $site, $sliderlink);
$sliderlinkcikti = implode("^", $sliderlink[1]);
$sliderlinkdizi = explode ("^",$sliderlinkcikti);



$person = array(
'sliders' =>array(
    'slider_1' =>array(
      "img_link"=>"$site2$sliderlinkdizi[6]",
      "url"=>""
    ),
    'slider_2' =>array(
      "img_link"=>"$site2$sliderlinkdizi[7]",
      "url"=>""
    ),
    'slider_3' =>array(
      "img_link"=>"$site2$sliderlinkdizi[8]",
      "url"=>""
    ),
    'slider_4' =>array(
      "img_link"=>"$site2$sliderlinkdizi[9]",
      "url"=>""
    ),
    'slider_5' =>array(
      "img_link"=>"$site2$sliderlinkdizi[10]",
      "url"=>""
    ),
    'slider_6' =>array(
      "img_link"=>"$site2$sliderlinkdizi[11]",
      "url"=>""
    ),
    'slider_7' =>array(
      "img_link"=>"$site2$sliderlinkdizi[12]",
      "url"=>""
    ),
    'slider_8' =>array(
      "img_link"=>"$site2$sliderlinkdizi[13]",
      "url"=>""
    ),
    'slider_9' =>array(
      "img_link"=>"$site2$sliderlinkdizi[14]",
      "url"=>""
    ),
    'slider_0' =>array(
      "img_link"=>"$site2$sliderlinkdizi[15]",
      "url"=>""
    ),
  )

);
echo $personJSON=json_encode($person);//returns JSON string





 ?>
