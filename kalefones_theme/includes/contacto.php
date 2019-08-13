<div class="serviceOne inner-page-cover overlay" style="background-image: url('<?= bloginfo('template_directory')?>/images/contact.jpg');background-size: cover;box-shadow: inset 0 0 0 1000px rgba(0,0,0,.3);" data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-8 text-center" data-aos="fade-up" data-aos-delay="400">
            <h1 class="mb-4">Contáctanos</h1>
          </div>
        </div>
      </div>
    </div>
    
    
    <div class="site-section">
    <div class="container">
      <div class="row">
  
        <div class="col-md-12 col-lg-7 mb-5">
  
  
          <form id="formContact" action="<?= bloginfo('template_directory')?>/php/sendmail.php" method="post">
  
            <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="fullname">Nombre</label>
                <input type="text" id="fullname" name="nombreForm" class="form-control" placeholder="Ingresa tu Nombre">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="telefono">Teléfono</label>
                <input type="text" id="telefono" name="telefonoForm" class="form-control" placeholder="Ingrese su nro telefonico">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="email">Email</label>
                <input type="email" id="email" name="emailForm" class="form-control" placeholder="ejemplo@dominio.cl">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="subject">Asunto</label>
                <input type="text" id="subject" name="asuntoForm" class="form-control" placeholder="Ingresa Asunto">
              </div>
            </div>
  
  
            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="message">Mensaje</label>
                <textarea id="message" name="mensajeForm" cols="30" rows="5" class="form-control"
                  placeholder="Cuentanos que solicitas"></textarea>
              </div>
            </div>
  
            <div class="row form-group">
              <div class="col-md-12">
                <input type="submit" id="btnEnviarForm" value="Enviar Mensaje" class="btnGasfiter btn btn-primary py-3 px-4">

                <div id="logoLoading" style="text-align: center;">
                      <img src="<?= bloginfo('template_directory')?>/images/loading.svg" id="logoajax" style="display: none" alt="Gasfiteria Ainol">
                  </div>
              </div>
            </div>
  
  
          </form>
        </div>
  
        <div class="col-lg-4 ml-auto">
          <div class="p-4 mb-3 bg-white">
            <h3 class="h5 text-black mb-3">Información de Contacto</h3>
            <p class="mb-0 font-weight-bold text-black">Dirección</p>
            <p class="mb-4 text-black">Lautaro 870, Coyhaique</p>
  
            <p class="mb-0 font-weight-bold text-black">Teléfono</p>
            <p class="mb-4"><a href="#">+569 98912759</a></p>
  
            <p class="mb-0 font-weight-bold text-black">Correo Electrónico</p>
            <p class="mb-0"><a href="mailto:Gasfiteria.ainol@gmail.com">Gasfiteria.ainol@gmail.com</a></p>
  
          </div>
  
          
        </div>
      </div>
    </div>
  </div>