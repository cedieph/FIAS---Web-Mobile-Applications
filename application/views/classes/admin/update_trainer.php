<?php
    $trainers = $trainers[0]
?>

<div class="container">      
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <?=$title ?>
                </div>

                <div class  = "panel-body">
                    <form class = "form" action = "<?=base_url()?>classes/update/<?=$this->uri->segment(3)?>" method ="POST">
                        <div class = "form-group">
                            <label> TRAINER ID </label>
                            <input type = "text" readonly = "" value = "<?=$this->uri->segment(3)?>" class = "form-control"/>
                        </div>

                        <div class="form-group">
                            <label>FIRST NAME</label>
                            <input type="text" value="<?=$trainers->trainer_fname?>" name="fname" class="form-control"/>
                        </div>
                        
                        <div class="form-group">
                            <label>LAST NAME</label>
                            <input type="text" value="<?=$trainers->trainer_lname?>" name="lname" class="form-control"/>
                        </div>

                        <div class="form-group">
                        <label>STATUS</label>
                        <select name="status" class="form-control" value="<?$trainers->$status?>">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                    </div>
                    
                    <input type="submit" class="btn btn-success" value="UPDATE">
                    <a href="<?=base_url()?>classes/trainers" class="btn btn-info">Back to List</a>
                        
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div> 
</div>

