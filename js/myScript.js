function smoothScroll(element){
    document.querySelector(element).scrollIntoView({
        behavior: 'smooth'
    });
}
window.onscroll = function() {
    scroll();
}
function scroll(){
    if(document.body.scrollTop > 30  ||  document.documentElement.scrollTop > 30) {
        document.getElementById('up-button').style.display = "block";
    }  else {
        document.getElementById('up-button').style.display = "none";
    }
}
function scrollTop(){
    smoothScroll("header");
}
function reserve(book){
    var select = document.getElementById('book');
    var option = select.querySelector('option[value="'+book+'"]');
    option.setAttribute("selected","select");
    smoothScroll('#reservation');
}

