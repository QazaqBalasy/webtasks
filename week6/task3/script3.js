let cars = [{brand:'Toyota',model:'Camry','year':1999,'price':20000,image_url:"https://media.ed.edmunds-media.com/toyota/camry/2016/ot/2016_toyota_camry_LIFE1_ot_902163_1280.jpg"},{brand:'BMW',model:'X6',year:2014,price:25000,image_url:"https://media.ed.edmunds-media.com/bmw/x6/2016/oem/2016_bmw_x6_4dr-suv_xdrive50i_fq_oem_5_1280.jpg"},{brand:'Daewoo',model:'Nexia',year:2007,price:15000,image_url:"https://s.auto.drom.ru/i24207/c/photos/fullsize/daewoo/nexia/daewoo_nexia_695410.jpg"}];



for(let i = 0;i<cars.length;i++){
    let div1 = document.createElement('div');
    let img1 = document.createElement('img');
    
    let div1text = document.createElement('div');
    let imgbasket = document.createElement('img');
    let imgdollar = document.createElement('img');
    let divImgbasket = document.createElement('div');

    imgbasket.src = 'http://simpleicon.com/wp-content/uploads/basket.png';
    imgdollar.src = "http://simpleicon.com/wp-content/uploads/money-4.png";

    
    divImgbasket.classList.add('basket');
    divImgbasket.appendChild(imgbasket);
    divImgbasket.appendChild(imgdollar);
    
    imgdollar.setAttribute('style','width:100%; display:none;');
    imgbasket.setAttribute('style','width:100%');

    div1.setAttribute('style','position:relative');
    div1text.textContent = cars[i].brand + " " +cars[i].model;

    img1.src = cars[i].image_url;
    img1.setAttribute('style','width:150px;height:100px;padding:5px;');
    
    div1.appendChild(img1);
    div1.appendChild(div1text);
    div1.appendChild(divImgbasket);

    document.getElementById('cars').appendChild(div1);

    imgdollar.addEventListener('click',onClick);
    imgbasket.addEventListener('click',onClick);
    
}

function onClick(event){
    let img = event.currentTarget;
    let children = img.parentNode.parentNode.parentNode.children;
    let items = document.getElementById('items');
    let sum = document.getElementById('sum');
    
    
    if(img.src ==='http://simpleicon.com/wp-content/uploads/basket.png'){
        img.setAttribute('style','display:none');
        img.parentNode.children[1].setAttribute('style','display:block;width:100%;');
        items.textContent = parseInt(items.textContent) +1;
        
        for(let i =  0;i<children.length;i++){
            children[i].onclick = function(){
                sum.textContent = parseInt(sum.textContent) + cars[i].price;

            };
           
        }
    
    }
    else{
        img.setAttribute('style','display:none');
        img.parentNode.children[0].setAttribute('style','display:block;width:100%;');
        items.textContent = parseInt(items.textContent) -1;
        
        for(let i =  0;i<children.length;i++){
            children[i].onclick = function(){
                sum.textContent = parseInt(sum.textContent) - cars[i].price;

            };
           
        }
    }
}

