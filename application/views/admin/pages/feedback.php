
<!-- start: Content -->
<div id="content">
    <div class="col-md-12 padding-0">
        <div class="col-md-12 padding-0">
            <div class="col-md-12 padding-0">
                <div class="panel box-shadow-none content-header">
                    <div class="panel-body">
                        <div class="col-md-12">
                            <h3 class="animated fadeInLeft">Feedback</h3>
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
                            <div class="panel-heading"><h3><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAIYSURBVEhLxdVLSBZRGMbxsSzNqCBS6YLYRiowKlwkGYFQJGU7wRYVVCuJCAuCwnRRIW2CiCIICguiFuLGC0VIhhsJKhK7ItKFFCIptY2I/Z/zzshM30VlPuiBH75n1Dkz75w5480z2ciyMrPZiKf4g3HcRwEykvX4ihroDvJwBgNYgth5hONWRnITZ62Ml0GstTKSarRaGS+vsM3KSHRXt62MlxNog/ofZDneYYcbxYyW5R28gHrehE84jYymEpdwAaU6EDcLUYV66MqTOYlyzDsb8Aad0BWrfoDgxN14govo8+uVmFOW4gMOupHlMB5a6Z7Je2x2IxtfRocbzSHXfeHk4jtWYw96EM4CPMcxN0qTXRjCMizCKgRpRiO0ZGt1wM8a/6faOox1bpQkOdDa1oNVbuGulS7F0Ak+Y7EO+HmNOiu9c0j5dp/HPSvdxvYTj93Iol5/wRi26oCfEei4lq7u+iX2IiHfoNstgnbP/dAfB6nANH5DC0HRUv6FA+iHuqAOdCES3fIP6B82QRPoKvRgg2hCPZ/w/lOIjzgKrbwVKEH4wmbSgqtWetuhSSYR/oKpDvd/CyagSfRw9Tu19RQSog+Jlt8VN/K8nVBL8t0oeXZjFMHJ26E7DF9UJOqtJrmGfZiCWpYqh6A2alfVi5b25EE0yQ3o9X8LbXKpon2qF8/QgFlP/m/07S2zMmmOQF+2/xXP+wvQRGT5fAwUDAAAAABJRU5ErkJggg==">Trainers</h3></div>
                            <div class="panel-body">
                                <div class="responsive-table">
                                    <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>User</th>
                                                <th>Message</th>
                                                <th>Trainer</th>
                                                <th>Feedback Date</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                if($feedback){
                                                    $cnt = 0;
                                                    foreach($feedback as $f):
                                                        $trainer = $this->admin->fetch('trainer',array('id'=>$f->trainer_id))[0];
                                                        $user = $this->admin->fetch('accounts',array('id'=>$f->user_id))[0];
                                                        $message = "";
                                                        switch($f->message_trainer){
                                                            case 1:
                                                                $message = "Poor";
                                                                break;
                                                            case 2:
                                                                $message = "Below Average";
                                                                break;
                                                            case 3:
                                                                $message = "Average";
                                                                break;
                                                            case 4:
                                                                $message = "Above Average";
                                                                break;
                                                            case 5:
                                                                $message = "Outstanding";
                                                                break;
                                                        }
                                                        ?>
                                                            <tr>
                                                                <th scope="row"><?= ++$cnt ?></th>
                                                                <td><?= $user->user_lname .', '. $user->user_fname ?></td>
                                                                <td><?= $message ?></td>
                                                                <td><?= $trainer->trainer_lname . ', ' . $trainer->trainer_fname ?></td>
                                                                <td><?= $f->created_at ?></td>
                                                                <td> <span class="label label-raised label-success">Active</span></td>                                                       
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
                <!-- 1st Table -->

                <!-- 2nd TABLE -->
                <div class="col-md-12 top-20 padding-0">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading"><h3><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADhSURBVEhL7dKvigJxEMDxlQs2wXzBF7FZxGY4fAWL6YrVV7AYfQKLmH0GD+4JVIwGixz47zu4K8PPmVVXDzb4hQ/I7AyuYPQudzWwxDEjua3DbQHr8BFzuFkHiZkx87hZyzu08YFBPEvI23ZxUDPhppfEFk3oepBnP/iUAfWh79z00hpVSGV8Q36F9IXS+WNUwwb61k0vjVFABb/xbIQiklr4g74TbuHiEKtgNoW8fQf7eBZys5Ytt/7ObtZyFm7WchZu1rIlbIK055f0Upqwu7/gX9Nv8ApXWUvPeJeLougEqRrrswG5ZKoAAAAASUVORK5CYII="> Classes</h3></div>
                            <div class="panel-body">
                                <div class="responsive-table">
                                    <table id="datatables-example2" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>User</th>
                                                <th>Message</th>
                                                <th>Class</th>
                                                <th>Feedback Date</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                if($feedback){
                                                    $cnt = 0;
                                                    foreach($feedback as $f):
                                                        $class = $this->admin->fetch('class',array('id'=>$f->class_id))[0];
                                                        $user = $this->admin->fetch('accounts',array('id'=>$f->user_id))[0];
                                                        $message = "";
                                                        switch($f->message_class){
                                                            case 1:
                                                                $message = "Poor";
                                                                break;
                                                            case 2:
                                                                $message = "Below Average";
                                                                break;
                                                            case 3:
                                                                $message = "Average";
                                                                break;
                                                            case 4:
                                                                $message = "Above Average";
                                                                break;
                                                            case 5:
                                                                $message = "Outstanding";
                                                                break;
                                                        }
                                                        ?>
                                                            <tr>
                                                                <th scope="row"><?= ++$cnt ?></th>
                                                                <td><?= $user->user_lname .', '. $user->user_fname ?></td>
                                                                <td><?= $message ?></td>
                                                                <td><?= $class->class_name ?></td>
                                                                <td><?= $f->created_at ?></td>
                                                                <td> <span class="label label-raised label-success">Active</span></td>                                                       
                                                            </tr>
                                                        <?php
                                                    endforeach;
                                                }
                                                else{
                                                    ?>
                                                        <tr>
                                                            <th colspan="6" class="text-sm-center text-md-center text-lg-center text-xl-center">You don't have any Feedback SAD!</th>
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

                <!-- 2nd Table -->
            </div>
        </div>
    </div>
</div>
          <!-- end: Content -->
