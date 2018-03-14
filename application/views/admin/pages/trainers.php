
<!-- start: Content -->
<div id="content">
    <div class="col-md-12 padding-0">
        <div class="col-md-12 padding-0">
            <div class="col-md-12 padding-0">
                <div class="panel box-shadow-none content-header">
                    <div class="panel-body">
                        <div class="col-md-12">
                            <h3 class="animated fadeInLeft">User Management</h3>
                            <p class="animated fadeInDown" style="line-height:.4;">
                              Gold's Gym Acropolis.
                            </p>
                        </div>
                      </div>
                  </div>
                </div>
                
                <div class="col-md-12 top-20 padding-0">
                    <div id="trainer-container-update" style="display:none;">
                        <form id="update_trainer_data">
                            <div class="modal-body">
                                <div class="col-md-12" style="margin-top:40px;">
                                    <div class="col-md-6">
                                        <input type="hidden" value="" name="trainer_id" id="up-trainer-id" >
                                        <div class="form-group form-animate-text">
                                            <input type="text" class="form-text"  id='up-trainer-fname' name="fname" required tabindex="1">
                                            <span class="bar"></span>
                                            <label><span class="fa fa-user"></span> Trainer First Name</label>
                                            <div id="update-trainer-fname-error"></div>
                                        </div>
                                        <div class="form-animate-radio">
                                            <label class="radio">
                                                <input type="radio" name="gender" id="up-trainer-gender" value="Male" required tabindex="5"/>
                                                <span class="outer">
                                                    <span class="inner"></span>
                                                </span> 
                                                Male
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-animate-text">
                                            <input type="text" class="form-text" id='up-trainer-lname' name="lname" required tabindex="2">
                                            <span class="bar"></span>
                                            <label><span class="fa fa-user"></span> Trainer Last Name</label>
                                            <div id="update-trainer-lname-error"></div>
                                        </div>
                                        <div class="form-animate-radio">
                                            <label class="radio">
                                                <input type="radio" name="gender" id="up-trainer-gender" value="Female" required tabindex="6" />
                                                <span class="outer">
                                                    <span class="inner"></span>
                                                </span> 
                                                Female
                                            </label>
                                        </div>
                                    </div>  

                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-info btn-sm" >
                                            <i class="icon-pencil"></i> Update
                                        </button>   
                                        <button type="button" class="btn btn-danger btn-sm" id="close_update_trainer" >
                                            <i class="icon-cross"></i> Close
                                        </button>   
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading"><h3>TRAINERS</h3>
                                <button class="btn btn-info" data-target="#add_trainer_modal" data-toggle="modal">Add Trainer</button>
                            </div>
                            
                            <div class="panel-body">
                                <div class="responsive-table">
                                    <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Name</th>
                                                <th>Gender</th>
                                                <th>Date Registered</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                if($trainers){
                                                    $cnt = 0;
                                                    foreach($trainers as $t):
                                                        ?>
                                                            <tr>
                                                                <th scope="row"><?= ++$cnt ?></th>
                                                                <td><?= $t->trainer_lname . ', '. $t->trainer_fname ?></td>
                                                                <td><?= $t->gender ?></td>
                                                                <td><?= $t->registered_at ?></td>
                                                                <td> <span class="label label-raised label-<?= $t->status == 1 ? 'success' : 'danger' ?>"><?= $t->status == 1 ? 'Active' : 'Not Active' ?></span></td>
                                                                <td> <button class="btn btn-<?= $t->status == 1 ? 'warning' : 'info'?> btn-sm status_check" data-id="<?= $t->id?>" data-status="<?= $t->status ?>"><i class="icon-pencil"></i> <?= $t->status == 1 ? 'Deactivate' : 'Activate' ?></button>
                                                                <button
                                                                    class="btn btn-info btn-sm update_trainer_data"
                                                                    data-id="<?= $t->id?>" ><i class="icon-pencil"></i> Update
                                                                </button>
                                                                    <button class="btn btn-danger btn-sm delete_check" data-id="<?= $t->id?>"><i class="icon-trash"></i> Remove</button>
                                                                </td>                                                                
                                                            </tr>
                                                        <?php
                                                    endforeach;
                                                }
                                                else{
                                                    ?>
                                                        <tr>
                                                            <th colspan="7" class="text-sm-center text-md-center text-lg-center text-xl-center">Table is empty!</th>
                                                        </tr>
                                                    <?php
                                                
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
          <!-- end: Content -->

<!-- CLASS Modal -->
<div id="add_trainer_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <!--  tinyMCE text editor  -->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Trainer</h4>
      </div>
      <form id="form-add-trainer">
        <div class="modal-body">
            <div class="col-md-12" style="margin-top:40px;">
                <div class="col-md-6">
                    <div class="form-group form-animate-text">
                        <input type="text" class="form-text"  id='add-trainer-fname' name="fname" required tabindex="1">
                        <span class="bar"></span>
                        <label><span class="fa fa-user"></span> Trainer First Name</label>
                        <div id="add-trainer-fname-error"></div>
                    </div>
                    <div class="form-animate-radio">
                        <label class="radio">
                            <input type="radio" name="gender" value="Male" required tabindex="5"/>
                            <span class="outer">
                                <span class="inner"></span>
                            </span> 
                            Male
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-animate-text">
                        <input type="text" class="form-text"  id='add-trainer-lname' name="lname" required tabindex="2">
                        <span class="bar"></span>
                        <label><span class="fa fa-user"></span> Trainer Last Name</label>
                        <div id="add-trainer-lname-error"></div>
                    </div>
                    <div class="form-animate-radio">
                        <label class="radio">
                            <input type="radio" name="gender" value="Female" required tabindex="6"/>
                            <span class="outer">
                                <span class="inner"></span>
                            </span> 
                            Female
                        </label>
                    </div>
                </div>  

            </div>
        
        <div class="modal-footer">
            <button type="submit" id="btn-add-trainer" class="btn btn-success" tabindex="7"><i class="icon-send"></i> Confirm </button>
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        </div>
        </form>
    </div>

  </div>
</div>


<!-- UPDATE TRAINER -->

<!-- CLASS Modal -->
<div id="update_trainer_modal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <!--  tinyMCE text editor  -->
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">UpdateTrainer</h4>
        </div>
        
    </div>
</div>
