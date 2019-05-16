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
  var itemDone = 0;
  $("li").click(function(){
    if(itemDone == 0){
    $(this).css("text-decoration","line-through");
    itemDone = 1;
    console.log (itemDone);
    }else{ (itemDone == 1)
       $(this).css("text-decoration","none");
    itemDone = 0;
    console.log (itemDone);
      };
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