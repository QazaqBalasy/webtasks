let countries = ["Kazakhstan","Russia","England","France"];
let cities_by_country = {"Kazakhstan":["Almaty","Astana","Karagandy"],"Russia":["Moscow","Saint-Petersburg","Kazan"],"England":["London","Manchester","Liverpool"],"France":["Paris","Lyon","Marseille"]};
for(let i = 0;i<countries.length;i++){
    let option = document.createElement("option");
    option.appendChild(document.createTextNode(countries[i]));
    let c = document.getElementById('countries');
    c.appendChild(option);
}

function onClick(event){
    let select = event.currentTarget;
    var opt = select.options[select.selectedIndex];
    let selected_cities = cities_by_country[opt.text];  
    document.getElementById('cities').innerHTML = '';
    let o = document.createElement("option");
    o.text = "Select city";
    document.getElementById('cities').appendChild(o);

    for(let i = 0;i<selected_cities.length;i++){
        let option = document.createElement("option");
        option.text = selected_cities[i];
        document.getElementById('cities').appendChild(option);
    }    
    }
    




let select = document.querySelector('#countries');
select.addEventListener('change',onClick);
