<?php
session_start();
include('connexion.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Edit & Update data </title>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-8 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit & Update data
                            <a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>" class="btn btn-danger float-end">BACK</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <?php
                        if(isset($_GET['id']))
                        {
                            $idUser = $_GET['id'];

                            $sql = "SELECT * FROM users WHERE id=:id LIMIT 1";
                            $sql = $pdo->prepare($sql);
                            $data = [':id' => $idUser];
                            $sql->execute($data);

                            $result = $sql->fetch(PDO::FETCH_OBJ); //PDO::FETCH_ASSOC
                        }
                        ?>
                        <form action="updapte_user.php" method="POST">

                            <input type="hidden" name="student_id" value="<?=$result->id?>" />

                            <div class="mb-3">
                                <label>First Name</label>
                                <input type="text" name="fullname" value="<?= $result->first_name; ?>" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>Last Name</label>
                                <input type="text" name="fullname" value="<?= $result->last_name; ?>" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="text" name="email" value="<?= $result->email; ?>" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>Phone</label>
                                <input type="text" name="phone" value="<?= $result->phone_number; ?>" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>Username</label>
                                <input type="text" name="phone" value="<?= $result->nom_utilisateur; ?>" class="form-control" />
                            </div>
                           
                            <div class="mb-3">
                                <button type="submit" name="update_student_btn" class="btn btn-primary">Update </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>