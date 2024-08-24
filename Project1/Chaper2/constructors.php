<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    require 'Comment.php';
//3. update the comment instantiaton in constructors.php to inclde a random userid
    $comment = new Comment('This is some comment text',10);
    
?>
<!-- //4.Remove the exho statement and create a paragraph  -->
<p><?php echo $comment->text;   ?> <br/>by user: <?php echo $comment->userId;   ?></p>

         
   
   
   <!-- //1. create a second attribute for $userId -- in constructor.php
   //2. add $userId to the comment constructor as a second parameter- in constructor.php
   
   
   // which print the text and the userId
   // 5. test work in the browser. -->
   
   





</body>
</html>