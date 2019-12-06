function enviarForm() {
	var form = document.getElementById('cadastrar');
	var data = {};
	data['nome'] = form.Nome.value;
	data['cpf'] = form.cpf.value;
	data['data_nascimento'] = form.dtnasc.value;
	data['sexo'] = form.sexo.value; 
    data['telefone'] = form.prependedtext.value;
    data['email'] = form.email.value 
	data['cep'] = form.cep.value;
	data['rua'] = form.rua.value;
	data['numero'] = form.numero.value; 
    data['bairro'] = form.bairro.value;
    data['cidade'] = form.cidade.value 
	data['estado'] = form.estado.value;
	data['estadocivil'] = form.EstadoCivil.value;
	data['qtde_filhos'] = form.filhos_qtd.value; 
    data['escolaridade'] = form.escolaridade.value;
    data['profissao'] = form.profissao.value;
	console.log(JSON.stringify(data));
	fetch('http://localhost:8080/SGCWeb/BackEnd/pessoas', {
		method: 'POST',       
		body: JSON.stringify(data)
	})
	.then((response) => {
		if (response.ok) {
			return response.json() 
		} else {
			return Promise.reject({ status: res.status, statusText: res.statusText });
		}   

	})
	.then((data) => console.log(data))
	.catch(err => console.log('Error message:', err.statusText));
}