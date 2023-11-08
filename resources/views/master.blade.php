<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','TechnoTreasures')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}

    </body>
    <style>
    .custom-login{
        height: 500px;
        padding-top: 100px;
    }
    img.slider-img{
        height: 400px !important
    }
    .custom-product{
        height: 600px
    }
    .slider-text{
        background-color: #35443585 !important;
    }
    .trending-image{
        height: 100px;
    }
    .trening-item{
        float: left;
        width: 20%;
    }
    .trending-wrapper{
        margin: 30px;
    }
    .detail-img{
        height: 200px;
    }
    .search-box{
        width: 500px !important
    }
    .cart-list-devider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px
    }

    /* footer  */
    footer {
        background-color: #232f3e;
            color: #ffffff;
            padding: 20px 0;
    }

.link_lists h3 {
  margin-bottom: 10px;
  color: #ffffff;
}

.link_lists a {
    color: #ffffff;
            text-decoration: none;
            margin: 2px 10px;
  display: block;
}

.footer_container {
  padding: 10px;
  display: flex;
  justify-content: space-between;
}

.footer-section h3 {
    font-size: 18px; 
    margin-bottom: 10px;
}

.footer-section a {
    display: flex; 
    align-items: center; 
    color: #ffffff;
    text-decoration: none;
    margin: 5px 0;
}

.footer-section a:hover {
    text-decoration: underline;
}

.footer-section .fab {
    font-size: 24px; 
    margin-right: 10px; 
    color: #3b5998; 
}

.footer-section .fab.fa-twitter-square {
    color: #1da1f2; 
}

.footer-section .fab.fa-instagram-square {
    color: #bc2a8d; 
}
.footer a {
            color: #ffffff;
            text-decoration: none;
            margin: 0 10px;
        }
   
</style>

<!-- footer section -->
<footer>
      <div class="footer_container container">
        <div class="link_lists">
          <h3>Main Links</h3>
          <a href="#">Careers</a>
          <a href="#">Press Releases</a>
          <a href="#">Terms and condition </a>
        </div>
        <div class="link_lists">
          <h3>Support</h3>
          <a href="#">Help Center</a>
          <a href="#">Returns</a>
          <a href="#">Contact Us</a>
          <a href="#">Privacy Policy</a>
        </div>
    
          <div class="footer-section">
            <h3>Connect with Us</h3>
            <a href="https://www.facebook.com/"><i class="fab fa-facebook-square footer-icon"></i>Facebook</a>
            <a href="https://twitter.com/"><i class="fab fa-twitter-square footer-icon"></i>Twitter</a>
            <a href="https://www.instagram.com/"><i class="fab fa-instagram-square footer-icon"></i>Instagram</a>
        </div>
        </div>
      </div>
    </footer>
</html>

 <!-- php artisan db:seed --class ProductSeeder  -->