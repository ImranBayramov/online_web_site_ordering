<?php
/**
 * Created by PhpStorm.
 * User: bayim
 * Date: 2/8/2019
 * Time: 12:08 AM
 */
$con = mysqli_connect('localhost','root','','project');
$id = $_GET['id'];
if($_GET['id']) {
    $id = $_GET['id'];
    if (!empty($id)) {
        $query = (mysqli_query($con, "delete from project_menu where id='$id'"));
        if ($query) {
            header('location:index.php?cvb= silindi');
        } else {
            echo "try it";
        }
    }
}