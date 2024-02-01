<?php
session_start();
if (!isset($_SESSION["rentuser"]))
{
    header('Location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset ="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="userpage.css">
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
    </div>
    </header> 
    <div class="down">
        <div class="p1">
            <h1><center><b>Welcome to Our Sunset <br>Apartment!</b></center></h1>
        </div>
        <div class="header1">
            <h2>Select the catogary</h2>
        </div>
        
        <div class="container">
            <div class="image-container">
                <img id="myImg" src="https://www.wanasahotel.com/images/normalmain.jpg" alt="room" >  
            </div>
            <table class="tab1">
                <tr>
                    <td>
                        <p id="para1">4.8</p>
                    </td>
                </tr>
                <tr>
                    <td class="td-star">
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="bronze.php">View Bronze</a>
                    </td>
                </tr>
            </table>
        </div>
        <div class="header2">
            <p>Bronze</p>
        </div>
        <br><br><br><br>
        <div class="container">
            <div class="image-container">
                <img id="myImg1" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2a/8f/08/8d/the-alexander-pope.jpg?w=1200&h=-1&s=1" alt="room" >  
            </div>
            <table class="tab2">
                <tr>
                    <td>
                        <p id="para1">4.7</p>
                    </td>
                </tr>
                <tr>
                    <td class="td-star">
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="silver.php">View Silver</a>
                    </td>
                </tr>
            </table>
        </div>
        <div class="header3">
            <p>Silver</p>
        </div>
        <br><br><br><br>
        <div class="container">
            <div class="image-container">
                <img id="myImg2" src="https://i.pinimg.com/originals/ed/cf/be/edcfbedcb31471868e328307889cfd16.jpg" alt="room" >  
            </div>
            <table class="tab3">
                <tr>
                    <td>
                        <p id="para1">4.9</p>
                    </td>
                </tr>
                <tr>
                    <td class="td-star">
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="gold.php">View Gold</a>
                    </td>
                </tr>
            </table>
        </div>
        <div class="header4">
            <p>Gold</p>
        </div>
    <br><br><br><br><br><br>
    
    <div class="tab">
    <h2>Price Table</h2>
    
    <table class="table">
      <tr>
        <th>Floor id</th>
        <th>Floor Name</th>
        <th>Price</th>
      </tr>
      <tr>
        <td>1</td>
        <td>Bronze</td>
        <td>Rs.85,000,000</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Silver</td>
        <td>Rs.105,000,000</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Gold</td>
        <td>Rs.175,000,000</td>
      </tr>
      
    </table>
    
  </div>









   


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
    
       

         
</body>
</html>

