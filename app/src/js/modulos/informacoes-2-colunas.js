const informacoes2colunas = document.getElementById("box-informacoes");
if(informacoes2colunas){
    (function animacaoEntradaInfos(){
        window.addEventListener("scroll", enterInfos);
        window.addEventListener("DOMContentLoaded", enterInfos);
        function enterInfos(scrollTop=0){
            scrollTop = document.body.scrollTop || document.documentElement.scrollTop;
            if(scrollTop+window.innerHeight > informacoes2colunas.offsetTop){
                informacoes2colunas.classList.add("on");
                window.removeEventListener("scroll", enterInfos);
            }
        }
    })();

    (function fechaDemaisInfos(){
        let inputs = informacoes2colunas.querySelectorAll(".tab>input[type=checkbox]");

        inputs[0].checked = true;
        
        if(window.innerWidth <= 1024){
            let contentMobile = inputs[0].parentNode;
            contentMobile.querySelector(".content").classList.add("on");
        }else{
            let content = informacoes2colunas.querySelectorAll(".infos-content .content");
            let atual = content[0];
            atual.classList.add("on");
        }
        for(let i=0;i<inputs.length;i++){
            let input = inputs[i];
            let contentMobile_x = inputs[0].parentNode;
            let content = informacoes2colunas.querySelector(".infos-content");
            let valor = input.getAttribute('id');
            input.addEventListener("change",function(e){
                e.stopPropagation();
                e.preventDefault();
                e.stopImmediatePropagation();
                let atual = input.checked? true: false;
                for(let j=0;j<inputs.length;j++){
                    let element = inputs[j];
                    element.checked = false;
                    let valorE = element.getAttribute('id');
                    let contentMobile = element.parentNode;
                    if(window.innerWidth <= 1024){
                        contentMobile.children[2].classList.remove('on');
                    }else{
                        content.children[j].classList.remove('on');
                    }
                }
                input.checked = atual;
                if(window.innerWidth <= 1024){
                    if(input.checked){
                        input.nextElementSibling.nextElementSibling.classList.add('on');
                    }
                }else{
                    if(input.checked){
                        let contentOn = content.querySelectorAll(".content");
                        for(let c=0;c<contentOn.length;c++){
                            if(contentOn[c].classList.contains(valor)){
                                contentOn[c].classList.add('on');
                            }
                        }
                    }
                }
            });
        }
    })();

    (function abrirModalRegulamento(){
        const modalRegulamento = informacoes2colunas.querySelector("div.regulamentoModal");
        const linkRegulamento = informacoes2colunas.querySelectorAll('a[href="#regulamentoModal"]');
        const closeRegulamento = modalRegulamento.querySelector(".close-regulamento");
        if(linkRegulamento.length>0){ 
            for(let i=0; i<linkRegulamento.length; i++){
                let linkAtual = linkRegulamento[i];
                linkAtual.addEventListener('click', function(e){
                    e.preventDefault();
                    modalRegulamento.classList.add("on");
                    setTimeout(function(){ document.querySelector("body").classList.add("hidden"); }, 800);
                });
            }
            closeRegulamento.addEventListener('click', function(){
                modalRegulamento.classList.remove("on");
                setTimeout(function(){ document.querySelector("body").classList.remove("hidden"); }, 800);
            });
        }
    }());
}