<?php 
if(!isset($_POST['eid'])){
  echo '<script language="javascript">';
  echo 'alert("You are Not Doing It By valid Way");';
  echo 'window.location.href="local_authority_login.php";';
  echo '</script>';
}?>
<?php
include "conn.php";
?>
<?php
include "header.php";

$eid = $_POST['eid'];
echo $eid;

?>
<div class="site-content">
        <div class="panel panel-default">
<div class="panel panel-default m-b-0">
          <div class="panel-heading">
            <h3 class="m-y-0">Enter Reason To Remove Embankment</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-12">
                <form action="embankremovesave.php" method="POST">
                    <input type="hidden" name="eid" value="<?php echo $eid; ?>">
                  <div class="form-group m-b-0">
                    <textarea data-plugin="autosize" class="form-control" placeholder="Enter Reason To Remove Embankment for the record purpose.." style="resize: none; height: 90px" name="reason" required></textarea>
                  </div>
                  <br>
                  <button type="button" class="btn btn-warning m-w-120" data-toggle="modal" data-target="#warningModal3">Remove</button>
                
              </div>
            </div>
          </div>
        </div>
        
      </div>
      <div class="col-lg-2 col-sm-4 col-xs-6 m-y-5">
                
                <div id="warningModal3" class="modal fade" tabindex="-1" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content bg-warning">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">
                            <i class="zmdi zmdi-close"></i>
                          </span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div>
                            <i class="zmdi zmdi-alert-circle-o zmdi-hc-5x"></i>
                          </div>
                          <h3>Warning</h3>
                          <p>You Are about To remove an Embankment.
                            <br>Once you Continue there is <b>NO</b> turning back </p>
                          <div class="m-y-30">
                            <button type="submit"  class="btn btn-default" >Continue</button>
                            <button type="button" data-dismiss="modal" class="btn btn-warning">Close</button>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer"></div>
                    </div>
                  </div>
                </div>
              </div>
              </form>
<?php include "footer.php";?>