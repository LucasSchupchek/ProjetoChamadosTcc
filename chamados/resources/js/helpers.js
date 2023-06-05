const btn = document.querySelector("#btn-comentario");

btn.addEventListener("click", function(e){
    e.preventDefault();
    const name = document.querySelector("#comentario")
    const value = name.value;

    console.log(value)
})