<?php
$site = file_get_contents("http://yalova.edu.tr/");

preg_match_all('@<div><a href="(.*?)">@si', $site, $sliderlink);
$sliderlinkcikti = implode("^", $sliderlink[1]);
$sliderlinkdizi = explode ("^",$sliderlinkcikti);



$person = array(
'sliders' =>array(
    'slider_1' =>array(
      "img_link"=>"abc@gfg.com",
      "url"=>"$sliderlinkdizi0"
    ),
    'slider_2' =>array(
      "img_link"=>"abc@gfg.com",
      "url"=>"$sliderlinkdizi1"
    ),
    'slider_3' =>array(
      "img_link"=>"abc@gfg.com",
      "url"=>"$sliderlinkdizi2"
    ),
    'slider_4' =>array(
      "img_link"=>"abc@gfg.com",
      "url"=>"$sliderlinkdizi3"
    ),
    'slider_5' =>array(
      "img_link"=>"abc@gfg.com",
      "url"=>"$sliderlinkdizi4"
    ),
    'slider_6' =>array(
      "img_link"=>"abc@gfg.com",
      "url"=>"$sliderlinkdizi5"
    ),
    'slider_7' =>array(
      "img_link"=>"abc@gfg.com",
      "url"=>"$sliderlinkdizi6"
    ),
    'slider_8' =>array(
      "img_link"=>"abc@gfg.com",
      "url"=>"$sliderlinkdizi7"
    ),
    'slider_9' =>array(
      "img_link"=>"abc@gfg.com",
      "url"=>"$sliderlinkdizi8"
    ),
    'slider_0' =>array(
      "img_link"=>"abc@gfg.com",
      "url"=>"$sliderlinkdizi9"
    ),
  )

);
echo $personJSON=json_encode($person);//returns JSON string





 ?>
