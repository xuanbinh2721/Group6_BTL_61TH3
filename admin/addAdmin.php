
<?php 
include('../admin/template/header.php'); 

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
                        <input type="text" name="full_name" required placeholder="" id="name">
                    </td>
                </tr>
                <tr>
                    <td>Username: </td>
                    <td>
                        <input type="text" name="username" required placeholder="" id="username">
                    </td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td>
                        <input type="password" name="password" required placeholder="" id="pass">
                    </td>
                </tr>
            </table>
            <div class= "d-flex justify-content-center">
                <button type="submit" class="btn bg-warning" name="add" id="btnAdd" disabled>Add Admin</button>
            </div>
            <small id="notify">
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


