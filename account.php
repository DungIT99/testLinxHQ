<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</body>
</head>
<body>
    
<?php 
include("./connect.php");
$sql = mysqli_query($conn,"SELECT * FROM `account`");
if(isset($_POST["btn"])){
    $a = $_POST["search"];
    $sqli = mysqli_query($conn, " SELECT * FROM account WHERE firstName LIKE '%$a%' or email LIKE '%$a%'");

    if(mysqli_num_rows($sql)>0){
        $sql = $sqli;
    }else{
        $sql ="";
    }
}

?>
<div class="container">
 
  
  <form action="" method="POST" role="form">
  
      <div class="form-group">
          <label for="">search</label>
          <input type="text" class="form-control" id="" placeholder="Input field" name="search">
      </div>
  
      
  
      <button type="submit" class="btn btn-primary" name ="btn">Submit</button>
  </form>
  

    
       <div id="update">
<table class="table table-hover" id="my-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>surName</th>
            <th>email</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($sql as $a): ?>
        <tr>
            <td><?php echo $a["id"] ?></td>
            <td><?php echo $a["firstName"]?></td>
            <td><?php echo $a["lastName"]?></td>
            <td><?php echo $a["email"]?></td>
        </tr>
<?php endforeach; ?>
    </tbody>
</table>
</div> 

    
     
    </form>
    
</div>

</body>
</html>