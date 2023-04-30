var humburger_menu;
var big_wrapper;


function declare(){
    humburger_menu = document.querySelector(".humburger-menu");
    big_wrapper = document.querySelector(".big-wrapper");
}


declare();

function events() {
    humburger_menu.addEventListener("click", () => {
        big_wrapper.classList.toggle("active");
    });
}

events();