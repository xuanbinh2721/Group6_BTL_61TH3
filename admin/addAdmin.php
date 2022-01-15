
<?php 
include('../admin/template/header.php'); 
require './template/logincheck.php';
?>

<div class="main-content">
    <div class="wrapper">
        <h1 class = "my-5 text-center">Add Admin</h1>

        <div>
            <main class = "d-flex justify-content-center">
            <form action="processAddAdmin.php" method="post">
            <table class="tbl-30 mb-3">
                <tr>
                    <td>Full Name: </td>
                    <td>
                        <input type="text" name="full_name" placeholder="">
                    </td>
                </tr>
                <tr>
                    <td>Username: </td>
                    <td>
                        <input type="text" name="username" placeholder="">
                    </td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td>
                        <input type="password" name="password" placeholder="">
                    </td>
                </tr>
            </table>
            <div class= "d-flex justify-content-center">
                <button type="submit" class="btn bg-warning" name="add">Add Admin</button>
            </div>
            <small>
            <?php
                require '../config/session.php';
            ?>
            </small>
        </form>

            </main>
        </div>
        
    </div>
</div>
       
               
<?php include('../admin/template/footer.php'); ?>


