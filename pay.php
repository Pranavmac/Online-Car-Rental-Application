<form action="#" method="post">
<input type="text" id="search" name="search" placeholder="What are you looking for?"  autocomplete="off"/>
<input type="submit" id="submit_search" name="submit_search"/></form>
<section class="listings">
        <div class="wrapper">
            <ul class="properties_list">
                <h3 style="text-decoration: underline">Make Payments Here</h3>
                <h5>Paybill Number: 00000</h5>
                <h6>Business Number: ID Number Registered with.</h6>
                <form method="post">
                    <table>
                        <tr><td>MPESA Transaction ID:</td>
                            <td><input type="text" name="mpesa" required></td></tr>
                        <tr><td>National ID Number:</td>
                            <td><input type="text" name="id_no" required></td></tr>
                        <tr><td colspan="2" style="text-align:right"> <input type="submit" name="pay" value="Submit Details"></td></tr>
                    </table>
                </form>
                <?php
                       if(isset($_POST['pay'])){
                           include 'includes/config.php';
                           $mpesa = $_POST['mpesa'];
                           $id_no = $_POST['id_no'];
                           $qry = "UPDATE client SET mpesa = '$mpesa' WHERE id_no = '$id_no'";
                           $result = $conn->query($qry);
                           if($result == TRUE){
                             echo "<script type = \"text/javascript\">
                                alert(\"Payment Successfully Done. Wait for Admin Approval\");
                                window.location = (\"wait.php\")
                                </script>";
                            } else{
                                echo "<script type = \"text/javascript\">
                                            alert(\"Registration Failed. Try Again\");
                                            window.location = (\"pay.php\")
                                            </script>";
                            }  }                     
                      ?>  </ul>
