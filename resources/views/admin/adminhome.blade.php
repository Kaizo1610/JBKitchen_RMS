<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>

    @include("admin.admincss")

  </head>
  <body>

    <div class="container-scroller">

    @include("admin.navbar")

    <div style="position: relative; top:-650px; right: -350px ">
        <h1 style="color: lightcoral">Welcome to Staff Homepage</h1>
        <br>
        <h2 style="color: yellow">Achievement of our Staff</h2>

        <div class="row">
        <div class="col-lg-2">
            <div class="chef-item">
                <div class="thumb">
                    <div class="overlay"></div>
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google"></i></a></li>
                    </ul>
                    <img height="50px" width="200px" src="assets/images/fawwaz1.jpg" alt="Chef #3">
                </div>
                <div class="down-content">
                    <h4>Fawwaz</h4>
                    <span style="color: yellow">The Most Dedicated Chef</span>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="chef-item">
                <div class="thumb">
                    <div class="overlay"></div>
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google"></i></a></li>
                    </ul>
                    <img height="100px" width="300px" src="assets/images/johan.jpg" alt="Chef #3">
                </div>
                <div class="down-content">
                    <h4>Johan</h4>
                    <span style="color: yellow">The Most Energetic Chef</span>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="chef-item">
                <div class="thumb">
                    <div class="overlay"></div>
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google"></i></a></li>
                    </ul>
                    <img height="100px" width="300px" src="assets/images/arash.jpeg" alt="Chef #3">
                </div>
                <div class="down-content">
                    <h4>Arash</h4>
                    <span style="color: yellow">The Most Leadership Chef</span>
                </div>
            </div>
        </div>

    </div>

    </div>
    </div>

    @include("admin.adminscript")


  </body>
</html>
