<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="../huqstuff/assets/not-active-home.png" type="image/png" sizes="16x16">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>A Way to Understand</title>
</head>
<body>
<?php 
        $title="A Way to Understand"; 
        include 'header.php';
?>
    <main>
          <div class="slideshow2">
            <img id="understand-main-pic" src="assets/jacob.jpg" alt="My characters" title="Pictures">

            <ul class="image-selection-option2">

                <li>
                <button onclick="changeToJacob()">
                    <img src="assets/jacob.jpg" alt="Jacob waving" title="Jacob">                    
                </button>
                </li>
                <li>
                <button onclick="changeToKayla()">
                    <img src="assets/kayla.jpg" alt="Kayla waving" title="Kayla">
                </button>
                </li>
                <li>
                <button onclick="changeToPeter()">
                    <img src="assets/peter.jpg" alt="Peter winking" title="Peter">  
                </button>
                </li>
                <li>
                <button onclick="changeToKittipong()">
                    <img src="assets/kittipong.jpg" alt="Kittipong standing" title="Kittipong">  
                </button>
                </li>
                <li>
                <button onclick="changeToJacobKayla()">
                    <img src="assets/jacob-kayla.jpg" alt="Both Jacob and Kayla waving" title="Kayla and Jacob">                    
                </button>
                </li>
                <li>
                <button onclick="changeToJoke()">
                    <img src="assets/joke.jpg" alt="Kayla walking her cat, (yes that's possible)" title="Seeing eye cat">                    
                </button>
                </li>
                <li>
                <button onclick="changeToKitty()">
                    <img src="assets/kitty-g.jpg" alt="Kitty G. the cat" title="Kitty G.">
                </button>
                </li>
                <li>
                <button onclick="changeToMeilin()">
                    <img src="assets/meilin.jpg" alt="Meilin the turtle" title="Meilin">   
                </button>
                </li>
                <li>
                <button onclick="changeToMango()">
                <img src="assets/mango.jpg" alt="Mango the lovebird" title="Mango">
                </button>
                </li>
                <li>
                <button onclick="changeToNutmeg()">
                    <img src="assets/nutmeg.jpg" alt="Nutmeg the Shibu inu" title="Nutmeg">                    
                </button>
                </li>
            </ul>
        </div>
    </main>
        <?php include 'footer.php';?> 
</body>
    <script src="javascript.js"></script>
</html>