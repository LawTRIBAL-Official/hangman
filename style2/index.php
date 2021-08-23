<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/bb5aae4646.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../reset.css"> 
    <link rel="stylesheet" href="index.css"> 
    <link rel="stylesheet" href="style2.css">
    <title>HangMan</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 class="title">
                Hangman
            </h1>
            <h2 class="lower-title">
                Time to hang your friends
            </h2>
        </div>
        <div class="components">
            <div class="parent">
                <div class="left-div side">
                    <div class="info">
                        <div class="circle">
                            <h1 class="lifes" id="mylives">10</h1>
                        </div>
                        <div class="info-extra">
                        <div class="cate">
                            <p id="catagoryName"></p>
                        </div>
                        <div class="hint">
                            <p id="clue">Clue - </p>
                        </div>
                        <div class="buttons">
                            <button onClick="play()" class="hint btn2" id="hint">HINT</button>
                            <button onClick="reset()" class="reset btn2" id="reset">RESET</button>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="right-div side">
                    <div class="letters" id="buttons">
                        
                    </div>
                    <div class="letter-word">
                        <!-- JS script inserts spans with letters -->
                    </div>
                    <div class="man-box">
                        <div class="man">
                            <canvas id="stickman">This Text will show if the Browser does NOT support HTML5 Canvas 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <p class="foot-text">
                Small student project - Alexander W. Pedersen <span class="footer-span"><i class="fab fa-github"></i></span>
            </p>
        </div>
    </div>
    <script src="./js/app.js"></script> 
</body>
</html>