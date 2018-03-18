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
                    $res = mysqli_query($link , "select * from product");
                    echo "<table border='1'>";
                    echo "<tr>";

                        echo "<th>" ; echo "product image " ; echo "</th>";  
                        echo "<th>" ; echo "product name " ; echo "</th>";  
                        echo "<th>" ; echo "product price " ; echo "</trh>";  
                        echo "<th>" ; echo "product quantity " ; echo "</th>";  
                        echo "<th>" ; echo "product category " ; echo "</th>";  
                        echo "<th>" ; echo "product delete " ; echo "</th>";  

                    echo "</tr>";

                    while($row = mysqli_fetch_array($res))
                    {

                        echo "<tr>";

                            echo "<td>" ; ?> <img src= "<?php echo $row['product_image'] ;?>" height="100" width="50"> <?php echo "</td>";
                            echo "<td>" ; echo $row["product_name"]; echo "</td>"; 
                            echo "<td>" ; echo $row["product_price"];echo "</td>"; 
                            echo "<td>" ; echo $row["product_qty"];echo "</td>"; 
                            echo "<td>" ; echo $row["product_type"];echo "</td>"; 
                            echo "<td>" ; ?> <a href="delete.php?id=<?php echo $row["id"] ;?>"> delete </a>  <?php echo "</td>"; 

                        echo "</tr>";

                    }

                    echo "</table>";

                    ?>
                </div>
            </div>
        </div>  
  <?php          
    include "footer.php";
?>
      