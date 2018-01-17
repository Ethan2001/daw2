<script type="text/javascript" src="<?=base_url()?>assets/js/serialize.js"></script>
<script>
function enviar(){
		conector=new XMLHttpRequest();
		var datosSerializados = serialize(document.getElementById('formulario'));
		conector.open("POST",'<?=base_url()?>empleado/crearPost',true);
		conector.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		conector.send(datosSerializados);

		conector.onreadystatechange=function(){
			if(conector.readyState==4 && conector.status==200){
				
				document.getElementById('resultados').innerHTML= conector.responseText;
				}
			}

		
	}
</script>