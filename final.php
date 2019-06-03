<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo App</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
</head>

<body style="background-image:url(images/color.jpg);">

<!--styling-->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#" >Organise your Life </a>
  <div class="collapse navbar-collapse" id="navbarNav">
    
  </div>
</nav>
    

<div id="center">
<h1 style="margin-top: 15%;">To Do App</h1>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
<div id="nav">
<nav>
  <form class="form-inline">
    <input name="todoEntry" type="text"  aria-label="Search" required='required' autofocus >
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="color: black;">Add</button>
  </form>
</nav>
</div>
<!--styling ending-->

<?php
// making the list and adding it into an empty array.

if(isset($_POST['todoEntry'])){
    header('location:http://codespace/TodoApp/final.php');
    if(!(isset($_SESSION['listItems']))){
        $_SESSION['listItems'] = array();
        $_SESSION['listItems'][]=$_POST['todoEntry'];
        var_dump($_SESSION['listItems']);
    }else{$_SESSION['listItems'][] = $_POST['todoEntry'];
        
    }
}
// list accumalation.

echo "<ul style='list-style: none;'>";
       foreach ($_SESSION['listItems'] as $items){
       echo "<div class='B'>"."<li id='task'>" .$items. "<br>"."</div>";}
        "</ul>"

?>
<script>

$(document).ready(function(){

    var lineState = 0;

      $('li').each(function(i){

          $(this).click(function(){
                        sessionKey = i;
//Alows you to stike through and unstrike the task on the list.

        if(lineState == 0){
              $(this).css("text-decoration", "line-through");
              lineState = 1;
              sessionStorage.setItem(sessionKey,lineState);

          } else {
              $(this).css("text-decoration", "none");
              lineState= 0;
              sessionStorage.setItem(sessionKey,lineState);
                 }
        });

      });
//Function created to store which tasks were striked and then remembers which ones were striked before the browser was closed.

      $('li').each(function(i){
        if( sessionStorage.getItem(i)==1){
          $(this).css("text-decoration", "line-through");
        }
      });
      
});

</script>
</div>
    
</body>

</html>
