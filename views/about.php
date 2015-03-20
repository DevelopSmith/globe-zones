<?php
$db = pg_connect("host=ec2-184-73-221-47.compute-1.amazonaws.com port=5432 dbname=d4gggc013bg6aa user=ymvxejayjiolvt password=spFaxG9g21JkZSWv68UYft-Q_W");

/*$query_drop = "DROP TABLE articles";
pg_exec($db, $query_drop);*/

$sql = "CREATE TABLE articles (
	article_id      intger(100),
	article_title	varchar(400),
	article_text 	varchar(5000),
	article_author	varchar(100),
	article_date	date
)";
pg_exec($db, $sql);

$ins = "INSERT INTO articles(article_title, article_text, article_author, article_date) VALUES('Introduction', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'DevelopSmith', '". date('l jS \of F Y h:i A') ."')";
pg_exec($db, $ins);

$ins = "INSERT INTO articles(article_title, article_text, article_author, article_date) VALUES('Abot Us', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Heba Korany', '". date('l jS \of F Y h:i A') ."')";
pg_exec($db, $ins);

/*$sel = "SELECT * FROM articles ORDER BY id";
$selt = pg_exec($db, $sel);

$ftchd = pg_fetch_array($selt);
var_dump($ftchd);

foreach($ftchd as $row){
	echo '<h1>'. $row['article_title'] .'</h1>';
	echo '<p>'. $row['article_text'] .'</p>';
}*/
?>
