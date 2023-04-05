// const percurso = document.getElementById('percurso');
// if(percurso){
//     window.addEventListener("DOMContentLoaded", function resetIframeToCenter(){
//         let inputs = document.querySelectorAll("#percurso .percursos>input");
//         let iframes = document.querySelectorAll('#percurso .percursos .iframes >*');
//         for(let i=0;i<inputs.length;i++){
//             inputs[i].addEventListener("change", function(){
//                 let link = inputs[i].dataset.linkpercurso;
//                 if(link){
//                     iframes[i].querySelector('iframe').src = link;
//                 }
//             });
//         }
//         setTimeout(function(){
//             let link = inputs[0].dataset.linkpercurso;
//             if(link){
//                 iframes[0].src = link;
//             }
//         }, 2000);
//     });
    
//     window.addEventListener('DOMContentLoaded', function(){
//         let videos = [];
//         (function YoutubeId(){
//             let iframes = document.querySelectorAll('#percurso .videos .iframe');
//             if(iframes.length > 0){
//                 setTimeout(function(){
//                     for(let i =0;i<iframes.length;i++){
//                         let videoID = iframes[i].dataset.linkvideo;
//                         var regExp = /^.*(youtu\.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
//                         var match = videoID.match(regExp);
//                         videos.push(new YT.Player('video-'+i, {
//                             height: '520',
//                             width: '1360',
//                             videoId: match[2],
//                             playerVars: {
//                                 'rel': 0
//                             }
//                         }));
//                     }
//                 }, 1000);
//                 (function trocaVideo(){
//                     let inputs = document.querySelectorAll("#percurso .videos>input");
//                     for(let i=0;i<inputs.length;i++){
//                         inputs[i].addEventListener("change", function(){
//                             for(let j=0;j<videos.length; j++){
//                                 videos[j].pauseVideo();
//                                 videos[j].clearVideo();
//                             }
//                         });
//                     }
//                 })();
//             }
//         })();
//     });

    
//     (function toggleVideo(){
//         const btnToggleVideo = document.getElementById('acessaVideo');
//         btnToggleVideo.addEventListener('change', function(){
//             let mapa = btnToggleVideo.nextElementSibling.querySelector('span.mapa');
//             let video = btnToggleVideo.nextElementSibling.querySelector('span.video');
//             if(mapa.style.display == "none"){
//                 video.style.display = "none";
//                 mapa.style.display = "flex";
//             }else{
//                 mapa.style.display = "none";
//                 video.style.display = "flex";
//             }
//         });
//     }());
    
//     // (function carousselLegenda(){
//     //     if(window.innerWidth<1024){
//     //         const percurso = document.getElementById('percurso');
//     //         const botoes = percurso.querySelector(".botoes-legenda");
//     //         tns({
//     //             container: botoes,
//     //             mouseDrag: true,
//     //             nav: false,
//     //             loop: false,
//     //             items: 3,
//     //             slideBy: 1,
//     //             edgePadding: 20,
//     //             fixedWidth: 100,
//     //             controls: false
//     //         });
//     //     }
//     // }());
    
//     // (function sobeAltimetria(){
//     //     const percursos = document.getElementById('percurso');
//     //     const input = document.getElementById("modalAltimetria");
//     //     input.addEventListener('change', function(){
//     //         if(window.innerWidth>1024){
//     //             const header = document.getElementById("header").offsetHeight;
//     //             window.scrollTo({
//     //                 top: percursos.offsetTop - header,
//     //                 behavior: 'smooth',
//     //               })
//     //         }else{
//     //             let valor = input.checked;
//     //             if(valor){
//     //                 input.parentNode.classList.add("altimetriaOn");
//     //             }else{
//     //                 input.parentNode.classList.remove("altimetriaOn");
//     //             }
//     //         }
//     //     });
//     // })();    
// }