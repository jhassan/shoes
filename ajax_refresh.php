<?php
// PDO connect *********
function connect() {
    return new PDO('mysql:host=localhost;dbname=shoes', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}

$pdo = connect();
$keyword = '%'.$_POST['keyword'].'%';
$sql = "SELECT * FROM tbl_sizes WHERE size_code LIKE (:keyword) ORDER BY size_id ASC LIMIT 0, 10";
$query = $pdo->prepare($sql);
$query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
$query->execute();
$list = $query->fetchAll();
foreach ($list as $rs) {
	// put in bold the written text
	$size_code = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['size_code']);
	// add new option
    echo '<li onclick="set_item(\''.str_replace("'", "\'", $rs['size_code']).'\'); clickme('.$rs['size_id'].');" style="cursor: pointer;">'.$size_code.'</li>';
}
?>