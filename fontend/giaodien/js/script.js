const top=document.querySelector(".top")
window.addEventListener("scroll",function(){
    const X=this.pageYOffset;
    if(X>1){ top.classList.add("active")}
    else{
        this.top.classList.remove("active")
    }
}
)
//--------------------------MENU-Sliderbar-CARTEROGY-----------------//
const itemsliderbar =document.querySelectorAll(".carterogy-left-li")
itemsliderbar.forEach(function(menu,index){
    menu.addEventListener("click",function(){
        menu.classList.toggle("block")
    })
})

//--------------------------PRODUCT--------------------------------//
const dacdiem=document.querySelectorAll(".dacdiem")
dacdiem.forEach(function(menu,index){
    menu.addEventListener("click",function(){
        menu.classList.toggle("block")
    })
})

const bigimg= document.querySelector(".product-content-left-big-img img")
    const smallimg=document.querySelectorAll(".product-content-left-small-img img")
    smallimg.forEach(function(imgItem,X){
        imgItem.addEventListener("click", function(){
            bigimg.src= imgItem.src
        })
    })