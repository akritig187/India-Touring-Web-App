<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"></link>
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:100" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<link href="./static/css/resultPage.css" rel="stylesheet">

</head>

<!-- Body -->
<body>

  <!-- Navigation bar -->
  <nav>
    <div>
      <ul>
        <li><a href="#title">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#places">Places To Visit</a></li>
        <li><a href="homePage.php">Search</a></li>
        <li>
          <!-- <audio autoplay="true" id="audio" controls type="audio/mpeg">
            <source src="./static/audio/{{folder}}.mp3">
          </audio> -->
        </li>
      </ul>
    </div>
  </nav>
  <!-- End of Navigation bar -->
  
  <!-- Home | Parallex background -->
  <header id="title">
    <div class="bgimg-1" style="background-image:url(./images/Taj.jpg)"> 
    </div>
  </header>
  <!-- End of Home | Parallex background -->
  
  
  <!-- About -->
   <section id="about">
    <div class="container"> <!-- Start of container -->
      <h2>TAJ MAHAL</h2>
      <div class="row"> <!-- Start of row -->
        <!-- Column 1 -->
        <div class="col-md-6">
          <img src="./images/Taj.jpg" style="width: 100%;">
        </div>
        
        
         <!-- Column 2 -->
        <div class="col-md-6">
          <h3></h3>
          <p>The Taj Mahal is an ivory-white marble mausoleum on the south bank of the Yamuna River in the Indian city of Agra. 
            </p>
      </div>
      </div> <!-- End of row -->
    </div> <!-- End of container -->
  </section>

   <!-- Parallax background -->
   <div class="bgimg-2" style="background-image:url(./images/Taj.jpg)">
  </div>
  <!-- End of Parallax background -->
  
  
  <!-- Start of Places -->
  <section id="places">
   <div class="container"> <!-- Start of container -->
    <h2>Places To Visit</h2>
     <div class="row"> <!-- Start of row -->
        <!-- Column 1 -->
      <div class="col-sm-4">
        <img class="his" style="width: 80%; height: 45%">
        <h3><a href="#">History</a></h3>
        <br />
        <p class="history">It was commissioned in 1632 by the Mughal emperor Shah Jahan (reigned from 1628 to 1658) to house the tomb of his favourite wife, Mumtaz Mahal who died on 17 June that year, giving birth to their 14th child, Gauhara Begum. It also houses the tomb of Shah Jahan himself. The tomb is the centrepiece of a 17-hectare (42-acre) complex, which includes a mosque and a guest house, and is set in formal gardens bounded on three sides by a crenellated wall.The construction project employed some 20,000 artisans under the guidance of a board of architects led by the court architect to the emperor, Ustad Ahmad Lahauri. Shah Jahan's grief after the death of Mumtaz Mahal illustrates the love story held as the inspiration for the Taj Mahal. 
            </p>
      </div>
       
        <!-- Column 2 -->
      <div class="col-sm-4">
        <img class="info" style="width: 80%; height: 45%">
        <h3><a href="#">Visitor Imformation</a></h3>
        <br />
        <ul>
            <li>
            Taj Mahal is closed on Friday.
            </li>
                
            <li>
            Entry Fee = Rs 45 for Indians and Rs 1050 for foreigners.
            </li>

            <li>
            Visiting Time = An hour before sunrise and 45 minutes prior to sunset.
            </li>
        </ul>
      </div>
       
        <!-- Column 3 -->
      <div class="col-sm-4">
        <img class="nearby" style="width: 65%; height: 45%;">
        <h3><a href="#">Nearby Places</a></h3>
        <br />
        <ul>
        <li>
        Agra Fort
        </li>
        <li>
        Fatehpur Sikri
        </li>
        <li>
        Mankameshwar Temple
        </li>
        <li>
        Vrindavan
        </li>

        </ul>
      </div>
       
      </div> <!-- End of row -->
    </div>  <!-- End of container -->
  </section>
  <!-- End of Places -->
  
  
   <!-- Parallax background -->
   <div class="bgimg-3" style="background-image:url(./images/Taj.jpg)"> 
   </div>
   <!-- End of Parallax background -->
  

</body>
</html>