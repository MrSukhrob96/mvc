<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/app.css">
    <title>Document</title>
</head>

<body>
    <div id="app">
        <?php
        require_once __DIR__ . "/../inc/header.php";
        ?>
        <section class="menu">
            <div class="container-fluid">
                <div class="row menu_left_panel" style="overflow-y: scroll;">
                    <?php echo $content; ?>
                </div>
            </div>
        </section>
    </div>
    <script src="./js/vue.min.js"></script>
    <script src="./js/app.js"></script>
</body>

</html>