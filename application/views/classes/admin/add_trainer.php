<?php
?>
<div class="container">      
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="panel panel-success">
                <div class="panel-heading">
                    ADD TRAINER
                </div>
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
                <form class="form" action="<?=base_url()?>classes/insert_trainer" method="POST">
                    
                    <div class="form-group">
                        <label class="form-label"> First Name </label>
                        <input name="fname" class="form-control" type="text">
                    </div>                        

                    <div class="form-group">
                        <label class="form-label"> Last Name </label>
                        <input name="lname" class="form-control" type="type">
                    </div>

                    <div class="form-group">
                        <label class="form-label"> STATUS </label>
                        <select name="status" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                
                <input type="submit" class="btn btn-success" value="SUBMIT">
                <a href="<?=base_url()?>classes/trainers" class="btn btn-info">Back to List</a>
                        
                        </form>
                    </div>
                </div>
            </div>
        <div class="col-md-4"></div>
    </div> 
</div>

