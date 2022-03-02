<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/favicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="Marcos Lopes" />

  <title>VML Açougue</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link href="login.php" rel="stylesheet" />
 
 
  

  <style>
    .buttonAdd {
      background-color: #ffe600; /* Green */
      border: none;
      color: rgb(7, 5, 5);
      padding: 10px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 12px;
      margin: 4px 2px;

      cursor: pointer;
    }
    .buttonAdd {border-radius: 50%;}

    
  </style>

</head>

<body>
<?php
require("banco.php");

?> 
<!-- header section strats -->
  <header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="index.html">
          <span>
            VML AÇOUGUE - <br>O melhor açougue do Rio
          </span>
        </a>
        <div class="" id="">

          <div class="custom_menu-btn">
            <button onclick="openNav()">
              <span class="s-1"> </span>
              <span class="s-2"> </span>
              <span class="s-3"> </span>
            </button>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="login.html">Painel de controle</a>

                
              </div>
            </div>
          </div>

        </div>
      </nav>
    </div>
  </header>
  <!-- end header section -->

  <!-- slider section -->
  <section class="slider_section position-relative">
    <div class="slider_bg_box">
      <img src="images/slider-bg.jpg" alt="">
    </div>
    <div class="slider_bg"></div>
    <div class="container">
      <div class="col-md-9 col-lg-8">
        <div class="detail-box">
          <h2>
            Confira nossas promoções
            <br> melhor preço e qualidade 
          </h2>
          <p>
            Nossa melhor recompensa é ver um sorriso no rosto de cada cliente.
          </p>
          <div>
            <a href="#comprar" class="slider-link">
              Comprar
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end slider section -->

  <!-- shop section -->

    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
              <h2>
                Produtos
              </h2>
            </div>
                
            <a name="comprar"></a>
            <div class="row">
        
            <?php
              for ($j = 0; $j <= $total-1; $j++) 
                {
                  
                  echo '
                  <div name="produto"></div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="box">
                        <a>
                          <div class="img-box">
                            <img src="images/p'.$j.'.png" alt="">
                          </div>
                          <div class="detail-box">
                            <h6 name= "nome'.$j.'">
                              '.$nomes[$j].'
                            </h6>
                            <h6>
                              Preço/'
                              ;if($tipos[$j] =="Diversos" ){
                                echo ' Un.';
                              }else{
                                echo ' Kg';
                              }
                              echo 
                              '
                              <span name="valor'.$j.'">
                                
                                  '.$valores[$j].'
                                
                              </span>
                            </h6>
                          </div>
                          <button id="testButtonplus'.$j.'" class="buttonAdd" type="Button" onclick="remove('.$j.', `'.$tipos[$j].'`)">-</button>
                          <label id="testLabelq'.$j.'">0</label>'

                          ;if($tipos[$j] =="Diversos" ){
                            echo ' Un.';
                          }else{
                            echo ' Kg';
                          }
                          
                          echo '<button id="testButtonplus'.$j.'" class="buttonAdd" type="Button" onclick="add('.$j.', `'.$tipos[$j].'`)">+</button>
                          <div class="new">
                            <span>'.$tipos[$j].'</span>
                          </div>
                        </a>
                      </div>
                    </div>
                  
                ';
              }
            ?>            
          </div>
        </div>
    </section>         
  <!-- end shop section -->
  
   <div name="minhalista">
     Lista de compras:
    <div>

    <div class="container">
      <div class="col-md-12">
        <div class="row">
          <div class="but">
              <button type="button" class="btn btn-success"  onclick="FinalizarCompra()" >Finalizar compra</button>  
          </div>
        </div>
      </div>
    </div>
      
  <!-- about section -->
 

  <a name="sobre"></a>
  <section class="about_section">
    
    

    <div class="container">
      
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/about-img.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Sobre
              </h2>
            </div>
            <p>
              Nossa loja possui mais de 30 anos no mercado com os
              melhores preços, qualidade e excelência no atendimento. <br>
              Rua Senador Camará, 06 - Santa cruz, Rio de Janeiro.
            </p>

            <div class="row">
              <div>
                <img src="images/zap.png" alt="">      
              </div>
              <h3>(21)96961-6419</h3>
            </div>

            <div class="row">
            <p>
              Serviço de delivery para Santa cruz e adjacências.
            </p>
            </div>

 
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> Todos os direitos reservados
        <a href="https://html.design/">VML - Açougue LTDA</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->


  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>


  <script>
   
    function add(j, tipos) {
       
      var quantity_temp = document.getElementById("testLabelq"+j).innerText;

      if(tipos == 'Diversos'){
        var quantity_int = parseFloat(quantity_temp, 10) + 1;
      }else{
        var quantity_int = parseFloat(quantity_temp, 10) + 0.5;
      }
      document.getElementById("testLabelq"+j).innerHTML = quantity_int.toString();
    }
    function remove(j, tipos) {
      var quantity_temp = document.getElementById("testLabelq"+j).innerText;
      if(tipos == 'Diversos'){
        var quantity_int = parseFloat(quantity_temp, 10) - 1;
      }else{
        var quantity_int = parseFloat(quantity_temp, 10) - 0.5;
      }
      if(quantity_int >= 0)
      {
      document.getElementById("testLabelq"+j).innerHTML = quantity_int.toString();
      }
    }

    function FinalizarCompra(){
      var total = document.getElementsByName("produto").length;
      var lista = document.getElementsByName("minhalista").innerText;
      //lista = "Lista de compras";
      for (j = 0; j <= total-1 ; j++) 
      {
        var quantity_temp = document.getElementById("testLabelq"+j).innerText;
        if(parseFloat(quantity_temp)>0)
        {
          var nome = document.getElementsByName("nome"+j).innerText;
          var valor = document.getElementsByName("valor" +j).innerText;
          console.log(nome);
          lista = lista + nome + valor; //+ "x" + quantity_temp + " = " + toString(parseFloat(valor)*quantity_temp)  ;
        }
      }
      console.log(lista);
    }
  </script>

</body>

</html>

