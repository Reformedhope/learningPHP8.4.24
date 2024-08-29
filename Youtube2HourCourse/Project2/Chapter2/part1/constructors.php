<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Learning</title>
</head>
<body>
<?php
require 'Comment.php';

$comment = new Comment('This is some comment text', 10,200);



?>
<p><?php echo $comment->text;   ?> 
<br/>by user: <?php echo $comment->userId;?>
</br>Number of Likes:<?php
echo  $comment->likes?></p>

</body>
</html>


