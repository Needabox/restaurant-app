<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="{{asset('images/mylogo1.png')}}"/>

    <title>Product example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="{{ ('css/product.css')}}" rel="stylesheet">
  </head>

  <body>

    <nav class="site-header sticky-top py-1">
      <div class="container d-flex flex-column flex-md-row justify-content-between">
        <img src="{{ asset('images/mylogo1.png')}}" class="py-2 d-none d-md-inline-block" width="50">
        <a class="py-2 d-none d-md-inline-block" href=" {{route('login')}}">Login</a>
      </div>
    </nav>

    <div class="position-relative overflow-hidden  m-md-3 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <img class="d-md-block" src="{{ asset('images/logo.png') }}" width="520px" height="80px">
        <p class="lead font-weight-normal">A collaboration between PLOYRESTO and Laravel.</p>
        <p class="l font-weight-normal">very good food for a cheap price. get it by ordering online or coming to PLOYRESTO outlets</p>
        <img class="cooking" src="{{ asset('images/streetfood2.png') }}">
        <img class="cooking cooking-2" src="{{ asset('images/orderonline.png') }}">
      </div>
    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 text-center">
                <div class="mt-5">
                    <img class="text-primary mb-4" src="{{ asset('images/specialevent2.png') }}" width="200px" height="200px">
                    <h3 class="h4 mb-2">Hold an event here</h3>
                    <p class="text-muted mb-0">Don't be confused about where to celebrate.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="mt-5">
                    <img class="text-primary mb-4" src="{{ asset('images/foodlove2.png') }}" width="200px" height="200px">
                    <h3 class="h4 mb-2">Everyone loves it!</h3>
                    <p class="text-muted mb-0">There are many people who like the menu here</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="mt-5">
                    <img class="text-primary mb-4" src="{{ asset('images/eatingtho.png') }}" width="250px" height="200px">
                    <h3 class="h4 mb-2">Don't eat alone</h3>
                    <p class="text-muted mb-0">Bring Friends, Family and all to come here</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br/>
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="bg-dark  mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
          <h2 class="display-5">Good Food</h2>
          <p class="lead">There are many foods that you can taste here.</p>
        </div>
        <img class="mx-auto box-shadow" src="{{ asset('images/stick.jpeg') }}" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"> 
      </div>
      <div class="bg-primary mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
          <h2 class="display-5" style="color: white">Affordable Prices</h2>
          <p class="lead" style="color: white">Get a special discount on our collaboration!</p>
        </div>
          <img class="mx-auto box-shadow" src="{{ asset('images/kepiting.jpg') }}" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
      </div>
    </div>

    <footer class="container py-5">
      <div class="row">
        <div class="col-12 col-md">
          <img src="{{ asset('images/ployresto.png')}}" width="100" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line>
          <small class="d-block mb-3 text-muted">&copy; 2020</small>
        </div>
        <div class="col-6 col-md">
          <h5>Team</h5>
          <ul class="list-unstyled text-small">
            <li class="text-muted" href="#">PLOYRESTO stuff</li>
            <li class="text-muted" href="#">LARAVEL stuff</li>
            <li class="text-muted" href="#">Founder Of PLOYRESTRO</li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Contact</h5>
          <ul class="list-unstyled text-small">
            <li class="text-muted" href="#">Jepang, 1-2-20 Haginochaya, Nishinari Ward, Osaka, 557-0004, Jepang•+901 1-8290-57200</li>
            <li class="text-muted" href="#">088223987882</li>
          </ul>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
