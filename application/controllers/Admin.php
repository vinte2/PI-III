<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	 public function __construct()
	{
		parent::__construct();
		$this->load->model('Main_model', 'Main');
		$this->load->model('Admin_model', 'Admin');
	}

	public function adminhomepage() {
		if(!empty($_SESSION['login'])  && $_SESSION['login'] == 1) {
			$data['viewName'] = 'AdminPages/AdminHomePage';
			$this->load->view('template', $data);
		}else{
			$this->load->view('AdminPages/login');
		}
    }

    public function entrar() {

        // carregando os dados do formulario de login
        if(isset($_POST["email"]) && $_POST['email'] != '') {
            
            $email = !empty($_POST["email"]) ? addslashes($_POST["email"]) : '';
            $password = !empty($_POST["password"]) ? addslashes(md5($_POST["password"])) : '';

            // pegando os dados do usuario no banco de dados
            $usuarios_info = $this->Admin->login();
            
            if(count($usuarios_info[0]) > 1) {
                    
               
                // com os dados corretos carregados uma seria de $_Session sao configurados
                foreach($usuarios_info as $info) {
                    $userEmail              = $info["email"];
                    $userPassword           = $info["password"];
                    $_SESSION["usuario"]    = $info["nome"];
                    $_SESSION["nivel"]      = $info["nivel"];
                    $_SESSION['id_usuario'] = $info['id'];
                    
                    
                    if($email == $userEmail&& $password == $userPassword) {
                        $_SESSION["logado"] = "true";
                        
                        $_SESSION['donoDaSessao'] = md5('seq'.$_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
                        
                       redirect('Admin/home');
                    }else{
                        $_SESSION["logado"] = "false";
                        redirect('Admin/adminhomepage');
                    }
                };
            }else{
                $_SESSION["logado"] = "false";
                redirect('Admin/adminhomepage');
            }
        }
    }

    public function home() {
        $data['escolas'] = $this->Main->getEscolas();

        $data['viewName'] = 'AdminPages/AdminHomePage';
        $this->load->view('template', $data);
    }

    public function cadastrados($id_escola) {
        $turmas = ['vagas1ano', 'vagas2ano', 'vagas3ano', 'vagas4ano', 'vagas5ano', 'vagas6ano', 'vagas7ano', 'vagas8ano', 'vagas9ano'];
        foreach($turmas as $info) {
            $data[$info] = $this->Admin->getCadastradosGroup($id_escola, $info);
            $data[$info][1] =  str_replace('vagas', '', $info);
            $data[$info][1] =  str_replace('ano', '° ano', $data[$info][1]);
            $data[$info][2] = $info;
        }
   
        $escola = $this->Main->getEscolaID($id_escola);
        $data['escolaNome'] = $escola[0]['nomeescola'];
        $data['id_escola'] = $escola[0]['idescola'];
        $data['viewName'] = 'AdminPages/cadastrados';
        $this->load->view('template', $data);
    }

    public function relatorioCadastrados($id_escola, $turma) {
        $data['cadastrados'] = $this->Admin->getCadastrados($id_escola, $turma);
  
        $data['escola'] =  $data['cadastrados'][0]['nomeescola'];
        $data['idescola'] =  $id_escola;

        $data['viewName'] = 'AdminPages/relatorioCadastrados';
        $this->load->view('template', $data);
    }

    public function viewEscola($idescola) {
        $data['escolas'] = $this->Main->getEscolaIDAdmin($idescola);
        $data['viewName'] = 'AdminPages/viewVagas';
        $this->load->view('template', $data);
    }

    public function cadastrarEscola() {
        if(!empty($_POST)) {
            $id_dado = $this->Admin->cadastrarEscola($_POST);
            $this->Admin->log($_SESSION['id_usuario'], 'cadastrarEscola', $id_dado, 'cadastro de uma nova escola');
            redirect('Admin/home');
        }else{
            $data['viewName'] = 'AdminPages/cadastrarEscola';
            $this->load->view('template', $data);
        }
    }

    public function alteraVagas() {
        
        if(!empty($_POST)) {
            $id_dado = $this->Admin->alteraVagas($_POST);
            $this->Admin->log($_SESSION['id_usuario'], 'alteraVagas', $id_dado, 'alteradondo numero de vagas');
            redirect('Admin/home');
        }else{
            $data['msg'] = 'Não foi possível alterar, tente novamente em alguns instantes';
            $data['viewName'] = 'AdminPages/viewVagas';
            $this->load->view('template', $data);
        }
    }

    public function indeferir() {
        $idProtocolo = !empty($_POST['idProtocolo']) ? $_POST['idProtocolo'] : null;
        $motivo = !empty($_POST['motivo']) ? $_POST['motivo'] : null;
        $query = $this->Admin->indefereProtocolo($idProtocolo, $motivo);
        $this->Admin->log($_SESSION['id_usuario'], 'indeferir', $idProtocolo , 'indeferindo cadastro');
        echo json_encode($query);
    }

    public function deletaEscola($id_escola) {
      
        if(!empty($id_escola)) {
            
            $this->Admin->deleteEscola($id_escola); 
            $this->Admin->log($_SESSION['id_usuario'], 'deletaEscola', $id_escola , 'deletando escola');
            redirect('Admin/home');
        }else{
            $data['msg'] = 'Não foi possível deletar, tente novamente em alguns instantes';
            $data['viewName'] = 'AdminPages/viewVagas';
            $this->load->view('template', $data);
        }
    }

    public function pdfProtocolo() {
		$this->load->library('tcpdf/Tcpdf');  

        $ProtGerado = $this->Admin->getProtocolo($this->input->post('id_protoclo'));
        $data['nome'] = $ProtGerado[0]['aluno'];
		$data['numero'] = $ProtGerado[0]['numero'];
		$data['nomeescola'] = $ProtGerado[0]['nomeescola'];
		$data['dataCadastro'] =  date('d/m/Y', strtotime($ProtGerado[0]['data_cadastro']));
        $data['horasCadastro'] = date('H:i',  strtotime($ProtGerado[0]['data_cadastro']));
        $data['motivo_indefere'] = $ProtGerado[0]['motivo_indefere'] != null ? $ProtGerado[0]['motivo_indefere'] : '';
		$data['ano'] = $ProtGerado[0]['ano'];
		$data['status'] = $ProtGerado[0]['status'];
		$data['turno'] = $ProtGerado[0]['turno'];
		$data['responsavel'] = $ProtGerado[0]['responsavel'];
		$data['CPFALUNO'] = $ProtGerado[0]['cpfaluno'];
		$data['datanascimento'] = date('d/m/Y', strtotime($ProtGerado[0]['datanascimento']));
		$this->load->view('AdminPages/PdfProtocolo', $data);
    }
    
    
    public function pdfCadastradosGeral($id_escola, $turma) {
        $this->load->library('tcpdf/Tcpdf');  

        $Cadastrados = $this->Admin->getCadastrados($id_escola, $turma);
        $data['cadastrados'] = $Cadastrados;
        $data['nomeescola'] = $Cadastrados[0]['nomeescola'];
        $data['motivo_indefere'] = $Cadastrados[0]['motivo_indefere'] != null ? $Cadastrados[0]['motivo_indefere'] : '';
        $data['ano'] = $Cadastrados[0]['ano'];

        $this->load->view('AdminPages/pdfCadastradosGeral', $data);
    }
}