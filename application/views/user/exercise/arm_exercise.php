<div id="content">
    <div class="tabs-wrapper text-center">             
        <div class="panel box-shadow-none text-left content-header">
            <div class="panel-body" style="padding-bottom:0px;">
                <div class="col-md-12">
                    <h3 class="animated fadeInLeft">Exercises</h3>
                    <p class="animated fadeInDown">
                        Body Building <span class="fa-angle-right fa"></span> <?= $work_name ?> Exercise
                    </p>
                </div>
                
            </div>
        </div>

        <div class="col-md-12">
            <div class="col-md-12">
                <div class="col-md-12">
                    
                <!-- -->
                    <div class="col-md-12">
                    
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <style>
                            img .img-ex {
                                width:100%;
                            }
                        </style>
                        <?php
                        $i = 0;
                            if($exercise){
                                $i = 0;
                                $flag = 1;
                                foreach($exercise as $ex){
                        ?>                                                     
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="head<?= $i+1 ?>">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#week<?= $i+1 ?>" aria-expanded="true" aria-controls="week<?= $i+1 ?>">
                                                    <h4>ID <?= $ex->id ?> : <?= $ex->name ?></h4>
                                                    
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="week<?= $i+1 ?>" class="panel-collapse collapse <?= $i == 0 ? 'in' : '' ?>" role="tabpanel" aria-labelledby="head<?= $i+1 ?>">
                                            <div class="panel-body">
                                                <!-- Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. -->
                                                <h4>Instructions</h4>
                                                <p> <?= $ex->instructions?></p>
                                                <img src="<?= base_url()?>uploads/exercise/<?= $ex->image?>" class="img-ex" height="250px">
                                                
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
                                        <h4 class="panel-title">No Exercises</h4>
                                        <div class="panel-body">
                                            Please Add some exercise
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
</div>
