<?php include 'templates/header.php'; ?>

    <body id="home" class="scrollspy">
  <!-- navbar -->
      <div class="navbar-fixed">
        <nav class="blue-grey darken-4">
          <div class="container">
            <div class="nav-wrapper">
              <a href="#home" class="brand-logo">WI</a>
              <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>

              <ul class="right hide-on-med-and-down">
                <li><a href="#about">About Us</a></li>
                <li><a href="#clients">Clients</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#produk">Produk</a></li>
                <li><a href="#contact">Contact Us</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>

    <!-- sidenav -->
    <ul class="sidenav" id="mobile-nav">
     <li><a href="#">About Us</a></li>
        <li><a href="#">Clients</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Produk</a></li>
        <li><a href="#">Contact Us</a></li>
    </ul>

    <!-- silder -->
    <div class="slider">
      <ul class="slides">
        <li>
          <img src="img/slider/1.png"> <!-- random image -->
          <div class="caption left-align">
            <h3>Warga Informatika</h3>
            <h5 class="light grey-text text-lighten-3">Please like, comment, subscribe and share to others.</h5>
          </div>
        </li>
         <li>
          <img src="img/slider/2.png"> <!-- random image -->
          <div class="caption right-align">
            <h3>Wellcome to Warga Informatika Store</h3>
            <h5 class="light grey-text text-lighten-3">Warga Informatika</h5>
          </div>
        </li>
         <li>
          <img src="img/slider/3.png"> <!-- random image -->
          <div class="caption center-align">
            <h3>Warga Informatika</h3>
            <h5 class="light grey-text text-lighten-3">Desainer | Content Creator</h5>
          </div>
        </li>
      </ul>
    </div>

    <!-- About Us -->
    <section id="about" class="about scrollspy">
      <div class="container">
        <div class="row">
          <h3 class="center light grey-text text-darken-3">About Us</h3>
          <div class="col m6 light">
            <h5>Warga Informatika</h5>
            <p>Citizen Informatics is Reference channel Pride having an adequate internet connection and a passion for learning so that friends can develop themselves in the field of technology.</p>
          </div>
          <div class="col m6 light">
            <p>WEB DEVELOPMENT</p>
             <div class="progress">
                <div class="determinate blue" style="width: 85%"></div>
            </div>
            <p>MOBILE APP DEVELOPMENT</p>
             <div class="progress">
                <div class="determinate blue" style="width: 60%"></div>
            </div>
            <p>GAME DEVELOPMENT</p>
             <div class="progress">
                <div class="determinate blue" style="width: 50%"></div>
            </div>
          </div>
        </div>
      </div>
    </section>


   <!-- Clients -->
    <div id="clients" class="parallax-container scrollspy">
      <div class="parallax"><img src="img/slider/4.png"></div>

      <div id="clients" class="container clients ">
        <h3 class="center light white-text">Our Clients</h3>
        <div class="row">
          <div class="col m4 s12 center">
            <img src="img/clients/gojek.png">
          </div>
          <div class="col m4 s12 center">
            <img src="img/clients/tokopedia.png">
          </div>
          <div class="col m4 s12 center">
            <img src="img/clients/traveloka.png">
          </div>
        </div>
      </div>
    </div>

    <!-- services -->
    <section id="services" class="services grey lighten-3 scrollspy">
      <div class="container">
        <div class="row">
          <h3 class="light center grey-text tex-darken-3">Our Services</h3>
          <div class="col m4 s12">
            <div class="card-panel center">
              <i class="material-icons medium">desktop_windows</i>
              <h5>Web Development</h5>
              <p>His tasks are website development for hosting, via intranet.</p>
            </div>
          </div>
          <div class="col m4 s12">
            <div class="card-panel center">
              <i class="material-icons medium">developer_mode</i>
              <h5>Mobile App</h5>
              <p>
                Mobile applications are applications made for smartphones.</p>
            </div>
          </div>
          <div class="col m4 s12">
            <div class="card-panel center">
              <i class="material-icons medium">games</i>
              <h5>Game Development</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- produk -->
    <section id="produk" class="produk scrollspy">
      <div class="container">
        <h3 class="light center grey-text text-darken-3">Produk</h3>
        <div class="row">
          <div class="col m3 s12">
            <img src="img/portfolio/c2.jpg"class="responsive-img materialboxed">
            <p><center>realmi C2 Rp. 1500.000</p></center>
          </div>
          <div class="col m3 s12">
            <img src="img/portfolio/5pro.jpg"class="responsive-img materialboxed">
            <p><center>realmi 5 pro Rp. 3000.000</p></center>
          </div>
          <div class="col m3 s12">
            <img src="img/portfolio/c15.jpg"class="responsive-img materialboxed">
            <p><center>realmi C15 Rp. 2000.000</p></center>
          </div>
          <div class="col m3 s12">
            <img src="img/portfolio/6i.jpg"class="responsive-img materialboxed">
            <p><center>realmi 6i  Rp. 2500.000</p></center>
          </div>
        </div>
        <div class="row">
          <div class="col m3 s12">
            <img src="img/portfolio/dell.jpg"class="responsive-img materialboxed">
            <p><center>Dell  Rp. 4000.000</p></center>
          </div>
          <div class="col m3 s12">
            <img src="img/portfolio/hp.jpg"class="responsive-img materialboxed">
            <p><center>Laptop hp  Rp. 5000.000</p></center>
          </div>
          <div class="col m3 s12">
            <img src="img/portfolio/1.png"class="responsive-img materialboxed">
            <p><center>MacBook Air  Rp. 2000.000</p></center>
          </div>
          <div class="col m3 s12">
            <img src="img/portfolio/asus.jpg"class="responsive-img materialboxed">
            <p><center>Laptop ASUS  Rp. 4500.000</p></center>
          </div>
        </div>
      </div>
    </section>

    <!-- contact us -->
    <section id="contact" class="contact grey lighten-3 scrollspy">
      <div class="container">
        <h3 class="light center grey-text text-darken-3">Contact Us</h3>
        <div class="row">
          <div class="col m5 s12">
            <div class="card-panel blue darken-2 center white-text">
              <i class="material-icons">email</i>
              <h5>Contact Us</h5>
              <p>Please contact us through the website provided.</p>
            </div>
            <ul class="collection with-header">
             <li class="collection-header"><h4>Our Office</h4></li>
             <li class="collection-item">Warga Informatika</li>
              <li class="collection-item">Jl. Bazar No. 83, Bukih Pamekasan</li>
              <li class="collection-item">East Java, Indonesia</li>
            </ul>
          </div>

          <div class="col m7 s12">
            <form>
              <div class="card-panel">
                <h5>Please fill out this form</h5>
                <div class="input-field">
                  <input type="text" name="=name" id="name" required class="validate">
                  <label for="name">Name</label>
                </div>
                <div class="input-field">
                  <input type="email" name="=email" id="email" class="validate">
                  <label for="email">Email</label>
                </div>
                <div class="input-field">
                  <input type="text" name="=phone" id="phone">
                  <label for="phone">Phone Number</label>
                </div>
                <div class="input-field">
                  <textarea type="message" name="=message" id="message" class="materialize-textarea"></textarea>
                  <label for="message">Message</label>
                </div>
                <button type="submit" class="btn blue darken-2">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <?php include 'templates/footer.php'; ?>
