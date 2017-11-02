  $(document).ready(function(){
        $('.log-btn').click(function(){
            $('.log-status').addClass('wrong-entry');
           $('.alert').fadeIn(500);
           setTimeout( "$('.alert').fadeOut(1500);",3000 );
        });
        $('.form-control').keypress(function(){
            $('.log-status').removeClass('wrong-entry');
        });

    });

  //Adicionar nova linha na tabela
  function clonarLinha(){
    var row = document.getElementById("linhaParaClonar");
    var table = document.getElementById("tabelaCorpo");
    var clone = row.cloneNode(true);
    clone.id = "linhaClonada";
    table.appendChild(clone);
  }

  //Remover ultima linha na tabela
  function removerLinha(){

  }