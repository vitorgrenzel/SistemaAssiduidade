//Vibrar campo de senha ao digitar uma senha incorreta
$(document).ready(function () {
    $('.log-btn').click(function () {
        $('.log-status').addClass('wrong-entry');
        $('.alert').fadeIn(500);
        setTimeout("$('.alert').fadeOut(1500);", 3000);
    });
    $('.form-control').keypress(function () {
        $('.log-status').removeClass('wrong-entry');
    });
});

/* Adicionar nova linha na tabela
 function clonarLinha() {
 var row = document.getElementById("linhaParaClonar");
 var table = document.getElementById("tabelaCorpo");
 var clone = row.cloneNode(true);
 clone.id = "linhaClonada";
 // clone.name = clone.name + 1;
 table.appendChild(clone);
 }*/

//Adicionar nova linha na tabela Registrar projeto
var campos_max = 10;   //max de 10 campos
var x = 1;
function clonarLinha() {
    if (x <= campos_max) {
        $('#tabelaCorpo').append('<tr id="linhaClonada">\
                            <td>\n\
                                <select class="form-control" name="bolsista[]"></select>\
                            </td>\n\
                             <td><label class="radio-inline">\n\
                             <input type="radio" name="vinculo[' + x + ']" value="1">Bolsista</label>\
                             <label class="radio-inline">\
                             <input type="radio" name="vinculo[' + x + ']" value="2">Voluntário</label>\
                            </td>\
                            <td>\
                            <input type="number" name="horas[' + x + ']" class="form-control" /></td>\
                            <td>\
                                <input type="button" class="btnX btn btn-danger" value="X">\
                            </td>\
                            </tr>');
        x++;
        //saber quantos bolsistam existem, pra colocar na tabela n:n
    }
}

// Remover linha ao clicar no icone
$(document).on('click', 'input.btnX', function () {
    $(this).closest('tr').remove();
    x--;
});

//Adicionar nova linha na tabela Assiduidade
var campos_max = 10;   //max de 10 campos
var x = 1;
function adicionarLinha() {
    if (x <= campos_max) {
        $('#tabelaCorpo').append('<tr id="linha">\
                                    <td><input type="date" class="form-control" /></td>\
                                    <td><input type="time" class="form-control" /></td>\
                                    <td><input type="number" class="form-control" /></td>\
                                    <td><input type="text" class="form-control " /></td>\
                                </tr>');
        x++;
    }
}

//Alerta ao tentar sair do formulário com ele preenchido
function formVazio() {
    var formObject = $('.titulo');
    formObject.data('registrarProjeto', formObject.serialize());

    $(':submit').click(function () {
        window.onbeforeunload = null;
    });

    window.onbeforeunload = function () {
        if (formObject.data('registrarProjeto') !== formObject.serialize()) {
            return "As mudanças deste formulário não foram salvas. Saindo desta página, todas as mudanças serão perdidas.";
        }
    };
}

// Campo autocomplete que busca no banco o titulo do projeto
$('.tituloProj').select2({
    placeholder: 'Selecione um item',
    ajax: {
        url: '../php/ajaxpro.php',
        dataType: 'json',
        delay: 250,
        processResults: function (data) {
            return {
                results: data
            };
        },
        cache: true
    }
});

// Campo autocomplete que busca no banco o nome do aluno
$('.bolsista[]').select2({
    placeholder: 'Selecione um item',
    ajax: {
        url: '../php/ajaxSelectAluno.php',
        dataType: 'json',
        delay: 250,
        processResults: function (data) {
            return {
                results: data
            };
        },
        cache: true
    }
});