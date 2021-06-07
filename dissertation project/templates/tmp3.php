<!DOCTYPE html>
<html lang="en">
<head>





  <script type="text/javascript" >




    function empty()
    {
      var maths = document.getElementById('maths').value;
        var comp = document.getElementById('comp').value;
        var ba = document.getElementById('ba').value;
        var states = document.getElementById('states').value;
        var chemistry = document.getElementById('chemistry').value;
        var physics = document.getElementById('physics').value;
        var history = document.getElementById('history').value;
        var politics = document.getElementById('politics').value;
        var economics = document.getElementById('economics').value;
        var english = document.getElementById('english').value;
        var biology = document.getElementById('biology').value;
      if((maths || comp || ba || states || chemistry || physics || history || politics || economics || english || biology)  > 100)
      {
        alert("Marks Greater Than 100")
      }

    }


    function que()
    {
      var cars = ["Saab", "Volvo", "BMW"];
      document.getElementById('question').innerHTML("Hello");

    }
    </script>


  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">
</script>

<script>



$(function(){
    var loading = $('#loadbar').hide();
    $(document)
    .ajaxStart(function () {
        loading.show();
    }).ajaxStop(function () {
      loading.hide();
    });

    $("label.btn").on('click',function () {
      var choice = $(this).find('input:radio').val();
      $('#loadbar').show();
      $('#quiz').fadeOut();
      setTimeout(function(){
           $( "#answer" ).html(  $(this).checking(choice) );
            $('#quiz').show();
            $('#loadbar').fadeOut();
           /* something else */
      }, 1500);
    });

    $ans = 3;

    $.fn.checking = function(ck) {
        if (ck != $ans)
            return 'INCORRECT';
        else
            return 'CORRECT';
    };
});


// js qu
     $(document).ready(function() {

$(function() {
    $('#submit').attr('disabled', 'disabled');
});

$('input[type=number]').keyup(function() {

    if ($('#maths').val() !=''&&
    $('#comp').val() != '' &&
    $('#ba').val() != ''&&
    $('#states').val() != '' &&
    $('#chemistry').val() != ''&&
    $('#physics').val() != '' &&
    $('#history').val() != ''&&
    $('#politics').val() != '' &&
    $('#economics').val() != ''&&
    $('#english').val() != '' &&
    $('#biology').val() != '') {

        $('#submit').removeAttr('disabled');
    } else {
        $('#submit').attr('disabled', 'disabled');
    }
});
    });
    </script>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme The Band</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


