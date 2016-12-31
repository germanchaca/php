<?php
class UsuariosController extends ControladorBase{
    public $conectar;
	public $db;
	
    public function __construct() {
        parent::__construct();
		
        $this->conectar=new Conectar();
        $this->db=$this->conectar->conexion();
    }
    
    public function index(){
        
        //Creamos el objeto usuario
        $usuario=new Usuario($this->db);
        
        //Conseguimos todos los usuarios
        $allusers=$usuario->getAll();

		//Producto
        $producto=new Producto($this->db);
		$allproducts=$producto->getAll();
       
        //Cargamos la vista index y le pasamos valores
        $this->view("index",array(
            "allusers"=>$allusers,
			"allproducts" => $allproducts,
            "Hola"    =>"Soy Víctor Robles"
        ));
		
		$session = new Session('sessions', $this->db);
		if( ! isset( $_SESSION['counter'] ) ){
			$_SESSION['counter'] = 0;
		}
		// Increase counter
		$_SESSION['counter']++;
		echo "session number: " . $_SESSION['counter'];
	
    }
    
    public function crear(){
        if(isset($_POST["nombre"])){
            
            //Creamos un usuario
            $usuario=new Usuario($this->db);
            $usuario->setNombre($_POST["nombre"]);
            $usuario->setApellido($_POST["apellido"]);
            $usuario->setEmail($_POST["email"]);
            $usuario->setPassword(sha1($_POST["password"]));
            $save=$usuario->save();
        }
        $this->redirect("Usuarios", "index");
    }
    
    public function borrar(){
        if(isset($_GET["id"])){ 
            $id=(int)$_GET["id"];
            
            $usuario=new Usuario($this->db);
            $usuario->deleteById($id); 
        }
        $this->redirect();
    }
    
    
    public function hola(){
        $usuarios=new UsuariosModel($this->db);
        $usu=$usuarios->getUnUsuario();
        var_dump($usu);
    }

}
?>
