<?php
  if(isset($_POST['send'])){                                
    $target_path = "../cars/";
    $target_path = $target_path . basename ($_FILES['image']['name']);
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)){
       $image = basename($_FILES['image']['name']);
       $car_name = $_POST['car_name'];
       $car_type = $_POST['car_type'];
       $hire_cost = $_POST['hire_cost'];
       $capacity = $_POST['capacity'];                               
       $qr = "INSERT INTO cars (image, car_name,car_type,hire_cost,capacity,status)                         VALUES ('$image','$car_name','$car_type','$hire_cost','$capacity','Available')";
       $res = $conn->query($qr);
       if($res === TRUE){
          echo "<script type = \"text/javascript\">
                alert(\"Vehicle Succesfully Added\");
                window.location = (\"add_vehicles.php\")
                </script>";
        }
         }
       else 'Failed';
      }
?>
