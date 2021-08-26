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
    <div class="container">
        <div class="header">
            <h1>Hangman</h1>
            <h2>Come and hang your friends</h2>
        </div>
    </div>
    <div class="wrapper">
        <div id="buttons"></div>  
        <p id="catagoryName"></p>
        <div id="hold"></div>
        <p id="mylives"></p>
        <p id="clue">Clue -</p>  
        <canvas id="stickman"></canvas>
        <div class="container">
            <button id="hint">Hint</button>
            <button id="reset">Play again</button>
        </div>
    </div>
    <script src="./js/app.js"></script> 
</body>
</html>