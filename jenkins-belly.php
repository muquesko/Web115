<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="../huqstuff/assets/not-active-home.png" type="image/png" sizes="16x16">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Mr. Jenkins' belly</title>
</head>
<body>
<?php 
        $title="Mr. Jenkins' belly"; 
        include 'header.php';
?>
        <main>
          <div class="slideshow1">
            <img id="jenkins-main-pic" src="assets/amethyst.jpg" alt="My characters" title="Pictures">

            <ul class="image-selection-option1">

                <li>
                    <button onclick="changeToAmethyst"()>
                        <img src="assets/amethyst.jpg" alt="Amethyst the purple fox" title="Amethyst">
                    </button>
                </li>
                <li>
                   <button onclick="changeToRocky()">
                       <img src="assets/rocky.jpg" alt="Rocky the cat" title="Rocky">
                   </button> 
                </li>
                <li>
                   <button onclick="changeToRoxie()">
                        <img src="assets/roxie.jpg" alt="Roxie the coyote" title="Roxie">
                   </button>
                </li>
                <li>
                    <button onclick="changeToSam()">
                        <img src="assets/sam.jpg" alt="Sam the eagle toucan" title="Sam">
                    </button>
                </li>
                <li>
                    <button onclick="changeToSnowtail()">
                        <img src="assets/snowtail.jpg" alt="Snowtail the snow leopard" title="Snowtail">
                    </button>  
                </li>
                <li>
                   <button onclick="changeToTerry()">
                       <img src="assets/tarantella.jpg" alt="Terry the cat" title="Terry">
                   </button>
                </li>
                <li>
                   <button onclick="changeToJackie()">
                       <img src="assets/jackie.jpg" alt="Jackie the jackal" title="Jackie">
                   </button>
                </li>
                <li>
                   <button onclick="changeToKaizer()">
                        <img src="assets/kaizer.jpg" alt="Kaizer the cat" title="Kaizer">                       
                   </button>
                </li>
                <li>
                   <button onclick="changeToNick()">
                       <img src="assets/nick.jpg" alt="Nick the fox" title="Nick">
                   </button>
                </li>
                <li>    
                    <button onclick="changeToMari()">
                        <img src="assets/mari.jpg" alt="Mari the panda" title="Mari"> 
                    </button>
                </li>

            </ul>
        </div>
    </main>
        <?php include 'footer.php';?>
</body>
    <script src="javascript.js"></script>
</html>