<?php 
	session_start();
    if(!strcmp($_SESSION['nivel'],"1")){
      include 'menu_adm.php';
      include '../model/dao/FotoDAO.php';
      include '../model/dao/PublicacaoDAO.php';      
      include '../model/dao/CurtirDAO.php';
      include '../model/dao/Conexao.php';
    }else{
      include 'menu_usuario.php';
      include '../model/dao/FotoDAO.php';
      include '../model/dao/PublicacaoDAO.php';
      include '../model/dao/CurtirDAO.php';
      include '../model/dao/Conexao.php';
    }

    $nome = $_SESSION['nome'];
?>
  <br><br><br><br><br><br><br><br>
  <div class="container">
    <center><h1>Olá <?php echo "$nome!" ?></h1></center>
  </div>

  <!-- start section portfolio -->
  <div id="portfolio" class="text-center paddsection">
    <div class="container">
      <div class="section-title text-center">
        <h2>GALERIA</h2>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <div class="portfolio-list">

            <ul class="nav list-unstyled" id="portfolio-flters">
              <li class="filter filter-active" data-filter=".all">Todas</li>
              <li class="filter" data-filter=".branding">Mais Curtidas</li>
              <li class="filter" data-filter=".mockups">Mais Recentes</li>

            </ul>

          </div>

          <div class="portfolio-container">


            <?php 
                $curtidas = new CurtirDAO();
                $publicacoesdao = new PublicacaoDAO();
                $foto = new FotoDAO();

                $result = $curtidas -> listar_PorCurtidas($conec);
                $id_user = $_SESSION['id_usuario'];

                while($row = $result->fetch(PDO::FETCH_OBJ)) { 
                  $foto = $publicacoesdao->listar_PorId($conec, $row->publicacao_id_publicacao);
                  $objfoto = $foto->fetch(PDO::FETCH_OBJ);
                  echo "<div class='col-lg-4 col-md-6 portfolio-thumbnail branding'>
                        <a  href='../model/dao/ListarPublicacao.php?id_f=$objfoto->foto_id_foto'>
                          <img style='width:1080px; heigth:300px' src='../model/dao/ListarPublicacao.php?id_f=$objfoto->foto_id_foto' alt='img'>
                        </a> 
                        <a href='../controller/curtir.php?id_u=$id_user&id_f=$objfoto->foto_id_foto'><i class='material-icons'>favorite_border</i></a>
                        <h4>Curtidas: $row->quant_curtidas</h4>
                        <h4>Data de Publicação: $objfoto->data</h4>
                  </div>";
                }
                ?>

            <?php 
                $foto = new FotoDAO();
                $publicacaodao = new PublicacaoDAO();
                $curtidas = new CurtirDAO();

                $result = $publicacaodao -> listar_PorData($conec);
                $id_user = $_SESSION['id_usuario'];

                while($row = $result->fetch(PDO::FETCH_OBJ)) { 
                  $result2 = $curtidas -> listar_PorCurtidaseData($conec, $row->id_publicacao);
                  $n_curtidas = $result2->fetch(PDO::FETCH_OBJ);
                  echo "<div class='col-lg-4 col-md-6 portfolio-thumbnail mockups'>
                        <a  href='../model/dao/ListarPublicacao.php?id_f=$row->foto_id_foto'>
                          <img style='width:1080px; heigth:300px' src='../model/dao/ListarPublicacao.php?id_f=$row->foto_id_foto' alt='img'>
                        </a>
                        <a href='../controller/curtir.php?id_u=$id_user&id_f=$row->foto_id_foto'><i class='material-icons'>favorite_border</i></a>
                        <h4>Curtidas: $n_curtidas->quant_curtidas</h4>
                        <h4>Data de Publicação: $row->data</h4>
                  </div>";
                }
                ?>


          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- End section portfolio -->

<?php
	include_once '../view/rodape.php';
?>
