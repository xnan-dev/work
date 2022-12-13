<?php ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CV</title>

<style>
	body{
		background-color: #D7D7D7;	
		color:#444444;
	}

a {
	text-decoration: none;
	font-weight: bold;
}
  .cv {
    font-family: "verdana";
    width1: 1500px !important;
    background-color: white;
 	box-shadow: 10px 10px 43px 10px rgba(0,0,0,0.75);
 	margin:50pt;
 	margin-left:50pt;
 	margin.right:50pt;
 }

.table_study td {
	padding:5pt;
}
img {
	border:0px solid black;
}

.img_uba {
	padding:20pt;
}
.div_b1 {
	border-bottom:5px solid #FFCB00;
}

  table {
  	border-collapse: collapse;
  	border-spacing: 0px	!important;
  		    -webkit-border-horizontal-spacing: 0px !important;

  }

  .productWork td {
    margin:10pt;
  }
  .pk {
  	text-align: right;
  	font-weight: bold;
  }
  .letraChica {
  	font-size:12pt;
  }

  .band-qr {
  	padding-right:40pt;
  }

  .band_middle {
    white-space: nowrap;
    padding:0px;
  } 

	.band_top {
		padding:0px;	
	}
  .band_a,.row_top {
    background-color: #FFCB00;
  }
  .band_b1 {
    background-color: #545358;
    color: #e0e0e0;
    font-weight:  bold;
    vertical-align: top;
    padding: 20pt;
    padding-right: 40pt;
    padding-top:10pt;
    white-space: nowrap;
    text-align: right;
    text-transform: uppercase;

    font-family: Verdana, Geneva, sans-serif;
	font-size: 16pt;
	letter-spacing: 2px;
	word-spacing: 0.8px;
	/*color: #000000;*/
	font-weight: normal;
	text-decoration: none;
	font-style: normal;
	font-variant: normal;
	text-transform: uppercase;
  }

  .table_middle {

  }

  .i1,.i2,.i3 {
 	padding-bottom:7pt;
  }

  .ik {
    display: inline-block;
    color:#73652E;
    font-weight: bold;
    min-width:150pt;
    text-align:right;
  }
  .band-contact tr {
  	maargin-bottom:5pt;
  }
  .i3 {
  	padding-bottom: 20pt;
  }
  .band_b2 {
    text-align: left;
    margin-bottom: 5pt;
    font-size: 14pt;
    padding:40pt;
    padding-bottom: 10pt;
    padding-top:10pt;
    white-space: normal;
 }

  .band-black {
    background-color: #1b1a17;
  }

  .band-name {
    text-align: center;
    font-size:  30pt;
    padding: 10pt;
    padding-top:40pt;

    font-family: Verdana, Geneva, sans-serif;
font-size: 35px;
letter-spacing: 2.6px;
word-spacing: 0.8px;
color: #444444;
font-weight: 400;
text-decoration: none;
font-style: normal;
font-variant: normal;
text-transform: uppercase;

text-shadow: 3px 4px 2px rgba(107,104,135,0.45);
  }

  .band-update {
    color: #444444;
    font-size:  11pt;
    padding: 10pt;
    text-align: right;
  }
  
  .t-info {
    text-align: left;
    margin-bottom: 5pt;
    /*font-size: 10pt*/;    
  }  

  p {
    margin: 0;
    margin-bottom: 0;
    padding:  0;    
  }

  .i1 {
    font-weight: bold    
  }

  .band-foot {
    font-size: 8pt;
  }

</style>

  </head>
  <body>

<?php
  function activeLang() {
    return @$_GET["lang"]=="en" ? "en" : "es";
  }

  function lang($es,$en) {
    if (activeLang()=="en") {
      echo $en;
    } else {
      echo $es;
    }
  }

  function slang($es,$en) {
    if (activeLang()=="en") {
      return $en;
    } else {
      return $es;
    }
  }

?>

<?php function preferenciasLaborales() { ?>
              <div class="row">
                <div class="col band-info">    
                  <p class="i2">Análisis de sistemas, diseño de arqutitectura, desarrollador Python o PHP, team leader.</p>
                  <p class="i2">Modalidad remota o híbrido, bajo facturación monotributo. Flexibilidad horaria.</p>
                </div>
              </div>
<?php } ?>


