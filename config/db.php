

<?php



class Database{



    public static function connect(){

        //coneccion Local:
        $db = new mysqli('localhost','root','am_tienda');

        //conexion remota
        //$db = new mysqli ('localhost', u3abcdxyja123_admin_tienda...)

        $db-> query("SET NAMES 'utf8'");
    
    
        return $db;


    }
}
