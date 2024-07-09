<?php
include_once("cv_lang.php");
include_once("cv_styles.php");

include_once("cv_settings_trainings.php");

include_once("cv_letra_chica.php");
include_once("cv_formacion_academica.php");
include_once("cv_letra_chica.php");
include_once("cv_skills_tech.php");
include_once("cv_preferencias_laborales.php");
include_once("cv_informacion_adicional.php");
include_once("cv_dominio_tecnico.php");
include_once("cv_proyecto.php");
include_once("cv_idiomas.php");
include_once("cv_experiencia_laboral.php");
include_once("cv_proyectos.php");
include_once("cv_qr.php");
include_once("cv_contact.php");
include_once("cv_trainings.php");
include_once("cv_workbench_projects.php");
include_once("cv_settings_workBenchProjects.php");

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CV</title>

    <?php cv_styles_write();?>

  </head>
  <body>

<?php function bandOrange() { ?>
     <div class="col">
          <div class="row">
              <div class="col band-name">
                <b><?php lang("Hernán","Hernan");?></b> G. Rancati      
              </div>
          </div>        
          <div class="row">
            <div class="col band-sub-name">
                  <?php lang("Computación Científica e Ingeniería","Computer Science & Engineering");?>
            </div>
          </div>        
          <div class="row">
            <div class="col text-right  band-update">
              <?php lang("Julio de 2024","2024, July");?>
            </div>          
        </div>
   
<?php }?>

     <table class="cv" border="0">
        <tr>
          <td class="band_middle">
            <table class="table_middle" bordercolor="#ff0000" border="0">
                <tr class="row_top">
                  <td class="band_b1 band_x01">&nbsp;
                    <div><img class="img_profile" src="images/profile.jfif"></div>
                  </td>
                  <td style="background-image: url('images/background.jfif');" class="band_top band_a band_x02" colspan="3"><?php bandOrange(); ?></td>
                  <td class="band_x03"></td>
                </tr>
                <tr>
                  <td class="band_b1 band_x11"><div class="div_b1">
                    <?php lang("Contacto","Contact");?></div>
                  </td>
                  <td class="band_b2 band_x12"><?php bandContact(); ?></td>
                </tr>
                <tr>
                <tr>
                  <td class="band_b1 band_x21"><div class="div_b1"><?php lang("F. Académica","Education");?></div></td>
                  <td class="band_b2 band_x22"><?php bandFormacionAcademica();?></td>
                  <td class="band_x23"></td>                  
                </tr>


                <tr>
                  <td class="band_b1 band_x21"><div class="div_b1"><?php lang("Capacitaciones","Trainings");?></div></td>
                  <td class="band_b2 band_x22"><?php bandTrainings();?></td>
                  <td class="band_x23"></td>                  
                </tr>

                <tr>
                  <td class="band_b1 band_x21"><div class="div_b1"><?php lang("Bancos de Pruebas","WorkBench Projects");?></div></td>
                  <td class="band_b2 band_x22"><?php bandWorkBenchProjects();?></td>
                  <td class="band_x23"></td>                  
                </tr>

                <tr>
                  <td class="band_b1 band_x21"><div class="div_b1"><?php lang("Actividades","Skills and Tech");?></div></td>
                  <td class="band_b2 band_x22"><?php bandSkillsAndTech();?></td>
                  <td class="band_x23"></td>
                  
                </tr>

                <tr>
                  <td class="band_b1 band_x31"><div class="div_b1"><?php lang("Experiencia Laboral","Work Positions");?></div></td>
                  <td class="band_b2 band_x32"><?php bandExperienciaLaboral();?></td>
                  <td class="band_x33"></td>                  
                </tr>

                <tr>
                  <td class="band_b1 band_x31"><div class="div_b1"><?php lang("Proyectos","Projects");?></div></td>
                  <td class="band_b2 band_x32"><?php bandProjects();?></td>
                  <td class="band_x33"></td>                  
                </tr>

                <tr>
                  <td class="band_b1 band_x41"><div class="div_b1"><?php lang("Idiomas","Spoken languages");?></div></td>
                  <td class="band_b2 band_x42"><?php bandIdiomas();?><br><br></td>
                  <td class="band_x43"></td>                  
                </tr>
                <tr>
                  <td class="band_b1 band_x41"><div class="div_b1"><?php lang("Roles","Roles");?></div></td>
                  <td class="band_b2 band_x42"><?php bandDominioTecnico();?><br><br></td>
                  <td class="band_x43"></td>                  
                </tr>                <tr>
                  <td class="band_b1 band_x41"><div class="div_b1"><?php lang("Información Adicional","More Details");?></div></td>
                  <td class="band_b2 band_x42"><?php bandInformacionAdicional();?></td>
                  <td class="band_x43"></td>                  
                </tr>
                <!-- <tr>
                  <td class="band_b1 band_x51"></td>
                  <td class="band_b2 band_x52"><?php bandLetraChica();?><br></td>
                  <td class="band_x53"></td>                  
                </tr>-->

              </table>
          </td>
        </tr>          

      </table>
  </body>
</html>