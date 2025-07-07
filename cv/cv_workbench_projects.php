<?php 


function workbenchProjectInfoWrite($training) { 
  $projectTitle = $training["projectTitle"];
  $tags = $training["tags"];
  $type = $training["type"];
  ?>
  <div class= "row p_trainings">
    <div class="col band-info">    
      <p class="i2"> <?php echo $type;?> - <?php echo $tags;?> - <?php echo $projectTitle;?>.</p>
    </div>
  </div>
  <?php 
} 

function bandWorkBenchProjects() {
  $trainings = settings_workBenchProjects();
  foreach($trainings as $training) {
    workbenchProjectInfoWrite($training);
  }
}

?>