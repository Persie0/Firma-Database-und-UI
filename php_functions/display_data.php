<?php
function display_data_erledigt($data) {
    $output = '<table>';
    foreach($data as $column => $var) {
        $output .= '<tr>';
        if($column===0) {
            foreach($var as $col => $val) {
                $output .= "<td>" . $col . '</td>';
            }
            $output .= '</tr>';
        }
        foreach($var as $val) {
            $output .= '<td>' . $val . '</td>';
        }
                $output .= '<td>' . '<a href="../../php_functions/erledigt.php?id=' . $var["id"]  . '"class="button"> Auftrag erledigt!</a>' . '</td>';
        $output .= '</tr>';
    }
    $output .= '</table>';
    echo $output;
}

function display_data($data) {
    $output = "<table class='data_table'>";
    foreach($data as $key => $var) {
        $output .= '<tr>';
        if($key===0) {
            foreach($var as $col => $val) {
                $output .= "<td>" . $col . '</td>';
            }
            $output .= '</tr>';
        }
        foreach($var as $val) {
            $output .= '<td>' . $val . '</td>';
        }
        $output .= '</tr>';
    }
    $output .= '</table>';
    echo $output;
}