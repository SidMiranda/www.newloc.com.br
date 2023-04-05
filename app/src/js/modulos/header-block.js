const headerBlock = document.getElementById("header");
if(headerBlock && headerBlock.classList.contains("header-block")){
    // (function menuNavigatorMobile(){
    //     const botoes = headerBlock.querySelectorAll("nav a");
    //     for(let i=0;i<botoes.length;i++){
    //         $(botoes[i]).unbind('click').click(function(e) {
    //             const cards = document.querySelectorAll('main>section input.card');
    //             if(botoes[i].hash){
    //                 e.preventDefault();
    //                 if(document.querySelector(botoes[i].hash).querySelector("input.card") && window.innerWidth < 1024){
    //                     const close = document.getElementById("close-header");
    //                     for(let j=0;j<cards.length;j++){ cards[j].checked = false; }
    //                     document.querySelector(botoes[i].hash).querySelector("input.card").checked = true;
    //                     document.getElementById("burguer-menu").checked = false;
    //                     close.classList.add("card");
    //                     close.checked = true;
    //                     close.addEventListener("change", function(){
    //                         for(let j=0;j<cards.length;j++){
    //                             cards[j].checked = false;
    //                         }
    //                         document.querySelector("body").classList.remove('hidden');
    //                         close.classList.remove("card");
    //                     });
    //                 }else{
    //                     document.querySelector("body").classList.remove('hidden');
    //                     document.getElementById("burguer-menu").checked = false;
    //                     for(let j=0;j<cards.length;j++){ cards[j].checked = false; }
    //                     let header = 60;
    //                     let altura = $(botoes[i].hash).offset().top - header > 0? $(botoes[i].hash).offset().top - header: 0;
    //                     $("body, html").stop().delay(0).animate({
    //                         scrollTop: altura
    //                     }, 1000, "swing");
    //                 }
    //             }
    //         });
    //     }
    // })();

    (function menuIndicator(){
        const menu = headerBlock.querySelector('.menu');
        const botoes = menu.querySelectorAll('a:not(:last-child)');
        const indicator = menu.querySelector('hr');
        const indicatorWidth = Math.round(indicator.offsetWidth/4);
        let hashs = [];

        function centralizaIndicator(element){
            let width = element.offsetWidth;
            let left = element.offsetLeft;
            let position = Math.round(left + (width/2) - 13);
            indicator.style.left = (position - indicatorWidth)+'px';
        }

        function referenciaAnchor(){
            let scrollTop = document.documentElement.scrollTop;
            let height = headerBlock.offsetHeight;

            for(let i=0;i<hashs.length;i++){
                let atual = document.querySelector(hashs[i]);
                if(atual){
                    let ref = atual.offsetTop;
                    if(scrollTop+200 > ref && window.innerWidth > 1024){
                        let zonaAtual = menu.querySelector('a[href="'+hashs[i]+'"]');
                        centralizaIndicator(zonaAtual);
                        for(let j=0;j<menu.querySelectorAll("a").length;j++){
                            menu.querySelectorAll("a")[j].classList.remove('active');
                        }
                        zonaAtual.classList.add('active');
                    }
                }
            }
        }

        for(let i=0;i<botoes.length;i++){
            hashs.push(botoes[i].hash);
            botoes[i].addEventListener("mouseover", function(){
                centralizaIndicator(this);
            });
            botoes[i].addEventListener("mouseout", function(){
                referenciaAnchor(this);
            });
        }
        hashs = hashs.filter(function(e){
            return e != "";
        })
        window.addEventListener('scroll', referenciaAnchor);
        document.addEventListener('DOMContentLoaded', referenciaAnchor)
    }());
    
    
    (function openMenu(){
        let burguer = document.getElementById("burguer-menu");
        burguer.addEventListener('change', function(){
            if(burguer.checked == true){
                document.querySelector('body').classList.add('hidden');
            }else{
                document.querySelector('body').classList.remove('hidden');
            }
        });
    })();

    (function toggleCloseButton(){
        const cards = document.querySelectorAll('main>section input.card');
        const closeButton = document.querySelector('.alterar-cidade');
        if(cards.length > 0){
            cards.forEach((card) => {
                card.addEventListener('change', () => {
                    if(card.checked == true){
                        closeButton.classList.remove('hidden-xs')
                    }
                })
            })
        }
        closeButton.addEventListener('click', () => {
            closeButton.classList.add('hidden-xs')
        })
    })();
    
    (function scrollMenu(){
        let header = document.getElementById("header");
        window.addEventListener("scroll", achataMenu);
        window.addEventListener("DOMContentLoaded", achataMenu);
        function achataMenu(scrollTop=0){
            scrollTop = document.documentElement.scrollTop;
            if(scrollTop > 30){
                header.classList.add("on");
            }else{
                header.classList.remove("on");
            }
        }
    })();
}