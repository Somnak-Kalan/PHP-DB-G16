<?php
// require_once('../templates/header.php');

?>
<?php
require_once('../templates/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:#728FCE">
    

<div class="container-fluid mt-5" >

    <div  class="register w-50 m-auto bg-light shadow-sm  bg-body rounded">

        <h1 class="text-center">Register</h1>
        <form action="register.php" method="post" autocomplete="off">
            <div class="form-group m-2 d-flex">
                <label class="bg-primary rounded" for="username">
                    <i class="fas fa-user text-white m-2"></i>
                </label>
                <input type="text" name="username" class="form-control" placeholder="Username" id="username" required>
    
            </div>
            <div class="form-group m-2 d-flex">
                <label class="bg-primary rounded" for="password">
                    <i class="fas fa-lock  text-white   m-2"></i>
                </label>
                <input type="password" name="password" class="form-control" placeholder="Password" id="password" required>
    
            </div>
            <div class="form-group m-2 d-flex">
                <label class="bg-primary rounded" for="email">
                    <i class="fas fa-envelope  text-white    m-2"></i>
                </label>
                <input type="email" name="email" class="form-control" placeholder="Email" id="email" required>
                
            </div>
            <div class="text-center bg-primary p-2">
                <input type="submit" class="form-control bordered-0 bg-primary text-white fs-5 fw-bold" value="Register">
    
            </div>
        </form>
    </div>
</div>

</body >
</html>