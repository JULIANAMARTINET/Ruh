window.addEventListener("scroll", function(){
    let header = document.querySelector("#header-home");
    header.classList.toggle("down",window.scrollY>0);
})  

document.addEventListener( 'DOMContentLoaded', function () {
    new Splide( '#thumbnail-carousel', {
        //   fixedWidth : 200,
          gap        : 3,
          rewind     : true,
          pagination : false,
          perMove: 1,
          type   : 'loop',
          focus: 2 | 'center',
  perPage: 4,
  speed: 400,
  autoplay: true,
  interval: 3000
    } ).mount();
  } );

  setTimeout(function() {
      window.location.replace("index.html" )
  }, 5000);


