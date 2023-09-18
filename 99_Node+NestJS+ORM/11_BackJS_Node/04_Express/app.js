const express = require("express");
const mysql = require("mysql");

const app = express();
const port = 3001;

// Configuração da conexão com o banco de dados MySQL
const con = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "1234",
    database: "controle_de_estoque",
});

con.connect(function (err) {
    if (err) {
        console.error("Erro na conexão com o banco de dados:", err);
        return;
    }
    console.log("Conectado ao banco de dados MySQL");
});

// Rota para obter a lista de produtos
app.get("/products", (req, res) => {
    // Consulta o banco de dados para obter a lista de produtos
    con.query("SELECT * FROM produto", function (err, result, fields) {
        if (err) {
            console.error("Erro na consulta ao banco de dados:", err);
            res.status(500).json({ error: "Erro interno do servidor" });
            return;
        }

        // Transforma o resultado em um objeto JSON
        const jsonResponse = {
            products: result,
        };

        // Envia o objeto JSON como resposta
        res.json(jsonResponse);
    });
});

app.listen(port, () => {
    console.log(`Servidor rodando na porta ${port}`);
});
