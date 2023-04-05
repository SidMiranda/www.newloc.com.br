const skate = document.querySelector("#skate");
if(skate){
    (function recordMobile(){
        if(document.querySelector('input#openSkateRecordDesk')){
            const openRecordDesk = document.querySelector('input#openSkateRecordDesk');
            openRecordDesk.addEventListener('change', () => {
                if(openRecordDesk.checked == true){
                    document.querySelector("body").classList.add('hidden');
                } else {
                    document.querySelector("body").classList.remove('hidden');
                }
            })
        }
    }());
}