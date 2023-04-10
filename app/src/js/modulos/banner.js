const banner = document.querySelector("#banner");
if(banner){
    (function entradas(){
        document.addEventListener("DOMContentLoaded", function(){
            banner.classList.add("on");
        });
    }());

    if(window.innerWidth < 1024){
        // tns({
        //     container: banner.querySelector(".mobile"),
        //     center: false,
        //     loop: true,
        //     nav: true,
        //     controls: false,
        //     fixedWidth: 375,
        //     items: 1,
        //     slideBy: 1,
        //     speed: 600,
        //     controlsText: ["<span></span>", "<span></span>"],
        // });
        tns({
            container: banner.querySelector(".mobile"),
            items: 1,
            mouseDrag: true,
            nav: true,
            controls: false,
            loop: true,
            slideBy: 1,
            center: true,
            edgePadding: 0,
            speed: 850,
            autoplay: true,
            autoplayButtonOutput: false
        });
    } else {
        tns({
            container: banner.querySelector(".hd"),
            items: 1,
            mouseDrag: true,
            nav: true,
            controls: false,
            loop: true,
            slideBy: 1,
            center: true,
            edgePadding: 0,
            speed: 850,
            autoplay: true,
            autoplayButtonOutput: false
        });
    }
}