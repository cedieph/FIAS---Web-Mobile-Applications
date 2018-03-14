<?php date_default_timezone_get ("Asia/Manila");?>

<div class = "container-fluid" style = "width:50%";>
  <div class = "row">
    <div class = "col-md-2"></div>
      <div class = "col-md-8>">
        <center>
            <a href="<?=base_url()?>classes/workouts" class="btn btn-info">BACK TO LIST</a>
            <a href="<?=base_url()?>classes/updateworkout/<?=$class->class_id?>" class="btn btn-primary">UPDATE WORKOUT</a><br/><br/>
        </center>
        
        <div class = "panel panel-success">
          <div class = "pannel-heading" >
            <b><?=strtoupper($class->class_name);?></b>
          </div>
        
            <div class = "panel-body">
              <center>  
                <table class = "table" style = "width:50%";>
                    <tbody>
                        <thead>
                            <th>CLASS ID</th>
                            <th><?=$class->class_id?></th>
                        </thead>
                        
                        <thead>
                            <th>CLASS NAME</th>
                            <th><?=$class->class_name?></th>
                        </thead>

                        <thead>
                            <th>DESCRIPTION</th>
                            <th><?=$class->class_desc?></th>
                        </thead>
                        
                        <thead>
                            <th>IMAGE</th>
                            <th><img src="<?= base_url()?>uploads/<?= $class->img ?>" height = "150px"> </th>
                        </thead>

                        <thead>
                            <th>START TIME</th>
                            <th><?=date('h:i A', $class->start_time)?></th>
                        </thead>

                        <thead>
                            <th>END TIME</th>
                            <th><?=date('h:i A', $class->end_time)?></th>
                        </thead>

                        <thead>
                            <th>DAY</th>
                            <th><?= $class->day ?> </th>
                        </thead>

                        <thead>
                            <th>TRAINER</th>
                            <th><?=$class->trainer_fname?> <?=$class->trainer_lname?></th>
                        </thead>

                        <thead>
                            <th>STATUS</th>
                            <th><?= $class->status?></th>
                        </thead>
                    </tbody>
                  </table>
                </center>
              </div>
            </div>
      </div>
    <div class = "col-md-2"></div>
  </div>
</div>