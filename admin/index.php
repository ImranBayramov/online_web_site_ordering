<?php
/**
 * Created by PhpStorm.
 * User: bayim
 * Date: 2/7/2019
 * Time: 2:21 AM
 */
include "header.php";
include 'connect.php';

$sql = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = 'project_menu'";
$sql_id = mysqli_query($con,"select id from project_menu");
$count = $sql_id->num_rows;
$query = mysqli_query($con,$sql);
?>

    <div class="main-content">
        <div class="test">
            <table class="table table-hover table-bordered ">
                <thead>
                <tr>
                    <?php
                    while($row = mysqli_fetch_assoc($query)) {
                        foreach ($row as $key => $value) {
                            echo "<th>";
                            print_r($row[$key]);
                            echo "</th>";
                        }
                    }
                    ?>
                    <th>edit</th>
                    <th>delete</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <?php
                    $sql = "select * from project_menu";
                    $result = $con->query($sql);
                    if ($result-> num_rows > 0){
                        while ($n = $result -> fetch_assoc()){
                            echo "<td>";
                            echo $n['id'];
                            echo "</td>";
                            echo "<td>";
                            echo $n['menu_ad'];
                            echo "</td>";
                            echo "<td>";
                            echo $n['menu_url'];
                            echo "</td>";
                            echo "<td>";
                            echo $n['menu_sira'];
                            echo "</td>";
                            echo "<td>";
                            echo $n['created'];
                            echo "</td>";
                            echo "<td>";
                            echo "<button class='btn btn-info'><a href='edit.php?id=".$n['id']."' style='color:white;'>edit</a></button>";
                            echo "</td>";
                            echo "<td>";
                            echo "<button class='btn btn-danger'><a href='delet.php?id=".$n['id']."' style='color:white;'>delete</a></button>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                </tr>
                </tbody>
            </table>
            <button class='btn btn-success' style="margin: 15px 0; margin-left:85%;"><a href='add.php' style='color:white;'>Add menu</a></button>
        </div>
        <p id="demo" class="text-center" style="color:green;font-size: 18px;">
            <?php
            @$aa = $_GET['cvb'] =='ok';
            if($aa){
                echo 'edildi';
            }
            ?>
        </p>
    </div>


<?php

include   'footer.php';
?>