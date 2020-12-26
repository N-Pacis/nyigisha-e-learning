window.addEventListener('scroll',function(){
    let navbar = document.querySelector(".navbar");
    navbar.classList.toggle('nav-scroll',window.scrollY > 0);
});
    const container= document.getElementsByClassName(".bg-img");

    const tl = new TimelineMax({});

    tl.fromTo("body",.9,{width:"0%"},{width:"100%"});
    tl.fromTo(".navbar",0.4,{marginTop:"-90px"},{marginTop:"0px"});
    tl.fromTo(".p",1.2,{marginTop:"-55px"},{marginTop:"7px"});
    tl.fromTo("img",1.0,{marginLeft:"-170px"},{marginLeft:"10px"});