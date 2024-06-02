let index = 0;
const slides = document.getElementsByClassName("slide");
const slidesAll = document.querySelector(".slides-all");
slidesAll.style.width = slides.length*100 + "%";
const dlzkaSlajdu = 100/slides.length;
const first_slide = document.querySelector(".first-slide")
for(let i of slides){
    i.style.width = dlzkaSlajdu + "%";
}
function showSlide(index){
    first_slide.style.marginLeft = -index * dlzkaSlajdu + "%"
}
function switchSlide(direction){
    index += direction;
    if(index < 0){
        index = slides.length-1;
    }
    else if(index > slides.length-1){
        index = 0;
    }
    showSlide(index);
}
const prev_button = document.getElementById("prev");
const next_button = document.getElementById("next");
prev_button.addEventListener("click", function(){
    switchSlide(-1)
})
next_button.addEventListener("click", function(){
    switchSlide(1)
})