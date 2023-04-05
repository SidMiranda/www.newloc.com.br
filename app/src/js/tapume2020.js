// const tapume2020 = document.getElementById('tapume2020');
// if(tapume2020){
//     const openVideo = tapume2020.querySelector('.video');
//     const videoId = getYouTubeID(openVideo.dataset.url);
//     let playerVideo;


//     (function moduloDeVideo(){
//         openVideo.addEventListener('click', e=>{
//             e.preventDefault();
//             openVideo.classList.add("opened");
//             playerVideo = new YT.Player("iframeModuloVideo", {
//                 height: '520',
//                 width: '1360',
//                 videoId: videoId,
//                 playerVars: {
//                     'rel': 0
//                 },
//                 events: {
//                     'onReady': function(){
//                         playerVideo.playVideo();
//                     }
//                 }
//             });
//         });
//     })();

//     (function modalAlerta(){
//         openVideo.addEventListener('click', e=>{
//             document.querySelector(".modal-alertaTapume").classList.add("on");
//         });
//         document.querySelector(".modal-alertaTapume .close").addEventListener('click', e=>{
//             document.querySelector(".modal-alertaTapume").classList.remove("on");
//             playerVideo.pauseVideo();
//         });
//     }());

//     (function writing(){
//         const jsonTextos = JSON.parse(document.querySelector("input[name='textos']").value);
//         const textPlace = document.querySelector(".writing strong");
//         let cont = 0;

//         (function(){
//             cont = cont === jsonTextos.length - 1 ? 0 : cont+1;
//             writeIt(jsonTextos[cont].texto);
//         }());
//         setInterval(function(){
//             cont = cont === jsonTextos.length - 1 ? 0 : cont+1;
//             writeIt(jsonTextos[cont].texto);
//         }, 5000);

//         function writeIt(palavra){
//             let letras = palavra.split("");
//             let j = 0;
//             let digitar = ()=>{
//                 textPlace.innerHTML += letras[j++];
//                 if(j===letras.length){
//                     clearInterval(digitando);
//                     delay();
//                 }
//             }
//             let digitando = setInterval(digitar, 100);
//         }
//         function delay(){
//             function digitaUnderLine(){
//                 textPlace.innerHTML += "_";
//                 setTimeout(function(){
//                     textPlace.innerHTML = textPlace.innerHTML.slice(0, -1);
//                 }, 800);
//             }
//             setTimeout(digitaUnderLine, 0);
//             setTimeout(digitaUnderLine, 1000);
//             setTimeout(digitaUnderLine, 2000);
//             setTimeout(function(){
//                 apagarTexto();
//             }, 3000);
//         }
//         function apagarTexto(){
//             let backspace = ()=>{
//                 textPlace.innerHTML = textPlace.innerHTML.slice(0, -1);
//                 if(textPlace.innerHTML.split("").length === 0){
//                     clearInterval(apagando);
//                 }
//             }
//             let apagando = setInterval(backspace, 100);
//         }

//     }());

//     // (function slideImages(){
//     //     let slider = tapume2020.querySelector(".img-slider");
//     //     let slides = slider.children;
//     //     let cont = 0;
//     //     setInterval(function(){
//     //         cont = cont === slides.length - 1 ? 0 : cont+1;
//     //         for(let i=0;i<slides.length;i++){
//     //             slides[i].classList.remove("on");
//     //         }
//     //         slides[cont].classList.add("on");
//     //     }, 2500);
//     // }());
// }