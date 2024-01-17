 <!-- ***** Chefs Area Starts ***** -->
 <section class="section" id="chefs">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 text-center">
                <div class="section-heading">
                    <h6>Our Chefs</h6>
                    <h2>We offer the best ingredients for you</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="chef-item">
                    <div class="thumb">
                        <div class="overlay"></div>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                        <img src="assets/images/arash.jpeg" alt="Chef #1">
                    </div>
                    <div class="down-content">
                        <h4>Muhammad Arash</h4>
                        <span>Head Chef</span>
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
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                        <img src="assets/images/badri.jpeg" alt="Chef #2">
                    </div>
                    <div class="down-content">
                        <h4>Badri Mahazir</h4>
                        <span>Asst. Head Chef</span>
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
                        <img src="assets/images/akim.jpeg" alt="Chef #3">
                    </div>
                    <div class="down-content">
                        <h4>Aiman Akim</h4>
                        <span>Johorian Chef</span>
                    </div>
                </div>
            </div>

            @foreach($data2 as $data2)

            <div class="col-lg-4">
                <div class="chef-item">
                    <div class="thumb">
                        <div class="overlay"></div>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                        <img src="/chefimage/{{$data2->image}}" alt="Chef #4">
                    </div>
                    <div class="down-content">
                        <h4>{{$data2->name}}</h4>
                        <span>{{$data2->speciality}}</span>
                    </div>
                </div>
            </div>

            @endforeach


        </div>
    </div>
</section>
<!-- ***** Chefs Area Ends ***** -->
