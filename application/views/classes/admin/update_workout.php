<?php
    $classes = $classes[0]
?>

<div class = "container">
    <div class = "row">
        <div class = "col-md-4"></div>
        <div class = "col-md-4">
            <div class = "panel panels-success">
                <div class = "panel-heading">
                    <?=$title ?>
                </div>

                <div class  = "panel-body">
                    <form class = "form" action = "<?=base_url()?>classes/update_workout_data/<?=$this->uri->segment(3)?>" method ="POST" enctype="multipart/form-data">
                        <div class = "form-group">
                            <label> CLASS ID </label>
                            <input type = "text" readonly = "" value = "<?=$this->uri->segment(3)?>" class = "form-control"/>
                        </div>

                        <div class="form-group">
                            <label>CLASS NAME</label>
                            <input type="text" value="<?=$classes->class_name?>" name="class_name" class="form-control"/>
                        </div>
                        
                        <div class="form-group">
                            <label>CLASS DESCRIPTION</label>
                            <input type="text" value="<?=$classes->class_desc?>" name="class_desc" class="form-control"/>
                        </div>

                        <div class="form-group">
                        <label>DAY</label>
                        <select name="day" class="form-control" value="<?$classes->day?>">
                        <option value="MONDAY">Monday</option>
                        <option value="TUESDAY">Tuesday</option>
                        <option value="WEDNESDAY">Wednesday</option>
                        <option value="THURSDAY">Thursday</option>
                        <option value="FRIDAY">Friday</option>
                        <option value="SATURDAY">Saturday</option>
                        <option value="SUNDAY">Sunday</option>
                    </select>
                    </div>
                    
                    
                <div class="form-group">
                    <label class="form-label"> Start Time </label>
                    <input name="start" class="form-control" type="time" value ="<?$class->$start_time?>">
                </div>                        

                <div class="form-group">
                    <label class="form-label"> End Time </label>
                    <input name="end" class="form-control" type="time" value ="<?$class->$end_time?>">
                </div>

                <div class = "form-group">
                    <label> Trainer </label>
                    <select name="trainer_id" class="form-control" value="<?$class->$trainer_id?>">
                        <?php $trainer = $this->accounts_model->fetch('trainer');
                            foreach($trainer as $t): 
                        ?>
                   <option value="<?= $t->trainer_id?>"><?= $t->trainer_fname?> <?= $t->trainer_lname?></option>
                        <?php endforeach; ?>
                </select>

                <div class="form-group">
                        <label class="form-label"> STATUS </label>
                        <select name="status" class="form-control" value = "<?$class->status?>">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div> 
    

                        <div class = "form-group">
                            <label for = "img">Image</label></br>
                            <input type="file" multiple="" name="img" id="imgInp" value = "<?=$classes->img?>"class="form-control input-lg">
                        </div>
                        
                        <input type="submit" class="btn btn-success" value="UPDATE">
                        <a href="<?=base_url()?>classes/workouts" class="btn btn-info">Back to List</a>
                        
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div> 
</div>

<script>
        var app_url = "<?= base_url()?>";
        function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
            $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
        }

        $("#imgInp").change(function() {
        readURL(this);
        });

    </script>