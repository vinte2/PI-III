<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model{
    private $dbase;

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function login() {

        // Comparação dos dados digitados pelo usuario para efetuar o login,
        // Addslashes é uma foma básica para prevenção de SQL injection;
        $this->db->where('email', addslashes($this->input->post('email')));
        $this->db->where('password', addslashes(md5($this->input->post('password'))));

        $query = $this->db->get('usuarioAdmin');

        if (count($query->result_array()) == 1) {
            $retorno = $query->result_array();
        }else{
            $retorno = array('fail');
        }

        return $retorno;
    }

    public function cadastrarEscola($dados) {
        $data = array(
            'nomeescola' => $dados['nomeescola'],
            'vagas1ano' => $dados['vagas1ano'],
            'vagas2ano' => $dados['vagas2ano'],
            'vagas3ano' => $dados['vagas3ano'],
            'vagas4ano' => $dados['vagas4ano'],
            'vagas5ano' => $dados['vagas5ano'],
            'vagas6ano' => $dados['vagas6ano'],
            'vagas7ano' => $dados['vagas7ano'],
            'vagas8ano' => $dados['vagas8ano'],
            'vagas9ano' => $dados['vagas9ano']
        );

        $this->db->insert('escola', $data);  
        $last_id = $this->db->insert_id(); 
        return $last_id; 
    }

    public function alteraVagas($dados) {

        $data = array(
            'vagas1ano' => $dados['vagas1ano'],
            'vagas2ano' => $dados['vagas2ano'],
            'vagas3ano' => $dados['vagas3ano'],
            'vagas4ano' => $dados['vagas4ano'],
            'vagas5ano' => $dados['vagas5ano'],
            'vagas6ano' => $dados['vagas6ano'],
            'vagas7ano' => $dados['vagas7ano'],
            'vagas8ano' => $dados['vagas8ano'],
            'vagas9ano' => $dados['vagas9ano']
        );
        
        $this->db->where('idescola', $dados['id_escola']);
        $this->db->update('escola', $data);

        return $dados['id_escola'];
    }

    public function indefereProtocolo($idProtocolo, $motivo) {
        $response = 500;
        if($idProtocolo != null) {
            $data = array('status' => 'indeferido', 'motivo_indefere' => $motivo);
            $this->db->where('id', $idProtocolo);
            $response = $this->db->update('protocolos', $data);
            if($response) {
                $response = 200;
            }
        }
        return $response;
    }
 
    public function deleteEscola($idEscola) {
        $this->db->where('idescola', $idEscola);
        $this->db->delete('escola');
    }

    public function getCadastrados($id_escola, $turma) {
        $this->db->select(['pr.id', 'pr.numero', 'pr.data as data_cadastro', 'pr.motivo_indefere', 'pr.status', 'pr.ano', 'pr.turno', 'es.nomeescola' , 'resp.nome as responsavel' , 'al.nome as aluno' , 'al.cpfaluno' , 'al.datanascimento' , 'al.turma '])
        ->from('protocolos pr')
        ->join('aluno al', 'al.id = pr.id_aluno', 'inner')
        ->join('escola es', 'al.escola_idescola = es.idescola', 'inner')
        ->where("es.idescola = $id_escola")
        ->where("al.turma = '$turma'")
        ->join('responsavel resp', 'resp.idresponsavel = al.responsavel_idresponsavel', 'inner');
        $protocolo = $this->db->get()->result_array();
        return $protocolo;
    }

    public function getCadastradosGroup($id_escola, $turma) {
        $this->db->select("count('al.turma') as tot")
        ->from('aluno al')
        ->join('escola es', 'al.escola_idescola = es.idescola', 'left')
        ->where("al.turma = '$turma' ")
        ->where("es.idescola = $id_escola");
        $protocolo = $this->db->get()->result_array();

        return $protocolo;
    }

    public function getProtocolo($idProtocolo) {
        $this->db->select(['pr.id', 'pr.numero', 'pr.data as data_cadastro', 'pr.motivo_indefere', 'pr.status', 'pr.ano', 'pr.turno', 'es.nomeescola' , 'resp.nome as responsavel' , 'al.nome as aluno' , 'al.cpfaluno' , 'al.datanascimento' , 'al.turma '])
        ->from('protocolos pr')
        ->join('aluno al', 'al.id = pr.id_aluno', 'inner')
        ->join('escola es', 'al.escola_idescola = es.idescola', 'inner')
        ->where("pr.id = $idProtocolo")
        ->join('responsavel resp', 'resp.idresponsavel = al.responsavel_idresponsavel', 'inner');
        $protocolo = $this->db->get()->result_array();
        return $protocolo;
    }

    public function log($idUser, $action, $id_dado, $descricao) {
        $data = array(
            'id_usuario' => $idUser,
            'action' => $action,
            'id_dado' => $id_dado,
            'descrcao_acao' => $descricao,
            'created_at' => date('Y-m-d H:i:s')
        );

        $this->db->insert('log', $data);  
        $last_id = $this->db->insert_id(); 
        return $last_id; 
    }
}