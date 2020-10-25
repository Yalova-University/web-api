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

preg_match_all('@<img src="(.*?)">@si', $site, $haberdesc);
$haberdesccikti = implode('"', $haberdesc[1]);
$haberdescdizi = explode ('"',$haberdesccikti);

preg_match_all('@<p class="post-date mb-0 font-12">(.*?)</p>@si', $site, $haberdate);
$haberdatecikti = implode('^', $haberdate[1]);
$haberdatedizi = explode ('^',$haberdatecikti);

preg_match_all('@<a class="post-thumb" href="(.*?)">@si', $site, $haberurl);
$haberurlcikti = implode('^', $haberurl[1]);
$haberurldizi = explode ('^',$haberurlcikti);


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
        "url"=>"$haberurldizi[0]",
        "date"=>"$haberdatedizi[0]",
        "desc"=>"$haberdescdizi[87]"
      ),
      'news_2' =>array(
        "img_link"=>"$haberfotodizi[92]",
        "url"=>"$haberurldizi[1]",
        "date"=>"$haberdatedizi[1]",
        "desc"=>"$haberdescdizi[94]"
      ),
      'news_3' =>array(
        "img_link"=>"$haberfotodizi[99]",
        "url"=>"$haberurldizi[2]",
        "date"=>"$haberdatedizi[2]",
        "desc"=>"$haberdescdizi[101]"
      ),
      'news_4' =>array(
        "img_link"=>"$haberfotodizi[106]",
        "url"=>"$haberurldizi[3]",
        "date"=>"$haberdatedizi[3]",
        "desc"=>"$haberdescdizi[108]"
      ),
      'news_5' =>array(
        "img_link"=>"$haberfotodizi[103]",
        "url"=>"$haberurldizi[4]",
        "date"=>"$haberdatedizi[4]",
        "desc"=>"$haberfotodizi[115]"
      )
    )

);
echo $personJSON=json_encode($person);//returns JSON string





 ?>
