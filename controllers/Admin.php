<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index(){
		//Carregando model
		$this->load->model('Admin_model','admin');
		//Verifica se foi passado o campo busca.
		if ($this->input->post('busca') != NULL) {
			//Insere na variável $busca o valor de busca via post
			$busca = $this->input->post('busca');
			//Armazena no array os dados retornados do model pela função busca com o parâmetro $busca
			$data['usuarios'] = $this->admin->busca($busca);
			//Carregando a view com os dados retornados do model
			$this->load->view('listarUsuarios', $data);
		}
		else{
			//Pegando os dados do model
			$data['usuarios'] = $this->admin->getUsuarios();
			//Carregando a view com os dados do model
			$this->load->view('listarUsuarios', $data);
		}
		
	}

	public function add(){	
		//Carrega a View
		$this->load->view('addUsuarios');
	}

	//Função salvar no DB
	public function salvar(){
		//Carrega o Model Admin				
		$this->load->model('Admin_model', 'admin');
		//Pega dados do post e guarda na array $dados
		$dados['nome'] = $this->input->post('nome');
		$dados['data_nascimento'] = $this->input->post('data_nascimento');
		$dados['cpf'] = $this->input->post('cpf');

		//Verifica se foi passado via post a id do usuario
		if ($this->input->post('id_usuario') != NULL) {		
			//Se foi passado ele vai fazer atualização no registro.	
			$this->admin->editarUsuario($dados, $this->input->post('id_usuario'));
		} 
		else {
			//Se não foi passado id ele adiciona um novo registro
			//Executa a função do admin_model adicionar
			$this->admin->addUsuario($dados);
		}	

		//Fazemos um redicionamento para a página 		
		redirect(base_url());			
	}
	
	//Página de editar usuário
	public function editar($id){						
		//Verifica se foi passado um ID, se não vai para a página listar usuários
		if($id == NULL) {
			redirect(base_url());
		}

		//Carrega o Model Admin				
		$this->load->model('Admin_model', 'admin');

		//Faz a consulta no banco de dados pra verificar se existe
		$query = $this->admin->getUsuarioById($id);

		//Verifica que a consulta voltar um registro, senão vai para a página listar usuários
		if($query == NULL) {
			redirect(base_url());
		}
		
		//Criamos uma array onde vai guardar os dados do usuário e passamos como parametro para view;	
		$dados['usuario'] = $query;

		//Carrega a View
		$this->load->view('editarUsuarios', $dados);		
	}

	//Função Apagar registro
	public function apagar($id)
	{
		//Verifica se foi passado um ID, se não vai para a página listar usuários
		if($id == NULL) {
			redirect(base_url());
		}

		//Carrega o Model Imóveis				
		$this->load->model('Admin_model', 'admin');

		//Faz a consulta no banco de dados pra verificar se existe
		$query = $this->admin->getUsuarioByID($id);

		//Verifica se foi encontrado um registro com a ID passada
		if($query != NULL) {
			
			//Executa a função apagarUsuario do admin_model
			$this->admin->apagarUsuario($query->id_usuario);
			redirect(base_url());

		} 
		else {
			//Se não encontrou nenhum registro no banco de dados com a ID passada ele volta para página listar usuários
			redirect(base_url());
		}	
	}

	//Página de visualizar imóvel
	public function detalhes($id){						
		//Verifica se foi passado um ID, se não vai para a página listar usuários
		if($id == NULL) {
			redirect(base_url());
		}

		//Carrega o Model Admin				
		$this->load->model('Admin_model', 'admin');

		//Faz a consulta no banco de dados pra verificar se existe
		$query = $this->admin->getUsuarioByID($id);

		//Verifica que a consulta voltar um registro, se não vai para a página listar usuários
		if($query == NULL) {
			redirect(base_url());
		}
		
		//Criamos uma array onde vai guardar os dados do usuário e passamos como parametro para view;	
		$dados['usuario'] = $query;

		//Carrega a View
		$this->load->view('detalhesUsuarios', $dados);		
	}


}
