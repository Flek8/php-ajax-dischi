<?php

    include __DIR__ . '/database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container">
        <?php

            foreach ($database as $data) {
                echo '<div class="card">';
                    echo '<img src=' . $data['poster'] . '>';
                    echo "<h2>" . $data['title'] . "</h2>";
                    echo "<h4>" . $data['author'] . "</h4>";
                    echo "<h5>" . $data['year'] . "</h5>";
                echo '</div>';
            }

        ?>

    </div>

</body>
</html>

    