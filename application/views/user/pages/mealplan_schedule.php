<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">My Schedule</h3>
                <p class="animated fadeInDown">
                    Meal Plan <span class="fa-angle-right fa"></span> Schedule
                </p>
            </div>
        </div>
    </div>

    <!-- Body-->
    <div class="col-md-12">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <h3><?php if($mealplan){ echo $meal_name; }else { echo "No";} ?> Meal Plan</h3> 
                    <h5>Date Expired : <?php if($date_expired){ echo date("F d, Y l",$date_expired); }else{ echo "None"; }?></h5>
                    <?php 
                    // 
                    if($meal){
                        if( date("Y-m-d",time()) >= date("Y-m-d",$date_expired) ){
                    ?>  
                        <button type="button" class="btn btn-info" id="end-mealplan" data-mealplanid="<?= $meal->mealplan_id ?>" data-userid="<?= $meal->user_id ?>">End Meal Plan</button>
                    <?php
                        }
                    }
                    ?>
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                      <ul class="timeline">
                      
                      <?php 
                        if($meal_day){
                          $i = 0;
                          foreach ($meal_day as $day ) {

                            //echo strtotime($work->created_at) > time() ? 'TRUE' : 'FALSE';
                            // date("FORMAT", NUMERICAL TIME)
                            //echo date("F j Y",1517734282);
                            //echo date("F j Y",strtotime($work->created_at));
                            //echo time() > 1517934282 ? "FALSE" : "TRUE";

                            ?>
                            <li class="<?= $i%2 == 0 ? '' : 'timeline-inverted' ?>">
                            <?php $i++; ?>
                            <?php 
                              
                              $new_format = date("Y-m-d",strtotime($meal->created_at));
                              $time = strtotime("+".($i)." day",strtotime($new_format));
                              // echo $time;
                            ?>
                            <?php #date("F j y",strtotime("+".(7*$i)." day",strtotime($user_workout->created_at))) ?>
                              <div class="timeline-badge <?= $time <= time() ? 'bg-success' : ''?> "><i class="glyphicon glyphicon-check"></i></div>
                                <div class="timeline-panel">
                                  <div class="timeline-heading">
                                    <h4 class="timeline-title">Day <?= $day->day ?></h4>
                                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i></small></p>
                                  </div>
                                  <div class="timeline-body">
                                    <h4>Breakfast</h4>
                                    <ul class="list-group">
                                      <?php 
                                        $list = $this->model->fetch('meal_type',array('mealplan_day_id'=>$day->id,'type'=>1));
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
                                    <!-- END BREAKFAST -->
                                    <h4>LUNCH</h4>
                                    <ul class="list-group">
                                      <?php 
                                        $list = $this->model->fetch('meal_type',array('mealplan_day_id'=>$day->id,'type'=>2));
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
                                    <!-- END LUNCH -->
                                    <h4>DINNER</h4>
                                    <ul class="list-group">
                                      <?php 
                                        $list = $this->model->fetch('meal_type',array('mealplan_day_id'=>$day->id,'type'=>3));
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
                                    <!-- END DINNER -->
                                    
                                    <h4>SNACK</h4>
                                    <ul class="list-group">
                                      <?php 
                                        $list = $this->model->fetch('meal_type',array('mealplan_day_id'=>$day->id,'type'=>4));
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
                                                      <h4 class="panel-title">No Meal Plan Lists</h4>
                                                      <div class="panel-body">
                                                         s <div class="panel">
                                                              Please Add Meals
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>

                                              <?php
                                          }
                                          
                                      ?>
                                    </ul> 
                                    <!-- END SNACK -->
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