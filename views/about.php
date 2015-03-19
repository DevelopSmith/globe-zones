<?php
echo 'We are very awesome!!! Yes I am sure';

$db = pg_connect("host=ec2-184-73-221-47.compute-1.amazonaws.com port=5432 dbname=d4gggc013bg6aa user=ymvxejayjiolvt password=spFaxG9g21JkZSWv68UYft-Q_W");

/*$query_drop = "DROP TABLE films";
pg_exec($db, $query_drop);*/

/*$sql = "CREATE TABLE articles (
    id          integer,
    title       varchar(40),
    context     varchar(100),
    date_prod   date
)";
pg_exec($db, $sql);*/

$ins = INSERT INTO articles(id, title, context) VALUES('1', 'Introduction', 'Lorem ipsum dolor sit amet, consectetur adipisici.');

pg_exec($db, $ins);
?>
