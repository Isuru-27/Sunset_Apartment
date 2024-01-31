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
    <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
        <input type="text" placeholder="Search.." name="search2">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
    <!-- end search button-->
        
    </div>
    </header>
    <div class="down">
        <div class="p1">
            <h1><font color="gold"><center><b>Silver</b></center></font></h1>
            <p><center>Luxury</center></p>
        </div>
        <div>
          
            <table class="prk">
                <tr >
                  <td><img id="myImg" src="https://yespleaseblog.co/wp-content/uploads/2017/10/main-1-1050x698.jpg" alt="Snow" style="width:100%;max-width:300px"></td>
                  <td><img id="myImg" src="https://hips.hearstapps.com/hmg-prod/images/edc100121fernandez-008-1631204495.jpg?crop=1.00xw:0.824xh;0,0.130xh&resize=980:*" alt="Snow" style="width:100%;max-width:300px"></td>
                  <td><img id="myImg" src="https://hips.hearstapps.com/hmg-prod/images/grey-living-room-ideas-1674812692.jpg?crop=0.325xw:0.651xh;0.673xw,0.208xh&resize=640:*" alt="Snow" style="width:100%;max-width:300px"></td>
                  
              </tr><br>

              <tr>
                <td><br><br></td>
              </tr>

              <tr>
                <td><img id="myImg" src="https://www.floor-sanding.com/wp-content/uploads/2023/08/silver-furniture-in-home-decor-1.jpg" alt="Snow" style="width:100%;max-width:300px"></td>
                <td><img id="myImg" src="https://www.floor-sanding.com/wp-content/uploads/2023/08/silver-in-interior-design.jpg" alt="Snow" style="width:100%;max-width:300px"></td>
                <td><img id="myImg" src="https://i.pinimg.com/564x/28/e4/b8/28e4b8ba8e9f9bd471d6f1fafc46b2e2.jpg" alt="Snow" style="width:100%;max-width:300px"></td>
              </tr>
              </table>
              <br><br><br><br><br><br>
              
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
                      <td><img id="myImg" src="https://princetonmanagement.com/wp-content/uploads/2018/02/Harper-Square-Kitchen-1.jpg" alt="Snow" style="width:100%;max-width:300px"></td>
                      <td><img id="myImg" src="https://i.pinimg.com/736x/1f/de/9f/1fde9ff9edb0ec6472c8459ee83aa703.jpg" alt="Snow" style="width:100%;max-width:300px"></td>
                      <td><img id="myImg" src="https://static.arocdn.com/Sites/50/greatsouthernkillarney/uploads/images/headerimagessecondary43/secondarylargeimage26/Innisfallen_Swimming_Pool_2.jpg" alt="Snow" style="width:100%;max-width:300px"></td>
                      
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