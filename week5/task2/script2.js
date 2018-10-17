function makeBig(event){
    let newImg = event.currentTarget;
    let bigImg = document.querySelector('bigImg');
    bigImg.src = ;

}
let images = document.querySelectorAll("img");
for(let i = 1; i < images.length; i++ ){
    images[i].addEventListener('click',makeBig,false);
}