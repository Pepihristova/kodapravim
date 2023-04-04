

<?php $__env->startSection('content'); ?>

<p>activities</p>

                        activities
                        <?php echo Form::select('activity_id', $activities_arr, ['class' => 'form-control' ], ['id' => 'activity_id']); ?>

                         <input type="hidden" id="place_id" name="place_id" value="<?php echo e($place_id); ?>">
                         <input type="hidden" id="second_place_id" name="second_place_id" value="<?php echo e($second_place_id); ?>">
                         <input type="hidden" id="type_id" name="type_id" value="<?php echo e($type_id); ?>">
                         <button onclick="myFunction()">Click me</button>
                     
<?php $__env->stopSection(); ?>
<script type="text/javascript">
function myFunction() {
  var place_id = document.getElementById("place_id").value;
  var second_place_id = document.getElementById("second_place_id").value;
  var type_id = document.getElementById("type_id").value;
  var e = document.getElementById("activity_id");
              var activity_id = e.options[e.selectedIndex].value;
              var query = "endresult";
              var string_url = "?place_id=" + place_id + '&second_place_id=' + second_place_id + '&type_id=' + type_id + '&activity_id=' + activity_id;
                console.log("Pepi e qka")
                console.log(place_id)
                console.log(string_url)
                window.location = query+string_url;

}
</script>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\FreeTime\resources\views/results/activities.blade.php ENDPATH**/ ?>