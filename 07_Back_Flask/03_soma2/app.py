from flask import Flask, render_template, request

# Crie uma instância do aplicativo Flask
app = Flask(__name__)

# Defina uma rota para a página inicial


@app.route('/')
def hello_world():
    return render_template('form.html')

# Defina uma rota para a página que recebe os números e exibe o resultado


@app.route('/add', methods=['POST'])
def add_numbers():
    num1 = int(request.form['num1'])
    num2 = int(request.form['num2'])
    result = num1 + num2
    return render_template('result.html', result=result)


if __name__ == '__main__':
    # Execute o aplicativo no host 0.0.0.0 na porta 5000
    app.run(host='0.0.0.0', port=5000)
