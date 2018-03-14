
<!-- start: Content -->
<div id="content">
    <div class="col-md-12 padding-0">
        <div class="col-md-12 padding-0">
            <div class="col-md-12 padding-0">
                <div class="panel box-shadow-none content-header">
                    <div class="panel-body">
                        <div class="col-md-12">
                            <h3 class="animated fadeInLeft">Workout Class Reports</h3>
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
                            <div class="panel-heading"><h3>Inactive Workout Class</h3></div>
                            <div class="panel-body">
                                <div class="responsive-table">
                                    <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Date Created</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                                if($classes){
                                                    $cnt = 0;
                                                    foreach($classes as $c):
                                                        ?>
                                                            <tr>
                                                                <td scope="row"><?= ++$cnt ?></td>
                                                                <td><?= $c->name?></td>
                                                                <td><?= $c->created_at ?></td>
                                                                <td> <span class="label label-raised label-<?= $c->status == 1 ? 'success' : 'danger' ?>"><?= $c->status == 1 ? 'Active' : 'Not Active' ?></span></td>                                                             
                                                                <td> <button class="btn btn-<?= $c->status == 1 ? 'warning' : 'info'?> btn-sm status_check" 
                                                                    data-id="<?= $c->id?>" data-status="<?= $c->status ?>"><i class="icon-pencil"></i><?= $c->status == 1 ? 'Deactivate' : 'Activate' ?>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        <?php
                                                    endforeach;
                                                }
                                                else{
                                                    ?>
                                                        <tr>
                                                            <th colspan="6" class="text-sm-center text-md-center text-lg-center text-xl-center">There are no inactive class</th>
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
