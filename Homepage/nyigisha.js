window.addEventListener('scroll',function(){
    let navbar = document.querySelector(".navbar");
    navbar.classList.toggle('nav-scroll',window.scrollY > 0);
});
    const container= document.getElementsByClassName(".bg-img");
    //@ts-ignore
    const tl = new TimelineMax({});

    tl.fromTo(".bg-img",.9,{scale:"0.90"},{scale:"1"});
    tl.fromTo(".navbar",0.9,{opacity:"0"},{opacity:"1"});
    tl.fromTo(".p",2.0,{opacity:"0.5"},{opacity:"1"});
    tl.fromTo("img",0.2,{opacity:"0.6"},{opacity:"1"});