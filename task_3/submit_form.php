<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600;700&display=swap" rel="stylesheet">
<style>
    * {
    margin: 0;
    padding: 0;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    }
    body {
    font-family: 'Titillium Web', sans-serif;
    text-rendering: optimizeLegibility;
    line-height: 1.3;
    font-size: 1.6rem;
    }
    h1 {
    font-size: 4.2rem;
    color: #303030;
    text-align: center;
    }

.contact {
    background-color: #f7f7f7;
    background-attachment: fixed;
    height: 100vh;
    
}
.row{
    width:70% ;
    margin: auto;
    font-color:#fff;
    
}

</style>
    <title>Task 3: Superglobal Variables in PHP</title>
</head>
<body>
<div class="contact">
    <h1>Task 3: Superglobal Variables in PHP</h1> 
    
    <div class="row">
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['Name'];
        $email = $_POST['Email'];
        
    }else {
        echo "<p>Error: invalid form submission method.</p>";
    }
    if(!empty($_REQUEST)){
        echo "<ul>";
        foreach($_REQUEST as $key => $value){
            echo "<li>$key: $value</li>";
        }
        echo "</ul>";
     }
    ?>
    
    </div>

</div>
</body>
</html>