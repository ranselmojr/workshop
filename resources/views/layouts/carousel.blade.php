<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="/img/ArcDSC_0019.JPG" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Welcome to my Workshop</h1>
              <p>This page is created using PHP Laravel framework with Bootstrap U/I</p>
              <p><a class="btn btn-lg btn-primary" href="{{ url('/about') }}" role="button">Learn More</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="/img/BryDSC_0002.JPG" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>What's in it</h1>
              <p>Please find some sample of my work throughout school and some on off time</p>
              <p><a class="btn btn-lg btn-primary" href="{{ url('/about') }}" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="/img/CapDSC_0010.JPG" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Sample Work</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
<!-- /.carousel -->
