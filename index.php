<!DOCTYPE html>
<html lang="rs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css"/>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/style.css"/>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/responsive.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=DM+Sans&family=Libre+Baskerville&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/>
    <title>GiftShop <?php echo $sajt_naziv;?></title>
</head>
<body>

<?php
$sajt_naziv = 'Poklon i cvet';
?>

<?php
//include 'zaglavlje.html';
?>
<header class="sticky-lg-top bg-white nav-bottom-border " >
    <div class="nav-bar w-100 ">
   <div class="d-flex justify-content-between align-items-center col-xl-12 flex-column   flex-md-row m-auto w-75   text-center text-md-start">
        <div class="navbar-brand  m-3">
        <a href="index.html"><h1 class="logo"><?php echo $sajt_naziv;?></h1></a>
        <p>Slogan</p>
    </div>
  
    <div class="nav-list  m-3 text-center text-lg-start d-flex align-items-center">
      
        <div class="col-12">
          
        <nav class="navbar  navbar-expand-md navbar-light justify-content-center flex-md-row-reverse" >
          <div class="nav-wrapp   d-flex align-items-center justify-content-between">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="korpica text-boja  ">
         <a href="#"> <i class="fa-solid fa-shopping-cart"></i></a>
        </div>
      </div>
          <Div class="collapse navbar-collapse " id="navbar">
           
    <ul class="navbar-nav d-flex justify-content-center flex-column flex-md-row list-unstyled " >
      <li class="nav-item active border-bottom-color"><a href="index.html">Pocetna</a></li>
        <li class="nav-item active border-bottom-color"><a href="o_nama.html" >O nama</a></li>
        <li class="nav-item border-bottom-color"><a href="Prodavnica.html">Prodavnica</a></li>
        <li class="nav-item border-bottom-color"><a href="kontakt.html">Kontakt</a></li>
    </ul>
</Div>

</nav> 




</div>

</div>

</Div>

</div>

</header>


    <div class="section1 ">
        <div class="block1 w-75 m-auto   d-flex justify-content-between flex-column flex-md-row">
            <div class="text-block ms-0  my-5 text-center text-md-start">
                <h2>Dobro dosli u giftshop <div class="logo "><?php echo $sajt_naziv;?></div></h2>
                <p class="paragraf_naslov">Ako ste poželeli da iznenadite voljenu osobu,došli ste na pravo mesto!</p>
                <button class="dugme"><p class="m-0">Prodavnica</p></button>
            </div>
            <div class="img-block  m-sm-auto m-0 "><img src="bootstrap-5.1.3-dist/assets/img/rosebox.png" class="naslovna_slika mx-5 mx-sm-0 img-fluid"></div>
            
        </div>
       
    </div>
    <div class="popust">
        <p class="text-center h-100 m-1">Paket “Cokolada i orhideja” -20%</p>
    </div>

   <section class="section2 w-75 m-auto d-flex justify-content-center flex-column flex-md-row">
    <div class="article col-md-4 col-11">
        <div class="img-block1"><img src="bootstrap-5.1.3-dist/assets/img/gift-box1.png"></div>
        <div class="text-block1">
            <h3 class="text-white">Lorem ipsum</h3>
            <hr class="linija">
            <p class="text-white">Besplatna isporuka na podrucju grocka</p>
        </div>
    </div>
    <div class="article col-md-4 col-11">
        <div class="img-block1 "><img src="bootstrap-5.1.3-dist/assets/img/bouquet1.png"></div>
        <div class="text-block1">
            <h3 class="text-white">Lorem ipsum</h3>
            <hr class="linija">
            <p class="text-white">Besplatna isporuka na podrucju grocka</p>
        </div>
    </div>
    <div class="article col-md-4 col-11">
        <div class="img-block1"><img src="bootstrap-5.1.3-dist/assets/img/free-delivery.png"</div>
        <div class="text-block1">
            <h3 class="text-white">Lorem ipsum</h3>
            <hr class="linija">
            <p class="text-white">Besplatna isporuka na podrucju grocka</p>
        </div>
    </div>
