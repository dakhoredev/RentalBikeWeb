<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Page 2 </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel = "stylesheet" href = "projectStyle_02.css">


    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
  <div class="container">
    <a class="navbar-brand" href="#"><span class="text-warning">RentN</span>Ride</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#team">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#FindUs">FindUs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>


</head>
<body>
    <div class = "main-wrapper">
        <div class = "container">
            <div class = "main-title">
                <h1> Rent bike ?? </h1>
            </div>
            <div class = "display-style-btns">
                <button type = "button" id = "grid-active-btn">
                    <i class = "fas fa-th"></i>
                </button>
                <button type = "button" id = "details-active-btn">
                    <i class = "fas fa-list-ul"></i>
                </button>
            </div>

            <div class = "item-list">
                <div class = "item">
                    <div class = "item-img">
                        <img src = " Honda.jpg">
                        <div class = "icon-list">
                            <button type = "button">
                                <i class = "fas fa-sync-alt"></i>
                            </button>
                            <button type = "button">
                                <i class = "fas fa-shopping-cart"></i>
                            </button>
                            <button type = "button">
                                <i class = "far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                    <div class = "item-detail">
                        <a href = "#" class = "item-name"> Honda 125 Bike </a>
                        <div class = "item-price">
                            <span class = "new-price"> 150 RS. per hour </span>
                            <span class = "old-price"> 199 RS. </span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore fugiat quod corporis delectus sequi laudantium molestias vero distinctio, qui numquam dolore, corrupti, enim consectetur cum?</p>
                        <button type = "button" class = "add-btn">add to cart</button>
                    </div>
                </div>

                <div class = "item">
                    <div class = "item-img">
                        <img src = "activa.png">
                        <div class = "icon-list">
                            <button type = "button">
                                <i class = "fas fa-sync-alt"></i>
                            </button>
                            <button type = "button">
                                <i class = "fas fa-shopping-cart"></i>
                            </button>
                            <button type = "button">
                                <i class = "far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                    <div class = "item-detail">
                        <a href = "#" class = "item-name"> Activa </a>
                        <div class = "item-price">
                            <span class = "new-price"> 120 Rs. per Hour</span>
                            <span class = "old-price"> 150 RS.</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore fugiat quod corporis delectus sequi laudantium molestias vero distinctio, qui numquam dolore, corrupti, enim consectetur cum?</p>
                        <button type = "button" class = "add-btn">add to cart</button>
                    </div>
                </div>

                <div class = "item">
                    <div class = "item-img">
                        <img src = "escooty.jpg">
                        <div class = "icon-list">
                            <button type = "button">
                                <i class = "fas fa-sync-alt"></i>
                            </button>
                            <button type = "button">
                                <i class = "fas fa-shopping-cart"></i>
                            </button>
                            <button type = "button">
                                <i class = "far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                    <div class = "item-detail">
                        <a href = "#" class = "item-name"> E Scooter </a>
                        <div class = "item-price">
                            <span class = "new-price"> 80 Rs. per Hour</span>
                            <span class = "old-price"> 120 Rs.</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore fugiat quod corporis delectus sequi laudantium molestias vero distinctio, qui numquam dolore, corrupti, enim consectetur cum?</p>
                        <button type = "button" class = "add-btn">add to cart</button>
                    </div>
                </div>

                <div class = "item">
                    <div class = "item-img">
                        <img src = "Honda.jpg">
                        <div class = "icon-list">
                            <button type = "button">
                                <i class = "fas fa-sync-alt"></i>
                            </button>
                            <button type = "button">
                                <i class = "fas fa-shopping-cart"></i>
                            </button>
                            <button type = "button">
                                <i class = "far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                    <div class = "item-detail">
                        <a href = "#" class = "item-name"> Pulsar 220 </a>
                        <div class = "item-price">
                            <span class = "new-price">180 Rs. per Hour</span>
                            <span class = "old-price"> 200 Rs. </span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore fugiat quod corporis delectus sequi laudantium molestias vero distinctio, qui numquam dolore, corrupti, enim consectetur cum?</p>
                        <button type = "button" class = "add-btn">add to cart</button>
                    </div>
                </div>

                <div class = "item">
                    <div class = "item-img">
                        <img src = "activa.png">
                        <div class = "icon-list">
                            <button type = "button">
                                <i class = "fas fa-sync-alt"></i>
                            </button>
                            <button type = "button">
                                <i class = "fas fa-shopping-cart"></i>
                            </button>
                            <button type = "button">
                                <i class = "far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                    <div class = "item-detail">
                        <a href = "#" class = "item-name"> Access 125 </a>
                        <div class = "item-price">
                            <span class = "new-price"> 200 Rs. per Hour</span>
                            <span class = "old-price"> 240 rs.</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore fugiat quod corporis delectus sequi laudantium molestias vero distinctio, qui numquam dolore, corrupti, enim consectetur cum?</p>
                        <button type = "button" class = "add-btn">add to cart</button>
                    </div>
                </div>

                <div class = "item">
                    <div class = "item-img">
                        <img src = "escooty.jpg">
                        <div class = "icon-list">
                            <button type = "button">
                                <i class = "fas fa-sync-alt"></i>
                            </button>
                            <button type = "button">
                                <i class = "fas fa-shopping-cart"></i>
                            </button>
                            <button type = "button">
                                <i class = "far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                    <div class = "item-detail">
                        <a href = "#" class = "item-name"> Ola Scooter</a>
                        <div class = "item-price">
                            <span class = "new-price">80 Rs. per Hour</span>
                            <span class = "old-price"> 100 Rs.</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore fugiat quod corporis delectus sequi laudantium molestias vero distinctio, qui numquam dolore, corrupti, enim consectetur cum?</p>
                        <button type = "button" class = "add-btn">add to cart</button>
                    </div>
                </div>

                <div class = "item">
                    <div class = "item-img">
                        <img src = "Honda.jpg">
                        <div class = "icon-list">
                            <button type = "button">
                                <i class = "fas fa-sync-alt"></i>
                            </button>
                            <button type = "button">
                                <i class = "fas fa-shopping-cart"></i>
                            </button>
                            <button type = "button">
                                <i class = "far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                    <div class = "item-detail">
                        <a href = "#" class = "item-name"> Hero Honda</a>
                        <div class = "item-price">
                            <span class = "new-price"> 140 Rs. per Hour</span>
                            <span class = "old-price"> 180 Rs.</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore fugiat quod corporis delectus sequi laudantium molestias vero distinctio, qui numquam dolore, corrupti, enim consectetur cum?</p>
                        <button type = "button" class = "add-btn">add to cart</button>
                    </div>
                </div>

                <div class = "item">
                    <div class = "item-img">
                        <img src = "activa.png">
                        <div class = "icon-list">
                            <button type = "button">
                                <i class = "fas fa-sync-alt"></i>
                            </button>
                            <button type = "button">
                                <i class = "fas fa-shopping-cart"></i>
                            </button>
                            <button type = "button">
                                <i class = "far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                    <div class = "item-detail">
                        <a href = "#" class = "item-name"> Activa 125 </a>
                        <div class = "item-price">
                            <span class = "new-price"> 130 Rs. per Hour</span>
                            <span class = "old-price"> 120 Rs.</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore fugiat quod corporis delectus sequi laudantium molestias vero distinctio, qui numquam dolore, corrupti, enim consectetur cum?</p>
                        <button type = "button" class = "add-btn">add to cart</button>
                    </div>
                </div>

                <div class = "item">
                    <div class = "item-img">
                        <img src = "Honda.jpg">
                        <div class = "icon-list">
                            <button type = "button">
                                <i class = "fas fa-sync-alt"></i>
                            </button>
                            <button type = "button">
                                <i class = "fas fa-shopping-cart"></i>
                            </button>
                            <button type = "button">
                                <i class = "far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                    <div class = "item-detail">
                        <a href = "#" class = "item-name"> Platinum </a>
                        <div class = "item-price">
                            <span class = "new-price"> 200 Rs. per Hour</span>
                            <span class = "old-price"> 240 Rs.</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore fugiat quod corporis delectus sequi laudantium molestias vero distinctio, qui numquam dolore, corrupti, enim consectetur cum?</p>
                        <button type = "button" class = "add-btn">add to cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- foote -->

<footer class="bg-dark p-2 text-center ">
  <div class="container">
    <p class="text-white"> All right Resrved @devikaMADE</p>
</footer>



    <script src = "script.js"></script>
</body>
</html>

  
