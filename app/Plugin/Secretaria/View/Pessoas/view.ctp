<!DOCTYPE html>
<html>
<head>
  <title>NFCHURCH - Home</title>
  <meta charset="utf8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/nfchurch.css" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://code.jquery.com/jquery.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript">
    $(function() {
      //evento de to-top do layout
      $(window).scroll(function() {
        if($(this).scrollTop() != 0) {
          $('#toTop').fadeIn();
        } else {
          $('#toTop').fadeOut();
        }
      });
      //funcao de click do to-top
      var voares = 0;
      $('#toTop').click(function() {
        $('body,html').animate({scrollTop:0},800);
        //console.debug(voares);
        voares++;
        if (voares >= 2) {
          $("#voar").text('Subir');
        }
      }); 
    });

    //auto-complete de profissoes
    //$('.typeahead .profissao').typeahead({                                
    //  name: 'profissao',                                                          
    //  prefetch: '../data/countries.json',                                         
    //  limit: 10                                                                   
    //});
  </script>
</head>
<body style="margin-top: 3.6em;">
  <header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav col-md-12" role="banner">
    <div class="container logo">
      <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
          <span class="sr-only">Navegação de Jesus</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="#" class="navbar-brand">NFCHURCH</a>
      </div>
      <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home page</a></li>
          <li><a href="#">Minha conta</a></li>
          <li><a href="#">Components</a></li>
          <li><a href="#">JavaScript</a></li>
          <li><a href="#">Customize</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Sair</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <div class="container col-md-12">
    <div class="bs-sidebar hidden-print affix lateral" role="complementary">
      <ul class="nav bs-sidenav">
        <li class="active"><a href="#overview"><span class="glyphicon glyphicon-book"></span> Biblioteca</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-briefcase"></span> Secretaria</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-usd"></span> Financeiro</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-folder-close"></span> RH</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Gerenciar Membros</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-bell"></span> Utilitários</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-star"></span> EBD</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-list-alt"></span> Relatórios e Gráficos</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-tower"></span> Patrimônios</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-comment"></span> Mensagens</a></li>
      </ul>
    </div>
    <div class="all col-md-11"><!-- all -->
      <ol class="breadcrumb"><!-- breadcrumb -->
        <li><a href="#">Início</a></li>
        <li><a href="#">Gerenciar Membros</a></li>
        <li class="active">Cadastro de Membros</li>
      </ol><!-- /breadcrumb -->
      <h2>Cadastro de Membro</h2>
      <form role="form"><!-- form -->
        <div class="form-group col-md-12">
          <label for="nome">Nome do Membro</label>
          <input type="text" class="form-control" id="nome" placeholder="Nome do Membro" required="required">
        </div>
        <div class="form-group col-md-12">
          <label for="email">Email Pessoal</label>
          <input name="email" type="email" class="form-control col-md-12" id="email" placeholder="Entre com seu e-mail" required="required">
        </div>
        <div class="nascimento">
          <div class="form-group col-md-3">
            <label for="tipo">Tipo de Membro</label>
            <select name="tipo" id="tipo" class="form-control">
              <option selected="selected">Selecione</option>
              <option>Membro</option>
              <option>Visitante</option>
              <option>Parente</option>
            </select>
          </div>
          <div class="form-group col-md-3">
            <label for="sexo">Sexo</label>
            <select name="sexo" id="sexo" class="form-control">
              <option selected="selected">Selecione</option>
              <option>Masculino</option>
              <option>Feminino</option>
            </select>
          </div>
          <div class="form-group col-md-3">
            <label for="datanascimento">Data de Nascimento</label>
            <input id="datanascimento" name="datanascimento" class="form-control" value="03/08/1990">
          </div>
          <div class="form-group col-md-3">
            <label for="estado">Estado</label>
            <select name="estado" id="estado" class="form-control">
              <option>AC</option>
              <option>AL</option>
              <option>AM</option>
              <option>BA</option>
              <option>CE</option>
              <option>DF</option>
              <option>ES</option>
              <option>GO</option>
              <option>MA</option>
              <option>MG</option>
              <option>MS</option>
              <option>MT</option>
              <option>PA</option>
              <option>PB</option>
              <option>PE</option>
              <option>PI</option>
              <option>PR</option>
              <option>RJ</option>
              <option>RN</option>
              <option>RO</option>
              <option>RR</option>
              <option>RS</option>
              <option>SC</option>
              <option>SE</option>
              <option>SP</option>
              <option>TO</option>
            </select>
          </div>
        </div>
        <div class="form-group col-md-6">
          <label for="naturalidade">Naturalidade</label>
          <input id="naturalidade" name="naturalidade" class="form-control" placeholder="Ex: Brasileiro">
        </div>
        <div class="form-group col-md-6">
          <label for="estadocivil">Estado Civil</label>
          <select name="estadocivil" id="estadocivil" class="form-control">
            <option>Solteiro</option>
            <option>Casado</option>
            <option>Viuvo</option>
            <option>Desquitado</option>
          </select>
        </div>
        <div class="form-group col-md-3">
          <label for="rg">RG</label>
          <input id="rg" name="rg" class="form-control" placeholder="00.000.000-0">
        </div>
        <div class="form-group col-md-3">
          <label for="cpf">CPF</label>
          <input id="cpf" name="cpf" class="form-control" placeholder="000.000.000-00">
        </div>
        <div class="form-group col-md-6">
          <label for="fone">Telefone</label>
          <input id="fone" name="fone" class="form-control" placeholder="(00) 0000-0000">
        </div>
        <div class="form-group col-md-6">
          <label for="cel">Celular</label>
          <input id="cel" name="cel" class="form-control" placeholder="(00) 00000-0000">
        </div>
        <div class="form-group col-md-6">
          <label for="escolaridade">Escolaridade</label>
          <select name="escolaridade" id="escolaridade" class="form-control">
            <option>Ensino Superior</option>
            <option>Ensino Médio Completo</option>
            <option>Ensino Médio Incompleto</option>
            <option>Ensino Fundamental Completo</option>
            <option>Ensino Fundamental Incompleto</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="profissao">Profissão</label>
          <input id="profissao" name="profissao" class="form-control profissao">
        </div>
        <div class="form-group col-md-6">
          <label for="empresa">Empresa</label>
          <input id="empresa" name="empresa" class="form-control" placeholder="Nome da Empresa">
        </div>
        <div class="form-group col-md-6">
          <label for="databatismo">Data de Batismo</label>
          <input id="databatismo" name="databatismo" class="form-control" placeholder="00/00/0000">
        </div>
        <div class="form-group col-md-6">
          <label for="igrejabatismo">Igreja Batismo</label>
          <input id="igrejabatismo" name="igrejabatismo" class="form-control" placeholder="Nome da igreja que foi batizado">
        </div>
        <div class="form-group col-md-6">
          <label for="pastorbatismo">Pastor que Batizou</label>
          <input id="pastorbatismo" name="pastorbatismo" class="form-control" placeholder="Nome do Pastor que batizou">
        </div>
        <div class="form-group col-md-6">
          <label for="ultimaigreja">Ultima igreja que frequentou</label>
          <input id="ultimaigreja" name="ultimaigreja" class="form-control" placeholder="Nome da Igreja que frequentou">
        </div>
        <div class="form-group" style="padding: 0 1em;">
          <label for="igrejasanteriores">Igrejas que já frequentou</label>
          <textarea name="igrejasanteriores" id="igrejasanteriores" class="form-control" placeholder="Nome das igrejas que já frequentou (pulando linhas)"></textarea>
        </div>
        <div class="form-group col-md-12">
          <label for="cargoId">Cargo na igreja</label>
          <input id="cargoId" name="cargoId" class="form-control" placeholder="Cargo que tinha na igreja">
        </div>
        <div class="form-group col-md-6">
          <button type="submit" class="btn btn-primary">Cadastrar nova pessoa</button>
        </div>
      </form><!-- /form -->
    </div><!-- /all -->
  </div>
  <div class="btn btn-info" id="toTop"><span id="voar">Voar</span></div>
  <div id="myModal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Cadastrar Nova Profissão</h4>
        </div>
        <div class="modal-body">
          <div class="form-group col-md-12">
            <label for="novaProfissao">Nova Profissão</label>
            <input id="novaProfissao" name="novaProfissao" class="form-control" placeholder="Digite a nova profissão">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
</body>
</html>