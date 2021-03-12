let imageClose = document.getElementById("close-btn");

var loadImage =function(event){
    var image2= document.getElementsByName('outputimage');
    image2.src=URL.createObjectURL(event.target.files[0]);
}

function picFunction(imgs) {
    
    var expandImg = document.getElementById("imgExpand");
   
    
    expandImg.src = imgs.src;
    
    expandImg.parentElement.style.display = "block";
  }

  imageClose.addEventListener('click',function(ev){
    this.parentElement.style.display='none';
  });