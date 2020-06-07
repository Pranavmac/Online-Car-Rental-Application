<div class="table">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <th width="13"><input type="checkbox" class="checkbox" /></th>
                                <th>Client Name</th>
                                <th>Client Phone</th>
                                <th>Car Booked</th>
                                <th>Mpesa ID</th>
                                <th>Status</th>
                                <th width="110" class="ac">Content Control</th>
                            </tr>
                            <?php
                                include '../includes/config.php';
                                $select = "SELECT client.client_id,client.fname,client.phone,cars.car_name,cars.hire_cost,client.status 
                                        FROM client JOIN cars ON client.car_id=cars.car_id";
                                $result = $conn->query($select);
                                while($row = $result->fetch_assoc()){
                            ?>
                            <tr>
                                <td><input type="checkbox" class="checkbox" /></td>
                                <td><h3><a href="#"><?php echo $row['fname'] ?></a></h3></td>
                                <td><h3><a href="#"><?php echo $row['phone'] ?></a></h3></td>
                                <td><?php echo $row['car_name'] ?></td>
                                <td><a href="#"><?php echo $row['hire_cost'] ?></a></td>
                                <td><a href="#"><?php echo $row['status'] ?></a></td>
                                <td><a href="javascript:sureToApprove(<?php echo $row['client_id'];?>)" class="ico del">Approve</a><a href="#" class="ico edit">Delete</a></td>
                            </tr>
                            <?php
                                }
                            ?>
                        </table>
