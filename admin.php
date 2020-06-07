<div id="container">
    <div class="shell">
        
        <div class="small-nav">
            <a href="index.php">Dashboard</a>
            <span>&gt;</span>
            Client Messages
        </div>        
        <br />        
        <div id="main">
            <div class="cl">&nbsp;</div>
            <div id="content">                
                <div class="box">
                        <div class="box-head">
                        <h2 class="left">Client Messages</h2>
                        <div class="right">
                            <label>search messages</label>
                            <input type="text" class="field small-field" />
                            <input type="submit" class="button" value="search" />
                        </div>
                    </div>                    
                    <div class="table">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <th width="13"><input type="checkbox" class="checkbox" /></th>
                                <th>Message Content</th>
                                <th>Time Send</th>
                                <th>Status</th>
                            <th width="110" class="ac">Content Control</th>
                            </tr>
                            <?php
                                include '../includes/config.php';
                                $select = "SELECT * FROM message";
                                $result = $conn->query($select);
                                while($row = $result->fetch_assoc()){
                            ?>
                            <tr>
                               <td><input type="checkbox" class="checkbox" /></td>
                               <td><h3><a href="#"><?php echo $row['message'] ?></a></h3></td>
                               <td><?php echo $row['time'] ?></td>
                               <td><a href="#"><?php echo $row['status'] ?></a></td>
                               <td><a href="javascript:sureToApprove(<?php echo $row['msg_id'];?>)" class="ico del">Delete</a><a href="#" class="ico edit">Edit</a></td>
                            </tr>
                            <?php
                                }
                            ?>
                        </table>                 
                    </div>
                  <h2><input type="submit" onclick="window.print()" value="Print Here" /></h2>
  </div>
            <div id="sidebar">
<div class="box">
                    <div class="box-head">
                        <h2>Management</h2>
                    </div>
                    <div class="box-content">
                        <a href="#" class="add-button"><span>Send Messages</span></a>
                        <div class="cl">&nbsp;</div>
                        
                        <p class="select-all"><input type="checkbox" class="checkbox" /><label>select all</label></p>
                        <p><a href="#">Delete Selected</a></p>
     </div>
 </div>
  </div>
<div class="cl">&nbsp;</div>            
        </div>
 </div>
</div>
   