<!-- link for qu -->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>






  <style>
  #qid {
    padding: 10px 15px;
    -moz-border-radius: 50px;
    -webkit-border-radius: 50px;
    border-radius: 20px;
  }
  label.btn {
      padding: 18px 60px;
      white-space: normal;
      -webkit-transform: scale(1.0);
      -moz-transform: scale(1.0);
      -o-transform: scale(1.0);
      -webkit-transition-duration: .3s;
      -moz-transition-duration: .3s;
      -o-transition-duration: .3s
  }

  label.btn:hover {
      text-shadow: 0 3px 2px rgba(0,0,0,0.4);
      -webkit-transform: scale(1.1);
      -moz-transform: scale(1.1);
      -o-transform: scale(1.1)
  }
  label.btn-block {
      text-align: left;
      position: relative
  }

  label .btn-label {
      position: absolute;
      left: 0;
      top: 0;
      display: inline-block;
      padding: 0 10px;
      background: rgba(0,0,0,.15);
      height: 100%
  }

  label .glyphicon {
      top: 34%
  }
  .element-animation1 {
      animation: animationFrames ease .8s;
      animation-iteration-count: 1;
      transform-origin: 50% 50%;
      -webkit-animation: animationFrames ease .8s;
      -webkit-animation-iteration-count: 1;
      -webkit-transform-origin: 50% 50%;
      -ms-animation: animationFrames ease .8s;
      -ms-animation-iteration-count: 1;
      -ms-transform-origin: 50% 50%
  }
  .element-animation2 {
      animation: animationFrames ease 1s;
      animation-iteration-count: 1;
      transform-origin: 50% 50%;
      -webkit-animation: animationFrames ease 1s;
      -webkit-animation-iteration-count: 1;
      -webkit-transform-origin: 50% 50%;
      -ms-animation: animationFrames ease 1s;
      -ms-animation-iteration-count: 1;
      -ms-transform-origin: 50% 50%
  }
  .element-animation3 {
      animation: animationFrames ease 1.2s;
      animation-iteration-count: 1;
      transform-origin: 50% 50%;
      -webkit-animation: animationFrames ease 1.2s;
      -webkit-animation-iteration-count: 1;
      -webkit-transform-origin: 50% 50%;
      -ms-animation: animationFrames ease 1.2s;
      -ms-animation-iteration-count: 1;
      -ms-transform-origin: 50% 50%
  }
  .element-animation4 {
      animation: animationFrames ease 1.4s;
      animation-iteration-count: 1;
      transform-origin: 50% 50%;
      -webkit-animation: animationFrames ease 1.4s;
      -webkit-animation-iteration-count: 1;
      -webkit-transform-origin: 50% 50%;
      -ms-animation: animationFrames ease 1.4s;
      -ms-animation-iteration-count: 1;
      -ms-transform-origin: 50% 50%
  }
  @keyframes animationFrames {
      0% {
          opacity: 0;
          transform: translate(-1500px,0px)
      }

      60% {
          opacity: 1;
          transform: translate(30px,0px)
      }

      80% {
          transform: translate(-10px,0px)
      }

      100% {
          opacity: 1;
          transform: translate(0px,0px)
      }
  }

  @-webkit-keyframes animationFrames {
      0% {
          opacity: 0;
          -webkit-transform: translate(-1500px,0px)
      }
      60% {
          opacity: 1;
          -webkit-transform: translate(30px,0px)
      }

      80% {
          -webkit-transform: translate(-10px,0px)
      }

      100% {
          opacity: 1;
          -webkit-transform: translate(0px,0px)
      }
  }

  @-ms-keyframes animationFrames {
      0% {
          opacity: 0;
          -ms-transform: translate(-1500px,0px)
      }

      60% {
          opacity: 1;
          -ms-transform: translate(30px,0px)
      }
      80% {
          -ms-transform: translate(-10px,0px)
      }

      100% {
          opacity: 1;
          -ms-transform: translate(0px,0px)
      }
  }

  .modal-header {
      background-color: transparent;
      color: inherit
  }

  .modal-body {
      min-height: 205px
  }
  #loadbar {
      position: absolute;
      width: 62px;
      height: 77px;
      top: 2em
  }
  .blockG {
      position: absolute;
      background-color: #FFF;
      width: 10px;
      height: 24px;
      -moz-border-radius: 8px 8px 0 0;
      -moz-transform: scale(0.4);
      -moz-animation-name: fadeG;
      -moz-animation-duration: .8800000000000001s;
      -moz-animation-iteration-count: infinite;
      -moz-animation-direction: linear;
      -webkit-border-radius: 8px 8px 0 0;
      -webkit-transform: scale(0.4);
      -webkit-animation-name: fadeG;
      -webkit-animation-duration: .8800000000000001s;
      -webkit-animation-iteration-count: infinite;
      -webkit-animation-direction: linear;
      -ms-border-radius: 8px 8px 0 0;
      -ms-transform: scale(0.4);
      -ms-animation-name: fadeG;
      -ms-animation-duration: .8800000000000001s;
      -ms-animation-iteration-count: infinite;
      -ms-animation-direction: linear;
      -o-border-radius: 8px 8px 0 0;
      -o-transform: scale(0.4);
      -o-animation-name: fadeG;
      -o-animation-duration: .8800000000000001s;
      -o-animation-iteration-count: infinite;
      -o-animation-direction: linear;
      border-radius: 8px 8px 0 0;
      transform: scale(0.4);
      animation-name: fadeG;
      animation-duration: .8800000000000001s;
      animation-iteration-count: infinite;
      animation-direction: linear
  }
  #rotateG_01 {
      left: 0;
      top: 28px;
      -moz-animation-delay: .33s;
      -moz-transform: rotate(-90deg);
      -webkit-animation-delay: .33s;
      -webkit-transform: rotate(-90deg);
      -ms-animation-delay: .33s;
      -ms-transform: rotate(-90deg);
      -o-animation-delay: .33s;
      -o-transform: rotate(-90deg);
      animation-delay: .33s;
      transform: rotate(-90deg)
  }
  #rotateG_02 {
      left: 8px;
      top: 10px;
      -moz-animation-delay: .44000000000000006s;
      -moz-transform: rotate(-45deg);
      -webkit-animation-delay: .44000000000000006s;
      -webkit-transform: rotate(-45deg);
      -ms-animation-delay: .44000000000000006s;
      -ms-transform: rotate(-45deg);
      -o-animation-delay: .44000000000000006s;
      -o-transform: rotate(-45deg);
      animation-delay: .44000000000000006s;
      transform: rotate(-45deg)
  }
  #rotateG_03 {
      left: 26px;
      top: 3px;
      -moz-animation-delay: .55s;
      -moz-transform: rotate(0deg);
      -webkit-animation-delay: .55s;
      -webkit-transform: rotate(0deg);
      -ms-animation-delay: .55s;
      -ms-transform: rotate(0deg);
      -o-animation-delay: .55s;
      -o-transform: rotate(0deg);
      animation-delay: .55s;
      transform: rotate(0deg)
  }
  #rotateG_04 {
      right: 8px;
      top: 10px;
      -moz-animation-delay: .66s;
      -moz-transform: rotate(45deg);
      -webkit-animation-delay: .66s;
      -webkit-transform: rotate(45deg);
      -ms-animation-delay: .66s;
      -ms-transform: rotate(45deg);
      -o-animation-delay: .66s;
      -o-transform: rotate(45deg);
      animation-delay: .66s;
      transform: rotate(45deg)
  }
  #rotateG_05 {
      right: 0;
      top: 28px;
      -moz-animation-delay: .7700000000000001s;
      -moz-transform: rotate(90deg);
      -webkit-animation-delay: .7700000000000001s;
      -webkit-transform: rotate(90deg);
      -ms-animation-delay: .7700000000000001s;
      -ms-transform: rotate(90deg);
      -o-animation-delay: .7700000000000001s;
      -o-transform: rotate(90deg);
      animation-delay: .7700000000000001s;
      transform: rotate(90deg)
  }
  #rotateG_06 {
      right: 8px;
      bottom: 7px;
      -moz-animation-delay: .8800000000000001s;
      -moz-transform: rotate(135deg);
      -webkit-animation-delay: .8800000000000001s;
      -webkit-transform: rotate(135deg);
      -ms-animation-delay: .8800000000000001s;
      -ms-transform: rotate(135deg);
      -o-animation-delay: .8800000000000001s;
      -o-transform: rotate(135deg);
      animation-delay: .8800000000000001s;
      transform: rotate(135deg)
  }
  #rotateG_07 {
      bottom: 0;
      left: 26px;
      -moz-animation-delay: .99s;
      -moz-transform: rotate(180deg);
      -webkit-animation-delay: .99s;
      -webkit-transform: rotate(180deg);
      -ms-animation-delay: .99s;
      -ms-transform: rotate(180deg);
      -o-animation-delay: .99s;
      -o-transform: rotate(180deg);
      animation-delay: .99s;
      transform: rotate(180deg)
  }
  #rotateG_08 {
      left: 8px;
      bottom: 7px;
      -moz-animation-delay: 1.1s;
      -moz-transform: rotate(-135deg);
      -webkit-animation-delay: 1.1s;
      -webkit-transform: rotate(-135deg);
      -ms-animation-delay: 1.1s;
      -ms-transform: rotate(-135deg);
      -o-animation-delay: 1.1s;
      -o-transform: rotate(-135deg);
      animation-delay: 1.1s;
      transform: rotate(-135deg)
  }
  @-moz-keyframes fadeG {
      0% {
          background-color: #000
      }

      100% {
          background-color: #FFF
      }
  }

  @-webkit-keyframes fadeG {
      0% {
          background-color: #000
      }

      100% {
          background-color: #FFF
      }
  }

  @-ms-keyframes fadeG {
      0% {
          background-color: #000
      }

      100% {
          background-color: #FFF
      }
  }

  @-o-keyframes fadeG {
      0% {
          background-color: #000
      }
      100% {
          background-color: #FFF
      }
  }

  @keyframes fadeG {
      0% {
          background-color: #000
      }

      100% {
          background-color: #FFF
      }
  }

  /* upar que css */
  body {
    font: 400 15px/1.8 Lato, sans-serif;
    color: #777;
  }
  h3, h4 {
    margin: 10px 0 30px 0;
    letter-spacing: 10px;
    font-size: 20px;
    color: #111;
  }
  .container {
    padding: 80px 120px;
  }
  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.7;
  }
  .person:hover {
    border-color: #f1f1f1;
  }
  .carousel-inner img {
    /*-webkit-filter: grayscale(90%);
    /*filter: grayscale(90%);  make all photos black and white */
    width: 100%; /* Set width to 100% */
    margin: auto;
    height: 50%
  }
  .carousel-caption h3 {
    color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
    background: #2d2d30;
    color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail p {
    margin-top: 15px;
    color: #555;
  }
  .btn {
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  }
  .modal-header, h4, .close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  .nav-tabs li a {
    color: #777;
  }
  #googleMap {
    width: 100%;
    height: 400px;
    -
  }
  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .open .dropdown-toggle {
    color: #fff;
    background-color: #555 !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color: red !important;
  }
  footer {
    background-color: #2d2d30;
    color: #f5f5f5;
    padding: 32px;
  }
  footer a {
    color: #f5f5f5;
  }
  footer a:hover {
    color: #777;
    text-decoration: none;
  }
  .form-control {
    border-radius: 0;
  }
  textarea {
    resize: none;
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#myPage">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#band">COURSES</a></li>
        <li><a href="#tour">FIND BEST FOR YOU</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Merchandise</a></li>
            <li><a href="#">Extras</a></li>
            <li><a href="#">Media</a></li>
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>
<div rows=>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="http://education.abc.net.au/image/journal/article?img_id=3265350&t=1564367046490" alt="New York" width="1100" height="300">
        <div class="carousel-caption">

        </div>
      </div>

      <div class="item">
        <img src="http://education.historicacanada.ca/images/164/Indigenous_Perspectives_title.jpg?1521227350" alt="Chicago" width="1100" height="300">
        <div class="carousel-caption">

        </div>
      </div>

      <div class="item">
        <img src="la.jpg" alt="Los Angeles" width="1200" height="300">
        <div class="carousel-caption">

        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
  <h3>COURSE INFORMATION</h3>

  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>SCIENCE</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9UzlpCfosPXY9usNaouxfcS_vP4UchAo4jVUh3ZIH3qOUFC5j" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
        <p>
          <font color="blue">
            Courses for PCM (Maths)<br>
          </font>
          <font color="black">
            1.Engineering (B.E/ B.Tech))<br>
            2.Environmental Science)<br>
            3.B.Sc. Degree)<br>
            4.Defence (Navy, Army, Air force))<br>

            <br>
          </font>
            <font color="blue">
              Courses for PCB (Biology)<br>
            </font>
            <font color="black">


            1.Bachelor of Veterinary Science & Animal Husbandry (B.VSc AH<br>
2.Bachelor of Naturopathy & Yogic Science (BNYS)<br>
3.Bachelor of Physiotherapy)<br>
4.B.Sc. Nursing)<br>
5.Bachelor of Pharmacy)<br>
6.Biotechnology)<br>

          </font>
        </p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>COMMERCE</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="https://www.successcds.net/Career/qna/wp-content/uploads/2010/02/commerce-500.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">

      <p> <font color="black">
         1. B.Com (Bachelor of Commerce)<br>
          2.LLB (Bachelor of Laws)<br>
          3. BBA (Bachelor of Business Administration)<br>
          4.CA (Chartered Accountant)<br>
          5.CS (Company Secretary)<br>
          6.CMA (Cost and Management Accountant)<br>
          7.CFP (Certified Financial Planner)<br>
    </font>  </p>

      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>ARTS</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQATJXdvQnQplw1G0BHkd1wQSeMwzdNDGZWk3tIdTxOoMK6665vcQ" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <font color="black"><p>
          1.Fashion and Designing Courses<br>
          2. Journalism and Mass Communication<br>
          3.Bachelor of Arts (BA)<br>

          4. Hotel Management<br>
          5. Teacher Training courses<br>
        </font></p>
      </div>
    </div>
  </div>
