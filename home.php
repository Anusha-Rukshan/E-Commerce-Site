<!doctype html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Your Wish</title>
    <link href="styles/home.css" rel="stylesheet" type="text/css">
	  
	  <div align="center" class="header_wrapper">
			
			<a href="index.php"><img id="logo" src="banner/home2.png" /></a>
		  
		</div>
	  
    <style>
      * {
        box-sizing: border-box
      }

      /* Slideshow container */

      .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
      }

      /* Hide the images by default */

      .mySlides {
        display: none;
      }



      /* On hover, add a black background color with a little bit see-through */

      .prev:hover,
      .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
      }



      /* The dots/bullets/indicators */

      .dot {
        cursor: auto;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
      }

      .active,
      .dot:hover {
        background-color: #A4B9E3;
      }

      /* Fading animation */

      .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
      }

      @-webkit-keyframes fade {
        from {
          opacity: .4
        }
        to {
          opacity: 1
        }
      }

      @keyframes fade {
        from {
          opacity: .4
        }
        to {
          opacity: 1
        }
      }

    </style>

    <script type="application/javascript">
      var slideIndex = 0;

      function showSlides() {

        var i;
        var slides = document.getElementsByClassName( "mySlides" );
        var dots = document.getElementsByClassName( "dot" );
        for ( i = 0; i < slides.length; i++ ) {
          slides[ i ].style.display = "none";
        }
        slideIndex++;
        if ( slideIndex > slides.length ) {
          slideIndex = 1
        }
        for ( i = 0; i < dots.length; i++ ) {
          dots[ i ].className = dots[ i ].className.replace( " active", "" );
        }
        slides[ slideIndex - 1 ].style.display = "block";
        dots[ slideIndex - 1 ].className += " active";
        setTimeout( showSlides, 2000 ); // Change image every 2 seconds
      }

    </script>
  </head>

<body background="banner/41207-friends-with-sparklers-1200.1200w.tn.jpg" onload="showSlides()">
    <div id="wrapper">
      
				
            

          </div>

        
		  <br>
		  
		  
        <tr>
          <td colspan="5">
            <div class="slideshow-container">

              <!-- Full-width images with number and caption text -->
              <div class="mySlides fade">

                <img src="banner/banner-d.png" style="width:100%">

              </div>

              <div class="mySlides fade">

                <img src="banner/banner-c.png" style="width:100%">

              </div>

              <div class="mySlides fade">

                <img src="banner/banner-b.png" style="width:100%">

              </div>



              <!-- The dots/circles -->
              <div style="text-align:center">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
              </div>
            </div>
		</div>
          </td>
		
	<br> <br>
	
	
      

<div class="container">
  <img src="banner/shownow2.png" class="image">
  <div align="center" class="overlay">
    <a href="index.php"><div style="font-family: Berlin Sans FB Demi" class="text">Happy Shopping!</div>
  </div>
</div>
	
	<br>

<footer align="center">
	
	<ul class="message">
            <li>
				<a href="aboutus.php">
              <img src="logo/Facebook.png" width="20%" height="20%">
                  <p><font color="#FFFFFF">About Us</font></p>
              


              </a>
      </li>
            <li>
				
              <a href="faq.php">
              <img src="logo/Question.png" width="20%" height="20%">
              <p><font color="#FFFFFF">Have Questions?</font></p>

              </a>
            </li>
            <li>
              <a href="privacy.php">
              <img src="logo/Privacy.png" width="20%" height="20%">
                <p><font color="#FFFFFF">Privacy & Policy<font></font></p>
            </li>
            <li>
              <a href="contactus.php">
              <img src="logo/Contact Us.png" width="20%" height="20%">
				  <p><font color="#FFFFFF">Need to contact?</font></p>
            </a>
            </li>
  </ul>
	
  <p> © Kushantha & Jayana </p>
	
</footer>

</body>

</html>
