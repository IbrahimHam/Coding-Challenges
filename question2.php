<?php

function do_match($string) {
    $len = strlen($string);
    $stack = array();
    for ($i = 0; $i < $len; $i++) {
        switch ($string[$i]) {
            // If an opening bracket, add to the stack
            case '(': array_push($stack, 0); break;
           // If a closing bracket check if it maches with the last value we pushed to the stack if not return false 
            case ')': 
                if (array_pop($stack) !== 0)
                    return false;
            break;

            case '[': array_push($stack, 1); break;
            case ']': 
                if (array_pop($stack) !== 1)
                    return false;
            break;

            case '{': array_push($stack, 2); break;
            case '}': 
                if (array_pop($stack) !== 2)
                    return false;
            break;

            default: break;
        }
    }
    return (empty($stack));
}

$examples = array("[]", "[)", "[[" , "({)}", "[[[()]]]");
foreach ($examples as $example) {
    if(do_match($example)) {
        echo $example . " is Valid!";
        echo "<br>";
}
    else {
        echo $example . " is Invalid!";
        echo "<br>";
    }
}

?>