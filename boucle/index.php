<?php
$etudiant = ["Avi", "Eden", "Shirel", "Anthony", "Kevin", "Barbara"];
//initialisation, condition, incrémentation
$totalEtudiant = count($etudiant); // permet de compter la liste, sinon ) chaque fois on devra changer la valeur après le <
for ($initIndex =0; $initIndex < $totalEtudiant; $initIndex++)
{
    echo $etudiant[$initIndex] . " ";
}
//while
echo "<h1>WHILE</h1>";
$initIndex = 0;
while ($initIndex < $totalEtudiant)
{
    echo $etudiant[$initIndex] . " ";
    $initIndex++;
}
//forEach
echo "<h1>foreach</h1>";
foreach ($etudiant as $itemEtudiant => $valueEtudiant)
{
    echo $itemEtudiant . " " . $valueEtudiant . "<br>";
}
$famille = ["fille" => "Bérénice", "fils" => "Louis", "maDerniere" => "Albane"];
foreach ($famille as $itemFamille => $prenomFamille)
{
    echo $itemFamille . " " . $prenomFamille ."<br>";
}
$tableMultiVoiture =[
    "Tesla"=>["Modele"=>"Hybride","Eco"=>true,"couleur"=>"noir"],
    "BMW" => ["Modele"=>"Thermique","Eco"=>false,"couleur"=>"grise"],
    "Fiat"=> ["Modele"=>"Electrique","Eco"=>true,"couleur"=>"rouge"]
];
//afficher chaque marque avc son modele si elle est ecologique ou non
echo  "<h1>FOREACH sur les marques</h1>";
foreach ($tableMultiVoiture as $marque => $tabConfig) {
    echo "La marque est ".$marque ." et le model est ". $tabConfig["Model"]." et ";
    if ($tabConfig["Eco"]===false)
    {
        echo "non";
    }
    echo " ecologique"."<br>";
}
echo  "<h1>FOREACH sur les etudiants</h1>";
$tabEtudiant = [
    1 => ["prenom" => "Avi", "nom" => "Boukris", "age" => 25, "role" => ["Student"]],
    2 => ["prenom" => "Nathalie", "nom" => "Jim", "age" => 34, "role" => ["Prof", "Student"]],
    3 => ["prenom" => "Eden", "nom" => "Boukris", "age" => 22, "role" => ["Student"]],
    4 => ["prenom" => "Shirel", "nom" => "Boukris", "age" => 20, "role" => ["Student"]],
    5 => ["prenom" => "Anthony", "nom" => "Boukris", "age" => 30, "role" => ["Student"]],
    6 => ["prenom" => "Kevin", "nom" => "Boukris", "age" => 28, "role" => ["Student"]],
    7 => ["prenom" => "Barbara", "nom" => "Boukris", "age" => 26, "role" => ["Student"]],
    8 => ["prenom" => "Julie", "nom" => "Boukris", "age" => 24, "role" => ["Prof"]]
];
foreach ($tabEtudiant as $valeurTab){
    echo "je m'appelle " . $valeurTab["prenom"] . " " . $valeurTab["nom"] . " j'ai " .$valeurTab["age"] . " ans " . " et je suis ";

    $personneRoleTotale = count($valeurTab["role"]);
    $valeurTabFlag =0;
    foreach ($valeurTab["role"] as $role => $tabRole){
        echo $tabRole. " ";
        if ($personneRoleTotale > 1 && $valeurTabFlag < ($personneRoleTotale - 1)){
            echo  " et ";
            $valeurTabFlag++;
        }
    }
    echo "<br>";
}