var type = document.querySelectorAll(".tableContainer .type");
var name = document.querySelectorAll(".tableContainer .name");
var rozmiar = document.querySelectorAll(".tableContainer .rozmiar");
var createDate = document.querySelectorAll(".tableContainer .createDate");
let a = 0;
let rozmiarTablicy = 50;
let dataContainer = document.querySelector("#smalldataContainer");
for(let i=1; i<=rozmiarTablicy;i++){
    let div = document.createElement("div");
    div.className="tableContainer";
    document.querySelector("#smalldataContainer").appendChild(div);
    
    div = document.createElement("div");
    div.className="type";
    document.querySelectorAll(".tableContainer")[i].appendChild(div);
    
    div = document.createElement("div");
    div.className="name";
    document.querySelectorAll(".tableContainer")[i].appendChild(div);
    
    div = document.createElement("div");
    div.className="rozmiar";
    document.querySelectorAll(".tableContainer")[i].appendChild(div);
    
    div = document.createElement("div");
    div.className="createDate";
    document.querySelectorAll(".tableContainer")[i].appendChild(div);
}
/*
for(let i=1; i<=rozmiarTablicy;i++){
    document.querySelectorAll(".name")[i].innerHTML="testssssssssssssssssssssaaaaaaaaaaaaaa";
    document.querySelectorAll(".rozmiar")[i].innerHTML="test";
    document.querySelectorAll(".createDate")[i].innerHTML="test";
}*/
type = document.querySelectorAll(".tableContainer .type");
name = document.querySelectorAll(".tableContainer .name");
var name1 = document.querySelectorAll(".tableContainer .name");// bo name nie dziala nie wiadomo czemu
rozmiar = document.querySelectorAll(".tableContainer .rozmiar");
createDate = document.querySelectorAll(".tableContainer .createDate");

for(let i of name1){
    if(a!=0)
        i.innerHTML = Math.random().toString(36) + ".jpg";
    a++
}
a=0;

for(let i of rozmiar){
    if(a == 0)
        console.log("s");
    else
        i.innerHTML = parseInt(Math.random()*7+1) + "MB";
    a++; 
    console.log(i);
}

a = 0;
for(let i of createDate){
    if(a == 0)
        console.log("s");
    else{
        let rok = parseInt(Math.random()*9+2010);
        let miesiac = parseInt(Math.random()*12+1);
        if(miesiac <10) miesiac="0" + miesiac;
        let dzien = parseInt(Math.random()*31+1);
        if(dzien <10) dzien="0" + dzien;
        i.innerHTML = rok+"."+miesiac+"."+dzien;
    }    
    a++; 
}
console.log("test");
function naSzybko(){
   setTimeout(function(){
    console.log(document.querySelector("#fileSize").files);
}, 1000)
 
}
