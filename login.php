<?php
    session_start();
    require_once("connection.php");
    
    
     $role = "";
    if (isset($_POST["logbut"])) 
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
    
       $query = "SELECT * FROM user WHERE username = '$username' AND 
       password = '$password'";
    
       $result = mysqli_query($conn, $query);
    
       if (mysqli_num_rows($result) > 0)
       {
            while ($row = mysqli_fetch_assoc($result))
            {
               if ($row["role"] == "admin")
               {
                    $_SESSION["adminuser"] = $row["username"];
                    header('Location:adhome.php');
               }
               elseif( $row['role'] == 'user')
               {
                    $_SESSION["rentuser"] = $row["username"];
                    header("Location:userpage.php");
               }
               else
               {
                    $_SESSION["staffuser"] = $row["username"];
                    header("Location:stahome.php");
               }
            }
       }
       else
       {
        $message = "Invalid username or password";
        header("Location:login.php");
       }
       
    }
    
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Login Page</title>
</head>
<body>
   
    <div class="login-container">
        <h2><center>Login</center></h2>
        <form method="POST" class="login-form">
            <label for="username">User name:</label>
            <input type="text" name="username" placeholder="Username" required>
            <label for="password">Password:</label>
            <input type="password" placeholder="Password" name="password" id="password" />
            <p><?php echo "" ?></p>
            <button type="submit" name="logbut" class="login-button">Login</button>
        </form>
        <center>
        <div class="alternative-login">
            
            <span>Or Login with:</span>
            <br>
            <br>
            <a href="https://myaccount.google.com/">
                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxAQEBAPEA0OEBAOEg8XERIPDw8ODxAQFREWFhURFxUYHSghGBolIBUVIjEhMSkrLi4uFx8zODMtNygtLisBCgoKDg0OGxAQGy0lICUtLS0tLS0tLS0tLSstLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAOEA4QMBEQACEQEDEQH/xAAbAAEAAgMBAQAAAAAAAAAAAAAAAQYEBQcDAv/EAEAQAAIBAgIGBAsFCAMBAAAAAAABAgMEETEFBhIhQVFSYXGRBxMiMnKBk6GxwdIWI1NikhQ0QkOys9HwM4LCJP/EABsBAQACAwEBAAAAAAAAAAAAAAAEBQECAwYH/8QAMREBAAIBAgUCAwgCAwEAAAAAAAECAwQRBRIhMVFBYRQVgRMiMjNCcZGxofAGNFIj/9oADAMBAAIRAxEAPwDuIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIxA+KtaMVjKSilm5NJd7MTMQzFZt0iGoutbLGnudzCTXCnjU/pRznPSPVMpw/UX6xSWvqa/2SyVeXo00vi0c51VEiODamfH8vheEKz/DuV/0h9Rj4vG2+S6n2/lk0debGWdScPSpy+WJtGqxy5W4Tqq/p3baz0xbVv+K4pTfJTW13ZnWMlZ7Sh5NPlx/irLOxN3ExAkAAAAAAAAAAAAAAAAAAAAEYgYGltM0LWO1WqKOOUVvnLsit7NLZK1jq74NNkzTtSFE0tr/WnjG3gqMd/lTwnUfXhlH3kLJq5npVf6fglI65Z39oVS8vKtZ7VWrOo/zycsOxPIi2vae64x4MeP8ABWIeBq7AAAAETLExEtxozWa7t8NivKUehVxqR9+9epname1UHPw3Bm/TtPsu2g9eaFbCFdeIm8m3jSb9Lh6+8m49TW3foodVwfLi+9T70f5W2M01inink1vWBJ3VExt0fQAAAAAAAAAAAAAAAAAAhsCma0a6RouVG2cZ1VulPOFN8l0n7iLm1MV6VXOh4VbL9/L0jx5c7ubidSTnUnKc5Zyk8Wyutabd3p8eKmOvLWNoeRh0AAAAAAAAAJ6t/q5rRWtGo4upQ402/NXOD4dmRIxZ5p+ys1vDaaj70dLf73dR0VpOlc01VpTUovNZSi+jJcGWVLxeN4eTzYL4bct4Zps5AAAAAAAAAAAAAAAENgUDXbWt4ytbeWGGKq1Ivf1wi/iyDnz/AKYeg4Zw3fbLlj9oUIgvSRGwAAAAAAAAAAAMixs6lepGlSg5Tm9yXDm2+CXM2rWbTtDjnzUw0m9uzrOrGgIWVPZXlVJ4OpPg3yS4JFrixRjjZ43W6y2pvvPb0btHVDSAAAAAAAAAAAAACGBU9e9YP2en4ilLCtWW9rOnTycu15L1sjajNyRtHdbcL0X29+e34Y/zLmBWPW7RHRAZAAH1CLbUUm28kli2+pGYjfs1teKxvM7LHo3Um7rYSlGNCL41PO/SvngSK6a891Vn4zhp0r979m+t/B1T/mXVST/JCMF78TvGkj1lX247kn8NYh7y8Hdthur3C7XTf/kz8JXy5xxvN6xDW3ng7qLF0rmMuUakHF/qWPwOdtH4lKx8cifx1/hV9KaGuLZ/fUZRXCS8qm+yS3Ea+K9O63wa3Dnj7k9f8tec0pkWNnUr1I0qUXKc3uXxb5I2rWbW2hxz5q4qTa07RDrGrOr1Oyp4LCVWa+8qYZ/lXKJaYcUY429Xjtbrb6m/Xt6Q3iOyEkAAAAAAAAAAAAAADwvrhUqc6kscIRbaW9vBZLrNMl60rNrTtDfHSb2iseriWkr2dxVnWqedUk3h0VkorqSwRUWvzzzeXutNhrhxxSvaGMau4AA2mgdB1bypsU1hGPn1JebBfN9R1xYpvPRD1mtx6au9p+nq6joLV6haRXi4Jzw8qpLfOXr4LqLPHirTs8jqtbl1E72np4bdHRFSAAAedWkpJxlFSjJYNNYprk0JjdmLTE7woesuozx8ZZpb35VJvBLF5xbyXV3ciFl02/Wi+0PGOWOXN9JWPVjV6FlTwWEqs0vGTwz/ACrlFHfFijHHurdbrbam2/pHaP8AfVvUdkIAAAAAAAAAAAAAAAhgaLWW5wUaSeflS7Fkv95Hm/8AkGq5a1xR69ZT9Bj3mbSpOlNDRqYzhhGfHhGXbyfWU2k19sfS/WP6egw6madLdlZq0pQbjJOLWaZfY71vXmrPRZ1tFo3h8G7ZnaF0ZO6rRowzlvlLhCCzkzpixze2yNq9TXT45vP0di0Vo6nbUo0aUcIxXrk+Mm+LZbUpFY2h4nNmvmvN7sxGzkkAAAAAGAEYASAAAAAAAAAAAAAAAAhmJFN0tW2603wTwXYtx4Dimf7bU2nx0/heaWnLjhiFcksS/sIVlhJYNZSWa/yiVp9VfBPR0xZrY56KrfWM6MsJLc8pLzX/ALyPR6fU0zV3hbYs1ckdO7pHg/0SqNuq0l95cYSx4qn/AAR+frLzTY+Wu/l5Ti2pnLm5Y7R0+q1YEhVJDIAAAAAAAAAAAIMCTIAAAAAAAAAAHxWlhFvkm+5HPLblpM+zNY3mIURvHe82fNL25rTPmXo6xtAasgEwtI1nGlKKlGbSafLmS9FFrZ61r5a3yzjrNole4QUUklgkkklkkuB9FiHnZmZneX0ZYAAACjaza1XNvc1KNNUdiKhhtQk5b4JvepLmW+i0OPNj5rbq/Uam+O/LDWfbm85W/s5/US/lOHzLh8bf2Pt1ecrf2c/qHynF5k+Nv7H26vOVv7Of1D5Ti8yfG39j7dXnK39nP6h8pxeZPjb+x9urzlb+zn9Q+U4vMnxt/Y+3V5yt/Zz+ofKcXmT42/sfbm85W/s5/UPlOHzJ8bf2Ptzecrf2c/qHynF5ln42/s6Dou68dRpVd33lOEnhwbim13lBlpyXmvhZ0tzViWWaNwAAAAAAAABjaSeFGo+UJfAi62dsF59pdMX44/dSj5w9BAGQDP0DHGvDq2n7i24NXfVwi638qVvPdqQAAAAHKtef36t2Uv7cT0nC/wAj6yp9Z+bLQliigAAAAAAAHV9S6m1Y0OpSX6ZtfI8rro21Fl1pZ3xw3hESAAAAAAAAABi6TWNGqucJfAia6N9Pf9pdMX44/dSz5y9BAGQDYaAlhXj1qXwLbgs7auEXWx/8p+i3Hu1IAAAADlWvP79W7KX9uJ6Thf5H1lT6z82WhLJFAAAAAAADA6nqIv8A4aXbV/uyPLcQ/wCxZc6T8qFgIaSAAAAAAAAAPO4jjGS5prvRyz15sdo9m1Z2mJUU+a2jaZh6KOwasgHraV1TqQm3goyTbe5JcfcS9DkmmoraPLhqIicc7rwmfRoUKQAAAByvXiL/AG6rueVLg/w4nouGXrGHaZVGriZyS0Ww+i+5llz18ovLJsPovuY56+Tlk2H0X3Mc9fJyz4Nh9F9zMc9fJyyho2id+zGyDIADDDrWp9PZsrdc4N/qk38zymtnfPb915po2xw3JFdwAAAAAAAABDMSKXpOjsVqkfzNrse/5nz3iOGcOotX6/yvtNfmxxLGILu8ri4jTjtTkkve3yXM74cF81uWkI2o1OPBTmvKt6Q0lKru82HR59p6fR6CmCN562eP1/E8monavSro+pelFcW0U395RShPfvaXmy9a+DL7FbeqTpM3PjjzCwHVLAAAD5cVyDGxsrkjO8m0eDZXJdw3k2jwjYXJdw3k2jw+Z4JNtJJJtvdkYjeejE7RG+zjWkrrx1arV/EnOS6k3uXdgewwU5McV9lFktvaZYx2aADDlmzW07RuRG8u1aOt/FUqVJZU4Qj+mKR47JbmvNvMvQUjasQyTRsAAAAAAAAAIYFf1mtvNqpfll8V8zy3/INNvNcsftKx0GTvSVV0hpCFJdKbyivi+SKbSaG+onftHltruJY9NHm3hW7q5nUltTeL4LglyR6jBpqYa7Vh4zU6vJqLTa8vEkIzaavaXlaVlUW+D3VI9KGOfaszfHfllI0+ecV94+rrdrcwqwjUpyUoTScWuKJ0Tuv62i0bw9jLYAAAAAABVdetMKlRdCL+9rrB4PfGn/E/Xl38ix4dpvtMnPPaP7Q9Xm5a8sd5c2PSqkAAbbVWy8dd0Y4YxjLbl6MN/wAcF6yFr8v2eCffo76anPkh1xHll2kAAAAAAAAAAAY+kLfxtKdPHDaTSfRfB+pnLPhrmpNLx0lmLWr1rO0uM3lGdOpOFTHbhJqWO/enmQYx/Z/diHms02555p67vAy5AADeataxVLOWy050ZPyocU+lHk+rj7zpjyzWUvTaq2KdvR0zRukqVxBTpTUk8+Eovk1wZMraLdl1jy1vG9ZZqNnQAAADA0OsOslK1TWKqVmvJpp5dcnwRI0unnPbZGzaiuOHMb27nWqSq1JbU5ve/gkuCR6nFiriry1VF7Te3NZ4HVoBkDDoPg70Zs053Mlvq+TD0Ive/W/6Ued4pni14xx2j+1rose1eaVxRVpyQAAAAAAAAAABDApmvmgXUj+1Uo4zgvvUs5QWUu1fDsI+bHv1hXa7T80c1e/q58RVQBgAAe9pd1KMlOlUlTkuMXh6nzXUZiZjs3pktSd6ytejtfqscFXpKoulB7Eu7J+471z+U/HxC36oby314s5ec6tN8pU2/wCnE6RmolV1+KXtLXOxX8+T7KVXH3oz9tRtOtw+WDc6/W6x8XSrVHwxUYR97x9xrOor6OVuIY47byruk9dLqsnGDVCL/Dxc8PSfywONs9p7IeTXZL9I6K5JtttttvNve2xjzXx2i1JQ5mZndOJ6rQcVpmjkv0s3iwXENwDYaD0XK6rRpRxSznLowWb7eHrI2r1EYcc29fR1w4pyX2j6uvW1GMIxhGKjGCSilkkluR5S1ptMzK7rWKxtD1MNgAAAAAAAAAAAAPmS3Ac41x1ZdFyuKMfuZPGcV/KfP0fgRMuLbrCn1elmv36dv6VMjq4MgAAAAAAAAACJ2neBOJf8P4vy7Uzfy3rZ7W1CdWcadOLlObwilxZ6O2asU59+nl1pWbTtDqurOg42lLZ3SqzwdSfN8IrqR5nV6mc99/T0XWDDGOu3q3JFdwAAAAAAAAAAAAAAD5nFNNNYp5p5NBiYUPWXU1rGtaRxWcqPFdcP8d3IjZMPrCr1Oi72x/wpLTTaaaazT3NPkRlZMTCAwAAAAAAAAAMrR2j6txNU6MHKXHoxXOT4I2rWbT0dMeK2Sdqw6dq3q5TtI4+fWkvLm1l+WPJfEsKWtFOSZ6LzT6eMUe7eIJKQAAAAAAAAAAAAAAAACMANNpvVq3ut8o7FThUhgpevpI53xxZGzaWmXv38qLpXU+6oYuMfHwX8VNPaw64Z92JGthtHZV5dFkp1jqr8k02mmms09zXqOUokxMIDAAAADB1e1ra1KstmlTnUlyhFy7+RtFZlvTHa/SsbrZofUWpLCVzPxcehDCU32vJe871wesrDDoJnrdeNHaOpW8FTpQUI9WbfNviyRWsV7LKmOtI2hlmzoAAAAAAAAAAAAAAAAAAAAAjADEvdF0K3/LRpz65RTkux5o1msS52xUt3hpLnUa0lvj42n6M8V3SxOc4KyjW0GKe3RgVPB5D+G7mvSpxl8GjX4ePSXKeHV8vNeDxcbx+xX1GPh/dr8tj/ANMil4PqK864qy7FCP8Akz8PHlvHDqestnaan2VP+T4x86snP3Ze43jFWHeujwx6N1Qt4wWzCEYRWSilFL1I6RGyRWsV6RD0wMtkgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAB//Z" alt="Gmail Logo">
            </a>
            <a href="https://www.facebook.com/">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6TxvG1TYTT389Nwp49-SN5befYdakdI01-Q&usqp=CAU" alt="Facebook Logo">
            </a>
            <a href="https://www.instagram.com/accounts/login/">
                <img src="https://cdn.pixabay.com/photo/2016/08/09/17/52/instagram-1581266_960_720.jpg" alt="Instragram Logo">
            </a>
            
        </div>
        <br>
        <a href="create.php">Create a new account</a>
        </center>
    </div>
<script>
     const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });

        // prevent form submit
        const form = document.querySelector("form");
        form.addEventListener('submit', function (e) {
            e.preventDefault();
        });
</script>
</body>
</html>