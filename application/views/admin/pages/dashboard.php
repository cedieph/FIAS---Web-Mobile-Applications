
<div id="content">
    <div class="tabs-wrapper text-center">             
        <div class="panel box-shadow-none text-left content-header">
            <div class="panel-body" style="padding-bottom:0px;">
                <div class="col-md-12">
                    <h3 class="animated fadeInLeft">DASHBOARD</h3>
                    <p class="animated fadeInDown">
                        Gold's Gym Acropolis <span class="fa-angle-right fa"></span> 
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12" style="padding:20px;">
        <div class="col-md-12 padding-0">
            <div class="col-md-8 padding-0">
                <div class="col-md-12 padding-0">
                    <div class="col-md-6">
                        <div class="panel box-v1">
                            <a href="<?= base_url()?>admin/user" class="ripple">
                                <div class="panel-heading bg-white border-none">
                                    <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                        <h4 class="text-left">Visit</h4>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                        <h4>
                                        <span class="icon-user icons icon text-right"></span>
                                        </h4>
                                    </div>
                                </div>
                                <div class="panel-body text-center">
                                    <h1><?= count($users) ?></h1>
                                    <p>User active</p>
                                    <hr>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel box-v1">
                            <a href="<?= base_url()?>admin/trainers" class="ripple">
                                <div class="panel-heading bg-white border-none">
                                    <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                        <h4 class="text-left">Visit</h4>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                        <h4>
                                        <span class="icon-user icons icon text-right"></span>
                                        </h4>
                                    </div>

                                </div>
                                <div class="panel-body text-center">
                                    <h1><?= count($trainers) ?></h1>
                                    <p>Trainer active</p>
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