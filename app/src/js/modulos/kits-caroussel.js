const kitsCaroussel = document.getElementById("kits");
if(kitsCaroussel){
    function enterkitsCaroussel(scrollTop=0){
        scrollTop = document.body.scrollTop || document.documentElement.scrollTop;
        if(scrollTop+this.innerHeight > kitsCaroussel.offsetTop){
            kitsCaroussel.classList.add("on");
            window.removeEventListener("scroll", enterkitsCaroussel);
        }
    } 
    window.addEventListener('load', enterkitsCaroussel);
    window.addEventListener('scroll', enterkitsCaroussel);
    
    (function sliderKits(){
        let el = kitsCaroussel.querySelector('.kits');
        if(el.children.length>4 || window.innerWidth<1024){
            let prev = document.querySelector("#prevKit");
            let next = document.querySelector("#nextKit");
            tns({
                container: el,
                items: 1,
                mouseDrag: true,
                nav: false,
                loop: false,
                slideBy: 1,
                prevButton: prev,
                nextButton: next,
                gutter: 10,
                fixedWidth: 300,
                edgePadding: 40,
                speed: 600,
                responsive: {
                    1024: {
                        items: 2,
                        slideBy: 'page',
                        fixedWidth:  window.innerWidth / 2 - 1,
                        gutter: 5
                    },
                    1600: {
                        gutter: 50
                    }
                }
            });
        }else{
            el.parentNode.classList.add("no-slider");
        }
    }());
    
    // (function esconderInscrever(){
    //     const botaoinscrevase = document.querySelector('.inscreva-se.mobile');
    //     window.addEventListener("scroll", function(scrollTop=0){
    //         scrollTop = document.documentElement.scrollTop;
    //         if(scrollTop+window.innerHeight > kitsCaroussel.offsetTop && scrollTop+window.innerHeight < kitsCaroussel.offsetTop + kitsCaroussel.clientHeight+200){
    //             botaoinscrevase.classList.add('off');
    //         }else{
    //             botaoinscrevase.classList.remove('off');
    //         }
    //     });
    // }());
    
    (function focaAbrirMedidas(){
        const inputs = kitsCaroussel.querySelectorAll("input[type=checkbox]");
        for(let i=0;i<inputs.length;i++){
            inputs[i].addEventListener('change', function(){
                    if(window.innerWidth > 1024){
                        const header = document.getElementById("header").offsetHeight;
                        $(document.documentElement).stop().delay(0).animate({
                            scrollTop: kitsCaroussel.offsetTop - header
                        }, 1000, "swing");
                    }else{
                        let valor = inputs[i].checked;
                        if(valor){
                            kitsCaroussel.parentNode.querySelector('.modal-tamanhos').style.zIndex = 50;
                            document.querySelector('body').classList.add("hidden");
                            document.querySelector('html').classList.add("hidden");
                        }else{
                            kitsCaroussel.parentNode.querySelector('.modal-tamanhos').style.zIndex = 10;
                            document.querySelector('body').classList.remove("hidden");
                            document.querySelector('html').classList.remove("hidden");
                        }
                    }
            });
        }
    })();

    (function webserviceKits() {
        
        const kitItem = document.querySelectorAll('div.kit'); // criar este campo
        const idEvento = document.querySelector('#idEvento').value;
        const valorClubeO2 = document.querySelector('input.valorClubeO2').value;
        
        const horaAtual = new Date().getTime();
        const horaAtualMais = horaAtual + 360000;
        const horaLocal = localStorage.getItem("tempo_" + idEvento);
        
        const valorGratis = "0,00";
        for(let i = 0; i < kitItem.length; i++){
            let idCategoria = kitItem[i].querySelector('.idCategoria').value;
            valorKits(idEvento, idCategoria, kitItem[i])
        }
        
        function valorKits(id, kit, e) {
            var de = e.querySelector('.valorDe span');
            var preco = e.querySelector('.valor strong');
            var cents = e.querySelector('.centavos');
            if (!preco.textContent && !de.textContent) {
                if (horaAtual >= horaLocal) {
                    var ajax = new XMLHttpRequest();
        
                    ajax.open("GET", "https://webservices.ativo.com/br/evento/valores-kit/" + id + "/" + kit + "", true);
        
                    ajax.send();
        
                    ajax.onreadystatechange = function () {
                        if (ajax.readyState == 4 && ajax.status == 200) {
                            var data = ajax.responseText;
                            var response = JSON.parse(data);
                            var valores = response.dados[0];
                            
                            if (!valores.valor){
                                e.classList.add('esgotado');
                            }else{
                                var virgula = [];
                                if(e.classList.contains('clubeO2')){
                                    de.parentNode.innerHTML = "APENAS";
                                    valores.valor = (parseFloat(valores.valor.replace(",",".")) + parseFloat(valorClubeO2.replace(",","."))).toFixed(2).replace(".",",");
                                    virgula = valores.valor.split(",");
                                }else{
                                    if(valores.valor == valores.valor_de){
                                        de.parentNode.innerHTML = "APENAS";
                                    }else{
                                        de.innerHTML = valores.valor_de;
                                    }
                                    virgula = valores.valor.split(",");
                                }
                                if(!e.classList.contains('gratis')){
                                    preco.innerHTML = virgula[0];
                                    cents.innerHTML = virgula[1];
                                }
                                localStorage.setItem("de_" + kit + '_id_evento_' + id, valores.valor_de);
                                localStorage.setItem("valor_atual_" + kit + '_id_evento_' + id, valores.valor);
                                localStorage.setItem("preco_" + kit + '_id_evento_' + id, virgula[0]);
                                localStorage.setItem("preco_virgula_" + kit + '_id_evento_' + id, virgula[1]);
                                localStorage.setItem("tempo_" + id, horaAtualMais);
                            }
                        }
                    }
                } else {
                    if(!e.classList.contains('gratis')){
                        de.innerHTML = localStorage.getItem("de_" + kit + '_id_evento_' + id);
                    }
                    var valorLocal = localStorage.getItem("de_" + kit + '_id_evento_' + id);
                    let valorAtual = localStorage.getItem("valor_atual_" + kit + '_id_evento_' + id);
                    if(valorLocal == valorAtual && valorAtual != null){
                        de.parentNode.innerHTML = "APENAS";
                    }
                    if(valorLocal == valorGratis){
                        e.classList.add('gratis');
                    }
                    if(e.classList.contains("clubeO2")){
                        de.parentNode.innerHTML = "APENAS";
                    }
                    if(!e.classList.contains('gratis')){
                        preco.innerHTML = localStorage.getItem("preco_" + kit + '_id_evento_' + id);
                        cents.innerHTML = localStorage.getItem("preco_virgula_" + kit + '_id_evento_' + id);
                    }
                }
            }
        }		
    })();
}