<?php

    function check_tags($input = null, $stack = array()){

        $tag_indexes = get_tags_start_and_end_indexes($input, '<', '>');
        if (!$tag_indexes){
            echo "The String is nested Correctly";
            return;
        }

        $len = strlen($input) - $tag_indexes['end_index'];
        $tag = substr($input, $tag_indexes['start_index'], strlen($input) == $tag_indexes['end_index'] + 1 ? strlen($input) :  - $len + 1 );
        if(check_open_tags($tag)){
            array_push($stack , $tag);
        } 
        else if (check_close_tags($tag)){
            $open_tag = array_pop($stack);
            if(!match_dom_elements($open_tag, $tag)){
                echo substr($open_tag, 1, -1);
                return;
            }
        }

            $sub_ini = substr($input, $tag_indexes['end_index'] + 1, strlen($input));
            check_tags($sub_ini, $stack);
    }

    function match_dom_elements($open_tag, $close_tag){
        $tags = array(
            "<b>" => "</b>",
            "<i>" => "</i>",
            "<em>" => "</em>",
            "<div>" => "</div>",
            "<p>" => "</p>"
        );
        return $close_tag == $tags[$open_tag];
    }

    function get_tags_start_and_end_indexes($string, $start_char, $end_char){
        if(!empty($string)){
            $start_index = strpos($string, $start_char);
            $end_index = strpos($string, $end_char) ;

            if ($start_index === false || $end_index === false)
                return false;
            return array('start_index' => $start_index, 'end_index' => $end_index);
        }
        return false;
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


$examples = array("<div><b><p>hello world</p></b></div>",
                  "<div><div><b></b></div></p>",
                  "<div>abc</div><p><em><i>test test test</b></em></p>" ,
);

foreach ($examples as $example) {
    echo check_tags($example);
    echo "<br>";
}
