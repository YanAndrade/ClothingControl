<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="Style2.css" type="text/css">
<link rel="stylesheet" href="fontes/font-awesome.min.css">

<script src="https://kit.fontawesome.com/54f9cce8ca.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">



</head>
<body>

<!----------------------------------------Navbar------------------------------------------>

    <header class="header">  
        <nav class="navbar navbar-default fixed-top">
            <div class="container">
                <div class="navbar-header" >
                    <a href="#" class="navbar-brand" id="logo"> <img src="Imagens/logo-site0000.png" alt=""></a>
                </div>

                <ul class="nav navbar-icones">
                
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Sair</a>
                    </li>
                </ul>
            </div>
        </nav>


<!---------------------------------------Botão Adicionar------------------------------------------------------>
<br>    
<br>
<br>
<br>

<div class="container-fluid">
<div class="row">
    <div class="col-5">
    </div>
    <div class="col-1" id="bot1">
    <!-- Botão para acionar modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ExemploModalCentralizado">
                                    Adicionar
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="TituloModalCentralizado">Descreva o Produto:</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        <form>
                                        <form>
                                            <div class="form-group">
                                                <h5 class="modal-title" id="TituloModalCentralizado">Selecione a foto do Produto:</h5>
                                                <label for="exampleFormControlFile1"></label>
                                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                            </div>
                                            </form>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Nome</label>
                                                <div class="col-sm-10">
                                                <input type="" class="form-control" id="inputNome" placeholder="Digite o nome do Produto">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Tecido</label>
                                                <div class="col-sm-10">
                                                <input type="" class="form-control" id="inputNome" placeholder="Digite o tipo do tecido do Produto">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Origem</label>
                                                <div class="col-sm-10">
                                                <input type="" class="form-control" id="inputNome" placeholder="Digite a origem do Produto">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Estampa</label>
                                                <div class="col-sm-10">
                                                <input type="" class="form-control" id="inputNome" placeholder="Digite a estampa do Produto">
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                        <h5 class="modal-title" id="TituloModalCentralizado">Descreva o Estoque:</h5>
                                        <div class="modal-body">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">P</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">M</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">G</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            </select>
                                        </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            <button type="button" class="btn btn-primary">Excluir</button>
                                            <button type="button" class="btn btn-primary">Editar</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
    </div>
    <div class="col-6">
    </div>
  </div>
</div>
</div>

<br>

<!---------------------------------------Card------------------------------------------------------------>

            <br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm">
                        <div class="card mx-auto" id="card-atleta">
                            <img class="card-img-top" src="Img/roupa1.jpg" alt="Imagem de capa do card">
                            <div class="card-body">
                                <!-- Botão para acionar modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ExemploModalCentralizado">
                                    Descrição
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="TituloModalCentralizado">Descrição do Produto:</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Nome: Blusa Branca </p>
                                            <p>Tecido: Seda </p>
                                            <p>Origem: Brasil </p>
                                            <p>Estampa: Nenhuma </p>
                                        </div>
                                        <h5 class="modal-title" id="TituloModalCentralizado">Em Estoque:</h5>
                                        <div class="modal-body">
                                            <p>P: 15 </p>
                                            <p>M: 5 </p>
                                            <p>G: 20 </p>
                                            <p>GG: 3 </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            <button type="button" class="btn btn-primary">Excluir</button>
                                            <button type="button" class="btn btn-primary">Editar</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                            </div>
                        </div>   
                    </div>
                    <div class="col-sm">
                        <div class="card mx-auto" id="card-atleta">
                        <img class="card-img-top" src="Img/roupa1.jpg" alt="Imagem de capa do card">
                            <div class="card-body">
                                <h5 class="card-title">Nome da Peça</h5>
                                <!-- Botão para acionar modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ExemploModalCentralizado">
                                Descrição
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="TituloModalCentralizado">Título do modal</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                        <button type="button" class="btn btn-primary">Salvar mudanças</button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>   
                    </div>
                    <div class="col-sm">
                        <div class="card mx-auto" id="card-atleta">
                            <img class="card-img-top" src="Img/roupa1.jpg" alt="Imagem de capa do card">
                            <div class="card-body">
                                <h5 class="card-title">Nome da Peça</h5>
                                <!-- Botão para acionar modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ExemploModalCentralizado">
                            Descrição
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="TituloModalCentralizado">Título do modal</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                    <button type="button" class="btn btn-primary">Salvar mudanças</button>
                                </div>
                                </div>
                            </div>
                            </div>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm">
                        <div class="card mx-auto" id="card-atleta">
                            <img class="card-img-top" src="Img/roupa1.jpg" alt="Imagem de capa do card">
                                <div class="card-body">
                                <h5 class="card-title">Nome da Peça</h5>
                                <!-- Botão para acionar modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ExemploModalCentralizado">
                                Descrição
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="TituloModalCentralizado">Título do modal</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                        <button type="button" class="btn btn-primary">Salvar mudanças</button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>   
                    </div>
                    <div class="col-sm">
                        <div class="card mx-auto" id="card-atleta">
                            <img class="card-img-top" src="Img/roupa1.jpg" alt="Imagem de capa do card">
                            <div class="card-body">
                                <h5 class="card-title">Nome da Peça</h5>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ExemploModalCentralizado">
                                Descrição
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="TituloModalCentralizado">Título do modal</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                        <button type="button" class="btn btn-primary">Salvar mudanças</button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>   
                    </div>
                    <div class="col-sm">
                        <div class="card mx-auto" id="card-atleta">
                            <img class="card-img-top" src="Img/roupa1.jpg" alt="Imagem de capa do card">
                            <div class="card-body">
                                <h5 class="card-title" id="titulo">Nome da Peça</h5>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ExemploModalCentralizado">
                                Descrição
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="TituloModalCentralizado">Título do modal</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                        <button type="button" class="btn btn-primary">Salvar mudanças</button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>

<br>

<!---------------------------------------Footer------------------------------------------------------------>
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="primeiro-footer mx-auto">
                            <h4><strong>Futsoccer</strong></h4>
                            <p> Texto Opicional</p>
                       </div>
                        <div class="segundo-footer mx-auto">
                            <h4><strong>Contato</strong></h4>
                            <p> E-mail:</p>
                            <p> Telefone:</p>
                       </div>
                        <div class="terceiro-footer mx-auto">
                            <h4><strong>Redes Sociais</strong><h4>
                            <a href="#" class="social"> 
                                <i class="fab fa-facebook-square"></i>
                            </a>
                            <a href="#" class="social">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                        <div class="quarto-footer mx-auto">
                            <h4><strong></strong></h4>
                            <ul>
                             
                            </ul>
                        </div>
                    </div>
                </div>
        </footer>

</body>
</html>