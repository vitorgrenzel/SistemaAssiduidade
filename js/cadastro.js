$(document).ready(function(){

    var validado = false;
    $('#id_senha').focusout(function(){
      var pass = $('#senha').val();
      var pass2 = $('#id_senha').val();
        if(pass != pass2){
            alert('A senha está incorreta!');
            validado=false;
        }else{
          validado = true;
        }

    });
    
    $('#id_email').focusout(function(){
      var pass = $('#email').val();
      var pass2 = $('#id_email').val();
        if(pass != pass2){
            alert('O e-mail está incorreto!');
            validado=false;
        }else{
          validado = true;
        }

    });
    $('#assiduidade-Extensao').submit(function(){
      return validado;
    });
    
    
	  $('#estado').change(function(){ 	//quando o valor do estado mudar
    $("#cidade").empty(); //limpa os valores anteriores
		var estado=$('#estado').val(); //pega o valor do estado
    if(estado=="" || estado==undefined){
      return false;
    }
		$.ajax({			//Função AJAX
			url:"../pages/dados.php",			//Arquivo php
			type:"post",				//Método de envio
      data: "funcao="+1+"&estado="+estado,	//Dados
	   		success: function (data){			//Sucesso no AJAX
	                	var json = $.parseJSON(data);
                    $(json).each(function (i, val){ //para cada resultado
                      $("#cidade").append($("<option>").attr("value", val.id).text(val.nome)); //adicione uma nova opcao no html na tag <select>
                    });
	            	}
		})
		return false;	//Evita que a página seja atualizada
	})
  
})