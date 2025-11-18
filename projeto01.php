<?php
<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Produto</title>
</head>
<body>
    <h2>Cadastro de Novo Produto</h2>

    // Lógica simples para exibir erro, se houver (o Controller enviou o erro na URL)
 String erro = request.getParameter("erro");
  if (erro != null) {
  out.println("<p style='color: red;'>Erro: " + erro + "</p>");
        }

    
    <form action="ProdutoController" method="POST">
        <label for="nome">Nome do Produto:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        
        <label for="preco">Preço:</label>
        <input type="number" id="preco" name="preco" step="0.01" required><br><br>
        <button type="submit">Salvar Produto</button>
    </form>
</body>
</html>
?>