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
                            <h1 class="lifes">10</h1>
                        </div>
                        <div class="info-extra">
                        <div class="cate">
                            <p>Chosen Category <span id="category">Europe history</span></p>
                        </div>
                        <div class="hint">
                            <p>Clue <span id="clue">Denmark</span></p>
                        </div>
                        <div class="buttons">
                            <button class="hint btn2">HINT</button>
                            <button class="reset btn2">RESET</button>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="right-div side">
                    <div class="letters">
                        <button class="a btn">A</button>
                        <button class="b btn">B</button>
                        <button class="c btn">C</button>
                        <button class="d btn">D</button>
                        <button class="e btn">E</button>
                        <button class="f btn">F</button>
                        <button class="g btn">G</button>
                        <button class="h btn">H</button>
                        <button class="i btn">I</button>
                        <button class="j btn">J</button>
                        <button class="k btn">K</button>
                        <button class="l btn">L</button>
                        <button class="m btn">M</button>
                        <button class="n btn">N</button>
                        <button class="o btn">O</button>
                        <button class="p btn">P</button>
                        <button class="q btn">Q</button>
                        <button class="r btn">R</button>
                        <button class="s btn">S</button>
                        <button class="t btn">T</button>
                        <button class="u btn">U</button>
                        <button class="v btn">V</button>
                        <button class="w btn">W</button>
                        <button class="x btn">X</button>
                        <button class="y btn">Y</button>
                        <button class="z btn">Z</button>
                    </div>
                    <div class="letter-word">
                        <!-- JS script inserts spans with letters -->
                    </div>
                    <div class="man-box">
                        <div class="man">
                            <!--Figure out a way to draw with JS-->
                            <p>MAN</p>
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
</body>
</html>