<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan App</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    .header {
        background-color: green;
        color: white;
        height: 90px;
    }
    ul{
        list-style-type: none;
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    li {
        /* background-color: red; */
        height: 90px;
        padding:35px 45px;
    }

    .card{
        width: 300px;
        height: 200px;;
        border: 2px solid black;
        display: flex;
        align-items: center;
        padding: 5px;
        margin-right: 50px;
        margin-left: 530px;
        margin-bottom: 10px;
        box-shadow: 5px 10px 18px #888888;
    }
    .container {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    a {
        text-decoration: none;
        color: white;
    }
    #button {
        border-radius: 5px;
        background-color: darkorange;
        border-color: orange;
        padding: 3px;
    }

    button {
        padding: 15px 20px;
        font-size:  15px;
        text-align: center;
        cursor: pointer;
        outline: none;
        color: #fff;
        background-color: #04AA6D;
        border: none;
        border-radius: 15px;
        box-shadow: 5px 10px 18px #888888;
    }

    button:hover {background-color: green}

    button:active {
        background-color: #3e8e41;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
    }
    
    fieldset {
        margin: 10px;
        padding: 5px;
    }
    input {
        margin: 10px;
        padding:5px;
    }
</style>
<body>
    <div class="header">
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </div>