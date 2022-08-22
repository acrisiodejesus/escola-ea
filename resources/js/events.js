const btna = document.querySelectorAll(".formItem ");
const start=0;
const btn_avancar=document.getElementById("avancar")
const dropDow = document.getElementById("dropDow")
const drop= document.getElementById("drop")

for (let start = 0; start < btna.length; start++) {
  const element = btna[start];
  console.log(element)
  
}
console.log(btna)

const formItem = document.getElementsByClassName("formItem");
const logo = document.getElementById('logo');

const header =   document.getElementsByClassName("header")

    document.getElementById('logo').src="/files/image/logosite.png";

for (let index = 0; index < formItem.length; index++) {
console.log(formItem)    
    
}

const img = document.getElementById("logo")
console.log(img.getAttribute('src'))

var className = "bg-white";
var scrollTrigger = 60;

window.onscroll = function() {
  // We add pageYOffset for compatibility with IE.
  if (window.scrollY >= scrollTrigger || window.pageYOffset >= scrollTrigger) {
    header[0].classList.add(className);
    dropDow.classList.add("md:text-black")
    dropDow.classList.remove("md:text-white")

    header[0].classList.remove('md:bg-black');
    header[0].classList.remove('md:bg-black');
    logo.src="/files/image/logosite.png";
    header.style.heigth="100px"
    
  } else {
    header[0].classList.remove(className);
    header[0].classList.add('md:bg-black');
    logo.src="/files/image/logo-ligth.png";
    dropDow.classList.add("md:text-white")
    dropDow.classList.remove("md:tex-black")
  }
};

let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("slides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}

const btnShow = document.getElementById("btnShow");
const btnHidden = document.getElementById("btnHidden");

btnShow.addEventListener("click",(e)=>{
  e.preventDefault();

  dropDow.classList.add("flex");
  dropDow.classList.remove('hidden');
  btnShow.classList.add("hidden")

  btnHidden.classList.add("flex")
  btnHidden.classList.remove("hidden")
})

btnHidden.addEventListener("click",(e)=>{
  e.preventDefault();

  dropDow.classList.add("hidden");
  dropDow.classList.remove('flex');
  btnShow.classList.add("flex");
  btnShow.classList.remove("hidden");
  btnHidden.classList.add("hidden")
})

