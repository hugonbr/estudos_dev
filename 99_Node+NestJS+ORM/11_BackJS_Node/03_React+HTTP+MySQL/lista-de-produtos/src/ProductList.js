// src/ProductList.js
import React, { Component } from "react";

class ProductList extends Component {
    constructor() {
        super();
        this.state = {
            products: [],
        };
    }

    componentDidMount() {
        // Fazer a solicitação HTTP para obter os dados do JSON
        fetch("http://127.0.0.1:3001") // Certifique-se de que o servidor Node.js esteja em execução
            .then((response) => response.json())
            .then((data) => {
                this.setState({
                    products: data.products,
                });
            });
    }

    render() {
        return (
            <div>
                <h1>Lista de Produtos</h1>
                <ul>
                    {this.state.products.map((product) => (
                        <li key={product.id}>
                            {product.nome} - R$ {product.preco}
                        </li>
                    ))}
                </ul>
            </div>
        );
    }
}

export default ProductList;
