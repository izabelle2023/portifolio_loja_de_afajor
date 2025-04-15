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
          SAQUINHO
        </h2>
      </div>
      <div id="itens"> 
    </div>
    <div>Total: <span id="total"></span> </div>
    
    <script>
     var total = 0;
     var i = 0;
     var valor = 0;
     
     for(i=1; i<=99; i++)
     {
         var prod = localStorage.getItem("produto" + i + "");
         if(prod != null) 
         {	
             document.getElementById("itens").innerHTML += localStorage.getItem("qtd" + i) + " x ";
             document.getElementById("itens").innerHTML += localStorage.getItem("produto" + i);
             document.getElementById("itens").innerHTML += " ";
             document.getElementById("itens").innerHTML += "R$: " + localStorage.getItem("valor" + i) + "<hr>";
             
             valor = parseFloat(localStorage.getItem("valor" + i));
             total = (total + valor);
         }
     } 
     document.getElementById("total").innerHTML = total.toFixed(2); 
    </script>
    
    <button type="button" onclick=" localStorage.clear(); location.reload();"> Limpar carrinho </button>
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