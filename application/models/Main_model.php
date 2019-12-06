<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model{

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getEscolas() {
        return $this->db->get('escola')->result_array(); 
    }

    public function getEscolaID($id_escola, $vaga = null) {
        return $this->db->where('idescola', $id_escola)->select(['idescola', 'nomeescola', "$vaga"])->get('escola')->result_array(); 
    }
    
    public function getEscolaIDAdmin($id_escola) {
        return $this->db->where('idescola', $id_escola)->get('escola')->result_array(); 
    }
    
    public function options_escolas() {
        $escolas = $this->getEscolas();

        $option = '<option>Selecione a Escola:</option>';

        foreach($escolas as $info) {
            $nomeEscola = $info['nomeescola'];
            $option .= "<option value='$nomeEscola'>$nomeEscola</option>";
        }
        return $option;
    }

    public function getProtocolo($prot_id) {
        $this->db->select(['aluno.nome', 'protocolos.turno', 'protocolos.numero', 'protocolos.data', 'protocolos.ano', 'protocolos.status', 'escola.nomeescola'])
        ->from('protocolos')
        ->join('aluno', 'aluno.id = protocolos.id_aluno', 'left')
        ->join('escola', 'aluno.escola_idescola = escola.idescola')
        ->where('protocolos.id', $prot_id);
        
        $protocolo = $this->db->get()->result_array();
        return $protocolo[0];
    }

    public function cadastroProtocolo($id_aluno, $ano, $turno) {    
        $numero = rand(0, 100000) . $id_aluno;

        $data = array(
            'numero'  => $numero,
            'id_aluno' => $id_aluno,
            'data' => date('Y-m-d H:i:s'),
            'ano' => $ano,
            'turno' => $turno,
        );

        $this->db->insert('protocolos', $data);  
        $last_id = $this->db->insert_id(); 
        return $last_id;  
    }


    public function cadastroEndereco($cep, $endereco, $bairro, $numero_endereco) {    
        $data = array(
            'cep'  => $cep,
            'rua' => $endereco,
            'bairro' => $bairro,
            'numero' => $numero_endereco,
        );

        $this->db->insert('endereco', $data);  
        $last_id = $this->db->insert_id(); 
        return $last_id;  
    }

    public function cadastroResponsavel($nomeresponsavel, $cpf_responsavel, $email, $id_endereco, $telefone_responsável, $parentesco) {    
        $data = array(
            'nome'  => $nomeresponsavel,
            'cpfresponsavel' => $cpf_responsavel,
            'email' => $email,
            'endereco_idendereco' => $id_endereco,
            'telefone' => $telefone_responsável,
            'parentesco' => $parentesco,
        );

        $this->db->insert('responsavel', $data);  
        $last_id = $this->db->insert_id(); 
        return $last_id;  
    }

    public function cadastroAluno($nome_aluno, $cpf_aluno, $nascimento_aluno, $id_responsavel, $id_escola, $turma) {
        $data = array(
            'nome'  => $nome_aluno,
            'cpfaluno' => $cpf_aluno,
            'datanascimento' => $nascimento_aluno,
            'responsavel_idresponsavel' => $id_responsavel,
            'escola_idescola' => $id_escola,
            'turma' => $turma,
        );
        
        $this->db->insert('aluno', $data);  
        $last_id = $this->db->insert_id(); 
        return $last_id;  
    }

    public function AlteraNumVafas($id_escola, $vaga) {
        $this->db->query("UPDATE escola SET $vaga = $vaga - 1 WHERE escola.idescola = $id_escola");
    }
}
