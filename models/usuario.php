<?php





class Usuario{

    private $id;
    private $nombre;
    private $apellidos;
    private $password;
    private $rol;
    private $email;
    private $imagen;

    //coneccion bd
    private $db;

    public function __construct(){

        $this->db = Database::connect();
    }


    function getNombre(){

        return $this->nombre;
    }
    
    function getApellidos(){
           return $this->apellidos;
    
    }
    
    function getPassword(){
        return $this->password;
    
    }
    
    function getEmail(){
        return $this->email;
    }

    function getRol(){
        return $this->rol;
    }

    function getImagen(){
        return $this->imagen;
    }



    function setId($id){

        $this->id = $id;
    }


    function setNombre($nombre){

        $this->nombre = $this->db->real_escape_string($nombre);

    }


    function setApellidos($apellidos){

        $this->apellidos = $this->db->real_escape_string($apellidos);

    }


    
    function setEmail($email){

        $this->email = $this->db->real_escape_string($email);

    }

    
    function setPassword($password){

        $this->password= password_hash( $this->db->real_escape_string($password),PASSWORD_BCRYPT,['cost'=>4]);

    }

    
    function setRol($rol){

        $this->rol = $this->db->real_escape_string($rol);

    }

    
    function setImagen($imagen){

        $this->imagen = $this->db->real_escape_string($imagen);

    }


    public function getAllUsers(){

        echo "obetiniendo Todos los usuarios...";
    
    }

    public function save(){
        //consulta sql con los datos "parametrizados"
        $sql = "INSERT INTO t_usuarios values(null, '{$this->getNombre()}','{$this->getApellidos()}', '{$this->getEmail()}', '{$this->getPassword()}', 'user' , NULL )'";
        $save = $this->db->query($sql);


        $result = false;

        if($save){

            $result = true;
        }

        return $result;


    }


}









