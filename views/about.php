<?php
$db = pg_connect("host=ec2-184-73-221-47.compute-1.amazonaws.com port=5432 dbname=d4gggc013bg6aa user=ymvxejayjiolvt password=spFaxG9g21JkZSWv68UYft-Q_W");

/*$query_drop = "DROP TABLE films";
pg_exec($db, $query_drop);

$sql = "CREATE TABLE articles (
    id          integer,
    title       varchar(40),
    context     varchar(100),
    date_prod   date
)";
pg_exec($db, $sql);

$ins = "INSERT INTO articles(id, title, context) VALUES('1', 'Introduction', 'Lorem ipsum dolor sit amet, consectetur adipisici.')";

pg_exec($db, $ins);*/

pg_exec($db, 'ALTER TABLE articles MODIFY context TEXT');

$ins = "INSERT INTO articles(id, title, context) VALUES('2', 'Hints for better life', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.')";

pg_exec($db, $ins);

$sel = "SELECT * FROM articles ORDER BY id";
$selt = pg_exec($db, $sel);

$ftchd = pg_fetch_array($selt);
var_dump($ftchd);

foreach($ftchd as $row){
	echo '<h1>'. $row['title'] .'</h1>';
	echo '<p>'. $row['context'] .'</p>';
}
?>
