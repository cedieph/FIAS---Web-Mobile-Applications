<div id="content">
                <div class="tabs-wrapper text-center">             
                    <div class="panel box-shadow-none text-left content-header">
                        <div class="panel-body" style="padding-bottom:0px;">
                            <div class="col-md-12">
                                <h3 class="animated fadeInLeft">Workouts</h3>
                                <p class="animated fadeInDown">
                                    Workouts <span class="fa-angle-right fa"></span> <?= $work_name ?> Workout
                                </p>
                            </div>
                            <ul id="tabs-demo" class="nav nav-tabs content-header-tab" role="tablist" style="padding-top:10px;">
                                <li role="presentation" class="active">
                                    <a href="#beginner-tab" id="tabs1" data-toggle="tab">Beginner</a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#intermediate-tab" id="tabs2" data-toggle="tab">Intermediate</a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#advanced-tab" id="tabs3" data-toggle="tab">Advanced</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12 tab-content">
                    
                                    <div class="tabs-wrapper text-center">    
                                        <button type="button" class="btn btn-info btn-add-workout-week"  data-workoutid="<?= $workout_id?>" >Add Workout </button>
                                        <button type="button" class="btn btn-warning btn-round btn-add-workout-week"  data-workoutid="<?= $workout_id?>" >Update Workout </button>
                                    </div>
                                    <br/><br/>
                                        <div id="workout-week-container" style="display:none;">
                                            <div class="modal-body"> 
                                                <p>Workout Week Name</p>
                                                    <input type="hidden" id="workout-workout" value="">
                                                    <div class="form-group form-animate-text">
                                                        <input type="text" class="form-text"  id='workout-name' required>
                                                        <span class="bar"></span>
                                                        <label><span class="fa fa-plus"></span> Workout Week Name</label>
                                                        <div id="workout-name-error"></div>
                                                    </div>
                                                    <p>Workout Week No.</p>
                                                    <div class="form-group form-animate-text">
                                                        <input type="number" class="form-text"  id='workout-week' required>
                                                        <span class="bar"></span>
                                                        <label><span class="fa fa-calendar"></span> Workout Week No.</label>
                                                        <div id="workout-week-error"></div>
                                                    </div>
                                                    <div class="form-group form-animate-text">
                                                        <select class="form-text" id="workout-level">
                                                            <option value="1">Beginner</option>
                                                            <option value="2">Intermediate</option>
                                                            <option value="3">Advanced</option>
                                                        </select>
                                                        <span class="bar"></span>
                                                        <label><span class="fa fa-calendar"></span> Workout Level</label>
                                                        <div id="workout-level-error"></div>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" id="" class="btn btn-success btn-add-workout-week-submit" ><i class="icon-send"></i> Confirm </button>
                                            </div>
                                        </div>
                                        
                        <!-- 1st TAB -->
                        <div role="tabpanel" class="tab-pane fade active in" id="beginner-tab" aria-labelledby="tabs1">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        
                                    <!-- -->
                                        <div class="col-md-12">
                                        
                                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
           
                                            <?php
                                            $i = 0;
                                                if($workouts_beginner){
                                                    $i = 0;
                                                    $flag = 1;
                                                    foreach($workouts_beginner as $work){

                                            ?>
                                                    
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="head<?= $i+1 ?>">
                                                                <h4 class="panel-title">
                                                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#week<?= $i+1 ?>" aria-expanded="true" aria-controls="week<?= $i+1 ?>">
                                                                        <h4>Week <?= $work->week ?> : <?= $work->name ?></h4>
                                                                        
                                                                    </a>
                                                                </h4>
                                                                <button class="btn btn-info btn-add-workout" data-type="2" data-weekid="<?= $work->week ?>" data-levelid="<?= $work->level ?>" data-workoutid=<?= $work->workout_id ?> >Add</button>
                                                                <button class="btn btn-warning btn-update-workout" data-id="<?= $work->id ?>">Update</button>
                                                            </div>
                                                            <div id="week<?= $i+1 ?>" class="panel-collapse collapse <?= $i == 0 ? 'in' : '' ?>" role="tabpanel" aria-labelledby="head<?= $i+1 ?>">
                                                                <div class="panel-body">
                                                                    <!-- Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. -->
                                                                    
                                                                    <ul class="list-group">
                                                                        <?php 
                                                                            $list = $this->model->fetch('workout_list',array('level_id'=>$work->level,'week_id'=>$work->week,'workout_id'=>$work->workout_id));
                                                                            if($list){
                                                                                foreach($list as $l){
                                                                        ?>
                                                                            <li class="list-group-item">
                                                                            <?php
                                                                                if($l->status == 1){
                                                                                    ?>
                                                                                    <button class="btn btn-circle btn-mn btn-danger btn-update-status-workout" data-id="<?= $l->id ?>" data-weekid="<?= $work->week ?>" data-levelid="<?= $work->level ?>" data-workoutid=<?= $work->workout_id ?> data-status=<?= $l->status ?>><span class="fa fa-times"></span></button>
                                                                                <?php
                                                                                }
                                                                                else{
                                                                                    ?>
                                                                                    <button class="btn btn-circle btn-mn btn-success btn-update-status-workout" data-id="<?= $l->id ?>" data-weekid="<?= $work->week ?>" data-levelid="<?= $work->level ?>" data-workoutid="<?= $work->workout_id ?>" data-status=<?= $l->status ?> ><span class="fa fa-plus"></span></button>
                                                                                    <?php
                                                                                }
                                                                                ?>
                                                                                <?= $l->name ?>
                                                                                
                                                                            </li>
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
                                                        </div>
                                                <?php
                                                        $i++;
                                                    }
                                                }
                                                else{
                                                    ?>
                                                    
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="head<?= $i+1 ?>">
                                                            <h4 class="panel-title">No Workouts</h4>
                                                            <div class="panel-body">
                                                                Please Add some workouts
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <?php
                                                }
                                                ?>
                                                
                                            </div>

                                        </div>
                                    <!-- -->

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 1st TAB -->

                        <!-- 2nd TAB -->
                        <div role="tabpanel" class="tab-pane fade" id="intermediate-tab" aria-labelledby="tabs2">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <div class="col-md-12">

                                            <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">

                                       
                                            <?php
                                            $i = 0;
                                                if($workouts_intermediate){
                                                    $i = 0;
                                                    $flag = 1;
                                                    foreach($workouts_intermediate as $work){

                                            ?>
                                                    
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="i-head<?= $i+1 ?>">
                                                            <h4 class="panel-title">
                                                                <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#i-week<?= $i+1 ?>" aria-expanded="true" aria-controls="i-week<?= $i+1 ?>">
                                                                    <h4>Week <?= $work->week ?> : <?= $work->name ?></h4>
                                                                    
                                                                </a>
                                                            </h4>
                                                            <button class="btn btn-info btn-add-workout" data-weekid="<?= $work->week ?>" data-levelid="<?= $work->level ?>" data-workoutid=<?= $work->workout_id ?> data-target="#add_workout_list_modal" data-toggle="modal">Add</button>
                                                            <button class="btn btn-warning btn-update-workout" data-id="<?= $work->id ?>">Update</button>
                                                        </div>
                                                        <div id="i-week<?= $i+1 ?>" class="panel-collapse collapse <?= $i == 0 ? 'in' : '' ?>" role="tabpanel" aria-labelledby="i-head<?= $i+1 ?>">
                                                            <div class="panel-body">
                                                                <!-- Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. -->
                                                                
                                                                <ul class="list-group">
                                                                    <?php 
                                                                        $list = $this->model->fetch('workout_list',array('level_id'=>$work->level,'week_id'=>$work->week,'workout_id'=>$work->workout_id));
                                                                        if($list){
                                                                            foreach($list as $l){
                                                                    ?>
                                                                        <li class="list-group-item">
                                                                        <?php
                                                                            if($l->status == 1){
                                                                                ?>
                                                                                <button class="btn btn-circle btn-mn btn-danger btn-update-status-workout" data-id="<?= $l->id ?>" data-weekid="<?= $work->week ?>" data-levelid="<?= $work->level ?>" data-workoutid=<?= $work->workout_id ?> data-status=<?= $l->status ?>><span class="fa fa-times"></span></button>
                                                                            <?php
                                                                            }
                                                                            else{
                                                                                ?>
                                                                                <button class="btn btn-circle btn-mn btn-success btn-update-status-workout" data-id="<?= $l->id ?>" data-weekid="<?= $work->week ?>" data-levelid="<?= $work->level ?>" data-workoutid="<?= $work->workout_id ?>" data-status=<?= $l->status ?> ><span class="fa fa-plus"></span></button>
                                                                                <?php
                                                                            }
                                                                            ?>
                                                                            <?= $l->name ?>
                                                                            
                                                                        </li>
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
                                                    </div>
                                                <?php
                                                        $i++;
                                                    }
                                                }
                                                else{
                                                    ?>
                                                    
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="head<?= $i+1 ?>">
                                                            <h4 class="panel-title">No Workouts</h4>
                                                            <div class="panel-body">
                                                                Please Add some workouts
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <?php
                                                }
                                                ?>
                                               
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- -- 2nd TAB -- -->

                        <!-- 3rd TAB -->

                        <div role="tabpanel" class="tab-pane fade" id="advanced-tab" aria-labelledby="tabs3">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <div class="col-md-12">

                                            <div class="panel-group" id="accordion3" role="tablist" aria-multiselectable="true">
                                        
                                        
                                        <?php 
                                            $i = 0;
                                                if($workouts_advanced){
                                                    $i = 0;
                                                    $flag = 1;
                                                    foreach($workouts_advanced as $work){

                                            ?>
                                                    
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="a-head<?= $i+1 ?>">
                                                            <h4 class="panel-title">
                                                                <a role="button" data-toggle="collapse" data-parent="#accordion3" href="#a-week<?= $i+1 ?>" aria-expanded="true" aria-controls="a-week<?= $i+1 ?>">
                                                                    <h4>Week <?= $work->week ?> : <?= $work->name ?></h4>
                                                                    
                                                                </a>
                                                            </h4>
                                                            <button class="btn btn-info btn-add-workout" data-weekid="<?= $work->week ?>" data-levelid="<?= $work->level ?>" data-workoutid=<?= $work->workout_id ?> data-target="#add_workout_list_modal" data-toggle="modal">Add</button>
                                                            <button class="btn btn-warning btn-update-workout" data-id="<?= $work->id ?>">Update</button>
                                                        </div>
                                                        <div id="a-week<?= $i+1 ?>" class="panel-collapse collapse <?= $i == 0 ? 'in' : '' ?>" role="tabpanel" aria-labelledby="a-head<?= $i+1 ?>">
                                                            <div class="panel-body">
                                                                <!-- Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. -->
                                                                
                                                                <ul class="list-group">
                                                                    <?php 
                                                                        $list = $this->model->fetch('workout_list',array('level_id'=>$work->level,'week_id'=>$work->week,'workout_id'=>$work->workout_id));
                                                                        if($list){
                                                                            foreach($list as $l){
                                                                    ?>
                                                                        <li class="list-group-item">
                                                                        <?php
                                                                            if($l->status == 1){
                                                                                ?>
                                                                                <button class="btn btn-circle btn-mn btn-danger btn-update-status-workout" data-id="<?= $l->id ?>" data-weekid="<?= $work->week ?>" data-levelid="<?= $work->level ?>" data-workoutid=<?= $work->workout_id ?> data-status=<?= $l->status ?>><span class="fa fa-times"></span></button>
                                                                            <?php
                                                                            }
                                                                            else{
                                                                                ?>
                                                                                <button class="btn btn-circle btn-mn btn-success btn-update-status-workout" data-id="<?= $l->id ?>" data-weekid="<?= $work->week ?>" data-levelid="<?= $work->level ?>" data-workoutid="<?= $work->workout_id ?>" data-status=<?= $l->status ?> ><span class="fa fa-plus"></span></button>
                                                                                <?php
                                                                            }
                                                                            ?>
                                                                            <?= $l->name ?>
                                                                            
                                                                        </li>
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
                                                    </div>
                                                <?php
                                                        $i++;
                                                    }
                                                }
                                                else{
                                                    ?>
                                                    
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="head<?= $i+1 ?>">
                                                            <h4 class="panel-title">No Workouts</h4>
                                                            <div class="panel-body">
                                                                Please Add some workouts
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <?php
                                                }
                                                ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- -- 3rd TAB -- -->
                                        
                    </div>
                </div>
            </div>
