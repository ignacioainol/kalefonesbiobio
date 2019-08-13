<? get_header() ?>
    
    <div class="site-blocks-cover overlay sectionOne" data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade" style="background:url('<?= bloginfo('template_directory')?>/images/bgTest.jpg');background-size:cover;background-position:center center;">
      
        <div class="video-container">
            <video autoplay="true" muted="true" loop="true">
              <source src="<?= bloginfo('template_directory')?>/video/gasfiteriaMovie.mp4" type="video/mp4">
              <source src="<?= bloginfo('template_directory')?>/video/gasfiteriaFinish1.webm" type="video/webm">
              <img src="<?= bloginfo('template_directory')?>/images/bgTest.jpg">
            </video>
        </div>

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-8 text-center" data-aos="fade-up" data-aos-delay="400">
            <h1 class="mb-4">Necesitas un Calefont?</h1>
            <p>Tenemos la solución. Nos especializamos en la venta, mantencion y servicio técnico de calefonts.</p>
            <!-- <p class="mb-5">Envíanos un mensaje directo por Whatsapp.</p> -->
            <a href="https://api.whatsapp.com/send?phone=+56998912759&text=Hola%20deseo%20realizar%20una%20cotización">
                <img src="<?= bloginfo('template_directory')?>/images/wspbtn.png" alt="">
            </a>

          </div>
        </div>
      </div>
    </div>
    
    
    <div class="site-section section-3">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-lg-6 section-title text-center">
            <h2>Servicios</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-2 d-flex">
              <div class="service-2-icon mr-3"><img src="<?= bloginfo('template_directory')?>/images/wrench.svg" width="50px" height="50px" alt="Filtraciones"></div>
              <div class="service-2-contents">
                <h3>Filtraciones</h3>
                <p>Reparación de fugas de agua y gas. Con o sin terminaciones.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-2 d-flex">
              <div class="service-2-icon mr-3"><img src="<?= bloginfo('template_directory')?>/images/pipes.svg" width="50px" height="50px" alt="Grifería"></div>
              <div class="service-2-contents">
                <h3>Grifería</h3>
                <p>Cambio griferias lavamanos - lavaplatos - ducha - logia. <br><br></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-2 d-flex">
              <div class="service-2-icon mr-3"><img src="<?= bloginfo('template_directory')?>/images/water-heater.png" width="50px" height="50px" alt="Calefones"></div>
              <div class="service-2-contents">
                <h3>Calefones</h3>
                <p>Venta y reparación, mantenciones, instalacines o recambio de equipos.</p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="row justify-content-center mb-5">
          <div class="col-lg-6 section-title text-center">
            <a href="servicios.html" class="btn btn-primary py-3 px-4 btnGasfiter">Más Servicios</a>
          </div>
        </div>
        
      </div>
    </div>

    <div class="site-section section-4 parallax">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 offset-lg-4 contactoDiv">
            <h2 style="text-align: center">Llámanos</h2>
            <h2 style="text-align: center"><a href="tel:98912759"><i class="fas fa-phone-alt"></i> +56998912759</a></h2>
          </div>
        </div>
      </div>
    </div>



    

    <div class="site-section section-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 mr-auto">
            <h2 class="mb-4"> Escríbenos y nos contactaremos contigo.</h2>
            <p>Si necesitas un presupuesto, o deseas contactarnos, escríbenos y nos pondremos en contacto contigo a la brevedad.</p>
          </div>
          <div class="col-lg-6">
            <div class="form-request">
              <h2>Contáctanos</h2>
              <form id="formContact" action="<?= bloginfo('template_directory')?>/php/sendmail.php" method="post">
                <div class="form-group">
                  <input type="text" class="form-control" name="nombreForm" id="nombreForm" placeholder="Nombre">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="emailForm" id="emailForm" placeholder="Tu email">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="telefonoForm" id="telefonoForm" placeholder="Número Telefónico">
                </div>
                <div class="form-group">
                  <textarea class="form-control" placeholder="Mensaje" name="mensajeForm" id="mensajeForm" cols="30" rows="2"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-primary btnGasfiter" id="btnEnviarForm" value="Enviar Mensaje">
                  <div id="logoLoading" style="text-align: center;">
                      <img src="<?= bloginfo('template_directory')?>/images/loading.svg" id="logoajax" style="display: none" alt="Gasfiteria Ainol">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="bg-primary" data-aos="fade" style="display: none">
      <div class="container">
        <div class="row">
          <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-facebook text-white"></span></a>
          <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-twitter text-white"></span></a>
          <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-instagram text-white"></span></a>
          <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-linkedin text-white"></span></a>
          <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-pinterest text-white"></span></a>
          <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-youtube text-white"></span></a>
        </div>
      </div>
    </div>

<? get_footer() ?>