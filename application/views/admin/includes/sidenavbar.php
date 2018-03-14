
    <div class="container-fluid mimin-wrapper">
  
        <!-- start:Left Menu -->
            <div id="left-menu">
                <div class="sub-left-menu scroll">
                    <ul class="nav nav-list">
                        <li><div class="left-bg"></div></li>
                        <li class="time">
                        <h1 class="animated fadeInLeft"><?= date("H") ?></h1>
                        <p class="animated fadeInRight"><?= date("D, F j y") ?></p>
                        </li>
                        <!-- DASHBOARD -->
                        <li class="ripple">
                            <a href="<?= base_url()?>admin"><span class="fa fa-home"></span> Dashboard</a>
                        </li>

                        <!-- USER MANAGEMENT -->
                        <li class="active ripple">
                            <a class="tree-toggle nav-header"><span class="fa fa-users"></span> User Management 
                                <span class="fa-angle-right fa right-arrow text-right"></span>
                            </a>
                            <ul class="nav nav-list tree">
                                <li><a href="<?= base_url()?>admin/user"><i class="fa fa-user"></i> Users</a></li>
                                <li><a href="<?= base_url()?>admin/trainers"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAIYSURBVEhLxdVLSBZRGMbxsSzNqCBS6YLYRiowKlwkGYFQJGU7wRYVVCuJCAuCwnRRIW2CiCIICguiFuLGC0VIhhsJKhK7ItKFFCIptY2I/Z/zzshM30VlPuiBH75n1Dkz75w5480z2ciyMrPZiKf4g3HcRwEykvX4ihroDvJwBgNYgth5hONWRnITZ62Ml0GstTKSarRaGS+vsM3KSHRXt62MlxNog/ofZDneYYcbxYyW5R28gHrehE84jYymEpdwAaU6EDcLUYV66MqTOYlyzDsb8Aad0BWrfoDgxN14govo8+uVmFOW4gMOupHlMB5a6Z7Je2x2IxtfRocbzSHXfeHk4jtWYw96EM4CPMcxN0qTXRjCMizCKgRpRiO0ZGt1wM8a/6faOox1bpQkOdDa1oNVbuGulS7F0Ak+Y7EO+HmNOiu9c0j5dp/HPSvdxvYTj93Iol5/wRi26oCfEei4lq7u+iX2IiHfoNstgnbP/dAfB6nANH5DC0HRUv6FA+iHuqAOdCES3fIP6B82QRPoKvRgg2hCPZ/w/lOIjzgKrbwVKEH4wmbSgqtWetuhSSYR/oKpDvd/CyagSfRw9Tu19RQSog+Jlt8VN/K8nVBL8t0oeXZjFMHJ26E7DF9UJOqtJrmGfZiCWpYqh6A2alfVi5b25EE0yQ3o9X8LbXKpon2qF8/QgFlP/m/07S2zMmmOQF+2/xXP+wvQRGT5fAwUDAAAAABJRU5ErkJggg=="> Trainers</a></li>
                                <!--<li><a href="<?= base_url()?>admin/admin">Admin</a></li>-->
                            </ul>
                        </li>
                       
                       <!-- WORKOUT SCHEDULES -->
                        <li class="ripple">
                            <a class="tree-toggle nav-header">
                                <span class="fa fa-calendar-check-o"></span>Workout Schedules
                                <span class="fa-angle-right fa right-arrow text-right"></span>
                            </a>
                            <ul class="nav nav-list tree">
                                <li class="ripple">
                                    <a class="sub-tree-toggle nav-header">
                                        <span class="fa-plus fa"></span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHuSURBVEhL3dTPi05RHMfxx0yM+QsksVCU2WBFCmU/zcISYTOpWc0KOys1kV81pNSMwUZYUFiYBpNh5VehaBZKUmIGCyb58X7f85xxnnOfZ5pn7OZTrzrne+49995z7z2VeZ/FOIT3+Jx5hQNYhKayALtwG1/xB3dxNvMCjnnMLeyE586YdtyAJ77GCXSiXlrQjTPwCT3nOtrQMEfxGz2Id9OBtaFZk/VYE5qVhTgJL9JnoV5cyy8YKnr/shU/sK3ohdiewpaiF+INPYFzeMFSVsE7cP3T7IP1CayomqzWHEtzHNadq5TVcHBH0QtpxSNY1xVcTfqOeUzMEVh3rlJcUwd7i17IacTJ9B0uTVrrR8w5WNtQ9LIM4idWFr2QdCJ9gkuV12M2wb5zlfIO90JzOvlET/EsqymNP+HL0KyNj55eeTPyic7jQlaTyxvjH/42NGvzGN9wGJ7wAflEfmG7s5qG4dIOVPujKGUZfIJfyCeQP+ASLK226x2ja1iOhlkHv4znSE8cQYztWPeGfDd+whsx6zyAn6Uv3om6EGPbmmNjuISmM443cOlOwc0txrY1xy4ifbpZ5yE+wh12ptzBzdBsLnvhMlxGoy34IDxme9GbQ47BCe5jf8alccwN7r+yB/W2B3fUdN+al6lU/gKClbJY6cVCVgAAAABJRU5ErkJggg=="> Body Building
                                        <span class="fa-angle-right fa right-arrow text-right"></span> 
                                    </a>
                                    
                                    <ul class="nav nav-list sub-tree">
                                        <li><a href="<?= base_url() ?>admin/fullbody"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGeSURBVDhPndRLKEVBHMfx41lWykYWsrHxKBtlJVJeC0V5ZEGUJCWFKCuvEOWRhVJSkiWWrLBDyMqWkoWyYOOV4vs7d6amW+fee+6vPjXnf+bMecyZ8cgI7nCNHBVCpgT3uEK7Cp/4M3pVCJkl2Ov1UN6tU1hHLsZwgC70YwgDpt2NC+jm2TiBvX4f3o5TOEcjTvEKDaRBetBn2qNQ3yOU48Ucyzi8YafwjhToyb6RjugUQH317fJM26qDV+UUpBC1pl2ENHTA70zqoXNZaDBtS5/L/w5fpiClsE+h7zZp2tKMGTxAaYU996iCTROmUOMfRV77CYfYgL1oEJfYhaJ+bZhFhQqxooF+oZtp4lbRAg2sQUJHr/4DTdQatvCBZ2QiqczDvq6lHznpFCN6QP2LSScVb3AH1GvvQb+MfqlQWYE7WLRjJJxl2AvPUAbN8jS0NFXXOk4oC7CDbSIDbuxq0WYSN3NQZ63loAnQTqM+Wkkxo9WijtpBKlUIiF2O1f5RQCagTjfIVyFG7GT5m0FQFqHVoF0kXjqxHWm68bx/NgiHdwPMQN4AAAAASUVORK5CYII="> Full Body Workout</a></li>
                                        <li><a href="<?= base_url() ?>admin/arm"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAEtSURBVDhPtdS9S0JRGMfxk0OEUyAEgaBBL1OTEOQkOKkQtLQ0NDSF0b/QFv0FvQ1tNTm7C02KkzXU0li4VENUlNb3uWA8Hs+9Ryx/8BnOc899OC+Xa8aZJNaRCEZ/zA4+8I0H5DByNiGNtFdMYaS0YDesYAJhyeAYV6jjHAsI8gVpco0jHCKOsJTRgb2IJ8zht1CTgSezeIdupJ3CvKjCihQiUoRuYLuHuVWFJlzbTWEN8jXoBrY3BFvVxSomIZHml+hCzwkj92BOVKFHblByBvtZlF2YbVXokRXl8alqPheIwaTh2tKjo+byDFlUXxpwTR7GAQayB9dknzamMRC51Tu4XoqyhdAsQ87D9aJNznwf3qzCdxk3kP/m0JnBBhYxjywKKGEJUX+h/44xP6sdwmjyp5WGAAAAAElFTkSuQmCC"> Arm Workout</a></li>
                                        <li><a href="<?= base_url() ?>admin/leg"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADiSURBVEhL5dQ9C0FRGMDxa6CsXiZfwqL4EmYlUkaLL2K3KIOBwXwnmWQQk1K+gFKykXf/R5066Vqc5073X7/BGZ6ny3W8yBTDAK8fZnCqjqDB4oYC/i6JHYKG31GBU00EDT+jCud8fA/fIA/nSnjCHt5BAio1YA+fQrUMrjALLihCNXnH7aeYQLUu7AXyaqrWgr3gCNXSkO/eLJhDvTHMgqEcaFeDWdCXA+1SkB9XFsjThNIKsmD9+RRC5k56ICsHmuVgX9ltOBdHGSOcYIaLJZxbYA/5DxwgV/QWsqyHSOR5bxtOX2o1t+eDAAAAAElFTkSuQmCC"> Leg Workout</a></li>
                                        <li><a href="<?= base_url() ?>admin/core"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAIoSURBVEhL5dVdaM1hHMDx/6zJhWhepqSRceFqWHmtZcm8zC5c7EI24U5caKZEudtLNkTuFDdTQsuGltWkoV1TQ5GQ5GJauRk1L9/v+e9Zxzn/zdm55Fefev7n/7z+nuf/nOi/iJnYjtO4hAtowjoUYFqxD3PiYjQbZzCCX5N4j0MohLEC2+JiduzFc8zCKrxBUqdJHmI+luID1uCPKIMvlsPOp5r1ZIYwF67gNZzoRFzHUZgWXyZ1kIt7MK6hMS7Gs38LN9OcJzWcjt0wVR9RhOg4zsIB8knNWMbzExjuS5WFPlSiGukVTZXxEj4fhnldjKv4AWe7CHb0Hdbz9xIcQytSHVnpFNIHaMc8tIw/O8BJdGITPBQez684AdMc2u7ATtxCqsIMXESooM1ogx+Uzw6wDObXmf1EA0pxA+lt/TZWI5UuB3Am5xEqfIaD1sOv1Q1zAJftCsoxjKcYhKfvFUL7/ajAI6Q+KFPkZocKV7ABN+FKLsMBtqAOLt8Uee47kHm83RPr3EbUhVqsR6jgeXZ0ywPowQOYMgf/At89gycw1NU3hGvGfY2OwEvMVLxDqJivOzBM30YLC/AJjurmJDXKlUd0LbyLvDombltz3Aw3ux9JjXPhQTF6cSAuxlEMr96VcEUvkNTBVO7CCe6B+5b1X2HnpsnwdNxHUkeZTMs5hP+EJVgYF/8eNXgMO8nseBTdyLr78wnvll04CD+irQir/acjin4DUUgU9CUoT60AAAAASUVORK5CYII="> Core Workout</a></li>
                                        <li><a href="<?= base_url() ?>admin/butt"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGLSURBVEhL5dS/K4VRHMfx60dKlN8SssiEGCSDiSSzSMpABn8CWSiJUaxKmIUkg4kMBhSKTYoyGaSUH/H+PPc5+Xou7nPrmfjUq3vOuefXfZ5zT+xfpQfz6PRqEacL775XNCDSjMEtIAOINDW4hya/RjEiTwnakefVIko9DnCMbjWYZPmUHKTFi6nlCPbZLyEfQ7jBBpQ16LuU0gw7ufPkf95Cj0w7P4XeUTpCZxF24h2sQAssowCZmIHrU4dQ0Yt8hF2gFYrbpfocwvYZQajonNuBlwhGuw9uYhWhMgg78BnDCGYXtt8VQiUb67CDZRb2OE4i2KcSSePOdwu2YScYh0sH7HfSh6TRmV6A200TdEVogmk1+MmFLj+7gMb9mnK4yUbV4Gcfauv3ap8J/hlP8GNKcQF1vEMRXNwCjV7tM3OwC+gXfXtf6TI7gzrtoQI2WkCDdQBsemEXkDYkZAJvmILOeDBbOI8Xv6QML9DED9hEIRKixtp48dtUoTpeTIhuXT26DK/2hxKLfQADrIMa7lnJswAAAABJRU5ErkJggg=="> Butt Workout</a></li>
                                    </ul>

                                </li>
                                <li><a href="<?= base_url()?>admin/cardio"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAJOSURBVEhLrdXZqw5xHMfxOfZc2LKVshSFiEjW4gI3IjuFLDf2FFmyXUgoy7FfoBRJtiJcyL4rEXeKf8B/4f1+Zr7TnOd55BzPfOrV+c05M/Pbvr85SRvShGa8xguMQ6lZgMNpM+mLl2mzvGzDwrRZiTMpNYPwEc7kCE6ilLgcU7AE23ENi+CeNJT1eIc7OIpN2Ag3+gN2oB3+K0PxGDHK7nAmkfZwNg/QDVbUFgxHq3IGM+BDn/AbVxAd9kJXzMYTnMPKrP3PdIRLMxjPMQFnUcx52PEQOJu5cDb7YJzxauysXFXFB+zgM8ZiF+ajmDcYhfvwPBzCMHjfbTzDZnxF3XSGozCP0DNtVtIFviDiRl+Ag9oLZx55m/1MesD1dhTLMQ1T4cFytP7New5gMjwPZj8G4m7lqjY1HVg90YG1fyq7jg7ihb/gUnrdATfxNPMNP/AT1/HXWJZ+DqycTnATR8O4L3ZaL2uxBnvgQPP4EpdoEqyKh4gbnInr6wHrA0ft0g1AdbxvFlp00B9fYK0fg6c0RrsMMdWJsHQtZffoMqpjCftsiw5c7xsYj5lYjA3wu+PSeKgill8sjwerd9rMcw/+rmaJ1uEE3DhfsAIxi2IcvYfMvdkKi6CYV9nPmg7akkvwi2oH7tVunIaH7DtM3Q48UCPhMq2C1eKDt+C/SUfnyfUEe7g8F1bNHIyBexnfq7yD6bAc5XpfxEG4ZPUebG3yDt7D8nTUjfBT3a/Qzjuwti05y7MRS+GXN9pXMQLJPNhJHPUyuE/HkyRJ/gDcTo2OG/bd9gAAAABJRU5ErkJggg=="> Cardio</a></li>
                                <li><a href="<?= base_url()?>admin/diet"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAIESURBVEhLrdVNSBZBHMfxSSMTKk9mIQSBh15IRMsIgrzYoVcICiK6mFBQEJ2kKC2CoqsIoRZRRC+GGBEVdOiFziEVSUioWEIHvUZ46fub/2zsyiM7S88PPvCflWed3Zn5r8vJSUzgvB9l8wqj2O1HkanGMdzHR7zHBiyWNozjHfrRjkqUzB5MYwhHsAUVyMtybEUHXuMLNiKT7fiOzX70f9kP3Wu1H4W8hP5QrnTjqpWWOSy1sixpwlsrnVsG/YNyZh0+W2mZRZWVbgdWWVkoDUgWdxveWOncEnxDox8514dOKwvlJk5Y6Y7jsZXOHcULK320l/+9vwXRbltvZSZ6+hms8SM7T9pJmzR4ir0qQi7iD65hhS6ErMQnPEH6MNVhGL+Rvs8FXFahk7hWRcgD9GAAP/Acd0KtH+iUj2EQOsFT0M10vQtJDuKhCv2wRkWI1uOSlX6HqR0cRr0uhOhA6ppOsNZQGYG/YchOaHK+kSUtoQXz0GyK5iu0G5PJ6iRnNotmq3d8Gj8R04eS6OkmcQN6xSWjk6z3pnyAzkNszqAXWvyolqM1SC9YXh5B3Tg656CGFZtn2GVlXK5DaxGb29A3JDp3ccjKqFyBnjo696DvcWxu4ayVcWnFL+izmZcD0Bat9aMC2QedcjW/xXIKahUxEymZZmg9SkXNT00u3UIWxLm/IOhXcK5niPwAAAAASUVORK5CYII="> Weight Loss & Dieting</a></li>
                            </ul>
                        </li>
                        
                        <!-- WORKOUT CLASS -->
                        <li class="ripple"><a href="<?=base_url()?>admin/classes"><span class="fa fa-list-alt"></span>Workout Classes</a></li>
                        
                        <!-- WORKOUT EXERCISES -->
                        <li class="ripple">
                            <a class="tree-toggle nav-header">
                            <span>
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAB0SURBVEhL7csxEoBACATB+/+nVTIY91hM1akioGjW37c70uyamFLGk2ca5yXuHmicl7h7oHFe4u6BpvU7PJ2Ie4nHvE8m4l7iMe+TibiXeMz7ZCLutx7hKxrnJe4eaJyXuHugcV7i7oHG+RKfVRPz9+7WOgEF2KNdl+0rQwAAAABJRU5ErkJggg==">
                                Exercises
                            </span>
                            <span class="fa-angle-right fa right-arrow text-right"></span>
    
                            </a>
                            <ul class="nav nav-list tree">
                                <li class="ripple">
                                    <a class="sub-tree-toggle nav-header">
                                        <span class="fa-plus fa"></span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHuSURBVEhL3dTPi05RHMfxx0yM+QsksVCU2WBFCmU/zcISYTOpWc0KOys1kV81pNSMwUZYUFiYBpNh5VehaBZKUmIGCyb58X7f85xxnnOfZ5pn7OZTrzrne+49995z7z2VeZ/FOIT3+Jx5hQNYhKayALtwG1/xB3dxNvMCjnnMLeyE586YdtyAJ77GCXSiXlrQjTPwCT3nOtrQMEfxGz2Id9OBtaFZk/VYE5qVhTgJL9JnoV5cyy8YKnr/shU/sK3ohdiewpaiF+INPYFzeMFSVsE7cP3T7IP1CayomqzWHEtzHNadq5TVcHBH0QtpxSNY1xVcTfqOeUzMEVh3rlJcUwd7i17IacTJ9B0uTVrrR8w5WNtQ9LIM4idWFr2QdCJ9gkuV12M2wb5zlfIO90JzOvlET/EsqymNP+HL0KyNj55eeTPyic7jQlaTyxvjH/42NGvzGN9wGJ7wAflEfmG7s5qG4dIOVPujKGUZfIJfyCeQP+ASLK226x2ja1iOhlkHv4znSE8cQYztWPeGfDd+whsx6zyAn6Uv3om6EGPbmmNjuISmM443cOlOwc0txrY1xy4ifbpZ5yE+wh12ptzBzdBsLnvhMlxGoy34IDxme9GbQ47BCe5jf8alccwN7r+yB/W2B3fUdN+al6lU/gKClbJY6cVCVgAAAABJRU5ErkJggg=="> Body Building
                                        <span class="fa-angle-right fa right-arrow text-right"></span> 
                                    </a>
                                    
                                    <ul class="nav nav-list sub-tree">
                                        <li><a href="<?= base_url() ?>admin/arm_exercise"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAEtSURBVDhPtdS9S0JRGMfxk0OEUyAEgaBBL1OTEOQkOKkQtLQ0NDSF0b/QFv0FvQ1tNTm7C02KkzXU0li4VENUlNb3uWA8Hs+9Ryx/8BnOc899OC+Xa8aZJNaRCEZ/zA4+8I0H5DByNiGNtFdMYaS0YDesYAJhyeAYV6jjHAsI8gVpco0jHCKOsJTRgb2IJ8zht1CTgSezeIdupJ3CvKjCihQiUoRuYLuHuVWFJlzbTWEN8jXoBrY3BFvVxSomIZHml+hCzwkj92BOVKFHblByBvtZlF2YbVXokRXl8alqPheIwaTh2tKjo+byDFlUXxpwTR7GAQayB9dknzamMRC51Tu4XoqyhdAsQ87D9aJNznwf3qzCdxk3kP/m0JnBBhYxjywKKGEJUX+h/44xP6sdwmjyp5WGAAAAAElFTkSuQmCC"> Arm Workout</a></li>
                                        <li><a href="<?= base_url() ?>admin/leg_exercise"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADiSURBVEhL5dQ9C0FRGMDxa6CsXiZfwqL4EmYlUkaLL2K3KIOBwXwnmWQQk1K+gFKykXf/R5066Vqc5073X7/BGZ6ny3W8yBTDAK8fZnCqjqDB4oYC/i6JHYKG31GBU00EDT+jCud8fA/fIA/nSnjCHt5BAio1YA+fQrUMrjALLihCNXnH7aeYQLUu7AXyaqrWgr3gCNXSkO/eLJhDvTHMgqEcaFeDWdCXA+1SkB9XFsjThNIKsmD9+RRC5k56ICsHmuVgX9ltOBdHGSOcYIaLJZxbYA/5DxwgV/QWsqyHSOR5bxtOX2o1t+eDAAAAAElFTkSuQmCC"> Leg Workout</a></li>
                                        <li><a href="<?= base_url() ?>admin/core_exercise"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAIoSURBVEhL5dVdaM1hHMDx/6zJhWhepqSRceFqWHmtZcm8zC5c7EI24U5caKZEudtLNkTuFDdTQsuGltWkoV1TQ5GQ5GJauRk1L9/v+e9Zxzn/zdm55Fefev7n/7z+nuf/nOi/iJnYjtO4hAtowjoUYFqxD3PiYjQbZzCCX5N4j0MohLEC2+JiduzFc8zCKrxBUqdJHmI+luID1uCPKIMvlsPOp5r1ZIYwF67gNZzoRFzHUZgWXyZ1kIt7MK6hMS7Gs38LN9OcJzWcjt0wVR9RhOg4zsIB8knNWMbzExjuS5WFPlSiGukVTZXxEj4fhnldjKv4AWe7CHb0Hdbz9xIcQytSHVnpFNIHaMc8tIw/O8BJdGITPBQez684AdMc2u7ATtxCqsIMXESooM1ogx+Uzw6wDObXmf1EA0pxA+lt/TZWI5UuB3Am5xEqfIaD1sOv1Q1zAJftCsoxjKcYhKfvFUL7/ajAI6Q+KFPkZocKV7ABN+FKLsMBtqAOLt8Uee47kHm83RPr3EbUhVqsR6jgeXZ0ywPowQOYMgf/At89gycw1NU3hGvGfY2OwEvMVLxDqJivOzBM30YLC/AJjurmJDXKlUd0LbyLvDombltz3Aw3ux9JjXPhQTF6cSAuxlEMr96VcEUvkNTBVO7CCe6B+5b1X2HnpsnwdNxHUkeZTMs5hP+EJVgYF/8eNXgMO8nseBTdyLr78wnvll04CD+irQir/acjin4DUUgU9CUoT60AAAAASUVORK5CYII="> Core Workout</a></li>
                                        <li><a href="<?= base_url() ?>admin/butt_exercise"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGLSURBVEhL5dS/K4VRHMfx60dKlN8SssiEGCSDiSSzSMpABn8CWSiJUaxKmIUkg4kMBhSKTYoyGaSUH/H+PPc5+Xou7nPrmfjUq3vOuefXfZ5zT+xfpQfz6PRqEacL775XNCDSjMEtIAOINDW4hya/RjEiTwnakefVIko9DnCMbjWYZPmUHKTFi6nlCPbZLyEfQ7jBBpQ16LuU0gw7ufPkf95Cj0w7P4XeUTpCZxF24h2sQAssowCZmIHrU4dQ0Yt8hF2gFYrbpfocwvYZQajonNuBlwhGuw9uYhWhMgg78BnDCGYXtt8VQiUb67CDZRb2OE4i2KcSSePOdwu2YScYh0sH7HfSh6TRmV6A200TdEVogmk1+MmFLj+7gMb9mnK4yUbV4Gcfauv3ap8J/hlP8GNKcQF1vEMRXNwCjV7tM3OwC+gXfXtf6TI7gzrtoQI2WkCDdQBsemEXkDYkZAJvmILOeDBbOI8Xv6QML9DED9hEIRKixtp48dtUoTpeTIhuXT26DK/2hxKLfQADrIMa7lnJswAAAABJRU5ErkJggg=="> Butt Workout</a></li>
                                    </ul>

                                </li>
                                <li><a href="<?= base_url() ?>admin/cardio_exercise"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAJOSURBVEhLrdXZqw5xHMfxOfZc2LKVshSFiEjW4gI3IjuFLDf2FFmyXUgoy7FfoBRJtiJcyL4rEXeKf8B/4f1+Zr7TnOd55BzPfOrV+c05M/Pbvr85SRvShGa8xguMQ6lZgMNpM+mLl2mzvGzDwrRZiTMpNYPwEc7kCE6ilLgcU7AE23ENi+CeNJT1eIc7OIpN2Ag3+gN2oB3+K0PxGDHK7nAmkfZwNg/QDVbUFgxHq3IGM+BDn/AbVxAd9kJXzMYTnMPKrP3PdIRLMxjPMQFnUcx52PEQOJu5cDb7YJzxauysXFXFB+zgM8ZiF+ajmDcYhfvwPBzCMHjfbTzDZnxF3XSGozCP0DNtVtIFviDiRl+Ag9oLZx55m/1MesD1dhTLMQ1T4cFytP7New5gMjwPZj8G4m7lqjY1HVg90YG1fyq7jg7ihb/gUnrdATfxNPMNP/AT1/HXWJZ+DqycTnATR8O4L3ZaL2uxBnvgQPP4EpdoEqyKh4gbnInr6wHrA0ft0g1AdbxvFlp00B9fYK0fg6c0RrsMMdWJsHQtZffoMqpjCftsiw5c7xsYj5lYjA3wu+PSeKgill8sjwerd9rMcw/+rmaJ1uEE3DhfsAIxi2IcvYfMvdkKi6CYV9nPmg7akkvwi2oH7tVunIaH7DtM3Q48UCPhMq2C1eKDt+C/SUfnyfUEe7g8F1bNHIyBexnfq7yD6bAc5XpfxEG4ZPUebG3yDt7D8nTUjfBT3a/Qzjuwti05y7MRS+GXN9pXMQLJPNhJHPUyuE/HkyRJ/gDcTo2OG/bd9gAAAABJRU5ErkJggg=="> Cardio</a></li>
                                <li><a href="<?= base_url() ?>admin/weight_exercise"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAIESURBVEhLrdVNSBZBHMfxSSMTKk9mIQSBh15IRMsIgrzYoVcICiK6mFBQEJ2kKC2CoqsIoRZRRC+GGBEVdOiFziEVSUioWEIHvUZ46fub/2zsyiM7S88PPvCflWed3Zn5r8vJSUzgvB9l8wqj2O1HkanGMdzHR7zHBiyWNozjHfrRjkqUzB5MYwhHsAUVyMtybEUHXuMLNiKT7fiOzX70f9kP3Wu1H4W8hP5QrnTjqpWWOSy1sixpwlsrnVsG/YNyZh0+W2mZRZWVbgdWWVkoDUgWdxveWOncEnxDox8514dOKwvlJk5Y6Y7jsZXOHcULK320l/+9vwXRbltvZSZ6+hms8SM7T9pJmzR4ir0qQi7iD65hhS6ErMQnPEH6MNVhGL+Rvs8FXFahk7hWRcgD9GAAP/Acd0KtH+iUj2EQOsFT0M10vQtJDuKhCv2wRkWI1uOSlX6HqR0cRr0uhOhA6ppOsNZQGYG/YchOaHK+kSUtoQXz0GyK5iu0G5PJ6iRnNotmq3d8Gj8R04eS6OkmcQN6xSWjk6z3pnyAzkNszqAXWvyolqM1SC9YXh5B3Tg656CGFZtn2GVlXK5DaxGb29A3JDp3ccjKqFyBnjo696DvcWxu4ayVcWnFL+izmZcD0Bat9aMC2QedcjW/xXIKahUxEymZZmg9SkXNT00u3UIWxLm/IOhXcK5niPwAAAAASUVORK5CYII="> Weight Loss & Dieting</a></li>
                            </ul>
                        </li>

                        <!-- MEAL PLAN -->
                        <li class="ripple">
                            <a class="tree-toggle nav-header">
                            <span>
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAFESURBVDhPvdS7LgVRFIfxQSORuHSeAQ/g1uM1tFReQCJunUqpk3gBCc+gU3oAt0ohQiH4vmTvyZqZ7WROwT/55czZs2Y5M2ub6r8zinlsJB6PYOhM4wgP+G65xyGs6ZVVPKHdqM2aFQyMBR8oNSixdgnFzOAZFr6nz5I33IXv/tIpdOIzy0WLuAjfs3NMwGwir/tMG3GaPuxc4EVjiE1v0lrOOPI5r21MfwH5pI5hYtMTF0K8i3iNW6rOGuJJ7cI49U94izmzuEWst0edUkOd4QXb8JZOcYlXtGsbDdu3nH3BZj4vbaW1Uu0c6vjX41AUm10lvzXtDMU4+lKz67Qmj0tN99GJmzNvbIt3EJtlrnkuN3RjT6KYZQz7r+f2GRibPqLUIPJNZG2v+Go6QHtQcm0PvV9fMU7O7bCeeNyZ5h+mqn4AQw+xMTRfXzMAAAAASUVORK5CYII=">
                                Meal Plans
                            </span>
                            <span class="fa-angle-right fa right-arrow text-right"></span>
    
                            </a>
                            <ul class="nav nav-list tree">
                                <li><a href ="<?= base_url()?>admin/request"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAACWSURBVDhP7ZTRCYAwEEO7hrqPAwj64YhO4odfDuAKuoEmoKWVUKytfwYelPQulB6c+VIVaEAbCXvY64nGBvaXsLcEVh1QhTEww6oHqigGZliFAhcwBeA962TgCIYTnq/CGqiB0L96ZaBrut58nu/QV73WzP5CRdIfKv6hxL1QkX0oT/ECsy+H1PW1ggJ4Slmw3i7MKGMOvfrllG4fu7QAAAAASUVORK5CYII="> Meal Request</a></li>
                                <li><a href =""><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADMSURBVDhPxdLPCgFBAMfxyQsoJ6WUA7ko5cQrcHAReQ0Hrop4ERcXryJXJ8/hwPe3TG0zo92pxa8+2fn32yHm22lhEqmJYAa44xFJZ/rwsoTddEPoNq4FtH8NLyvYwosmcqQD7d8lIyehQjung6FEF45xRD0Z+YkuzMr/b1j4b5iV6MI29H8rJyM////Khd8wK7kLr2g4c3pJBb2UKbS2gZcR7GE5wC2cp8ZpQwSj0i32mEGFKjrhjC60Zmnvx7JQqii9Hk3t/fnLGPMEHd93RGHTDHMAAAAASUVORK5CYII="> Generated Meal</a></li>
                                <li><a href =""><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAABGSURBVDhPY6AVkAPiUCgNAvxADOKTgmF6wSAKiP9DaRDQBWIQnxQM0wsGVHfh4AdU9/JopFAOqO7l0UihHFDdyyMmUhgYAD//Xold+e3uAAAAAElFTkSuQmCC"> List of Meal Plan</a></li>
                            </ul>
                        </li>
            
                        <!-- FEEDBACK -->
                        <li class="ripple"><a href="<?= base_url()?>admin/feedback"><span class="fa fa-comment"></span>Feedback</a></li>

                        <!-- REPORTS -->
                        <li class="ripple">
                            <a class="tree-toggle nav-header">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAFRSURBVEhL7ZW7SsRAGIXTCApiUBsLWbC1USwsxF7B2kaEgLmRhBR5C0XBxsbXUDvBarXaB9BOa0GsRdRv5N9hJ2YvmSw2euBjkv9yzrJks84wRVG0G4bhYRX0NmVsNAVBsMXiGZwrfN+fw+QRPvtwGcfxenceTrlfETtTSZLMMvBWMmhReyrVNPSuYK9UfxBLUzRa3SGW7jk7aZouDAvg3IZOz9yrWJqioQNAf7dcH8F1FZgGMuZwnVCrHzCq/gMMFUUxheEF3HieN6lqYwug5/KsL3Mewzu/nUVVH0sAdRejO3jGeJVzQ1rNA6i5cCv9Dwz1I6rUKCDP8xlqveaptLSsA8rmkEnLkFUA5wSLban1NVeyCmBpTe4HmitZBcir+AR2vocGyCqgjv5eQBOqA/j3muZTvFQs1AKPtlj+FO+XJQYOGLTVfpZl82L3G3KcLwXqDwU99xohAAAAAElFTkSuQmCC"> Reports <span class="fa-plus fa"></span>
                                <span class="fa-angle-right fa right-arrow text-right"></span>
                            </a>
                            <ul class="nav nav-list tree">

                                <!-- User Reports -->
                                <li class="ripple">
                                    <a class="sub-tree-toggle nav-header">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAFRSURBVEhL7ZW7SsRAGIXTCApiUBsLWbC1USwsxF7B2kaEgLmRhBR5C0XBxsbXUDvBarXaB9BOa0GsRdRv5N9hJ2YvmSw2euBjkv9yzrJks84wRVG0G4bhYRX0NmVsNAVBsMXiGZwrfN+fw+QRPvtwGcfxenceTrlfETtTSZLMMvBWMmhReyrVNPSuYK9UfxBLUzRa3SGW7jk7aZouDAvg3IZOz9yrWJqioQNAf7dcH8F1FZgGMuZwnVCrHzCq/gMMFUUxheEF3HieN6lqYwug5/KsL3Mewzu/nUVVH0sAdRejO3jGeJVzQ1rNA6i5cCv9Dwz1I6rUKCDP8xlqveaptLSsA8rmkEnLkFUA5wSLban1NVeyCmBpTe4HmitZBcir+AR2vocGyCqgjv5eQBOqA/j3muZTvFQs1AKPtlj+FO+XJQYOGLTVfpZl82L3G3KcLwXqDwU99xohAAAAAElFTkSuQmCC">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADYSURBVEhL7dQ9C0FxFIDxG6UMNiULKRZlNrCy2GVSBkqxGC0GxWzArHwB38gkZaQkieeUW7fTLbmOLJ76des/nFP3zXmz8PP6lSY44YCmHFhWxd3jgiTM6sG7QJRgVg5nuMO3iMK0IlaYIy0H1iVQQwUxObAqghmucG/REfJcTFrCHay18FEp3OA3XOwQQuDq8BvslUXguvAb6lVA4P4LXpbBAvLe68F7jGHy0W2gF4xg1hp6wQBmyW3SC9owawq9oAGzhtAL5M9qVh96QRlm5dFR4vh1jvMAli929Hzc7nUAAAAASUVORK5CYII="> User
                                        <span class="fa-angle-right fa right-arrow text-right"></span> 
                                    </a>
                                    
                                    <ul class="nav nav-list sub-tree">
                                        <li><a href="<?= base_url()?>admin/report_users"> Active Users</a></li>
                                        <li><a href="<?= base_url()?>admin/report_inactusers"> Inactive Users</a></li>
                                        <li><a href="<?= base_url()?>admin/report_delusers"> Deleted Users</a></li>    
                                    </ul>    
                                </li>

                                <!-- Trainer Reports -->
                                <li class="ripple">
                                    <a class="sub-tree-toggle nav-header">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAFRSURBVEhL7ZW7SsRAGIXTCApiUBsLWbC1USwsxF7B2kaEgLmRhBR5C0XBxsbXUDvBarXaB9BOa0GsRdRv5N9hJ2YvmSw2euBjkv9yzrJks84wRVG0G4bhYRX0NmVsNAVBsMXiGZwrfN+fw+QRPvtwGcfxenceTrlfETtTSZLMMvBWMmhReyrVNPSuYK9UfxBLUzRa3SGW7jk7aZouDAvg3IZOz9yrWJqioQNAf7dcH8F1FZgGMuZwnVCrHzCq/gMMFUUxheEF3HieN6lqYwug5/KsL3Mewzu/nUVVH0sAdRejO3jGeJVzQ1rNA6i5cCv9Dwz1I6rUKCDP8xlqveaptLSsA8rmkEnLkFUA5wSLban1NVeyCmBpTe4HmitZBcir+AR2vocGyCqgjv5eQBOqA/j3muZTvFQs1AKPtlj+FO+XJQYOGLTVfpZl82L3G3KcLwXqDwU99xohAAAAAElFTkSuQmCC">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADTSURBVEhL5ZHLDcIwEER9oQ24UwXFUQZFcOUj0QypgBMXYEaKpdGSibM+wpOe4mx2x3FSfpINvMDHeF1D5T3azRXWEMpNiNaWaOGbayPvidaWaIknOMEMzQ34zc+Qb85r/Act7AYruId3WJvmdNjnDNeAlg77fIAaoGawMxoYzWBnNDCawc5oYDSDndHAaAY7o4FRMlWf84uppiqZqs9p0YbYfIS1dmOhBw3V9Ra+IIMp6zuYxm1wgDWUct11Cg3V9RNqYPcp3AYxrPsUMbSu/5JSPhiux2e7pmMJAAAAAElFTkSuQmCC"> Trainer
                                        <span class="fa-angle-right fa right-arrow text-right"></span> 
                                    </a>
                                    
                                    <ul class="nav nav-list sub-tree">
                                        <li><a href="<?= base_url()?>admin/report_trainers"> Active Trainers</a></li>
                                        <li><a href="<?= base_url()?>admin/report_inactrainers"> Inactive Trainers</a></li>
                                        <li><a href="<?= base_url()?>admin/report_deltrainers"> Deleted Trainers</a></li>
                                    </ul>    
                                </li>
                                
                                <!-- Other reports -->
                                <li><a href="<?= base_url()?>admin/report_workouts"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAErSURBVEhL5dWxSsNQGIbhaF3EDjoIrjqqgwhOXoEITrbeg+AmDg46dJMu3eqg0Mvo4uriLHgPOjqUivq+mkA4tI2eo4P4wUOTUv6vSU6S7K9kLv80s/lndJbQwQZq6GGAA+zjFeeIzg3e8IQtXOf7L7DkFA+IThsOnFSyhuhMoYtJJZ6qpFSV3CE58xhV4nc7SEoDj9hGWLKJpDh8CAfeYhphyTKiUh5+D+8JE16TqFM0bngRS45x+LE3Iovo4wL+uJyq4V9KC8UherhFyY8MN+vwApVLFuBqSR5ufHC5jsMSl6KrJWm4uYJ3YlhyCZdiUmbwDAeOKwkv/LfjU9AH1a+VNFFVcoKo1OGbyJdFucR/7bOlKDlCdM7gm2gVHo3buzAr2Pvc/F/JsndHcnO/Wwuz0wAAAABJRU5ErkJggg=="> Enrolled in Workouts</a></li>
                                
                                <!-- Class Workouts reports -->
                                <li class="ripple">
                                    <a class="sub-tree-toggle nav-header">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAFRSURBVEhL7ZW7SsRAGIXTCApiUBsLWbC1USwsxF7B2kaEgLmRhBR5C0XBxsbXUDvBarXaB9BOa0GsRdRv5N9hJ2YvmSw2euBjkv9yzrJks84wRVG0G4bhYRX0NmVsNAVBsMXiGZwrfN+fw+QRPvtwGcfxenceTrlfETtTSZLMMvBWMmhReyrVNPSuYK9UfxBLUzRa3SGW7jk7aZouDAvg3IZOz9yrWJqioQNAf7dcH8F1FZgGMuZwnVCrHzCq/gMMFUUxheEF3HieN6lqYwug5/KsL3Mewzu/nUVVH0sAdRejO3jGeJVzQ1rNA6i5cCv9Dwz1I6rUKCDP8xlqveaptLSsA8rmkEnLkFUA5wSLban1NVeyCmBpTe4HmitZBcir+AR2vocGyCqgjv5eQBOqA/j3muZTvFQs1AKPtlj+FO+XJQYOGLTVfpZl82L3G3KcLwXqDwU99xohAAAAAElFTkSuQmCC">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADhSURBVEhL7dKvigJxEMDxlQs2wXzBF7FZxGY4fAWL6YrVV7AYfQKLmH0GD+4JVIwGixz47zu4K8PPmVVXDzb4hQ/I7AyuYPQudzWwxDEjua3DbQHr8BFzuFkHiZkx87hZyzu08YFBPEvI23ZxUDPhppfEFk3oepBnP/iUAfWh79z00hpVSGV8Q36F9IXS+WNUwwb61k0vjVFABb/xbIQiklr4g74TbuHiEKtgNoW8fQf7eBZys5Ytt/7ObtZyFm7WchZu1rIlbIK055f0Upqwu7/gX9Nv8ApXWUvPeJeLougEqRrrswG5ZKoAAAAASUVORK5CYII=">Class Workout
                                        <span class="fa-angle-right fa right-arrow text-right"></span> 
                                    </a>
                                    
                                    <ul class="nav nav-list sub-tree">
                                        <li><a href="<?= base_url()?>admin/report_classes">Active Class</a></li>
                                        <li><a href="<?= base_url()?>admin/report_class"> Enrolled in Class</a></li>
                                        <li><a href="<?= base_url()?>admin/report_inactclasses"> Inactive Class</a></li>
                                        <!--<li><a href="<?= base_url()?>admin/report_delclass"> Deleted Class</a></li>-->
                                    </ul>    
                                </li>

                                <!-- Class Schedule reports -->
                                <li class="ripple">
                                    <a class="sub-tree-toggle nav-header">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAF1SURBVDhPtdS/K4VRHMfx42K4DDLJYKFQksFGVpKVv0Ap/4FSyqSUySClWCwWgx/JYMBA+RERZZNYTRbE+3Oec67jOKTL/dSr5/s897nfe855znNNlEmc4hAnWEQr4lThAtdo1oUw8zjCAupQBp9u7GMcI4ExrGMKs+5aH2wacI49e5ZlzR0VjUYjfov4hv78GbrX/sIgZnTiEjZX2hE2k0c8RNdqYI6RUxEkbqhoFuGXU2xDrV+cXfRkZSEbGEDnD8phRxinHtvQUvjoqadGFbIjXEKXiihahnxWmka8ItUkZBu2QFO0TygRTWMLmskQ9GSXXb2KLw2VCRygzZ59pAlqppu1TRSto/ahEm6bTw1H4S+eYRMaUTjNe6xAO0BPXPUV/OeSbCj90Lrp1dKxAzuuHsa0q+cQfu/bhtrIikai6MaipyyX0P58ckf9YejNUH2DO1cn3xSl5CP89zUsVuka9uIFqZt+6xYVKKQatX9QaYwx7/rs1A+u64mwAAAAAElFTkSuQmCC">
                                        Class Schedule
                                        <span class="fa-angle-right fa right-arrow text-right"></span> 
                                    </a>
                                    
                                    <ul class="nav nav-list sub-tree">
                                        <li><a href="<?= base_url()?>admin/report_actsched"> Active Schedules</a></li>
                                        <li><a href="<?= base_url()?>admin/report_inactsched"> Inactive Schedules</a></li>
                                        <li><a href="<?= base_url()?>admin/report_unavailable"> Unvailable Trainers</a></li>
                                        <li><a href="<?= base_url()?>admin/report_delsched"> Deleted Schedule</a></li>
                                    </ul>    
                                </li>
                        <li class="ripple"><a href="<?= base_url()?>admin/logs"><i class="fa fa-list"></i></span> Audit Trails</a></li>
                    </ul>
                </div>
            </div>
        <!-- end: Left Menu -->

  