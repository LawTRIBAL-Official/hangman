<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/bb5aae4646.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/reset.css"> 
    <link rel="stylesheet" href="./css/index.css"> 
    <title>HangMan</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 class="title">
                Hangman
            </h1>
            <h2 class="lower-title">
                Tiem to hang your friends
            </h2>
        </div>
        <div class="components">
            <div class="category">
                <h4 class="chosen-category">
                    The chosen category is
                </h4>
                <h4 class="cat-cho">
                    <span class="selected-cat">Europe History</span>
                </h4>
            </div>
            <div class="letters">
                    <p>P</p>
            </div>
            <div class="word">
                <p>_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _</p>
            </div>
            <div class="lifes">
                <p class="life">Lifes left: <span class="life-count">10</span></p>
            </div>
            <div class="clues">
                <p class="clue">Clue: <span class="clue-give">Denmark</span></p>
            </div>
            <div class="buttons">
                <button id="hint" class="hint btn">HINT</button>
                <button id="replay" class="replay btn">REPLAY</button>
            </div>
        </div>
        <div class="footer">
            <p class="foot-text">
                Small student project - Alexander W. Pedersen <span class="footer-span"><i class="fab fa-github"></i></span>
            </p>
        </div>
    </div>
</body>
</html>