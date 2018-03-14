<?php 
    $pics = array(
        'cycling.jpg',
        'definitions.jpg',
        'goldsmix.jpg',
        'retro.jpg',
        'streetdance.jpg',
        'yogilates.jpg',
        'zumba.jpg',
    );
?>

<?php date_default_timezone_set("Asia/Manila");?>
<?php $work = $this->uri->segment(3) >= count($pics) ? 0 : $this->uri->segment(3);$cur = 0; ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <center>
                <a href="<?=base_url()?>classes/add_workout" class="btn btn-danger">ADD WORKOUT</a><br/><br/>
            </center>
            <div class="panel panel-success">
                <div class="panel-heading">
                    CLASSES
                </div>
                <div class="panel-body">
                    
                        <table class="table">
                            <thead>
                                <th>CLASS ID</th>
                                <th>CLASS NAME</th>
                                <th>STATUS </th>
                                <th>ACTION</th>
                            </thead>
                            <?php if(!$classes):?>
                        <h1>Table is EMPTY</h1>
                    <?php else:?>
                            <tbody>
                                <?php foreach ($classes as $class):?> 
                               <tr>
                                    <td><?=$class->class_id?></td>
                                    <td><?=$class->class_name?></td>
                                    <td><?=$class->status?></td>
                                    <td>
                                        <a href = "<?=base_url()?>classes/workout_view/<?=$class->class_id?>" class = "btn btn-info"> VIEW </a>  
                                    </td>
                                </tr>
                                <?php endforeach;?>
                            <center>
                                
                            </center>
                            </tbody>
                        </table>
                    <?php endif?>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>