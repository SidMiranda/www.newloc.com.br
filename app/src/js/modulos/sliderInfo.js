const sliderInfos = document.querySelector("#slider-infos");
if(sliderInfos){
    if(window.innerWidth < 1024){
        tns({
            container: sliderInfos.querySelector(".container"),
            center: true,
            loop: false,
            nav: false,
            fixedWidth: 413,
            items: 1,
            slideBy: 1,
            speed: 600,
            controlsText: ["<span></span>", "<span></span>"],
        });
    }
    window.addEventListener("load", function(){
        sliderInfos.classList.add("on");
    });
}