<?php

function pr($var = '') {
    echo '<pre>';
    if (is_array($var)) {
        print_r($var);
    } else {
        var_dump($var);
    }
    echo '</pre>';
}

function noduplicates($data) {
    $CI = &get_instance();
    $CI->db->select("*");
    $CI->db->from($data['table']);
    $CI->db->where(array($data['field'] => $data['value']));
    $query = $CI->db->get();
    if ($query->num_rows() == '') {
        return true;
    } else {
        return false;
    }
}

function limit_me($text,$num_chars){
    $string = strip_tags($text);
    if (strlen($string) > $num_chars) {
    // truncate string
        $stringCut = substr($string, 0, $num_chars);
    // make sure it ends in a word so assassinate doesn't become ass...
        $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
    }
    return $string;
}
