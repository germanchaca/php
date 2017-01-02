<?php
namespace MVC;
require __DIR__ . '/../vendor/autoload.php';

//Global config
require_once 'config/global.php';

require_once 'core/BaseController.php';

require_once 'core/FrontController.func.php';

//Load controllers and actions
if(isset($_GET["controller"])){
    $controllerObj=cargarControlador($_GET["controller"]);
    lanzarAccion($controllerObj);
}else{
    $controllerObj=cargarControlador(CONTROLADOR_DEFECTO);
    lanzarAccion($controllerObj);
}
		//Http requuest use example
		
		$request = new \Http\HttpRequest($_GET, $_POST, $_COOKIE, $_FILES, $_SERVER);
		$response = new \Http\HttpResponse;
		
		$content = '<h1>Hello World</h1>';
		$response->setContent($content);
		
		//$response->setContent('404 - Page not found');
		//$response->setStatusCode(404);
		
		foreach ($response->getHeaders() as $header) {
			header($header, false);
		}

		echo $response->getContent();
    

?>
