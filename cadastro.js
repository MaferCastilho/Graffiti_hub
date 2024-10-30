// Verificação tela de Cadastro
function validarFormulario() {
    // Obter os valores dos campos
    var username = document.querySelector('input[type="text"]').value.trim();
    var nome = document.querySelector('input[type="text"]').value.trim();
    var email = document.querySelector('input[type="email"]').value.trim();
    var senha = document.querySelector('input[type="password"]').value.trim();

    // Verificar se os campos estão preenchidos
    if (username === '' || nome === '' || sobrenome === '' || email === '' || senha === '' || dataNasc === '') {
        alert('Por favor, preencha todos os campos.');
        return;
    }

    // Simulação de envio do formulário
    enviarFormulario(nome, email, senha);
}

function enviarFormulario(nome, email, senha) {
    // Aqui você pode realizar a lógica desejada, como enviar os dados para o servidor,
    // fazer uma requisição AJAX, ou simplesmente redirecionar para outra página

    // Exemplo de redirecionamento para outra página após a validação
    window.location.href = 'pagina_inicial.html'; // Redireciona para login.html
}

//Verificação tela de Login

function validarLogin() {
    // Obter os valores dos campos
    var email = document.querySelector('input[type="email"]').value.trim();
    var senha = document.querySelector('input[type="password"]').value.trim();

    // Verificar se os campos estão preenchidos
    if (email === '' || senha === '') {
        alert('Por favor, preencha todos os campos.');
        return;
    }
    
    window.location.href = 'pagina_inicial.html'; // Redireciona para login.html
}





