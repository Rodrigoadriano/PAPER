 function home(){
     window.location.href = 'index.html'

 }

 function redirectToCadastro() {
    window.location.href = 'cadastro.php';
}
 function redirectTolist() {
    window.location.href = 'lista2.php';
}

function redirecttoConsulta(){
    window.location.href = 'consulta.php';
};
 
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

function CarregaTabela(){
   //Solicitar o JSON

   fetch('lista2.php')
    .then(response => {
        if (!response.ok) {
            throw new Error('Erro na requisição');
        }
        return response.json(); // Retorna a Promise com o JSON
        
    })
    .then(data => {
        //Criar a tabela com o JSON
        criarTabelaDeJSON(data); // Manipula os dados JSON recebidos
    })
    .catch(error => {
        console.error('Erro:', error);
    });
 
   

 
   function criarTabelaDeJSON(json) {
  
       // Criar uma tabela HTML
       const table = document.createElement('table');
       
       // Criar cabeçalho da tabela
       const headers = Object.keys(json[0]);
       const headerRow = document.createElement('tr');
       headers.forEach(headerText => {
           const th = document.createElement('th');
           th.textContent = headerText;
           headerRow.appendChild(th);
       });
       table.appendChild(headerRow);
   
       // Preencher a tabela com os dados
    json.forEach(obj => {
        const row = document.createElement('tr');

        // Adiciona o checkbox na primeira célula de cada linha
        const checkboxCell = document.createElement('td');
        const checkbox = document.createElement('input');
        checkbox.type = 'checkbox';
        checkbox.value = obj.ID; // Substitua 'id' pelo nome do campo que contém o ID
        checkboxCell.appendChild(checkbox);
        row.appendChild(checkboxCell);

        headers.forEach(header => {
            const cell = document.createElement('td');
            cell.textContent = obj[header];
            row.appendChild(cell);
        });
        table.appendChild(row);
    });
   
       // Adicionar a tabela ao DOM (por exemplo, a um elemento com id "tabela")
       document.getElementById('tabela').appendChild(table);
   };
};    
