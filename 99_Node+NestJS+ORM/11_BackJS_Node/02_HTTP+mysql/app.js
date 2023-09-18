const http = require("http");
const mysql = require("mysql");

const hostname = "127.0.0.1";
const port = 3001;

// Configuração da conexão com o banco de dados MySQL
const con = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "1234",
    database: "controle_de_estoque",
});

con.connect(function (err) {
    if (err) throw err;
    console.log("Conectado ao banco de dados MySQL");
});

const server = http.createServer((req, res) => {
    res.statusCode = 200;
    res.setHeader("Content-Type", "application/json");

    // Consulta o banco de dados para obter a lista de produtos
    con.query("SELECT * FROM produto", function (err, result, fields) {
        if (err) throw err;

        // Transforma o resultado em um objeto JSON
        const jsonResponse = {
            products: result,
        };

        // Converte o objeto JSON em uma string e a envia como resposta
        const jsonString = JSON.stringify(jsonResponse);
        res.end(jsonString);
    });
});

server.listen(port, hostname, () => {
    console.log(`Servidor rodando em http://${hostname}:${port}/`);
});
