<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
               Universidad Tecnologica Metropolitana
        </title>

        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/css/jscal2.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/css/border-radius.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/css/steel/steel.css" />
    <script type="text/javascript" src="<?php echo base_url()?>public/js/jscal2.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>public/js/lang/es.js"></script>

    
    

    <link href="<?php echo base_url()?>public/css/style.css" rel="stylesheet" type="text/css" media="all" />
    
    <link href="<?php echo base_url()?>public/css/UI Lightness/jquery-ui-1.8.6.custom.css" rel="stylesheet" type="text/css" media="all" />
        
    <link href="<?php echo base_url()?>public/css/ui.jqgrid.css" rel="stylesheet" type="text/css" media="all" />
    
    <link href="<?php echo base_url()?>public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    
    <link href="<?php echo base_url()?>public/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" media="all" />
            
    <script type="text/javascript">
      var webroot = '/foro/index.blade.php';var wroot = '/Laravel/public/';var jsession_data = [];var theme = "UI Lightness";
    </script>

      <script type="text/javascript" src="<?php echo base_url()?>public/js/jquery-1.4.2.min.js"></script>
      
      <script type="text/javascript" src="<?php echo base_url()?>public/js/jquery.Rut.js"></script>
      
      <script type="text/javascript" src="<?php echo base_url()?>public/js/jquery.validate.js"></script>
      
      <script type="text/javascript" src="<?php echo base_url()?>public/js/Utilitarios.js"></script>
      
      <script type="text/javascript" src="<?php echo base_url()?>public/js/jquery.selectboxes.js"></script>
      
      <script type="text/javascript" src="<?php echo base_url()?>public/js/jquery-ui-1.8.6.custom.min.js"></script>
      
      <script type="text/javascript" src="<?php echo base_url()?>public/js/jquery.ui.datepicker-es.js"></script>
      
      <script type="text/javascript" src="<?php echo base_url()?>public/js/jquery.layout.min.js"></script>
      
      <script type="text/javascript" src="<?php echo base_url()?>public/js/i18n/grid.locale-sp.js"></script>
      
      <script type="text/javascript" src="<?php echo base_url()?>public/js/jquery.jqGrid.min.js"></script>
      
      <script type="text/javascript" src="<?php echo base_url()?>public/js/general.js"></script>
      
      <script type="text/javascript" src="<?php echo base_url()?>public/js/themeswitchertool.js"></script>
      
      <script type="text/javascript" src="<?php echo base_url()?>public/js/layout-default.js"></script>
      

<!-- ----------------------------------------------------------------- -->
<!--
      {{ HTML::script('js/jquery.infinitecarousel3.js') }}
      {{ HTML::script('js/jquery.infinitecarousel3.min.js') }}  -->

<!--{{ HTML::script('js/jquery.min.js') }} -->


<script type="text/javascript">

$(function(){
  $('#carousel').infiniteCarousel({
    displayTime: 6000,
    textholderHeight : .25
  });
});
</script>
<style type="text/css">
body {
  padding-top: 50px;
}
#carousel {
  margin: 0 auto;
  width: 400px;
  height: 390px;
  padding: 0;
  overflow: scroll;
  border: 2px solid #999;
}
#carousel ul {
  list-style: none;
  width: 1500px;
  margin: 0;
  padding: 0;
  position: relative;
}
#carousel li {
  display: inline;
  float: left;
}
.textholder {
  text-align: left;
  font-size: small;
  padding: 6px;
  -moz-border-radius: 6px 6px 0 0;
  -webkit-border-top-left-radius: 6px;
  -webkit-border-top-right-radius: 6px;
}



