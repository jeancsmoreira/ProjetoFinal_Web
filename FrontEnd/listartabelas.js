window.onload = function(e) {
	fetch(
		'http://localhost:8080/SGCWeb/BackEnd/pessoas', {		
		}).then(response => response.json())				
	.then(data => { 
		console.log(data);
		data.forEach(pessoa => {  
			var table = document.getElementById("dataTable");
			var row = table.insertRow(-1);
			var NomedoMembro = row.insertCell(0);
			var CPF = row.insertCell(1); 
			var Telefone = row.insertCell(2); 
			var Email = row.insertCell(3); 
			var Profissao = row.insertCell(4); 
			NomedoMembro.innerHTML = pessoa.nome;
			CPF.innerHTML = pessoa.cpf;
			Telefone.innerHTML = pessoa.telefone;
			Email.innerHTML = pessoa.email;
			Profissao.innerHTML = pessoa.profissao;
		})
	}).catch(error => console.error(error))
}