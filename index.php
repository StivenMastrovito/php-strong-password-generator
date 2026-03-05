<?php
include './functions.php';

session_start();
$_SESSION["password"] = [];


if(isset($_GET['length_password']) && is_numeric($_GET['length_password']) && $_GET['length_password'] >= 6 && $_GET['length_password'] <= 20){
    if(isset($_GET["mixed"]) && $_GET["mixed"] === "on"){
       generatePassword($_GET['length_password'], true);
    }else{
       generatePassword($_GET['length_password'], false);        
    }
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <h1>HOME</h1>
        <hr>

        <form>
            <div class="mb-3">
                <label for="length_password" class="form-label">Lunghezza password</label>
                <input min="6" max="19" name="length_password" type="number" class="form-control" id="length_password" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="mixed" class="form-label">Vuoi unire numeri e caratteri</label>
                <input type="checkbox" name="mixed" id="mixed" class="form-check">
            </div>
            <button type="submit" class="btn btn-primary">Genera</button>
        </form>
    </div>
    


</body>
</html>