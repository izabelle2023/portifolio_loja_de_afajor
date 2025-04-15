<?php
include('verifica_login.php');
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>UNIVERSO DE ALFAJOR</title>

  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,600,700&display=swap" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
</head>


<body>
  <div class="hero_area">
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.php">
            <img src="./images/logo (1).png" alt="">
          </a>
          <h2>Olá, <?php echo $_SESSION['nome'];?></h2>
          <h2><a href="logout.php">Sair</a></h2>
          <div class="navbar-collapse" id="">
            <div class="d-none d-lg-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item">
                  <a class="nav-link" href="entrar.php">
                    <span>Login</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="cadastro.php">

                    <span>Cadastre-se aqui!</span>
                  </a>
                </li>
              </ul>
              <form class="form-inline my-2 mb-3 mb-lg-0 mr-5">
              </form>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <section class=" slider_section position-relative">

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-3 offset-md-2">
                <div class="slider_detail">
                  <h1>
                    Diversidade de 
                    <span>
                      Sabores
                    </span>
                  </h1>
                  <p>
                   Você não pode comprar felicidade, mas pode comprar brigadeiro gourmet que é quase a mesma coisa;
                  </p>
                  
                </div>
              </div>
              <div class="col-md-7">
                <div class="slider_img-box">
                  <img src="images/topo.png" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-3 offset-md-2">
                <div class="slider_detail">
                  <h1>
                    Diversidade de
                    <span>
                      Sabores
                    </span>
                  </h1>
                  <p>
                    Para você que está pensando só em política, venho dizer que meus doces gourmets são um ótimo partido;
                  </p>
                  
                </div>
              </div>
              <div class="col-md-7">
                <div class="slider_img-box">
                  <img src="images/topo2.webp" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-container">
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

    </section>

  </div>
 <section class="about_section layout_padding">
    <div class="container">
      <h2>
        SABORES
      </h2>
    </div>

    <div class="container">
      <div class="about_card-container">
        <div class="about_card">
          <div class="about-detail">
            <div class="about_img-box">
              <img src="images/doce.jpg" alt="">
            </div>
            <div class="card_detail-ox">
              <h4>
                DOCE DE LEITE
              </h4>
              <p>
              O mais delicioso alfajor!
              Feito com recheio cremoso de doce de leite e cobertura de chocolate na medida.
              </p>
                <h2>
                  R$20.00
                </h2>
            </div>
          </div>
          <div>
            <a href="carrinho.php" class="about_btn">
              Clique Aqui!
            </a>
          </div>
        </div>
        <div class="about_card">
          <div class="about-detail">
            <div class="about_img-box">
              <img src="images/aoleite.png" alt="">
            </div>
            <div class="card_detail-ox">
              <h4>
                CHOCOLATE AO LEITE
              </h4>
              <p>
              O mais delicioso alfajor!
              Feito com recheio cremoso e cobertura de chocolate ao leite na medida.
              </p>
              <h2>
                  R$20.00
              </h2>
            </div>
          </div>
          <div>
            <a href="carrinho.php" class="about_btn">
              Clique Aqui!
            </a>
          </div>
        </div>
        <div class="about_card">
          <div class="about-detail">
            <div class="about_img-box">
              <img src="images/branco.jpg" alt="">
            </div>
            <div class="card_detail-ox">
              <h4>
                CHOCOLATE BRANCO
              </h4>
              <p>
                O mais delicioso alfajor!
                Feito com recheio cremoso e cobertura de chocolate branco na medida.
              </p>
              <h2>
                  R$20.00
                </h2>
            </div>
          </div>
          <div>
            <a href="carrinho.php" class="about_btn">
              Clique Aqui!
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="team_section layout_padding">
    <div class="container">
      <h2>
        NOSSOS CONTATOS
      </h2>
    </div>
    
    <div class="container">
      <div class="about_card-container">
        <div class="about_card">
          <div class="about-detail">
            <div class="about_img-box">
              <img src="images/whatsapp.png" alt="">
            </div>
            <div class="card_detail-ox">
              <h4>
                WHATSAPP
              </h4>
            </div>
          </div>
          <div>
            <a href="https://chat.whatsapp.com/C7AhF4j2ErDBd4gMQ0dIpe" class="about_btn">
              Clique Aqui!
            </a>
          </div>
        </div>
        <div class="about_card">
          <div class="about-detail">
            <div class="about_img-box">
              <img src="images/facebook.png" alt="">
            </div>
            <div class="card_detail-ox">
              <h4>
                FACEBOOK
              </h4>
            </div>
          </div>
          <div>
            <a href="https://www.facebook.com/Universo-do-alfajor-108911888520650" class="about_btn">
              Clique Aqui!
            </a>
          </div>
        </div>
        <div class="about_card">
          <div class="about-detail">
            <div class="about_img-box">
              <img src="images/insta.png" alt="">
            </div>
            <div class="card_detail-ox">
              <h4>
                INSTAGRAM
              </h4>
            </div>
          </div>
          <div>
            <a href="https://www.instagram.com/universo_do_alfajor/" class="about_btn">
              Clique Aqui!
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact_section layout_padding">
    <div class="container">
      <p>
        Faça a sua 
      </p>
      <h2 class="">
        ENCOMENDA
      </h2>
    </div>
    <div class="container">

      <div class="row">
        <div class="col-md-6 ">
          <form action="">
            <div class="contact_form-container">
              <div>
                <div>
                  <label>
                    Nome:
                    <input type="text" />
                  </label>
                </div>
                <div>
                  <label>
                    Telefone:
                    <input type="email" />
                  </label>
                </div>

                <div>
                  <label>
                    Itens:
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                  </label>
                </div>
                <div class="mt-5">
                  <button type="submit">
                    Finalizar
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div class="contact_img-box">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3837.8328029779163!2d-48.032117184528246!3d-15.865382528933065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a2d97a15b0507%3A0x3c3e4472ee75d834!2sUniversidade%20Cat%C3%B3lica%20de%20Bras%C3%ADlia%20(UCB)%20-%20C%C3%A2mpus%20Taguatinga!5e0!3m2!1spt-BR!2sbr!4v1654804488484!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
 
  <section class="info_section layout_padding">
    <div class="container info_content">
      <div>
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6">
                <h5>
                  Contato:
                </h5>
                <ul>
                  <li>
                    <a href="">
                      (61) 9-8653-2640
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-md-6">
                <h5>
                 Locais de  Vendas:
                </h5>
                <ul>
                  <li>
                    <a href="">
                      Centro Oeste (DF)
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="form_container mt-5">
            </div>
          </div>
          <div class="col-md-6">
            <div class="info_img-box">
              <img src="images/alfajor.png" alt="">
            </div>
            
          </div>


        </div>
      </div>

    </div>
  </section>

  <hr class="footer_hr">

  <section class="container-fluid footer_section">
    <p>
      &copy;
      Direitos Reservados a programadora Izabelle
      <a href="https://html.design/"></a>
    </p>
  </section>

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>



  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width")
      document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
    }
  </script>


</body>

</html>