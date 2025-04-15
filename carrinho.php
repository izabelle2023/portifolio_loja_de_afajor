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

<body class="sub_page">

  <body class="">
  <div class="hero_area">
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="index.php">
            <img src="./images/logo (1).png" alt="">
          </a>      
    </header>

  </div>
    <section class="portfolio_section layout_padding">
      <div class="container">
        <h2>
          CARRINHO DE COMPRA
        </h2>
      </div>
      <div align="center">
        <br>DOCE DE LEITE <strong>R$20.00</strong><br>
        qtd: <input type="number" value="1" min="1" max="10" id="qtd1">
        <button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('DOCE DE LEITE', document.getElementById('qtd1').value, '20.00', 1)"> Comprar </button>
      </div>
      
      <div align="center">
        <br>CHOCOLATE AO LEITE<strong>R$20.00</strong><br>
        qtd: <input type="number" value="1" min="1" max="10" id="qtd2">
        <button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('CHOCOLATE AO LEITE', document.getElementById('qtd2').value, '20.00', 2)"> Comprar </button>
      </div>
      
      <div align="center">
        <br>CHOCOLATE BRANCO<strong>R$20.00</strong><br>
        qtd: <input type="number" value="1" min="1" max="10" id="qtd3">
        <button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('CHOCOLATE BRANCO', document.getElementById('qtd3').value, '20.00', 3)"> Comprar </button>
      </div>
      
      <p align="center">
        <a href="saquinho.php"> Ver Carrinho de compras </a>
      </p>	
          
      <script>
        function AddCarrinho(produto, qtd, valor, posicao)
        {
          localStorage.setItem("produto" + posicao, produto);
          localStorage.setItem("qtd" + posicao, qtd);
          valor = valor * qtd;
          localStorage.setItem("valor" + posicao, valor);
          alert("Produto adicionado ao carrinho!");
        }
      </script>
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
</html>