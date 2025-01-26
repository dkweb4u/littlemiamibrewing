let menubar = document.querySelector('header nav .menu-icon');
let menulist = document.querySelector('header nav .menu-container ul');


menubar.addEventListener('click',()=>{
    menulist.classList.toggle('active');
    menubar.classList.toggle('active');
    if(menubar.classList.contains('active')){
        menulist.style.maxHeight = (window.innerHeight - menulist.offsetTop) + "px";
    }
    else{
        menulist.style.maxHeight ="0px";
    }
});

window.addEventListener('scroll',()=>{
   if(window.pageYOffset > 100){
    document.querySelector('header').classList.add('animate-header');
   }
   else{
    document.querySelector('header').classList.remove('animate-header');
   }
});
// childmenu functions
function submenufunction(){
    let childlinks = document.querySelectorAll('header nav .menu-container ul li.menu-item-has-children');
    childlinks.forEach(clink => {
        clink.addEventListener('click',(e)=>{
            clink.querySelectorAll("ul.sub-menu")[0].classList.toggle('enable');
            clink.classList.toggle('rotate-icon');
            e.stopPropagation();
        });
    });
}
submenufunction();

// video Slider

document.addEventListener("DOMContentLoaded", () => {
    const videos = document.querySelectorAll(".lazy-video");
  
    const lazyLoadVideo = (video) => {
      const placeholder = video.previousElementSibling;
      const videoSrc = video.getAttribute("data-src");
  
      if (videoSrc) {
        video.src = videoSrc;
        video.load(); // Trigger loading the video file
        video.style.display = "block";
        placeholder.style.display = "none";  
        video.addEventListener("loadeddata", () => {
          video.style.display = "block";
          placeholder.style.display = "none";
        });
      }
    };
  
    const observer = new IntersectionObserver(
      (entries, obs) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            lazyLoadVideo(entry.target);
            obs.unobserve(entry.target); 
          }
        });
      },
      { threshold: 0.5 }
    );
  
    videos.forEach((video) => observer.observe(video));
});

if(document.querySelector(".dk-video-main-silder")){

    let mainslidertiming = document.querySelector(".dk-video-main-silder");
    let mainslideritems = document.querySelectorAll(".dk-video-main-silder .item");
    let mainsliderleft = document.querySelector(".dk-video-main-silder .controls .left");
    let mainsliderright = document.querySelector(".dk-video-main-silder  .controls .right");
    
    
    let current = 1;
    
    function mainSlider(current){
        removeslider();
        mainslideritems[current].classList.add('active');
        mainslideritems[current].querySelector('video').setAttribute('autoplay','true');
        if(current == 0){
            mainsliderleft.setAttribute('data-current',0);
            mainsliderright.setAttribute('data-current',1);
        }
        else if(mainslideritems.length - 1 == current){
            mainsliderleft.setAttribute('data-current',mainslideritems.length - 2);
            mainsliderright.setAttribute('data-current',mainslideritems.length - 1);
        }
        else{
            mainsliderleft.setAttribute('data-current',current - 1);
            mainsliderright.setAttribute('data-current',Number(current) + 1);
        }
    }
    
    mainsliderleft.addEventListener('click',()=>{
        mainSlider(mainsliderleft.getAttribute('data-current'));
        current = Number(mainsliderleft.getAttribute('data-current'));
    });
    mainsliderright.addEventListener('click',()=>{

        mainSlider(mainsliderright.getAttribute('data-current'));
        current = Number( mainsliderright.getAttribute('data-current'));
    
    })
    
 const mainsliderAutoplay =    setInterval(() => {
        mainSlider(current);
        if(current < mainslideritems.length - 1){
            current++;
        }
        else{
            current=0;
        } 
    }, mainslidertiming.getAttribute('data-speed'));
    
    function removeslider(){
        mainslideritems.forEach(item => {
            item.classList.remove('active');
            item.querySelector('video').removeAttribute('autoplay');
        });
    }
    
    
}