
<!-- start: Content -->
<div id="content">
    <div class="col-md-12 padding-0">
        <div class="col-md-12 padding-0">
            <div class="col-md-12 padding-0">
                <div class="panel box-shadow-none content-header">
                    <div class="panel-body">
                        <div class="col-md-12">
                            <h3 class="animated fadeInLeft">Workout Erollee Reports</h3>
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
                            <div class="panel-heading"><h3>Enrolled in Workouts</h3></div>
                            <div class="panel-body">
                                <div class="responsive-table">
                                    <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Name</th>
                                                <th>Workout Name</th>
                                                <th>Workout Level </th>
                                                <th>Created At </th>
                                         
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                                if($user_workout){
                                                    $cnt = 0;
                                                    foreach($user_workout as $f):
                                                        $workout = $this->admin->fetch('workout_levels',array('id'=>$f->id))[0];
                                                        $user = $this->admin->fetch('accounts',array('id'=>$f->user_id))[0];
                                                        ?>
                                                            <tr>
                                                                <th scope="row"><?= ++$cnt ?></th>
                                                                <td><?= $user->user_lname . ', '. $user->user_fname ?></td>
                                                                <td><?= $workout->name ?></td>
                                                                <?php
                                                                                if($workout->level == 1){
                                                                                    ?>
                                                                                   <td>Beginner</td>
                                                                                <?php
                                                                                }
                                                                                if($workout->level == 2){
                                                                                    ?>
                                                                                     <td>Intermediate</td>
                                                                                    <?php
                                                                                } if($workout->level == 3){
                                                                                    ?>
                                                                                    <td>Advanced</td>
                                                                                <?php 
                                                                                }
                                                                                ?>
                                                                <td><?= $f->created_at ?></td>                                    
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
