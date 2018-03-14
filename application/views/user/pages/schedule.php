<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">My Schedule</h3>
                <p class="animated fadeInDown">
                    Workout <span class="fa-angle-right fa"></span> Schedule
                </p>
            </div>
        </div>
    </div>

    <!-- Body-->
    <div class="col-md-12">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <h3><?php if($work){ echo $work->name; }else { echo "No";} ?> Workout</h3> 
                    <h5>Date Expired : <?php if($date_expired){ echo date("F d, Y l",$date_expired); }else{ echo "None"; }?></h5>
                    <?php 
                    // 
                    if($user_workout){
                        if( date("Y-m-d",time()) >= date("Y-m-d",$date_expired) ){
                    ?>  
                        <button type="button" class="btn btn-info" id="end-workout" data-workid="<?= $user_workout->workout_id ?>" data-worklevel="<?= $user_workout->workout_level ?>">End Workout</button>
                    <?php
                        }
                    }
                    ?>
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                      <ul class="timeline">
                      
                      <?php 
                        if($workout){
                          $i = 0;
                          foreach ($workout as $work ) {

                            //echo strtotime($work->created_at) > time() ? 'TRUE' : 'FALSE';
                            // date("FORMAT", NUMERICAL TIME)
                            //echo date("F j Y",1517734282);
                            //echo date("F j Y",strtotime($work->created_at));
                            //echo time() > 1517934282 ? "FALSE" : "TRUE";

                            ?>
                            <li class="<?= $i%2 == 0 ? '' : 'timeline-inverted' ?>">
                            <?php $i++; ?>
                            <?php 
                              
                              $new_format = date("Y-m-d",strtotime($user_workout->created_at));
                              $time = strtotime("+".(7*$i)." day",strtotime($new_format));
                              // echo $time;
                            ?>
                            <?php #date("F j y",strtotime("+".(7*$i)." day",strtotime($user_workout->created_at))) ?>
                              <div class="timeline-badge <?= $time <= time() ? 'bg-success' : ''?> "><i class="glyphicon glyphicon-check"></i></div>
                                <div class="timeline-panel">
                                  <div class="timeline-heading">
                                    <h4 class="timeline-title">Week <?= $work->week ?> : <?= $work->name ?></h4>
                                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i></small></p>
                                  </div>
                                  <div class="timeline-body">
                                    <ul class="list-group">
                                      <?php 
                                          $list = $this->model->fetch('workout_list',array('level_id'=>$work->level,'week_id'=>$work->week,'workout_id'=>$work->workout_id,'status'=>1
                                        ));
                                          if($list){
                                              foreach($list as $l){
                                      ?>
                                          <li class="list-group-item"><?= $l->name ?></li>
                                      <?php

                                              }
                                          }
                                          else{
                                              ?>
                                              <div class="panel panel-warning">
                                                  <div class="panel-heading" role="tab" id="i-head<?= $i+1 ?>">
                                                      <h4 class="panel-title">No Workout Lists</h4>
                                                      <div class="panel-body">
                                                          <div class="panel">
                                                              Please Add some workout List
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>

                                              <?php
                                          }
                                          
                                      ?>
                                    </ul> 
                                  </div>
                              </div>
                            </li>
                            <?php
                            
                          }
                        }
                      ?>
                      </ul>
                    </div>
                  </div>
                </div>
                </div>
    <!-- Body-->

</div>