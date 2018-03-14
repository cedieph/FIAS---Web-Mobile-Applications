
<!-- start: Content -->
<div id="content">
    <div class="col-md-12 padding-0">
        <div class="col-md-12 padding-0">
            <div class="col-md-12 padding-0">
                <div class="panel box-shadow-none content-header">
                    <div class="panel-body">
                        <div class="col-md-12">
                            <h3 class="animated fadeInLeft">Workout Classes</h3>
                            <p class="animated fadeInDown" style="line-height:.4;">
                              Gold's Gym Acropolis
                            </p>
                        </div>
                    </div>
                </div>
            </div>
                     
            <div role="tabpanel" class="tab-pane fade active in" id="tabs-area-demo" aria-labelledby="tabs1">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <div class="col-md-12 tabs-area">
                            <div class="liner"></div>
                            <ul class="nav nav-tabs nav-tabs-v3" id="tabs-demo6">
                            <?php
                                $icons = array(
                                    '<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAE7SURBVEhL5ZS7SsRAFEDXztbCQtRGFCsrGx9gKyhY+T3+gl/gB4guqOAPWFpYCFZWPkrfYqHi45xsBmZGVpI1FuKBw2YmN3Mn90629W9ZxsvSJSea5gI/Ss+daJpfT2BZTOLii040wRQe4QuuYx82xjReYyiLrmEjzOIdxovrO67ij3DnD5gv/lb+PuEc9swh5osf4CSelmOT3UTW4gzjxXewH2UETzC+r7VYwVsMDx/jIMYMZNZmCDcw1H0fe2YUt9HGahsnUGbQBK/FqMN38V+wpp51P6Rd3Cuvr3AYJZRKqsQnbOEzxsduHn1osxilCarEJzyiO8lxZ/edyyRBlfgEa+jNnG4JqsQn2CBfz9cMLKBzNjKnbnzR/dA0d6GeGL/OMcypG19g922Qr+gfnDsZx27Ujf9ztFqftg2Is7+CiL0AAAAASUVORK5CYII=">',
                                    '<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAFFSURBVEhL5dS/K4VRHMfxJ8SCCIuBusmgTGYxWEw2tvtXoDvcOzJL2ZitTPIjLJLFYpLJj5SMUgrx/pzn+eb05F71+G73U6+evqen7znPOefepOkyjEO8ZM8huOYIXxFN4hqtPJ5AtWvyX7AP12jPD6CV6/nbGYxnT/e0oIZPVDRQL/04wQdsK54xiAto9RsowdKHPejddyyjblZgjc0qqrkxLWAbC7jNxh4wiYa5hl6eClWadjwibv4a1aIDH0DDjEEvP6FVA1nKiJutoRdLOIO+TmfwZ2wbNkP1k0tY8zt0olCOoSazoUozDWsuW9DqC0XbooYdoUqzg3gCecMu4nMqlBHoXucnMKf4V9aRb6oJr6BzGkXh9MD+3G6gCzCDbrhkEWquOz+hAc+0wX6duvPumYea36NLA945hyaYC1UTJ0m+ASNTbmrQZuFuAAAAAElFTkSuQmCC">',
                                    '<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAD9SURBVEhL7dI9agJBAIbhDZGEWFqmEySFRSxNZ+sPuYDgBSxSpwrkEjZaaGeXSjyAZ9AmpohGOxEhEJCAvp86MGy2WMctAu4LD+i4zuzsrBd3nlUwwxQlDfi6xO3+o1uaeHPwqQGrC7Qxx70GXPpC0AJJdKHxFfJwqgxNPEERmriKd2jybxTgL4E6XnbfQlbDAmZHenwP8KcbGULXjDUQJh3kL8zkTaRgl0Uf5poPPCJUdzB/lAZ0yEpv0jPW0G8/eMUNjqoD/yJpDKwx7SADp67wBnsR+66fYHblnBbpwV5khBwi6xotLKHD1qv7/7IfQRT+FHTRKeLOI8/bAmsFaeHyilWhAAAAAElFTkSuQmCC">',
                                    '<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAJZSURBVEhLzdVJqE5hHMfx1zxb3FJiIaEMxUJdw86QsYTsRZkW4lJKFMmQDJEiopQkWZCNhZSxkBRWLEhIklJKZr7f4/nr3Mc5791Y+NWne57/+Z/3nul5TuN/yEysR6di1HF6YSMmFqOUATiAKcWofZ7gJ+YXo46zCfbfK0YpG2DxBnpiM45iFI7AfZdQTiuOow1dLJDOeAr7D1mInIZFD9iWtvUc49P2dwyF6Yv3iL6VMNMQtbEWIo9gcTnOpG3Fj35O48Uw1qJHe9EdD9L4Lv7Eh/cV7liLCXiHH9iBE3DfBwxC5CSsv8QI2OtYM9AuD+EOz3gFPJuBmJ5q7luHPGOwEPvwDfZdxF8ZjrewwTN/hrgqeeldERkNb0PsD5/g1VRmKuJel/kPJyPilb1A3qfDaJolyA+6g0hv3EbeE1ajaXxL8oOcgJF4kF6V9z3v9XnUphtikpQtgnESvYG1LXBm573DUJuqAzQOZhIc+yD7w39S7vOlaEFtdqJ8QDgGE2vMefSAszzv3YrabEc0+jY4sdz2zEbCdekUvCIfZvSehVflthPUZaQyqxAHzUP5gbt8RHyTXsO6f/shFkstQ2VmI5qWWiBXET8UWYP8x1xN45YdtFAVb0Ec6BkZ13TH14rR77ht7TFimTZXYP1cMaqIXyLfb5t8xz34YxrvhvH+foG1/RZKiSX/ejGqySvY5ErpmuK2FsDMRdS8peXsgXW/gLW5BZsuYFba1mCY+Bi5ZvWxUIpLvft8k2rjVL+POXDSXMYuRPxM+lz8sTxDcBNN58I/TqPxC5Ky7ZfFyPZBAAAAAElFTkSuQmCC">',
                                    '<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAFISURBVEhL3dWxKwZxHMfxk0H+ARGbjd1GNqGUgUUmGUTZmJTN7h8gKVImhUHZzAazARlElEkK7/fvuSfXdQ93z3PP8nzq1fX9Xvf7Ps/vubsnavlM4iE2YaPs3OM7dmej7DR9gNviEBcfs9GMDGMDR7jCJtpRStZQ3aKkA3RhBieoa2A/PpBe/DWjN4fCcUvSC2kAZ3D4LZaQK53YwTzW8YV3pAfUnXGkF1vO6NWK32oRbaHKSA9WcBybhsk7oHreOy53/DTJxVUrnvPHvg5VziygyAAzEh//TR/e4IXeKbUGDOIQfw3PzD686AJu1XNc9yIZb1X7j6EqEN8/XjgVqijag/U5kk/uLi4xFKoC8U5ywe1QVbbsCfa2bDSaUbjYCzpsEHuf8CH0PdRwbuCQ2VBVsgrfR6X8w/lkOuA0VL/pjo8tnyj6AcQCcfvYLfxQAAAAAElFTkSuQmCC">',
                                    '<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAACoSURBVEhL5ZDBCcJAEEXXlCDYhgebELQBmxKrsALrCPagHvRiC/ofZmEO40FnFgJ58EjyCf8nWybFVt4GNwTZXOVr8EKQTfMBjoURytcEo6QeQdSveC//4894JZiGV45peOWYhleOaXjlOJcpeOV4lgsZphZW+PJekp0IotiBTq7kXpI9ZBg78JT1GQ8yjB3gepdHuZP8URg7sJSzz20edqAJzQfGSilvNHFvo5HaubsAAAAASUVORK5CYII=">',
                                    '<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAF4SURBVEhL3ZQ9LwVBFIY3ohE6DVGI0i9QkCgUFETiF+iIjt5PkKglShFRUGkJCSoaokDjK1Eo/AAfz7t733vHZO0dcqv7JE/2zMzZc+7szt2srfiqKXbxAE9wQxOtIGxwhB5faSJiBp/wFlexB5sSNjhEj180EfGIXpfPOIeVOHkQR/AOVXwWY/7V4AKV/IDDmqhgGtXkT4+oF88x/GXyGruwJXSjTk/cZA3NJGqXXtNj1I6S6cSwuPzAMRTx85dvOI+6N4m4QJmmbE1WEieflcwZj++DOFz/gU7DIm7iK5Ylx3M6SRrrEVXSgce4hy5i+9B4zqiwxmpU+Q6m8LII60XsDbqJ54yKJu1CH7j9IqwXUVEVV6w/ovBamZW7WK4pfIMYRcU6nsJrv9n0XQgniyVUvJ2PGjjnE99xAJMJG+yg4oV81MA5W8E1Gd8sTlFx/AF0Tj9qB9rJOCYRNhBDtWtImLOCitfzUQJxgzLCHJ2ciSJsL7LsG8FAuTnttEB6AAAAAElFTkSuQmCC">'
                                );
                            ?>            
                                <?php 
                                if($class) { 
                                        $cnt = 0;
                                        foreach($class as $c) : $cnt++;?>
                                    <li class="<?= $cnt == 1 ? 'active' : '' ?>">
                                        <a href="#tabs-demo6-area<?= $cnt ?>" data-toggle="tab" title="welcome">
                                            <span class="round-tabs one">
                                                <?= $icons[$cnt - 1] ?>
                                            </span> 
                                        </a>
                                    </li>
                                <?php endforeach;
                                    }
                                    else{

                                    }
                                ?>
                            </ul>
                            <!-- BODY -->
                            <div class="tab-content tab-content-v5">
                                <?php
                                    $images = array(
                                        'cycling.jpg',
                                        'definitions.jpg',
                                        'goldsmix.jpg',
                                        'retro.jpg',
                                        'streetdance.jpg',
                                        'yogilates.jpg',
                                        'zumba.jpg'
                                    );
                                ?>
                                    <?php 
                                    if($class) { 
                                        $cnt = 0;
                                        foreach($class as $c) : $cnt++;?>
                                            <div class="tab-pane fade in <?= $cnt == 1 ? 'active' : '' ?>" id="tabs-demo6-area<?= $cnt ?>">
                                                <br/><center><img src="<?=base_url()?>pics/<?=$images[$cnt - 1]?>" height = "300px" width = "450px"></center>
                                                <h3 class="head text-center"><?= $c->name ?></h3>
                                                <p class="narrow text-center">
                                                    <?= $c->description ?>
                                                </p>

                                                <h5 class="head text-center"><span class="badge badge-primary">Levels</span></h5>
                                                
                                                <p class="narrow text-center">
                                                    <?= $c->levels ?>
                                                </p>
                                                <h3 class="head text-center"><span class="badge badge-primary">Benefits</span></h3>
                                                <p class="narrow text-center">
                                                    <?= $c->benefits ?>
                                                </p>
                                                <br/>
                                            </div>
                                <?php endforeach;
                                        }
                                        else{

                                        }
                                    ?>
                                <div class="clearfix"></div>
                            </div>
                            <!-- //BODY -->
                        </div>
                    <!-- //TABS AREA -->
                    </div>
                </div>

                <!-- TABLE -->
                <div class="col-md-12">
                  <div class="col-md-12">
                      
                  <div class="col-md-12 tabs-area">           
                    <ul id="tabs-demo6" class="nav nav-tabs nav-tabs-v1" role="tablist">
                        <?php 
                            for($i = 0;$i<count($days);$i++){
                        ?>
                            <li role="presentation" class="<?= $i == 0 ? 'active' : '' ?>">
                                <a href="#tabs-demo7-area<?= ($i+1) ?>" id="tabs-demo6-<?= ($i+1) ?>" role="tab" data-toggle="tab" aria-expanded="true"><?= $days[$i] ?></a>
                            </li>
                        <?php
                            }
                        ?>
                    </ul>
                    <div id="tabsDemo6Content" class="tab-content tab-content-v6 col-md-12">
                        <?php 
                            for($i = 0;$i<count($days);$i++){
                        ?>
                        
                            <div role="tabpanel" class="tab-pane fade <?= $i == 0 ? 'active in' : '' ?>" id="tabs-demo7-area<?= ($i+1) ?>" aria-labelledby="tabs-demo7-area<?= ($i+1) ?>">
                                    <table id="datatables-example" class="table table-responsive">
                                        <tr>
                                            <th>Activity</th>
                                            <th>Start Time</th>
                                            <th>End Time</th>
                                            <th>Trainer</th>
                                            <th>Action</th>
                                        </tr>
                            
                                <?php
                                    if($classes){
                                        foreach($classes as $c) : 
                                            if($c->day == $days[$i]){
                                                $t = $this->model->fetch('trainer',array('id'=>$c->trainer_id))[0];
                                                
                                ?>
                                            <tr>
                                                <td> <?= $c->class_name ?></td>
                                                <td> <?= date("h:iA",$c->start_time) ?> </td>
                                                <td> <?= date("h:iA",$c->end_time) ?> </td>
                                                <td> <?= $t->trainer_lname . ', ' . $t->trainer_fname?> </td>
                                                <td>     
                                                    <button type="button" class="btn btn-info btn-addclass" id="btn-addclass" data-id="<?= $c->id?>" data-trainerid="<?= $c->trainer_id ?>">Go to Class</button>
                                                </td>
                                            </tr>
                                        
                                <?php 
                                            }
                                        endforeach;
                                    }
                                ?>
                                </table>
                            </div>
                        <?php
                            }
                        ?>

                        </div>
                    </div>
                </div>

                <!-- //TABLE -->


            </div>
        </div>
    </div>
</div>
          <!-- end: Content -->
