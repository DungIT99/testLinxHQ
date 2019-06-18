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
$errors=[];
if(isset($_POST["submit"])){
  $firstName = isset($_POST["firstName"])?$_POST["firstName"]:"";
  $lastName =isset($_POST["lastName"])?$_POST["lastName"]:"";
    $email = isset($_POST["email"])?$_POST["email"]:"";
    if($firstName == ""){
        $errors["firstName"] =" not null";
    }
    if($lastName == ""){
        $errors["lastName"] =" not null";
    }
    if($email == ""){
        $errors["email"] =" not null or unique";
    }

if(count($errors)==0){
        $member = "INSERT INTO `account` (`firstName`, `lastName`, `email`) VALUES ( '$firstName', '$lastName', '$email')";
        $query = mysqli_query($conn,$member);
  if($query){
    echo '<script language="javascript">';
echo 'alert("register successfully ")';
echo '</script>';
  }
}
}
?>
<div class="container">
    
    <form action="" method="POST" role="form">
        <legend>Members</legend>
        <?php if(count($errors)>0): foreach($errors as $key => $value):?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong><?php echo $key ?></strong> <?php echo $value ?>
        </div>
        <?php  endforeach  ;?>
        <?php endif ;?>

        
    
        <div class="form-group">
            <label for="">firstName</label>
            <input type="text" class="form-control" id="" placeholder="Input field" name ="firstName">
        </div>
        <div class="form-group">
            <label for="">lastName</label>
            <input type="text" class="form-control" id="" placeholder="Input field" name="lastName">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" id="" placeholder="Input field" name="email">
        </div>
    
        
    
        <button type="submit" class="btn btn-primary" name ="submit">Submit</button>
        
        <button type="button" class="btn btn-default"><a href="./account.php">go to account</a></button>
        
    </form>
    
</div>

</body>
</html>