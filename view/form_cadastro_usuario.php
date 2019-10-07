<?php
	include '../view/cabecalho_inicial.php';
?>
	<!-- start sectoion contact -->
  <br><br>
  <div id="contact" class="paddsection">
    <div class="container">
      <div class="contact-block1">
        <div align="center">

          <div class="col-lg-10">
            <div class="contact-contact">
              <center><h2 class="mb-30">Cadastre-se</h2></center>
            </div>
            <form action="../controller/cadastrar_Usuario.php" method="post" role="form" class="contactForm">
              <div class="row">

                <div id="errormessage">Falha ao Cadastrar!</div>

                <div class="col-lg-12">
                  <div class="form-group">
                    <input type="text" class="form-control" required="" name="nome" id="nome" placeholder="nome"/>
                    <div class="validation"></div>
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="form-group">
                    <input type="email" class="form-control" required="" name="email" id="email" placeholder="email" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="text" name="login" class="form-control" required="" id="login" placeholder="login"/>
                    <div class="validation"></div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="password" class="form-control" required="" name="senha" id="password" placeholder="senha"/>
                    <div class="validation"></div>
                  </div>
                </div>

                <div class="col-lg-12">
                  <input type="submit" class="btn btn-defeault btn-send" value="Cadastrar">
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