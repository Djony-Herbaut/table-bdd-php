<?php 


class Table {
    static $_topTenLang = array(
        0=>array("Python" => "Web & application"),
        1=>array("C++" => "Application"),
        2=>array("Node js" => "Application"),
        3=>array("PHP" => "Web & application")
    );
    static function afficheTab(){
        foreach ( Table::$_topTenLang as $key => $value) {
            foreach ($value as $language => $utilitie) {
               
                echo "<tr> 
                <td>". ($key+1)."</td>
                <td>" . $language. "</td>
                 <td>" . $utilitie . "</td>
                 </tr>";
            }
        }
    }
}
/* $unTableau = new Table(); */
?>
