# E-Commerce :books:

Esse é um refinamento de um modelo conceitual de Banco de Dados criado inicialmente pela instrutora da DIO. Foi criado a partir do paradigma EER (Enhanced Entity Relationship) para uma plataforma genérica de e-commerce. A narrativa que baseia o modelo consiste em:

##### Produto:

* Os produtos são vendidos por uma única plataforma online, porém, podem ter vendedores distintos (terceiros).
* Cada produto possui um fornecedor
* Um ou mais produtos podem compor um pedido

##### Cliente:

* O cliente pode se cadastrar no site com seu CPF ou CNPJ
* O Endereço do cliente irá determinar o valor do frete
* Um cliente pode comprar mais de um pedido. Este tem um período de carência para devolução do produto
* Uma conta pode ser PJ ou PF, mas não pode ter as duas informações
* Pode ter cadastrado mais de uma forma de pagamento

##### Pedido:

* O pedidos são criados por clientes e possuem informações de compra, endereço e status da entrega
* Um produto ou mais compõem o pedido
* O pedido pode ser cancelado
* Possui status e código de rastreio







 
