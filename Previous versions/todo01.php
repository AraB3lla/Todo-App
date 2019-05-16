<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">

<input type="text" name="toDoEntry" id="toDoEntry">
<input type="submit" value="add">
</form>

<script>
$(document).ready(function(){
  $("li").click(function(){
    $(this).css("text-decoration","line-through");
  });
});
</script>

<?php
if($_POST){
    echo "<ul><li>".$_POST['toDoEntry']."</li></ul>";
}
?>
    
</body>

</html>