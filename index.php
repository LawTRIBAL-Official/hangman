<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/bb5aae4646.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../reset.css"> 
    <link rel="stylesheet" href="index.css"> 
    <title>HangMan</title>
</head>
<body>
    <script src="./js/app.js"></script> 
    <div class="container">
        <div class="header">
            <h1>Hangman</h1>
            <h2>Come and hang your friends</h2>
        </div>
    </div>
    <div class="wrapper">
        <div class="flex-parent">
            <div class="col1">
            <p id="catagoryName"></p>
            <div id="hold"></div>
            <p id="mylives"></p>
            <p id="clue">Clue: </p>
            </div>  
            <div class=col2>
                <div id="buttons"></div>
                <canvas id="stickman"></canvas>
            </div>
        </div>
        <div class="container">
            <button id="hint">Hint</button>
            <button id="reset">Retry</button>
        </div>
    </div>
</body>
</html>