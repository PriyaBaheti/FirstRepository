<?php
include("DBConnection.php");

$id=$_POST['fid'];

$sql="delete from mytable where id=$id;";

if($conn->query($sql)===TRUE)
{?>
    
    <div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p><?php echo "deleted successfully with id ".$id ?> </p>
        </div>
      </div>
    </div>
  </div>
  <?php
}
?> 