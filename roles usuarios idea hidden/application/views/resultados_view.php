<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
               Universidad Tecnologica Metropolitana
        </title>

        

    
    

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
            <?=anchor('vista/', 'Inicio'); ?>
            <?=anchor('listado/', 'Proyectos de Titulo'); ?>
            <?=anchor('login/', 'Registrarse'); ?>
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
<div class="container_12">
    


    <?php if(!$peliculas){?>
    No hay nada que mostrar
    <?php
    }else{?>

    <?php echo heading('Tesis Disponibles para Descargar:', 3);?>
    <?//si NO hay BUSQUEDA de resultados  mostramos todos los datos?>
    <?php if($files){ ?>
        
            <div class="CSSTableGenerator" >
                <table>
                    <div class="grid_12 resultados">                                                  
                        <div class="grid_12" id="head_resultados">
                            <tr>
                                <td><div class="grid_1">Titulo</div></td>
                                <td><div class="grid_2">Autor</div></td>
                                <td><div class="grid_3">Fecha</div></td>
                                <!--
                                <td><div class="grid_4">Descripcion</div></td>      
                                <td><div class="grid_5">Resumen</div></td>
                                <td><div class="grid_6">Ruta</div></td>
                                -->
                            </tr>
                        </div>
                        <div class="grid_12" id="body_rñesultados">

        <?php
        foreach($peliculas as $fila)
        {
        ?>

                <?php foreach($files as $file){
                    
                        if ($fila->ruta==$file) {?>
                            <tr>
                                <td><div class="grid_1"><?php echo $fila->titulo; 
                                $a=$fila->titulo; 
                                $b=$fila->autor; 
                                $c=$fila->fecha; 
                                $d=$fila->descripcion; 
                                $e=$fila->resumen; 
                                $f=$fila->ruta; 
                                ?>
                                    <form action="http://localhost/roles_usuarios/listado/detalles" method="post">
                                        <input type="hidden" name="variable1" value="<?php echo $a ?>" />
                                        <input type="hidden" name="variable2" value="<?php echo $b ?>" />
                                        <input type="hidden" name="variable3" value="<?php echo $c ?>" />
                                        <input type="hidden" name="variable4" value="<?php echo $d ?>" />
                                        <input type="hidden" name="variable5" value="<?php echo $e ?>" />
                                        <input type="hidden" name="variable6" value="<?php echo $f ?>" />
                                        <input type="submit" value="Ver Detalles" />
                                    </form>
                                </div></td>
                                <td><div class="grid_2"><?php echo $fila->autor;  ?></div></td>
                                <td><div class="grid_3"><?php echo $fila->fecha;  ?></div></td>
                                <!--
                                <td><div class="grid_4"><?php echo $fila->descripcion ?></div></td>
                                <td><div class="grid_5"><?php echo $fila->resumen ?></div></td>
                                <td><div class="grid_6"><?php echo anchor('admin/downloads/'.$file, $file).br(1); ?></div></td>
                                -->
                            </tr>
                        <?php }//(if )?>                                    
                <?php }//foreach($files as $file) ?>
        
        <?php
        }
        ?>

         </div>
                    </div>
                </table>
        
    <?php } //if($files)
    else{?>
        <?php echo heading('No hay archivos para descargar ', 3).anchor('admin', 'Subir un Archivo');?>
    <?php } ?>



    <?=$this->pagination->create_links()?>
    <?php
    }
    ?>

    
    
                       
    
    </div>
</div>

    </p> 




        </ul>                     
    </div>
    <!----------------------------------------------------> 

<footer class="ui-layout-south"></footer>
</body>

</html>



