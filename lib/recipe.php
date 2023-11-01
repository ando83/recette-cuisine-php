<?php
$recipes = [
    ['title'=> 'mousse au chololat', 'description'=>'La mousse au chocolat est un dessert dont la composition traditionnelle comporte au minimum du chocolat et du blanc d\'œuf, monté en neige.', 'image'=>'1-chocolate-au-mousse.jpg'],
    ['title'=> 'gratin dauphinois', 'description'=>'Le gratin dauphinois ou pommes de terre à la dauphinoise est un plat gratiné traditionnel de la cuisine française, d\'origine dauphinoise, à base de pommes de terre et de lait.', 'image'=>'2-gratin-dauphinois.jpg'],
    ['title'=> 'salade', 'description'=>'Une salade composée ou salade mixte est une recette de cuisine à base de mélange de salade et de composition de divers ingrédients. Variante des assiettes composées, il en existe une multitude de recettes de toutes les cuisines du monde.', 'image'=>'3-salade.jpg'],
  ];


function getRecipeById(PDO $pdo, int $id) {    
  $query = $pdo->prepare("SELECT * FROM recipes WHERE id = :id");
  $query->bindParam(':id', $id, PDO::PARAM_INT);
  $query->execute();
  return $recipe = $query->fetch();
}