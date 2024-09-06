<?php
include 'connect.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8>
    <meta http-equiv =" X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Search data</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">;
</head>

<body>

    <div class="container my-5">
        <form method="post">
            <input type="text" placeholder="search data" name="search">
            <button class="btn btn-dark btn sm" btn-name="submit">search</button>
        </form>
        <div class="container my-5">
            <table class="table">
                <?php
                if (isset($_POST['submit'])) {
                    $search = $_POST['search'];

                    $sql = "select * `db`where id='$search'";
                    $result = mysqli_query($con, $sql);
                    if ($result) {
                        #$num=mysqli_num_rows($result);
                        if (mysqli_num_rows($result) > 0) {

                            echo '<thead>
                    <tr>
                    <th>sl no</th>
                    <th>first name</th>
                    <th>last name</th>
                    </tr>
                    </thead>
                     ';
                            $row = mysqli_fetch_assoc($result);
                            echo '<tbody>
                    <tr>
                    <td>' . $row['id'] . '</td>
                    <td>' . $row['firstname'] . '</td>
                    <td>' . $row['lastname'] . '</td>
            
                    </tr>
                    </tbody>';
                        } else {
                            echo '<h2 class =text-danger>Data Not Found</h2>';
                        }
                    }
                }

                ?>

            </table>


        </div>
    </div>
</body>

</html>
