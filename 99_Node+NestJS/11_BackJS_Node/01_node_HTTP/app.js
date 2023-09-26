const http = require("http");

const hostname = "127.0.0.1";
const port = 3000;

const server = http.createServer((req, res) => {
    res.statusCode = 200;
    res.setHeader("Content-Type", "application/json"); // Alterado para 'application/json'

    // Criar um objeto JSON de exemplo
    const jsonResponse = {
        message: "Olá, Mundo!",
    };

    // Converter o objeto JSON em uma string
    const jsonString = JSON.stringify(jsonResponse);

    res.end(jsonString);
});

server.listen(port, hostname, () => {
    console.log(`Servidor rodando em http://${hostname}:${port}/`);
});
