<?php session_start();
    include 'handler/connect.php';

    $sql = 'SELECT * FROM entries';
    
    $result = $conn->query($sql);

    $draw_list = array();

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

                                                        //if submission is 2 -> gets doubled
            if( $row['submissions'] == 2){
                for( $i=0; $i<4; $i++){
                   array_push($draw_list, $row['name']);
                }
            }else if( $row['submissions'] == 3){        //if submission is 3 -> disqualified
                //don't add they are disqualified
                continue;
            }else if( $row['submissions'] == 5){        //if submission is 5 -> gets triple
                for( $i=0; $i<15; $i++){
                    array_push($draw_list, $row['name']);
                }
            }else{
                array_push($draw_list, $row['name']);   //if submission is other than 2,3 and 5 -> count single
            }
        }
    } else {
        echo "0 results";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winner</title>
    <link rel="stylesheet" href="winner.css">
    <link rel="stylesheet" href="css/base.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <header>  <button class='btn'><a href="logout.php">Close</a></button>  </header>

    <?php
        $count = sizeof($draw_list);
        $winner = rand(0, $count);

    ?>
        
    <script>
        Swal.fire({
            title: 'Congratulations\n' + '<?php echo $draw_list[$winner];?>' + '\nYou won!!!!',
            width: 600,
            padding: '3em',
            color: '#000',
            background: '#fff url(assests/images/congrats.gif) center',
            backdrop: `
                rgba(0,0,123,0.4)
                url("https://sweetalert2.github.io/images/nyan-cat.gif")
                left top
                no-repeat
            `
        })
    </script>
    <script src="sweetalert2.all.min.js"></script>
</body>
</html>