const bike = document.getElementById("bike");
if(bike){
    (function bikeMobile(){
    let inputs = bike.querySelectorAll(".tab>input[type=checkbox]");
    for(let j=0;j<inputs.length;j++){
        let element = inputs[j];
        element.checked = false;
        $(element).closest('.content').slideUp(600);
    }
    inputs[0].checked = true;
    if(window.innerWidth <= 1024){
        $(document).find("#bike .bikeMobile .content>div").eq(0).slideDown(600);
    }
    $(inputs[0]).closest('.content-mobile').slideDown(600);
    for(let i=0;i<inputs.length;i++){
        let input = inputs[i];
        $(input).unbind('change').change(function(e){
            e.stopPropagation();
            e.preventDefault();
            e.stopImmediatePropagation();
            let atual = input.checked ? true: false;
            for(let j=0;j<inputs.length;j++){
                let element = inputs[j];
                element.checked = false;
                $(element).closest('.content-mobile').slideUp(600);
            }
            input.checked = atual;
            if(input.checked){
                $(input).closest('.content-mobile').slideDown(600);
            }else{
                $(input).closest('.content-mobile').slideUp(600);
            }
            if(window.innerWidth <= 1024){
                let valor = $(input).attr('id');
                $(input).closest(".bikeMobile").find(".content>div:not(#" + valor + ")").slideUp(600);
                $(input).closest(".bikeMobile").find(".content>div#" + valor).slideDown(600);
            }
        });
    }
    })();

    (function bikeDesktop(){
        let inputs = bike.querySelectorAll(".tabDesk>input[type=checkbox]");
        
        for(let i=0;i<inputs.length;i++){
            let input = inputs[i];
            $(input).unbind('change').change(function(e){
                e.stopPropagation();
                e.preventDefault();
                e.stopImmediatePropagation();
                let atual = input.checked? true: false;
                for(let j=0;j<inputs.length;j++){
                    let element = inputs[j];
                    element.checked = false;
                    $(element).parent().find('.content-desktop').animate({opacity: 0, display: "none"},700);
                }
                input.checked = atual;
                if(input.checked){
                    $(input).parent().find('.content-desktop').animate({opacity: 1},700);
                }else{
                    $(input).parent().find('.content-desktop').animate({opacity: 0, display: "none"},700);
                }
                let valor = $(input).attr('id');
                $(input).closest(".bikeDesktop").find(".content>div:not(#" + valor + ")").animate({opacity: 0, display: "none"},700);
                $(input).closest(".bikeDesktop").find(".content>div#" + valor).animate({opacity: 1},700);
            });
        }
    })();

    if(window.innerWidth < 1024){
        const contentMobile = bike.querySelector(".content-mobile-tns");
        tns({
            container: contentMobile,
            center: false,
            loop: true,
            rewind: true,
            nav: false,
            autoWidth: true,
            items: 1,
            slideBy: 1,
            // gutter: 100,
            speed: 600,
            mouseDrag: true,
            autoplay: true,
            autoplayHoverPause: true,
            autoplayTimeout: 3500,
            controls: false,
            autoplayButtonOutput: false,
            // edgePadding: (window.innerWidth - 262) /2,
        });
        // const bikeSlide = bike.querySelector("#bike0-ow");
        // bikeSlide.classList.add('content-mobile')
    }

    if(bike.contains(bike.querySelector('[data-modal=ficha-tecnica]'))){
        (function openModal(){
            const modalBtn = bike.querySelectorAll('[data-btnModal=ficha-tecnica]')
            const modal = bike.querySelector('[data-modal=ficha-tecnica]')
            const closeModal = modal.querySelector('.close-modal')

            modalBtn.forEach(btn => {
                btn.addEventListener('click', (e) => {
                    e.preventDefault();
                    modal.classList.add('active')
                })
            })
            
            closeModal.addEventListener('click', (e) => {
                modal.classList.remove('active')
            })
        }())
    }
}