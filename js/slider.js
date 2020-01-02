var slajd = 1;
var myVar = setInterval(slideChange, 4000);
document.getElementsByClassName("circle")[0].style.backgroundColor = "red";
var slider = document.getElementById("changeItLink");
var circleLength = document.getElementsByClassName("circle").length;

function slideChange() {
    if(slajd-2 >= 0){
        document.getElementsByClassName("circle")[slajd-2].style.backgroundColor = "white";
    }
    if(slajd==5){
        slajd=1;
        document.getElementsByClassName("circle")[3].style.backgroundColor = "white";
    }
    document.getElementById("slider").style.backgroundImage = "url(img/"+slajd+".jpg)";
    if(slajd == 1)
        slider.innerHTML = "JavaScript";
    else if(slajd == 2)
        slider.innerHTML = "C++";
     else if(slajd == 3)
        slider.innerHTML = "MySQL";
     else if(slajd == 4)
        slider.innerHTML = "PHP";
  
    document.getElementsByClassName("circle")[slajd-1].style.backgroundColor = "red";
    slajd++;  
}
    for(var i=0; i<=3; i++){
        let numer = i;
        document.getElementsByClassName("circle")[i].addEventListener("click", function(event){
        slideChangeClick(numer);});
    }
    
function slideChangeClick(number){
    console.log(number);
    for(var i=0;i<circleLength;i++)
        document.getElementsByClassName("circle")[i].style.backgroundColor = "white"
    document.getElementsByClassName("circle")[number].style.backgroundColor = "red";
    number++;
    clearInterval(myVar);
    slajd = number;
    switch(number){
        case 1: slider.innerHTML = "JavaScript";break;
        case 2: slider.innerHTML = "C++";break;
        case 3: slider.innerHTML = "MySQL";break;
        case 4: slider.innerHTML = "PHP";break;
    }
    document.getElementById("slider").style.backgroundImage = "url(img/"+number+".jpg)";
    myVar = setInterval(slideChange, 4000);
    console.log("sss");
}