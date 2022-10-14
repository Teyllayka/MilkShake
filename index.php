<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="./scss/web.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
   <header class="Header" >
      <img src="./img/strawberry.svg" alt="">
      <nav>
         <a href="#bottle">Home</a>
         <a href="#Specialites">Specialites</a>
         <a href="#Aboutus">About us</a>
         <a href="#Locateus">Locate us</a>
      </nav>

      <button onClick="alert('Signed in')">Sign In</button>
   </header>

   <div class="bottle" id="bottle">
      <div class="left-block">
         <div class="title">Homemade Milkshakes Created <br> With <span class="red">LOVE</span> <br> & <span class="red">JOY!</span> </div>
         <button id="shop" href="#menu">Shop Now</button>
      </div>
      <img src="./img/strawberry-milk-transparent-3d-png (1) 1.png" alt="" class="milk">
   </div>

  

   <div class="Specialites" id="Specialites">
      <div class="layer spacer"></div>
      <div class="zxc">
         <div class="drinks">
            <div class="list">
               <div class="second-title">People Love Our Specialties</div>
               <div class="second-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            </div>
            <div class="cards">
               <div class="card redcard">
                  <div class="circle">
                     <img class="icon"  src="./img/red.png" alt="">
                  </div>
                  
                  <div class="content">       
                     <div class="card-title">Thick Shakes</div>
                     <div class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                  </div>
                  <div class="button">
                     <button class="button-arrow" id="f">
                        <img src="./img/arrow-left.svg" alt="">
                     </button>
                  </div>
               </div>
               <div class="card yellowcard">
                  <div class="circle">
                     <img class="icon" src="./img/yellow.png" alt="">
                  </div>
                  
                  <div class="content">                            
                     <div class="card-title">Summer Splash</div>
                     <div class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                  </div>   
                  <div class="button">
                     <button class="button-arrow" id="s">
                        <img src="./img/arrow-left.svg" alt="">
                     </button>
                  </div>
               </div>
               <div class="card greencard">
                  <div class="circle">
                     <img class="icon" src="./img/green.png" alt="">
                  </div>
                  
                  <div class="content">   
                     <div class="card-title">Healthy Smoothies</div>
                     <div class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                  </div>   
                  <div class="button">
                     <button class="button-arrow" id="t">
                        <img src="./img/arrow-left.svg" alt="">
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="Aboutus" id="Aboutus">
      <div class="left">
         <div class="background"></div>
         <div class="photos">
            <img src="./img/Rectangle 1793.png" alt="" width="330px" height="180px" >
            <img src="./img/Rectangle 1791.png" alt="" width="277px" height="277px">
            <img src="./img/Rectangle 1790.png" alt="" width="330px" height="393px">
            <img src="./img/Rectangle 1792.png" alt="" width="277px" height="280px"  >
         </div>
      </div>
      <div class="right">
         <div class="third-title">About Us</div>
         <div class="third-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's  standard dummy text ever since the 1500s, when an unknown</div>
         <div class="third-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's  standard dummy text ever since the 1500s, when an unknown</div>
         <button class="findus" onClick="Redirect()">Find Us on Google!</button>
      </div>
   </div>
   <div class="Menu" id="menu">
      <div class="fourth-center">
         <div class="fourth-title">Are You Ready to Taste Our Flavors?</div>
         <div class="fourth-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
         <div class="menu-buttons">
            <button class="switch on" id="f">Thick Shakes</button>
            <button class="switch" id="s">Summer Splash</button>
            <button class="switch" id="t">Healthy Smoothies</button>
         </div>
      </div>
      <div class="menu-cards">
         <div class="menu-card open">
            <div class="menu-img">
               <img src="./img/menu.png" alt="">
            </div>
            <div class="menu-description">
               <div class=""><b>Hazelnut Thick Shake</b></div>
               <div class="">600 kcal</div>
            </div>
            <div class="menu-price">10$</div>
            <div class="menu-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <div class="menu-count">
               <button class="minus"><img src="./img/minus-circle.svg" alt=""></button>
               <input class="f-add" value="0">
               <button class="plus" id="a-plus"><img src="./img/plus-circle.svg" alt=""></button>
            </div>
            <div class="menu-add">
               <button onClick="alert('added')">Add To Cart</button>
            </div>
         </div>
         <div class="menu-card open">
            <div class="menu-img">
               <img src="./img/menu.png" alt="">
            </div>
            <div class="menu-description">
               <div class=""><b>Hazelnut Thick Shake</b></div>
               <div class="">600 kcal</div>
            </div>
            <div class="menu-price">10$</div>
            <div class="menu-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <div class="menu-count">
               <button class="minus"><img src="./img/minus-circle.svg" alt=""></button>
               <input class="s-add" value="0">
               <button class="plus" id="s-plus"><img src="./img/plus-circle.svg" alt=""></button>
            </div>
            <div class="menu-add">
               <button onClick="alert('added1')">Add To Cart</button>
            </div>
         </div>
         <div class="menu-card open">
            <div class="menu-img">
               <img src="./img/menu.png" alt="">
            </div>
            <div class="menu-description">
               <div class=""><b>Hazelnut Thick Shake</b></div>
               <div class="">600 kcal</div>
            </div>
            <div class="menu-price">10$</div>
            <div class="menu-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <div class="menu-count">
               <button class="minus"><img src="./img/minus-circle.svg" alt=""></button>
               <input class="t-add" value="0">
               <button class="plus" id="t-plus"><img src="./img/plus-circle.svg" alt=""></button>
            </div>
            <div class="menu-add">
               <button onClick="alert('added2')">Add To Cart</button>
            </div>
         </div>

         <div class="menu-card hidden">
            <div class="menu-img">
               <img src="./img/menu1.png" alt="">
            </div>
            <div class="menu-description">
               <div class=""><b>Blueberry Thick Shake</b></div>
               <div class="">600 kcal</div>
            </div>
            <div class="menu-price">15$</div>
            <div class="menu-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <div class="menu-count">
               <button class="minus"><img src="./img/minus-circle.svg" alt=""></button>
               <input class="f2-add" value="0">
               <button class="plus" id="a-plus"><img src="./img/plus-circle.svg" alt=""></button>
            </div>
            <div class="menu-add">
               <button onClick="alert('added3')">Add To Cart</button>
            </div>
         </div>
         <div class="menu-card hidden">
            <div class="menu-img">
               <img src="./img/menu1.png" alt="">
            </div>
            <div class="menu-description">
               <div class=""><b>Blueberry Thick Shake</b></div>
               <div class="">600 kcal</div>
            </div>
            <div class="menu-price">15$</div>
            <div class="menu-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <div class="menu-count">
               <button class="minus"><img src="./img/minus-circle.svg" alt=""></button>
               <input class="s2-add" value="0">
               <button class="plus" id="s-plus"><img src="./img/plus-circle.svg" alt=""></button>
            </div>
            <div class="menu-add">
               <button onClick="alert('added4')">Add To Cart</button>
            </div>
         </div>
         <div class="menu-card hidden">
            <div class="menu-img">
               <img src="./img/menu1.png" alt="">
            </div>
            <div class="menu-description">
               <div class=""><b>Blueberry Thick Shake</b></div>
               <div class="">600 kcal</div>
            </div>
            <div class="menu-price">15$</div>
            <div class="menu-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <div class="menu-count">
               <button class="minus"><img src="./img/minus-circle.svg" alt=""></button>
               <input class="t2-add" value="0">
               <button class="plus" id="t-plus"><img src="./img/plus-circle.svg" alt=""></button>
            </div>
            <div class="menu-add">
               <button onClick="alert('added5')">Add To Cart</button>
            </div>
         </div>

         <div class="menu-card hidden">
            <div class="menu-img">
               <img src="./img/menu2.png" alt="">
            </div>
            <div class="menu-description">
               <div class=""><b>Dalgona Coffee Shake</b></div>
               <div class="">600 kcal</div>
            </div>
            <div class="menu-price">10$</div>
            <div class="menu-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <div class="menu-count">
               <button class="minus"><img src="./img/minus-circle.svg" alt=""></button>
               <input class="f1-add" value="0">
               <button class="plus" id="a-plus"><img src="./img/plus-circle.svg" alt=""></button>
            </div>
            <div class="menu-add">
               <button onClick="alert('added6')">Add To Cart</button>
            </div>
         </div>
         <div class="menu-card hidden">
            <div class="menu-img">
               <img src="./img/menu2.png" alt="">
            </div>
            <div class="menu-description">
               <div class=""><b>Dalgona Coffee Shake</b></div>
               <div class="">600 kcal</div>
            </div>
            <div class="menu-price">20$</div>
            <div class="menu-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <div class="menu-count">
               <button class="minus"><img src="./img/minus-circle.svg" alt=""></button>
               <input class="s1-add" value="0">
               <button class="plus" id="s-plus"><img src="./img/plus-circle.svg" alt=""></button>
            </div>
            <div class="menu-add">
               <button onClick="alert('added7')">Add To Cart</button>
            </div>
         </div>
         <div class="menu-card hidden">
            <div class="menu-img">
               <img src="./img/menu2.png" alt="">
            </div>
            <div class="menu-description">
               <div class=""><b>Dalgona Coffee Shake</b></div>
               <div class="">600 kcal</div>
            </div>
            <div class="menu-price">30$</div>
            <div class="menu-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <div class="menu-count">
               <button class="minus"><img src="./img/minus-circle.svg" alt=""></button>
               <input class="t1-add" value="0">
               <button class="plus" id="t-plus"><img src="./img/plus-circle.svg" alt=""></button>
            </div>
            <div class="menu-add">
               <button onClick="alert('added8')">Add To Cart</button>
            </div>
         </div>



      </div>
   </div>
   <div class="Location" id="Locateus">
      <div class="gallery">
         <div class="gallery-title">Locate Us</div>
         <div class="gallery-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's  standard dummy text ever since the 1500s, when an unknown</div>
         <div class="gallery-img">
            <img src="./img/Rectangle 1800.png" alt="">
            <img src="./img/Rectangle 1801.png" alt="">
            <img src="./img/Rectangle 1802.png" alt="">
            <img src="./img/Rectangle 1803.png" alt="">
            <img src="./img/Rectangle 1804.png" alt="">
         </div>
      </div>
      <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2911.969772941259!2d80.25282150900077!3d13.034821046940516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5267b558eb683f%3A0xd055e699ccba904f!2sTHE%20BAKER%20NINJA!5e0!3m2!1sru!2slv!4v1637403682637!5m2!1sru!2slv" width="1000" height="740" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>    
   </div>
   <div class="all">All rights reserved. <a href="https://docs.google.com/document/d/1wxv2WsdJwQqqzWzIW-Lz8RFE0rZrOZI2IOCb60jSPAo/edit?usp=sharing">Terms & Conditions</a> | <a href="https://docs.google.com/document/d/1gxAsYGTXKI3On5j7ggbbEm6grSg4gxmDG3QR0FranqI/edit?usp=sharing"> Privacy Policy</a></div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="./jquery.waypoints.min.js"></script>
   <script src="./code.js "></script>
</body>
</html>


