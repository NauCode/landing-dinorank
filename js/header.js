document.addEventListener("DOMContentLoaded", function (event) {
    var headerDiv = document.getElementsByClassName("drl-header")[0];
    var sticky = headerDiv.offsetTop;

    function scrollerFunction() {
        if(window.pageYOffset > sticky) {
            headerDiv.classList.add("fixed");
        }else{
            headerDiv.classList.remove("fixed");
        }
    }
    
    window.onscroll = function() {scrollerFunction();}
});