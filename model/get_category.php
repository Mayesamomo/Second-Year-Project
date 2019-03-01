<?php

function get_categories() {
    global $db;
    $query = " SELECT * FROM categories "
            . " ORDER BY category_title ";
    $statement = $db->prepare($query);
    try {
        $statement->execute();
    } catch (PDOException $ex) {
        //redirect to an error page passing the message
        header("location:../view/error.php?msg=") . $ex->getMessage();
    }
    $categories = $statement->fetchAll();
//    $category_name = $category['categoryName'];
    $statement->closeCursor();

    return $categories;
}
