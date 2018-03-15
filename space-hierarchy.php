<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="../huqstuff/assets/not-active-home.png" type="image/png" sizes="16x16">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>The Space Hierarchy</title>
</head>
<body>
<?php 
        $title="The Space Hierarchy"; 
        include 'header.php';
?>
    <main>
          <div class="slideshow3">
            <img id="space-main-pic" src="assets/brothers.jpg" alt="My characters" title="Pictures">

            <ul class="image-selection-option3">
                <li>
                    <button onclick="changeToBrothers()">
                        <img src="assets/brothers.jpg" alt="Titan killing brother" title="Brother vs. brother">   
                    </button>
                </li>
                <li>
                    <button onclick="changeToComet()">
                        <img src="assets/comet.jpg" alt="Comet squirrel" title="Comet squirrel referance">
                    </button>                   
                </li>
                <li>
                   <button onclick="changeToDeath()">
                        <img src="assets/death.jpg" alt="Luna killing" title="Death">                           
                   </button>
                </li>
                <li>
                   <button onclick="changeTDwarfPlanet()">
                       <img src="assets/dwarf-planet.jpg" alt="Dwarf planet cat" title="Dwarf planet cat referance">
                   </button>
                </li>
                <li>
                   <button onclick="changeToEuropa()">
                       <img src="assets/europa.jpg" alt="Europa the moon cat" title="Europa">                 
                   </button>
                </li>
                <li>
                <button onclick=" changeToJovianPlanet()">
                    <img src="assets/jovian-planet.jpg" alt="Jovian planet tiger" title="Jovian planet tiger referance">  
                </button>
                </li>
                <li>
                <button onclick="changeToKale()">
                    <img src="assets/kale.jpg" alt="Kale the moon cat" title="Kale">   
                </button>
                </li>
                <li>
                   <button onclick="changeToMercury()">
                        <img src="assets/mercury.jpg" alt="Mercury the planet cat" title="Mercury">                       
                   </button>
                 </li>
                <li>        
                   <button onclick="changeToPolaris()">
                       <img src="assets/polaris.jpg" alt="Polaris the sun cat" title="Polaris">                          
                   </button>
                </li>
                <li>
                    <button onclick="changeToSun()">
                        <img src="assets/sun.jpg" alt="Sun bear" title="Sun bear referance">    
                    </button>
                </li>

            </ul>
        </div>
    </main>
        <?php include 'footer.php';?>
</body>
    <script src="javascript.js"></script>
</html>