<?php
/**
 * Created by PhpStorm.
 * User: bayim
 * Date: 2/8/2019
 * Time: 12:07 AM
 */
@$id = $_GET['id'];
$con = mysqli_connect('localhost','root','','project');
$query = mysqli_query($con, "select * from project_menu where  id = '$id'");
$row = mysqli_fetch_assoc($query);

if (isset($_POST['edit'])){
    $menu_ad = $_POST['menu_ad'];
    $menu_url = $_POST['menu_url'];
    $menu_sira = $_POST['menu_sira'];
    if (!empty($menu_ad) and !empty($menu_url) and !empty($menu_sira)) {
        mysqli_query($con, "update project_menu set menu_ad ='$menu_ad', menu_url='$menu_url', menu_sira = '$menu_sira' where id = '$id'");
        header('Location: index.php?cvb=ok');
    }
}

?>

<link rel="stylesheet" href="vendor/bootstrap-4.1/bootstrap.min.css">
<link rel="stylesheet" href="css/admin_style.css">
<form action="" class="form-control form_css" method="post">
    <input type="text" class="form-control" placeholder="menu ad" name="menu_ad" value="<?php echo $row['menu_ad'];?>">
    <input type="text" class="form-control" placeholder="menu url" name="menu_url" value="<?php echo $row['menu_url'];?>">
    <input type="text" class="form-control" placeholder="menu sira" name="menu_sira" value="<?php echo $row['menu_sira'];?>">
    <input type="text" class="form-control" placeholder="menu yaranma tarixi" name="menu_yaran_t" value="<?php echo $row['created'];?>">
    <input type="submit" class="form-control btn btn-success" value="Edit" name="edit">
</form>
