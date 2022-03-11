<?php
function display_data_erledigt($data) {
    $output = '<table>';
    foreach($data as $column => $var) {
        $output .= '<tr>';
        foreach($var as $k => $v) {
            if ($column === 0) {
                $output .= '<td><strong>' . $k . '</strong></td>';
            } else {
                $output .= '<td>' . $v . '</td>';
            }
        }
        if ($column !== 0)
                $output .= '<td>' . '<a href="../../php_functions/erledigt.php?id=' . $var["id"]  . '"class="button"> Auftrag erledigt!</a>' . '</td>';
        $output .= '</tr>';
    }
    $output .= '</table>';
    echo $output;
}

function display_data($data) {
    $output = '<table>';
    foreach($data as $key => $var) {
        $output .= '<tr>';
        foreach($var as $k => $v) {
            if ($key === 0) {
                $output .= '<td><strong>' . $k . '</strong></td>';
            } else {
                $output .= '<td>' . $v . '</td>';
            }
        }
        $output .= '</tr>';
    }
    $output .= '</table>';
    echo $output;
}