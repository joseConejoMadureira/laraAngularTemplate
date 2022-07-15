# PHP Laravel Angular Template
### template de desenvolvimento. 

<p>Template para reutilização:  php laravel restful api</p>

## Tecnologias 

| Tecnologia  | Versão |
| ------ | ------ |
| PHP | 8.1.8 |
| LARAVEL | 9.19 |
| ANGULAR | 9.1.0 |
| PostgreSQL | 14.4  |


## ROUTES 

### Produtos
| Método | Rota | Parâmetros | Tipo  | Descrição
| ------ | ------ | ------ | ------ |------ |
| GET | api/products| |   JSON     | Retorna todos produtos criados.
| GET | api/products/{product}  | **id**  `*` |   JSON     | Retorna  produto selecionado. 
| POST | api/products/ |**name**  `*` |JSON | Cria um novo produto. 
| |  | **price**  `*`             |         |
| PUT | api/products/{product}  |**id**  `*` | JSON |Altera informações de um produto.         |  
|  | | **name**  |
|  |  | **price**  |
| `DELETE` |   api/products/{product}   | **id**  `*` | JSON |Deleta um produto.
| `log-viewer` |   log-viewer  | **id**  `*` | JSON |Deleta um produto.
## PREVIEW

![preview](https://github.com/joseEstudos/laraAngularTemplate/blob/91dffef34b7083650c323a139dddeba7d6117499/summary/prints/produtos.png)

![preview](https://github.com/joseEstudos/laraAngularTemplate/blob/91dffef34b7083650c323a139dddeba7d6117499/summary/prints/novoProduto.png)

![preview](https://github.com/joseEstudos/laraAngularTemplate/blob/91dffef34b7083650c323a139dddeba7d6117499/summary/prints/excluirProduto.png)

![preview](https://github.com/joseEstudos/laraAngularTemplate/blob/91dffef34b7083650c323a139dddeba7d6117499/summary/prints/editarProduto.png)
