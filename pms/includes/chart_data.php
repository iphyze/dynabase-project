<?php

$total = 0;

$get = mysqli_query($db, "SELECT DISTINCT year AS 'year', month AS 'monthname', SUM(total) AS 'total' FROM new_invoice_table GROUP BY YEAR(created_at), MONTH(created_at) ORDER BY YEAR(created_at), MONTH(created_at)");

$gotten = mysqli_fetch_array($get);

foreach($get as $gotten){
$figure[] = $gotten['total'] * 1;
$months[] = $gotten['monthname'];
$year = $gotten['year'];
}

?>