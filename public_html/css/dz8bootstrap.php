<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Сетка Bootsrap</title>
    <style>
      div[class*="col"] {
        min-height: 100px;
        border: 2px solid darkgrey;
        box-sizing: border-box;
        text-align: center;
        color: white;
        padding-top: 15px;
      }
      div[class*="col-12"]:nth-child(1) {
        background-color: red;
      }
      div[class*="col-12"]:nth-child(2) {
        background-color: darkred;
      }
      div[class*="col-12"]:nth-child(3) {
        background-color: blue;
      }
      div[class*="col-12"]:nth-child(4) {
        background-color: silver;
      }      
      div[class*="col-12"]:nth-child(5) {
        background-color: #90EE90;
      }      
      div[class*="col-12"]:nth-child(6) {
        background-color: purple;
      }      
      div[class*="col-12"]:nth-child(7) {
        background-color: black;
      }
      div[class*="col-12"]:nth-child(8) {
        background-color: orange;
      }
      div[class*="col-8"] {
        height: 90px;
      }
      div[class*="col-8"]:nth-child(1) {
        background-color: #B22222;
      }
      div[class*="col-8"]:nth-child(2) {
        background-color: red;
      }
      div[class*="col-8"]:nth-child(3) {
        background-color: black;
      }
      div[class*="col-8"]:nth-child(4) {
        background-color: #B22222;
      }
      div[class*="col-8"]:nth-child(5) {
        background-color: darkred;
      }
      div[class*="col-8"]:nth-child(6) {
        background-color: #90EE90;
      }
      div[class*="col-8"]:nth-child(7) {
        background-color: silver;
      }
    </style>
  </head>
  <body>
    <div class="container"> <!--container fluid - всегда во всю ширину экрана-->
      <div class="row">
        <div class="col-12 order-1 h-lg-350 col-sm-12 order-sm-1 order-md-1 col-md-3 order-lg-1 col-lg-12">1</div>
        <div class="col-12 order-2 d-sm-none d-md-block order-md-2 col-md-8 d-lg-block order-lg-3 col-lg-7">2
          <div class="row pl-3 pr-3 pb-3">
            <div class="col-8 d-none d-lg-block col-lg-2">2.1</div>
            <div class="col-8 d-none d-lg-block col-lg-8">2.2</div>
            <div class="col-8 d-none d-lg-block col-lg-2">2.3</div>
            <div class="col-8 d-none d-lg-block col-lg-2">2.4</div>
            <div class="col-8 d-none d-lg-block col-lg-10">2.5</div>
            <div class="col-8 d-none d-lg-block col-lg-8">2.6</div>
            <div class="col-8 d-none d-lg-block col-lg-4">2.7</div>
          </div>
        </div>
        <div class="col-12 order-3 d-sm-none d-md-block order-md-3 col-md-1 d-lg-block order-lg-2 col-lg-5">3</div>
        <div class="col-12 order-4 col-sm-4 order-sm-4 order-md-4 col-md-4 order-lg-7 col-lg-5">4</div>
        <div class="col-12 order-5 col-sm-8 order-sm-5 order-md-5 offset-md-4 col-md-4 order-lg-6 col-lg-2 offset-lg-0"><a href="">Кликни меня</a></div>
        <div class="col-12 order-6 col-sm-8 order-sm-6 order-md-6 col-md-5 order-lg-6 col-lg-2">6</div>
        <div class="col-12 order-7 d-sm-none d-md-block order-md-7 offset-md-1 col-md-3 d-lg-block order-lg-7 col-lg-1 offset-lg-0">7</div>
        <div class="col-12 order-8 col-sm-2 offset-sm-2 order-sm-8 order-md-8 offset-md-2 col-md-1 order-lg-8 col-lg-2 offset-lg-0">8</div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>