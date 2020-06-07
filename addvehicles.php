<div class="box-head">
                        <h2 class="left">Our Vehicles</h2>
                        <div class="right">
                            <label>search vehicles</label>
                            <input type="text" class="field small-field" />
                            <input type="submit" class="button" value="search" />
                        </div>
                    </div>                    
                    <div class="table">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <th width="13"><input type="checkbox" class="checkbox" /></th>
                                <th>Vehicle Make</th>
                                <th>Car Type</th>
                                <th>Hire Price</th>
                                <th width="110" class="ac">Content Control</th>
                            </tr>
                            <?php
                                include '../includes/config.php';
                                $select = "SELECT * FROM cars WHERE status = 'Available'";
                                $result = $conn->query($select);
                                while($row = $result->fetch_assoc()){
                            ?>
                            <tr>
                                <td><input type="checkbox" class="checkbox" /></td>
                                <td><h3><a href="#"><?php echo $row['car_type'] ?></a></h3></td>
                                <td><?php echo $row['car_name'] ?></td>
                                <td><a href="#"><?php echo $row['hire_cost'] ?></a></td>
                                <td><a href="javascript:sureToApprove(<?php echo $row['car_id'];?>)" class="ico del">Delete</a><a href="#" class="ico edit">Edit</a></td>
                            </tr>
                            <?php   }     
?>     </table>
