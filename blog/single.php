<?php include("path.php");

include(ROOT_PATH . "/app/controlers/posts.php");

if (isset($_GET['id']))
{
    $post = selectOne('posts', ['id' => $_GET['id']]);
}
$topics = selectAll('topics');
$posts = selectAll('posts', ['published' => 1]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $post['title']; ?> | IramWeb</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity=""  crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Candal|Lora">
</head>
<body>
    <!-- header  -->
    <?php include(ROOT_PATH . "/app/includes/header.php"); ?> 

    <!-- Page Wrapper  -->
    <div class="page-wrapper">


    </div>

    <!-- Content  -->
    <div class="content clearfix">

        <!-- main Content  -->
        <div class="main-content-wrapper">
            <!-- <img src="<?php// echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="Loading..." id="singleBlog">           -->
            <div class="main-content single">
                <h1 class="post-title"><?php echo $post['title']; ?></h1>
                <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="Loading..." id="singleBlog" class="slider-image">
                <div class="post-content">
                    <?php echo html_entity_decode($post['body']); ?>
                </div>
                <div class="post-content"><br>
                Created At : <i class="far fa-calendar"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
                </div>
            </div>
        </div>

        <!-- side bar  -->
        <div class="sidebar single">

            <div class="section popular">
                <h2 class="section-title">Popular</h2>

                <?php foreach ($posts as $p): ?>
                    <div class="post clearfix">
                        <img src="<?php echo BASE_URL . '/assets/images/' .$p['image']; ?>" alt="">
                        <a href="single.php?id=<?php echo $post['id']; ?>" class="title"><h4><?php echo $p['title']; ?></h4></a>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="section topics">
                <h2 class="section-title">Topics</h2>
                <ul>
                    <?php foreach ($topics as $topic): ?>
                        <li><a href="<?php echo BASE_URL . '/index.php?t_id' . $topic['id'] . '&name=' . $topic['name']; ?>"><?php echo $topic['name']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>
    </div>


    <!-- footer  -->
    <?php include(ROOT_PATH . "/app/includes/footer.php"); ?> 
    

    <!-- JQuery  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- slider  -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="assets/js/script.js"></script>


</body>
</html>