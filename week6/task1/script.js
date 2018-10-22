function onClick(event){
    let div = event.currentTarget.parentNode;
    div.setAttribute('data-status','done')
}

let array = document.querySelectorAll('button');
for(let i = 0;i<array.length;i++){
    array[i].addEventListener('click',onClick);
}
