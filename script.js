//4 Pillar Destroyed

var bulb = document.querySelector("#bulb")
var btn = document.querySelector("button")

var flag = true

btn.addEventListener("click",function(){
    if(flag){
    bulb.style.backgroundColor = "yellow"
    console.log("CLicked");
    flag=false
    }else{
    bulb.style.backgroundColor = "white"
    console.log("Not CLicked");
    flag=true; 
    }
})



var h = document.querySelector("h1")
h.innerHTML = "<h2>Hello</h2>"
