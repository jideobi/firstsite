<?php

include('simple_html_dom.php');

$html = file_get_html('https://www.boston.com');

echo $html->find('li', 0)->plaintext;

$list = $html->find('div [ class="headline-list"]',0); 


//$list_array = $list->find('li');
//for($i = 0; $i < sizeof($list_array); $i++) {
  //  echo $list_array[$i];}

foreach( $list->find('a') as $element){
    echo "-- " . $element .  "<br>" . "<br>"; 
    //echo ;

}
?>



