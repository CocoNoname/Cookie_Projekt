const form = document.querySelector("form");
form.addEventListener("submit", function(){
    is_data_valid(this)
})
function is_data_valid(formular){
    const meno = formular.querySelector("input[type=text]").value;
    if(meno.length < 2){
        event.preventDefault()
        alert("Meno musi obsahovať aspoň 2 symboly");
    }
}