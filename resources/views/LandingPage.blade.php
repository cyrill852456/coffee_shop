<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .title{
            text-align:center;
        }
        .links a{
     
            text-decoration:none;
            font-size:25px;
            
        }
        .links{
            text-align:center;
        }
    </style>
</head>
<body>
    <div class="title">
    <h1>WELCOME TO CHELEM CAFE</h1>
    </div>
 
    <div class="links">
        <a href="{{ route('login') }}"> Login </a>
        <a href="{{ route('register') }}"> Register </a>
    </div>
</body>
</html>