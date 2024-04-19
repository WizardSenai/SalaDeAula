// Função para lidar com a submissão do formulário
document.getElementById("reservationForm").addEventListener("submit", function(event) {
  // Evita o comportamento padrão de recarregar a página ao enviar o formulário
  event.preventDefault();
  
  // Aqui você pode adicionar o código para processar os dados do formulário
  // Por exemplo, você pode recuperar os valores dos campos e enviar para um servidor
  // ou exibir uma mensagem de confirmação ao usuário
  
  // Exemplo de exibição de uma mensagem de alerta com os dados do formulário
  const formData = new FormData(this);
  const formDataObject = {};
  formData.forEach(function(value, key){
      formDataObject[key] = value;
  });
  alert("Dados do formulário:\n" + JSON.stringify(formDataObject, null, 2));
});