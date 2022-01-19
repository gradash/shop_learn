<?php


// Model for categories DataBase

function getAllMainCatsWithChildren()
{
    $sqlquery = 'SELECT * FROM categories WHERE parent_id=0';
    $rs = mysqli_query(getDBConnection(), $sqlquery);

    $smartyRs = array();
    while ($row = mysqli_fetch_assoc($rs)) {
        $smartyRs[] = $row;
    }
return $smartyRs;
}