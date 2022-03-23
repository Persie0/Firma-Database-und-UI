<?php
//gibt ganzen Daten des übergebenen Datensatz als  Table aus + Erledigt "Button"
function display_data_erledigt($data) {
    $output = "<table class='data_table'>";
    foreach($data as $row => $var) {//alle "Zeilen" der Tabelle durchgehen
        $output .= '<tr>';
        if($row===0) {//in Zeile 0 sind die table headers (Name der Entitäten)
            foreach($var as $col => $val) {//alle "Reihen" der Zeile durchgehen
                $output .= "<td>" . $col . '</td>';
            }
            $output .= '</tr>';
        }
        foreach($var as $val) {//alle "Reihen" der Zeile durchgehen
            $output .= '<td>' . $val . '</td>';
        }
                $output .= '<td>' . '<a href="../../php_functions/erledigt.php?id=' . $var["id"]  . '"class="button"> Auftrag erledigt!</a>' . '</td>';
        $output .= '</tr>';
    }
    $output .= '</table>';
    echo $output;
}

//gibt ganzen Daten des übergebenen Datensatz als  Table aus
function display_data($data) {
    $output = "<table class='data_table'>";
    foreach($data as $row => $var) {
        $output .= '<tr>';
        if($row===0) {
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

//gibt ganzen Daten des übergebenen Datensatz als Optionen aus
function display_options($data) {
    $output ="";
    foreach($data as $var) {//alle "Zeilen" der Tabelle durchgehen
        foreach($var as $val) {//alle "Reihen" der Zeile durchgehen
            $output .= ' <option value="';
            $output .= $val . '">'. $val . "</option>";
        }
    }
    echo $output;
}