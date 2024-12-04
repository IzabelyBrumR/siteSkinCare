<?php

class pedidoModel{
    public function createPedido($valor_total,$usuario_id){
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'INSERT INTO pedidos values (null, curdate(), null, "Em análise", '.$valor_total.', '.$usuario_id.');';
        $id = $db->Executar($sql);
        $db->Desconectar();
        if($db->total){
            return $id;
        }else{
            return 0;
        }
    }
    public function insertItens($carrinho,$idPedido){
        $db = new ConexaoMysql();
        $db->Conectar();
        foreach($carrinho as $id => $quantidade){
            $sql = 'INSERT INTO pedidos_item values (null,'.$id.','.$quantidade.','.$idPedido.');';
            $db->Executar($sql);
        }
        $db->Desconectar();
        return $db->total;
    }

    public function confirmarPedido($idPedido){
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'UPDATE pedidos SET status_pedido = "Aprovado", data_aprovacao = curdate() WHERE id = '.$idPedido;
        $db->Executar($sql);
        $db->Desconectar();
        return $db->total;
    }

    public function recusarPedido($idPedido){
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'UPDATE pedidos SET status_pedido = "Recusado" WHERE id = '.$idPedido;
        $db->Executar($sql);
        $db->Desconectar();
        return $db->total;
    }

    public function getAllNotAproved(){
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'SELECT * from pedidos where status_pedido = "Em análise";';
        $consulta = $db->Consultar($sql);
        $db->Desconectar();
        return $consulta;
    }

    public function getAllAproved(){
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'SELECT * from pedidos where status_pedido = "Aprovado";';
        $consulta = $db->Consultar($sql);
        $db->Desconectar();
        return $consulta;
    }

    public function getAllAprovedById($usuario_id){
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'SELECT * from pedidos where usuario_id = '.$usuario_id.';';
        $consulta = $db->Consultar($sql);
        $db->Desconectar();
        return $consulta;
    }


}