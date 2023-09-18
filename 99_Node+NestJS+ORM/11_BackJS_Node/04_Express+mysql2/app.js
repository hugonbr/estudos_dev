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
            name: result.nome, // Substitua 'nome' pelo nome da coluna que armazena os nomes dos produtos no seu banco de dados
            quantidade: result.quantidade, // Substitua 'nome' pelo nome da coluna que armazena os nomes dos produtos no seu banco de dados
            price: result.preco, // Substitua 'preco' pelo nome da coluna que armazena os preços dos produtos no seu banco de dados
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
