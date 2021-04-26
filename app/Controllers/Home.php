<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		//$teste
		return view('welcome_message');
		$data['title'] = "Home";
		$data['conteudo'] = view('home/index');
		
		$this->modelo($data);
	}

	/**
	 * Método resonsável por listar contatos da agenda 
	 */
	public function contatos() : void
	{
		
		$data['title'] = "Contatos";
		$data['conteudo'] = view('home/index');
		
		$this->modelo($data);
	}

	/**
	 * Contato
	 */
	public function contato() : void 
	{

		$data['title'] = "Contato";
		$data['conteudo'] = view('home/index');
		
		$this->modelo($data);
	}

	/**
	 * Modelo da view
	 */
	public function modelo() : void
	{
		$menu['menus'] = [
			'Home' => base_url(),
			'Contatos' => base_url('contatos'),
			'Contato' => base_url('contato')
		];
		$data['navbar'] = view('home/padrao/navbar',$menu,['cache' => 60]);

		echo view('home/padrao/modelo',$data);
	}

	
}
