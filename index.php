<!DOCTYPE html>
<html>

<head>
    <title>PHP Manual</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <?php  $path = 'http://phpmanual.test/'   ?>

    <?php include_once 'inc/nav.php' ?>

    <div class="bg-dark full-height">
        <div class="container text-white ">
            <div class="row py-4">
                <div class="col-md-4">
                    <div class="card bg-info">
                        <div class="card-body">
                            <h3 class="card-title">Variables</h3>
                            <p>Varialbes hold data and that can be change. tha's why it's named as variable</p>
                            <p>Data Types</p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item bg-info p-1">Numbers — <code>const age = 23</code></li>
                                <li class="list-group-item bg-info p-1">Text (strings) — <code>let a = "init"</code></li>
                                <li class="list-group-item bg-info p-1">Operations — <code>const b = 1 + 2 + 3</code></li>
                                <li class="list-group-item bg-info p-1">True or false statements — <code>let c = true</code></li>
                                <li class="list-group-item bg-info p-1">Constant numbers — <code>const PI = 3.14</code></li>
                                <li class="list-group-item bg-info p-1">Objects — <code>var name = {firstName:"John", lastName:"Doe"}</code></li>

                            </ul>
                            <a href="varibles.php" class="btn btn-outline-warning mt-2">Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card bg-white">
                        <div class="card-body">
                            <h3 class="card-title text-dark">Operators</h3>

                            <ul class="list-group list-group-flush text-dark">
                                <li class="list-group-item bg-white p-1">Basic Operators — <code>+, -, *, /, (...), %, ++, --</code></li>
                                <li class="list-group-item bg-white p-1">Comparison Operators — <code>==, ===, !=, !==, >, <,>=, =<, ?</code>
                                </li>
                                <li class="list-group-item bg-white p-1">Logical Operators<code>&&, ||, !</code></li>
                                <li class="list-group-item bg-white p-1">Bitwise Operators — <code>&, !, ~, ^, <<< /code>
                                </li>


                            </ul>
                            <a href="varibles.php" class="btn btn-outline-warning mt-2">Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    sdfds
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>










<?php include_once 'inc/footer.php' ?>
