
    <?php    
    function productWork($company,$logoFile,$logoSize,$role,$product,$skills,$tech,$duration="",$intro="") {
    ?>

    <div class="row">

      <div class="col band-info">    
      
      <table style="border:0px solid red; width:100%; margin-bottom:60pt;">
      
      <?php if (false && $logoFile!="") { ?>
        <tr>
          <td> 
              <center><img style="width:<?php echo $logoSize;?>;" src="logos/<?php echo $logoFile;?>"></center>
          </td>
        </tr>
      <?php } ?>


        <?php if ($company!="") { ?>
        <tr>          
          <td style="text-align: center; font-weight: bold; font-size:14pt;"><?php echo $company;?></td>
        </tr>
        <?php } ?>

      <?php if (false && $intro!="") { ?>
        <tr>
          <td>
              <p class="project_intro"><?php echo $intro;?></p>
          </td>
        </tr>
      <?php } ?>

        <tr>
          <td>                            

            <table class="productWork">

              <?php if ($duration!="") { ?>
             <tr>
                <td class="ik"><?php lang("Duración","Duration");?></td>
                <td><?php echo $duration;?></td>
              </tr>
              <?php  } ?>

              <?php if ($role!="") { ?>
              <tr>
                <td class="ik"><?php lang("Modalidad","Modality");?></td>
                <td><?php echo $role;?></td>
              </tr>
              <?php  } ?>

              <?php if ($product!="") { ?>
              <tr>
                <td class="ik"><?php lang("Producto","Product");?></td>
                <td><?php echo $product;?></td>
              </tr>
              <?php  } ?>

              <?php if ($skills!="") { ?>
              <tr>
                <td class="ik"><?php lang("Actividad","Skills applied"); ?></td>
                <td><?php echo $skills;?></td>
              </tr>
              <?php  } ?>

              <?php if ($tech!="") { ?>
              <tr>
                <td class="ik"><?php lang("Tecnologías usadas","Tech Stack"); ?></td>
                <td><?php echo $tech;?></td>
              </tr>
              <?php  } ?>


            </table>

          </td>
        </tr>
      </table>
      
      </div>
    </div>


    <?php
    } ?>