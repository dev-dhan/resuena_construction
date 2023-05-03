/**Gallery */

let body = document.querySelector("body"),
      lightBox = document.querySelector(".lightBox"),
      img = document.querySelectorAll(".gImg"),
      showImg = lightBox.querySelector(".showImg img"),
      close = lightBox .querySelector(".close");

     for (let image of img) {
       image.addEventListener("click", ()=>{
         showImg.src = image.src;
         lightBox.style.display = "block";
         body.style.overflow = "hidden";
         close.onclick = ()=>{
           lightBox.style.display = "none";
           body.style.overflow = "visible";
         };
       });
     }
    


     /**Go Up Button */
    $(document).ready(function(){

    $(window).scroll(function(){
      if($(this).scrollTop() > 40){
        $('#topBtn').fadeIn();
      } else{
        $('#topBtn').fadeOut();
      }
    });
  
    $("#topBtn").click(function(){
      $('html ,body').animate({scrollTop : 0},800);
    });
  });
    