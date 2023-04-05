const modalGrupos = document.querySelector('.modal-grupos');
if(modalGrupos){
    $(modalGrupos).closest('section').attr("id", "modal-grupos");
    document.addEventListener('DOMContentLoaded', function () {
        const menu = document.getElementById('header');
        const close = modalGrupos.querySelector('.close-grupos');
        close.addEventListener('click', function (e) {
            e.preventDefault();
            modalGrupos.classList.remove("on");
            setTimeout(function () {
                document.querySelector('body').classList.remove('hidden');
            }, 300);
        });
        menu.addEventListener('click', function (e) {
            var target = e.target;
            while (target && target.tagName !== 'A') {
                target = target.parentNode;
                if (!target) { return; }
            }
            if (target.href.indexOf("#grupos") > -1) {
                modalGrupos.classList.add("on");
                document.querySelector('body').classList.add('hidden');
            };
        });
    
    });
}

