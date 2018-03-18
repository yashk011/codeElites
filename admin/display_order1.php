<?php
    session_start();
    include "header.php";
    include "menu.php";
    
    $link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "scart2");
?>

        <div class="grid_10">
            <div class="box round first">
                <h2>
                    Product Sales</h2>
                <div class="block">
                    

                     <?php
                  //  $id=$_GET["id"];
                    $res=mysqli_query($link,"select * from sale ");
                echo "<table border='1'>";
                echo "<tr>";
                echo "<td >"; echo "Product Name and Description"; echo "</td>";
                echo "<td >"; echo "Product Price"; echo "</td>";
                echo "<td >"; echo "Product Qty"; echo "</td>";
                echo "<td >"; echo "Product Total"; echo "</td>";
                echo "<td >"; echo "Id no."; echo "</td>";
                echo "<td >"; echo "Contact Info"; echo "</td>";
                echo "</tr>";
                while($row=mysqli_fetch_array($res))
                {
                    echo "<tr>";
                    /*echo "<td valign='top'>"; ?> <img src="<?php echo $row["product_image"]; ?>" height="100" width="100"> <?php echo "</td>";*/
                    echo "<td valign='top'>"; echo $row["descr"]; echo "</td>";
                    echo "<td valign='top'>"; echo $row["price"]; echo "</td>";
                    echo "<td valign='top'>"; echo $row["quantity"]; echo "</td>";
                    echo "<td valign='top'>"; echo $row["total"]; echo "</td>";
                    echo "<td valign='top'>"; echo $row["iddd"]; echo "</td>";
                    echo "<td valign='top'>"; echo $row["cno"]; echo "</td>";
                    echo "</tr>";

                }
                echo "</table>";
                 ?>
                    this is testing
                </div>
            </div>
        </div>  
  <?php          
    include "footer.php";
?>
      