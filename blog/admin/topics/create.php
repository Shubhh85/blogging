<?php include("../../path.php") ?>
<?php include(ROOT_PATH . "/app/controlers/topics.php");
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Add Topic</title>

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
                <a href="create.php" class="btn btn-big">Add Topic</a>
                <a href="index.php" class="btn btn-big">Manage Topics</a>
            </div>

            <div class="content">
                <h2 class="page-title">Add New Topic</h2>

                <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?> 

                <form action="create.php" method="post">
                    <div>
                        <label>Name</label>
                        <input type="text" value="<?php echo $name; ?>" name="name" class="text-input">
                    </div>

                    <div>
                        <label>Description</label>
                        <textarea name="description" id="body"><?php echo $description; ?></textarea>
                    </div>

                    <div>
                        <button type="submit" name="add-topic" class="btn btn-big">Add Topic</button>
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