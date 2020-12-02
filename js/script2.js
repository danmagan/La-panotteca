let imagenes= document.querySelectorAll(".gallery__img");

let modal= document.querySelector("#modal");

let img = document.querySelector("#modal__img");

let btn = document.querySelector("#modal__boton");

for(i = 0; i<imagenes.length; i++){
	imagenes[i].onclick = function(e){
		modal.classList.toggle("modal--open");
		let src =e.target.src;
		img.setAttribute("src", src);
	}
}

btn.onclick = function(){
	modal.classList.toggle("modal--open");
}