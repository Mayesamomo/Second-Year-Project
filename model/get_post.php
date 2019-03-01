<?php
function get_post() {
    global $db;
    $query = " SELECT * FROM blog_posts "
            . " ORDER BY post_date ";
    $statement = $db->prepare($query);
    try {
        $statement->execute();
    } catch (PDOException $ex) {
        //redirect to an error page passing the message
        header("location:../view/error.php?msg=") . $ex->getMessage();
    }
    $posts = $statement->fetchAll();
//    $category_name = $category['categoryName'];
    $statement->closeCursor();

    return $posts;
}


