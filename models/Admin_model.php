<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	
	public function busca($busca){
		//Consulta na tabela
		$query = $this->db->query("SELECT * FROM usuario AS u WHERE u.nome LIKE '%".$busca."%'");
		//Retorna resultado da consulta
		return $query->result();
	}

	public function getUsuarios(){
		//Consulta na tabela
		$query = $this->db->get('usuario');
		//Retorna resultado da consulta
		return $query->result();
	}

	public function addUsuario($dados){
		if ($dados != NULL):
			$this->db->insert('usuario', $dados);		
		endif;
	}

	//Pegar usuário pelo id
    	public function getUsuarioByID($id){
	    	if ($id != NULL):
	        	//Verifica se a ID no banco de dados
	        	$this->db->where('id_usuario', $id);        
	        	//limita para apenas um regstro    
	        	$this->db->limit(1);
	        	//pega o usuário
	        	$query = $this->db->get("usuario");        
	        	//retornamos o usuário
	        	return $query->row();   
	    	endif;
   	 } 

    	//Atualizar um usuário
    	public function editarUsuario($dados, $id){
	    	//Verifica se foi passado $dados e $id    
	    	if ($dados != NULL && $id != NULL):
	        	//Se foi passado ele vai a atualização
	        	$this->db->update('usuario', $dados, array('id_usuario'=>$id));      
	    	endif;
    	}   

    	//Apaga um usuário
    	public function apagarUsuario($id){
		//Verificamos se foi passado o a ID como parametro
		if ($id != NULL):
		    //Executa a função DB DELETE para apagar o usuário
		    $this->db->delete('usuario', array('id_usuario'=>$id));            
		endif;
    	} 

}
