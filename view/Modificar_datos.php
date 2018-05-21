<?php
class Login extends TwigView {

    public function show() {

	    $templateDir="./templates";
	    $loader = new Twig_Loader_Filesystem($templateDir);
	    $twig = new Twig_Environment($loader);
    	$template = $twig->loadTemplate("modificar_datos.html.twig");
    	$rol = $_SESSION['rol'];
    	$template->display(array('rol' => $rol));
    }
}
?>