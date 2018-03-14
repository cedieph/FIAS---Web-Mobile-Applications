
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
                            <div class="panel-heading"><h3>Unavailable Trainers</h3></div>
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
                                                if($classes){
                                                    $cnt = 0;
                                                    foreach($classes as $s):
                                                        ?>
                                                            <tr>
                                                            <td> <?=$s->class_id ?></td>
                                                            <td><?= $s->class_name ?></td>
                                                                <td> <?= date("h:iA",$s->start_time) ?> </td>
                                                                <td> <?= date("h:iA",$s->end_time) ?> </td>
                                                                <td> <?= $s->day ?></td>
                                                                <td><?=$s->trainer_status == 1 ? $s->trainer_name : '<span style="color: red">No trainer</span>'?></td>
                                                                <td> <span class="label label-raised label-<?= $s->class_status == 1 ? 'success' : 'danger' ?>"><?= $s->class_status == 1 ? 'Active' : 'Not Active' ?></span></td>                                                             
                                                            </tr>
                                                        <?php
                                                        
                                                    endforeach;
                                                }
                                                else{
                                                    ?>
                                                        <tr>
                                                            <th colspan="6" class="text-sm-center text-md-center text-lg-center text-xl-center">Table is empty!</th>
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
