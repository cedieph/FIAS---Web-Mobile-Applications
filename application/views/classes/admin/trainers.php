<?php date_default_timezone_set("Asia/Manila");?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2"></div>
        <div class="col-md-8">
          <center>
            <a href="<?=base_url()?>classes/add_trainer" class="btn btn-danger">ADD TRAINER</a><br/><br/>
          </center>
            <div class="panel panel-success">
              <div class="panel-heading">
                TRAINERS
              </div>
                <div class="panel-body">
                  <table class="table">
                    <thead>
                      <th>TRAINER ID</th>
                      <th>FIRST NAME</th>
                      <th>LAST NAME</th>
                      <th>STATUS</th>
                      <th>ACTION</th>
                    </thead>
                    
                    <?php if(!$trainers):?>
                      <h1>Table is EMPTY</h1>
                    <?php else:?>                            
                      <tbody>
                        <?php foreach ($trainers as $trainer):?> 
                          <tr>
                            <td><?=$trainer->trainer_id?></td>
                            <td><?=$trainer->trainer_fname?></td>
                            <td><?=$trainer->trainer_lname?></td>
                            <td><?=$trainer->status?></td>
                            <td>
                              <a href="<?=base_url()?>classes/update_trainer/<?=$trainer->trainer_id?>" class="btn btn-info">EDIT</a>
                            </td>
                          </tr>
                        <?php endforeach;?>
                           
                      </tbody>
                    </table>
                    
                    <?php endif?>
                </div>
              </div>
            </div>
          <div class="col-md-2"></div>
        </div>
      </div>