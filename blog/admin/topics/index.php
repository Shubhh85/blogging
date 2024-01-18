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
    <title>Admin Topics Index</title>

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
                <h2 class="page-title">Manage Topics</h2>

                <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

                <table>
                    <thead>
                        <th>SN</th>
                        <th>Name</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                        <?php foreach ($topics as $key => $topic): ?>
                            <tr>
                                <td><?php echo $key +1; ?></td>
                                <th><?php echo $topic['name']; ?></th>
                                <th><a href="edit.php?id=<?php echo $topic['id']; ?>" class="edit">Edit</a></th>
                                <th><a href="index.php?del_id=<?php echo $topic['id']; ?>" class="delete confirmation2">Delete</a></th>
                                <!-- <script type="text/javascript">
                                    var elems = document.getElementsByClassName('confirmation2');
                                    var confirmIt = function (e) {
                                        if (!confirm('Are you sure?')) e.preventDefault();
                                    };
                                    for (var i = 0, l = elems.length; i < l; i++) {
                                        elems[i].addEventListener('click', confirmIt, false);
                                    }
                                </script> -->
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- JQuery  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="../../assets/js/script.js"></script>

</body>

</html>