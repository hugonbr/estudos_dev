import React, { useEffect, useState } from "react";

function App() {
    const [products, setProducts] = useState([]);

    useEffect(() => {
        fetch("http://localhost:3001/products") // Certifique-se de que esta URL corresponde à rota do servidor Node.js
            .then((response) => response.json())
            .then((data) => {
                setProducts(data.products);
            })
            .catch((error) => {
                console.error("Erro ao buscar dados do servidor:", error);
            });
    }, []);

    return (
        <div className="App">
            <nav className="sb-topnav navbar navbar-expand navbar-dark bg-dark">
                <a className="navbar-brand ps-3" href="index.php">
                    Sistema WEB
                </a>
                <button
                    className="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0"
                    id="sidebarToggle"
                    href="#!"
                >
                    <i className="fas fa-bars"></i>
                </button>
                <form className="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"></form>
                <ul className="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                    <li className="nav-item dropdown">
                        <a
                            className="nav-link dropdown-toggle"
                            id="navbarDropdown"
                            href="#"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            <i className="fas fa-user fa-fw"></i>
                        </a>
                        <ul
                            className="dropdown-menu dropdown-menu-end"
                            aria-labelledby="navbarDropdown"
                        >
                            <li>
                                <a className="dropdown-item" href="#">
                                    Configurações
                                </a>
                            </li>
                            <li>
                                <a className="dropdown-item" href="#">
                                    Histórico
                                </a>
                            </li>
                            <li>
                                <hr className="dropdown-divider" />
                            </li>
                            <li>
                                <a className="dropdown-item" href="#">
                                    Sair
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div className="d-flex justify-content-between m-4">
                <h2>Lista de Produtos</h2>
                <a href="#" className="btn btn-lg btn-success">
                    Cadastrar
                </a>
            </div>
            <div className="table-container m-4">
                <div className="table-responsive">
                    <table className="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome do Produto</th>
                                <th>Quantidade</th>
                                <th>Preço</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            {products.map((product) => (
                                <tr key={product.id}>
                                    <td>{product.id}</td>
                                    <td>{product.name}</td>
                                    <td>{product.quantidade}</td>
                                    <td>R$ {product.price}</td>
                                    <td>
                                        <a href="#" className="btn btn-warning">
                                            Editar
                                        </a>
                                        <a href="#" className="btn btn-danger">
                                            Deletar
                                        </a>
                                    </td>
                                </tr>
                            ))}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    );
}

export default App;
