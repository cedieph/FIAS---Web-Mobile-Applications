
<!-- start: Content -->
<div id="content">
    <div class="col-md-12 padding-0">
        <div class="col-md-12 padding-0">
            <div class="col-md-12 padding-0">
                <div class="panel box-shadow-none content-header">
                    <div class="panel-body">
                        <div class="col-md-12">
                            <h3 class="animated fadeInLeft">My Class</h3>
                            <p class="animated fadeInDown" style="line-height:.4;">

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading"><h3>MY CLASSES</h3></div>

                        <div class="panel-body">
                            <div class="col-md-12">
                                <table id="datatables-example"class="table table-responsive">
                                    <thead>
                                        <tr>
                                            <th>Activity</th>
                                            <th>Start Time</th>
                                            <th>End Time</th>
                                            <th>Trainer</th>
                                            <th>Day</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            if($class){
                                                // print_r($class);
                                                foreach($class as $c){
                                                    $trainer = $this->model->fetch('trainer',array('id'=>$c->trainer_id))[0];
                                                    ?>
                                                    <tr>
                                                        <td><?= $c->class_name ?></td>
                                                        <td><?= date("h:iA",$c->start_time) ?></td>
                                                        <td><?= date("h:iA",$c->end_time) ?></td>
                                                        <td><?= $trainer->trainer_lname .', '.$trainer->trainer_fname ?></td>
                                                        <td><?= $c->day ?></td>
                                                        <td>
                                                            <button type="button" class="btn btn-info btn-endclass" id="btn-endclass" data-id="<?= $c->id?>" data-trainerid="<?= $c->trainer_id ?>" >End Class</button>
                                                        
                                                        </td>
                                                    </tr>

                                                    <?php
                                                }
                                        ?>
                                        
                                        <?php 
                                            }
                                            else{
                                                ?>
                                                <th colspan="6" class="text-sm-center text-md-center text-lg-center text-xl-center">You don't have any Workout Classes</th>
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
                        
                   