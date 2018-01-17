<html>
<head></head>
<script type="text/javascript">

function ajax(){
 var xmlhttp= new XMLHttpRequest();
 xmlhttp.open('GET','ajax.php?nombre=pepe',true);
 xmlhttp.send();
//document.getElementById("nombre").innerHTML='juan';	
}


</script>

<body>
<h1>el nombre es </h1>
<div id="nombre"></div>
<button type="button" onclick='ajax()'>nombre </button>
</body>

</html>

