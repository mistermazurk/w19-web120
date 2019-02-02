<?php
//config.php

//enables page to know it's own name
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

//reCAPTCHA credentials here

//default in case pages don't have titles
$title = THIS_PAGE;

switch(THIS_PAGE){
   
    case 'index.php':
        $title = 'Lee\'s Home Page!';
        $logo = "fa-home";
    break;
    case 'flowchart.php':
        $title = 'Lee\'s Flowchart Page!';
        $logo = "fa-book";
    break;
    case 'aia.php':
        $title = 'Lee\'s AIA Page!';
        $logo = "fa-address-card";
    break;
    case 'contactme.php':
        $title = 'Lee\'s Contact Page!';
        $logo = "fa-paper-plane-o";
    break;    
        
}

//place URL & labels in the array here for navigation:
$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Lee";

/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
            $myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
        }else{
            $myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
        }    
    }
      
    return $myReturn;    
}





?> 