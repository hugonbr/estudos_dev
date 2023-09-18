var mysql = require("mysql");

var con = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "1234",
    database: "controle_de_estoque",
});

con.connect(function (err) {
    if (err) throw err;
    con.query("SELECT * FROM produto", function (err, result, fields) {
        if (err) throw err;
        console.log(result);
    });
});
