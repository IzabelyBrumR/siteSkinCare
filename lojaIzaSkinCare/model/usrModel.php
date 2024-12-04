<?php
require_once 'ConexaoMysql.php';
class usrModel {
    
    public  $id;
    public  $nome;
    public  $email;
    public  $senha;
    public  $tipo_usuario;

    public function __construct() {
        //vazio
    }
   public function getId() {
       return $this->id;
   }
   public function getNome() {
       return $this->nome;
   }
   public function getEmail() {
       return $this->email;
   }
   public function getSenha() {
       return $this->senha;
   }
   public function getTipo_usuario() {
    return $this->tipo_usuario;
}
   public function setId($id): void {
       $this->id = $id;
   }
   public function setNome($nome): void {
       $this->nome = $nome;
   }
   public function setEmail($email): void {
       $this->email = $email;
   }

   public function setSenha($senha): void {
       $this->senha = $senha;
   }
   public function setTipo_usuario($tipo_usuario): void {
        $this->tipo_usuario = $tipo_usuario;
}

    //Métodos especialistas
    public function loadAll() {
        //Criar um objeto de conexão
        $db = new ConexaoMysql();
        //Abrir conexão com banco de dados
        $db->Conectar();
        //Criar consulta
        $sql = 'SELECT * FROM usuario';
        //Executar método de consulta
        $resultList = $db->Consultar($sql);
        //Desconectar do banco
        $db->Desconectar();
        return $resultList;
    }  
    function cadastro($nome,$email,$senha,$tipo_usuario) {
        $db = new ConexaoMysql();
        $db->Conectar(); 
        $sql = 'INSERT INTO usuario (nome,email,senha,tipo_usuario) values ("'.$nome.'","'.$email.'","'.$senha.'","'.$tipo_usuario.'")';
        $db->Executar($sql);    
        $db->Desconectar();
        return $db->total;
     }
     
    public function isAdmin($email){
        $db = new ConexaoMysql();
        $db->Conectar(); 
        $sql = 'SELECT * from usuario where email = "'.$email.'";';
        $consulta = $db->Consultar($sql);    
        $db->Desconectar();

        foreach($consulta as $usr){
            if($usr['tipo_usuario'] == 1){
                return 1;
            }else{
                return 0;
            }
        }
    }

    public function login($email,$senha){
        $db = new ConexaoMysql();
        $db->Conectar();
        $db->Consultar('SELECT * from usuario where email = "'.$email.'" AND senha = "'.$senha.'"');
        $db->Desconectar();
        return $db->total;
    }

    public function idByEmail($email){
        $db = new ConexaoMysql();
        $db->Conectar();
        $consulta = $db->Consultar('SELECT * from usuario where email = "'.$email.'"');
        $db->Desconectar();
        foreach($consulta as $usr){
            return $usr['id'];
        }
    }
}
?>