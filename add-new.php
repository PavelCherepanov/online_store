<?php 

require_once("config.php");

if (isset($_SESSION['login']) && $_SESSION['login'] == 'on') {	
}else {
	header("Location: index.php");
}



if (@!$_POST["sale"]) {
	$_POST["sale"] = NULL;
}

if (@!$_POST["new"]) {
	$_POST["new"] = NULL;
}


echo $_FILE["img"]["name"];

echo $_FILE["img"]["tmp_name"];


if (isset($_FILES["img"]) && $_FILES["img"]["tmp_name"] != ""){
	move_uploaded_file($_FILES["img"]["tmp_name"], "./img/products/".$_FILES["img"]["name"]);
	$fileName = $_FILES["img"]["name"];
}else {
	$fileName = "nophoto.jpg";
}

$sql = "INSERT INTO products (title, price, description, img, category, sale, new) VALUES(:title, :price, :description, :img, :category, :sale, :new) ";
$stmt = $db->prepare($sql);
$title = htmlspecialchars($_POST['title']);

$stmt->bindValue(":title", $_POST['title']);
$stmt->bindValue(":price", $_POST['price']);
$stmt->bindValue(":description", $_POST['description']);
$stmt->bindValue(":img", $fileName);
$stmt->bindValue(":category", $_POST['category']);
$stmt->bindValue(":sale", $_POST['sale']);
$stmt->bindValue(":new", $_POST['new']);

$stmt->execute();

header("Location: admin-success.php");
?>