<?php
            require 'select.php';
            $s = "Yes";
            $query1 = "select name from books where Available=$s;";
            $result = mysqli_query($con,$query1);
            while($row = mysqli_fetch_assoc($result)){
                $temp = $row['name'];
                echo "<option value=$temp>".$temp."</option>";
            }
            ?>