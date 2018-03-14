
<!-- start: Content -->
<div id="content">
    <div class="col-md-12 padding-0">
        <div class="col-md-12 padding-0">
            <div class="col-md-12 padding-0">
                <div class="panel box-shadow-none content-header">
                    <div class="panel-body">
                        <div class="col-md-12">
                            <h3 class="animated fadeInLeft">Feedback</h3>
                            <p class="animated fadeInDown" style="line-height:.4;">

                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading"><h3>Feedback</h3></div>

                        <div class="panel-body">
                            <div class="col-md-12">
                                <table id="datatables-example"class="table table-responsive">
                                    <thead>
                                        <tr>
                                            <th>Activity</th>
                                            <th>Start Time</th>
                                            <th>End Time</th>
                                            <th>Trainer</th>
                                            <th>Day</th>
                                            <th>Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            if($class){
                                                foreach($class as $c){
                                                    $trainer = $this->model->fetch('trainer',array('id'=>$c->trainer_id))[0];
                                                    ?>
                                                    <tr>
                                                        <td><?= $c->class_name ?></td>
                                                        <td><?= date("h:iA",$c->start_time) ?></td>
                                                        <td><?= date("h:iA",$c->end_time) ?></td>
                                                        <td><?= $trainer->trainer_lname .', '.$trainer->trainer_fname ?></td>
                                                        <td><?= $c->day ?></td>
                                                        <td> 
                                                            <button type="button" class="btn btn-info btn-addfeedback" id="btn-addfeedback" data-id="<?= $c->id?>" data-trainerid="<?= $c->trainer_id ?>" data-target="#add_feedback" data-toggle="modal">Add Feedback</button>
                                                        </td>
                                                    </tr>

                                                    <?php
                                                }
                                        ?>
                                        
                                        <?php 
                                            }
                                            else{
                                                ?>
                                                <th colspan="6" class="text-sm-center text-md-center text-lg-center text-xl-center">You don't have any Workout Classes</th>
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



 <!-- FEEDBACK Modal -->
 <div id="add_feedback" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <!--  tinyMCE text editor  -->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Feedback</h4>
      </div>
         <div class="modal-body">
                    <p>Description</p>
                    <input type="hidden" id="class_id" value="">
                    <input type="hidden" id="trainer_id" value="">
                    
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <!-- <input type="text" id="msg-class" class="form-text" required> -->
                        <select class="form-text" id="msg-class" name="msg_class">
                            <option value="1">Poor</option>
                            <option value="2">Below Average</option>
                            <option value="3">Average</option>
                            <option value="4">Above Average</option>
                            <option value="5">Outstanding</option>
                        </select>
                        <span class="bar"></span>
                        <label>Feedback To The Class</label>
                    </div>
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <!-- <input type="text" id="msg-trainer" class="form-text" required> -->
                        <select class="form-text" id="msg-trainer" name="msg_class">
                            <option value="1">Poor</option>
                            <option value="2">Below Average</option>
                            <option value="3">Average</option>
                            <option value="4">Above Average</option>
                            <option value="5">Outstanding</option>
                        </select>
                        <span class="bar"></span>
                        <label>Feedback To The Trainer</label>
                    </div>
                    
        <div class="modal-footer">
            <button type="button" id="btn-add_feedback" class="btn btn-success"><i class="icon-send"></i> Confirm </button>
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
