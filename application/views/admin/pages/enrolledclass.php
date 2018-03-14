
<!-- start: Content -->
<div id="content">
    <div class="col-md-12 padding-0">
        <div class="col-md-12 padding-0">
            <div class="col-md-12 padding-0">
                <div class="panel box-shadow-none content-header">
                    <div class="panel-body">
                        <div class="col-md-12">
                            <h3 class="animated fadeInLeft">Class Enrollee Reports</h3>
                            <p class="animated fadeInDown" style="line-height:.4;">
                              Gold's Gy Acropolis
                            </p>
                        </div>
                      </div>
                  </div>
                </div>
                
                <div class="col-md-12 top-20 padding-0">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading"><h3>Enrolled in Class</h3></div>
                            <div class="panel-body">
                                <div class="responsive-table">
                                    <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Name</th>
                                                <th>Class Name</th>
                                                <th>Trainer Name</th>
                                                <th>Date Created </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                                if($user_class){
                                                    $cnt = 0;
                                                    foreach($user_class as $f):
                                                        $class = $this->admin->fetch('class',array('id'=>$f->id))[0];
                                                        $user = $this->admin->fetch('accounts',array('id'=>$f->accounts_id))[0];
                                                        $trainer = $this->admin->fetch('trainer',array('id'=>$f->id))[0];
                                                        ?>
                                                            <tr>
                                                                <th scope="row"><?= ++$cnt ?></th>
                                                                <td><?= $user->user_lname . ', '. $user->user_fname ?></td>
                                                                <td><?= $class->class_name ?></td>
                                                                <td><?= $trainer->trainer_lname . ', '. $trainer->trainer_fname ?></td>
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
