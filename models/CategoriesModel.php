<?php


// Model for categories DataBase


/**
 * @param $catId
 * @return array|false
 */
function getChildrenForCat($catId){
    $sqlquery = "SELECT * FROM categories WHERE parent_id='{$catId}'";
    $rs = mysqli_query(getDBConnection(), $sqlquery);
    return createSmartyRsArray($rs);


}

/**
 * get main categories with child connections
 * @return array
 */

function getAllMainCatsWithChildren()
{
    $sqlquery = 'SELECT * FROM categories WHERE parent_id=0';
    $rs = mysqli_query(getDBConnection(), $sqlquery);  // rs for records

    $smartyRs = array();
    while ($row = mysqli_fetch_assoc($rs)) {

        $rsChildren = getChildrenForCat($row['id']);
        if ($rsChildren) {
            $row['children'] = $rsChildren;
        }
        $smartyRs[] = $row;
    }
    return $smartyRs;
}