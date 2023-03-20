const btn_menu = document.querySelector(". btn-menu");
const side_bar = document.querySelector(" .sidebar");

btn_menu.addEventListener("click", function(){
	side_bar.classList.toggle("expand");
});