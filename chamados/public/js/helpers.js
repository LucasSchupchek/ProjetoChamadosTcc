const btn = document.getElementById("btn-comentario");

btn.addEventListener("click", function(e){
    e.preventDefault();
    const name = document.getElementById("comentario")
    const id = document.getElementById("id_user");
    const value = name.value;
    const value_id = id.value;

    $.ajax({
        url: '/chamados/comentario',
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
          id: value_id,
          comentario: value
        },
        success: function(response) {
          console.log(response);
          console.log(refreshComments(value_id, 'conteudo_comentario'));
        },
        error: function(error) {
          console.error(error);
        }
      });

      name.value = '';
})

function refreshComments(id_chamado, content){
    let url = `/chamadoComentarios/${id_chamado}`;
    const container = document.getElementById(content);
    const xml = new XMLHttpRequest();
    xml.onreadystatechange = function(){
        if(xml.readyState === 4 && xml.status == 200){
            container.innerHTML = xml.responseText;
        }
    }
    xml.open("GET", url);
    xml.send();
}

window.onload = function() {
    const url_atual = window.location.href;
    const chamado_id = url_atual[url_atual.length - 1]
    refreshComments(chamado_id, 'conteudo_comentario')
}