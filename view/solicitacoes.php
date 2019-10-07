<?php 
    session_start();
    include '../view/menu_adm.php';
    include '../model/dao/FotoDAO.php';
    include '../model/dao/Conexao.php';
?>
  <!-- start section journal -->
  <div id="journal" class="text-left paddsection">
  	  <br><br><br><br><br>
    <div class="container">
      <div class="section-title text-center">
        <h2>SOLICITAÇÕES DE FOTOS</h2>
      </div>
    </div>

    <div class="container">
      <div class="journal-block">
        <div class="row">
          <?php 
              $fotodao = new FotoDAO();

              $result = $fotodao -> listar_FotosPendentes($conec);
            
              while($row = $result->fetch(PDO::FETCH_OBJ)) { 
                echo "<div class='col-lg-4 col-md-6'>
                    <div class='journal-info'>
                      <a href='model/dao/ListarFoto.php?id=$row->id_foto'><img src='../model/dao/ListarFoto.php?id=$row->id_foto' class='img-responsive' alt='img'></a>
                        <h4><a href='blog-single.html'><br></a></h4>
                        <button class='form-control'><a href='../controller/cadastrar_publicacao.php?id_f=$row->id_foto'>Aceitar</a></button>   
                        <button class='form-control'><a href='../controller/recusar_publicacao.php?id_f=$row->id_foto'>Recusar</a></button>
                    </div>  
                  </div>";
                } 
           ?>
          </div>
        </div>
      </div>
    </div>
  </div>
<br><br><br><br>
<?php
	include_once '../view/rodape.php';
?>