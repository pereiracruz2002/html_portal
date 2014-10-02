// JavaScript Document
$( document ).ready(function() {
	elementosPagina();
	
	// Limpa Marca Linha
	$(".seleciona").val('0');
	
	// Maskara ao abrir PopUps
	maskPagina();
	
	// Banner Meio da Tela
	$('#conteudoBanner').jcarousel({ auto: 15, wrap:'both', scroll:1 });

	var config = {
	  '.chosen-select'           : {},
	  '.chosen-select-deselect'  : {allow_single_deselect:true},
	  '.chosen-select-no-single' : {disable_search_threshold:10},
	  '.chosen-select-no-results': {no_results_text:'Oops, não encontrado!'},
	  '.chosen-select-width'     : {width:"95%"}
	}
	
	// Caso exista ou não exista Select:form
	if( $("body").find(".chosen-select").length >= 1){
		for (var selector in config) {
		  $(selector).chosen(config[selector]);
		}	
	}
	
	// Caso exista ou não exista Mascara Data
	if( $("body").find(".data").length >=1){
		$("body").find(".data").mask("99/99/9999"); 	
	}
	
	// Só numeros
	 $('.num').bind('keydown',soNums);
	 
	// Limitador de caracter
	$(".maxlength").keyup(function() {
		var limitar = $(this).attr('limit');
		var maxText = $(this).attr('maxsize');
		var limit   = maxText - ($(this).val().length);
		
		if( $(this).val().length >= maxText ){
			var res = $(this).val().substring(0,maxText);
			$(this).val(res);
			$("#"+limitar).html('Limite de caracter atingido');
		}else{
			if(limit <=1){
				$("#"+limitar).html("Resta " + limit + " caracter para digitar.");	
			}else{
				$("#"+limitar).html("Restam " + limit + " caracteres para digitar.");		
			}
		}
	});
  
});

function toolTip(){
	// Tooltip 01
	$(".tool").tooltip({ position: { my: "left right", at: "left+25 right" } });	
}

function elementosPagina(){
	var largura = $(window).width(); 
	var altura  = $(window).height();
	
	$("#conteudo").css('height', altura-10);
	$("#rodape").css('top', altura-126)	
}

window.onresize = function(event) {
	var largura = $(document).width(); 
	var altura  = $(document).height();
	maskPagina(largura, altura);
	elementosPagina();
};

function destino(url){
	window.location.href = url;
}

function login(action){
	if(action == 'mostrar'){
		$("#txtUsuario").val('');
		$("#txtSenha").val('');
	
		$("#maskara").fadeIn('slow');
		$("#login").fadeIn('fast');
		$("#txtUsuario").select();
	}else{
		$("#maskara").fadeOut('slow');
		$("#login").fadeOut('fast');
	}
}

function maskPagina(){
	$("#maskara").css("width", "100%");
	$("#maskara").css("height", "100%");
}

function abrirPopUp(div){
	$("#maskara").fadeIn('fast');
	$(div).fadeIn('slow');	
}

function fecharPopUp(div){
	$("#maskara").fadeOut('slow');
	$(div).fadeOut('fast');	
}

function marcaLinha(div, id){
	$(".btnExcluir").fadeIn('slow');
	$(".btnAlterar").delay(400).fadeIn('slow');
	
	$(".seleciona").val('0');
	$(div).val(id)
	
	$(".linCam").css("background-image", "");
	$(".linCam").css("background-color", "");
	$(".linCam").css("color", "");
	
	//$(div+"Sel").css("background-image", "url('imagens/linhaSelecionada.png')");
	$(div+"Sel").css("background-repeat", "repeat-x");
	$(div+"Sel").css("background-position", "left bottom");
	
	$(div+"Sel").css("background-color", "#739b33");
	$(div+"Sel").css("color", "#FFF");
}

function soNums(e){
     //teclas adicionais permitidas (tab,delete,backspace,setas direita e esquerda)
    keyCodesPermitidos = new Array(8,9,37,39,46);
     
    //numeros e 0 a 9 do teclado alfanumerico
    for(x=48;x<=57;x++){
        keyCodesPermitidos.push(x);
    }
     
    //numeros e 0 a 9 do teclado numerico
    for(x=96;x<=105;x++){
        keyCodesPermitidos.push(x);
    }
     
    //Pega a tecla digitada
    keyCode = e.which;
     
    //Verifica se a tecla digitada é permitida
    if ($.inArray(keyCode,keyCodesPermitidos) != -1){
        return true;
    }   
    return false;
}

function validarFormulario(){
	var contador = 0;
	$(".checarValidacao").each(function() {
		if( $(this).attr("validar") == 's' ){
			if( $(this).val() == '' ){
				contador++;
				$(this).css('border-color', '#df4e4e');
				$("#mensagem").fadeIn('slow');
				$("#mensagem").delay(10000).fadeOut('slow');
			}else{
				$(this).css('border-color', '');	
			}
		}
	});	
	
	if( contador == 0){
		$("#mensagem").fadeOut('slow');
		alert('Submet o formulário');
	}
}
/*















*/