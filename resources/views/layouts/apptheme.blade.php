<!DOCTYPE html>
<html lang="en">
  <title>Carbon Credits</title>
  <link href="{!! asset('public/assets/styles/styles.css') !!}" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&family=Source+Sans+Pro:wght@300;400;600;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>
<body>
<section>
        <div class="nav-bar container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="logo">
            <img src="{!! asset('public/assets/images/logo_wide.svg') !!}">
        </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" href="#" class="link-dark">Menu Item <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" class="link-dark">Menu Item</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" class="link-dark">Menu Item</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" class="link-dark">Menu Item</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" class="link-dark">Menu Item</a>
                </li>
              </ul>
              <div class="nav-buttons">
              <form class="form-inline my-2 my-lg-0">
                <button class="btn btn1 my-2 my-sm-0" type="submit">{{session()->get('firstname')}}</button>
                <button type="button" class="btn btn2 btn-white" style="border:1px solid black;">Lorem ipsum</button>
              </form>
            </div>
            </div>
          </nav>
        </div>
    </section>
     @yield('appcontent')
  <section>
      <div class="footer container-fluid">
        <div class="footer-wrapper row">
          <div class="col-lg-3 footer-para p-0">
            <div class="footer-icon">
              <img src="{!! asset('public/assets/images/logo.svg') !!}">
            </div>
            <p>
              Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
            </p>
          </div>
          <div class="col-lg-1"></div>
          <div class="col-lg-2 footer-links">
            <h5>COMPANY</h5>
             <a>The Team</a>
             <a>Partners</a>
             <a>Careers</a>
             <a>Contact Us</a>
          </div>
          <div class="col-lg-2 footer-links">
            <h5>NEWS ROOM</h5>
            <a>New & Events</a>
            <a>Lorem ipsum dolor sit</a>
          </div>
          <div class="col-lg-2 footer-links">
            <h5>SOLUTIONS</h5>
            <a>SEC Climate Disclosure</a>
            <a>ESG & Sustainability Teams</a>
            <a>Lorem ipsum dolor</a>
          </div>
          <div class="col-lg-2 footer-links">
            <h5>PRODUCTS</h5>
            <a>Offset set service</a>
            <a>Lorem ipsum dolor sit</a>
          </div>
        </div>
        <hr style="background-color: white; width: 83%; margin-left: auto; margin-right: auto;">
      <div class="copyright container-fluid">
          <div class="copyright-wrapper">
          <h6>Copyright 2022 Lorem ipsum dolor sit amet, consetetur sadipscing</h6>
          <p>
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
          </p>
        </div>
        <div class="copyright-links">
          <a>Consetetur</a>
          <a>Sadipscing</a>
          <a>Elitrsediam</a>
        </div>
        </div>
      </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</body>
<script>
  $(document).ready(function(){
  $(".owl-carousel").owlCarousel({
      items:3,
//      autoplay:false,
      margin:30,
      loop:true,
      dots:true,

      responsive:{
        1000:{
          items:3,
          nav:false
        },
        300:{
          items:1,
          nav:false
        }
      }
  });
});
</script>
</html>