</div>

<!-- Container (TOUR Section) -->
<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">FIND BEST FOR YOU</h3>




    <!-- <div class="container-fluid bg-info">
        <div class="modal-dialog">
          <div class="modal-content">
             <div class="modal-header">
                <h3 id="question"></h3>
            </div>
            <div class="modal-body">
                <div class="col-xs-3 col-xs-offset-5">
                   <div id="loadbar" style="display: none;">
                      <div class="blockG" id="rotateG_01"></div>
                      <div class="blockG" id="rotateG_02"></div>
                      <div class="blockG" id="rotateG_03"></div>
                      <div class="blockG" id="rotateG_04"></div>
                      <div class="blockG" id="rotateG_05"></div>
                      <div class="blockG" id="rotateG_06"></div>
                      <div class="blockG" id="rotateG_07"></div>
                      <div class="blockG" id="rotateG_08"></div>
                  </div>
              </div>

              <div class="quiz" id="quiz" data-toggle="buttons">
               <label class="element-animation1 btn btn-lg btn-primary btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="1">1 One</label>
               <label class="element-animation2 btn btn-lg btn-primary btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="2">2 Two</label>
               <label class="element-animation3 btn btn-lg btn-primary btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="3">3 Three</label>
               <label class="element-animation4 btn btn-lg btn-primary btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="4">4 Four</label>
           </div>
       </div>
       <div class="modal-footer text-muted">
        <span id="answer"></span>

    </div>
    </div>
    </div>
    </div> -->

  <form action="{{ url_for('predict')}}" method="post">
    <label>Q1.) Do you like to play with Numbers???</label><br>
    <input type="radio" name="q1">YES</input><br>
    <input type="radio" name="q1">NO</input>

    <p class="text-center">Your marks are helpful to choosing your career<br> Try once!</p>

       <div class="row text-center">
           <div class="col-md-12">


      <input type="number" id="maths"  name="maths"  placeholder="Maths Marks">
      <input type="number" id="comp" name="comp" placeholder="Computer Marks">
      <input type="number" id="ba" name="ba" placeholder="Business Administration Marks"><br><br>
      <input type="number" id="states" name="states" placeholder="states Marks">
      <input type="number" id="chemistry" name="chemistry" placeholder="Chemestry Marks">
      <input type="number" id="physics"  name="physics" placeholder="Physics Marks"><br><br>
      <input type="number" id="history"  name="history" placeholder="History Marks">
      <input type="number" id="politics"  name="politics" placeholder="Politics Marks">
      <input type="number" id="economics"  name="economics" placeholder="Economics Marks"><br><br>
      <input type="number" id="english"  name="english" placeholder="English Marks">
      <input type="number" id="biology"  name="biology" placeholder="Biology Marks"><br><br>
      <div class="hidden">  <input type="number" name="field" value="0" placeholder="field"><br><br></div>

      <input type ="submit" onclick="empty()" id="submit" value="Sumbit Marks"><br><br>

  <br>
  <br>

  <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
   70%
 </div>
