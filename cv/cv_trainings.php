<?php 


function trainingInfoWrite($training) { 
  $courseTitle = $training["courseTitle"];
  $tags = $training["tags"];
  $type = $training["type"];
  ?>
  <div class= "row p_trainings">
    <div class="col band-info">    
      <p class="i2"> <?php echo $type;?> - <?php echo $tags;?> - <?php echo $courseTitle;?></p>
    </div>
  </div>
  <?php 
} 

function bandTrainings() {
  $trainings = settings_trainings();
  foreach($trainings as $training) {
    trainingInfoWrite($training);
  }
}

?>