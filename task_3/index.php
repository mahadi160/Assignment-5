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
    color: #fff;
    }
    .btn:link,
    .btn:visited,
    .btn {
    background: #333;
    border: .1rem solid #000;
    color: #fff;
    text-decoration: none;
    text-transform: uppercase;
    padding: 1.5rem 6rem;
    border-radius: .3rem;
    display: inline-block;
    margin-top: 4.5rem;
    font-size: 1.6rem;
}
.contact {
    background: linear-gradient( rgba(60, 84, 153, 0.9), rgba(60, 84, 153, 0.9)), url(img/contact-bg.jpg) no-repeat center center / cover;
    background-attachment: fixed;
    text-align: center;
    height: 100vh;
}
.contact form {
    margin-top: 5rem;
    width: 70%;
    margin-left: 15%;
    
}
.contact input[type="text"],
.contact input[type="email"],
.contact textarea {
    background: #273a71;
    width: 100%;
    border: .1rem solid #273a71;
    padding: 1.5rem;
    font-size: 1.8rem;
    border-radius: .5rem;
    color: #fff;
    margin: .5rem 0;
}

.contact form ::-webkit-input-placeholder {
    color: #fff;
    opacity: 1;
}
.contact form :-ms-input-placeholder {
    color: #fff;
    opacity: 1;
}
.contact form ::placeholder {
    color: #fff;
    opacity: 1;
}

.contact .btn-submit {
    background: #30bae7;
    border: 0;
    border-bottom: .3rem solid #299ec5;  
}
.contact .btn-submit:hover {
    cursor: pointer;
}
</style>
    <title>Task 3: Superglobal Variables in PHP</title>
</head>
<body>
<div class="contact" >
    <div class="row">
        <h1>Task 3: Superglobal Variables in PHP</h1>
    </div>
    <div class="row" >
        <form action="submit_form.php" method="post">
            <div class="row">
                <div class="col span_1_of_2">
                    <input type="text" id="name" name="Name" placeholder="Your Name *" required>
                </div>
                <div class="col span_1_of_2">
                    <input type="email" name="Email" placeholder="Your Email *" required>
                </div>
            </div>
            
            <div class="row">
                <input type="submit" value="SUBMIT FORM" class="btn btn-submit">
            </div>
        </form>
    </div>

</div>
</body>
</html>