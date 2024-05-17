<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="logo_footer">
          <div class="row p-3">
            <div class="col-lg-3 text-center text-lg-start mb-4">
              <a href="#"><img src="images/logo_header.png" class="img-fluid" width="150" alt=""></a>
            </div>
            <div class="col-lg-9 text-center text-lg-start">
              <p class="mb-4">Assuntos jurídicos podem gerar várias dúvidas e preocupações. Diante disso, é de suma importância
                consultar um especialista para auxiliar nos esclarecimentos e defesa dos seus direitos.
                Como um escritório comprometido com a justiça, estamos sempre à disposição
                para buscar a melhor solução para os nossos clientes.</p>

              <a href=""><i class="fa-brands fa-instagram fs-4 me-3"></i></a>
              <a href=""><i class="fa-regular fa-envelope fs-4"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 text-end d-none d-lg-block">
        <div class="img_footer">
          <img src="images/img06.png" class="img-fluid" width="200" alt="">
        </div>
      </div>
    </div>
  </div>
</footer>
<div class="container copy">
  <p class="text-center text-lg-end mt-3">Ariz Áspera Advocacia. Todos os direitos reservados.</p>
</div>


<!-- Jquery needed -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/nav.js"></script>

<script>
  $(window).scroll(function() {
    if ($(document).scrollTop() > 50) {
      $('.nav').addClass('affix');
      console.log("OK");
    } else {
      $('.nav').removeClass('affix');
    }
  });
</script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var fadeEndElements = document.querySelectorAll('.fade-end');

    function checkFadeEnd() {
      fadeEndElements.forEach(function(element) {
        var positionFromTop = element.getBoundingClientRect().top;
        if (positionFromTop - window.innerHeight <= 0) {
          element.classList.add('fade-in');
        }
      });
    }
    window.addEventListener('scroll', checkFadeEnd);
    checkFadeEnd(); // Check on page load
  });
  //
  document.addEventListener('DOMContentLoaded', function() {
    var fadeStartElements = document.querySelectorAll('.fade-start');

    function checkFadeStart() {
      fadeStartElements.forEach(function(element) {
        var positionFromTop = element.getBoundingClientRect().top;
        if (positionFromTop - window.innerHeight <= 0) {
          element.classList.add('fade-in');
        }
      });
    }
    window.addEventListener('scroll', checkFadeStart);
    checkFadeStart(); // Check on page load
  });
  //
  document.addEventListener('DOMContentLoaded', function() {
    var fadeTopElements = document.querySelectorAll('.fade-top');

    function checkFadeTop() {
      fadeTopElements.forEach(function(element) {
        var positionFromTop = element.getBoundingClientRect().top;
        if (positionFromTop - window.innerHeight <= 0) {
          element.classList.add('fade-in');
        }
      });
    }
    window.addEventListener('scroll', checkFadeTop);
    checkFadeTop(); // Check on page load
  });
</script>


<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
  })()
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>