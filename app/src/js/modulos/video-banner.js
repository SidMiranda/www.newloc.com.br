const moduloVideo = document.getElementById('video');
if(moduloVideo){
    const openVideo = moduloVideo.querySelector('a.open');
    const videoId = getYouTubeID(moduloVideo.dataset.url);
    let playerVideo;

    (function animacaoEntradaVideo(){
        window.addEventListener("scroll", enterVideo);
        window.addEventListener("DOMContentLoaded", enterVideo);
        function enterVideo(scrollTop=0){
            scrollTop = document.body.scrollTop || document.documentElement.scrollTop;
            if(scrollTop+window.innerHeight > moduloVideo.offsetTop){
                moduloVideo.classList.add("on");
                window.removeEventListener("scroll", enterVideo);
            }
        }
    })();

    (function moduloDeVideo(){
        openVideo.addEventListener('click', e=>{
            e.preventDefault();
            openVideo.classList.add("opened");
            playerVideo = new YT.Player("iframeModuloVideo", {
                height: '520',
                width: '1360',
                videoId: videoId,
                playerVars: {
                    'rel': 0
                },
                events: {
                    'onReady': function(){
                        moduloVideo.querySelector(".iframe").classList.add("play");
                        playerVideo.playVideo();
                    }
                }
            });
        });
    })();

    (function abreVideoMobile(){
        const labelVideo = moduloVideo.querySelector(`#abreCardVideo`);
        if(window.innerWidth<1024){
            labelVideo.addEventListener('change', function(){
                const closeVideoPause = document.getElementById('close-header');
                const pauseVideo = ()=>{
                    if(!closeVideoPause.checked){
                        playerVideo.pauseVideo();
                    }
                }
                if(labelVideo.checked){
                    openVideo.click();
                    closeVideoPause.addEventListener('change', pauseVideo);
                }else{
                    closeVideoPause.removeEventListener('change', pauseVideo);
                }
            });
        }
    }());
}
