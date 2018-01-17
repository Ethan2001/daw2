<!-- 
	Incluir en �utilHTML.php� una funci�n llamada pintarRadio($nombre, $arrayValueLabel, $seleccionado), 
	que devuelva el c�digo HTML para un grupo de botones de radio, que compartan el atributo name con el
    valor indicado en $nombre y que tenga cada uno un �value� correspondiente a las claves del array asociativo 
    $arrayValueLabel y una etiqueta correspondiente al valor del array asociativo $arrayValueLabel. 
    Opcionalmente puede tener un par�metro �seleccionado� que indicar�a (en t�rminos del value) qu� radio 
    button est� seleccionado por defecto (podr�a no haber ninguno)
	P.ej. la llamada pintarRadio(�aficion�,[�D�=>�Deporte�, �C�=>�Cine�],�C�) devolver�a el siguiente c�digo HTML.
<input type="radio" name="aficion" value="D" id="D">
<label for="D">Deporte</label><br />
<input type="radio" name="aficion" value="C" id="C" checked=�checked�>
<label for="C">Cine</label><br /> -->
    
<?php
 function pintaradio($nombre,$arrayValueLabel,$selecionado) {
 $texto='';
 foreach ($arrayValueLabel as $k=>$v){
 $texto .=("<input type='radio' 'name='.'$nombre'  value='$k' id='$k'");
 if($selecionado==$k){
 $texto.="checked='checked'";
 }
 $texto .="/>";

 $texto .=("<label for=$k>$v</label>");}

 return $texto;
 }; 

function checkbox($nombre,$arrayValueLabel,$seleccionados){
 $texto='';
 foreach ($arrayValueLabel as $k=>$v){
 $texto .="<input type='checkbox' 'name='$nombre'  value='$k' id='$k' ";
 if($seleccionados==$nombre){
 $texto.="checked='checked'";
 }
 $texto .="/>";

 $texto .=("<label for=$k>$v</label>");}

 return $texto;
 }; 
echo pintaradio('aficion',['D'=>'Deporte', 'C'=>'Cine'],'C');
echo checkbox('aficion',['D'=>'Deporte', 'C'=>'Cine'],'aficion');

 function pintarCheckboxes($nombre,$arrayValueLabel,$seleccionados=[]) {

$texto='';
foreach ($arrayValueLabel as $k=>$v){
$texto .="<input type='checkbox' 'name='$nombre'  value='$k' id='$k' ";
if (in_array($k,$seleccionados)){
$texto .= "checked='checked'";
};
$texto .="/>";

$texto .=("<label for=$k>$v</label>");}

return $texto;
;
}


echo pintarCheckboxes('deporte',['F'=>'Futbol', 'T'=>'Tenis', 'V'=>'Vela'], ['F', 'V']) 
?>