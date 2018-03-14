<!-- start: Content -->
<div id="content" class="profile-v1">
    <div class="col-md-12 col-sm-12 profile-v1-wrapper">
        <div class="col-md-8  profile-v1-cover-wrap" style="padding-right:0px;">
            <div class="profile-v1-pp">
                <img src="<?= base_url() ?>assets/template/img/avatar.jpg"/>
                <h2><?= $user->user_fname . ' ' . $user->user_lname ?></h2>
                <strong><i>Email</i></strong> : <b class=""><?= $user->email ?></b><br>
                <strong><i>Contact # </i></strong> : <b><?= $user->contact ?></b><br>
                <br>
                <input type="button" class="btn btn-danger" id="edit-profile" value="Edit Profile" />
            </div>
            <div class="col-md-12 profile-v1-cover">
                <img src="<?= base_url() ?>assets/template/img/bg1.jpg" class="img-responsive">
            </div>
        </div>
        <div class="col-md-4 col-sm-12 padding-0 profile-v1-right">
            <div class="col-md-6 col-sm-4 profile-v1-right-wrap padding-0">
                <div class="col-md-12 padding-0 sub-profile-v1-right text-center sub-profile-v1-right1">
                    <h2><?= number_format($user->weight,2) ?> kg</h2>
                    <p>Weight</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-4 profile-v1-right-wrap padding-0">
                <div class="col-md-12 sub-profile-v1-right text-center sub-profile-v1-right2">
                    <h2><?= number_format($user->height,2) ?> cm</h2>
                    <p>Height</p>
                </div>
            </div>
            <div class="col-md-12 col-sm-4 profile-v1-right-wrap padding-0">
                <div class="col-md-12 sub-profile-v1-right text-center sub-profile-v1-right3">
                    <h2><?= number_format($bmi,2) ?> = <?= $bmi_category ?></h2>
                    <p>BMI</p>
                </div>
            </div>
        </div>
    </div>
    <div id="editProfile" style="display:none;">
        <div class="col-md-12 panel-body" style="padding-bottom:30px;" >
            <div class="col-md-12">
                <form class="cmxform" id="signupForm" action="">
                    <div class="col-md-6">
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input type="text" class="form-text" id="edit-fname" name="" value="<?= $user->user_fname?>" required>
                            <span class="bar"></span>
                            <label>Firstname</label>
                        </div>
                        
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input type="text" class="form-text" id="edit-email" name="" value="<?= $user->email ?>" required>
                            <span class="bar"></span>
                            <label>Email</label>
                            <input type="hidden" value="<?= $user->email ?>" id="edit-email2">
                        </div>

                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input type="text" class="form-text" id="edit-weight" name="" value="<?= number_format($user->weight,2) ?>" required>
                            <span class="bar"></span>
                            <label>Weight</label>
                        </div>

                        
                    </div>

                    <div class="col-md-6">
                    
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input type="text" class="form-text" id="edit-lname" name="" value="<?= $user->user_lname?>" required>
                            <span class="bar"></span>
                            <label>Lastname</label>
                        </div>

                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input type="text" class="form-text" id="edit-contact" name="" value="<?= $user->contact ?>"required>
                            <span class="bar"></span>
                            <label>Contact Number</label>
                            <input type="hidden" value="<?= $user->contact ?>" id="edit-contact2">
                        </div>

                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input type="text" class="form-text" id="edit-height" name="" value="<?= number_format($user->height,2) ?>" required>
                            <span class="bar"></span>
                            <label>Height</label>
                        </div>

                    </div>                   
                    <div class="col-md-12">
                        <button class="btn btn-info" type="button" id="btn-editprofile" value="Submit">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <div class="col-md-12" style="padding:20px;">
        <div class="col-md-12 padding-0">
            <div class="col-md-8 padding-0">
                <div class="col-md-12 padding-0">
                    <div class="col-md-12">
                        <div class="panel box-v1">
                            <a href="<?= base_url()?>user/myclass" class="ripple">
                                <div class="panel-heading bg-white border-none">
                                    <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                        <h4 class="text-left">My Current Class</h4>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                        <h4>
                                        <span class="icon-user icons icon text-right"></span>
                                        </h4>
                                    </div>
                                </div>
                                <div class="panel-body text-left">
                                    <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                    <?php
                                        if($classes){
                                            foreach($classes as $class){
                                            ?>
                                            
                                            <h3><?= $class->class_name ?></h3>

                                            <?php
                                            }
                                        }
                                        else{
                                            ?>

                                            <h1>None</h1>
                                            <?php
                                        }
                                    ?>
                                    <!-- <p>Current Workout</p>
                                    <p>Current Workout</p> -->
                                    <hr>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                        <?php
                                            if($classes){
                                                foreach($classes as $class){
                                                ?>
                                                
                                                <h4><?= $class->day ?> ( <?= date("h:iA",$class->start_time)?> - <?= date("h:iA",$class->end_time)?> )</h4>

                                                <?php
                                                }
                                            }
                                            else{
                                                ?>

                                                <h1>None</h1>
                                                <?php
                                            }
                                        ?>
                                        <hr>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="panel box-v1">
                            <a href="<?= base_url()?>user/schedule" class="ripple">
                                <div class="panel-heading bg-white border-none">
                                    <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                        <h4 class="text-left">My Current Workout</h4>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                        <h4>
                                        <span class="icon-user icons icon text-right"></span>
                                        </h4>
                                    </div>

                                </div>
                                <div class="panel-body text-center">
                                    <h1></h1>
                                    <?php if($workout) { ?>
                                    <h1><?= $workout->name ?> - <?= $level?></h1>
                                    <?php }else { echo '<h1>None</h1>'; } ?>
                                    <hr>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>