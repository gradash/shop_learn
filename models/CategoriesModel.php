<?php


// Model for categories DataBase

function getAllMainCatsWithChildren()
{
    $sqlquery = 'SELECT * FROM categories WHERE parent_id=0';

    $rs = mysqli_query(getDBConnection(), $sqlquery);

        while ($row = mysqli_fetch_assoc($rs)) {

    }

}