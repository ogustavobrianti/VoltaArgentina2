<?php
class Mensagem {
    public $id;
    public $nome;
    public $email;
    public $mensagem;
    public function __construct($id = false){
        if($id){
            $this -> id=$id;
            $this -> carregar();
        }
     }

     public function inserir()
     {
         $sql = "INSERT INTO mensagens (nome, email, mensagem) VALUES (
             '".$this->nome."',
             '".$this->email."',
             '".$this->mensagem."'
         )";
         $conexao = new PDO('mysql:host=127.0.0.1;dbname=argentina', 'root', '');
         $conexao->exec($sql);
         echo "registro gravado com sucesso";
     }
     
    public function carregar()
    {
        $sql = "SELECT * FROM entra WHERE id = " . $this->id;
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=argentina','root','');
        $resultado = $conexao->query($sql);
        $linha = $resultado->fetch();
        $this->nome = $linha['nome'];
        $this->email = $linha['email'];
        $this->comentario = $linha['mensagem'];
   
    }

    public function listar(){
        $sql = "SELECT * FROM mensagens";
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=argentina','root','');
        $resultado = $conexao -> query($sql);
        $lista = $resultado ->fetchALL();
            return $lista;
        }

   
        public function atualizar()
        {
            $sql = "UPDATE entra SET
            nome = '".$this->nome."',
            email = '".$this->email."',
            comentario = '".$this->mensagem."',
             WHERE id_lugar = '".$this->id."'";
             $conexao = new PDO('mysql:host=127.0.0.1;dbname=argentina','root','');
             $conexao->exec($sql);
                    
        }
}

   