</section>
<Div class="naslov-block d-flex">
    <hr >
    <h2 class="text-center">Izdvajamo iz ponude</h2>
    <hr >
</Div>
<section >
    <div class="w-100  d-flex align-items-center flex-column flex-md-row m-auto justify-content-center ">
    
     

      <div id="carouselExampleControls" class="carousel slide d-none d-lg-flex justify-content-center  w-100 margina" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="carousel-block d-flex justify-content-center ">
            <Div class="card  border-white d-flex flex-column m-5">
                <div class="card-top  shadow">
                    <img src="bootstrap-5.1.3-dist/assets/img/Buket3.jpg" class="img-fluid">
                </div>
                <Div class="card-bottom shadow d-flex align-items-center justify-content-between">
                   <div class="cena m-2">
                    <p class="m-1">300din</p>
                   </div>
                   <div class="korpica m-2 text-boja">
                    <a href="#" class="text-decoration-none"><i class="fa-solid fa-basket-shopping"></i></a>
                   </div>
                </Div>
              </Div>
          
              <Div class="card  border-white d-flex flex-column m-5">
                <div class="card-top  shadow">
                    <img src="bootstrap-5.1.3-dist/assets/img/Buket7.jpg" class="img-fluid">
                </div>
                <Div class="card-bottom shadow d-flex align-items-center justify-content-between">
                   <div class="cena m-2">
                    <p class="m-1">300din</p>
                   </div>
                   <div class="korpica m-2 text-boja">
                    <a href="#" class="text-decoration-none"><i class="fa-solid fa-basket-shopping"></i></a>
                   </div>
                </Div>
              </Div>
            <Div class="card  border-white d-flex flex-column m-5">
                <div class="card-top h-75 shadow">
                    <img src="bootstrap-5.1.3-dist/assets/img/Paket4.jpg" class="img-fluid">
                
                <Div class="card-bottom  shadow d-flex align-items-center justify-content-between">
                   <div class="cena m-2">
                    <p class="m-1">300din</p>
                   </div>
                   <div class="korpica m-2 text-boja">
                    <a href="#" class="text-decoration-none"><i class="fa-solid fa-basket-shopping"></i></a>
                   </div>
                </Div>
              </Div>
          </div>
          
            <Div class="card  border-white d-flex flex-column m-5">
                <div class="card-top  shadow">
                    <img src="bootstrap-5.1.3-dist/assets/img/Buket2.jpg" class="img-fluid">
                </div>
                <Div class="card-bottom shadow d-flex align-items-center justify-content-between">
                   <div class="cena m-2">
                    <p class="m-1">300din</p>
                   </div>
                   <div class="korpica m-2 text-boja">
                    <a href="#" class="text-decoration-none"><i class="fa-solid fa-basket-shopping"></i></a>
                   </div>
                </Div>
              </Div>
          </div>
        </div>
        <div class="carousel-item ">
            <div class="carousel-block d-flex justify-content-center">
            <Div class="card  border-white d-flex flex-column m-5">
                <div class="card-top  shadow">
                    <img src="bootstrap-5.1.3-dist/assets/img/Buket5.jpg" class="img-fluid">
                </div>
                <Div class="card-bottom shadow d-flex align-items-center justify-content-between">
                   <div class="cena m-2">
                    <p class="m-1">300din</p>
                   </div>
                   <div class="korpica m-2 text-boja">
                    <a href="#" class="text-decoration-none"><i class="fa-solid fa-basket-shopping"></i></a>
                   </div>
                </Div>
              </Div>
              <Div class="card  border-white d-flex flex-column m-5">
                <div class="card-top  shadow">
                    <img src="bootstrap-5.1.3-dist/assets/img/Buket6.jpg" class="img-fluid">
                </div>
                <Div class="card-bottom shadow d-flex align-items-center justify-content-between">
                   <div class="cena m-2">
                    <p class="m-1">300din</p>
                   </div>
                   <div class="korpica m-2 text-boja">
                    <a href="#" class="text-decoration-none"><i class="fa-solid fa-basket-shopping"></i></a>
                   </div>
                </Div>
              </Div>
          
            <Div class="card  border-white d-flex flex-column m-5">
                <div class="card-top h-75 shadow">
                    <img src="bootstrap-5.1.3-dist/assets/img/Buket2.jpg" class="img-fluid">
                
                <Div class="card-bottom shadow d-flex align-items-center justify-content-between">
                   <div class="cena m-2">
                    <p class="m-1">300din</p>
                   </div>
                   <div class="korpica m-2 text-boja">
                    <a href="#" class="text-decoration-none"><i class="fa-solid fa-basket-shopping"></i></a>
                   </div>
                </Div>
              </Div>
          </div>
          
            <Div class="card  border-white d-flex flex-column m-5">
                <div class="card-top  shadow">
                    <img src="bootstrap-5.1.3-dist/assets/img/Paket3.jpg" class="img-fluid">
                </div>
                <Div class="card-bottom shadow d-flex align-items-center justify-content-between">
                   <div class="cena m-2">
                    <p class="m-1">300din</p>
                   </div>
                   <div class="korpica m-2 text-boja">
                    <a href="#" class="text-decoration-none"><i class="fa-solid fa-basket-shopping"></i></a>
                   </div>
                </Div>
              </Div>
          </div>
        </div>
        </div>
        
        <a class="carousel-control-prev opacity-100 m-auto h-25 d-inline-flex" href="#carouselExampleControls" role="button" data-bs-slide="prev">
            <i class="carousel_btn fa-solid fa-arrow-left p-3 m-0 shadow" aria-hidden="true"></i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next opacity-100 m-auto h-25 d-inline-flex" href="#carouselExampleControls" role="button" data-bs-slide="next">
            <i class="carousel_btn fa-solid fa-arrow-right p-3 m-0 shadow" aria-hidden="true"></i>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!--Slajder za manje uredjaje-->
      <div id="carouselExampleControlsSmall" class="carousel slide  d-lg-none w-100 d-flex justify-content-center m-3" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="carousel-block d-flex justify-content-center">
            <Div class="card  border-white d-flex flex-column m-5">
                <div class="card-top  shadow">
                    <img src="bootstrap-5.1.3-dist/assets/img/Buket3.jpg" class="img-fluid">
                </div>
                <Div class="card-bottom shadow d-flex align-items-center justify-content-between">
                   <div class="cena m-2">
                    <p class="m-1">300din</p>
                   </div>
                   <div class="korpica m-2 text-boja">
                    <a href="#" class="text-decoration-none"><i class="fa-solid fa-basket-shopping"></i></a>
                   </div>
                </Div>
              </Div>
          </div>
          </div>
          <Div class="carousel-item">
            <div class="carousel-block d-flex justify-content-center">
            <Div class="card  border-white d-flex flex-column m-5">
                <div class="card-top  shadow">
                  <img src="bootstrap-5.1.3-dist/assets/img/Buket7.jpg" class="img-fluid">
                </div>
                <Div class="card-bottom  shadow d-flex align-items-center justify-content-between">
                   <div class="cena m-2">
                    <p class="m-1">300din</p>
                   </div>
                   <div class="korpica m-2 text-boja">
                    <a href="#" class="text-decoration-none"><i class="fa-solid fa-basket-shopping"></i></a>
                   </div>
                </Div>
              </Div>
            </div>
            </Div>
        <Div class="carousel-item">
            <div class="carousel-block d-flex justify-content-center">
            <Div class="card  border-white d-flex flex-column m-5">
                <div class="card-top  shadow">
                  <img src="bootstrap-5.1.3-dist/assets/img/Paket4.jpg" class="img-fluid">
                </div>
                <Div class="card-bottom shadow d-flex align-items-center justify-content-between">
                   <div class="cena m-2">
                    <p class="m-1">300din</p>
                   </div>
                   <div class="korpica m-2 text-boja">
                    <a href="#" class="text-decoration-none"><i class="fa-solid fa-basket-shopping"></i></a>
                   </div>
                </Div>
              </Div>
            </div>
            </Div>
            <div class="carousel-item ">
                <div class="carousel-block d-flex justify-content-center">
                <Div class="card  border-white d-flex flex-column m-5">
                    <div class="card-top  shadow">
                        <img src="bootstrap-5.1.3-dist/assets/img/Buket2.jpg" class="img-fluid">
                    </div>
                    <Div class="card-bottom shadow d-flex align-items-center justify-content-between">
                       <div class="cena m-2">
                        <p class="m-1">300din</p>
                       </div>
                       <div class="korpica m-2 text-boja">
                        <a href="#" class="text-decoration-none"><i class="fa-solid fa-basket-shopping"></i></a>
                       </div>
                    </Div>
                  </Div>
              </div>
              </div>
              <Div class="carousel-item">
                <div class="carousel-block d-flex justify-content-center">
                <Div class="card  border-white d-flex flex-column m-5">
                    <div class="card-top  shadow">
                      <img src="bootstrap-5.1.3-dist/assets/img/Buket5.jpg" class="img-fluid">
                    
                    <Div class="card-bottom shadow d-flex align-items-center justify-content-between">
                       <div class="cena m-2">
                        <p class="m-1">300din</p>
                       </div>
                       <div class="korpica m-2 text-boja">
                        <a href="#" class="text-decoration-none"><i class="fa-solid fa-basket-shopping"></i></a>
                       </div>
                    </Div>
                  </Div>
              </div>
              </Div>
            </Div>
            <div class="carousel-item">
                <div class="carousel-block d-flex justify-content-center">
                <Div class="card  border-white d-flex flex-column m-5">
                    <div class="card-top  shadow">
                      <img src="bootstrap-5.1.3-dist/assets/img/Buket6.jpg" class="img-fluid">
                    </div>
                    <Div class="card-bottom shadow d-flex align-items-center justify-content-between">
                       <div class="cena m-2">
                        <p class="m-1">300din</p>
                       </div>
                       <div class="korpica m-2 text-boja">
                        <a href="#" class="text-decoration-none"><i class="fa-solid fa-basket-shopping"></i></a>
                       </div>
                    </Div>
                </div>
                  </Div>
                </div>
                <div class="carousel-item">
                  <div class="carousel-block d-flex justify-content-center">
                  <Div class="card  border-white d-flex flex-column m-5">
                      <div class="card-top  shadow">
                          <img src="bootstrap-5.1.3-dist/assets/img/Paket3.jpg" class="img-fluid">
                      </div>
                      <Div class="card-bottom shadow d-flex align-items-center justify-content-between">
                         <div class="cena m-2">
                          <p class="m-1">300din</p>
                         </div>
                         <div class="korpica m-2 text-boja">
                          <a href="#" class="text-decoration-none"><i class="fa-solid fa-basket-shopping"></i></a>
                         </div>
                      </Div>
                  </div>
                    </Div>
                  </div>
          </div>
          <a class="carousel-control-prev opacity-100 h-25 m-auto" href="#carouselExampleControlsSmall" role="button" data-bs-slide="prev">
            <i class="carousel_btn fa-solid fa-arrow-left p-3  shadow m-0" aria-hidden="true"></i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next opacity-100 h-25 m-auto" href="#carouselExampleControlsSmall" role="button" data-bs-slide="next">
            <i class="carousel_btn fa-solid fa-arrow-right p-3 m-0 shadow" aria-hidden="true"></i>
          <span class="sr-only">Next</span>
        </a>
        </div>
        
          </div>
        </div>
        
        </div>
        
        
      </div>
      
      </div>
          
