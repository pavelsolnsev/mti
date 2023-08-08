<?php

$lander        = "https://syn.su/lander.php?r=land/index";
$land          = 'mti';
$type          = 'mti';
$unit          = 'synergy';
$date          = '';
$quote_id      = '';
$speaker       = '';
$program       = '';
$GTM           = '';
$title         = '';
$desc          = '';
$link          = '';
$Facebook_ID   = '';


switch($version){
    case '':
 
    break;
}

$action = implode(array(

    $lander,

    '&land='     ,  $land,
    '&unit='     ,  $unit,
    '&type='     ,  $type,
    '&version='  ,  $version,
    '&partner='  ,  $partner,
    '&speaker='  ,  $speaker,
    '&program='  ,  $program,
    // '&link='     ,  $link,
    '&link=', urlencode($link),
    '&quote_id=' ,  $quote_id,
    '&ignore-thanksall=true'

));

