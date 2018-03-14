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
        <div class="col-md-12 tab-content">
            <div class="tabs-wrapper text-center">    
                <button type="button" class="btn btn-info btn-add-exercise" onclick="$('#exercise-container').toggle();">Add Exercise </button>
            </div>
                <div id="exercise-container" style="display:none;">
                    <form class="form" id="form-exercise"> 
                        <p>Exercise Name</p>
                            <!-- <input type="hidden" id="workout-workout" value=""> -->
                            <div class="form-group form-animate-text">
                                <input type="text" class="form-text"  id='exercise-name' name="name" required>
                                <span class="bar"></span>
                                <label><span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAEgSURBVDhP1dM/KIZRFMfxa0AUYjIYsBlkMxoUyiAD5c9os5lkRyajQTJZLawGJoNSshoYbCYTyZ/v79x76umG9Fwlv/rUPefpnp7O877hLzKAXWyiXY2SNOAW78k+itKGN/jAcxRnDxr2gkU1fiND6InH8nRgDpNoVKMkw3iA7/ASnaidC/gwt4EfpQtrWLAqhCa8Ih94Cs82ptBiVZZH6MKOVSH0IR8mN/DcQb1jq1L0461ePkA/Ziu9qifoudynnlbTDcso8kt1PKMZ9oa98Af+htO4Tj39l6/S+QSD+PINPfkOlSWoN46tdNZ6PL7DI6uy6CuvYt6qGA3RzloxAV0eg+fbr/xZDnEWjzZUe1q2qmZWMBOPlnWMxOP/TAgfEMdj0cqw/soAAAAASUVORK5CYII=">
                                    </span> Exercise Name
                                </label>
                                <div id="exercise-name-error"></div>
                            </div>
                            <p>Instructions</p>
                            <div class="form-group form-animate-text">
                                <textarea cols = "40" rows = "10" class="form-text" name="instructions"  id='exercise-instructions' required></textarea>
                                <span class="bar"></span>
                                <label><span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAESSURBVDhPtdS/SsNQGIbx4yQOTm7iJN3EqXVy8Q4KQuduxe6CtfQCiq6C0kEEKYhzhw4dvABRoUMHEYVCHS10Euqf55UcOENO8jn0gx/kBPI09CRxi54tXOM24gobMI8u+skwwTPM0R7SQt4eHmCO5gW3sQZz1BLUhNF1nYhNXrCLWuIYnzhEdHzwC7PkOE8D0fHBOlbwhnecoh04gXbcHDzDLj4wQAGbAa37MAdHuMR3ss5iCu7/rZx7wh12UAyUoDs3B4foQHc4RgtHgSb0/5qD59BbMcUcj7gP6BnUeXPwAMt4xQ3SRh8Rc1C/rh3WsSj8EtDab5gp+B+ZwQukXZSlguisogr/vuYpYwmLGud+ASMUrRCsXgz7AAAAAElFTkSuQmCC">
                                    </span> Instructions
                                </label>
                                <div id="exercise-instructions-error"></div>
                            </div>
                            <div class="form-group form-animate-text">
                                <select class="form-text" name="type">
                                    <option value="1">Arm</option>
                                    <option value="2">Core</option>
                                    <option value="3">Leg</option>
                                    <option value="4">Butt</option>
                                    <option value="5">Cardio</option>
                                    <option value="6">Weight Loss and Dieting</option>
                                </select>
                                <span class="bar"></span>
                                <label><span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADrSURBVDhP3dGvawJhHMfxU0RtBjHoytrAMDAphhkVjMsibAyG/8CKwWBSjAaL1jWroFaDosL6wsqqgj9ABPX9VR94ms9xFn3DC+4ufLjnzrrLWtigcbxzWAR7TRCO8mAKGRvCDeMy6KCrqSGAOPwwLgv5ThP8Qz/mB2wVg4zV4UIB+uArbL3dAz4hYyHMoMbGeMQfivjCO4yrQI3tkEAUffyejeCDUW2owaY8cNIT5HvOoY7rhe3CyGOLNySxgIyWYVwPK6gjLpGGlMIaP8c7w3KQv6Y8Q28AW4OX+sZVB6u46uALSqfL282yDnm2PrVtRqp8AAAAAElFTkSuQmCC">
                                    </span> Exercise Type
                                </label>
                                <div id="workout-type-error"></div>
                            </div>
                            <div class="form-group form-animate-text">
                                <select class="form-text" id="equipment-type" name="equipment">
                                    <option value="1">Barbell</option>
                                    <option value="2">Body only</option>
                                    <option value="3">Cable</option>
                                    <option value="4">Dumbbell</option>
                                    <option value ="6">Exercise ball</option>
                                    <option value = "7">Machine</option>
                                </select>
                                <span class="bar"></span>
                                <label><span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADUSURBVDhP5dKhCsJAHMfxFYsIgkUtvoHvYBEUDDZBMBgsNi2+gt1i0yAIZsGHUN9CMIjVqt/fuMkYbvzFGcQffNjddnfc3X/ef6eNDSp+zxaN1Zyu3wulgRPuqOJgpLGac4bWeCb1BZVUj/yVJO0w40RjLsoKTWQxwBUXDFFAC2uYi3Jz7cAWu8g7jTEXJY8+lqgjSA1z9JCDuShljDGJMUIJiQnv8Ijw8V7Rf2guip66s5lrdxy1Fwju01wUPT9aUHn3yHuYi1KELn8aQ9805ufieQ/pg3PyI3uc4AAAAABJRU5ErkJggg==">
                                    </span> Equipment Type
                                </label>
                                <div id="equipment-type-error"></div>
                            </div>
                            <div class="form-group form-animate-text">
                                <select class="form-text" id="muscle-target" name="target">
                                    <option value="1">Abdominals</option>
                                    <option value="2">Brachialis</option>
                                    <option value="3">Biceps</option>
                                    <option value="4">Calves</option>
                                    <option value="5">Chest</option>
                                    <option value="6">Deltoids</option>
                                    <option value="7">Forearms</option>
                                    <option value="8">Glutes</option>
                                    <option value="9">Hamstrings</option>
                                    <option value="10">Lats</option>
                                    <option value="11">Middle Back</option>
                                    <option value="12">Quadriceps</option>
                                    <option value="13">Shoulders</option>
                                    <option value="14">Triceps</option>
                                </select>
                                <span class="bar"></span>
                                <label><span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAD/SURBVDhP7dMxS0JRGIfxq4SFQ+Dg6twaCBmYBH6DoKEpEBIEh3bBNYi+hIJTg4OBk+DiHg0O0d4WQiG6VM8/unA451UTx3zgN3juua9w9ETbTtFGDQktbNIhZvj6dQcrfVERlygjCbMu4mHSg98+BnD3DbGLoFdoww0ayMLvFu6w2BWCPqGH1Z9PdiP4w+QeQRPo4RPSWnDaQQ59+MPkAUFjxBt0fimoJj7gDvBdI6gDd5PO8sxbszxjD0EVuBunePTWfDqmPMwymMN6cZETLK0F60WL/n8r0y/5BmuAS8dxhD+l+/wOa5C8oIS1OsAFCjhHHbq7x1h4d/9lUfQNJFJ89RzSAkwAAAAASUVORK5CYII=">
                                    </span> Muscle Targeted
                                </label>
                                <div id="muscle-target-error"></div>
                            </div>
                            <div class="form-group form-animate-text">
                                <select class="form-text" id="type" name="workout_type">
                                    <option value="1">Strength</option>
                                    <option value="2">Plyometrics</option>
                                    <option value="3">Cardio</option>
                                    <option value="4">Powerlifting</option>
                                    <option value ="5">Olympic Weightlifting</option>
                                </select>
                                <span class="bar"></span>
                                <label><span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAFmSURBVDhPtdQ/KAZxHMfxS1Gi/BlMYjGgDP6UUjKwKkTJItkwWigGiyIhUfKnZFPKZmEiCwsmgywGlDCIpHh/ru9Pd47cPXo+9arv3ffu+9zd87vz0pl8NCDX34qXAtQjz98KpAUfpkk7YqYV7jwN/koJXGMA5ejFGGaxYeYwDvUqMQp3nu4wlEeocY99q7fRjFqjehPq7cGdc41IDqHmAaqsnkQNrkw1RqCejjmzeheRLENNXWGx1brFNatlFfNWl+LV6mlE0o0t6Lll4Rbn6Icb2Gf71MvBBHbQjj8zBQ0ZRB30DIdsnx5F4mhtXeAdJ0b1JZKs1VB64G7XmUHKKYSuKjiwE//KEYIDG5FyivCE4EDRWq1A4ixAA26wiGGs4AVaPomiK3jDHcq0I5B16Idi/dsZ0Np7wDNCXxHLEjQw8tn6Hi3eY+jgU+jd/SmxBmajA11og16/36IPho7L9LfSF8/7BHpoavvjoaBRAAAAAElFTkSuQmCC">
                                    </span> Workout Type
                                </label>
                                <div id="muscle-target-error"></div>
                            </div>
                            <div class="form-group form-animate-text">
                                <input type="file" name="img" id="file-img" class="form-text" >
                                <span class="bar"></span>
                                <label><span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAACpSURBVDhP5dSxCcJAGMXxsxGcQLBwiegCttraWGhsLFzC2kkEF3EHEVzAFYz+34UTTq64j1yXBz9yX8j3UiWu39njgquRdmpEmePT0Qy/bKCbulqT3LUUDrDAxE8FCrfQs08/GQoPmLbHKEu8cfNTZuEJml9QwX/GGLbHvEKdgwZnHHGHXjZCiLkw5YEVlCKFgZJVuM6kZBVaktwt8elViNLl57BDP+PcFwE+e3EJRPE3AAAAAElFTkSuQmCC">
                                    </span> Image
                                </label>
                                <div id="muscle-target-error"></div>
                                <img id="img" width="250px" height="250px" src="<?= base_url() . 'uploads/1516119100.png'?>" >
                            </div>
                            
                    <div class="modal-footer">
                        <button type="submit" id="" class="btn btn-success" > Confirm </button>
                        <button type="button"  class="btn btn-danger" onclick="$('#exercise-container').hide();"> Close<button>
                    </div>
                    </form>
                </div>
    <!-- DITO INSERT -->
                <!-- UPDATE EXERCISE -->
                <div id="exercise-container-update" style="display:none;">
                    <form class="form" id="form-exercise-update"> <br>
                            <input type="hidden" id="up-exercise-id" name="id" value="">
                            <div class="form-group form-animate-text">
                                <input type="text" class="form-text"  id='up-exercise-name' name="name" required>
                                <span class="bar"></span>
                                <label><span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAEgSURBVDhP1dM/KIZRFMfxa0AUYjIYsBlkMxoUyiAD5c9os5lkRyajQTJZLawGJoNSshoYbCYTyZ/v79x76umG9Fwlv/rUPefpnp7O877hLzKAXWyiXY2SNOAW78k+itKGN/jAcxRnDxr2gkU1fiND6InH8nRgDpNoVKMkw3iA7/ASnaidC/gwt4EfpQtrWLAqhCa8Ih94Cs82ptBiVZZH6MKOVSH0IR8mN/DcQb1jq1L0461ePkA/Ziu9qifoudynnlbTDcso8kt1PKMZ9oa98Af+htO4Tj39l6/S+QSD+PINPfkOlSWoN46tdNZ6PL7DI6uy6CuvYt6qGA3RzloxAV0eg+fbr/xZDnEWjzZUe1q2qmZWMBOPlnWMxOP/TAgfEMdj0cqw/soAAAAASUVORK5CYII=">
                                    </span> Exercise Name
                                </label>
                                <div id="exercise-name-error"></div>
                            </div>
                            <p>Instructions</p>
                            <div class="form-group form-animate-text">
                                <textarea cols = "40" rows = "10" class="form-text" name="instructions"  id='up-exercise-instructions' required></textarea>
                                <span class="bar"></span>
                                <label><span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAESSURBVDhPtdS/SsNQGIbx4yQOTm7iJN3EqXVy8Q4KQuduxe6CtfQCiq6C0kEEKYhzhw4dvABRoUMHEYVCHS10Euqf55UcOENO8jn0gx/kBPI09CRxi54tXOM24gobMI8u+skwwTPM0R7SQt4eHmCO5gW3sQZz1BLUhNF1nYhNXrCLWuIYnzhEdHzwC7PkOE8D0fHBOlbwhnecoh04gXbcHDzDLj4wQAGbAa37MAdHuMR3ss5iCu7/rZx7wh12UAyUoDs3B4foQHc4RgtHgSb0/5qD59BbMcUcj7gP6BnUeXPwAMt4xQ3SRh8Rc1C/rh3WsSj8EtDab5gp+B+ZwQukXZSlguisogr/vuYpYwmLGud+ASMUrRCsXgz7AAAAAElFTkSuQmCC">
                                    </span> Instructions
                                </label>
                                <div id="exercise-instructions-error"></div>
                            </div>
                            <div class="form-group form-animate-text">
                                <select class="form-text" name="type" id="up-type-exercise">
                                    <option value="1">Arm</option>
                                    <option value="2">Core</option>
                                    <option value="3">Leg</option>
                                    <option value="4">Butt</option>
                                    <option value="5">Cardio</option>
                                    <option value="6">Weight Loss and Dieting</option>
                                </select>
                                <span class="bar"></span>
                                <label><span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADrSURBVDhP3dGvawJhHMfxU0RtBjHoytrAMDAphhkVjMsibAyG/8CKwWBSjAaL1jWroFaDosL6wsqqgj9ABPX9VR94ms9xFn3DC+4ufLjnzrrLWtigcbxzWAR7TRCO8mAKGRvCDeMy6KCrqSGAOPwwLgv5ThP8Qz/mB2wVg4zV4UIB+uArbL3dAz4hYyHMoMbGeMQfivjCO4yrQI3tkEAUffyejeCDUW2owaY8cNIT5HvOoY7rhe3CyGOLNySxgIyWYVwPK6gjLpGGlMIaP8c7w3KQv6Y8Q28AW4OX+sZVB6u46uALSqfL282yDnm2PrVtRqp8AAAAAElFTkSuQmCC">
                                    </span> Exercise Type
                                </label>
                                <div id="workout-type-error"></div>
                            </div>
                            <div class="form-group form-animate-text">
                                <select class="form-text" id="up-equipment-type" name="equipment">
                                    <option value="1">Barbell</option>
                                    <option value="2">Body only</option>
                                    <option value="3">Cable</option>
                                    <option value="4">Dumbbell</option>
                                    <option value ="6">Exercise ball</option>
                                    <option value = "7">Machine</option>
                                </select>
                                <span class="bar"></span>
                                <label><span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADUSURBVDhP5dKhCsJAHMfxFYsIgkUtvoHvYBEUDDZBMBgsNi2+gt1i0yAIZsGHUN9CMIjVqt/fuMkYbvzFGcQffNjddnfc3X/ef6eNDSp+zxaN1Zyu3wulgRPuqOJgpLGac4bWeCb1BZVUj/yVJO0w40RjLsoKTWQxwBUXDFFAC2uYi3Jz7cAWu8g7jTEXJY8+lqgjSA1z9JCDuShljDGJMUIJiQnv8Ijw8V7Rf2guip66s5lrdxy1Fwju01wUPT9aUHn3yHuYi1KELn8aQ9805ufieQ/pg3PyI3uc4AAAAABJRU5ErkJggg==">
                                    </span> Equipment Type
                                </label>
                                <div id="equipment-type-error"></div>
                            </div>
                            <div class="form-group form-animate-text">
                                <select class="form-text" id="up-muscle-target" name="target">
                                    <option value="1">Abdominals</option>
                                    <option value="2">Brachialis</option>
                                    <option value="3">Biceps</option>
                                    <option value="4">Calves</option>
                                    <option value="5">Chest</option>
                                    <option value="6">Deltoids</option>
                                    <option value="7">Forearms</option>
                                    <option value="8">Glutes</option>
                                    <option value="9">Hamstrings</option>
                                    <option value="10">Lats</option>
                                    <option value="11">Middle Back</option>
                                    <option value="12">Quadriceps</option>
                                    <option value="13">Shoulders</option>
                                    <option value="14">Triceps</option>
                                </select>
                                <span class="bar"></span>
                                <label><span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAD/SURBVDhP7dMxS0JRGIfxq4SFQ+Dg6twaCBmYBH6DoKEpEBIEh3bBNYi+hIJTg4OBk+DiHg0O0d4WQiG6VM8/unA451UTx3zgN3juua9w9ETbTtFGDQktbNIhZvj6dQcrfVERlygjCbMu4mHSg98+BnD3DbGLoFdoww0ayMLvFu6w2BWCPqGH1Z9PdiP4w+QeQRPo4RPSWnDaQQ59+MPkAUFjxBt0fimoJj7gDvBdI6gDd5PO8sxbszxjD0EVuBunePTWfDqmPMwymMN6cZETLK0F60WL/n8r0y/5BmuAS8dxhD+l+/wOa5C8oIS1OsAFCjhHHbq7x1h4d/9lUfQNJFJ89RzSAkwAAAAASUVORK5CYII=">
                                    </span> Muscle Targeted
                                </label>
                                <div id="muscle-target-error"></div>
                            </div>
                            <div class="form-group form-animate-text">
                                <select class="form-text" id="up-workout_type" name="workout_type">
                                    <option value="1">Strength</option>
                                    <option value="2">Plyometrics</option>
                                    <option value="3">Cardio</option>
                                    <option value="4">Powerlifting</option>
                                    <option value ="5">Olympic Weightlifting</option>
                                </select>
                                <span class="bar"></span>
                                <label><span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAFmSURBVDhPtdQ/KAZxHMfxS1Gi/BlMYjGgDP6UUjKwKkTJItkwWigGiyIhUfKnZFPKZmEiCwsmgywGlDCIpHh/ru9Pd47cPXo+9arv3ffu+9zd87vz0pl8NCDX34qXAtQjz98KpAUfpkk7YqYV7jwN/koJXGMA5ejFGGaxYeYwDvUqMQp3nu4wlEeocY99q7fRjFqjehPq7cGdc41IDqHmAaqsnkQNrkw1RqCejjmzeheRLENNXWGx1brFNatlFfNWl+LV6mlE0o0t6Lll4Rbn6Icb2Gf71MvBBHbQjj8zBQ0ZRB30DIdsnx5F4mhtXeAdJ0b1JZKs1VB64G7XmUHKKYSuKjiwE//KEYIDG5FyivCE4EDRWq1A4ixAA26wiGGs4AVaPomiK3jDHcq0I5B16Idi/dsZ0Np7wDNCXxHLEjQw8tn6Hi3eY+jgU+jd/SmxBmajA11og16/36IPho7L9LfSF8/7BHpoavvjoaBRAAAAAElFTkSuQmCC">
                                    </span> Workout Type
                                </label>
                                <div id="muscle-target-error"></div>
                            </div>
                            <div class="form-group form-animate-text">
                                <input type="file" name="img" id="up-file-img" class="form-text" >
                                <span class="bar"></span>
                                <label><span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAACpSURBVDhP5dSxCcJAGMXxsxGcQLBwiegCttraWGhsLFzC2kkEF3EHEVzAFYz+34UTTq64j1yXBz9yX8j3UiWu39njgquRdmpEmePT0Qy/bKCbulqT3LUUDrDAxE8FCrfQs08/GQoPmLbHKEu8cfNTZuEJml9QwX/GGLbHvEKdgwZnHHGHXjZCiLkw5YEVlCKFgZJVuM6kZBVaktwt8elViNLl57BDP+PcFwE+e3EJRPE3AAAAAElFTkSuQmCC">
                                    </span> Image
                                </label>
                                <div id="muscle-target-error"></div>
                                <img id="img2" width="250px" height="250px" src="<?= base_url() . 'uploads/1516119100.png'?>" >
                            </div>
                            
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" > Confirm </button>
                        <button type="button"  class="btn btn-danger" onclick="$('#exercise-container-update').hide();"> Close<button>
                    </div>
                    </form>
                </div>

                <!-- UPDATE EXERCISE -->     
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
                                            <button class="btn btn-<?= $ex->status == 1 ? 'danger' : 'success' ?> btn-update-exercise" data-status="<?= $ex->status ?>" data-id="<?= $ex->id ?>"><?= $ex->status == 1 ? 'Deactivate': 'Activate'?></button>
                                            <button class="btn btn-warning btn-update-exercise-form" data-status="<?= $ex->status ?>" data-id="<?= $ex->id ?>">Update</button>
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
