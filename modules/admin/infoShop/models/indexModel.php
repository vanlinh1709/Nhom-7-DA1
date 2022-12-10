<?php
 function getInfo() {
     $sql = 'SELECT * FROM info_shop';
     $info = pdo_query_one($sql);
     return $info;
 }
?>