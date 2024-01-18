<?php include("../../path.php") ?>
<?php include(ROOT_PATH . "/app/controlers/posts.php");
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Add Posts</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity=""
        crossorigin="anonymous">

    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/admin.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Candal|Lora">
</head>

<body>
    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

    <!-- Admin Page Slider  -->
    <div class="admin-wrapper">

        <!-- left sidebar  -->
        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>

        <!-- Admin Content  -->
        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add Post</a>
                <a href="index.php" class="btn btn-big">Manage Post</a>
            </div>

            <div class="content">
                <h2 class="page-title">Add New Posts</h2>

                <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

                <form action="create.php" method="post" enctype="multipart/form-data">
                    <div>
                        <label>Title</label>
                        <input type="text" value="<?php echo $title ?>" name="title" class="text-input">
                    </div>

                    <div>
                        <label>Body</label>
                        <textarea name="body" value="<?php echo $body ?>" id="body"></textarea>
                    </div>

                    <div>
                        <label>Image</label>
                        <input type="file" name="image" class="text-input">
                    </div>

                    <div>
                        <label>Topic</label>
                        <select name="topic_id" class="text-input">
                            <!-- <option value=""></option> -->
                            <?php foreach ($topics as $key => $topic): ?>

                                <?php if (!empty($topic_id) && $topic_id == $topic['id'] ): ?>
                                    <option selected value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>
                                <?php else: ?>
                                    <option value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>

                        </select>
                    </div>
                                    
                    <div>
                        <?php if (empty($published)): ?>
                            <label>
                                <input type="checkbox" name="published">
                                Publish
                            </label>
                        <?php else: ?>
                            <label>
                                <input type="checkbox" name="published" checked>
                                Publish
                            </label>
                        <?php endif; ?>

                    </div>
                    <div>
                        <button type="submit" name="add-post" class="btn btn-big">Add Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- JQuery  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Ckeditor  -->

    <script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>

    <script src="../../assets/js/script.js"></script>

</body>

</html>