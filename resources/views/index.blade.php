<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro cliente</title>

    <link rel="stylesheet" href="{{ asset('site/bootstrap.css') }}">
</head>
<body>
    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

    <div class="container-fluid">
        <header>
            <h1 class="jumbotron text-center"> Cabeçalho </h1>
        </header>
        <div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="name">Nome completo*:</label>
                        <input type="text" id="name" size="50" placeholder="Seu nome aqui">
                        <div class="invalid-feedback">
                            Informe seu nome.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="zipcode">CEP*:</label>
                        <input type="text" maxlength="9" id="zipcode" placeholder="xxxxx-xxx ou xxxxxxxx">
                        <div class="invalid-feedback">
                            Informe o CEP de onde quer receber nossos mimos.
                        </div>
                        <button class="btn btn-primary" onclick="searchZipcode()">Pesquisar CEP</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="street">Rua*:</label>
                        <input type="text" id="street" size="50" placeholder="Rua/Avenida"><div class="invalid-feedback">
                            Informe a rua/avenida.
                        </div>
                    
                        <label for="number"> Nº*:</label>
                        <input type="text" id="number" size="6" placeholder="Nº"><div class="invalid-feedback">
                            Informe o número da residência.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="complement">Complemento:</label>
                        <input type="text" id="complement" size="30" placeholder="Complemento">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="district">Bairro*:</label>
                        <input type="text" id="district" size="50" placeholder="Bairro"><div class="invalid-feedback">
                            Informe o bairro.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="city">Cidade*:</label>
                        <input type="text" id="city" size="50" placeholder="Cidade">
                        <div class="invalid-feedback">
                            Informe a sua cidade.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="state">Estado*:</label>
                        <input type="text" id="state" size="4" placeholder="Estado">
                        <div class="invalid-feedback">
                            Informe o estado.
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <p>Os campos com * são de preenchimento obrigatório.</p>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <button onclick="createOrder()" type="submit" class="btn btn-success btn-lg">Confirmar e enviar</button>
                    </div>
                </div>
            </div>
        </div>

        <footer class="jumbotron text-center">
            <p>Nossos contatos.</p><br>
            <p>Sobre a empresa.</p><br>
            <p>Demais informações úteis.</p>
        </footer>
    </div>

</body>
</html>