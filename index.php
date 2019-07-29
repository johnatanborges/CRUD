<!-- CRUD Products
- html
- css
- bootstrap
- php
- mySQL
-->
<!Doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Product Forms</title>
        <link rel="stylesheet" href="css/bootstrap.css">

        <style type="text/css">
            #tamanhoContainer {
                width: 500px
            }

            #botao {
                background-color: #FF1168;
                color: #fff;
                font-weight: bold
            }
        </style>

    </head>
    <body>
        <div class="container" id="tamanhoContainer" style="margin-top: 40px">
            <h4>Formulário de Cadastro</h4>
            <form style="margin-top: 20px">
                <div class="form-group">
                    <label>Nro Produto</label>
                    <input type="number" class="form-control" placeholder="Insira o número do produto">
                </div>
                <div class="form-group">
                    <label>Nome Produto</label>
                    <input type="text" class="form-control" placeholder="Insira o nome do produto">
                </div>
                <div class="form-group">
                    <label>Quantidade</label>
                    <input type="number" class="form-control" placeholder="Insira a quantidade do produto">
                </div>

                <div class="form-group">
                    <label>Categoria</label>
                    <select class="form-control">
                        <option>Periféricos</option>
                        <option>Hardware</option>
                        <option>Software</option>
                        <option>Celulares</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Fornecedor</label>
                    <select class="form-control">
                        <option>Fornecedor A</option>
                        <option>Fornecedor B</option>
                        <option>Fornecedor C</option>
                        <option>Fornecedor D</option>
                    </select>
                </div>
                <div style="text-align: right">
                    <button type="submit" id="botao" class="btn">Cadastrar</button>
                </div>
            </form>
        </div>

        <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>
</html>