<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quem Somos</title>
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
<center><h1>Quem Somos</h1></center>
    <main>
        <section>
            <h2>Sobre a EtecFashion</h2>
            <p>Bem-vindo à EtecFashion, sua loja de moda e estilo dedicada aos fãs e admiradores do renomado cantor e compositor brasileiro Luan Santana.

<h2>Nossa Missão</h2>
Na EtecFashion, nossa missão é proporcionar uma experiência única aos amantes da música e da moda, oferecendo produtos exclusivos inspirados no estilo inconfundível do Luan Santana. Buscamos sempre a excelência em qualidade, design e conforto, garantindo que cada peça represente não apenas um estilo de vida, mas também uma conexão emocional com a arte e a paixão pela música.

<h2>Nossos Produtos</h2>
Em nossa loja, você encontrará uma ampla variedade de produtos que refletem a essência e o carisma do Luan Santana. Desde camisetas estilizadas até acessórios únicos, cada item é cuidadosamente selecionado para expressar o seu amor pela música e pelo artista. Além disso, trabalhamos com materiais de alta qualidade e design exclusivo, garantindo que cada peça seja uma verdadeira obra de arte para os fãs mais exigentes.

<h2>Compromisso com a Qualidade</h2>
A qualidade é um dos pilares da EtecFashion. Nosso compromisso é fornecer produtos que atendam aos mais altos padrões de qualidade, desde a escolha dos materiais até a produção e o acabamento final. Cada detalhe é cuidadosamente revisado para garantir a satisfação total de nossos clientes, proporcionando uma experiência de compra memorável e confiável.
</p>
        </section>
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
