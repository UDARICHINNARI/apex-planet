<?php
$id = "";
$firstname = "";
$lastname = "";
$email = "";
$password = "";

$errorMessage = "";
$successMessage = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $POST["id"];
    $firstname = $POST["firstname"];
    $lastname = $POST["lastname"];
    $email = $POST["email"];
    $password = $POST["password"];

    do {
        if (empty($id) || empty($firstname) || empty($lastname) || empty($email) || empty($password)) {
            $errorMessage = "All the fields are required";
            break;
        }
        $id = "";
        $firstname = "";
        $lastname = "";
        $email = "";
        $password = "";

        $successMessage = " added correctly";
    } while (false);
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>crud operations</title>
</head>

<body>
    <div class="container my-5">

        <?php
        if (!empty($errorMessage)) {
            echo "
            <div class='alert alert warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
            </div>  
            ";
        }
        ?>
        <div class="row mb-3">
            <from method="post">
                <div class="row mb-3">
                    <label class="col-sm-3 col-from-label">id</label>
                    <div class="col-sm-6">
                        <input type="text" class="from-control" name="id" value="<?php echo $id; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-from-label">firstname</label>
                    <div class="col-sm-6">
                        <input type="text" class="from-control" name="firstname" value="<?php echo $firstname; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-from-label">lastname</label>
                    <div class="col-sm-6">
                        <input type="text" class="from-control" name="lastname" value="<?php echo $lastname; ?>">

                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-from-label">email</label>
                    <div class="col-sm-6">
                        <input type="text" class="from-control" name="email" value="<?php echo $email; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-from-label">password</label>
                    <div class="col-sm-6">
                        <input type="text" class="from-control" name="password" value="<?php echo $password; ?>">
                    </div>
                    <div>

                        <div class="row mb-3">
                            <div class="offset-sm-3 col-sm-3 d-grid">
                                <button type="submit" class="btn btn-primary">submit</button>
                            </div>
                            <div class="col-sm-3 d-grid">
                                <a class="bin bin-outline-primary" herf="/crudoperations/dispaly.php" role="button"></a>
                            </div>
                        </div>
                        </form>
                    </div>
</body>

</html>
 
