<?php 
require'../model/database.php';
require'../model/login_db.php';

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL)
        $action = 'show_frontpage';
}
switch ($action) {

    case 'show_frontpage':
        include '../view/frontpage.php';
        break;
    case 'login':
         $username = filter_input(INPUT_POST, 'username');
        $password = filter_input(INPUT_POST,'password');
        if($id = login($username,$password) != -1) {
            include '../view/landing.php';
            
        }
        else {
            $msg = "Sorry incorrect username and or password";
            header("Location: ?action=show_login&msg=" . $msg);
        }
        break;
    case 'get_post':
         $post_id = filter_input(INPUT_GET, "post_id", FILTER_VALIDATE_INT);
        if ($category_id != NULL || $category_id != false) 
        {
            $category_id =1; //default setting
        }
        $posts = get_post();       
       include '../view/frontpage.php';
       break;

}
