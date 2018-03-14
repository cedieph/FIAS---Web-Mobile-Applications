
<!-- start: Content -->
<div id="content">
    <div class="col-md-12 padding-0">
        <div class="col-md-12 padding-0">
            <div class="col-md-12 padding-0">
                <div class="panel box-shadow-none content-header">
                    <div class="panel-body">
                        <div class="col-md-12">
                            <h3 class="animated fadeInLeft">Class Schedule Reports</h3>
                            <p class="animated fadeInDown" style="line-height:.4;">
                              Gold's Gym Acropolis
                            </p>
                        </div>
                      </div>
                  </div>
                </div>
                
                <div class="col-md-12 top-20 padding-0">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading"><h3>Inactive Class Schedule</h3></div>
                            <div class="panel-body">
                                <div class="responsive-table">
                                    <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Class Name</th>
                                                <th>Start Time</th>
                                                <th>End Time</th>
                                                <th>Day</th>
                                                <th>Trainer</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                                if($sched){
                                                    $cnt = 0;
                                                    foreach($sched as $s):
                                                        
                                                            $t = $this->model->fetch('trainer',array('id'=>$s->trainer_id))[0];
                                                        ?>
                                                            <tr>
                                                            <td> <?=$s->id ?></td>
                                                            <td><?= $s->class_name ?></td>
                                                                <td> <?= date("h:iA",$s->start_time) ?> </td>
                                                                <td> <?= date("h:iA",$s->end_time) ?> </td>
                                                                <td> <?= $s->day ?></td>
                                                                <td> <?= $t->trainer_lname . ', ' . $t->trainer_fname?> </td>
                                                                <td> <span class="label label-raised label-<?= $s->status == 1 ? 'success' : 'danger' ?>"><?= $s->status == 1 ? 'Active' : 'Not Active' ?></span></td>                                                             
                                                            </tr>
                                                        <?php
                                                        
                                                    endforeach;
                                                }
                                                else{
                                                    ?>
                                                        <tr>
                                                            <th colspan="6" class="text-sm-center text-md-center text-lg-center text-xl-center">There are no inactive schedules!</th>
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
