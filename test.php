<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Vladimir Bleskine - Projects</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/png" href="img/Photo.png"/>
</head>
<body>
    <div class="navbar">
        <a href="Portfolio.html">Portfolio</a>
        <a class="selected" href="#">Projects</a>
        <a href="AboutMe.html">About me</a>
    </div>
    <div id="f">
        <h1>JPO 2024</h1>
        <h2>3D modeling of the school for presentation animation</h2>
        <div class="flex" style="width: 100%; height: 450px; align-items: center;">
            <div class="flex-column center banner jpo">
                <a href="Jpo.html" class="btn-disco">DISCOVER</a>
                <h1 style="color: #fff; text-shadow: #565656 1px 1px 2px; z-index: 2;">2024</h1>
            </div>
        </div>
    </div>
    <div id="e" style="display: none;">
        <h1>Ghost Writer</h1>
        <h2>App</h2>
        <div class="flex" style="width: 100%; height: 450px; align-items: center;">
            <div class="flex-column center banner fresco">
                <a href="GhostWriter.html" class="btn-disco">DISCOVER</a>
                <h1 style="color: #fff; text-shadow: #565656 1px 1px 2px; z-index: 2;">2024</h1>
            </div>
        </div>
    </div>
    <div id="a" style="display: none;">
        <h1>Edison and the Frog</h1>
        <h2>Game Design </h2>
        <div class="flex" style="width: 100%; height: 450px; align-items: center;">
            <div class="flex-column center banner frog">
                <a href="Game.html" class="btn-disco">DISCOVER</a>
                <h1 style="color: #fff; text-shadow: #565656 1px 1px 2px; z-index: 2;">2023</h1>
            </div>
        </div>
    </div>
    <div id="b" style="display: none;">
        <h1>MOOV Workshop</h1>
        <h2>Web Design</h2>
        <div class="flex" style="width: 100%; height: 450px; align-items: center;">
            <div class="flex-column center banner moov">
                <a href="Moov.html" class="btn-disco">DISCOVER</a>
                <h1 style="color: #fff; text-shadow: #565656 1px 1px 2px; z-index: 2;">2023</h1>
            </div>
        </div>
    </div>
    <div id="c" style="display: none;">
        <h1>Trains</h1>
        <h2>Web Design</h2>
        <div class="flex" style="width: 100%; height: 450px; align-items: center;">
            <div class="flex-column center banner train">
                <a href="Trains.html" class="btn-disco">DISCOVER</a>
                <h1 style="color: #fff; text-shadow: #565656 1px 1px 2px; z-index: 2;">2023</h1>
            </div>
        </div>
    </div>
    <div id="d" style="display: none;">
        <h1>Sweat CDG</h1>
        <h2>Design Contest in High School</h2>
        <div class="flex" style="width: 100%; height: 450px; align-items: center;">
            <div class="flex-column center banner cdg">
                <a href="Sweat.html" class="btn-disco">DISCOVER</a>
                <h1 style="color: #fff; text-shadow: #565656 1px 1px 2px; z-index: 2;">2022</h1>
            </div>
        </div>
    </div>
    <form action="">
        <ul class="tapbar flex">
            <label for="fCheck"><img src="/img/render_ecole.png" alt="JPO 2024"></label>
            <li><input type="radio" id="fCheck" name="p" onchange="affiche_blocf()"></li>
            <label for="eCheck"><img src="/img/ghostwriter.jpg" alt="Ghost Writer"></label>
            <li><input type="radio" id="eCheck" name="p" onchange="affiche_bloce(eCheck)"></li>
            <label for="aCheck"><img src="/img/frog.png" alt="Edison and the Frog"></label>
            <li><input type="radio" id="aCheck" name="p" onchange="affiche_bloca(aCheck)"></li>
            <label for="bCheck"><img src="/img/moov.png" alt="Moov"></label>
            <li><input type="radio" id="bCheck" name="p" onchange="affiche_blocb(bCheck)"></li>
            <label for="cCheck"><img src="/img/image 3.png" alt="Trains"></label>
            <li><input type="radio" id="cCheck" name="p" onchange="affiche_blocc(cCheck)"></li>
            <label for="dCheck"><img src="/img/cdg.jpg" alt="Sweat CDG"></label>
            <li><input type="radio" id="dCheck" name="p" onchange="affiche_blocd(dCheck)"></li>
        </ul>
    </form>
    
    <script>
        function affiche_bloca() {
            document.getElementById("a").style.display = "block";
            document.getElementById("b").style.display = "none";
            document.getElementById("c").style.display = "none";
            document.getElementById("d").style.display = "none";
            document.getElementById("e").style.display = "none";
            document.getElementById("f").style.display = "none";
        }
        function affiche_blocb(bCheck) {
            document.getElementById("a").style.display = "none";
            document.getElementById("b").style.display = "block";
            document.getElementById("c").style.display = "none";
            document.getElementById("d").style.display = "none";
            document.getElementById("e").style.display = "none";
            document.getElementById("f").style.display = "none";
        }
        function affiche_blocc(cCheck) {
            document.getElementById("a").style.display = "none";
            document.getElementById("b").style.display = "none";
            document.getElementById("c").style.display = "block";
            document.getElementById("d").style.display = "none";
            document.getElementById("e").style.display = "none";
            document.getElementById("f").style.display = "none";
        }
        function affiche_blocd(dCheck) {
            document.getElementById("a").style.display = "none";
            document.getElementById("b").style.display = "none";
            document.getElementById("c").style.display = "none";
            document.getElementById("d").style.display = "block";
            document.getElementById("e").style.display = "none";
            document.getElementById("f").style.display = "none";
        }
        function affiche_bloce(eCheck) {
            document.getElementById("a").style.display = "none";
            document.getElementById("b").style.display = "none";
            document.getElementById("c").style.display = "none";
            document.getElementById("d").style.display = "none";
            document.getElementById("e").style.display = "block";
            document.getElementById("f").style.display = "none";
        }
        function affiche_blocf(fCheck) {
            document.getElementById("a").style.display = "none";
            document.getElementById("b").style.display = "none";
            document.getElementById("c").style.display = "none";
            document.getElementById("d").style.display = "none";
            document.getElementById("e").style.display = "none";
            document.getElementById("f").style.display = "block";
        }
    </script>
</body>
</html>