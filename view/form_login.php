<?php
	include '../view/cabecalho_inicial.php';
?>
	<!-- start sectoion contact -->
  <br><br>
  <div id="contact" class="paddsection">
    <div class="container">
      <div class="contact-block1">
        <div align="center">

          <div class="col-lg-5">
            <div class="contact-contact">
              <center><h2 class="mb-30">Entre</h2></center>
            </div>
            <form action="../controller/iniciar_sessao.php" method="post" role="form">
              <div class="row">

                <div class="col-lg-12">
                  <div class="form-group contact-block1">
                    <input type="text" name="login" class="form-control" required="" id="name" placeholder="login" />

                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="form-group">
                    <input type="password" class="form-control" required="" name="senha" id="password" placeholder="senha" data-rule="password" data-msg="Please enter a valid password" />

                  </div>
                </div>

                <div class="col-lg-12">
                  <input type="submit" class="btn btn-defeault btn-send" value="Entrar">
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
	include_once '../view/rodape.php';
?>