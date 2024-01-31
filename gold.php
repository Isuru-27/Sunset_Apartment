<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset ="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="gold.css">
    <link href='https://fonts.googleapis.com/css?family=Cherry Swash' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Abril Fatface' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Abhaya Libre' rel='stylesheet'>

</head>
<body>
    <header class="head1">
    <div class="navbar">
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <ul>
                    <li><a href="#"><i class="fa-solid fa-user"></i>My Profile</a></li>
                    <li><a href="#"><i class="fa-solid fa-bed"></i>My Choices</a></li>
                    <li><a href="#"><i class="fas fa-bell"></i>Notifications</a></li>
                    <li><a href="#"><i class="fas fa-money-check-alt"></i>Payment and Subscription</a></li>
                    <li><a href="#"><i class="fa-solid fa-gear"></i>Setting</a></li>
                    <li><a href="#"><i class="fas fa-history"></i>History</a></li>
                    <li><a href="#"><i class="fa fa-question-circle" aria-hidden="true"></i>Help & Feedback</a></li>                        <li><a href="#"><i class="fa-solid fa-info"></i>About</a></li>
                </ul>
        </div>
        <div class="out">
            <form action="login.php">
            <button type="submit" class="logout-button">Logout</button>
            </form>
        </div>
        <div class="main">
            <div class="bar">
                <span class="spa1" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
            
                <div class="profile-container">
                    <img class="profile-image" src="https://static.vecteezy.com/system/resources/previews/018/765/757/original/user-profile-icon-in-flat-style-member-avatar-illustration-on-isolated-background-human-permission-sign-business-concept-vector.jpg" alt="Profile Picture" onclick="triggerUpload()">
                    <br>
                    <label class="upload-button">
                    Upload Image
                    <input type="file" accept="image/*" onchange="previewImage(this)">
                    </label>
                </div>
                
            </div>
        </div>

        <!--search button-->
    <form class="example" action="####" style="margin:auto;max-width:300px">
        <input type="text" placeholder="Search.." name="search2">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
    <!-- end search button-->
        
    </div>
    </header>
    <div class="down">
        <div class="p1">
            <h1><font color="gold"><center><b>Gold</b></center></font></h1>
            <p><center>Luxury</center></p>
        </div>
        <div>
          
            <table class="prk">
                <tr >
                  <td><img id="myImg" src="https://i.pinimg.com/originals/7f/59/ea/7f59ea0e6677be1788c98e58c8c7fc33.jpg" alt="Apartment" style="width:100%;max-width:300px"></td>
                  <td><img id="myImg" src="https://i.pinimg.com/originals/a9/14/e3/a914e336ecb850e59424e7fa90cd9be9.jpg" alt="Bed Room" style="width:100%;max-width:300px"></td>
                  <td><img id="myImg" src="https://www.ara.lk/wp-content/uploads/2021/06/3-1.jpg" alt="Bed Room" style="width:100%;max-width:300px"></td>
                  
              </tr>

              <tr>
                <td><br><br></td>
              </tr>

              <tr>
                <td><img id="myImg" src="https://www.oppeinhome.com/upload/images/ueditor/20220818/10-Best-Luxury-Kitchen-Designs-1.jpg" alt="Kitchen" style="width:100%;max-width:300px"></td>
                <td><img id="myImg" src="https://images.squarespace-cdn.com/content/v1/5ac2ddf285ede15e39a57666/1545126720765-N1RPYNMUE1RF2AZMFD9P/13.jpg?format=1500w" alt="Kitchen" style="width:100%;max-width:300px"></td>
                <td><img id="myImg" src="https://i.pinimg.com/originals/e5/5d/87/e55d87f5d0efa989082fad83e11afd4c.jpg" alt="Bathroom" style="width:100%;max-width:300px"></td>
              </tr>
              
              </table>
              <br><br>
              
              <!-- The Modal -->
              <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption1"></div>
              </div>
              
              
              <script>
              // Get the modal
              var modal = document.getElementById("myModal");
              
              // Get the image and insert it inside the modal - use its "alt" text as a caption
              var img = document.getElementById("myImg");
              var modalImg = document.getElementById("img01");
              var captionText = document.getElementById("caption");
              img.onclick = function(){
                modal.style.display = "block";
                modalImg.src = this.src;
                captionText.innerHTML = this.alt;
              }
              
              // Get the <span> element that closes the modal
              var span = document.getElementsByClassName("close")[0];
              
              // When the user clicks on <span> (x), close the modal
              span.onclick = function() { 
                modal.style.display = "none";
              }
              </script>

            <!--over image gallary-->


                <table class="prk">

                  
                        <h1 class="h1"><center>Facilities</center></h1>
                   

                    <tr >
                      <td><img id="myImg" src="https://savannahcollections.files.wordpress.com/2013/06/home_library_entrance.jpg" alt="Facility" style="width:100%;max-width:300px"></td>
                      <td><img id="myImg" src="https://images.fastcompany.net/image/upload/w_596,c_limit,q_auto:best,f_auto/wp-cms/uploads/2021/12/02-90703900-playgrounds.jpg" alt="Facility" style="width:100%;max-width:300px"></td>
                      <td><img id="myImg" src="https://assets.cdn.thewebconsole.com/S3WEB7855/gallery_images/593d15cb872ef.jpg?v=2&geometry(500)" alt="Facility" style="width:100%;max-width:300px"></td>
                      
                  </tr><br>

                  <tr>
                    <td><br><br></td>
                  </tr>

                  </table>
                  <center>
                <div class="regbut">
                  <form action="apareg.php">
                    <button>Register in Sunset Apartment</button>
                  </form>
                </div>
                  </center>



    <script>
    function triggerUpload() {
        document.querySelector('.upload-button input').click();
    }

    function previewImage(input) {
        const file = input.files[0];

        if (file) {
            const reader = new FileReader();

            reader.onload = function (e) {
                document.querySelector('.profile-image').src = e.target.result;
            };

            reader.readAsDataURL(file);
        }
    }
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
      }
      
      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
      }

      function openModal() {
        document.getElementById("myModal").style.display = "block";
      }
      
      function closeModal() {
        document.getElementById("myModal").style.display = "none";
      }
      
      var slideIndex = 1;
      showSlides(slideIndex);
      
      function plusSlides(n) {
        showSlides(slideIndex += n);
      }
      
      function currentSlide(n) {
        showSlides(slideIndex = n);
      }
      
      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        captionText.innerHTML = dots[slideIndex-1].alt;
      }

      // Get the modal
      var modal = document.getElementById("myModal");
            
            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("myImg");
            var modalImg = document.getElementById("img01");
            var captionText = document.getElementById("caption");
            img.onclick = function(){
              modal.style.display = "block";
              modalImg.src = this.src;
              captionText.innerHTML = this.alt;
            }
            
            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];
            
            // When the user clicks on <span> (x), close the modal
            span.onclick = function() { 
              modal.style.display = "none";
            }
</script>
    
       <!--down nav-->
	<div class="nav_down">
		<div>
		  Sunset Apartment  &copy; 2023|Aii rights reserved<br> Website Designed & Powered by group 05 Creative
		</div>
	</div>

         
</body>
</html>