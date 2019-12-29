
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Max Restaurant System</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">



  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('gal/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('gal/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{ asset('gal/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{ asset('gal/lib/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{ asset('gal/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link rel="stylesheet" type="text/css" href="{{ asset('gal/css/style.css')}}">
  <!--  <link href="{{ asset('gal/css/style.css')}}" rel="stylesheet"> -->

  
    
    <link rel="stylesheet" href="{{asset('/css/style.css') }}"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <script  src="https://code.jquery.com/jquery-3.4.1.js"></script>



    <script src="https://code.iconify.design/1/1.0.3/iconify.min.js"></script>

  </head>
  <body data-spy="scroll" data-target=".navbar">

   <div class="container-fluid">
    <div class="row">
      <img src="Main_page_pic.jpg" alt="Lights" style="width:100%; height: 90%">
    </div>
  </div>

  <div class="container" >
   <div class="row">

    <div class="col-sm-12">

     <img src="logo.png" alt="Lights" >	
     <div  style="text-align: center;margin-top: -370px">
       <span style=" font-size: 38px;color: #ffb606; 
       font-family: Forte; "> Welcome</span> 
       <br>

       <span style="color: white;

       text-transform: none;
       font-size: 44px;
       font-weight: 800;
       font-style: normal;
       text-transform: none;">Max Restaurant</span>
       <br>
       <br>
       <p style="color: white;font-size: 20px;font-style: normal;"><b>--------</b>Every-thing is For You<b>-------</b></p>

     </div>
   </div>

 </div>

</div>


<!-- na vBar startr-->
<script type="text/javascript">


  $(window).on('scroll',function()
  {
   if($(window).scrollTop())
   {
    $('nav').addClass('black');  <!-- Add black nav -->
  }
  else{
    $('nav').removeClass('black');
  }
})

</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<div class="container-fluid">
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
   <a class="navbar-brand" href="#">
    <img src="logo.png" style="margin-left: 20px;margin-top: 5px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>

   <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav ml-auto" >
      <li class="nav-item active" >
       <a class=" btn nav-link btn-outline-warning" href="#">Home </a>
     </li>
     <li class="nav-item">
      <a id="btnn" class=" border-0 nav-link text-white" href="#demo" onclick="hidefun();" style="text-decoration: none;color: white; border-style:none;;font-size: 15px"> Catagories</a> 
      <script type="text/javascript">
        $("#btnn").click(function(){
          $("#demo").toggle("slow");
        });
      </script>
      <div id="demo" style="display: none; position: fixed; z-index: 1;left: 410px; top: 85px;">
        <div id="accordion" >
          <div class="card">
            <div class="card-header">
              <a class="card-link text" data-toggle="collapse" href="#collapseOne">
                DESIGN
              </a>
            </div>
            <div id="collapseOne" class="collapse show" data-parent="#accordion">
              <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <a class="collapsed card-link text" data-toggle="collapse" href="#collapseTwo">
              EVENT</a>
            </div>
            <div id="collapseTwo" class="collapse" data-parent="#accordion">
              <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <a class="collapsed card-link text" data-toggle="collapse" href="#collapseThree">

              GALLERY</a>
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordion">
              <div class="card-body">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor  </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <a  class="collapsed card-link text" data-toggle="collapse" href="#collapseFour">

              RECIPIES</a>
            </div>
            <div id="collapseFour" class="collapse" data-parent="#accordion">
              <div class="card-body">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor  </div>
            </div>
          </div>
        </div>
      </div>
    </li>
    <li class="nav-item">
     <a class="btn nav-link text btn-outline-warning" href="#RESERVATION"  
     style="color: white;border-style:none;; font-size: 15px;"><span style="margin-left:15px;"> Reservation</span></a>
   </li>

   <li class="nav-item">
    <a class="btn nav-link text btn-outline-warning" href="#MENUScroll"  
    style="color: white;border-style:none;; font-size: 15px;"><span style="margin-left:15px;">Menu</span></a>  

  </li>

  <li class="nav-item">
   <a class="btn nav-link text btn-outline-warning" href="#OurGallery"  
   style="color: white;border-style:none;; font-size: 15px;"><span  style="margin-left:15px;"> Our gallery</span></a>
 </li>
 <li class="nav-item">
   <a class="btn nav-link text btn-outline-warning" href="#OurStandards"  
   style="color: white;border-style:none;; font-size: 15px;"><span  style="margin-left:15px;"> Our Standards</span></a>
 </li>



 <li class="nav-item">
   <div class="dropdown">
    <a class="btn nav-link btn-outline-warning"href="#BLOG" style="color: white; border-style:none;;font-size: 15px" >
     Blog
   </a>
 </div>
</li>
<li class="nav-item">
 <a class="btn nav-link text btn-outline-warning" href="#about"
 style="color: white;border-style:none; ;font-size: 15px;">
 <span  style="margin-left:15px;">About us</span></a>
</li>

<li class="nav-link">
 <div class="hrh">

 </div>
</li>
<li class="nav-link">
 <a href="#"   style="color: white" >
  <span class="iconify" ho data-icon="simple-line-icons:social-facebook"
  data-inline="false" data-width="20px" data-height="20px"></span>
</a>
</li>


<li class="nav-link">
  <a href="#"   style="color: white">
   <span class="iconify" data-icon="simple-line-icons:social-twitter"
   data-inline="false"   data-width="20px" data-height="20px"></span>
 </a></li>

 <li class="nav-link">
   <a href="#"   style="color: white">
    <span class="iconify" data-icon="entypo-social:tripadvisor"
    data-inline="false"  data-width="20px" data-height="20px"></span>
  </a>
</li>      
</ul>
</div>
</nav>

</div>



<!-- na vBar Endddd-->


<div class="wow fadeInUp">
  <!-- table reservation -->
  <div class="container-fluid">
    <div class="row">

     <div class="col-sm-12" >

      <p class="text-center"  id="RESERVATION" style="font-size: 38px;color: #ffb606; 
      font-family: Forte; margin-top: 110px;">Book`S </p>
      <h2 class="text-center">TABLE</h2>

      <br>
      <br>
      <p class="text-center" style="color: gray">Opening Hour <b>8:00</b> AM - <b>10:00</b> PM, every day on week.</p>
    </div>
  </div>
</div>


<form action="{{url('/tableSubmit')}}" method="post">
  @csrf
  <div class="container">
    <div class="row justify-content-center py-4">
      <div class="col-md-3"> 
        <div class="form-group">
          <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
            <input type="text" name="DT" class="form-control datetimepicker-input" data-target="#datetimepicker1" placeholder="Date" />
            <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
          </div>
        </div>
        <script type="text/javascript">
          $(function () {
            $('#datetimepicker1').datetimepicker();
          });
        </script>

      </div>
      <div class="col-md-3"> 
        <select class="form-control colorful-select dropdown-primary" name="peoples">
          <option disabled selected>Choose your option</option>
          <option value="1">1 People</option>
          <option value="2">2 People</option>
          <option value="3">3 People</option>
          <option value="4">4 People</option>
          <option value="5">5 People</option>
          <option value="6">6 People</option>
          <option value="7">7 People</option>
          <option value="8">8 People</option>
          <option value="9">9 People</option>
          <option value="10">10 People</option>

        </select>

      </div>
      <div class="col-md-3"> 
        <button  type="submit" name="tableSubmit" class="button1" style="
        background: #ffb606;
        border-color: #ffb606;
        transition: all .2s ease-in-out 0s;
        font-weight: 700;
        width: 250px;
        height: 40px;
        border-radius: 5px;
        /*margin-left: 45px;*/ 
        color: #2a2a2a;">BOOK A TABLE</button>
        <p style="float: right; color: gray ;margin-right: 120px;font-size: 12px;">Reserve Now</p>

      </div>

    </div>
  </div>
</form>
</div>




<div class="container-fluid" id="MENUScroll">
  <div class="row">

    <img src="MenuUpper.jpg" alt="Lights" style="width:100%; height: 50%; background-attachment: fixed;">
  </div>
</div>
<div class="wow fadeInUp">
  <div class="container">

   <div class="row">

    <div class="col-sm-2">

    </div>
    <div class="col-sm-8" style="margin-top: -60px"  >


      <div class="nav nav-tabs nav-fill"  role="tablist" style=" background-color: black;opacity: 0.5">
        <a class="nav-item nav-link bg-dark "  data-toggle="tab" href="#JUNKSFOOD" role="tab" >
          <img src="junksfood.png"> <span style="color: yellow">JUNKSFOOD</span>
        </a>
        <a class="nav-item nav-link bg-dark" id="nav-profile-tab" data-toggle="tab" href="#DRINKS" role="tab">
          <img src="drinks.png"> <span style="color: yellow">DRINKS</span>

        </a>
        <a class="nav-item nav-link bg-dark" id="nav-contact-tab" data-toggle="tab" href="#CHEF" role="tab">
          <img src="chef.png"> <span style="color: yellow">CHEF</span>

        </a>
        <a class="nav-item nav-link bg-dark" id="nav-about-tab" data-toggle="tab" href="#COCKTAIL" role="tab">
          <img src="coctail.png"> 
          <span style="color: yellow">COCKTAIL</span>
        </a>
      </div>


      <div class="tab-content">

        <!-- Fast food -->
        <div class="tab-pane fade show active" id="JUNKSFOOD" role="tabpanel" ><br>

          <div class="container">
            <div class="row" >
              <div class="col-md-3">
                <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
                  <div class="card-content">
                    <div class="card-img">
                      <img src="F1.jpeg" width="50px" alt="">
                      <span style="margin:10px "><h4>Fast Food</h4></span></div>
                      <div class="card-desc" >
                        <h3>Thalii</h3>
                        <small><p> Crispy Garllics Mayoo, Fries With garllic ,Mayo,Tomato, other Kechup </p></small>
                        <a href="#" class="btn btn-warning">Price:9.9$</a>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
                    <div class="card-content">
                      <div class="card-img">
                        <img src="F2.jpeg" width="50px"  alt="">
                        <span style="margin:10px "><h4>Fast Food</h4></span> </div>
                        <div class="card-desc" >
                          <h3>Pizza Crispy</h3>
                          <small><p>  Fries With Kechup,  and pizzzyummy slices</p></small>
                          <a href="#" class="btn btn-warning">Price:9.9$</a>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 " >
                    <div   style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
                      <div class="card-content">
                        <div class="card-img">
                          <img src="F4.jpeg">
                          <span style="margin:10px "><h4>Fast Food</h4></span>
                        </div>
                        <div class="card-desc" >
                          <h3> Tower Burger</h3>
                          <small><p> Smoked quail, Burger crispy egg,Fries With</p></small>
                          <a href="#" class="btn btn-warning">Price:9.9$</a>
                        </div>

                      </div>
                    </div>
                  </div>


                </div>

              </div>
            </div>
            <div class="tab-pane fade" id="DRINKS" role="tabpanel" ><br>
              <div class="container">
                <div class="row">
                  <div class="col-md-3">
                    <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
                      <div class="card-content">
                        <div class="card-img">
                          <img src="D1.jpg" alt="">
                          <span  style="margin-left: 10x"><h4>Dinks</h4></span>
                        </div>
                        <div class="card-desc" >
                          <h3>Combo</h3>
                          <small><p> g! Kick Your Colds Faster. Kiss Dehydration Headaches Goodbye. Drink Less Soda and much more with other Food dishes</p></small>
                          <br>
                          <a href="#" class="btn btn-warning">Price:9.9$</a>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
                      <div class="card-content">
                        <div class="card-img">
                          <img src="D2.jpeg" width="50px" alt="">
                          <span  style="margin-left: 10x"><h4>Dinks</h4></span>
                        </div>
                        <div class="card-desc" >
                          <h3>Orang</h3>
                          <small><p> Orang with MArgerittaa</p></small>

                          <a href="#" class="btn btn-warning">Price:9.9$</a>

                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
                      <div class="card-content">
                        <div class="card-img">
                          <img src="D3.jpeg" width="50px" alt="">
                          <span  style="margin-left: 10x"><h4>Dinks</h4></span>
                        </div>
                        <div class="card-desc" >
                          <h3>QUAIL</h3>
                          <small><p> Wine Bear and other drinks non alcoholicwith from sum Amazing cheff,Drink Less Soda and and  and much more with other Food dishes</p></small>
                          <a href="#" class="btn btn-warning">Price:9.9$</a>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                   <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
                    <div class="card-content">
                      <div class="card-img">
                        <img src="C1.jpeg" width="50px" alt="">
                        <span  style="margin-left: 10x"><h4>Dinks</h4></span>
                      </div>
                      <div class="card-desc" >
                        <h3>B.Merry</h3>
                        <small><p> Simply Smooke With Nitro</p></small>
                        <a href="#" class="btn btn-warning">Price:9.9$</a>
                      </div>

                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="CHEF" role="tabpanel" ><br>


            <div class="container">
              <div class="row">
                <div class="col-md-3">
                  <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
                    <div class="card-content">
                      <div class="card-img">
                        <img src="L3.jpeg" width="50px" alt="">
                        <span style="margin-left: 5px"><h4>Cheff</h4></span>
                      </div>
                      <div class="card-desc" >
                        <h3>YOGO </h3>
                        <small><p>Smoked quail, crispy egg, spelt, girolles sandwich to eat for lunch. It is super simple to make and hits the spot every time.Smoked quail, crispy egg, spelt, girolles, with Many souces</p></small>
                        <a href="#" class="btn btn-warning">Price:9.9$</a>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
                    <div class="card-content">
                      <div class="card-img">
                        <img src="L2.jpeg" width="50px" alt="">
                        <span style="margin-left: 10px"><h4>Cheff</h4></span>
                      </div>
                      <div class="card-desc" >
                        <h3>Desi Dall</h3>
                        <small><p>  Dall with Many Smoked quail, crispy egg, spelt, girolles</p></small>
                        <a href="#" class="btn btn-warning">Price:9.9$</a>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
                    <div class="card-content">
                      <div class="card-img">
                        <img src="L1.jpeg" width="50px" alt="">
                        <span style="margin-left: 5px"><h4>Cheff</h4></span>
                      </div>
                      <div class="card-desc" >
                        <h3>Biryani</h3>
                        <small><p> he exposes food fads and myths, to provide proof and truth</p></small>
                        <a href="#" class="btn btn-warning">Price:9.9$</a>
                      </div>

                    </div>
                  </div>
                </div>


              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="COCKTAIL" role="tabpanel"><br>


            <div class="container">
              <div class="row">
                <div class="col-md-3">
                  <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
                    <div class="card-content">
                      <div class="card-img">
                        <img src="C1.jpeg" width="50px" alt="">
                        <span style="margin-left: 10px"><h4>Coctail</h4></span>
                      </div>
                      <div class="card-desc" >
                        <h3>QUAIL</h3>
                        <small><p> A collection of drink recipes,  and much more other Drinks including malggerita and other things like Fast Foods</p></small>
                        <a href="#" class="btn btn-warning">Price:9.9$</a>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
                    <div class="card-content">
                      <div class="card-img">
                        <img src="C2.jpeg" width="50px" alt="">
                        <span style="margin-left: 10px"><h4>Coctail</h4></span>
                      </div>
                      <div class="card-desc" >
                        <h3>QUAIL</h3>
                        <small><p>  A collection of drink recipes, techniques, and Boston bar recommendations</p></small>
                        <a href="#" class="btn btn-warning">Price:9.9$</a>
                      </div>

                    </div>
                  </div>
                </div>


              </div>

            </div>



          </div>
        </div>

      </div>
    </div>

  </div>
</div>


<div class="container-fluid" >
 <div class="row">
  <div style="background-image: url('Dinner.jpg');   background-size: cover; height: 300px; width: 100%; background-size: cover;margin-top: 200px; background-attachment: fixed;">
    <br><br><br><br><br><br>
    <h2><span style="color: white"><center><b> DINNER</b></center></span></h2>
  </div></div>
</div>
<div class="wow fadeInUp">
<div class="container">
  <div class="row pt-4">
    <div class="col-md-3">
      <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
        <div class="card-content">
          <div class="card-img" style="height: 200px">
            <img src="Din1.jpeg" width="50px" alt="">
            <span style="margin-left: 5px"><h4>Dinner</h4></span>
          </div>
          <div class="card-desc" >
            <h3>Chiken Frie</h3>
            <small><p> accessible ingredients you can buy from your local store, and the site also has videos with owner </p></small>
            <a href="#" class="btn btn-warning">Price:9.9$</a>
          </div>

        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
        <div class="card-content">
          <div class="card-img" style="height: 200px">
            <img src="Din2.jpeg"  alt="">
            <span style="margin-left: 5px"><h4>Dinner</h4></span>
          </div>
          <div class="card-desc" >
            <h3>Mini Mayo</h3>
            <small><p>cookbook author Deb Perelman Smoked quail, crispy egg, spelt, girolles</p></small>
            <a href="#" class="btn btn-warning">Price:9.9$</a>
          </div>

        </div>
      </div>
    </div>

    <div class="col-md-3">
     <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
      <div class="card-content">
        <div class="card-img" style="height: 200px">
          <img src="Din3.jpeg" alt="">
          <span style="margin-left: 5px"><h4>Dinner</h4></span>
        </div>
        <div class="card-desc" >
          <h3>Pasta</h3>
          <small><p> Smoked quail, crispy egg, spelt, girolles cookbook author Deb Perelman</p></small>
          <a href="#" class="btn btn-warning">Price:9.9$</a>
        </div>

      </div>
    </div>
  </div>

</div>

</div>
</div>

<div class="container-fluid">
  <div class="row">

    <div style="background-image: url('lunch.jpg');   background-size: cover; height: 300px;width: 100%; background-size: cover;margin-top: 200px; background-attachment: fixed;">
      <br><br><br><br><br><br>>

      <h2><span style="color: white"><center><b>LUNCH</b></center></span></h2>

    </div>
  </div>
</div>
<div class="wow fadeInUp">
<div class="container">
  <div class="row pt-4">
    <div class="col-md-3">
      <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
        <div class="card-content">
          <div class="card-img" style="height: 200px">
            <img src="L1.jpeg" width="50px" alt="">
            <span style="margin-left: 5px"><h4>Lunch</h4></span>
          </div>
          <div class="card-desc" >
            <h3>Chiken Biryani</h3>
            <small><p> Smoked quail, crispy egg, spelt, girolles</p></small>
            <a href="#" class="btn btn-warning">Price:9.9$</a>
          </div>

        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
        <div class="card-content">
          <div class="card-img" style="height: 200px">
            <img src="L3.jpeg" width="50px" alt="">
            <span style="margin-left: 5px"><h4>Lunch</h4></span>
          </div>
          <div class="card-desc" >
            <h3>Crispy Byte</h3>
            <small><p> Smoked quail, crispy egg, spelt, girolles</p></small>
            <a href="#" class="btn btn-warning">Price:9.9$</a>
          </div>

        </div>
      </div>
    </div>

  </div>

</div>
<!-- lunch section close -->
</div>
<div class="container-fluid">
 <div class="row">
  <div style="background-image: url('breakfast.jpg');   background-size: cover; height: 300px;width: 100%;background-position: 50% 195px;
  margin-top: 100px;
  background-attachment: fixed;">
  <br><br><br><br><br><br>

  <h2><span style="color: white"><center><b>BREAKFAST</b></center></span></h2>


</div>
</div>
</div>

<div class="wow fadeInUp">
<div class="container">
  <div class="row pt-4">
    <div class="col-md-3">
      <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
        <div class="card-content">
          <div class="card-img" style="height: 200px">
            <img src="B1.jpeg"  alt="">
            <span style="margin-left: 5px"><h4>BreakFast</h4></span>
          </div>
          <div class="card-desc" >
            <h3>Omlate Frie</h3>
            <small><p> Omlate Frie with Nitro Smoked quail, crispy egg, spelt, girolles kechup</p></small>
            <a href="#" class="btn btn-warning">Price:9.9$</a>
          </div>

        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
        <div class="card-content">
          <div class="card-img" style="height: 200px">
            <img src="B2.jpeg"  alt="">
            <span style="margin-left: 5px"><h4>BreakFast</h4></span>
          </div>
          <div class="card-desc" >
            <h3>Coffe</h3>
            <small><p> Coffee with beans that crushes hurt of Many peoples and Much Hottness</p></small>
            <a href="#" class="btn btn-warning">Price:9.9$</a>
          </div>

        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
        <div class="card-content">
          <div class="card-img" style="height: 200px">
            <img src="B3.jpeg"  alt="">
            <span style="margin-left: 5px"><h4>Breakfast</h4></span>
          </div>
          <div class="card-desc" >
            <h3>Cherry Beans</h3>
            <small><p> Cherry Beans with and Smoked quail With Nitrogen from crispy egg</p></small>
            <a href="#" class="btn btn-warning">Price:9.9$</a>
          </div>

        </div>
      </div>
    </div>
    <div class="col-md-3">
     <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
      <div class="card-content">
       <div class="card-img" style="height: 200px">
        <img src="Dinner.jpg"  alt="">
        <span style="margin-left: 5px"><h4>BreakFast</h4></span>
      </div>
      <div class="card-desc" >
        <h3>Prathy Ghee</h3>
        <small><p> Ghee Prathy that made by Special Punjabi peoples Smoked quail.</p></small>
        <a href="#" class="btn btn-warning">Price:9.9$</a>
      </div>

    </div>
  </div>
</div>

</div>

</div>
</div>

<div class="container-fluid">
  <div class="row">
    <div alt="" 
    style=" background-image: url('eventpic.jpg');  background-size: cover; height: 300px;width: 100%;margin-top: 100px">
  </div>
</div>
</div>
<div id="OurGallery">

</div>

<!-- Our gallery -->
<!--==========================
      Gallery Section
      ============================-->
      <section id="gallery" class="wow fadeInUp">

        <div style="text-align: center;" >
          <span style=" font-size: 48px;color: #ffb606; 
          font-family: Forte;"> our</span> 
          <br>
          <span style="color: #2a2a2a;

          text-transform: none;
          font-size: 54px;
          font-weight: 800;
          font-style: normal;
          text-transform: none;">Gallery</span>
          <br>
          <br>


        </div>

        <span style="color: gray;"><center>Every so often you might have an outburst in the gallery
        </center> </span>
        <br>
        <br>

        <div class="owl-carousel gallery-carousel">
          <a href="gal/img/gallery/1.jpg" class="venobox" data-gall="gallery-carousel">
            <img src="gal/img/gallery/1.jpg" alt="">
          </a>
          <a href="gal/img/gallery/2.jpg" class="venobox" data-gall="gallery-carousel"><img src="gal/img/gallery/2.jpg" alt=""></a>
          <a href="gal/img/gallery/3.jpg" class="venobox" data-gall="gallery-carousel"><img src="gal/img/gallery/3.jpg" alt=""></a>
          <a href="gal/img/gallery/4.jpg" class="venobox" data-gall="gallery-carousel"><img src="gal/img/gallery/4.jpg" alt=""></a>
          <a href="gal/img/gallery/5.jpg" class="venobox" data-gall="gallery-carousel"><img src="gal/img/gallery/5.jpg" alt=""></a>
          <a href="gal/img/gallery/6.jpg" class="venobox" data-gall="gallery-carousel"><img src="gal/img/gallery/6.jpg" alt=""></a>
          <a href="gal/img/gallery/7.jpg" class="venobox" data-gall="gallery-carousel"><img src="gal/img/gallery/7.jpg" alt=""></a>
          <a href="gal/img/gallery/8.jpg" class="venobox" data-gall="gallery-carousel"><img src="gal/img/gallery/8.jpg" alt=""></a>
        </div>

      </section>

      <!-- Our gallery --> 


      <!-- catagoriessss -->
      <div class="container-fluid">

        <div class="row">

          <div id="FEATURES" style="background-image: url('fotterup.jpg');   background-size: cover; height: 300px;width: 100%;margin-top: 150px;background-attachment: fixed;">
          </div>
        </div>
      </div>



<div class="wow fadeInUp">

      <div class="container" id="OurStandards">
        <div class="row">  
          <div class="col-sm-12">


            <div  style="text-align: center;">
             <span style=" font-size: 48px;color: #ffb606; 
             font-family: Forte;"> our</span> 
             <br>
             <span style="color: #2a2a2a;

             text-transform: none;
             font-size: 54px;
             font-weight: 800;
             font-style: normal;
             text-transform: none;">Standard</span>
             <br>

             <br>
             <br>
             <img src="curly.png" >
             <br><br><br><br>
           </div>

           <span style="color: gray"><center>Every so often you might have an outburst in the gallery.
           </center> </span>
           <br>
           <br>
           <br>
           <br>
         </div>
       </div>
     </div>



     <div class="container">
      <div class="row">
        <div class="col-md-12">

          <div class="row">
            <div class="col-sm-5">

              <div   style=";color: yellow"><h5>1. Choose music carefully. </h5>
              </div><div class="desc-list">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </div>

              <div   style=";color: yellow"><h5>4. Make deliberate choices with lighting.</h5>
              </div><div class="desc-list">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable </div>

            </div>
            <div class="col-sm-2"></div>

            <div class="col-sm-5">

              <div   style=";color: yellow"><h5>1. Choose music carefully. </h5>
              </div><div class="desc-list">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </div>

              <div   style=";color: yellow"><h5>2. Never serve food that has expired.</h5>
              </div><div class="desc-list">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable </div>


            </div>

            <div class="col-sm-1"></div>

          </div>
        </div>
      </div>
    </div>
  </div>
    <div id="FEATURES" style="background-image: url('gallery.jpg');   background-size: cover; height: 300px;width: 100%;margin-top: 150px;background-attachment: fixed;">
    </div>

    <!-- our standar close -->

    
<div class="wow fadeInUp">
<div class="container" style="margin-top: 20px">
	
  <div class="row" id="BLOG">


    <br>
    <span class="mx-auto" style="color: #2a2a2a;
    font-size:44px;
    font-weight: 800;

    ">Our Blogs</span>
    <br>

    


  </div>
</div>




<!-- details card section starts from here -->
<section class="details-card" >



  <div class="container">
    <div class="row justify-content-center">

     <div class="col-md-4">
      <div  class="row">
        <div class="col-sm-12">
          <div  style="border-radius: 5px;border: 1px solid gray;margin-left: 0px; border: 1px solid #ddd; margin-top: 30px">
            <div class="card-content">
              <div class="card-img " style="height: 300px" >
                <img src="blog2.jpg"  alt="">
                
              </div>
              <div class="card-desc" >
                <h3>know about sugar free</h3>
                <p> This year the challenge starts on January 6th (the first Monday of the month) and ends on January 31st. During that time, we’ll be sharing a bunch of yum-town recipes that are made with just regular, familiar, real food </p>
               

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div  class="row">
        <div class="col-sm-12">
         <div  style="border-radius: 5px;border: 1px solid gray;margin-left: 0px; border: 1px solid #ddd; margin-top: 30px">
          <div class="card-content" >
            <div class="card-img" style="height: 300px">
              <img src="blog3.jpg" alt="">
             
            </div>
            <div class="card-desc" >
              <h3>best recipes to make before the end of 2019</h3>
              <p> Fun fact: at the time this is written, there are almost 1,000 recipes on Pinch of Yum. ONE THOUSAND RECIPES. That’s enough for a different recipe every day for like…almost three years? Woah.</p>
              

            </div>

          </div>
        </div>

      </div></div>
    </div>
    <div class="col-md-4">
      <div  class="row">
        <div class="col-sm-12">
         <div  style="border-radius: 5px;border: 1px solid gray;margin-left: 0px; border: 1px solid #ddd; margin-top: 30px">
          <div class="card-content">
            <div class="card-img" style="height: 300px">
              <img src="blog4.jpg" alt="">
        
            </div>
            <div class="card-desc" >
              <h3>the best swedish meatballs</h3>
              <p>I grew up eating a lot of Swedish meatballs, and I have to say – Swedish meatball recipes are varied and they all kind of have their own personality. But after testing several </p>
             

            </div>

          </div>
        </div>


      </div></div>
    </div>
  </div>
</div>  



<!-- Card -->

</section>
</div>
<!-- details card section starts from here -->

<!------ slider script ---------->

<!-- this Blog section closeeee-->
<!-- Complain Button -->
<div style="display: block; position: fixed; z-index: 1;right: 40px; bottom: 20px;">
 <a class="btn btn-warning rounded waves-effect waves-light" data-toggle="modal" data-target="#exampleModalCenter">Complains</a>
</div>
<!-- comapin blose-->
<!-- modal for feedback -->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
   <div class="modal-header bg-warning">
    <h5 class="modal-title text-dark" id="exampleModalCenterTitle">Max Restaurant Complains</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
 </div>



 <form action="{{url('/submitC')}}" method="post">
   @csrf
   <div class="modal-body">
    <div class="form-group">
     <label for="feedback" class="text-dark">Your Complains:</label>
     <textarea class="form-control text-dark text-center" rows="5"
     name="complains" id="complains" style="background-color: #D2D5D7;"></textarea>

   </div>

 </div>
 <div class="modal-footer mx-auto">

  <button type="submit"  class="btn btn-outline-danger rounded waves-effect waves-light">Submit</button>






</div>
</form>


<div class="modal-body text-center">
 <i class="far fa-smile fa-3x text-danger " ></i>
 <span class="h5 text-danger">Thanks!!!</span><br>


</div>

</div>
</div>
</div>

<!-- modal for feedback -->


<!-- footterrrrrr opeeennn -->
<div class="container-fluid" id="about">

  <div class="row" style="background-color: #181818;height: 420px;margin-top: 50px">

    <div  class="col-sm-12" style="margin-top: 100px">
      <center><img src="logo.png">
      </center>

      <br>
      <br>

      <p class="text-center" style="font-family: 'Roboto', sans-serif;      font-size: 16px; font-family: aileron;color: white" >
        329 Queensberry Street, North Melbourne VIC 3051, Australia.
      </p>


      <p class="text-center" style="font-family: 'Roboto', sans-serif;      font-size: 16px; font-family: aileron;color: white" >
        Call. <span class="text"> 0123 456 78910</span>
      </p>


      <p class="text-center" style="  font-family: 'Roboto', sans-serif;      ;font-size: 16px; font-family: aileron;color: white" >
        Email. <span class="text"> hello@yourmail.com</span>
      </p>


      <br>
      <br>
      <br>

      <hr style="
      margin-left: 300px;
      margin-right: 300px;
      border-style: inset;
      border-width: 3px;
      margin-top: -25px">

    </div>

  </div>

</div>

<!-- footterrrrrr clooosssseeeeee -->






<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" /> 
<script src="https://Kit.fontawesome.com/585b051251.js" crossorigin="anonymous"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />

<!-- JavaScript Libraries -->
<script src="{{asset('gal/lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('gal/lib/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{asset('gal/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('gal/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('gal/lib/superfish/hoverIntent.js')}}"></script>
<script src="{{asset('gal/lib/superfish/superfish.min.js')}}"></script>
<script src="{{asset('gal/lib/wow/wow.min.js')}}"></script>
<script src="{{asset('gal/lib/venobox/venobox.min.js')}}"></script>
<script src="{{asset('gal/lib/owlcarousel/owl.carousel.min.js')}}"></script>

<!-- Contact Form JavaScript File -->
<script src="{{asset('gal/contactform/contactform.js')}}"></script>

<!-- Template Main Javascript File -->
<script src="{{asset('gal/js/main.js')}}"></script>

</body>
</html>