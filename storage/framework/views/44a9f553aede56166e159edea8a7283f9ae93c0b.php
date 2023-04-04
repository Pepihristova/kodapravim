

<?php $__env->startSection('content'); ?>

<p>second places blade</p>

                        <label class="col-md-12 control-label">Second Място</label>
                        
                        <?php echo Form::select('second_place_id', $second_places_arr, ['class' => 'form-control' ], ['id' => 'second_place_id']); ?>

                         <input type="hidden" id="place_id" name="place_id" value="<?php echo e($place_id); ?>">
                         <button onclick="myFunction()">Click me</button>
                     
<?php $__env->stopSection(); ?>
<script type="text/javascript">
function myFunction() {
  var place_id = document.getElementById("place_id").value;
  var e = document.getElementById("second_place_id");
              var second_place_id = e.options[e.selectedIndex].value;
              var query = "types";
              var string_url = "?place_id=" + place_id + '&second_place_id=' + second_place_id;
                console.log("Pepi e qka")
                console.log(place_id)
                console.log(string_url)
                window.location = query+string_url;

}
</script>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\FreeTime\resources\views/results/second_places.blade.php ENDPATH**/ ?>