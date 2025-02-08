const goToBottomBtn= document.getElementById("main__btn");

window.onscroll = ()=>{
    scrollFunction();
};
function scrollFunction(){
    if(document.body.scrollBottom > 100 || document.documentElement.scrollBottom >100){
        goToBottomBtn.style.display="block";
    }
}