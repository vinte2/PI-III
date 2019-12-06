<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 public function __construct()
	{
		parent::__construct();
		$this->load->model('Main_model', 'Main');
	}

	public function getShart() {
		$ano = !empty($_POST['ano']) ? $_POST['ano'] : 'vaga1ano';
		echo json_encode($this->Main->getEscolas());
	}

	public function index()
	{
		$data['ano'] = !empty($_POST['ano']) ? $_POST['ano'] : 'vaga1ano';
		$data['escolas'] = $this->Main->getEscolas();
		$data['viewName'] = 'home';
		$this->load->view('template', $data);
	}


	public function cadastrar($id_escola, $vaga) {
		// $escolas = $this->Main->options_escolas();
		// $data['escolas'] = $escolas;
		
		$escola = $this->Main->getEscolaID($id_escola, $vaga);
		$data['escola'] = $escola[0]['nomeescola'];
		$data['idescola'] = $escola[0]['idescola'];
		$data['turma'] = $vaga;
		$data['id_escola'] = $id_escola;

		$data['viewName'] = 'formCadastroAlunos';
		$this->load->view('template', $data);
	}

	public function buscaCep() {
		$cep = $this->input->post('cep');
		$this->load->library('buscaCep/curl');  

		echo json_encode($this->curl->consulta($cep));

	}

	public function contactform() {

		if( file_exists($php_mail_form_library = '../../assets/lib/php-mail-form/php-mail-form.php' )) {
			include( $php_mail_form_library );
		} else {
			die( 'Unable to load the PHP Mail Form Library!');
		}
	
		$contactform = new PHP_Mail_Form;
		$contactform->ajax = true;
	
		// Replace with your real receiving email address
		$contactform->to = 'dntcordova@hotmail.com';
		$contactform->from_name = $_POST['name'];
		$contactform->from_email = $_POST['email'];
		$contactform->subject = $_POST['subject'];
	
		$contactform->add_message( $_POST['name'], 'From');
		$contactform->add_message( $_POST['email'], 'Email');
		$contactform->add_message( $_POST['message'], 'Message', 10);
	
		echo $contactform->send();
		  
	}

	public function cadastro() {
		$ano = str_replace('vagas', '' , $_POST['turma']);
		$ano = str_replace('ano', '° ano', $ano);

		$id_endereco = $this->Main->cadastroEndereco($_POST['cep'], $_POST['endereco'], $_POST['bairro'], $_POST['numero_endereco']); 
		$id_responsavel = $this->Main->cadastroResponsavel($_POST['nomeresponsavel'], $_POST['cpf_responsavel'], ($_POST['email'] != '') ? $_POST['email'] : '', $id_endereco, $_POST['telefone_responsável'], $_POST['parentesco']);
		$id_aluno = $this->Main->cadastroAluno($_POST['nome_aluno'], $_POST['cpf_aluno'], $_POST['nascimento_aluno'], $id_responsavel, $_POST['id_escola'], $_POST['turma']);
		$protocolo_id = $this->Main->cadastroProtocolo($id_aluno, $ano, $_POST['turno']);
		
		$this->Main->AlteraNumVafas($_POST['id_escola'], $_POST['turma']);

		redirect('Home/protocolo/'. $protocolo_id);
	}

	public function protocolo($id_protocolo) {
		$data['ProtGerado'] = $this->Main->getProtocolo($id_protocolo);
		$data['id_protocolo'] = $id_protocolo;
		$data['viewName'] = 'protocolo';
		$this->load->view('template', $data);
	}

	
	public function pdfProtocolo() {
		$this->load->library('tcpdf/Tcpdf');  

		$ProtGerado = $this->Main->getProtocolo($this->input->post('id_protoclo'));
		$data['nome'] = $ProtGerado['nome'];
		$data['numero'] = $ProtGerado['numero'];
		$data['nomeescola'] = $ProtGerado['nomeescola'];
		$data['data'] =  date('d/m/Y', strtotime($ProtGerado['data']));
		$data['horas'] = date('H:i',  strtotime($ProtGerado['data']));
		$data['ano'] = $ProtGerado['ano'];
		$data['turno'] = $ProtGerado['turno'];
		$this->load->view('PdfProtocolo', $data);
	}

}
