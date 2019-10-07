<?php 
    session_start();
    if(!strcmp($_SESSION['nivel'],"1")){
      include '../view/menu_adm.php';
    }else{
      include '../view/menu_usuario.php';
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
        <h2>Fotos</h2>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <div class="portfolio-list">

            <ul class="nav list-unstyled" id="portfolio-flters">
              <li class="filter filter-active" data-filter=".all">all</li>
              <li class="filter" data-filter=".branding">branding</li>
              <li class="filter" data-filter=".mockups">mockups</li>
              <li class="filter" data-filter=".uikits">ui kits</li>
              <li class="filter" data-filter=".webdesign">web design</li>
              <li class="filter" data-filter=".photography">photography</li>
            </ul>

          </div>

          <div class="portfolio-container">

            <div class="col-lg-4 col-md-6 portfolio-thumbnail all branding uikits webdesign">
              <a class="popup-img" href="images/portfolio/1.jpg">
                <img src="images/portfolio/1.jpg" alt="img">
              </a>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-thumbnail all mockups uikits photography">
              <a class="popup-img" href="images/portfolio/2.jpg">
                <img src="images/portfolio/2.jpg"  alt="img">
              </a>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-thumbnail all branding webdesig photographyn">
              <a class="popup-img" href="images/portfolio/3.jpg">
                <img src="images/portfolio/3.jpg" alt="img">
              </a>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-thumbnail all mockups webdesign photography">
              <a class="popup-img" href="images/portfolio/4.jpg">
                <img src="images/portfolio/4.jpg" alt="img">
              </a>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-thumbnail all branding uikits photography">
              <a class="popup-img" href="images/portfolio/5.jpg">
                <img src="images/portfolio/5.jpg" alt="img">
              </a>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-thumbnail all mockups uikits webdesign">
              <a class="popup-img" href="images/portfolio/6.jpg">
                <img src="images/portfolio/6.jpg" alt="img">
              </a>
            </div>

          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- End section portfolio -->

<?php 
	include '../view/rodape.php';
?>