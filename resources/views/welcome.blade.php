<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Principal - Escola Horizontes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    @include('miscellaneous.nav')


    <div class="container-fluid bg-dark text-center text-white py-5">
        <h1>Escola Horizontes</h1>
        <p>Preparando para o Amanhã</p>
    </div>

    <div class="container py-5">
        <h2>Sobre</h2>
        <p>A Escola Horizontes foi fundada há apenas dois anos, mas já se estabeleceu como uma referência em reforço escolar. Nossa missão é ajudar estudantes a superar desafios acadêmicos e alcançar seu pleno potencial. Com o crescimento rápido do nosso corpo discente e a diversificação das matérias oferecidas, sentimos a necessidade de aprimorar nossa gestão administrativa. Para atender a essa demanda, desenvolvemos um software de gestão escolar simples e eficiente.<p>
            Este software foi criado para simplificar a administração das disciplinas e dos alunos, proporcionando uma experiência mais organizada para todos. Na seção de Disciplinas, os administradores podem cadastrar novas matérias, especificar suas durações e acessar um painel com todas as disciplinas registradas. Este recurso permite uma gestão mais eficiente, assegurando que todas as informações estejam centralizadas e facilmente acessíveis. Na seção de Alunos, o software oferece uma solução prática para o cadastro e acompanhamento dos estudantes. Com ele, é possível registrar detalhes importantes como nome, CPF e a disciplina escolhida, além de visualizar todas as informações organizadas em um painel acessível. Essa funcionalidade permite que nossos administradores tenham um controle melhor sobre o corpo estudantil, facilitando a comunicação e o gerenciamento diário.
            <p>
                A adoção deste software de gestão visa não apenas simplificar os processos administrativos, mas também melhorar a qualidade do nosso ensino de reforço. Com informações centralizadas e facilmente atualizáveis, podemos focar mais no desenvolvimento dos nossos alunos e menos em burocracias. A capacidade de atualizar, editar e apagar informações conforme necessário garante que nosso banco de dados esteja sempre atualizado e preciso.
                Estamos empolgados para ver como esta nova ferramenta poderá beneficiar todos os envolvidos no nosso reforço escolar. Convidamos você a explorar cada funcionalidade do software e descobrir como ele pode tornar a gestão escolar mais eficiente e organizada. A Escola Horizontes continua a sua missão de preparar os alunos para o amanhã, agora com uma ferramenta que reflete nosso compromisso com a eficiência e a qualidade educacional.
            </p>


    </div>



    </div>
    @include('miscellaneous.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>