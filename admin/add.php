<?php
/**
 * Created by PhpStorm.
 * User: bayim
 * Date: 2/9/2019
 * Time: 10:58 PM
 */
include "connect.php";
if (isset($_POST['add'])){
    $menu_ad = $_POST['menu_ad'];
    $menu_url = $_POST['menu_url'];
    $menu_sira = $_POST['menu_sira'];
    if (!empty($_POST['menu_ad']) and !empty($_POST['menu_url']) and !empty($_POST['menu_sira'])) {
        $sql = mysqli_query($con,"insert into project_menu (menu_ad,menu_url,menu_sira) values ('$menu_ad', '$menu_url','$menu_sira')");
        if ($sql){
            header("location:index.php?cvb=ok");
        }
    }
}
?>

<link rel="stylesheet" href="vendor/bootstrap-4.1/bootstrap.min.css">
<link rel="stylesheet" href="css/admin_style.css">
<form action="" class="form-control form_css" method="post">
    <input type="text" class="form-control" placeholder="menu ad" name="menu_ad">
    <input type="text" class="form-control" placeholder="menu url" name="menu_url">
    <input type="text" class="form-control" placeholder="menu sira" name="menu_sira">
    <input type="submit" class="form-control btn btn-success" value="Edit" name="add">
</form>
