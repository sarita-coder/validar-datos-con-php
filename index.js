function validarDatosGET(){
	var verificar=true;
			
	if(!document.valida_datos_get_frm.nombre_txt.value){
		alert("El campo del nombre es requerido");
		document.valida_datos_get_frm.nombre_txt.focus();
		verificar=false;
	} else if (!document.valida_datos_get_frm.password_txt.value){
		alert("El campo del password es requerido");
		document.valida_datos_get_frm.password_txt.focus();
		verificar=false;
	} else if(!document.valida_datos_post_frm.sexo_rdo[0].checked && !document.valida_datos_get_frm.sexo_rdo[1].checked){
		alert("Tiene que ser requerido");
		document.valida_datos_post_frm.sexo_rdo[0].focus();
		verificar=false;
	}
	if(verificar){
		document.valida_datos_get_frm.submit();
	}
			
}
function validarDatosPOST(){
	var verificar=true;
			
	if(!document.valida_datos_post_frm.nombre_txt.value){
		alert("El campo del nombre es requerido");
		document.valida_datos_post_frm.nombre_txt.focus();
		verificar=false;
	} else if (!document.valida_datos_post_frm.password_txt.value){
		alert("El campo del password es requerido");
		document.valida_datos_post_frm.password_txt.focus();
		verificar=false;
	} else if(!document.valida_datos_post_frm.sexo_rdo[0].checked && !document.valida_datos_post_frm.sexo_rdo[1].checked){
		alert("Tiene que ser requerido");
		document.valida_datos_post_frm.sexo_rdo[0].focus();
		verificar=false;
	}
	if(verificar){
		document.valida_datos_post_frm.submit();
	}
			
}
window.onload = function(){
	document.getElementById("enviar-get").onclick = validarDatosGET;
	document.getElementById("enviar-post").onclick = validarDatosPOST;
}	