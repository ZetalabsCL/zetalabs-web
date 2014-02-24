<!DOCTYPE html>
<html>
<head>
  <!-- Title -->
  @yield('title')

  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

  <!-- Favicon -->
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
  <!-- For iPhone 4 Retina display: -->
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114x114-precomposed.png">
  <!-- For iPad: -->
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72x72-precomposed.png">
  <!-- For iPhone: -->
  <link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57x57-precomposed.png">

  <!-- Google Web Fonts -->
  {{ HTML::style('http://fonts.googleapis.com/css?family=Oswald:300'); }}


  <!-- Bootstrap CSS -->
  {{ HTML::style('css/bootstrap.min.css'); }}

  <!-- Custom CSS -->
  {{ HTML::style('css/style.css'); }}


  <!--[if lt IE 9]>
  {{ HTML::script('http://html5shim.googlecode.com/svn/trunk/html5.js'); }}
  {{ HTML::script('http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js'); }}
    <![endif]-->

</head>
<body data-spy="scroll" data-target="#primary-navigation">

  <!--BEGIN: Navigation -->
  @yield('menu')
  <!--END: Navigation -->

  <!--BEGIN: Project Carousel-->
  @yield('carrusel')
  <!--END: Project Carousel-->

  <!--BEGIN: Main Container -->
  <div class="container">
    <p>&nbsp;</p>
    <div class="row">
      <div class="span12">
        <div class="action layers">
          <div class="action-inside clearfix">
            <h2>Zetalabs, desarrollo tecnologico a la medida de tus necesidades</h2>
            <p>Nulla at ultrices neque. Cras metus erat, pulvinar vel interdum eu, interdum et nibh.</p>
          </div>
        </div>
      </div>
    </div>
    <!--BEGIN: About -->
    <section id="nosotros">
      <article class="page">
        <div class="row">
          <div class="span12">
            <h2 class="page-title">NOSOTROS <a class="to-top scroll-page" href="#home" title="Ir Arriba"><i class="icon-chevron-up"></i></a></h2>
          </div>
          <div class="span8">
            <div class="action layers">
              <div class="action-inside clearfix">
                <h2>SOMOS ZETALABS</h2>
                <p>Compañia chilena experta en desarrollo tecnologico para pequeñas y medianas empresas. Utilizamos los estandares de la industria para darte el mejor servicio y la innovacion, al alcance de un click.</p>
              </div>
            </div>
          </div>
          <div class="span4">
            <div class="well layers">
              <h5>Sobre nosotros...</h5>
              <p>Nuestra experiencia con Zetalabs ha sido de lo mejor, tanto en la implementacion de nuestras plataformas, como en el mantenimiento de nuestros sistemas. Servicio de primer nivel.</p>
              <a href="#" class="label label-info"><strong>Erika Marin</strong></a> <small>Gte. Administracion</small> | <small>Mersen Chile</small> </div>
          </div>
        </div>

        <div class="row">
          <div class="span4">
            <h5><i class="icon icon-chevron-right"></i> EXPERIENCIA</h5>
            <p><small>Estamos de ambos lasdos de la vereda, tambien somos usuarios, conocemos los problemas que tienen las empresas y su relacion con la tecnologia, por eso podemos ayudarte, por que a nosotros tambien nos a pasado.</small></p>
          </div>
          <div class="span4">
            <h5><i class="icon icon-chevron-right"></i> FILOSOFIA</h5>
            <p><small>Parte del exito de nuestros servicios radica en la Filosofia que predicamos, no existen los imposibles, solo nuevos desafios por superar. Todos los dias nos encontramos con desafios, nuestra filosofia es decifrarlos e implementarlos de la mejor forma para su empresa.</small></p>
          </div>
          <div class="span4">
            <h5><i class="icon icon-chevron-right"></i> METODOLOGIA</h5>
            <p><small>Nos caracterizamos por innovar, pero sin dejar de lado la principal premisa de nuestra empresa, "primero esta la necesidad del cliente, despues nuestra pasion por la tecnologia".</small></p>
          </div>
        </div>

        <div class="row">
          <div class="span8">
            <h3>Nuestro Equipo <small class="label label-info">Haz click en la imagen para expandir su contenido.</small></h3>
            <ul class="thumbnails">
              <li class="span2">
                <div class="well well-small layers"> <a href="#bio2" class="thumbnail" data-toggle="modal"> <img src="http://placehold.it/160x120" alt=""> </a>
                  <h6>Reinaldo Zurita</h6>
                  <label class="label label-info">Gerente Tecnologia</label>
                </div>

                <!--Modal-->
                <div class="modal hide fade" id="bio2" tabindex="-1" role="dialog">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3>Reinaldo Zurita - Gerente Tecnologia</h3>
                  </div>
                  <div class="modal-body">
                    <p><img src="http://placehold.it/200x300" alt="" class="team-bigger-pic"> Apasionado por la tecnologia, emprendedor por naturaleza, me gusta tener trato directo con los clientes y ponerme en su lugar a la hora de implementar soluciones. Veo la tecnologia como una herramienta social, para mejorar tanto nosotros como nuestro entorno. </p>
                  </div>
                  <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
                  </div>
                </div>
                <!--Modal-->

              </li>
              <li class="span2">
                <div class="well well-small layers"> <a href="#bio3" class="thumbnail" data-toggle="modal"> <img src="http://placehold.it/160x120" alt=""> </a>
                  <h6>Ulises Quezada</h6>
                  <label class="label label-info">Director Area Dise&ntilde;o</label>
                </div>

                <!--Modal-->
                <div class="modal hide fade" id="bio3" tabindex="-1" role="dialog">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3>Ulises Quezada - Director Area Dise&ntilde;o</h3>
                  </div>
                  <div class="modal-body">
                    <p><img src="http://placehold.it/200x300" alt="" class="team-bigger-pic"> Like you, we love building awesome products on the web. We love it so much, we decided to help people just like us do it easier, better, and faster. Bootstrap is built for you. This Biz theme is designed to help people of all skill levels designer or developer, huge nerd or early beginner. </p>
                  </div>
                  <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
                  </div>
                </div>
                <!--Modal-->

              </li>
              <li class="span2">
                <div class="well well-small layers"> <a href="#bio4" class="thumbnail" data-toggle="modal"> <img src="http://placehold.it/160x120" alt=""> </a>
                  <h6>Some Name</h6>
                  <label class="label label-info">Developer</label>
                </div>

                <!--Modal-->
                <div class="modal hide fade" id="bio4" tabindex="-1" role="dialog">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3>Some Name - Developer</h3>
                  </div>
                  <div class="modal-body">
                    <p><img src="http://placehold.it/200x300" alt="" class="team-bigger-pic"> Like you, we love building awesome products on the web. We love it so much, we decided to help people just like us do it easier, better, and faster. Bootstrap is built for you. This Biz theme is designed to help people of all skill levels designer or developer, huge nerd or early beginner. </p>
                  </div>
                  <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
                  </div>
                </div>
                <!--Modal-->

              </li>
            </ul>
          </div>
      </article>
    </section>
    <!--END: About -->

    <!--BEGIN: Features -->
    <section id="servicios">
      <article class="page">
        <div class="row">
          <div class="span12">
            <h2 class="page-title">Servicios <a class="to-top scroll-page" href="#home" title="Ir Arriba"><i class="icon-chevron-up"></i></a></h2>
          </div>
        </div>
        <div class="row">
          <div class="span4">
            <div class="well layers">
              <h3>Desarrollo Web</h3>
              <p>Nos gusta la tecnologia, el diseño y los estandares, desarrollamos sitios web para nosotros, es decir, para nuestros clientes, pero que nosotros disfrutariamos y nos sentiriamos orgullosos. Sabemos acercar la tecnologia a las Pymes, el primer paso es un sitio web de calidad.</p>
            </div>
          </div>
          <div class="span4">
            <div class="well layers">
              <h3>Desarrollo Sistemas</h3>
              <p>Tu empresa es la informacion que manejas, y como la manejas. Nosotros desarrolamos soluciones tecnologicas que te ayudan a trabajar con esa informacion de la mejor manera, de una forma simple, intuitiva y amigable. Dinos que quieres, nosotros te decimos como.</p>
            </div>
          </div>
          <div class="span4">
            <div class="well layers">
              <h3>Soporte e Implementacion</h3>
              <p>La tecnologia es parte de nuestra vida, sabemos entenderla y mejorarla, ten toda nuestra experiencia y conocimientos al servicio de tu empresa. Algun problema? estamos ahi para ayudarte y lograr que tu experiencia con la tecnologia sea de la mejor manera, sin contratiempos ni sorpresas.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="span4">
            <div class="alert alert-info layers">
              <h5><i class="icon icon-briefcase"></i> Sitios web multiplataforma</h5>
              <small>La web cambia a cada minuto, nosotros te ayudamos a seguir ese ritmo y desarrollamos sitios web multi-plataforma y multi-dispositivo que te permitan a ti y tus clientes disfrutar de la experiencia movil online.</small> </div>
          </div>
          <div class="span4">
            <div class="alert alert-warning layers">
              <h5><i class="icon icon-briefcase"></i> Sistemas de Gestion</h5>
              <small>Desarrollamos sistemas de gestion a la medida de tus necesidades y adaptados a tu realidad. Hacemos que tu sistema se adapte a ti, no que tu te adaptes a tu sistema.</small> </div>
          </div>
          <div class="span4">
            <div class="alert alert-success layers">
              <h5><i class="icon icon-align-center"></i> Soporte de Redes y Servidores</h5>
              <small>Aprovecha al maximo las capacidades de tu empresa, nosotros te ayudamos, poniendo a la tecnologia de tu lado. Mantenemos Servidores y Redes de gran escala. </small> </div>
          </div>
      </article>
      <article class="page">

        <div class="row">
          <div class="span4">
            <div class="well">
              <h2>Soluciones de Software & Servicios TI</h2>
              <p>Like you, we love building awesome products on the web. We love it so much, we decided to help people just like us do it easier, better, and faster. Bootstrap is built for you. This Biz theme is designed to help people of all skill levels designer or developer, huge nerd or early beginner.</p>
            </div>
          </div>
          <div class="span4">
            <h5><i class="icon icon-briefcase"></i> Web Design & development</h5>
            <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</small>
            <hr />
          </div>
          <div class="span4">
            <h5><i class="icon icon-move"></i> Mobile Apps</h5>
            <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</small>
            <hr />
          </div>
          <div class="span4">
            <h5><i class="icon icon-eye-open"></i> Search Engine Optimization</h5>
            <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</small> </div>
          <div class="span4">
            <h5><i class="icon icon-bookmark"></i> IT Consulting</h5>
            <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</small> </div>
        </div>

        <hr />

        <div class="row">
          <div class="span3">
            <h4>Java Platform</h4>
            <small>
            <ul>
              <li>Enterprise Architecture</li>
              <li>SAAS</li>
              <li>SOA</li>
              <li>Structs/JSF/JSP/EJP/J2EE</li>
              <li>Eclipse PDE</li>
              <li>Apache Foundation</li>
              <li>Meta Data</li>
              <li>Lucen</li>
            </ul>
            </small> </div>
          <div class="span3">
            <h4>Microsoft Platform</h4>
            <small>
            <ul>
              <li>.NET (Desktop/Mobile /Web APPS)</li>
              <li>Office Automation</li>
              <li>Custom Authentication</li>
              <li>Exchange Server</li>
            </ul>
            </small> </div>
          <div class="span3">
            <h4>Web Solutions</h4>
            <small>
            <ul>
              <li>Custom Application</li>
              <li>E-Commerce</li>
              <li>Os-Commerce</li>
              <li>Drupal</li>
              <li>Joomla</li>
              <li>E-learning</li>
              <li>LAMP</li>
              <li>Portals</li>
            </ul>
            </small> </div>
          <div class="span3">
            <h4>Testing Solutions</h4>
            <small>
            <ul>
              <li>Manual/Automated Load Testing</li>
              <li>Performance</li>
              <li>Multi User Testing</li>
              <li>Distributed Deployment</li>
            </ul>
            </small> </div>
        </div>

        <hr />

        <blockquote>
          <div class="well">
            <p><em>I recommend this company as a highly reliable and professional web development company. They developed a big B2B marketplace for us. The project was done on time an on budget that was extremely important for our organization.</em></p>
            <p><small><strong>Tom</strong>, CTO | USA </small> </p>
          </div>
        </blockquote>
        <hr />

      </article>
    </section>
    <!--END: Features -->

    <!--BEGIN: Services -->

    <!--END: Services -->

    <!--BEGIN: Work -->
    <section id="portafolio">
      <article class="page">
        <div class="row">
          <div class="span12">
            <h2 class="page-title">PORTAFOLIO <a class="to-top scroll-page" href="#home" title="Ir Arriba"><i class="icon-chevron-up"></i></a></h2>
          </div>
          <div class="span12">
            <p><strong>Selecciona el tipo de trabajo:</strong></p>
            <ul class="nav nav-pills" id="work-tabs">
              <li class="active"><a href="#work-featured" data-toggle="pill">Destacado</a></li>
              <li><a href="#work-web" data-toggle="pill">Web</a></li>
              <li><a href="#work-print" id="print" data-toggle="pill">Impresion</a></li>
              <li><a href="#work-mobile" data-toggle="pill">Movil</a></li>
              <li><a href="#work-illustration" data-toggle="pill">Ilustraciones</a></li>
            </ul>
            <div class="tab-content">
              <!--BEGIN: Work Featured-->
              <div class="tab-pane fade in active" id="work-featured">
                <div class="row">
                  <div class="span6">
                    <div class="action layers">
                      <div class="action-inside clearfix">
                        <h5>Project Name</h5>
                        <a href="#" class="thumbnail" > <img src="http://placehold.it/520x380" alt=""> </a> </div>
                    </div>
                  </div>
                  <div class="span6">
                    <div class="well">
                      <h4>There are 4 types of layout for the portfolio/work. Please select type of work and notice how you can place your deisgn work in different manner.</h4>
                      <p><small>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</small></p>
                    </div>
                    <ul class="thumbnails clearfix">
                      <li class="span3">
                        <div class="action layers">
                          <div class="action-inside clearfix">
                            <h5>Project Name</h5>
                            <a href="#" class="thumbnail"> <img src="http://placehold.it/320x270" alt=""> </a> </div>
                        </div>
                      </li>
                      <li class="span3">
                        <div class="action layers">
                          <div class="action-inside clearfix">
                            <h5>Project Name</h5>
                            <a href="#" class="thumbnail"> <img src="http://placehold.it/320x270" alt=""> </a> </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!--END: Work Featured-->
              <!--BEGIN: Work Web-->
              <div class="tab-pane fade" id="work-web">
                <ul class="thumbnails">
                  <li class="span4"> <a href="#" class="thumbnail"> <img src="http://placehold.it/360x270" alt=""> </a> </li>
                  <li class="span3"> <a href="#" class="thumbnail"> <img src="http://placehold.it/260x120" alt=""> </a> </li>
                  <li class="span5"> <a href="#" class="thumbnail"> <img src="http://placehold.it/460x120" alt=""> </a> </li>
                  <li class="span3"> <a href="#" class="thumbnail"> <img src="http://placehold.it/260x120" alt=""> </a> </li>
                  <li class="span3"> <a href="#" class="thumbnail"> <img src="http://placehold.it/260x120" alt=""> </a> </li>
                  <li class="span2"> <a href="#" class="thumbnail"> <img src="http://placehold.it/160x120" alt=""> </a> </li>
                </ul>
              </div>
              <!--END: Work Web-->
              <!--BEGIN: Work Print-->
              <div class="tab-pane fade" id="work-print">
                <ul class="thumbnails">
                  <li class="span6"> <a href="#" class="thumbnail"> <img src="http://placehold.it/560x270" alt=""> </a> </li>
                  <li class="span3"> <a href="#" class="thumbnail"> <img src="http://placehold.it/260x120" alt=""> </a> </li>
                  <li class="span3"> <a href="#" class="thumbnail"> <img src="http://placehold.it/260x120" alt=""> </a> </li>
                  <li class="span2"> <a href="#" class="thumbnail"> <img src="http://placehold.it/160x120" alt=""> </a> </li>
                  <li class="span2"> <a href="#" class="thumbnail"> <img src="http://placehold.it/160x120" alt=""> </a> </li>
                  <li class="span2"> <a href="#" class="thumbnail"> <img src="http://placehold.it/160x120" alt=""> </a> </li>
                </ul>
              </div>
              <!--END: Work Prin-->
              <!--BEGIN: Work Mobile-->
              <div class="tab-pane fade" id="work-mobile">
                <ul class="thumbnails">
                  <li class="span4">
                    <div class="well layers"> <a href="#" class="thumbnail"> <img src="http://placehold.it/360x270" alt=""> </a> </div>
                  </li>
                  <li class="span4">
                    <div class="well layers"> <a href="#" class="thumbnail"> <img src="http://placehold.it/360x270" alt=""> </a> </div>
                  </li>
                  <li class="span4">
                    <div class="well layers"> <a href="#" class="thumbnail"> <img src="http://placehold.it/360x270" alt=""> </a> </div>
                  </li>
                </ul>
              </div>
              <!--END: Work Mobile-->
              <!--BEGIN: Work Mobile-->
              <div class="tab-pane fade" id="work-illustration">
                <ul class="thumbnails">
                  <li class="span12"> <a href="#" class="thumbnail"> <img src="http://placehold.it/1170x100" alt=""> </a> </li>
                  <li class="span4"> <a href="#" class="thumbnail"> <img src="http://placehold.it/360x270" alt=""> </a> </li>
                  <li class="span4"> <a href="#" class="thumbnail"> <img src="http://placehold.it/360x270" alt=""> </a> </li>
                  <li class="span4"> <a href="#" class="thumbnail"> <img src="http://placehold.it/360x120" alt=""> </a> </li>
                  <li class="span4"> <a href="#" class="thumbnail"> <img src="http://placehold.it/360x120" alt=""> </a> </li>
                </ul>
              </div>
              <!--END: Work Mobile-->
            </div>
          </div>
        </div>
      </article>
    </section>
    <!--END: Work -->

  </div>
  <!-- /.container -->
  <!--END: Main Container -->

  <!--BEGIN: Contact -->
  <section id="contacto">
    <article class="page">
      <div class="container">
        <div class="row">
          <div class="span12">
            <h2 class="page-title">CONTACTO <a class="to-top scroll-page" href="#home" title="Ir Arriba"><i class="icon-chevron-up"></i></a></h2>
          </div>
          <div class="span5">
            <div class="well well-small"> <iframe width="100%" height="180" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=Independencia,+Santiago,+Chile&hl=es-419&ie=UTF8&sll=37.0625,-95.677068&sspn=49.176833,92.988281&oq=independencia,+san&hnear=Independencia,+Santiago,+Regi%C3%B3n+Metropolitana,+Chile&t=m&z=16&amp;iwloc=near&amp;output=embed"></iframe> </div>
          </div>
          <div class="span3">
            <h4>Informacion de Contacto</h4>
            <p> <!--<i class="icon-user"></i> +1 888 8888 888<br> -->
              <i class="icon-envelope"></i> hola@zetalabs.cl<br>
              <!--<i class="icon-map-marker"></i> Independencia, Santiago, Chile </p>-->
            <hr>
            <h4>Nuestra Experiencia</h4>
            <small> Nuestra experiencia la forjamos contigo, dinos que necesitas, nosotros te damos la solucion tecnologica a tu medida. </small> </div>
          <div class="span3">
            <h4>Contactanos</h4>
            <form class="form" id="contact-form">
              <!--[if IE]><label for="name">Name</label><![endif]-->
              <input type="text" id="name" name="name" class="span3" style="margin-right:25px;" placeholder="Nombre" required>
              <!--[if IE]><label for="email">E-mail</label><![endif]-->
              <input id="email" type="text" class="span3" name="email" placeholder="Email" required>
              <!--[if IE]><label for="message">Message</label><![endif]-->
              <textarea id="message" name="message" placeholder="Mensaje" class="span3" rows="7" required></textarea>
              <button type="submit" class="btn btn-primary btn-small">Enviar Mensaje</button>
            </form>
          </div>
          <div class="span1 text-center social">
            <h4>Social</h4>
            <a href="http://facebook.com/zetalabs" rel="tooltip" title="Facebook"><img src="img/facebook.png" alt="" /></a> <a href="http://twitter.com/zetalabscl" rel="tooltip" title="Twitter"><img src="img/twitter.png" alt="" /></a> <a href="#" rel="tooltip" title="Google Plus"><img src="img/googleplus.png" alt="" /></a> <a href="#" rel="tooltip" title="LinkedIn"><img src="img/linkedin.png" alt="" /></a> <a href="#" rel="tooltip" title="Pin Interest"><img src="img/pininterest.png" alt="" /></a> </div>
        </div>
      </div>
    </article>
  </section>
  <!--END: Contact -->

  <!--BEGIN: Footer -->
  @yield('footer')
  <!--END: Footer-->

<!-- Scripts -->
{{ HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'); }}
{{ HTML::script('js/bootstrap.min.js'); }}
{{ HTML::script('js/jquery.validate.min.js'); }}
{{ HTML::script('js/custom.js'); }}

</body>
</html>
