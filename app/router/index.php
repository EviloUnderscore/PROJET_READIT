<?php

use \App\Controllers\PostsController;

if(isset($_GET['postID'])){
    // ROUTE : DETAIL D'UN POST
    // PATTERN: ?postID=x
    // CTRL: postsController
    // ACTION: show
    include_once '../app/controllers/postsController.php';
    PostsController\showAction($connexion, $_GET['postID']);
}
else{
    // ROUTE PAR DEFAUT
    // PATTERN: /
    // CTRL: postsController
    // ACTION: index
    include_once '../app/controllers/postsController.php';
    PostsController\indexAction($connexion);
}