<?php include 'header.php' ?>

<style>
  .banner {
    width: 100%;
    height: 250px;
    background-image: url("images/banner_header.png");
    background-repeat: no-repeat;
    background-position: center !important;
    background-size: cover;
    padding-top: 25px;
  }
</style>

<div class="container">

  <h1 class="tit_page" style="margin-top: 100px;">Fale com uma advogada especialista!</h1>

  <div class="home_advocacia">
    <div class="row m-0">
      <div class="col-lg-6 d-none d-lg-block"><img src="images/img16.jpg" class="img-fluid px-lg-5 px-0" alt=""></div>
      <div class="col-lg-6 px-lg-5 px-3 fade-start">

        <?php if (isset($_SESSION["msg"])) { ?>
          <div class="alert alert-success" role="alert">
            <?php echo $_SESSION['msg']; ?>
          </div>
        <?php unset($_SESSION["msg"]);
        } ?>

        <?php if (isset($_SESSION["erro"])) { ?>
          <div class="alert alert-danger" role="alert">
            <?php echo $_SESSION['erro']; ?>
          </div>
        <?php unset($_SESSION["erro"]);
        } ?>

        <form method="POST" action="email.php" class="form_contato needs-validation" enctype="multipart/form-data" novalidate>

          <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" required>
            <div class="invalid-feedback">Este campo é obrigatório</div>
          </div>

          <div class="mb-3">
            <label class="form-label">E-mail</label>
            <input type="email" class="form-control" name="email" required>
            <div class="invalid-feedback">Este campo é obrigatório</div>
          </div>

          <div class="mb-3">
            <label class="form-label">Telefone | WhatsApp</label>
            <input type="tel" class="form-control" name="contato" required>
            <div class="invalid-feedback">Este campo é obrigatório</div>
          </div>

          <div class="mb-3">
            <label class="form-label">Mensagem</label>
            <textarea class="form-control" rows="6" name="mensagem" required></textarea>
            <div class="invalid-feedback">Este campo é obrigatório</div>
          </div>

          <div class="input-group mb-4">
            <input type="file" class="form-control" name="arquivo">
          </div>

          <button type="submit" class="btn botao">Enviar</button>
        </form>


        <div class="home_advocacia_contato">
          <a href="">
            <p><i class="fa-regular fa-envelope"></i>contato@arizeasperaadvocacia.com</p>
          </a>

          <a href="https://www.instagram.com/arizeasperaadv/" target="_blank">
            <p><i class="fa-brands fa-instagram"></i></i>@arizeasperaadv</p>
          </a>

          <a href="https://api.whatsapp.com/send?phone=7199763618" target="_blank">
            <p><i class="fa-brands fa-whatsapp"></i>71 9976-3618</p>
          </a>

          <p><i class="fa-regular fa-building"></i>Rua Dr. José Peroba, n 149, Centro Empresarial Eldorado, sala 301, Stiep, Salvador, Bahia, Brazil</p>


        </div>

      </div>
    </div>
  </div>

</div>

<?php include 'footer.php' ?>