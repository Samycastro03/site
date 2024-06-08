<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <!-- Adicione aqui as referências ao Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        header {
            background-color: #343a40;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        footer {
            text-align: center;
            margin-top: 50px;
            padding: 10px;
            background-color: #343a40;
            color: #fff;
        }

        /* Estilos para a imagem e preço */
        .produto {
            margin-bottom: 20px;
        }

        .produto img {
            width: 100%;
            max-width: 300px;
            height: auto;
            border-radius: 5px;
        }

        .produto .preco {
            font-size: 18px;
            font-weight: bold;
            color: #007bff;
        }
    </style>
</head>
<body>
    
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">EtecFashion</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}">Página Inicial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('quem-somos') }}">Quem Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contato') }}">Contato</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <center><h1>Bem-vindo à EtecFashion</h1>

    <main>
        <section>
            <div class="produto">
            <img src="{{ asset('images/luan.jpeg') }}" alt="Imagem">
                <p class="preco">R$ 99,99</p>
            </div>
            <div class="produto">
            <img src="{{ asset('images/luan1.jfif') }}" alt="Imagem1">
                <p class="preco">R$ 79,00</p>
            </div>
            <div class="produto">
            <img src="{{ asset('images/combo.jfif') }}" alt="Imagem2">
                <p class="preco">R$ 109,99</p>
            </div>
            <div class="produto">
            <img src="{{ asset('images/estojo.webp') }}" alt="Imagem3">
                <p class="preco">R$ 35,99</p>
            </div>
            <div class="produto">
            <img src="{{ asset('images/copo.jfif') }}" alt="Imagem4">
                <p class="preco">R$ 399,99</p>
            </div>
            <div class="produto">
            <img src="{{ asset('images/chiclete.jpg') }}" alt="Imagem5">
                <p class="preco">R$ 10,99</p>
            </div>
        </section></center>
    </main>

    <footer>
        <p>©2024 EtecFashion.</p>
    </footer>

    <!-- Adicione aqui as referências ao Bootstrap JS e JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
