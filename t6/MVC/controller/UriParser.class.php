<?php
class  UriParser{
 public static function  getBaseName(){
 	//divido mi uri en partes dividido con un separador /
 	$uribase=explode('/',$_SERVER['REQUEST_URI']);
 	$urimodificada=explode('/',$_SERVER['SCRIPT_NAME']);
 	//tamaño de la uri
 	$tamanomodificada=sizeof($urimodificada)-1;
 	/*comparo el ultimo valor  sea vacio o index si es asi el 
 	ultimo valor es home*/ 
   if($uribase[$tamanomodificada]=='' || $uribase[$tamanomodificada]=='index.php'){
  	$baseName='home';
  }
  else{
  	/* si no dejo el ultimo valor sigue igual
  	 * */
  	$baseName=$uribase[$tamanomodificada];
  } 
  /* saco solo el ultimo valor*/
  return $baseName;
 
 }
  public static function  getActionName(){
  	$uribase=explode('/',$_SERVER['REQUEST_URI']);
  	$urimodificada=explode('/',$_SERVER['SCRIPT_NAME']);
  	if (sizeof($uribase)>sizeof($urimodificada)) {
  		$actionName=$uribase[sizeof($urimodificada)]
  		;
  	}else{
  		$actionName='index';
  	}
  	return $actionName;
  	
  }
  public static function getControllerName(){
  	return UriParser::getBaseName().'Controller';
  }
  public static function getBaseUri(){
  	$urimodificada=explode('/',$_SERVER['SCRIPT_NAME']);
  	$uri=$_SERVER['REQUEST_SCHEME'];
  	$uri .='://';
  	$uri .=$_SERVER['SERVER_NAME'];
  	$uri .='/';
  
  	for ($i=1;$i<sizeof($urimodificada)-1;$i++){
  		$uri .= ($urimodificada[$i].'/');
  	}
  	return $uri;
  }
  
 
}
$y= new UriParser();
 echo $y->getBaseName().' '.
 $y->getActionName()." ".
 $y->getBaseUri()." ".
 $y->getControllerName();
?>