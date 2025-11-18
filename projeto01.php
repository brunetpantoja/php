<?php
package controller;

import model.dao.ProdutoDAO;
import model.entity.Produto;
import java.util.List;
 Em um projeto real, aqui você usaria as classes HTTP específicas do seu framework/servidor

public class ProdutoController {
    
    private ProdutoDAO dao = new ProdutoDAO();  O Controller chama o DAO (Model)

     
    public String saveProduto(String nome, String precoStr) {
        try {
            double preco = Double.parseDouble(precoStr);
            Produto novoProduto = new Produto(0, nome, preco);  0 pois o código será gerado

            dao.inserir(novoProduto);  Chama a lógica do Model

             Retorna a URL da View que lista os produtos (Sucesso)
            return "/listaProdutos.jsp"; 

        } catch (NumberFormatException e) {
             Retorna a URL do formulário com mensagem de erro
            return "/formCadastro.jsp?erro=Preço inválido";
        } catch (IllegalArgumentException e) {
             Retorna a URL do formulário com mensagem de erro do Model
            return "/formCadastro.jsp?erro=" + e.getMessage();
        }
    }

     Método para buscar todos os produtos e enviá-los para a View de listagem
    public List<Produto> listarProdutos() {
        return dao.listarTodos();  Chama o Model para obter os dados
         A View usará esta lista para renderizar a tabela
    }
}
?>