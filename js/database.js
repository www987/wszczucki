let screwData = false;
function screw(){
    if(innerWidth < 700) return;
    let firstIcon = document.querySelector("#mainMenu li i");
    let menu = document.querySelector("#mainMenu");
    let contentBox = document.querySelector("#contentBox");
    let spans = document.querySelectorAll("#mainMenu li span");
    if(screwData){
        menu.style.width = "14%";
        menu.style.textAlign = "left";
        contentBox.style.width = "86%"; 
        firstIcon.style.transform = "rotate(0deg)";
        for(let i of spans)
        i.style.display="inline";
        screwData = false;
    }
    else{
        menu.style.width = "5%";
        menu.style.textAlign = "center";
        contentBox.style.width = "95%"; 
        firstIcon.style.transform = "rotate(180deg)";
        for(let i of spans)
        i.style.display="none";
        screwData = true;
    }
}
let resizeData = false;
function resizeMainMenu(){
    if(innerWidth > 700) return;
    let menu = document.querySelector("#mainMenu");
    let spans = document.querySelectorAll("#mainMenu li span");
    if(resizeData){
        menu.style.height = "6.5vh";
        for(let i of spans)
            i.style.display = "none";
        resizeData = false;
    }
    else{
        menu.style.height = "10.5vh";
        for(let i of spans)
            i.style.display = "block";
        resizeData = true;
    }
}
function resizeCSScheck() {
    let spans = document.querySelectorAll("#mainMenu li span");
    let menu = document.querySelector("#mainMenu");
    if(innerWidth > 700 && screwData){
        menu.style.height = "auto";
    }
    if(innerWidth > 700 && !screwData){
        menu.style.height = "auto";
         for(let i of spans)
            i.style.display = "inline";
    }
    if(innerWidth < 700){
        menu.style.height = "6.5vh";
        for(let i of spans)
            i.style.display = "none";
        console.log("test resizeCSS");
    }  
}
function lightUp(){
    let li = document.querySelectorAll("#mainMenu li");
    for(let i of li){
        i.addEventListener("mouseover", function(){
            lightUpCss(true);
        });
         i.addEventListener("mouseout", function(){
            lightUpCss(false);
        });
    }
}
lightUp();
function lightUpCss(condition){
    let icon = document.querySelectorAll("#mainMenu li i");
    if(condition){
        let counter = 1;
        for(let i of icon){
            i.classList.add("backgroundTextGradient"+counter);
            counter++;
        }
    }  
    else{
        let counter = 1;
        for(let i of icon){
            i.classList.remove("backgroundTextGradient"+counter);
            counter++;
        }
    }   
}
var resizeMMData = false;
var menuOnOffData = false;
function menuOnOff(){
    let menu = document.querySelector("#menuNav");
    let timer;
    console.log(menuOnOffData);
    if(menuOnOffData){
        menu.style.transition="0.8s";
        menu.classList.remove("visibleOpacity1");
        timer = setTimeout(function(){menu.style.transition="0s";}, 1000);
        menuOnOffData = false;
    }
    else{
        menu.classList.add("visibleOpacity1");
        document.querySelector("#menuNav").style.transition="0.8s";
        menuOnOffData = true;
    }
   
}
