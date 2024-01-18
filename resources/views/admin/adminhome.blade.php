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

    <div style="position: relative; top:-700px; right: -350px ">
        <h1>Welcome to Staff Homepage</h1>
        <h2>Other staffs</h2>

        <div class="row">
        <div class="col-lg-4">
            <div class="chef-item">
                <div class="thumb">
                    <div class="overlay"></div>
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google"></i></a></li>
                    </ul>
                    <img height="100px" width="400px" src="assets/images/fawwaz1.jpg" alt="Chef #3">
                </div>
                <div class="down-content">
                    <h4>Fawwaz</h4>
                    <span>Barista Chef</span>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="chef-item">
                <div class="thumb">
                    <div class="overlay"></div>
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google"></i></a></li>
                    </ul>
                    <img height="100px" width="400px" src="assets/images/johan.jpg" alt="Chef #3">
                </div>
                <div class="down-content">
                    <h4>Johan</h4>
                    <span>Kitchen Helper</span>
                </div>
            </div>
        </div>

    </div>

    </div>
    </div>

    @include("admin.adminscript")


  </body>
</html>
