<!-- On ne supprime pas au hasard : la suite
NIVEAU 2 : INTERMEDIAIRE
Dans la continuité de l’exercice précédent, nous allons lui utiliser le tableau suivant : -->
<?php


?>
<!-- L’objectif va donc consister à ajouter un troisième paramètre à notre fonction qui doit contenir la clé de vérification, déterminée par la valeur de la clé “hash” de chaque référence du tableau. 
Ainsi l'élément de tableau à supprimer ne le sera que si la paire de valeurs ref + hash correspond. Si aucun hash n’est passé dans notre fonction, alors aucune valeur ne sera supprimée.

Ex : la ref 10002, ne pourra être supprimée que si la chaine “c7pszt5” lui est passée en paramètre ($hash). -->
<?php
$monArray = [
	[
		"ref" => "A0001",
		"hash" => "b8sftlc"
	],
	[
		"ref" => "A0002",
		"hash" => "c7pszt5"
	],
	"bouh" => [
		"ref" => "A0003",
		"hash" => "tpmez87"
	],
];

var_dump($monArray);

function deleteWithKey(array $array, $key, $hash){
	// VOTRE CODE ICI
};

?>