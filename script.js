window.addEventListener("scroll", function(){
    let header = document.querySelector("#header-home");
    header.classList.toggle("down",window.scrollY>0);
})  
