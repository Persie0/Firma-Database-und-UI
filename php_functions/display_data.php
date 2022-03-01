<?php
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