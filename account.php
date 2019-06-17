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
</head>
<body>
    
<?php 
include("./connect.php");
$sql = mysqli_query($conn,"SELECT * FROM members");
if(isset($_POST["search"])){
    $search = $_POST["search"];
    $query = mysqli_query($conn, "SELECT * FROM members WHERE email =='%$search%' or firstName =='%$search%'");
if($query){
    $sql = $query;
}else{
    $sql="";
}
}

?>
<div class="container">
    
   <input type="text" name="search" >
   
   <button type="submit" class="btn btn-sm btn-default">search</button>
   
    
        
<table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>surName</th>
            <th>email</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($sql as $a): ?>
        <tr>
            <td><?php echo $a["id"] ?></td>
            <td><?php $a["fisrtName"]?></td>
            <td><?php $a["lastName"]?></td>
            <td><?php $a["email"]?></td>
        </tr>
<?php endforeach; ?>
    </tbody>
</table>

    
     
    </form>
    
</div>

</body>
</html>