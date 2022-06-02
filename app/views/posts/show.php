<?php
/*
Variables disponibles :
$post : ARRAY(id, title, created_at, resume, image, content, author_id, categorie_id)
*/
?>

<!-- CONTENT -->

    <p class="mb-5">
            <img src="images/<?php echo $post['image'];?>" alt="" class="img-fluid">
    </p>
    <h1 class="mb-3 h1"><?php echo $post['title'];?></h1>
    <div><?php echo $post['content'];?></div>
        </div>
    </div>

<!-- TAGS -->

<?php 

    include_once '../app/models/tagsModel.php';
    $tags = \App\Models\TagsModel\findAllByPostId($connexion, $post['id']);
    include '../app/views/tags/_indexByPostId.php';

?>

<!-- AUTHORS -->

<?php 

    include_once '../app/models/authorsModel.php';
    $author = \App\Models\AuthorsModel\findOneById($connexion, $post['author_id']);
    include '../app/views/authors/_show.php';

?>