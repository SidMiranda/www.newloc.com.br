const modalidades = document.querySelector("#modalidades");
if(modalidades){
    if(window.innerWidth < 1024){
        tns({
            container: modalidades.querySelector(".container"),
            center: true,
            loop: false,
            nav: false,
            fixedWidth: 250,
            gutter: 100,
            speed: 600,
            controlsText: ["<span></span>", "<span></span>"],
            // edgePadding: (window.innerWidth - 262) /2,
        });
    }
}