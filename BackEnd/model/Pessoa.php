<?php
include __DIR__.'/Conexao.php';

class Pessoa extends Conexao {
    private $id; 
	private $nome;
    private $cpf;    
    private $data_nascimento;
    private $sexo;
    private $telefone;
    private $email;
    private $cep;
    private $rua;
    private $numero;
    private $bairro;
    private $cidade;
    private $estado;
    private $estadocivil;
    private $qtde_filhos;
    private $escolaridade;
    private $profissao;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }


    public function getnome() {
        return $this->nome;
    }

    public function setnome($nome) {
        $this->nome = $nome;
    }

    public function getcpf() {
        return $this->cpf;
    }

    public function setcpf($cpf) {
        $this->cpf = $cpf;
    }

    public function getdata_nascimento() {
        return $this->data_nascimento;
    }

    public function setdata_nascimento($data_nascimento) {
        $this->data_nascimento = $data_nascimento;
    }

    public function getsexo() {
        return $this->sexo;
    }

    public function setsexo($sexo) {
        $this->sexo = $sexo;
    }

    public function gettelefone() {
        return $this->telefone;
    }

    public function settelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getemail() {
        return $this->email;
    }

    public function setemail($email) {
        $this->email = $email;
    }

    public function getcep() {
        return $this->cep;
    }

    public function setcep($cep) {
        $this->cep = $cep;
    }

    public function getrua() {
        return $this->rua;
    }

    public function setrua($rua) {
        $this->rua = $rua;
    }

    public function getnumero() {
        return $this->numero;
    }

    public function setnumero($numero) {
        $this->numero = $numero;
    }

    public function getbairro() {
        return $this->bairro;
    }

    public function setbairro($bairro) {
        $this->bairro = $bairro;
    }

    public function getcidade() {
        return $this->cidade;
    }

    public function setcidade($cidade) {
        $this->cidade = $cidade;
    }

    public function getestado() {
        return $this->estado;
    }

    public function setestado($estado) {
        $this->estado = $estado;
    }

    public function getestadocivil() {
        return $this->estadocivil;
    }

    public function setestadocivil($estadocivil) {
        $this->estadocivil = $estadocivil;
    }

    public function getqtde_filhos() {
        return $this->qtde_filhos;
    }

    public function setqtde_filhos($qtde_filhos) {
        $this->qtde_filhos = $qtde_filhos;
    }

    public function getescolaridade() {
        return $this->escolaridade;
    }

    public function setescolaridade($escolaridade) {
        $this->escolaridade = $escolaridade;
    }

    public function getprofissao() {
        return $this->profissao;
    }

    public function setprofissao($profissao) {
        $this->profissao = $profissao;
    }

  
    public function insert($obj){$sql = "INSERT INTO pessoas(nome,cpf,data_nascimento,sexo,telefone,email,
        cep,rua,numero,bairro,cidade,estado,estadocivil,qtde_filhos,escolaridade,
        profissao) VALUES (:nome,:cpf,:data_nascimento,:sexo,:telefone,:email,:cep,
        :rua,:numero,:bairro,:cidade,:estado,:estadocivil,:qtde_filhos,
        :escolaridade,:profissao)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('nome',  $obj->nome);
        $consulta->bindValue('cpf' , $obj->cpf);
        $consulta->bindValue('data_nascimento' , $obj->data_nascimento);
        $consulta->bindValue('sexo', $obj->sexo);
        $consulta->bindValue('telefone' , $obj->telefone);
        $consulta->bindValue('email' , $obj->email);
        $consulta->bindValue('cep' , $obj->cep);
        $consulta->bindValue('rua', $obj->rua);
        $consulta->bindValue('numero' , $obj->numero);
        $consulta->bindValue('bairro' , $obj->bairro);
        $consulta->bindValue('cidade' , $obj->cidade);
        $consulta->bindValue('estado', $obj->estado);
        $consulta->bindValue('estadocivil' , $obj->estadocivil);
        $consulta->bindValue('qtde_filhos' , $obj->qtde_filhos);
        $consulta->bindValue('escolaridade', $obj->escolaridade);
        $consulta->bindValue('profissao' , $obj->profissao);
    	$consulta->execute();
        return Conexao::lastId(); /*Aqui vc tem o ID da pessoa, você pode não retornar ele e adicionar uma nova query para inserção e inserir nas duas tabelas ao mesmo tempo se for sempre assim */        
	}

	public function update($obj,$id = null){
		$sql = "UPDATE pessoas SET nome = :nome, cpf = :cpf, data_nascimento = :data_nascimento, 
        sexo = :sexo, telefone =:telefone, email = :email, cep = :cep, rua = :rua, numero = :numero, 
        bairro = :bairro, cidade =:cidade, estado = :estado, estadocivil = :estadocivil, 
        qtde_filhos = :qtde_filhos, escolaridade = :escolaridade, profissao = :profissao WHERE id = :id ";
		$consulta = Conexao::prepare($sql);
        $consulta->bindValue('nome',  $obj->nome);
        $consulta->bindValue('cpf' , $obj->cpf);
        $consulta->bindValue('data_nascimento' , $obj->data_nascimento);
        $consulta->bindValue('sexo', $obj->sexo);
        $consulta->bindValue('telefone' , $obj->telefone);
        $consulta->bindValue('email' , $obj->email);
        $consulta->bindValue('cep' , $obj->cep);
        $consulta->bindValue('rua', $obj->rua);
        $consulta->bindValue('numero' , $obj->numero);
        $consulta->bindValue('bairro' , $obj->bairro);
        $consulta->bindValue('cidade' , $obj->cidade);
        $consulta->bindValue('estado', $obj->estado);
        $consulta->bindValue('estadocivil' , $obj->estadocivil);
        $consulta->bindValue('qtde_filhos' , $obj->qtde_filhos);
        $consulta->bindValue('escolaridade', $obj->escolaridade);
        $consulta->bindValue('profissao' , $obj->profissao);
		return $consulta->execute();
	}

	public function delete($obj,$id = null){
		$sql =  "DELETE FROM pessoas WHERE id = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
	}

	public function find($id = null){
        $sql =  "SELECT * FROM pessoas WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id',$id);
        $consulta->execute();
	}

	public function findAll(){
		$sql = "SELECT nome, cpf, telefone, email, profissao FROM pessoas";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}
}

?>