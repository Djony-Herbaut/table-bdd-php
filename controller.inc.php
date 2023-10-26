<?php 
    $_topTenLang = array(
        0=>array("Python" => "Web & application"),
        1=>array("C++" => "Application"),
        2=>array("Node js" => "Application"),
        3=>array("PHP" => "Web & application")
    );

class Table {
    static function afficheTab($table){
        foreach ($table as $key => $value) {
            foreach ($value as $language => $utilitie) {
                $key++;
                echo "<tr> ";
                echo "<td>" . $key. "</td>";
                echo "<td>" . $language. "</td>";
                echo "<td>" . $utilitie . "</td>";
                echo "</tr>";
            }
        }
    }
}
$unTableau = new Table();
?>