<?php function bandIdiomas() { ?>
       <div class="row">
          <div class="col band-info">    
            <p class="i1"><?php lang("Inglés fluido.","Spanish native, English fluent.");?></p>
          </div>
        </div>
       
<?php } ?>

<?php function bandFormacionAcademica() { ?>
              <div class="row">
                <div class="col band-info">
                <table class="table_study">
                	<tr>
                		<td><img class="img_uba" src="uba-logo.jpg" width="100"></td>
                		<td>
		                  <p class="i1"><?php lang("Analista Universitario en Computación","Analyst in Computer Science (University grade)");?></p>
		                  <p class="i2"><?php lang("Universidad de Buenos Aires *","Universidad de Buenos Aires *");?></p>                			
                		</td>
                	</tr>
                </table>
                </div>
              </div>
<?php } ?>

<?php function bandInformacionAdicional() { ?>
              <div class="row">
                <div class="col band-info">    
                  <p class="i1"><?php lang("Disponibilidad para viajar, relocación y trabajo remoto.","Availability to travel and remote work");?></p>
                </div>
              </div>

              <!-- <table class="t-info">
                <tr><td><?php lang("Otras Tecnologías usadas:","Other used tech:");?></td>
                	<td><?php lang("Metodologías Ágiles, HTML5, Javascript, Microservicios
                 Web Frameworks, CCS3, SQL, API Rest, GIT, y otras (consultar).","Agile development, HTML5, JavaScript, Microservices, Web 
Frameworks,CCS3, SQL, API Rest, GIT and other (ask for details).");?></td></tr>                  
              </table>  -->
<?php } ?>

<?php function bandDominioTecnico() { ?>
              <div class="row">
                <div class="col band-info">    
                  <p class="i1"><?php lang("Full Stack Developer PHP","PHP Full Stack Developer");?></p>
                </div>
              </div>

              <table class="t-info">
                <tr><!-- <td><?php lang("Lenguajes y Frameworks:","Frameworks and others:");?> --></td>
                	<td><?php lang("PHP 8, Synfony, Web Stack (ver sección técnologias relacionadas).","PHP 8, Synfony, Web Stack (See related techs section below).");?></td></tr>                  
              </table> 
              
              <br>

              <div class="row">
                <div class="col band-info">    
                  <p class="i1"><?php lang("Full Stack Developer Java","Java Full Stack Developer");?></p>
                </div>
              </div>

              <table class="t-info">
                <tr><!-- <td><?php lang("Lenguajes y Frameworks:","Frameworks and others:");?> --></td>
                	<td><?php lang("Java 8, Spring Boot, Thymeleaf, JPA, Hibernate, Maven, Eclipse, Web Stack.","Java 8, Spring Boot, Thymeleaf, JPA, Hibernate, Maven, Eclipse, Web Stack.");?></td></tr>                  
              </table> 

   			 <br>

              <div class="row">
                <div class="col band-info">    
                  <p class="i1"><?php lang("Tecnologías relacionadas","Related Techs");?></p>
                </div>
              </div>

              <table class="t-info">
                <tr><td><?php lang("Tecnologías relacionadas","Other related techs:"	);?></td>
                	<td><?php lang("Metodologías Ágiles, HTML5, Javascript, Microservicios
                 Web Frameworks, CCS3, SQL, API Rest, GIT, y otras (consultar).","Agile development, HTML5, JavaScript, Microservices, Web 
Frameworks,CCS3, SQL, API Rest, GIT and other (ask for details).");?></td></tr>                  
              </table> 
<?php } ?>

  
    <?php    
    function productWork($company,$logoFile,$logoSize,$role,$product,$skills,$tech,$duration="") {
    ?>

    <div class="row">

      <div class="col band-info">    
      
      <table style="border:0px solid red; width:100%; margin-bottom:20pt;">
      
      <?php if ($logoFile!="") { ?>
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

              <tr>
                <td class="ik"><?php lang("Actividad","Skills applied"); ?></td>
                <td><?php echo $skills;?></td>
              </tr>

              <tr>
                <td class="ik"><?php lang("Tecnologías usadas","Technology used"); ?></td>
                <td><?php echo $tech;?></td>
              </tr>


            </table>

          </td>
        </tr>
      </table>
      
      </div>
    </div>


    <?php
    } ?>

<?php function bandExperienciaLaboral() { ?>


          <?php productWork(
                  slang("Ministerio de Habitart y Vivienda","Habitat Ministry (Government)"),
                  "vivienda-logo.png",
                  "200pt",
                  slang("",""),
                  slang("",""),
                  slang("Reingeniería, Desarrollo Full Stack","Reengineering, Software Architecture Design, Full Stack Developement"),
                  slang("PHP, Full Stack Dev, MySql","PHP, Full Stack Dev, MySql"),
                  slang("6 meses (actual)","6 months (current)")
                );
            ?>

          <?php productWork(
                  slang("Axite S.R.L.","Axite S.R.L."),
                  "axite-logo.png",
                  "200pt",
                  slang("",""),
                  slang("",""),
                  slang("Desarrollo Microsoft Dynamics 365 for Finance and Operations, Análisis de Performance","Microsoft Dynamics 365 for Finance and Operations development, Performance Analysis, Reverse Engineering"),
                  slang("Microsoft Dynamics 365 for Finance and Operations, SQL Server","Microsoft Dynamics 365 for Finance and Operations, SQL Server"),
                  slang("3 años, 2019-2021","3 years, 2019-2021")
                );
            ?>

          <?php productWork(
                  slang("Excelsos","Excelsos"),
                  "excelsos-logo.png",
                  "200pt",
                  slang("",""),
                  slang("",""),
                  slang("Administración de servidores Linux, Full Stack Developer PHP","Linux server admin, Linux server admin, PHP and .NET Full Stack"),
                  slang("C# .NET, PHP, MySQL, PostgreSQL, Bash, Linux, Apache","C# .NET, PHP, MySQL, PostgreSQL, Bash, Linux, Apache"),
                  slang("10 años","10 years")
                );
            ?>            

          <?php productWork(
                  slang("VMN S.R.L.","VMN S.R.L."),
                  "",
                  "200pt",
                  slang("",""),
                  slang("",""),
                  slang("Java Developement, C++ Developement, Performance Analysis, Reingeniería","Java Developement, Performance Analysis, Reengineering"),
                  slang("C++ , Java, Hibernate, Spring, MySql, SQLServer","C# .NET, Java, Hibernate, Spring, MySQL, SQL Server"),
                  slang("2 años y medio","2.5 years")
                );
            ?>  

<?php } ?>

<?php  function bandProjects() { ?>
            <?php productWork(
                "",
                "shell-logo.png",
                "100pt",
                slang("Consultor","Consultant"),
                slang("Bridge SAP to HTTPS","SAP to HTTPS Bridge"),
                slang( "Prototipado rápido, Análisis funcional, Arqutitectura de software, Implementación, Documentación y Deploy a producción","Rapid Prototyping, Functional Analysis, Software Architecture Design, Development, Documentation, Deployment to production"),
                slang("Java, Agile","Java, Rapid Prototyping, Agile")
              );
            ?>

            <?php productWork(
                  slang("",""),
                  "visa-logo.png",
                  "100pt",
                  slang("Consultor","Consultant"),
                  slang("Sistema de Gestion Interno","Internal Management system"),
                  slang("Reingeniería, Deploy a producción","Reengineering, deploy to production"),
                  slang("Java, Spring, Hibernate","Java, Spring, Hibernate")
                );
            ?>


            <?php productWork(
                  slang("",""),
                  "nextel-logo.png",
                  "200pt",
                  slang("Consultor","Consultant"),
                  slang("Sistema de Gestion Interno","Internal Management system"),
                  slang("Reingeniería, Deploy a producción","Reengineering, deploy to production"),
                  slang("Java, Spring, Hibernate","Java, Spring, Hibernate")
                );
            ?>

            <?php productWork(
                  slang("",""),
                  "megalabs-logo.png",
                  "200pt",
                  slang("Consultor","Consultant"),
                  slang("Prototipo de Bridge entre driver de balanza industrial y Microsoft Dynamics 365","Prototype: Service Bridge between Industrial Balance driver to Microsoft Dynamics 365"),
                  slang("Arquitectura de Software, Desarrollo y Prototipado","Rapid Prototyping, Software Architecture, Development"),
                  slang("C# .NET , Microsoft Dynamics 365 FO","C# .NET , Microsoft Dynamics 365 FO")
                );
            ?>
            
            <?php productWork(
                  slang("",""),
                  "megalabs-logo.png",
                  "200pt",
                  slang("Consultor","Consultant"),
                  slang("Prototipo de Bridge entre Dispositivo industrial de control de almacenes y Microsoft Dynamics 365 FO","Prototype for Web Bridge between Industrial Warehouse Device and Microsoft Dynamics 365"),
                  slang("Arquitectura de Software, Desarrollo y Prototipado","Rapid Prototyping, Software Architecture, Development"),
                  slang("C# .NET , Microsoft Dynamics 365 FO","C# .NET , Microsoft Dynamics 365 FO")
                );
            ?>

            <?php productWork(
                  slang("",""),
                  "megalabs-logo.png",
                  "200pt",
                  slang("Consultor","Consultant"),
                  slang("Mobile Apps","Mobile Apps"),
                  slang("Desarrollo, Análisis de performance, Integración Microsoft Dynamics 365 UI to Mobile HTML y Prototipado",
                    "Rapid Prototyping, Performance Analysis, Microsoft Dynamics UI to Mobile HTML Integration"),
                  slang("Microsoft Dynamics 365, Web Dev Stack","Microsoft Dynamics 365, Web Dev Stack")
                );
            ?>


              <?php productWork(
                  slang("","Planning Ministry Argentina (Gov.)"),
                  "planificacion-logo.jfif",
                  "200pt",
                  slang("Proveedor","Contractor"),
                  slang("Solución de Formularios dinámicos","Dynamic Forms Solution"),
                  slang( "Prototipado Rápido, Análisis Funcional, Arquitectura de Software, Implementación, Documentación y Deploy a producción.",
                                 "Functional Analysis, Software Architecture Design, Development, Documentation, Deployment to production"),
                  slang(".NET, SQLServer, Agile",".NET, SQLServer, Agile")
                );
              ?>

              <?php productWork(
                    slang("",""),
                    "lisicki-logo.png",
                    "200pt",
                    slang("Proveedor","Contractor"),
                    slang("Plataforma de control de proveedores","Vendor Compliance Tracking and Reporting Platform"),
                    slang("Análisis de performance y optimización. Rediseño de capa de almacenamiento para producción de reportes de alta performance. Diseño e implementación de sistema de caché. Reingeniería",
                            "Performance Bottleneck analysis and removal. Database Layer redesign for High Performance Reporting. Custom Taylored cache design for high performance reporting, Reengineering"),
                    slang("PHP, MySQL","PHP, MySQL")
                  );
              ?>

              <?php productWork(
                  slang("","National Institute of Statistics (Gov.)"),
                  "indec-logo.png",
                  "200pt",                  
                  slang("Proveedor","Contractor"),
                  slang("Administrador de contenidos interno","Internal content management solution"),
                  slang( "Prototipado Rápido, Análisis Funcional, Aquitectura de Software, Implementación, Documentación y Deploy a producción.",
                                 "Functional Analysis, Software Architecture Design, Development, Documentation, Deployment to production"),
                  slang(".NET, SQLServer, Agile",".NET, SQLServer, Agile")
                );
              ?>
           
            <?php productWork(
                  slang("","Hurlingam Township (Gov.)"),
                  "hurlingam-logo.jpg",
                  "400pt",
                  slang("Proveedor","Contractor"),
                  slang("Sistemas de Gestion Internos","Internal Management system"),
                  slang("Corrección de bugs","Bug fixing in productive system"),
                  slang("Java, SQL","Java, SQL")
                );
              ?>


            <?php productWork(
                  slang("Municipalidad de Pergamino","Pergamino Township (Gov.)"),
                  "pergamino-logo.png",
                  "100pt",
                  slang("Proveedor","Contractor"),
                  slang("Solución para agendado de turnos de licencias de conducir","Driving License renewal scheduling solution"),
                  slang("Análisis funcional, Full Stack Developement, Rapid Prototyping, Agile",
                    "Functional Analysis, Software Development,Full Stack Developer, Rapid Prototyping, Agile"),
                  slang("PHP, MySQL","PHP, MySQL")
                );
            ?>

            <br>

<?php 
 } 
?>

<?php function bandQr() { ?>
      <div class="col band-qr"><img width="200" src="qr-work-wiki.jpg"></div>
<?php } ?>

<?php function  bandContact() { ?>
            <div class="col col-md-7 band-contact">
              <table>
                <tr>
                  <td rowspan="6"><?php bandQr();?></td>
                  <td class="text-right pk">E-mail:</td><td class="text-left">hernan.rancati@gmail.com</td>
                </tr>

                <tr><td class="text-right pk"><?php lang("Móvil y Whatsapp","Whatsapp / Phone");?>:</td>
                  <td class="text-left">+54 9 11 5579 0624</td></tr>
              	  <tr><td class="text-right pk"><?php lang("Residencia","Current Location");?>:</td><td class="text-left">C.A.B.A.</td></tr>
                <tr><td class="text-right pk"><?php lang("F. Nacimiento","Birth Date");?>:</td><td class="text-left"><?php lang("23 de Julio de 1980","July 23 1980");?></td></tr></tr>
                <tr><td colspan="2" class="text-right pk"><a target="_blank" href="https://github.com/xnan-dev/work/wiki/Professional-Profile"><?php lang("Online profile aquí: shorturl.at/ilrw7","Online profile here: shorturl.at/ilrw7");?>	</a></td></tr></tr>
              </table>       
            </div>
<?php } ?>

<?php function bandOrange() { ?>
     <div class="col">
          <div class="row">
              <div class="col band-name">
                <b><?php lang("Hernán","Hernan");?></b> Gabriel Rancati      
              </div>
          </div>        
          <div class="row">
            <div class="col text-right  band-update">
              <?php lang("Act. Diciembre de 2022","Updated: December 2022");?>
            </div>
          </div>          
        </div>
   
<?php }?>

<?php function bandPreferenciasLaborales() { ?>
     <div class="col band-orange">
          <div class="row">
              <div class="col band-name">
                Hernán Gabriel Rancati      
              </div>
          </div>        
          <div class="row">
            <div class="col text-right  band-update">
              Act. Septiembre de 2022
            </div>
          </div>          
        </div>
   
<?php }?>

<?php function bandLetraChica() { ?>
       <p class="letraChica">
        <?php lang("*Título en trámite, adicionalmente: Técnico en computación, J.F.Kennedy, Lanús.","*Bureaucratic processes in course, additionally: Computer Technician, J.F.Kennedy, Lanús.");?>
      </p>
<?php }?>
     <table class="cv" border="0">
        <tr>
          <td class="band_middle">
            <table class="table_middle" bordercolor="#ff0000" border="0">
                <tr class="row_top">
                  <td class="band_b1 band_x01">&nbsp;</td>
                  <td class="band_top band_a band_x02" colspan="3"><?php bandOrange(); ?></td>
                  <td class="band_x03"></td>
                </tr>
                <tr>
                  <td class="band_b1 band_x11"><div class="div_b1"><?php lang("Contacto","Contact");?></div></td>
                  <td class="band_b2 band_x12"><?php bandContact(); ?></td>
                </tr>
                <tr>
                <tr>
                  <td class="band_b1 band_x21"><div class="div_b1"><?php lang("Formación Académica","Education");?></div></td>
                  <td class="band_b2 band_x22"><?php bandFormacionAcademica();?></td>
                  <td class="band_x23"></td>
                  
                </tr>

                <tr>
                  <td class="band_b1 band_x31"><div class="div_b1"><?php lang("Proyectos","Projects");?></div></td>
                  <td class="band_b2 band_x32"><?php bandProjects();?></td>
                  <td class="band_x33"></td>                  
                </tr>

                <tr>
                  <td class="band_b1 band_x31"><div class="div_b1"><?php lang("Experiencia Laboral","Work Positions");?></div></td>
                  <td class="band_b2 band_x32"><?php bandExperienciaLaboral();?></td>
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
                <tr>
                  <td class="band_b1 band_x51"></td>
                  <td class="band_b2 band_x52"><?php bandLetraChica();?><br></td>
                  <td class="band_x53"></td>                  
                </tr>

              </table>
          </td>
        </tr>          

      </table>
  </body>
</html>