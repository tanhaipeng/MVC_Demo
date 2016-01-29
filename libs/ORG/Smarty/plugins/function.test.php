<?php

function smarty_function_test($params){
    // $params:map-set
    $width=$params['width'];
    $height=$params['height'];
    return $width*$height;
}