const modalInforme = document.getElementById("modal-informe");
if(modalInforme){
    (function carregarModal(){
        let close = modalInforme.querySelector('.close');

        setTimeout(function(){
            modalInforme.classList.add("on");
            document.querySelector('body').classList.add('hidden');
        }, 1000);
        
        close.addEventListener('click',function(e){
            e.preventDefault();
            modalInforme.classList.remove("on");
            setTimeout(function(){
                document.querySelector('body').classList.remove('hidden');
            }, 600);
        });
    }());
}