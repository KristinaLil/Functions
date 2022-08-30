<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Triangle area</h1>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="triangle_area.php">Triangle area</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ads.php?orderBy=id&d=DESC">Ads</a>
            </li>
        </ul>
        <form action="" method="POST">
            <div>
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Border A</label>
                            <input type="number" class="form-control" name="a">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Border B</label>
                            <input type="number" class="form-control" name="b">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Border C</label>
                            <input type="number" class="form-control" name="c">
                        </div>
                        <button type="submit" class="btn btn-primary">Count</button>
                        <?php

                        function triangleArea($a, $b, $c) {
                            $p = ($a + $b + $c) / 2;
                            return sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
                        }

                        if (isset($_POST['a']) && $_POST['a'] != '') {
                            $a = $_POST['a'];
                            $b = $_POST['b'];
                            $c = $_POST['c'];
                            
                            if (($a + $b > $c) &&
                                ($a + $b > $c) &&
                                ($a + $b > $c)
                            ) {
                                echo triangleArea($a, $b, $c);
                            } else {
                                echo "No triangle here!";
                            }
                        }

                        ?>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>