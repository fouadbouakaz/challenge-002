<!-- NIVEAU 1 : DEBUTANT
Créer la fonction deleteWithKey() qui va nous permettre de supprimer une valeur d’un tableau, en y précisant uniquement sa clé, qu’elle soit nominative ou par son index. -->

<?php
$table = array( 0 =>  "orange", 1 =>  "pomme", 2 =>  "banane", 3  =>  "kiwi");
function deleteWithKey(array $table, $key){
	// VOTRE CODE ICI

    unset($table[$key]);
    return $table;
    
}
var_dump (deleteWithKey($table, 2));


// N'oubliez pas de créer des tableaux pour tester :)
?>

<!-- 
<?php
// $table = array( 0 =>  "orange", 1 =>  "pomme", 2 =>  "banane", 3  =>  "kiwi");
// unset($table["2"]);
// var_dump($table); -->

?>

wesh karim