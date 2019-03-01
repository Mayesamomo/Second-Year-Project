<?php

//function delete_post($product_id) {

//    global $db;
//    $query = "DELETE FROM products WHERE productID = :product_id";
//    $statement = $db->prepare($query);
//    $statement->bindValue(":product_id", $product_id);
//    try {
//        $statement->execute();
//    } catch (PDOException $ex) {
//        //redirect to an error page passing the error message
//        heaeder("Location:../view/error.php?msg=" . $ex->getMessage());
//        exit();
//    }
//    $product = $statement->fetch();
//    $statement->closeCursor();
//}

//function add_post($post_cat, $post_title, $post_date, $post_author, $post_keywords, $post_image, $post_content) {
   
//    global $db;
//    $query = "INSERT INTO blog_posts (post_cat, post_title, post_date, post_author, post_keywords, post_image, post_content)
//            VALUES (:category_id, :code, :name, :price)";
//    $statement = $db->prepare($query);
//    $statement->bindValue(":category_id", $category_id);
//    $statement->bindValue("code", $code);
//    $statement->bindValue("name", $name);
//    $statement->bindValue("price", $price);
//
//    try {
//        $statement->execute();
//    } catch (PDOException $ex) {
//        //redirect to an error page passing the error message
//        $categories = get_categories();
//        header("Location:../view/error.php?msg=" . $ex->getMessage());
//        exit();
//    }
//    $statement->closeCursor();
//}
//
?>

   
<!--    ?>
//cheching if the user exist
$query ="SELECT * FROM users WHERE username = :username AND password = :password AND user_status =1 ";
$statement = $db ->prepare($query);
$statement->bindValue(":username", $username);
$statement->bindValue(":password", $password);
$statement->execute();
$all_queries = $statement->fetch();
$arrayLength = $statement->rowCount();
$statement->closeCursor();-->


