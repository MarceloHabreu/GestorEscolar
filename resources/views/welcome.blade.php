<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Principal - Minha Aplicação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

@include('miscellaneous.nav')


<div class="container-fluid bg-dark text-center text-white py-5">
    <h1>Aplicação teste</h1>
    <p>Aplicação para teste de softwares</p>
</div>

<div class="container py-5">
    <h2>Sobre mim</h2>
    <p>Profissional com 09 anos de experiência como freelancer, com foco em mobile utilizando PHP, C#, WPF .net, Xamarin, asp.net core e .net Maui. Banco de dados SQL Server, MySQL e PostgreSQL. Conhecimento em Microsoft Azure e orquestração de contêineres com Kubernetes. Graduado em Análise e Desenvolvimento de Sistemas com especialização em Engenharia Web e Mobile e concluindo Mestrado em Biotecnologia onde construiu um sistema de informação para inquérito sanitário voltado a leishmaniose App + Gestor de dados.</p>
</div>

<div class="container py-5">
    <h2>Formação Acadêmica</h2>
    <p>
        Mestrado em Biotecnologia, UECE - 02/2024</p>
      <p>Especialização em Engenharia Web e Mobile, FACEMA - 2017</p>
      <p>Graduação em Análise e Desenvolvimento de Sistemas – FACEMA - 2014</p>

</div>
@include('miscellaneous.footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