/////////////////////// TABLA CSS //////////////////////////////////////
.CSSTableGenerator {
    margin:0px;padding:0px;
    width:100%;
    box-shadow: 10px 10px 5px #888888;
    border:1px solid #3f7f00;
    
    -moz-border-radius-bottomleft:8px;
    -webkit-border-bottom-left-radius:8px;
    border-bottom-left-radius:8px;
    
    -moz-border-radius-bottomright:8px;
    -webkit-border-bottom-right-radius:8px;
    border-bottom-right-radius:8px;
    
    -moz-border-radius-topright:8px;
    -webkit-border-top-right-radius:8px;
    border-top-right-radius:8px;
    
    -moz-border-radius-topleft:8px;
    -webkit-border-top-left-radius:8px;
    border-top-left-radius:8px;
}.CSSTableGenerator table{
    border-collapse: collapse;
        border-spacing: 0;
    width:100%;
    height:100%;
    margin:0px;padding:0px;
}.CSSTableGenerator tr:last-child td:last-child {
    -moz-border-radius-bottomright:8px;
    -webkit-border-bottom-right-radius:8px;
    border-bottom-right-radius:8px;
}
.CSSTableGenerator table tr:first-child td:first-child {
    -moz-border-radius-topleft:8px;
    -webkit-border-top-left-radius:8px;
    border-top-left-radius:8px;
}
.CSSTableGenerator table tr:first-child td:last-child {
    -moz-border-radius-topright:8px;
    -webkit-border-top-right-radius:8px;
    border-top-right-radius:8px;
}.CSSTableGenerator tr:last-child td:first-child{
    -moz-border-radius-bottomleft:8px;
    -webkit-border-bottom-left-radius:8px;
    border-bottom-left-radius:8px;
}.CSSTableGenerator tr:hover td{
    
}
.CSSTableGenerator tr:nth-child(odd){ background-color:#d4ffaa; }
.CSSTableGenerator tr:nth-child(even)    { background-color:#ffffff; }.CSSTableGenerator td{
    vertical-align:middle;
    
    
    border:1px solid #3f7f00;
    border-width:0px 1px 1px 0px;
    text-align:left;
    padding:7px;
    font-size:10px;
    font-family:Arial;
    font-weight:normal;
    color:#000000;
}.CSSTableGenerator tr:last-child td{
    border-width:0px 1px 0px 0px;
}.CSSTableGenerator tr td:last-child{
    border-width:0px 0px 1px 0px;
}.CSSTableGenerator tr:last-child td:last-child{
    border-width:0px 0px 0px 0px;
}
.CSSTableGenerator tr:first-child td{
        background:-o-linear-gradient(bottom, #4d9307 5%, #336005 100%);    background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #4d9307), color-stop(1, #336005) );
    background:-moz-linear-gradient( center top, #4d9307 5%, #336005 100% );
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#4d9307", endColorstr="#336005");  background: -o-linear-gradient(top,#4d9307,336005);

    background-color:#4d9307;
    border:0px solid #3f7f00;
    text-align:center;
    border-width:0px 0px 1px 1px;
    font-size:14px;
    font-family:Arial;
    font-weight:bold;
    color:#ffffff;
}
.CSSTableGenerator tr:first-child:hover td{
    background:-o-linear-gradient(bottom, #4d9307 5%, #336005 100%);    background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #4d9307), color-stop(1, #336005) );
    background:-moz-linear-gradient( center top, #4d9307 5%, #336005 100% );
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#4d9307", endColorstr="#336005");  background: -o-linear-gradient(top,#4d9307,336005);

    background-color:#4d9307;
}
.CSSTableGenerator tr:first-child td:first-child{
    border-width:0px 0px 1px 0px;
}
.CSSTableGenerator tr:first-child td:last-child{
    border-width:0px 0px 1px 1px;
}
</style>
<!-------------------------------------------------------------------- -->



</head>    
<body>
    <header class="ui-layout-north">
        <h1>
            <img alt="logo" src="<?php echo base_url()?>public/img/utem_estado_de_chile.png">
        </h1>
        <div id="top-menu">
            
                        
            <?=br(1).anchor('admin/info', 'Proyectos de Titulo'); ?>
            
            
            <?=anchor(base_url().'login/logout_ci', 'Cerrar sesión')?>
            
        </div>
    </header>
    <!--Menu de la izquierda-->
    <div id="left-menu" class="ui-layout-west">
        <div id="accordion">
            <!--Seccion control de bienes-->
            <div>
                <h3><a href="#" rel="3" >Acerca de la UTEM</a></h3>
                <div class="submenu">
                    <ul>
                      <li>hola</li>
                      <li>hola</li>
                      <li>hola</li>
                    </ul>
                </div>
            </div>
            <div>
                <h3><a href="#" rel="4" >Gestionar Proyectos de Titulo</a></h3>
                <div class="submenu">
                    <ul>
                        <?=br(1).anchor('admin/', 'Agregar Proyectos de Titulo'); ?>
                    </ul>
                </div>
            </div>
            <div>
                <h3><a href="#" rel="4" >Gestionar Usuarios</a></h3>
                <div class="submenu">
                    <ul>
                        <?=br(1).anchor('admin/agregar', 'Usuarios'); ?>
                    </ul>
                </div>
            </div>

            <div>
                <h3><a href="#" rel="4" >Buscar Titulo</a></h3>
                <div class="submenu">
                    <ul>
                        <?=form_open(base_url().'resultados/validar_titulo')?>
                        <input type="text" name="buscar_titulo" id="buscar_titulo" />
                        <input type="submit" value="Buscar" />
                        <?=form_close()?>
                    </ul>
                </div>
            </div>
            <div>
                <h3><a href="#" rel="4" >Buscar Autor</a></h3>
                <div class="submenu">
                    <ul>
                        <?=form_open(base_url().'resultados/validar_autor')?>
                        <input type="text" name="buscar_autor" id="buscar_autor" />
                        <input type="submit" value="Buscar" />
                        <?=form_close()?>
                    </ul>
                </div>
            </div>
            <div>
                <h3><a href="#" rel="4" >Buscar Carrera</a></h3>
                <div class="submenu">
                    <ul>
                        <?=form_open(base_url().'resultados/validar_carrera')?>
                        <?php $options = array(
                                  ''  => 'Seleccionar Carrera',
                                  'Ingieneria en Informatica'    => 'Ingieneria en Informatica',
                                  'Arquitectura'    => 'Arquitectura',
                                  'Bachillerato en Ciencias de la Ingeniería'    => 'Bachillerato en Ciencias de la Ingeniería',
                                  'Bibliotecología y Documentación'    => 'Bibliotecología y Documentación',
                                  'Cartografía y Geomática'    => 'Cartografía y Geomática',
                                  'Contador Público y Auditor'    => 'Contador Público y Auditor',
                                  'Dibujante Proyectista'    => 'Dibujante Proyectista',
                                  'Diseño en Comunicación Visual'    => 'Diseño en Comunicación Visual',
                                  'Diseño Industrial'    => 'Diseño Industrial',
                                  'Ingeniería Civil en Computación mención Informática'    => 'Ingeniería Civil en Computación mención Informática',
                                  'Ingeniería Civil Industrial'    => 'Ingeniería Civil Industrial',
                                  'Ingeniería Comercial'    => 'Ingeniería Comercial',
                                  'Ingeniería en Administración Agroindustrial'    => 'Ingeniería en Administración Agroindustrial',
                                  'Ingeniería en Comercio Internacional'    => 'Ingeniería en Comercio Internacional',
                                  'Ingeniería en Construcción'    => 'Ingeniería en Construcción',
                                  'Ingeniería Civil Electrónica'    => 'Ingeniería Civil Electrónica',
                                  'Ingeniería en Geomensura'    => 'Ingeniería en Geomensura',
                                  'Ingeniería en Gestión Turística'    => 'Ingeniería en Gestión Turística',
                                  'Ingeniería en Industria Alimentaria'    => 'Ingeniería en Industria Alimentaria',
                                  'Ingeniería en Mecánica'    => 'Ingeniería en Mecánica',
                                  'Ingeniería Civil en Prevención de Riesgos y Medioambiente'    => 'Ingeniería Civil en Prevención de Riesgos y Medioambiente',
                                  'Ingeniería Química'    => 'Ingeniería Química',
                                  'Ingeniería en Transporte y Tránsito'    => 'Ingeniería en Transporte y Tránsito',
                                  'Ingeniería Industrial'    => 'Ingeniería Industrial',
                                  'Química Industrial'    => 'Química Industrial',
                                  'Trabajo Social'    => 'Trabajo Social',
                                  'Ingeniería en Biotecnología'    => 'Ingeniería en Biotecnología',
                                  'Ingeniería Civil en Obras Civiles'    => 'Ingeniería Civil en Obras Civiles'

                                ); ?>

                        <br /><?php echo form_dropdown('buscar_carrera', $options, set_value('buscar_carrera'))?>

                        <input type="submit" value="Buscar" />
                        <?=form_close()?>
                    </ul>
                </div>
            </div>
            
            <div>
                <h3><a href="#" rel="4" >Buscar Fecha</a></h3>
                <div class="submenu">
                    <ul>
                        <?=form_open(base_url().'resultados/validar_fecha')?>
                        <input type="text" name="buscar_fecha" id="buscar_fecha" />
                        <input type="submit" value="Buscar" />
                        <?=form_close()?>
                    </ul>
                </div>
            </div>
            <div>
                <h3><a href="#" rel="4" >Buscar Descripcion</a></h3>
                <div class="submenu">
                    <ul>
                        <?=form_open(base_url().'resultados/validar_descripcion')?>
                        <input type="text" name="buscar_descripcion" id="buscar_descripcion" />
                        <input type="submit" value="Buscar" />
                        <?=form_close()?>
                    </ul>
                </div>
            </div>
            <div>
                <h3><a href="#" rel="4" >Buscar Resumen</a></h3>
                <div class="submenu">
                    <ul>
                        <?=form_open(base_url().'resultados/validar_resumen')?>
                        <input type="text" name="buscar_resumen" id="buscar_resumen" />
                        <input type="submit" value="Buscar" />
                        <?=form_close()?>
                    </ul>
                </div>
            </div>     
            </br>
        </div>      
    </div>
    </br>
    <div id="carousel" class="ui-layout-center">
        <ul>

     <p> 
            

<font color="red" style="font-weight: bold; font-size: 14px;">
  <?=@$error?></font>
<font color="red" style="font-weight: bold; font-size: 14px;">
  <?php echo validation_errors(); ?></font>

<?=form_open_multipart(base_url().'admin/do_upload');
//aqui se procesará nuestro formulario, controlador comentarios, función insertar_comentarios
//creamos los arrays que compondran nuestro formulario
//primer array con el input que se llamará nombre y será donde introduciremos el mismo
    $titulo = array(
        'name' => 'titulo',
        'id' => 'titulo',
        'size' => '50',
        'style' => 'width:50%',
        'value' => set_value('titulo') // con esto al procesar el formulario de forma incorrecta quedará guardado el dato que le habíamos puesto
    );
    $autor = array(
        'name' => 'autor',
        'id' => 'autor',
        'size' => '50',
        'style' => 'width:50%',
        'value' => set_value('autor') // con esto al procesar el formulario de forma incorrecta quedará guardado el dato que le habíamos puesto
    );
    $descripcion = array(
        'name' => 'descripcion',
        'id' => 'descripcion',
        'size' => '50',
        'style' => 'width:50%',
        'value' => set_value('descripcion')
    );
 
//el cuarto...(campo mensaje)
    $resumen = array(
        'name' => 'resumen',
        'id' => 'resumen',
        'rows' => 10,
        'cols' => 40,
        'value' => set_value('resumen')
    );
//el segundo array(campo email)
 
   
    $userfile = array(
        'name' => 'userfile',
        'id' => 'userfile',
        'rows' => 10,
        'cols' => 40,
        'value' => set_value('userfile')
    );
 
//el botón submit de nuestro formulario
    $submit = array(
        'name' => 'submit',
        'id' => 'submit',
        'value' => 'Subir Tesis',
        'title' => 'Subir Tesis'
    );
    ?>
<?php
echo form_fieldset('Ingreso Proyecto de Titulo');
?>
            <table>
                <tr>
                    <td>
                        <?php echo form_label('Titulo: '); ?>
                    </td>
                    <td>
                        <?php echo form_input($titulo); ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo form_label('Autor: '); ?>
                    </td>
                    <td>
                        <?php echo form_input($autor); ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="carrera">Carrera: </label>
                    </td>
                    <td>
                        <?php $options = array(
                                  ''  => 'Seleccionar Carrera',
                                  'Ingieneria en Informatica'    => 'Ingieneria en Informatica',
                                  'Arquitectura'    => 'Arquitectura',
                                  'Bachillerato en Ciencias de la Ingeniería'    => 'Bachillerato en Ciencias de la Ingeniería',
                                  'Bibliotecología y Documentación'    => 'Bibliotecología y Documentación',
                                  'Cartografía y Geomática'    => 'Cartografía y Geomática',
                                  'Contador Público y Auditor'    => 'Contador Público y Auditor',
                                  'Dibujante Proyectista'    => 'Dibujante Proyectista',
                                  'Diseño en Comunicación Visual'    => 'Diseño en Comunicación Visual',
                                  'Diseño Industrial'    => 'Diseño Industrial',
                                  'Ingeniería Civil en Computación mención Informática'    => 'Ingeniería Civil en Computación mención Informática',
                                  'Ingeniería Civil Industrial'    => 'Ingeniería Civil Industrial',
                                  'Ingeniería Comercial'    => 'Ingeniería Comercial',
                                  'Ingeniería en Administración Agroindustrial'    => 'Ingeniería en Administración Agroindustrial',
                                  'Ingeniería en Comercio Internacional'    => 'Ingeniería en Comercio Internacional',
                                  'Ingeniería en Construcción'    => 'Ingeniería en Construcción',
                                  'Ingeniería Civil Electrónica'    => 'Ingeniería Civil Electrónica',
                                  'Ingeniería en Geomensura'    => 'Ingeniería en Geomensura',
                                  'Ingeniería en Gestión Turística'    => 'Ingeniería en Gestión Turística',
                                  'Ingeniería en Industria Alimentaria'    => 'Ingeniería en Industria Alimentaria',
                                  'Ingeniería en Mecánica'    => 'Ingeniería en Mecánica',
                                  'Ingeniería Civil en Prevención de Riesgos y Medioambiente'    => 'Ingeniería Civil en Prevención de Riesgos y Medioambiente',
                                  'Ingeniería Química'    => 'Ingeniería Química',
                                  'Ingeniería en Transporte y Tránsito'    => 'Ingeniería en Transporte y Tránsito',
                                  'Ingeniería Industrial'    => 'Ingeniería Industrial',
                                  'Química Industrial'    => 'Química Industrial',
                                  'Trabajo Social'    => 'Trabajo Social',
                                  'Ingeniería en Biotecnología'    => 'Ingeniería en Biotecnología',
                                  'Ingeniería Civil en Obras Civiles'    => 'Ingeniería Civil en Obras Civiles'

                                ); ?>
                        <?php echo form_dropdown('carrera', $options, set_value('carrera'))?>
                    </td>
                </tr>   

                <tr>
                    <td>
                        <label for="f_rangeStart" >Fecha</label> 
                        
                    </td>
                    <td>
                        <input readonly="readonly" size="15" type="text" name="f_rangeStart" value="" id="f_rangeStart" size="50" style="width:50%"  />        
                        <button id="f_rangeStart_trigger" size="50" >...</button>
                                         <script type="text/javascript">
                 RANGE_CAL_1 = new Calendar({
                         inputField: "f_rangeStart",
                         dateFormat: "%Y/%m/%d",
                         trigger: "f_rangeStart_trigger",
                         bottomBar: false,
                         onSelect: function() {
                                 var date = Calendar.intToDate(this.selection.get());
                                 LEFT_CAL.args.min = date;
                                 LEFT_CAL.redraw();
                                 this.hide();
                         }
                 });
                 function clearRangeStart() {
                         document.getElementById("f_rangeStart").value = "";
                         LEFT_CAL.args.min = null;
                         LEFT_CAL.redraw();
                 };
                </script>
                        
                    </td>
                </tr>
                <tr>

          

                <tr>
                    <td>
                        <?php echo form_label('Descripcion: '); ?>
                    </td>
                    <td>
                        <?php echo form_input($descripcion); ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo form_label('Resumen: '); ?>
                    </td>
                    <td>
                        <?php echo form_textarea($resumen); ?>
                    </td>
                </tr>
                <tr>
                <tr>
                    <td>
                        <?php echo form_label('Archivo: '); ?>
                    </td>
                    <td>
                        <?php echo form_upload($userfile); ?>
                    </td>
                </tr>
                
                <tr>
                    <td>
 
                    </td>
                    <td>
<!--con la funcion validation_errors ci nos muestra los errores al pulsar el botón submit, la podemos colocar donde queramos-->
                  
                    </td>
                </tr>
                <tr>
                    <td>
 
                    </td>
                    <td>
                        <?php echo form_submit($submit);
                        //nuestro boton submit
                        ?>
                    </td>
                </tr>
                <?php
                echo form_close();
                ?>
        </table>
        <?php
               echo form_fieldset_close();
       ?>



    </p> 




    <!----------------------------------------------------> 

<footer class="ui-layout-south"></footer>
</body>

</html>





				