</section>
<Div class="naslov-block d-flex">
    <hr >
    <h2 class="text-center">Poklon paketi</h2>
    <hr >
</Div>
<section >
    <div class="w-100  d-flex align-items-center flex-column flex-md-row m-auto justify-content-center ">
    
     

      <div id="carouselExampleControls1" class="carousel slide d-none d-lg-flex justify-content-center  w-100 margina" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="carousel-block d-flex justify-content-center ">
            <Div class="card  border-white d-flex flex-column m-5">
                <div class="card-top  shadow">
                    <img src="bootstrap-5.1.3-dist/assets/img/Paket5.jpg" class="img-fluid">
                </div>
                <Div class="card-bottom shadow d-flex align-items-center justify-content-between">
                   <div class="cena m-2">
                    <h5 class="m-auto">Paket "krem"</h5>
                    <p class="m-1">300din</p>
                   </div>
                   <div class="korpica m-2 text-boja">
                    <a href="#" class="text-decoration-none"><i class="fa-solid fa-basket-shopping"></i></a>
                   </div>
                </Div>
              </Div>
          
              <Div class="card  border-white d-flex flex-column m-5">
                <div class="card-top  shadow">
                    <img src="bootstrap-5.1.3-dist/assets/img/Paket6.jpg" class="img-fluid">
                </div>
                <Div class="card-bottom shadow d-flex align-items-center justify-content-between">
                   <div class="cena m-2">
                    <h5 class="m-auto">Paket "krem"</h5>
                    <p class="m-1">300din</p>
                   </div>
                   <div class="korpica m-2 text-boja">
                    <a href="#" class="text-decoration-none"><i class="fa-solid fa-basket-shopping"></i></a>
                   </div>
                </Div>
              </Div>
            <Div class="card  border-white d-flex flex-column m-5">
                <div class="card-top h-75 shadow">
                    <img src="bootstrap-5.1.3-dist/assets/img/Paket3.jpg" class="img-fluid">
                
                <Div class="card-bottom  shadow d-flex align-items-center justify-content-between">
                   <div class="cena m-2">
                    <h5 class="m-auto">Paket "krem"</h5>
                    <p class="m-1">300din</p>
                   </div>
                   <div class="korpica m-2 text-boja">
                    <a href="#" class="text-decoration-none"><i class="fa-solid fa-basket-shopping"></i></a>
                   </div>
                </Div>
              </Div>
          </div>
          
            <Div class="card  border-white d-flex flex-column m-5">
                <div class="card-top  shadow">
                    <img src="bootstrap-5.1.3-dist/assets/img/Paket8.jpg" class="img-fluid">
                </div>
                <Div class="card-bottom shadow d-flex align-items-center justify-content-between">
                   <div class="cena m-2">
                    <h5 class="m-auto">Paket "krem"</h5>
                    <p class="m-1">300din</p>
                   </div>
                   <div class="korpica m-2 text-boja">
                    <a href="#" class="text-decoration-none"><i class="fa-solid fa-basket-shopping"></i></a>
                   </div>
                </Div>
              </Div>
          </div>
        </div>
        <div class="carousel-item ">
            <div class="carousel-block d-flex justify-content-center">
            <Div class="card  border-white d-flex flex-column m-5">
                <div class="card-top  shadow">
                    <img src="bootstrap-5.1.3-dist/assets/img/Buket2.jpg" class="img-fluid">
                </div>
                <Div class="card-bottom shadow d-flex align-items-center justify-content-between">
                   <div class="cena m-2">
                    <p class="m-1">300din</p>
                   </div>
                   <div class="korpica m-2 text-boja">
                    <a href="#" class="text-decoration-none"><i class="fa-solid fa-basket-shopping"></i></a>
                   </div>
                </Div>
              </Div>
              <Div class="card  border-white d-flex flex-column m-5">
                <div class="card-top  shadow">
                    <img src="bootstrap-5.1.3-dist/assets/img/Buket2.jpg" class="img-fluid">
                </div>
                <Div class="card-bottom shadow d-flex align-items-center justify-content-between">
                   <div class="cena m-2">
                    <p class="m-1">300din</p>
                   </div>
                   <div class="korpica m-2 text-boja">
                    <a href="#" class="text-decoration-none"><i class="fa-solid fa-basket-shopping"></i></a>
                   </div>
                </Div>
              </Div>
          
            <Div class="card  border-white d-flex flex-column m-5">
                <div class="card-top h-75 shadow">
                    <img src="bootstrap-5.1.3-dist/assets/img/Buket2.jpg" class="img-fluid">
                
                <Div class="card-bottom shadow d-flex align-items-center justify-content-between">
                   <div class="cena m-2">
                    <p class="m-1">300din</p>
                   </div>
                   <div class="korpica m-2 text-boja">
                    <a href="#" class="text-decoration-none"><i class="fa-solid fa-basket-shopping"></i></a>
                   </div>
                </Div>
              </Div>
          </div>
          
            <Div class="card  border-white d-flex flex-column m-5">
                <div class="card-top  shadow">
                    <img src="bootstrap-5.1.3-dist/assets/img/Paket3.jpg" class="img-fluid">
                </div>
                <Div class="card-bottom shadow d-flex align-items-center justify-content-between">
                   <div class="cena m-2">
                    <p class="m-1">300din</p>
                   </div>
                   <div class="korpica m-2 text-boja">
                    <a href="#" class="text-decoration-none"><i class="fa-solid fa-basket-shopping"></i></a>
                   </div>
                </Div>
              </Div>
          </div>
        </div>
        </div>
        
        <a class="carousel-control-prev opacity-100 m-auto h-25 d-inline-flex" href="#carouselExampleControls1" role="button" data-bs-slide="prev">
            <i class="carousel_btn fa-solid fa-arrow-left p-3 m-0 shadow" aria-hidden="true"></i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next opacity-100 m-auto h-25 d-inline-flex" href="#carouselExampleControls1" role="button" data-bs-slide="next">
            <i class="carousel_btn fa-solid fa-arrow-right p-3 m-0 shadow" aria-hidden="true"></i>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div id="carouselExampleControlsSmall1" class="carousel slide  d-lg-none w-100 d-flex justify-content-center m-3" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="carousel-block d-flex justify-content-center">
            <Div class="card  border-white d-flex flex-column m-5">
                <div class="card-top  shadow">
                    <img src="bootstrap-5.1.3-dist/assets/img/Buket2.jpg" class="img-fluid">
                </div>
                <Div class="card-bottom shadow d-flex align-items-center justify-content-between">
                   <div class="cena m-2">
                    <p class="m-1">300din</p>
                   </div>
                   <div class="korpica m-2 text-boja">
                    <a href="#" class="text-decoration-none"><i class="fa-solid fa-basket-shopping"></i></a>
                   </div>
                </Div>
              </Div>
          </div>
          </div>
          <Div class="carousel-item">
            <div class="carousel-block d-flex justify-content-center">
            <Div class="card  border-white d-flex flex-column m-5">
                <div class="card-top  shadow">
                    <img src="bootstrap-5.1.3-dist/assets/img/Buket2.jpg" class="img-fluid">
                </div>
                <Div class="card-bottom  shadow d-flex align-items-center justify-content-between">
                   <div class="cena m-2">
                    <p class="m-1">300din</p>
                   </div>
                   <div class="korpica m-2 text-boja">
                    <a href="#" class="text-decoration-none"><i class="fa-solid fa-basket-shopping"></i></a>
                   </div>
                </Div>
              </Div>
            </div>
            </Div>
        <Div class="carousel-item">
            <div class="carousel-block d-flex justify-content-center">
            <Div class="card  border-white d-flex flex-column m-5">
                <div class="card-top  shadow">
                    <img src="bootstrap-5.1.3-dist/assets/img/Buket2.jpg" class="img-fluid">
                </div>
                <Div class="card-bottom shadow d-flex align-items-center justify-content-between">
                   <div class="cena m-2">
                    <p class="m-1">300din</p>
                   </div>
                   <div class="korpica m-2 text-boja">
                    <a href="#" class="text-decoration-none"><i class="fa-solid fa-basket-shopping"></i></a>
                   </div>
                </Div>
              </Div>
            </div>
            </Div>
            <div class="carousel-item ">
                <div class="carousel-block d-flex justify-content-center">
                <Div class="card  border-white d-flex flex-column m-5">
                    <div class="card-top  shadow">
                        <img src="bootstrap-5.1.3-dist/assets/img/Buket2.jpg" class="img-fluid">
                    </div>
                    <Div class="card-bottom shadow d-flex align-items-center justify-content-between">
                       <div class="cena m-2">
                        <p class="m-1">300din</p>
                       </div>
                       <div class="korpica m-2 text-boja">
                        <a href="#" class="text-decoration-none"><i class="fa-solid fa-basket-shopping"></i></a>
                       </div>
                    </Div>
                  </Div>
              </div>
              </div>
              <Div class="carousel-item">
                <div class="carousel-block d-flex justify-content-center">
                <Div class="card  border-white d-flex flex-column m-5">
                    <div class="card-top  shadow">
                        <img src="bootstrap-5.1.3-dist/assets/img/Buket2.jpg" class="img-fluid">
                    
                    <Div class="card-bottom shadow d-flex align-items-center justify-content-between">
                       <div class="cena m-2">
                        <p class="m-1">300din</p>
                       </div>
                       <div class="korpica m-2 text-boja">
                        <a href="#" class="text-decoration-none"><i class="fa-solid fa-basket-shopping"></i></a>
                       </div>
                    </Div>
                  </Div>
              </div>
              </Div>
            </Div>
            <div class="carousel-item">
                <div class="carousel-block d-flex justify-content-center">
                <Div class="card  border-white d-flex flex-column m-5">
                    <div class="card-top  shadow">
                        <img src="bootstrap-5.1.3-dist/assets/img/Paket3.jpg" class="img-fluid">
                    </div>
                    <Div class="card-bottom shadow d-flex align-items-center justify-content-between">
                       <div class="cena m-2">
                        <p class="m-1">300din</p>
                       </div>
                       <div class="korpica m-2 text-boja">
                        <a href="#" class="text-decoration-none"><i class="fa-solid fa-basket-shopping"></i></a>
                       </div>
                    </Div>
                </div>
                  </Div>
                </div>
          </div>
          <a class="carousel-control-prev opacity-100 h-25 m-auto" href="#carouselExampleControlsSmall1" role="button" data-bs-slide="prev">
            <i class="carousel_btn fa-solid fa-arrow-left p-3  shadow m-0" aria-hidden="true"></i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next opacity-100 m-0 h-25 m-auto" href="#carouselExampleControlsSmall1" role="button" data-bs-slide="next">
            <i class="carousel_btn fa-solid fa-arrow-right p-3 m-0 shadow" aria-hidden="true"></i>
          <span class="sr-only">Next</span>
        </a>
        </div>
        
          </div>
        </div>
        
        </div>
        
        
      </div>
      
      </div>
          
