
<!-- start: Content -->
<div id="content">
    <div class="col-md-12 padding-0">
        <div class="col-md-12 padding-0">
            <div class="col-md-12 padding-0">
                <div class="panel box-shadow-none content-header">
                    <div class="panel-body">
                        <div class="col-md-12">
                            <h3 class="animated fadeInLeft">Trainer Reports</h3>
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
                            <div class="panel-heading"><h3>Active Trainers</h3></div>
                            <div class="panel-body">
                                <div class="responsive-table">
                                    <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Name</th>
                                                <th>Gender</th>
                                                <th>Date Registered</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                                if($users){
                                                    $cnt = 0;
                                                    foreach($users as $u):
                                                        ?>
                                                            <tr>
                                                                <td scope="row"><?= ++$cnt ?></td>
                                                                <td><?= $u->trainer_lname . ', '. $u->trainer_fname ?></td>
                                                                <td><?= $u->gender ?></td>
                                                                <td><?= $u->registered_at ?></td>
                                                                <td> <span class="label label-raised label-<?= $u->status == 1 ? 'success' : 'danger' ?>"><?= $u->status == 1 ? 'Active' : 'Not Active' ?></span></td>                                                             
                                                            </tr>
                                                        <?php
                                                    endforeach;
                                                }
                                                else{
                                                    ?>
                                                        <tr>
                                                            <th colspan="6" class="text-sm-center text-md-center text-lg-center text-xl-center">You don't have any Bookings SAD!</th>
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
