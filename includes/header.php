<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/resources/css/styles.css" rel="stylesheet"/>
    <title>Painel Administrativo</title>
    <style type="text/css">
        .btn-close {
        }
    </style>
</head>
<body>
<div class="d-flex" id="wrapper">
    <div class="border-end bg-primary" id="sidebar-wrapper">
        <div class="text-white text-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="43" fill="white" class="bi bi-speedometer"
                 viewBox="0 0 16 16">
                <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                <path fill-rule="evenodd"
                      d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"/>
            </svg>
            <h6 class="text-white">Painel Administrativo</h6>
        </div>

        <hr class="mx-6 text-light">

        <div class="list-group list-group-flush">
            <div class="btn-group dropend p-2">
                <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                    Consultar
                </button>
                <ul class="dropdown-menu">
                    <li><a href="{{URL}}/consultar_produto" class="dropdown-item" type="button">Produto</a></li>
                </ul>
            </div>
        </div>

        <hr class="mx-4 text-light">

        <div class="list-group list-group-flush">
            <div class="btn-group dropend p-2">
                <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                    Cadastro
                </button>
                <ul class="dropdown-menu">
                    <li><a href="{{URL}}/consultar_produto" class="dropdown-item" type="button">Produto</a></li>
                    <li><a href="{{URL}}/consultar_produto" class="dropdown-item" type="button">Lote</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container-fluid">
                <a class="text-dark" id="sidebarToggle" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="white" class="bi bi-list"
                         viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                              d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </a>
                <a class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                   data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                   aria-expanded="false" aria-label="Toggle navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="35" fill="white" class="bi bi-list"
                         viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                              d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                        <li class="nav-item active"><a class="nav-link" href="{{URL}}/">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="white" class="bi bi-house"
                                     viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                          d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                    <path fill-rule="evenodd"
                                          d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                                </svg>
                            </a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" id="navbarDropdown" href="#" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="white"
                                     class="bi bi-people-fill" viewBox="0 0 16 16">
                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    <path fill-rule="evenodd"
                                          d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                </svg>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{URL}}/">Home</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#!">Sair</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <?php
        $mensagem = '';
        if(isset($_GET['status'])){
            switch ($_GET['status']){
                case 'success':
                    $mensagem = '<div class="alert alert-success mt-3">A????o executada com sucesso</div>';
                    break;
                case 'error':
                    $mensagem = '<div class="alert alert-danger mt-3">A????o n??o executada</div>';
                    break;
            }
        }

        $resultados = '';
        foreach($vagas as $vaga){
            $resultados .= '<tr>
                      <td>'.$vaga->id.'</td>
                      <td>'.$vaga->titulo.'</td>
                      <td>'.$vaga->descricao.'</td>
                      <td>'.($vaga->ativo == 's' ? 'Ativo' : 'Inativo').'</td>
                      <td>'.date('d/m/Y ??\s H:i:s',strtotime($vaga->data)).'</td>
                      <td>
                        <a href="editar.php?id='.$vaga->id.'">
                          <button type="button" class="btn btn-primary">Editar</button>
                        </a>
                        <a href="excluir.php?id='.$vaga->id.'">
                          <button type="button" class="btn btn-danger">Excluir</button>
                        </a>
                      </td>
                    </tr>';
        }

        $resultados = strlen($resultados) ? $resultados :
            '<tr>
            <td colspan="6" class="text-center">Nenhuma vaga encontrada</td>
        </tr>';

        ?>

        <main class="page-content-wrapper container">
            <?=$mensagem?>
            <section>
                <a href="cadastrar.php">
                    <button class="btn btn-success mt-4">Nova vaga</button>
                </a>
            </section>

            <section>
                <table class="table bg-light mt-5">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>T??tulo</th>
                        <th>Descri????o</th>
                        <th>Status</th>
                        <th>Data</th>
                        <th>A????es</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?=$resultados?>
                    </tbody>
                </table>
            </section>
        </main>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="/resources/js/menu/menu.js"></script>

</body>
</html>


