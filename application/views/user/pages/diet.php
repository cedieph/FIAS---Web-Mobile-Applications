<div id="content">
                <div class="tabs-wrapper text-center">             
                    <div class="panel box-shadow-none text-left content-header">
                        <div class="panel-body" style="padding-bottom:0px;">
                            <div class="col-md-12">
                                <h3 class="animated fadeInLeft">Workouts</h3>
                                <p class="animated fadeInDown">
                                    Body Building <span class="fa-angle-right fa"></span> Weight Loss and Dieting Workout
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

                        <!-- 1st TAB -->
                        <div role="tabpanel" class="tab-pane fade active in" id="beginner-tab" aria-labelledby="tabs1">
                            <div class="col-md-12">
                            
                                <div class="col-md-12">
                                    <div class="col-md-12">

                                    <?php
                                    if($workouts_beginner){ 
                                        ?>
                                    <div class="tabs-wrapper text-center">             
                                        <button type="button" class="btn btn-info" id="btn-beginner" data-workoutid="<?= $workout->id ?>" data-levelid="1">Add Workout </button>
                                    </div>
                                    <?php } ?>
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
                                                                            <li class="list-group-item"><?= $l->name ?></li>
                                                                        <?php

                                                                                }
                                                                            }
                                                                            else{
                                                                                ?>
                                                                                <div class="panel panel-warning">
                                                                                    <div class="panel-heading" role="tab" id="i-head<?= $i+1 ?>">
                                                                                        <h4 class="panel-title">No Available List of Workouts</h4>
                                                                                        <div class="panel-body">
                                                                                            <div class="panel">
                                                                                                Sorry for Inconvenience
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
                                                            <h4 class="panel-title">No Available Workouts</h4>
                                                            <div class="panel-body">
                                                                Sorry for Inconvenience
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
                                    <?php
                                    if($workouts_intermediate){ 
                                        ?>
                                        <div class="tabs-wrapper text-center">             
                                            <button type="button" class="btn btn-info" id="btn-intermediate" data-workoutid="<?= $workout->id ?>" data-levelid="2">Add Workout </button>
                                        </div>
                                    <?php } ?>
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
                                                                            <li class="list-group-item"><?= $l->name ?></li>
                                                                        <?php

                                                                                }
                                                                            }
                                                                            else{
                                                                                ?>
                                                                                <div class="panel panel-warning">
                                                                                    <div class="panel-heading" role="tab" id="i-head<?= $i+1 ?>">
                                                                                        <h4 class="panel-title">No Available List of Workouts</h4>
                                                                                        <div class="panel-body">
                                                                                            <div class="panel">
                                                                                                Sorry for Inconvenience
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
                                                            <h4 class="panel-title">No Available Workouts</h4>
                                                            <div class="panel-body">
                                                                Sorry for Inconvenience
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
                                    <?php
                                    if($workouts_advanced){ 
                                        ?>
                                        <div class="tabs-wrapper text-center">             
                                            <button type="button" class="btn btn-info" id="btn-advanced" data-workoutid="<?= $workout->id ?>" data-levelid="3">Add Workout </button>
                                        </div>
                                    <?php } ?>
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
                                                                            <li class="list-group-item"><?= $l->name ?></li>
                                                                        <?php

                                                                                }
                                                                            }
                                                                            else{
                                                                                ?>
                                                                                <div class="panel panel-warning">
                                                                                    <div class="panel-heading" role="tab" id="i-head<?= $i+1 ?>">
                                                                                        <h4 class="panel-title">No Available List of Workouts</h4>
                                                                                        <div class="panel-body">
                                                                                            <div class="panel">
                                                                                                Sorry for Inconvenience
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
                                                            <h4 class="panel-title">No Available Workouts</h4>
                                                            <div class="panel-body">
                                                                Sorry for Inconvenience
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
