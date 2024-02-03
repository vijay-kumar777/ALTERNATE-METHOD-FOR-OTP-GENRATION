<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="studentstyLe.css">

    <title>User Create</title>
    
</head>
<body>
<div class="container">

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <!-- <strong>Heyy!!</strong>Enter your Details -->
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <div class="design">
        <div class="pill-1 rotate-45"></div>
        <div class="pill-2 rotate-45"></div>
        <div class="pill-3 rotate-45"></div>
        <div class="pill-4 rotate-45"></div>
    </div>

    <?php include('message.php'); ?>
    
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                        <h4>REGISTER</h4> 
                           
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control"required>
                            </div>
                            <div class="mb-3">
                                <label>Password</label>
                                <input type="password" name="pw" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Date of Birth</label>
                                <input type="date" name="dob" id="dob" class="form-control" required>
                            </div><div class="mb-3">
                                <label>Phone Number</label>
                                <input type="tel" name="phno"  max="9999999999" min="1000000000" name="ContactNumber" required="required" type="number"  pattern="[0-9]{10}" title="Please enter a valid 10-digit phone number"  class="form-control">
                            </div>
                            <div class="mb-4">
                                <button type="submit" name="save_user" id="check"class="btn btn-primary">Save Student</button>
                                <h4>
                            <a href="index.php" class="btn btn-danger float-end">DETAILS</a>
                        </h4>
                            </div>
                            

                        </form>
                    </div>
                </div>
            </div>
    
    </div>

</div>
<script> 
 var today = new Date().toISOString().split('T')[0];
document.getElementById("dob").setAttribute("max",today); 
 </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
