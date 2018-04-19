var imageList=["assets/amethyst.jpg", "assets/rocky.jpg",
              "assets/roxie.jpg", "assets/sam.jpg", 
               "assets/snowtail.jpg", "assets/tarantella.jpg"]
function change(imageChange){
currentImageIndex=imageChange;
document.getElementById("rollover").src=imageList[imageChange];
}
var currentImageIndex=0;




