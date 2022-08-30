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
    <h1>Ads</h1>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="triangle_area.php">Triangle area</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ads.php?orderBy=id&d=DESC">Ads</a>
            </li>
        </ul>
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-3 mb-3 text-center">
                    <div class="card-header">Ads List</div>
                    <div class="card-body">

                        <?php include "data.php"; ?>
                        <?php $d = $_GET['d']; ?>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>

                                        <?php if ($d == "ASC") { ?>
                                            <a href="ads.php?orderBy=id&d=DESC">ID &uparrow;</a>
                                        <?php } else { ?>
                                            <a href="ads.php?orderBy=id&d=ASC">ID &downarrow;</a>
                                        <?php } ?>

                                    </th>
                                    <th>

                                        <?php if ($d == "ASC") { ?>
                                            <a href="ads.php?orderBy=text&d=DESC"> INFO &uparrow;</a>
                                        <?php } else { ?>
                                            <a href="ads.php?orderBy=text&d=ASC"> INFO &downarrow;</a>
                                        <?php } ?>

                                    </th>
                                    <th>

                                        <?php if ($d == "ASC") { ?>
                                            <a href="ads.php?orderBy=cost&d=DESC">Cost (EUR) &uparrow; </a>
                                        <?php } else { ?>
                                            <a href="ads.php?orderBy=cost&d=ASC">Cost (EUR) &downarrow; </a>
                                        <?php } ?>

                                    </th>
                                    <th>

                                        <?php if ($d == "ASC") { ?>
                                            <a href="ads.php?orderBy=onPay&d=DESC">Time &uparrow; </a>
                                        <?php } else { ?>
                                            <a href="ads.php?orderBy=onPay&d=ASC">Time &downarrow; </a>
                                        <?php } ?>
                                    </th>

                                    <?php

                                    $d = $_GET['d'];
                                    $order = $_GET['orderBy'];

                                    usort($skelbimai, function ($a, $b) use ($order) {
                                        global $d;
                                        if ($d == 'DESC') {
                                            return $b[$order] <=> $a[$order];
                                        } else if ($d == 'ASC') {
                                            return $a[$order] <=> $b[$order];
                                        }
                                    });

                                    ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($skelbimai as $ad) { ?>
                                    <tr>
                                        <td><?= $ad['id'] ?></td>
                                        <td><?= $ad['text'] ?></td>
                                        <td><?= $ad['cost'] ?></td>
                                        <td>
                                            <?php

                                            if ($ad['onPay'] > 0) {
                                                echo date("Y m d, H:i", $ad['onPay']);
                                            } else {
                                                echo "Not paid";
                                            }

                                            ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>