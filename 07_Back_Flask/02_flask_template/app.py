from flask import Flask, render_template

# Crie uma instância do aplicativo Flask
app = Flask(__name__)

# Defina uma rota para a página inicial


@app.route('/')
def hello_world():
    return render_template('hello.html')


if __name__ == '__main__':
    # Execute o aplicativo no host 0.0.0.0 na porta 5000
    app.run(host='0.0.0.0', port=5000)
