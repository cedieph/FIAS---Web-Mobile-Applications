

<!-- CLASS Modal -->
<div id="add_workout_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <!--  tinyMCE text editor  -->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Workout List</h4>
      </div>
      
        <div class="modal-body">  
                <p>Workout List</p>
                <input type="hidden" id="add-workout-week" value="">
                <input type="hidden" id="add-workout-level" value="">
                <input type="hidden" id="add-workout-workout" value="">
                <div class="form-group form-animate-text">
                    <input type="text" class="form-text"  id='add-workout-name' required>
                    <span class="bar"></span>
                    <label><span class="fa fa-plus"></span> Workout Name</label>
                    <div id="add-workout-name-error"></div>
            
        </div>
        
        <div class="modal-footer">
            <button type="button" id="btn-add-workout" class="btn btn-success"><i class="icon-send"></i> Confirm </button>
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        </div>

    </div>

  </div>
</div>

          <!-- end: Content -->
<!-- 
<div id="add_workout_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">


    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Workout Week</h4>
      </div>
         <div class="modal-body">
                    <p>Workout Week Name</p>
                    <input type="hidden" id="workout-level" value="">
                    <input type="hidden" id="workout-workout" value="">
                    <div class="form-group form-animate-text">
                        <input type="text" class="form-text"  id='workout-name' required>
                        <span class="bar"></span>
                        <label><span class="fa fa-plus"></span> Workout Week Name</label>
                        <div id="workout-name-error"></div>
                    </div>
                    <p>Workout Week No.</p>
                    <div class="form-group form-animate-text">
                        <input type="number" class="form-text"  id='workout-week' required>
                        <span class="bar"></span>
                        <label><span class="fa fa-calendar"></span> Workout Week No.</label>
                        <div id="workout-week-error"></div>
                    </div>
        <div class="modal-footer">
            <button type="button" id="btn-add-workout" class="btn btn-success"><i class="icon-send"></i> Confirm </button>
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div> -->


