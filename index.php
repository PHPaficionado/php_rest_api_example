<?php
include_once 'config/Database.php';
include_once 'models/Post.php';

// Instantiate DB & connect
$database = new Database();
$db = $database->connect();

// Instantiate blog post object
$post = new Post($db);

// Blog post query
$result = $post->read();

// Get row count
$num = $result->rowCount();

$search = "%five%";
die($ser = $post->search($search));


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
     integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>PDO EXAMPLE</title>
</head>
<body>
    <div class="container mt-4">
    <?php
    // Check if any posts
            // if ($num > 0 ) {
            
            //     // while($row = $result->fetch(PDO::FETCH_ASSOC)){

            //     // echo '<h3>'. $row['title'] . '</h3><br>';
            //     // echo '<p>' . $row['body'] . '</p><br>';
            //     // }

            //     while($row = $result->fetch()){

            //         // echo '<h3>'. $row['title'] . '</h3><br>';
            //         // echo '<p>' . $row['body'] . '</p><br>';

            //         echo '<h3>'. $row->title . '</h3><br>';
            //         echo '<p>' . $row->body . '</p><br>';

            //         }

            // } else {
            //     // No Posts
            //     echo "No posts found";
            // }
             // Blog post query
            
        ?>
    </div>
</body>
</html>