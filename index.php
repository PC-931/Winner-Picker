<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WinnerPicker</title>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />  
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:400,900|Source+Sans+Pro:300,900&display=swap" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <header class="center">    <h1>Winner Picker</h1>      </header>

    <button class="btn center"> <a href="picker.php">Draw winner</a></button>
    
    <p class="intro">The winner picker selects a winner at random with some conditions. These conditions are as follows:</p>
    <ul>
        <li>anyone with 2 submissions with same details will have a double chance of winning</li>
        <li>3 entries will make them disqualified</li>
        <li>5 submissions they will have tripple chance of winning.</li>
    </ul>

    <form method="post" action="handler/_entries.php">
        <table>
            <caption>Fill your entry here:</caption>

            <tr>
                <td>Enter Name:</td>
                <td>  <input type="text" name="name" placeholder="Name"/>  </td>
            </tr>

            <tr>
                <td>Enter Email ID:</td>
                <td>  <input type="email" name="email" placeholder="Email ID"/>  </td>
            </tr>

            <tr>
                <td>Contact Number:</td>
                <td>  <input type="tel" name="phno" placeholder="Phone Number"/>  </td>
            </tr>

            <tr>
                <td colspan="2">  <input type="submit" value="Submit" />
                <input type="reset" value="Clear" />  </td>
            </tr>

        </table>
    </form>


    <!-- Footer -->
    <footer class="footer">
        <!-- replace with your own email address -->
        <a href="mailto:sanjeevhal931@gmail.com" class="footer__link">sanjeevhal931@gmail.com</a>
        
        <ul class="social-list">
            <li class="social-list__item">
                <a class="social-list__link" href="https://codepen.io">
                    <i class="fab fa-codepen"></i>
                    </a>
            </li>
            <li class="social-list__item">
                <a class="social-list__link" href="http://facebook.com">
                    <i class="fab fa-facebook"></i>
                </a>
            </li>
            
            <li class="social-list__item">
                    <a class="social-list__link" href="https://github.com">
                        <i class="fab fa-github"></i>
                    </a>
            </li>
        </ul>
        </footer>
        <?php
            if( isset($_SESSION['msg']) && $_SESSION['msg']== 1 ){
                echo "
                    <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Entries saved successfully',
                            showConfirmButton: false,
                            timer: 2000
                        })              
                    </script>
                ";
                $_SESSION['msg'] = 0;
            }else if( isset($_SESSION['msg']) && $_SESSION['msg']== -1 ){
                echo "
                    <script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Please fill all the details!!!',
                            showConfirmButton: false,
                            timer: 2000
                        })              
                    </script>
                ";
            }
        ?>
        <script src="js/index.js"></script>
        <script src="sweetalert2.all.min.js"></script>
</body>
</html>