</section>
<Div class="naslov-block d-flex">
    <hr >
    <h2 class="text-center">Najčešća pitanja </h2>
    <hr >
</Div>
<section>
    <div class="Pitanja block margina">
        <div class="accordion accordion-flush w-lg-50 m-auto " id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header " id="flush-headingOne">
                <button class="accordion-button collapsed bg-color" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  <p class="h2">Pitanje 1</p>
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body accordion-border">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
              </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header " id="flush-headingTwo">
                  <button class="accordion-button collapsed bg-color " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseOne">
                    <p class="h2">Pitanje 2</p>
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body  accordion-border">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header " id="flush-headingThree">
                  <button class="accordion-button collapsed bg-color" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseOne">
                    <p class="h2">Pitanje 3</p>
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body accordion-border-lst">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                </div>
              </div>
          </div>
    </div>
</section>
<footer >
    <div class="border1">

    </div>
    <div class="footer-block text-center">
        <div class="logo-block d-inline-block p-5 align-items-center">
        <h1 class="logo text-white"><?php echo $sajt_naziv;?></h1>
        <p class="text-start text-white">Slogan</p>
    </div>
    <div class="wrapp d-md-inline-flex d-block  justify-content-center">
    
    <div class="info-block m-3 text-white">
      <p>Lorem ipsum dolor</p>
      <p>Lorem ipsum dolor</p>
  </div>
  <div class="info-block m-3 text-white">
    <p>Lorem ipsum dolor</p>
    <p>Lorem ipsum dolor</p>
</div>
  </div>
  <hr class="w-75 m-auto ">
  <div class="wrapp1 flex-md-row flex-column d-flex justify-content-center">
    <a href="#"><i class="fa-brands fa-instagram text-white ikonica m-3"></i></a>
    <a href="#"><i class="fa-brands fa-facebook text-white ikonica m-3"></i></a>
  </div>
    </div>
    <div class="border1">
        
    </div>
</footer>

<script src="https://kit.fontawesome.com/511a7c625f.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>



