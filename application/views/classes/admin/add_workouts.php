<?php
?>
<div class="container">      
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="panel panel-success">
                <div class="panel-heading">
                    ADD WORKOUTS
                </div>
                <div class="panel-body"><?php $pics = array('cycling.jpg','definitions.jpg','goldsmix.jpg','retro.jpg','streetdance.jpg','yogilates.jpg','zumba.jpg'); ?>
                <?php 
                    if($error){
                        ?>
                        <div class="alert alert-danger"><?= ($error) ?></div>
                        <?php
                    }
                    if($success){
                        ?>
                        <div class="alert alert-success"><?= $success ?></div>
                        <?php
                    }
                ?>
                <form class="form" action="<?=base_url()?>classes/insert_workout" method="POST" enctype="multipart/form-data">
                        
                         <div class="form-group">
                            <label>CLASS NAME</label>
                            <input type="text" name="class_name" class="form-control"/>
                        </div>
                        
                        <div class="form-group">
                            <label>CLASS DESCRIPTION</label>
                            <input type="textarea"  name="class_desc" class="form-control"/>
                        </div>
                        
                        <div class="form-group">
                        <label class="form-label">Day</label>
                        <select name="day" class="form-control">
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
                        <input name="start" class="form-control" type="time">
                    </div>                        

                    <div class="form-group">
                        <label class="form-label"> End Time </label>
                        <input name="end" class="form-control" type="time">
                    </div>

                    <div class = "form-group">
                        <label> Trainer </label>
                        <select name="trainer_id" class="form-control">
                            <?php $trainer = $this->accounts_model->fetch('trainer');
                                foreach($trainer as $t): 
                            ?>
                       <option value="<?= $t->trainer_id?>"><?= $t->trainer_fname?> <?= $t->trainer_lname?></option>
                            <?php endforeach; ?>
                    </select>
                    </div>  

                    <div class="form-group">
                        <label class="form-label"> STATUS </label>
                        <select name="status" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>         

                        <div class = "form-group">
                            <label for = "img">Image</label></br>
                                <input type="file" multiple="" name="img" id="imgInp" class="form-control input-lg">
                        </div>

                        <input type="submit" class="btn btn-success" value="SUBMIT">
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