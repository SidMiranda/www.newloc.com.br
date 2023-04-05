const boxes = document.querySelectorAll(".box-splits");
if(boxes){
    for(let i=0;i<boxes.length; i++){
        let boxTop = boxes[i].offsetTop;
        window.addEventListener("scroll", enterboxSplit);
        window.addEventListener("DOMContentLoaded", enterboxSplit);
        function enterboxSplit(scrollTop=0){
            scrollTop = document.body.scrollTop || document.documentElement.scrollTop;
            if(scrollTop+window.innerHeight > boxTop){
                boxes[i].classList.add("on");
                window.removeEventListener("scroll", enterboxSplit);
            }
        }
    }

    (function abrirVideo(){
        let modalVideo = document.querySelector(".modal-video-box-split");
        if(modalVideo){
            let playerVideoBoxSplit;
            let videoCarregado = false;
            for(let i=0;i<boxes.length; i++){
                let openVideo = boxes[i].querySelector("a.openVideo");
                let close = document.querySelector(".modal-video-box-split");
                let videoId = getYouTubeID(modalVideo.dataset.video);
                if(openVideo){
                    openVideo.addEventListener('click', carregarVideo);
                    function carregarVideo(){
                        playerVideoBoxSplit = new YT.Player( modalVideo.querySelector(".video-content") , {
                            height: '520',
                            width: '700',
                            videoId: videoId,
                            playerVars: {
                                'rel': 0
                            },
                            events: {
                                'onReady': abrirVideoBoxSplit,
                            }
                        });
                        function abrirVideoBoxSplit(){
                            videoCarregado = true;
                            playerVideoBoxSplit.playVideo();
                        }
                        openVideo.removeEventListener('click', carregarVideo);
                    }

                    openVideo.addEventListener('click', e=>{
                        e.preventDefault();
                        modalVideo.classList.add("opened");
                        if(videoCarregado) playerVideoBoxSplit.playVideo();
                    });
                    
                    close.addEventListener('click', e=>{
                        e.preventDefault();
                        playerVideoBoxSplit.stopVideo();
                        modalVideo.classList.remove("opened");
                    })
                }
            }
        }
    })();
}