<?php

function check_tags($input, $tags){
    //  check if current_tag is open or close tag
    //  if open -> old_tag = current_tag
    //  add tag to the tags array
    //  if close -> check if current_tag is the closed tag for the old_tag ... if true pop old_tag from tags array and remove current_tag from $input

    $tag = get_string_between($input, "<", ">");
    if(check_open_tags('<'. $tag '/>')){
        array_push($tags, '<'. $tag '/>')
    }
    elseif (check_close_tags('</'. $tag '>')) {
        if()
    }
}

function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}

function check_open_tags($tag){
    $open_tags = array('<b>', '<i>', '<em>', '<div>', '<p>');
    if (in_array($tag, $open_tags))
        return true;       
}

function check_close_tags($tag){
$close_tags = array('</b>', '</i>', '</em>', '</div>', '</p>');
if (in_array($tag, $close_tags))
    return true;       
}

$input = "<div><b><p>hello world</p></b></div>";
$temp = $input;
$tags = array();
check_tags($input, $tags);

HTMLElements($input);
?>
