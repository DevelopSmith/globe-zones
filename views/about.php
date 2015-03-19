<?php
echo 'We are very awesome!';

$db = pg_connect("host=ec2-184-73-221-47.compute-1.amazonaws.com port=5432 dbname=d4gggc013bg6aa user=ymvxejayjiolvt password=spFaxG9g21JkZSWv68UYft-Q_W");

$sql = "CREATE TABLE films (
    code        char(5),
    title       varchar(40),
    did         integer,
    date_prod   date,
    kind        varchar(10)
)";
pg_exec($db, $sql)
?>