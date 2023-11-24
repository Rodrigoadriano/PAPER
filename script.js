 function home(){
     window.location.href = 'index.html'

 }

 function redirectToCadastro() {
    window.location.href = 'cadastro.php';
}
 function redirectTolist() {
    window.location.href = 'lista.php';
}
 
function send(){

    document.getElementById('meuForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Evita o envio padrão do formulário
        enviarFormulario();
    });
    
    function enviarFormulario() {
        const formulario = document.getElementById('meuForm');
        fetch('insert.php', {
            method: 'POST',
            body: new FormData(formulario)
        })
        .then(response => response.text())
        .then(data => {
            alert(data);
            //Exibe o alerta com base na resposta do servidor
        })
        .catch(error => {
            console.error('Erro:', error);
        });
    }
    
};