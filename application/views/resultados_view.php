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
  border:1px solid #000000;
  
  -moz-border-radius-bottomleft:0px;
  -webkit-border-bottom-left-radius:0px;
  border-bottom-left-radius:0px;
  
  -moz-border-radius-bottomright:0px;
  -webkit-border-bottom-right-radius:0px;
  border-bottom-right-radius:0px;
  
  -moz-border-radius-topright:0px;
  -webkit-border-top-right-radius:0px;
  border-top-right-radius:0px;
  
  -moz-border-radius-topleft:0px;
  -webkit-border-top-left-radius:0px;
  border-top-left-radius:0px;
}.CSSTableGenerator table{
    border-collapse: collapse;
        border-spacing: 0;
  width:100%;
  height:100%;
  margin:0px;padding:0px;
}.CSSTableGenerator tr:last-child td:last-child {
  -moz-border-radius-bottomright:0px;
  -webkit-border-bottom-right-radius:0px;
  border-bottom-right-radius:0px;
}
.CSSTableGenerator table tr:first-child td:first-child {
  -moz-border-radius-topleft:0px;
  -webkit-border-top-left-radius:0px;
  border-top-left-radius:0px;
}
.CSSTableGenerator table tr:first-child td:last-child {
  -moz-border-radius-topright:0px;
  -webkit-border-top-right-radius:0px;
  border-top-right-radius:0px;
}.CSSTableGenerator tr:last-child td:first-child{
  -moz-border-radius-bottomleft:0px;
  -webkit-border-bottom-left-radius:0px;
  border-bottom-left-radius:0px;
}.CSSTableGenerator tr:hover td{
  
}
.CSSTableGenerator tr:nth-child(odd){ background-color:#99BCBF; }
.CSSTableGenerator tr:nth-child(even)    { background-color:#ffffff; }

.CSSTableGenerator td{
  vertical-align:middle;
  
  
  border:1px solid #000000;
  border-width:0px 1px 1px 0px;
  text-align:left;
  padding:7px;
  font-size:16px;
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
    background:-o-linear-gradient(bottom, #005fbf 5%, #003f7f 100%);  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #99BCBF), color-stop(1, #99BCBF) );
  background:-moz-linear-gradient( center top, #005fbf 5%, #003f7f 100% );
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#005fbf", endColorstr="#003f7f");  background: -o-linear-gradient(top,#005fbf,003f7f);

  background-color:#005fbf;
  border:0px solid #000000;
  text-align:center;
  border-width:0px 0px 1px 1px;
  font-size:14px;
  font-family:Arial;
  font-weight:bold;
  color:#ffffff;
}
.CSSTableGenerator tr:first-child:hover td{
  background:-o-linear-gradient(bottom, #005fbf 5%, #003f7f 100%);  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #005fbf), color-stop(1, #003f7f) );
  background:-moz-linear-gradient( center top, #005fbf 5%, #003f7f 100% );
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#005fbf", endColorstr="#003f7f");  background: -o-linear-gradient(top,#005fbf,003f7f);

  background-color:#005fbf;
}
.CSSTableGenerator tr:first-child td:first-child{
  border-width:0px 0px 1px 0px;
}
.CSSTableGenerator tr:first-child td:last-child{
  border-width:0px 0px 1px 1px;
}
table { background:#D3E4E5;
 border:1px solid gray;
 border-collapse:collapse;
 color:#fff;
 font:normal 16px verdana, arial, helvetica, sans-serif;
}
caption { border:1px solid #5C443A;
 color:#5C443A;
 font-weight:bold;
 letter-spacing:20px;
 padding:6px 4px 8px 0px;
 text-align:center;
 text-transform:uppercase;
}
td, th { color:#363636;
 padding:.4em;
}
tr { border:1px dotted gray;
}
thead th, tfoot th { background:#0082AA;
 color:#FFFFFF;
 padding:3px 10px 3px 10px;
 text-align:left;
 text-transform:uppercase;
}
tbody td a { color:#363636;
 text-decoration:none;
}
tbody td a:visited { color:gray;
 text-decoration:line-through;
}
tbody td a:hover { text-decoration:underline;
}
tbody th a { color:#363636;
 font-weight:normal;
 text-decoration:none;
}
tbody th a:hover { color:#363636;
}
tbody td+td+td+td a { 
 background-position:left center;
 background-repeat:no-repeat;
 color:#03476F;
 padding-left:15px;
}
tbody td+td+td+td a:visited { 
 background-position:left center;
 background-repeat:no-repeat;
}
tbody th, tbody td { text-align:left;
 vertical-align:top;
}
tfoot td { background:#0082AA;
 color:#FFFFFF;
 padding-top:3px;
}
tr:nth-child(odd){ background-color:#D3E4E5; }
tr:nth-child(even)    { background-color:#ffffff; }
tbody tr:hover { background:#99BCBF;
 border:1px solid #03476F;
 color:#000000;
}


select{
  margin: 20;
  font-size: 100%;
  vertical-align: middle;
   height: 25px;
  /* In IE7, the height of the select element cannot be changed by height, only font-size */

  *margin-top: 4px;
  /* For IE7, add top margin to align select with labels */

  line-height: 30px;
  width:150px;
}

/*!
 * Bootstrap v2.3.2
 *
 * Copyright 2012 Twitter, Inc
 * Licensed under the Apache License v2.0
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Designed and built with all the love in the world @twitter by @mdo and @fat.
 */

.clearfix {
  *zoom: 1;
}

.clearfix:before,
.clearfix:after {
  display: table;
  line-height: 0;
  content: "";
}

.clearfix:after {
  clear: both;
}

.hide-text {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

.input-block-level {
  display: block;
  width: 100%;
  min-height: 30px;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
nav,
section {
  display: block;
}

audio,
canvas,
video {
  display: inline-block;
  *display: inline;
  *zoom: 1;
}

audio:not([controls]) {
  display: none;
}

html {
  font-size: 100%;
  -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
}

a:focus {
  outline: thin dotted #333;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}

a:hover,
a:active {
  outline: 0;
}

sub,
sup {
  position: relative;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline;
}

sup {
  top: -0.5em;
}

sub {
  bottom: -0.25em;
}

img {
  width: auto\9;
  height: auto;
  max-width: 100%;
  vertical-align: middle;
  border: 0;
  -ms-interpolation-mode: bicubic;
}

#map_canvas img,
.google-maps img {
  max-width: none;
}

button,
input,
select,
textarea {
  margin: 0;
  font-size: 100%;
  vertical-align: middle;
}

button,
input {
  *overflow: visible;
  line-height: normal;
}

button::-moz-focus-inner,
input::-moz-focus-inner {
  padding: 0;
  border: 0;
}

button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
  cursor: pointer;
  -webkit-appearance: button;
}

label,
select,
button,
input[type="button"],
input[type="reset"],
input[type="submit"],
input[type="radio"],
input[type="checkbox"] {
  cursor: pointer;
}

input[type="search"] {
  -webkit-box-sizing: content-box;
     -moz-box-sizing: content-box;
          box-sizing: content-box;
  -webkit-appearance: textfield;
}

input[type="search"]::-webkit-search-decoration,
input[type="search"]::-webkit-search-cancel-button {
  -webkit-appearance: none;
}

textarea {
  overflow: auto;
  vertical-align: top;
}

@media print {
  * {
    color: #000 !important;
    text-shadow: none !important;
    background: transparent !important;
    box-shadow: none !important;
  }
  a,
  a:visited {
    text-decoration: underline;
  }
  a[href]:after {
    content: " (" attr(href) ")";
  }
  abbr[title]:after {
    content: " (" attr(title) ")";
  }
  .ir a:after,
  a[href^="javascript:"]:after,
  a[href^="#"]:after {
    content: "";
  }
  pre,
  blockquote {
    border: 1px solid #999;
    page-break-inside: avoid;
  }
  thead {
    display: table-header-group;
  }
  tr,
  img {
    page-break-inside: avoid;
  }
  img {
    max-width: 100% !important;
  }
  @page  {
    margin: 0.5cm;
  }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3;
  }
  h2,
  h3 {
    page-break-after: avoid;
  }
}

body {
  margin: 0;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 14px;
  line-height: 20px;
  color: #333333;
  background-color: #ffffff;
}

a {
  color: #0088cc;
  text-decoration: none;
}

a:hover,
a:focus {
  color: #005580;
  text-decoration: underline;
}

.img-rounded {
  -webkit-border-radius: 6px;
     -moz-border-radius: 6px;
          border-radius: 6px;
}

.img-polaroid {
  padding: 4px;
  background-color: #fff;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
     -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
          box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
}

.img-circle {
  -webkit-border-radius: 500px;
     -moz-border-radius: 500px;
          border-radius: 500px;
}

.row {
  margin-left: -20px;
  *zoom: 1;
}

.row:before,
.row:after {
  display: table;
  line-height: 0;
  content: "";
}

.row:after {
  clear: both;
}

[class*="span"] {
  float: left;
  min-height: 1px;
  margin-left: 20px;
}

.container,
.navbar-static-top .container,
.navbar-fixed-top .container,
.navbar-fixed-bottom .container {
  width: 940px;
}

.span12 {
  width: 940px;
}

.span11 {
  width: 860px;
}

.span10 {
  width: 780px;
}

.span9 {
  width: 700px;
}

.span8 {
  width: 620px;
}

.span7 {
  width: 540px;
}

.span6 {
  width: 460px;
}

.span5 {
  width: 380px;
}

.span4 {
  width: 300px;
}

.span3 {
  width: 220px;
}

.span2 {
  width: 140px;
}

.span1 {
  width: 60px;
}

.offset12 {
  margin-left: 980px;
}

.offset11 {
  margin-left: 900px;
}

.offset10 {
  margin-left: 820px;
}

.offset9 {
  margin-left: 740px;
}

.offset8 {
  margin-left: 660px;
}

.offset7 {
  margin-left: 580px;
}

.offset6 {
  margin-left: 500px;
}

.offset5 {
  margin-left: 420px;
}

.offset4 {
  margin-left: 340px;
}

.offset3 {
  margin-left: 260px;
}

.offset2 {
  margin-left: 180px;
}

.offset1 {
  margin-left: 100px;
}

.row-fluid {
  width: 100%;
  *zoom: 1;
}

.row-fluid:before,
.row-fluid:after {
  display: table;
  line-height: 0;
  content: "";
}

.row-fluid:after {
  clear: both;
}

.row-fluid [class*="span"] {
  display: block;
  float: left;
  width: 100%;
  min-height: 30px;
  margin-left: 2.127659574468085%;
  *margin-left: 2.074468085106383%;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}

.row-fluid [class*="span"]:first-child {
  margin-left: 0;
}

.row-fluid .controls-row [class*="span"] + [class*="span"] {
  margin-left: 2.127659574468085%;
}

.row-fluid .span12 {
  width: 100%;
  *width: 99.94680851063829%;
}

.row-fluid .span11 {
  width: 91.48936170212765%;
  *width: 91.43617021276594%;
}

.row-fluid .span10 {
  width: 82.97872340425532%;
  *width: 82.92553191489361%;
}

.row-fluid .span9 {
  width: 74.46808510638297%;
  *width: 74.41489361702126%;
}

.row-fluid .span8 {
  width: 65.95744680851064%;
  *width: 65.90425531914893%;
}

.row-fluid .span7 {
  width: 57.44680851063829%;
  *width: 57.39361702127659%;
}

.row-fluid .span6 {
  width: 48.93617021276595%;
  *width: 48.88297872340425%;
}

.row-fluid .span5 {
  width: 40.42553191489362%;
  *width: 40.37234042553192%;
}

.row-fluid .span4 {
  width: 31.914893617021278%;
  *width: 31.861702127659576%;
}

.row-fluid .span3 {
  width: 23.404255319148934%;
  *width: 23.351063829787233%;
}

.row-fluid .span2 {
  width: 14.893617021276595%;
  *width: 14.840425531914894%;
}

.row-fluid .span1 {
  width: 6.382978723404255%;
  *width: 6.329787234042553%;
}

.row-fluid .offset12 {
  margin-left: 104.25531914893617%;
  *margin-left: 104.14893617021275%;
}

.row-fluid .offset12:first-child {
  margin-left: 102.12765957446808%;
  *margin-left: 102.02127659574467%;
}

.row-fluid .offset11 {
  margin-left: 95.74468085106382%;
  *margin-left: 95.6382978723404%;
}

.row-fluid .offset11:first-child {
  margin-left: 93.61702127659574%;
  *margin-left: 93.51063829787232%;
}

.row-fluid .offset10 {
  margin-left: 87.23404255319149%;
  *margin-left: 87.12765957446807%;
}

.row-fluid .offset10:first-child {
  margin-left: 85.1063829787234%;
  *margin-left: 84.99999999999999%;
}

.row-fluid .offset9 {
  margin-left: 78.72340425531914%;
  *margin-left: 78.61702127659572%;
}

.row-fluid .offset9:first-child {
  margin-left: 76.59574468085106%;
  *margin-left: 76.48936170212764%;
}

.row-fluid .offset8 {
  margin-left: 70.2127659574468%;
  *margin-left: 70.10638297872339%;
}

.row-fluid .offset8:first-child {
  margin-left: 68.08510638297872%;
  *margin-left: 67.9787234042553%;
}

.row-fluid .offset7 {
  margin-left: 61.70212765957446%;
  *margin-left: 61.59574468085106%;
}

.row-fluid .offset7:first-child {
  margin-left: 59.574468085106375%;
  *margin-left: 59.46808510638297%;
}

.row-fluid .offset6 {
  margin-left: 53.191489361702125%;
  *margin-left: 53.085106382978715%;
}

.row-fluid .offset6:first-child {
  margin-left: 51.063829787234035%;
  *margin-left: 50.95744680851063%;
}

.row-fluid .offset5 {
  margin-left: 44.68085106382979%;
  *margin-left: 44.57446808510638%;
}

.row-fluid .offset5:first-child {
  margin-left: 42.5531914893617%;
  *margin-left: 42.4468085106383%;
}

.row-fluid .offset4 {
  margin-left: 36.170212765957444%;
  *margin-left: 36.06382978723405%;
}

.row-fluid .offset4:first-child {
  margin-left: 34.04255319148936%;
  *margin-left: 33.93617021276596%;
}

.row-fluid .offset3 {
  margin-left: 27.659574468085104%;
  *margin-left: 27.5531914893617%;
}

.row-fluid .offset3:first-child {
  margin-left: 25.53191489361702%;
  *margin-left: 25.425531914893618%;
}

.row-fluid .offset2 {
  margin-left: 19.148936170212764%;
  *margin-left: 19.04255319148936%;
}

.row-fluid .offset2:first-child {
  margin-left: 17.02127659574468%;
  *margin-left: 16.914893617021278%;
}

.row-fluid .offset1 {
  margin-left: 10.638297872340425%;
  *margin-left: 10.53191489361702%;
}

.row-fluid .offset1:first-child {
  margin-left: 8.51063829787234%;
  *margin-left: 8.404255319148938%;
}

[class*="span"].hide,
.row-fluid [class*="span"].hide {
  display: none;
}

[class*="span"].pull-right,
.row-fluid [class*="span"].pull-right {
  float: right;
}

.container {
  margin-right: auto;
  margin-left: auto;
  *zoom: 1;
}

.container:before,
.container:after {
  display: table;
  line-height: 0;
  content: "";
}

.container:after {
  clear: both;
}

.container-fluid {
  padding-right: 20px;
  padding-left: 20px;
  *zoom: 1;
}

.container-fluid:before,
.container-fluid:after {
  display: table;
  line-height: 0;
  content: "";
}

.container-fluid:after {
  clear: both;
}

p {
  margin: 0 0 10px;
}

.lead {
  margin-bottom: 20px;
  font-size: 21px;
  font-weight: 200;
  line-height: 30px;
}

small {
  font-size: 85%;
}

strong {
  font-weight: bold;
}

em {
  font-style: italic;
}

cite {
  font-style: normal;
}

.muted {
  color: #999999;
}

a.muted:hover,
a.muted:focus {
  color: #808080;
}

.text-warning {
  color: #c09853;
}

a.text-warning:hover,
a.text-warning:focus {
  color: #a47e3c;
}

.text-error {
  color: #b94a48;
}

a.text-error:hover,
a.text-error:focus {
  color: #953b39;
}

.text-info {
  color: #3a87ad;
}

a.text-info:hover,
a.text-info:focus {
  color: #2d6987;
}

.text-success {
  color: #468847;
}

a.text-success:hover,
a.text-success:focus {
  color: #356635;
}

.text-left {
  text-align: left;
}

.text-right {
  text-align: right;
}

.text-center {
  text-align: center;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  margin: 10px 0;
  font-family: inherit;
  font-weight: bold;
  line-height: 20px;
  color: inherit;
  text-rendering: optimizelegibility;
}

h1 small,
h2 small,
h3 small,
h4 small,
h5 small,
h6 small {
  font-weight: normal;
  line-height: 1;
  color: #999999;
}

h1,
h2,
h3 {
  line-height: 40px;
}

h1 {
  font-size: 38.5px;
}

h2 {
  font-size: 31.5px;
}

h3 {
  font-size: 24.5px;
}

h4 {
  font-size: 17.5px;
}

h5 {
  font-size: 14px;
}

h6 {
  font-size: 11.9px;
}

h1 small {
  font-size: 24.5px;
}

h2 small {
  font-size: 17.5px;
}

h3 small {
  font-size: 14px;
}

h4 small {
  font-size: 14px;
}

.page-header {
  padding-bottom: 9px;
  margin: 20px 0 30px;
  border-bottom: 1px solid #eeeeee;
}

ul,
ol {
  padding: 0;
  margin: 0 0 10px 25px;
}

ul ul,
ul ol,
ol ol,
ol ul {
  margin-bottom: 0;
}

li {
  line-height: 20px;
}

ul.unstyled,
ol.unstyled {
  margin-left: 0;
  list-style: none;
}

ul.inline,
ol.inline {
  margin-left: 0;
  list-style: none;
}

ul.inline > li,
ol.inline > li {
  display: inline-block;
  *display: inline;
  padding-right: 5px;
  padding-left: 5px;
  *zoom: 1;
}

dl {
  margin-bottom: 20px;
}

dt,
dd {
  line-height: 20px;
}

dt {
  font-weight: bold;
}

dd {
  margin-left: 10px;
}

.dl-horizontal {
  *zoom: 1;
}

.dl-horizontal:before,
.dl-horizontal:after {
  display: table;
  line-height: 0;
  content: "";
}

.dl-horizontal:after {
  clear: both;
}

.dl-horizontal dt {
  float: left;
  width: 160px;
  overflow: hidden;
  clear: left;
  text-align: right;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.dl-horizontal dd {
  margin-left: 180px;
}

hr {
  margin: 20px 0;
  border: 0;
  border-top: 1px solid #eeeeee;
  border-bottom: 1px solid #ffffff;
}

abbr[title],
abbr[data-original-title] {
  cursor: help;
  border-bottom: 1px dotted #999999;
}

abbr.initialism {
  font-size: 90%;
  text-transform: uppercase;
}

blockquote {
  padding: 0 0 0 15px;
  margin: 0 0 20px;
  border-left: 5px solid #eeeeee;
}

blockquote p {
  margin-bottom: 0;
  font-size: 17.5px;
  font-weight: 300;
  line-height: 1.25;
}

blockquote small {
  display: block;
  line-height: 20px;
  color: #999999;
}

blockquote small:before {
  content: '\2014 \00A0';
}

blockquote.pull-right {
  float: right;
  padding-right: 15px;
  padding-left: 0;
  border-right: 5px solid #eeeeee;
  border-left: 0;
}

blockquote.pull-right p,
blockquote.pull-right small {
  text-align: right;
}

blockquote.pull-right small:before {
  content: '';
}

blockquote.pull-right small:after {
  content: '\00A0 \2014';
}

q:before,
q:after,
blockquote:before,
blockquote:after {
  content: "";
}

address {
  display: block;
  margin-bottom: 20px;
  font-style: normal;
  line-height: 20px;
}

code,
pre {
  padding: 0 3px 2px;
  font-family: Monaco, Menlo, Consolas, "Courier New", monospace;
  font-size: 12px;
  color: #333333;
  -webkit-border-radius: 3px;
     -moz-border-radius: 3px;
          border-radius: 3px;
}

code {
  padding: 2px 4px;
  color: #d14;
  white-space: nowrap;
  background-color: #f7f7f9;
  border: 1px solid #e1e1e8;
}

pre {
  display: block;
  padding: 9.5px;
  margin: 0 0 10px;
  font-size: 13px;
  line-height: 20px;
  word-break: break-all;
  word-wrap: break-word;
  white-space: pre;
  white-space: pre-wrap;
  background-color: #f5f5f5;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.15);
  -webkit-border-radius: 4px;
     -moz-border-radius: 4px;
          border-radius: 4px;
}

pre.prettyprint {
  margin-bottom: 20px;
}

pre code {
  padding: 0;
  color: inherit;
  white-space: pre;
  white-space: pre-wrap;
  background-color: transparent;
  border: 0;
}

.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll;
}

form {
  margin: 0 0 20px;
}

fieldset {
  padding: 0;
  margin: 0;
  border: 0;
}

legend {
  display: block;
  width: 100%;
  padding: 0;
  margin-bottom: 20px;
  font-size: 21px;
  line-height: 40px;
  color: #333333;
  border: 0;
  border-bottom: 1px solid #e5e5e5;
}

legend small {
  font-size: 15px;
  color: #999999;
}

label,
input,
button,
select,
textarea {
  font-size: 14px;
  font-weight: normal;
  line-height: 20px;
}

input,
button,
select,
textarea {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}

label {
  display: block;
  margin-bottom: 5px;
}

select,
textarea,
input[type="text"],
input[type="password"],
input[type="datetime"],
input[type="datetime-local"],
input[type="date"],
input[type="month"],
input[type="time"],
input[type="week"],
input[type="number"],
input[type="email"],
input[type="url"],
input[type="search"],
input[type="tel"],
input[type="color"],
.uneditable-input {
  display: inline-block;
  height: 20px;
  padding: 4px 6px;
  margin-bottom: 10px;
  font-size: 14px;
  line-height: 20px;
  color: #555555;
  vertical-align: middle;
  -webkit-border-radius: 4px;
     -moz-border-radius: 4px;
          border-radius: 4px;
}

input{
  width: 150px;
}

textarea
{
  width: 614px;
}

.uneditable-input {
  width: 100px;
}


textarea {
  height: auto;
}

textarea,
input[type="text"],
input[type="password"],
input[type="datetime"],
input[type="datetime-local"],
input[type="date"],
input[type="month"],
input[type="time"],
input[type="week"],
input[type="number"],
input[type="email"],
input[type="url"],
input[type="search"],
input[type="tel"],
input[type="color"],
.uneditable-input {
  background-color: #ffffff;
  border: 1px solid #cccccc;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
     -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border linear 0.2s, box-shadow linear 0.2s;
     -moz-transition: border linear 0.2s, box-shadow linear 0.2s;
       -o-transition: border linear 0.2s, box-shadow linear 0.2s;
          transition: border linear 0.2s, box-shadow linear 0.2s;
}

textarea:focus,
input[type="text"]:focus,
input[type="password"]:focus,
input[type="datetime"]:focus,
input[type="datetime-local"]:focus,
input[type="date"]:focus,
input[type="month"]:focus,
input[type="time"]:focus,
input[type="week"]:focus,
input[type="number"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="search"]:focus,
input[type="tel"]:focus,
input[type="color"]:focus,
.uneditable-input:focus {
  border-color: rgba(82, 168, 236, 0.8);
  outline: 0;
  outline: thin dotted \9;
  /* IE6-9 */

  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(82, 168, 236, 0.6);
     -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(82, 168, 236, 0.6);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(82, 168, 236, 0.6);
}


input[type="file"],
input[type="image"],
input[type="submit"],
input[type="reset"],
input[type="button"],
input[type="radio"],
input[type="checkbox"] {
  width: auto;
}

select
{
  height: 30px;
  /* In IE7, the height of the select element cannot be changed by height, only font-size */

  *margin-top: 4px;
  /* For IE7, add top margin to align select with labels */

  line-height: 30px;
    background-color: #ffffff;
  border: 1px solid #cccccc;
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
            
            <?=anchor('listado/', 'Proyectos de Titulo'); ?>
            <?=anchor('login/', 'Registrarse'); ?>
        </div>
    </header>
    <!--Menu de la izquierda-->
    <div id="left-menu" class="ui-layout-west">
        <div id="accordion">
            <!--Seccion control de bienes-->

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
                      (aaaa/mm/dd)
                        <?=form_open(base_url().'resultados/validar_fecha')?>
                        <input type="text" name="buscar_fecha" id="buscar_fecha" />
                        <input type="submit" value="Buscar" />
                        <?=form_close()?>
                    </ul>
                </div>
            </div>
            <div>
                <h3><a href="#" rel="4" >Buscar Por Palabras Clave</a></h3>
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





<div id="carousel" class="ui-layout-center" >
    <div style="float:left;">
            <div class="container_12">
                <?php if(!$peliculas){?>
                <h3>
                    No se encontraron Resultados
                    </h3>
                    <font color="red" style="font-weight: bold; font-size: 14px;">
                    <h4>
                    <span><?php echo validation_errors(); ?></span>
                    </h4>
                    </font>
                <?php
                }else{?>
               
                <?//si NO hay BUSQUEDA de resultados  mostramos todos los datos?>
                <?php if($files){ ?>
                <table summary="Submitted table designs">
                    <caption><h3>Proyectos de Titulo Disponibles</h3></caption>
                    <thead>
                        <tr>
                            <th scope="col">Fecha</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Palabras Clave</th>
                            <th scope="col">Ver Detalles</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th scope="row">
                            <div style="font-color=#fff"></div>
                            <?=$this->pagination->create_links()?></th>
                            <td colspan="4"></td>
                        </tr>
                    </tfoot>
                    <tbody>
                <?php foreach($peliculas as $fila) { ?>
                    <?php foreach($files as $file){
                        if ($fila->ruta==$file) {?>
                        <tr>
                        <td><div class="grid_3"><?php echo $fila->fecha;  ?></div></td>                          
                        <td><div class="grid_1"><?php echo $fila->titulo; 
                        $a=$fila->titulo; 
                        $b=$fila->autor; 
                        $c=$fila->fecha; 
                        $d=$fila->descripcion; 
                        $e=$fila->resumen; 
                        $f=$fila->ruta; 
                        $g=$fila->carrera;

                        ?>
                        <form action="http://localhost/roles_usuarios/listado/detalles" method="post">
                        <input type="hidden" name="variable1" value="<?php echo $a ?>" />
                        <input type="hidden" name="variable2" value="<?php echo $b ?>" />
                        <input type="hidden" name="variable3" value="<?php echo $c ?>" />
                        <input type="hidden" name="variable4" value="<?php echo $d ?>" />
                        <input type="hidden" name="variable5" value="<?php echo $e ?>" />
                        <input type="hidden" name="variable6" value="<?php echo $f ?>" />
                        <input type="hidden" name="variable7" value="<?php echo $g ?>" />
                        
                        </div></td>
                        <td><div class="grid_2"><?php echo $fila->autor;  ?></div></td>
                        <td><div class="grid_3"><?php echo $fila->descripcion;  ?></div></td>
                         <td>
                            <input type="submit" value="Ver Detalles" />
                            </form>
                          </td>
                        <!--
                        <td><div class="grid_4"><?php echo $fila->descripcion ?></div></td>
                        <td><div class="grid_5"><?php echo $fila->resumen ?></div></td>
                        <td><div class="grid_6"><?php echo anchor('admin/downloads/'.$file, $file).br(1); ?></div></td>
                        -->
                        </tr>
                        <?php }//(if )?>                                    
                    <?php }//foreach($files as $file) ?>

                <?php }  ?>
                </div>
                </div>
                </table>
                <?php } //if($files)
                else{?>
                <?php echo heading('No hay archivos para descargar ', 3).anchor('admin', 'Subir un Archivo');?>
                <?php } ?>
                
                <?php
                }
                ?>
                                    </tbody>
                </table>
                
                </div>
            </div>
                    
</div>

</div>

<div style="float:right;"><img alt="logo" src="<?php echo base_url()?>public/img/azulcopia1.jpg"></div>




    <!----------------------------------------------------> 

<footer class="ui-layout-south"></footer>
</body>

</html>



