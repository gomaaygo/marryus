<?php 
    session_start();
    if(!strcmp($_SESSION['nivel'],"1")){
      include '../view/menu_adm.php';
    }else{
      include '../view/menu_usuario.php';
    }
?>
		<!-- start sectoion contact -->
  <br><br><br><br>
  <div id="contact" class="paddsection">
    <div class="container">
      <div class="contact-block1">
        <div align="center">

          <div class="col-lg-10">
            <div class="contact-contact">
              <center><h2 class="mb-30">Postar Foto    <i class="material-icons">add_a_photo</i></h2></center>
            </div>
            <form action="../controller/post_adm.php" method="post" role="form" enctype="multipart/form-data">
              <input type="hidden" name="id_usuario" value="<?php echo $_SESSION['id_usuario']; ?>"/>
              <div class="row">              
                <div class="col-lg-12">
                  <div class="form-group ">
                    <input class="form-control" required="" type="file" name="file"/>
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <input type="submit" class="btn btn-defeault btn-send" value="Postar">

                </div>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- start sectoion contact -->


<?php 
	include '../view/rodape.php';
?>