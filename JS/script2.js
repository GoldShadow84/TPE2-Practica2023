"use strict";

//URL API MOCKAPI
const url = new URL("https://63f27952f28929a9df5b3181.mockapi.io/books");
url.searchParams.append('page', 1);
url.searchParams.append('limit', 3);

let form = document.querySelector("#form-tab");
form.addEventListener("submit",sendData);

//añadir tres
document.querySelector("#three").addEventListener("click", addThree);

//filtering - search

let formfilter = document.querySelector("#form-filter");
formfilter.addEventListener("submit", filtering);

function filtering(e) {
    e.preventDefault();

    let formData = new FormData(formfilter);
    let fieldSelected = formData.get('select');
    let textSearch = formData.get('text-search');

    url.searchParams.delete(fieldSelected, textSearch);
    url.searchParams.append(fieldSelected, textSearch);

    showInfo();
}


// pagination


//previus button

document.querySelector("#previus").addEventListener("click", showPreviusInfo);


//next button
document.querySelector("#next").addEventListener("click", showNextInfo);

//page variable
let page = 1;


//previus button function

function showPreviusInfo(e) {
    e.preventDefault();

    if(page > 1) {
        page--;

        url.searchParams.delete('page', 1);
        url.searchParams.append('page', page);


        showInfo();
    }

}

//next button function

function showNextInfo(e) {
    e.preventDefault();

    page++;

    url.searchParams.delete('page', 1);
    url.searchParams.append('page', page);

    showInfo();

}

// show information

async function showInfo() {

    let tablecontent = document.querySelector("#dynamic-table");
    tablecontent.innerHTML = "";

    try {

        let response = await fetch(url);

        if(response.ok) {
            let json = await response.json();

            for (let books of json) {

                let content = document.querySelector("#dynamic-table");
                let row = document.createElement("tr");
                let name = document.createElement("td");
                name.innerHTML = books.name;
                let year = document.createElement("td");
                year.innerHTML = books.year;
                let price = document.createElement("td");
                price.innerHTML = "$" + books.price;
        
               
                if(books.price < 100 && books.price > 0) {
                    price.classList.add("green");
                }
                
        
                let id = document.createElement("td");
                id.innerHTML = books.id;
                let edite = document.createElement("button");
                edite.innerHTML = "editar";
                let erase = document.createElement("button");
                erase.innerHTML = "eliminar";
                content.appendChild(row);
                row.appendChild(name);
                row.appendChild(year);
                row.appendChild(price);
                row.appendChild(id);
                row.appendChild(edite);
                row.appendChild(erase);
                edite.addEventListener("click", function () { editeRow(books.id) });
               erase.addEventListener("click", function () { eraseRow(books.id) });
            }

        }
        else {
              let tablecontent = document.querySelector("#dynamic-table");
    tablecontent.innerHTML = "Error al cargar";
        }
    }
    catch(error) {
        let tablecontent = document.querySelector("#dynamic-table");
        tablecontent.innerHTML = "Error URL API";
    }
    
}

//POST AJAX

async function sendData(e) {
    e.preventDefault();

    let formData = new FormData(form);
    let namebook = formData.get('names');
    let yearbook = formData.get('year');
    let pricebook = formData.get('price');

    let books = {
        name: namebook,
        year: yearbook,
        price: pricebook,
    }

    try {

        let res = await fetch(url, {

            "method": "POST",
            "headers": { "Content-Type": "application/json" },
            "body": JSON.stringify(books)

        });

        if(res.status == 201) {
            console.log("Creado correctamente");
        }

    }
    catch(error) {
        console.log(error);
    }


    showInfo();
}

//POST X3

async function addThree(e) {
    e.preventDefault();

    let formData = new FormData(form);

    let namebook = formData.get('names');
    let yearbook = formData.get('year');
    let pricebook = formData.get('price');
    let idbook = formData.get('id');

    let book = {
        name: namebook,
        year: yearbook,
        price: pricebook,
    }

    try {

        for(let i = 1; i <= 3; i++) {
            let res = await fetch(url, {
                "method": "POST",
                "headers": { "Content-type": "application/json" },
                "body": JSON.stringify(book)
            });

            if(i == 3) {
                if(res.status == 201) {
                    console.log("recursos creados correctamente");
                }
            }
        }

    }
    catch(error) {
        console.log(error);
    }


    showInfo();
}


//PUT AJAX

async function editeRow(id) {

    url.searchParams.delete('page');
    url.searchParams.delete('limit');
    url.searchParams.delete('title');

    let formData = new FormData(form);
    let namebook = formData.get('names');
    let yearbook = formData.get('year');
    let pricebook = formData.get('price');


    let book = {
        name: namebook,
        year: yearbook,
        price: pricebook
    };

    try {

        let res = await fetch(`${url}/${id}`, {

            "method": "PUT",
            "headers": { "Content-type": "application/json" },
            "body": JSON.stringify(book)

        });
   

        if(res.status == 201) {
            console.log("Editado correctamente");
        }
        else {
            console.log("Error al editar");
        }

    }
    catch(error) {
        console.log(error);
    }
    

    showInfo();
}

async function eraseRow(id) {

    url.searchParams.delete('page', 1);
    url.searchParams.delete('limit', 1);
    url.searchParams.delete('title');

    try {

        let res = await fetch(`${url}/${id}`, {
            "method": "DELETE",
            "headers": { "Content-type": "application/json"}
        });

        if(res.status == 200) {
            console.log("Borrado correctamente");
        }
        else {
            console.log("Error al borrar");
        }

    }
    catch(error) {
        console.log(error);
    }

    showInfo();
}

showInfo();