</div>

  <h2>
  {{ prediction_text }}
</h2>
    </form>
           <div>
          <div>


  <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="paris.jpg" alt="Paris" width="400" height="300">
          <p><strong>Paris</strong></p>
          <p>Friday 27 November 2015</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="newyork.jpg" alt="New York" width="400" height="300">
          <p><strong>New York</strong></p>
          <p>Saturday 28 November 2015</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="sanfran.jpg" alt="San Francisco" width="400" height="300">
          <p><strong>San Francisco</strong></p>
          <p>Sunday 29 November 2015</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->


      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Tickets</h4>
        </div>
        <div class="modal-body">


            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Send To</label>
              <input type="text" placeholder="Enter msg here" name="chattext">
                <label for="usrname"><span class="glyphicon glyphicon-user"></span> </label>

            </div>
              <button type="submit" class="btn btn-block">Pay
                <span class="glyphicon glyphicon-ok"></span>
              </button>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->

<div id="contact" class="container">

    <div class="col-md-8">

      <div class="row">
        <input type="text" name="chat">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>


  <br>
  <h3 class="text-center">From The Blog</h3>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Mike</a></li>
    <li><a data-toggle="tab" href="#menu1">Chandler</a></li>
    <li><a data-toggle="tab" href="#menu2">Peter</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>Mike Ross, Manager</h2>
      <p>Man, we've been on the road for some time now. Looking forward to lorem ipsum.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>Chandler Bing, Guitarist</h2>
      <p>Always a pleasure people! Hope you enjoyed it as much as I did. Could I BE.. any more pleased?</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h2>Peter Griffin, Bass player</h2>
      <p>I mean, sometimes I enjoy the show, but other times I enjoy other things.</p>
    </div>
  </div>
</div>

<!-- Image of location/map -->
<img src="map.jpg" class="img-responsive" style="width:100%">

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Bootstrap Theme Made By <a href="https://www.w3schools.com" data-toggle="tooltip" title="Visit w3schools">www.w3schools.com</a></p>
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip();

  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>
