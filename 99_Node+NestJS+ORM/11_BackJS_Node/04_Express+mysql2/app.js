const cors = require("cors");
const express = require("express");
const mysql = require("mysql2"); // Use o módulo mysql2
const app = express();
const port = 3001;

app.use(cors());

// Configuração da conexão com o banco de dados MySQL
const db = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "1234",
    database: "controle_de_estoque",
});

db.connect((err) => {
    if (err) {
        console.error("Erro ao conectar ao banco de dados MySQL:", err);
    } else {
        console.log("Conectado ao banco de dados MySQL");
    }
});

app.get("/", (req, res) => {
    const html =
        '<html><head><title>Olá Mundo</title></head><body><h1>Olá, Mundo!</h1><br><h1><a href="/products">Produtos</a></h1></body></html>';
    res.send(html);
});

app.get("/products", (req, res) => {
    // Consulta o banco de dados para obter a lista de produtos
    db.query("SELECT * FROM produto", (err, results) => {
        if (err) {
            console.error("Erro ao consultar o banco de dados:", err);
            res.status(500).json({ error: "Erro ao buscar produtos" });
            return;
        }

        // Transforma o resultado em um objeto JSON
        const jsonResponse = results.map((result) => ({
            id: result.id,
            name: result.nome,
            quantidade: result.quantidade,
            price: result.preco,
        }));

        res.json({ products: jsonResponse });
    });
});

// Adicione uma rota para servir o aplicativo React
app.use(express.static("react-app/build")); // Substitua "react-app/build" pelo diretório do seu aplicativo React

// Inicie o servidor
app.listen(port, () => {
    console.log(`Servidor Express rodando em http://localhost:${port}`);
});
