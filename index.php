<?php /*error_reporting(-1);
 ini_set('display_errors', 'On');
 set_error_handler("var_dump");*/
 require_once('Connections/connection.php');
 
include "inyec.php";
$tmd = mysql_fetch_array(mysql_query("SELECT * FROM contents where id_content='".GetSQLValueString(1, "int")."'")) or print mysql_error();
if($tmd["Titles"]==""){
	$title=$tmd["Titles"]='Gobierno de la Ciudad de Funes / Home';
}else
	$title=$tmd["Titles"]; 
if($tmd["Metas"]==''){
	$metas=$tmd["Metas"]='Gobierno de la Ciudad de Funes / Home';
}else
	$metas=$tmd["Metas"];

if($tmd["Descriptions"]==''){
	$description=$tmd["Descriptions"]=''; 
}else
	$description=$tmd["Descriptions"];
	
	
	
$titlef= $title ; 
 $descriptionf= $description;
 
	 if (!empty($tmd['Image'])) {  
 		 $imaf= "files/".$tmd['Image'];
 	 } else{

	 

		 $imaf= "files/FUNES2020.jpg";

 	 }
                                  
$urlf= $url_setting."home";	
$page="home";
include "_header.php";?>

  
		<div class="row">
		<section><!-- QUITO ESTA VARIABLE PARA QUE SE VEA A TODO ANCHO SIN PADDINGS -->
	 
			<div class="region region-content">


			<section id="block-system-main" class="block block-system clearfix">





			<div class="panel-display panel-1col clearfix" >
			<div class="panel-panel panel-col">
			<div>







			<div class="panel-pane pane-views-panes pane-slider-encabezado-slider-encabezado-principal nomovil"  >
			<div class="contenedor-paginas-relacionadas">

			<div class="pane-content">
			<div id="rosariogobar-carousel" class="carousel slide" data-ride="carousel">

			<div class="carousel-inner">
                                  



								 <?php  
								mysql_select_db($database_connection, $connection);
								$query_slide = "SELECT * FROM slider order by order_ desc";
								$slide = mysql_query($query_slide) or die(mysql_error());
								$row_slide = mysql_fetch_assoc($slide);
								$totalRows_slide = mysql_num_rows($slide);
								
								?>
								<?php if ($totalRows_slide > 0) { ?>
								<?php $i=0; do { 
								$i=$i+1; ?>



                                   <div class="item <?php if ($i == 1) {  ?> active <?php }?> item-slider-imagen ">
                                    <img typeof="foaf:Image" class="img-responsive" src="files/<?php echo $row_slide['Image']; ?>" width="1770" height="565" alt=" <?php echo $row_slide['Title']; ?> " />                                
                                    <!--<div class="bg-overlay op6"></div>wrapper pull-left nomovil lo saque p educacion-->

		                                    <div class="container">
		                                      <div class="carousel-caption" style="">
		                                                  <div class="wrapper pull-left ">
		                                                          <div class="box">
		                                                              <h1><?php echo $row_slide['Title']; ?>  </h1>
		                                                              <h1><?php echo $row_slide['titulo']; ?> </<h1>
		                                                            </div>
		                                                    		<div class="clearfix"></div>
		                                                       		
		                                                       		<?php if (!empty($row_slide['url'])) {  ?>
		                                                       		<a class="btn btn-d" href="<?php echo $row_slide['url']; ?>" target="<?php echo $row_slide['target']; ?>" role="button" style="background-color: #000; font-size: 15px">
		                                                            Ver m&aacute;s       </a>
		                                                            <?php }?>
		                                                        </div>
		                                                    		<div class="clearfix"></div>
		                                                     </div>
		                                      </div>
		                                    </div>


		                         <?php  
								} while ($row_slide = mysql_fetch_assoc($slide)); ?>
								<?php }?>           
                                 

                                   

                    </div>

            </div>
      </div>         
                     
                           
        </div>
</div>






			<div class="panel-pane pane-views-panes pane-slider-encabezado-slider-encabezado-principal simovil"  >
			<div class="contenedor-paginas-relacionadas">

			<div class="pane-content">
			<div id="rosariogobar-carousel" class="carousel slide" data-ride="carousel">

			<div class="carousel-inner">
                                  



								 <?php  
								mysql_select_db($database_connection, $connection);
								$query_slidex = "SELECT * FROM slider order by order_ desc";
								$slidex = mysql_query($query_slidex) or die(mysql_error());
								$row_slidex = mysql_fetch_assoc($slidex);
								$totalRows_slidex = mysql_num_rows($slidex);
								
								?>
								<?php if ($totalRows_slidex > 0) { ?>
								<?php $i=0; do { 
								$i=$i+1; ?>



                                   <div class="item <?php if ($i == 1) {  ?> active <?php }?> item-slider-imagen ">
                                    <img   class="img-responsive" src="files/big/<?php echo $row_slidex['Image']; ?>" width="1770" height="565" alt=" <?php echo $row_slidex['Title']; ?>" />                                
                                    <!--<div class="bg-overlay op6"></div>wrapper pull-left nomovil lo saque p educacion-->

		                                    <div class="container">
		                                      <div class="carousel-caption" style="">
		                                                  <div class="wrapper pull-left ">
		                                                          <div class="box">
		                                                              <h1><?php echo $row_slidex['Title']; ?>  </h1>
		                                                              <h1><?php echo $row_slidex['titulo']; ?> </<h1>
		                                                            </div>
		                                                    		<div class="clearfix"></div>
		                                                       		
		                                                       		<?php if (!empty($row_slidex['url'])) {  ?>
		                                                       		<a class="btn btn-d" href="<?php echo $row_slidex['url']; ?>" target="<?php echo $row_slidex['target']; ?>" role="button" style="background-color: #000; font-size: 15px">
		                                                            Ver m&aacute;s       </a>
		                                                            <?php }?>
		                                                        </div>
		                                                    		<div class="clearfix"></div>
		                                                     </div>
		                                      </div>
		                                    </div>

		                                    <div class="clearfix"></div>	
		                         <?php  
								} while ($row_slidex = mysql_fetch_assoc($slidex)); ?>
								<?php }?>           
                                 

                                  


								<div class="clearfix"></div>

                    </div>

            </div>
      </div>         
                     
                           
        </div>
</div>

 
 
 


			<div class="view view-categorias nomovil ">
			<div class="view-content">

			<div class=" views-row views-row-1 views-row-odd views-row-first field-item col-sm-6 col-md-4   even" style="background-color: #168C42; color: #fff; ">
			<div class="field-contentmenu"> <a href="servicios/tramites"><img src="images/BOTtramites.svg" alt="" style="    " /></a></div>    
			</div>


			<div class="views-row views-row-2 views-row-even field-item col-sm-6 col-md-4 itemmenusubcat even"  style="background-color: #006833; color: #fff;  ">
			<div class="field-contentmenu"><a href="servicios/te_escuchamos"><img src="images/BOTteescuchamos.svg" alt="" style="  " /></a></div>    
			</div>


			<div class="views-row views-row-3 views-row-odd field-item col-sm-6 col-md-4 itemmenusubcat even" style="background-color:#074A1F;  color: #fff;  ">
			<div class="field-contentmenu"><a href="noticias"><img src="images/BOTnoticias.svg" alt="" style=" "/></a></div>   
			</div>



			<div class="views-row views-row-4 views-row-even field-item col-sm-6 col-md-4 itemmenusubcat even" style="background-color: #006833; color: #fff;  ">
			<div class="field-contentmenu"><a href="info_util/aqui"><img src="images/BOTinfoutil.svg" alt="" style="   " /></a></div>    
			</div>


			<div class="views-row views-row-5 views-row-odd field-item col-sm-6 col-md-4 itemmenusubcat even"  style="background-color: #074A1F; color: #fff;  ">
			<div class="field-contentmenu"><a href="agenda"> <img src="images/BOTagenda.svg" alt="" style=" " /></a></div>    
			</div> 


			<div class="views-row views-row-6 views-row-even field-item col-sm-6 col-md-4 itemmenusubcat even" style="background-color:#168C42; color: #fff;  ">
			<div class="field-contentmenu"><a href="boletin_oficial/ver"><img src="images/BOTboletinoficial.svg" alt="" style="   "/></a></div>    
			</div>




			</div>
			</div>





















 <style type="text/css">
 
 /*  SECTIONS  */
.section {
	clear: both;
	padding: 0px;
	margin: 0px;
}

/*  COLUMN SETUP  */
.col {
	display: block;
	float:left;
	margin: 0%  ;
}
.col:first-child { margin-left: 0; }

/*  GROUPING  */
.group:before,
.group:after { content:""; display:table; }
.group:after { clear:both;}
.group { zoom:1; /* For IE 6/7 */ }
/*  GRID OF THREE  */
.span_3_of_3 { width: 100%; }
.span_2_of_3 { width: 50%; }
.span_1_of_3 { width: 50%; }

/*  GO FULL WIDTH BELOW 480 PIXELS */
@media only screen and (max-width: 480px) {
	.col {  margin: 0% ; }
	.span_3_of_3, .span_2_of_3, .span_1_of_3 { width: 50%; }

} 


.span_1_of_3 a img {
    background-position: center center;
    text-align: center;
    vertical-align: middle;
    position: relative;
    height: 28px;
}

</style>


<div class="containerno home-destacados-menu-tramites simovil" > 

<div id="rosario_blocks_destacados_2998" class="rosario_blocks_destacados node-type-menu-tramites" style=" ">
	<div class="rowno wrapper-templateno template-1no">
				


			<div class="section group">

					<div class="col span_1_of_3"  style="background-color: #168C42; color: #fff; height: 101px;     padding-top: 26px;">
					<a href="servicios/tramites"><img src="images/bot1.svg" alt="" style="  background-position: center center;
    text-align: center;
    vertical-align: middle;
    position: relative;
    height: 48px;  " /></a>
					</div>

					<div class="col span_1_of_3"  style="background-color: #006833; color: #fff; height: 101px;     padding-top: 26px;">
					<a href="servicios/te_escuchamos"><img src="images/bot2.svg" alt="" style=" background-position: center center;
    text-align: center;
    vertical-align: middle;
    position: relative;
    height: 48px;  " /></a>
					</div>

					<div class="col span_1_of_3" style="background-color:#074A1F;  color: #fff; height: 101px;     padding-top: 26px;">
					<a href="noticias"><img src="images/bot3.svg" alt="" style=" background-position: center center;
    text-align: center;
    vertical-align: middle;
    position: relative;
    height: 48px; "/></a>
					</div>






						<div class="col span_1_of_3"  style="background-color: #168C42; color: #fff; height: 101px;     padding-top: 26px;">
					<a href="info_util/aqui"><img src="images/bot4.svg" alt=""  style="  background-position: center center;
    text-align: center;
    vertical-align: middle;
    position: relative;
    height: 48px;  " /></a>
					</div>

					<div class="col span_1_of_3"  style="background-color: #006833; color: #fff; height: 101px;     padding-top: 26px;">
					<a href="agenda"> <img src="images/bot5.svg" alt=""   style=" background-position: center center;
    text-align: center;
    vertical-align: middle;
    position: relative;
    height: 48px;  " /></a>
					</div>

					<div class="col span_1_of_3" style="background-color:#074A1F;  color: #fff; height: 101px;     padding-top: 26px;">
					<a href="boletin_oficial/ver"><img src="images/bot6.svg" alt="" style=" background-position: center center;
    text-align: center;
    vertical-align: middle;
    position: relative;
    height: 48px; "/></a>
					</div>


					


				</div>


				<!--	<div class="node node-menu-tramite node-64502" style="background-color: #168C42; color: #fff; ">
					<div class="field-contentmenu enmovi"> <a href="servicios/tramites"><img src="images/bot1.svg" alt="" style="    " /></a></div>    
					 			 
					</div>

					 <div class="node node-menu-tramite node-64502" style="background-color: #006833; color: #fff; ">
					<div class="field-contentmenu enmovi"><a href="servicios/te_escuchamos"><img src="images/bot2.svg" alt="" style="  " /></a></div>     
					</div>




					 <div class="node node-menu-tramite node-64502" style="background-color: #074A1F; color: #fff; ">
					 <div class="field-contentmenu enmovi"><a href="noticias"><img src="images/bot3.svg" alt="" style=" "/></a></div>  
					</div>








					<div class="node node-menu-tramite node-64502" style="background-color: #168C42; color: #fff; ">
					 <div class="field-contentmenu enmovi"><a href="info_util/aqui"><img src="images/bot4.svg" alt="" style="   " /></a></div>    
					</div>






					 <div class="node node-menu-tramite node-64502" style="background-color: #006833; color: #fff; ">
					<div class="field-contentmenu enmovi"><a href="agenda"> <img src="images/bot5.svg" alt="" style=" " /></a></div>   	 
					</div>







					 <div class="node node-menu-tramite node-64502" style="background-color: #074A1F; color: #fff; ">
					 <div class="field-contentmenu enmovi"><a href="boletin_oficial/ver"><img src="images/bot6.svg" alt="" style="   "/></a></div>  
					</div>

					-->
 




				</div></div>


</div>





                



                   
</div>
</div>
</div>
















<section class="section  tg-halfpadding tg-paddingbottomzero tg-haslayout tg-categories-posts " style="margin-top: 19px; margin-bottom: 19px">
    
            

              <div class="containerno" style="overflow: hidden; max-width: 98%; background-position: center center;margin-left: 1% ">
              <div class="row col-p10" style="">

                  <div class=" col-sm-12"> 

                  	<?php  
					mysql_select_db($database_connection, $connection);
					$query_notiz11 = "SELECT  *, DATE_FORMAT(Date,'%W, %d de %M de %Y.') AS niceDate FROM news  where Featured=1  and visible = 1  ORDER BY     order_ desc       limit 0,2";
					$notiz11 = mysql_query($query_notiz11) or print(mysql_error());
					$row_notiz11= mysql_fetch_assoc($notiz11);
					$totalRows_notiz11 = mysql_num_rows($notiz11);
					?>
					<?php if ($totalRows_notiz11 > 0) { ?>
						<?php $i=0; do { 
						$i=$i+1; 
						$fecha= $row_notiz11['niceDate']; 
						$arrayFecha = explode(".", $fecha);
						?>




				                    <div class="col-md-6 col-sm-12" >
				                      <div class="tg-category-posts tg-margin-bottom ">
				                      
				                        
				                        <article class="tg-theme-post tg-category-full showhim ">
				                          <figure>
				                            <a href="noticia/<?php echo $row_notiz11["url"];?>">
				                              <img src="files/<?php echo $row_notiz11["Image"];?>" alt="<?php echo $row_notiz11["Title"];?>"><!--1200*675 / 721*400-->
				                            </a>
				                            <figcaption>
				                              <div class="showme">

				                                   <ul class="tg-postmetadata " >
				                                    <li class="addthis_inline_share_toolbox_nsxt"  data-url="<?php echo $url_setting;?>noticia/<?php echo $row_notiz11['url']; ?>" addthis:description="<?php echo limpia_tags($row_notiz11['Intro']); ?>" addthis:title="<?php echo limpia_tags($row_notiz11['Title']); ?>"  data-title="<?php echo limpia_tags($row_notiz11['Title']); ?>" data-description="<?php echo limpia_tags($row_notiz11['Intro']); ?>" style="  "> 
				                                   
				                                    </li>

				                                  


				                                   <!-- <li>
				                                    <a  class="ex1"  href="whatsapp://send?text=<?php echo urlencode ('noticias/<?php echo $row_notiz11[url];?>'); ?>" data-action="share/whatsapp/share"> 
				                                    <img src="images/compartirWHATSAPP.svg" alt=" "  style="line-height: 42px; height: 42px; width: 42px;">
				                                    </a>
				                                    </li>-->
				                                  
				                                    
				                                  </ul>

				                                </div>


				                              <div class="entry-data">
				                                
				                                 <div class="tg-theme-tags">
				                                 	 <?php  $query_notiCat1 = "SELECT  * FROM relacion_news_categorias where  id_new = '".$row_notiz11["id_new"]."' group by id_categoria ";
													$notiCat1 = mysql_query($query_notiCat1) or die(mysql_error());
													$row_notiCat1= mysql_fetch_assoc($notiCat1);
													$totalRows_notiCat1 = mysql_num_rows($notiCat1);

													if ($totalRows_notiCat1 > 0) { ?>
													<?php $i=0; do { 
													mysql_select_db($database_connection, $connection);
													 $query_cat1 = "SELECT  *  FROM `sub_contents` WHERE     id_sub_content=  '".$row_notiCat1["id_categoria"]."'";
													$cat1 = mysql_query($query_cat1) or die(mysql_error());
													$row_cat1= mysql_fetch_assoc($cat1);
													$totalRows_cat1 = mysql_num_rows($cat1);

													$i=$i+1; ?>
													
				                                    <a class="tg-tag tg-tag-category tg-color-dark" href="noticias_categoria/<?php echo $row_notiCat1["id_categoria"];?>/<?php $nom = strtolower($row_cat1['Title']); $nom = str_replace(" ", "_", $nom); echo $nom; ?>"> <?php echo $row_cat1["Title"];?></a>
				                                   


				                                  <?php  
													} while ($row_notiCat1 = mysql_fetch_assoc($notiCat1)); ?>
												 <?php }?>
				                                
				                                </div>
				                                <h1 class="entry-title sec-corbata">
				                                <a href="noticia/<?php echo $row_notiz11["url"];?>" title="" itemprop="headline name">
				                                <?php $txt1 = $row_notiz11[Title];
												echo getSubString($txt1, 100);
												?></a>
				                                </h1>
				                                
				                             
				                              </div>




				                            </figcaption>
				                          </figure>
				                        </article>


				                        
				                      </div>
				                    </div>




 						 <?php  
						} while ($row_notiz11 = mysql_fetch_assoc($notiz11)); ?>
						<?php }?>

                      
                  





 
                       </div> 

                  </div>  
                  </div>
                </div>




  <div class="containerno" style="overflow: hidden; max-width: 98%; background-position: center center;margin-left: 1%; margin-top: -10px;   ">
              <div class="row col-p10" style="">

                  <div class=" col-sm-12"> 

					<?php  
					mysql_select_db($database_connection, $connection);
					$query_notiz12 = "SELECT  *, DATE_FORMAT(Date,'%W, %d de %M de %Y.') AS niceDate FROM news   where Featured=1  and visible = 1 ORDER BY     order_ desc       limit 2,3";
					$notiz12 = mysql_query($query_notiz12) or print(mysql_error());
					$row_notiz12= mysql_fetch_assoc($notiz12);
					$totalRows_notiz12 = mysql_num_rows($notiz12);
					?>
					<?php if ($totalRows_notiz12 > 0) { ?>
						<?php $i=0; do { 
						$i=$i+1; 
						$fecha= $row_notiz12['niceDate']; 
						$arrayFecha = explode(".", $fecha);
						?>




                    <div class="col-md-4 col-sm-12" >
                      <div class="tg-category-posts tg-margin-bottom">
                      
                       

                        <article class="tg-theme-post tg-category-full showhim">
                          <figure>
                            
								<a href="noticia/<?php echo $row_notiz12["url"];?>">
								<img src="files/<?php echo $row_notiz12["Image"];?>" alt="<?php echo $row_notiz12["Title"];?>"><!--424*235 / 721*400-->
								</a>

                            <figcaption>

                                <div class="showme">

                                   <ul class="tg-postmetadata " >
                                    <li class="addthis_inline_share_toolbox_nsxt"  data-url="<?php echo $url_setting;?>noticia/<?php echo $row_notiz12['url']; ?>" addthis:description="<?php echo limpia_tags($row_notiz12['Intro']); ?>" addthis:title="<?php echo limpia_tags($row_notiz12['Title']); ?>"  data-title="<?php echo limpia_tags($row_notiz12['Title']); ?>" data-description="<?php echo limpia_tags($row_notiz12['Intro']); ?>" style="  "> 
				                                   
				                       </li>
                                  

                                  </ul>

                                </div>



                                <div class="entry-data">
                                
                                 <div class="tg-theme-tags">
										<?php  $query_notiCat2 = "SELECT  * FROM relacion_news_categorias where  id_new = '".$row_notiz12["id_new"]."' group by id_categoria ";
										$notiCat2 = mysql_query($query_notiCat2) or die(mysql_error());
										$row_notiCat2= mysql_fetch_assoc($notiCat2);
										$totalRows_notiCat2 = mysql_num_rows($notiCat2);

										if ($totalRows_notiCat2 > 0) { ?>
										<?php $i=0; do { 
										mysql_select_db($database_connection, $connection);
										$query_cat2 = "SELECT  *  FROM `sub_contents` WHERE     id_sub_content=  '".$row_notiCat2["id_categoria"]."'";
										$cat2 = mysql_query($query_cat2) or die(mysql_error());
										$row_cat2= mysql_fetch_assoc($cat2);
										$totalRows_cat2 = mysql_num_rows($cat2);

										$i=$i+1; ?>

										<a class="tg-tag tg-tag-category tg-color-dark" href="noticias_categoria/<?php echo $row_notiCat2["id_categoria"];?>/<?php $nom = strtolower($row_cat2['Title']); $nom = str_replace(" ", "_", $nom); echo $nom; ?>"> <?php echo $row_cat2["Title"];?></a>



										<?php  
										} while ($row_notiCat2 = mysql_fetch_assoc($notiCat2)); ?>
										<?php }?>
                                  </div>
                                
                                <h1 class="entry-title sec-corbata chico">

									<a href="noticia/<?php echo $row_notiz12["url"];?>" title="" itemprop="headline name">
									<?php $txt2 = $row_notiz12[Title];
									echo getSubString($txt2, 100);
									?></a>


                                </h1>
                                
                             
                              </div>


                              


                            </figcaption>
                          </figure>
                        </article>



                        
                      </div>
                    </div>



 						 <?php  
						} while ($row_notiz12 = mysql_fetch_assoc($notiz12)); ?>
						<?php }?>
                   


 






 


                    </div>

 

                  </div>  
                  </div>



                </div>

                   
                   
                   <?php if ($totalRows_notiz12 > 0) { ?>
                   
                  <CENTER>  
                  <div class="vermas"  >     
                  <a href="noticias" class="btn btn-d"> VER M&Aacute;S +</a>
                   </div> 
                  </CENTER> 
                 
                 <?php }?> 
                 
                   







                </section>

















   <!--    </div>         
                     
                           
        </div>
</div>
</div>
  </div>
</div>

</section>
 -->

 </section>

    
</div>

</section>
 
    
</div>










<?php if($conf["agenda"]==1){?>
 



<section class="section-bg mt0 section-dark  stats-section  " style="width: 100%; overflow: hidden; ">
<div class="container ">
<div class="row">
<div class="col-sm-12">
<div class="row">


<div class="  col-sm-12" style="text-align: center;">
<div class="stats-contentno">



 
 <div class="field-contentmenu"><a href="javascript:void(0);" style="cursor: default;"> <img src="images/BOTagenda.svg" alt="" style=" " /></a></div>    
 
 
</div>
</div>


 
 
 
</div>
</div>
</div>
</div>
</section>
 
<?php }?>


 <?php if($conf["agenda"]==1){?>




<section class="search-sec mb40" style="width: 100%; overflow: hidden;">
    <div class="container movi" >
        


            <div class="row movi" >
                <div class="col-sm-12" >

                    <div class="filter" style=" display:inline; width:100%">
                                     
                  <form name="form_ferias1" id="form_ferias1" method="get" action="calendario_result1.php">

                    <div class="row" >
                        <div class=" col-md-3 col-sm-12 p-0" style="padding-right: 5px;   padding-left: 5px;">
                          <label>Desde</label>
                            <input type="date" name="desde" id="desde" class="form-control search-slt"  onChange="getResultFerias1();" >
                        </div>

                         <div class=" col-md-3 col-sm-12 p-0" style="padding-right: 5px;   padding-left: 5px;">
                          <label>Hasta</label>
                            <input type="date"  name="hasta" id="hasta" class="form-control search-slt"  onChange="getResultFerias1();" >
                        </div>

                         <div class=" col-md-4 col-sm-12 p-0" style="padding-right: 5px;   padding-left: 5px;">
                            <label>Categor&iacute;as</label>
                            <select class="form-control search-slt"   name="categoria" id="categoria"   onChange="getResultFerias1();">
 
                              <option value="">Todas</option> 
                              <?php  $consulta = mysql_query("SELECT * FROM categorias_agenda where idcat in(10,11) group by order_ ORDER BY order_ asc"); 
                                while ($row = mysql_fetch_array($consulta)) {
                                   $f=$row['idcat']; $fn=$row['categoria'];
                                 
                                     
                                                   print "<option ";
                                                  
                                                  print "value=\"".$f."\">".$fn."</option>";
                                                  } 
                                                  ?>
                                                   </select>
                                    
                        
                             </div>
                            <div class=" col-md-2 col-sm-12 p-0 movicenter" style="padding-right: 5px;   padding-left: 5px; margin-top:30px; margin-left: -13px">
                               <label>  </label>        
                                 
                                  
                                    <button type="submit" class="btn btn-d ">BUSCAR</button>

                          </div>
                            </div>
                                    
                  </form>
                                    </div>          
                           



            </div>
            </div>

              
            
            
    </div>




</section>

  
















  <section class="section  tg-halfpadding tg-paddingbottomzero tg-haslayout tg-categories-posts  mt20 mb20" style="width: 100%; overflow: hidden;" >
    

       

  <div class="container movi" style="overflow: hidden;  background-position: center center;   ">
              <div class="row col-p10ggg" style="">






 	
                 <div class="ferias_todo1">
						 

							 <div id="elementx"> </div> 
							  <ul id="calendar0" class="list-unstyled clearfix">
							                                      
							  <div id="pagitx">  	


							<?php
							mysql_select_db($database_connection, $connection);
							 /* $query_ev =  ("SELECT * ,DATE_FORMAT(Date,'%W, %d de %M. / %H:%i hs.') AS niceDate 
							FROM agenda  where `Date`>=CURDATE() 
							   ORDER BY ABS(`Date` - CURDATE()) "); //limit 0,4*/


							$query_ev =  (" SELECT * ,DATE_FORMAT(Date,'%W, %d de %M. / %H:%i hs.') AS niceDate  ,DATE_FORMAT(Date_hasta,'%W, %d de %M. / %H:%i hs.') AS niceDate2
							FROM agenda  where  Featured=1  and visible = 1  and   (  `Date`>=CURDATE() or Date_hasta >=CURDATE()   )
							ORDER BY ABS( `Date` - CURDATE( ) ) , ABS( `Date_hasta` - CURDATE( ) ) ");


							$ev = mysql_query($query_ev, $connection) or print(mysql_error());
							$row_ev = mysql_fetch_assoc($ev);
							$totalRows_ev = mysql_num_rows($ev);
							if ($totalRows_ev > 0) {   
							do { 

							?> 
							<li>


							<div class=" col-sm-12"  > 

							<div class="row movi"> 



							<div class="col-md-44   col-sm-12 padage "  >
							<div class="tg-category-posts tg-margin-bottom">

							<article class="tg-theme-post tg-category-small showhim">
							<figure   onclick="location.href='agenda/<?php echo $row_ev["url"];?>'" style="cursor: pointer;">


							<a href="agenda/<?php echo $row_ev["url"];?>">
							<img src="files/<?php echo $row_ev["Image"];?>" alt="<?php echo $row_ev["Title"];?>" ><!--292px*208px style="min-width: 292px; min-height: 208px"-->
							</a>


							<figcaption  style="background-image: none">

							<div class="showme">

							<ul class="tg-postmetadata " >
							<li class="addthis_inline_share_toolbox_nsxt"  data-url="<?php echo $url_setting;?>agenda/<?php echo $row_ev['url']; ?>" addthis:description="<?php echo limpia_tags($row_ev['Title']); ?>" addthis:title="<?php echo limpia_tags($row_ev['Title']); ?>"  data-title="<?php echo limpia_tags($row_ev['Title']); ?>" data-description="<?php echo limpia_tags($row_ev['Title']); ?>" 
							> 

							</li>


							</ul>

							</div>


							<div class="tg-box"  style=" ">
							<div class="tg-postcontent">


							<div class="tg-border-heading">
							<h3 >
							<div class="tg-theme-tags" style="padding-bottom: 20px">


							<?php 
							$query_notiCat1a = "SELECT  * FROM relacion_agenda_categorias where   id_categoria in(10,11) and  id_new = '".$row_ev["id_new"]."' group by id_categoria ";
							$notiCat1a = mysql_query($query_notiCat1a) or die(mysql_error());
							$row_notiCat1a= mysql_fetch_assoc($notiCat1a);
							$totalRows_notiCat1a = mysql_num_rows($notiCat1a);

							if ($totalRows_notiCat1a > 0) { ?>
							<?php $i=0; do { 
							mysql_select_db($database_connection, $connection);
							$query_cat1a = "SELECT  *  FROM `categorias_agenda` WHERE     idcat=  '".$row_notiCat1a["id_categoria"]."' and idcat in(10,11)   ";
							$cat1a = mysql_query($query_cat1a) or die(mysql_error());
							$row_cat1a= mysql_fetch_assoc($cat1a);
							$totalRows_cat1a = mysql_num_rows($cat1a);

							$i=$i+1; ?>

							<a class="tg-tag tg-tag-category tg-color-dark" href="agenda_categoria/<?php echo $row_cat1a["url"];?>" style="font-size: 14px;  padding: 10px"> <?php echo $row_cat1a["categoria"];?></a>



							<?php  
							} while ($row_notiCat1a = mysql_fetch_assoc($notiCat1a)); ?>
							<?php }?>






							</div>
							</h3>
							</div>


							</div>
							</div>
							</figcaption>
							</figure>
							</article>

							</div>





							</div>


							<?php if ( !empty($row_ev["Date_hasta"]) &&  empty($row_ev["repertir"]) ) {     
							setlocale(LC_ALL, 'es_AR');  
							$cadena= $row_ev["niceDate2"];
							$array = explode(",", $cadena);
							//  echo $array[1];

							$hoy=date("d"); 
							 ?>


							<div class="col-md-7 col-sm-12 moviagenda padagepoco">
							<div class="tg-category-posts">

							<div class="tituloagenda1" style="text-transform:  uppercase;"> <?php echo $row_ev['niceDate']; ?>  
							<span style="color:#006833; font-family: 'D-DIN', Arial, Helvetica, sans-serif; ">
								 
								 <?php if ( !empty($row_ev["Date_hasta"])  ) {   ?>
					                HASTA <?php echo $row_ev['niceDate2']; ?>
					                <?php }else{?>
					                  a  <?php echo $row_ev['hora_hasta']; ?>
					                <?php }?>  	

								</span> </div>
							<div class="tituloagenda2"><?php echo $row_ev['Title']; ?>
							</div>
							<div class="tituloagenda3" style="text-transform: uppercase;"><?php echo $row_ev['By']; ?></div>


							<div style="margin-top:  10px; margin-bottom: 30px">   
							<a href="agenda/<?php echo $row_ev["url"];?>" class="btn btn-e"> VER ACTIVIDAD</a>
							</div> 


							</div>

							</div>



							 <?php }  ?>





							 <?php if ( empty($row_ev["Date_hasta"])  ) {   ?>

							<div class="col-md-7 col-sm-12 moviagenda padagepoco">
							<div class="tg-category-posts">

							<div class="tituloagenda1" style="text-transform:  uppercase;"> 
								<?php echo $row_ev['niceDate']; ?>
								 <?php if ( !empty($row_ev["hora_hasta"])  ) {   ?> 
				                   a  <?php echo $row_ev['hora_hasta']; ?> 
				                 <?php }  ?> 
									

								</div>
							<div class="tituloagenda2"><?php echo $row_ev['Title']; ?>
							</div>
							<div class="tituloagenda3" style="text-transform: uppercase;"><?php echo $row_ev['By']; ?></div>


							<div style="margin-top:  10px; margin-bottom: 30px">   
							<a href="agenda/<?php echo $row_ev["url"];?>" class="btn btn-e"> VER ACTIVIDAD</a>
							</div> 


							</div>

							</div>
							  <?php }  ?>  




							  	 <?php   //echo $row_ev["repertir"]; 
							 if ( !empty($row_ev["repertir"])   ) {  
							 $today= date('Y-m-d');
							 setlocale(LC_TIME, "spanish");
					 

							/* if($today >$row_ev[Date]) {

									$fecha = date($row_ev[Date]);
									$nuevafecha = strtotime ( '+7 day' , strtotime ( $fecha ) ) ;
									$nuevafecha = date ( 'd-m-Y H:i' , $nuevafecha );
								//echo "dfgfgfg".   
								    $repite = strftime("%A, %d de %B. / %H:%M hs.", strtotime($nuevafecha));
								   


							 }else{

							 	   $repite=$row_ev['niceDate'];

							 }*/
							 ?>




							<div class="col-md-7 col-sm-12 moviagenda padagepoco">
							<div class="tg-category-posts">

							<div class="tituloagenda1" style="text-transform:  uppercase;"> <?php echo $row_ev[niceDate]; ?></div>
							<div class="tituloagenda2"><?php echo $row_ev['Title']; ?>
							</div>
							<div class="tituloagenda3" style="text-transform: uppercase;"><?php echo $row_ev['By']; ?></div>


							<div style="margin-top:  10px; margin-bottom: 30px">   
							<a href="agenda/<?php echo $row_ev["url"];?>" class="btn btn-e"> VER ACTIVIDAD</a>
							</div> 


							</div>

							</div>
							  <?php }  ?>  



						




							</div>

							</div>
							</li>


								<div class=" col-sm-12 subelienage" style="border-top: 1px solid  #cccccc; margin-top: -1%; height: 10px  ";> </div>



							<?php } while ($row_ev = mysql_fetch_assoc($ev)); 
							}?>







							</div>

							</ul>
							<!--/ .post-holder-->
  				 <?php if ($totalRows_ev   > 8 )  { ?>
				<div class="holderx"></div>  
				<?php  }?>
 
                                        
                          <br><br>
                                        
              	</div>
            	<div class="ferias_result1" style="display:none; color: #333">Cargando...</div>

        
                                   
              <!--/ .recent-post-->

              
                            
              <!--/ .recent-post-->

            </div>





 
  
                   

                 
                      <!--   <div class="col-sm-12" style="margin-top: 20px; margin-bottom: 30px; text-align: ">  
                    <CENTER>  
                    <ul class="pagination">
                      <li class="disabled"><a href="#"><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li class="disabled"><a href="#">...</a></li>
                      <li><a href="#">15</a></li>
                      <li><a href="#"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                      </ul>
                       </CENTER> 

                   </div> -->

  
                </div>

                   
                   
                 
                 
                   







                </section>


<?php }?>










 

 

<?php if(!empty($conf["youtube"])){?>


<section class="section-bg mt20 section-gray stats-section"  style="width: 100%; overflow: hidden;margin-bottom: 0px" >
<div class="containerno">
<div class="row">
<div class="col-sm-12">
<div class="row">


<div class="  col-sm-12">
<div class="stats-contentno">
 
 
 
 
 <div class="field-contentmenu"><a href="<?php echo $conf["youtube"];?>" target="_blank"> <img src="images/BOTelcanaldelaciudad.svg" alt="" style=" " /></a></div>    
 
<!--<h3><a href="" style="color: #fff"><img src="images/seguirYOUTUBE.svg" style="width: 35px; height:  35px; vertical-align: middle;padding-right: 10px; border-right: 1px solid #fff  " alt=" " >&nbsp;&nbsp;&nbsp;El canal de la ciudad</a></h3>-->
</div>
</div>


 
 
 
</div>
</div>
</div>
</div>
</section>



<section class="section-bg-gray   " style="width: 100%; overflow: hidden; ">
<div class="container"  >
<div class="row">
<div class="col-sm-12  mt40 mb20 ">
<div class="row">
<div class=" col-sm-1"> </div>  

<div class="col-sm-10" style="background-color: #fff;padding-top: 10px; padding-left: 12px; padding-right: 12px; padding-bottom: 5px">

 
   <!-- <iframe   class="viyou" src="https://www.youtube.com/embed/aRayIcuaqEI" frameborder="0" allowfullscreen></iframe>-->

   <link href="yt/src/ytv.css?v=dfdfarraaa" type="text/css" rel="stylesheet" />
<link href="yt/assets/demo.css?v=dfdsaassrrf" type="text/css" rel="stylesheet" />
 	 
	
<div id="frame" ></div>
 
 

  <script type="text/javascript" src="yt/assets/ytv.js?v=dfdfarraaa"  defer="defer"></script>
		<script  defer="defer">
			window.onload = function(){
 				window.controller = new YTV('frame', {
					//user: '<?php echo $user[4];?>',
					channelId: 'UCoZ9IhQpMByAinIg5iT8FQQ',
					accent: '#FFCA00',
 					annotations: false,
					controls: false,
					autoplay: false,annotations: false,
				 
					
				});
		
			};
		</script>


     
</div>

<div class=" col-sm-1"> </div>  



</div>
<CENTER>  
  <div style="margin-top: 30px; margin-bottom: 20px">  
  <a href="<?php echo $conf["youtube"];?>" target="_blank" class="btn btn-d"> VER M&Aacute;S +</a>
  </div>  
  </CENTER> 


</div>
</div>
</div>

  


</section>

 


<?php }?>
 








 </div>
  </section>
  </div>
</div>

 

 


<?php  include "_footer.php";?>












<script type="text/javascript">
    

/////////////////////////////
jQuery(document).ready(function() {
  
  jQuery.ajax({
    url: "calendario_result1.php?ini",
    success: function( data ) {
      jQuery(".ferias_result1").html(data);
    }
  });
  
   
});






jQuery('#form_ferias1').submit(function(event) {
  getResultFerias1();
  event.preventDefault();
});

function getResultFerias1() {
  jQuery(".ferias_todo1").hide();
  jQuery(".ferias_result1").show();
  jQuery(".ferias_result1").html("<h2>Por favor espere...</h2>");
  jQuery("rq").value = jQuery("q").value;
  
      
  result = jQuery("#form_ferias1");
  var postData = result.serializeArray();
  var formURL = result.attr("action");
  
  jQuery.ajax(
  {
    url : formURL,
    data: postData,
    success: function( data ) {
      jQuery(".ferias_result1").html(data);
      
           

    }
  });
}


 

  </script>


 <link rel="stylesheet" href="js/jPages-master/css/animate.css">
  <link rel="stylesheet" href="js/jPages-master/css/github.css">
  
   <script type="text/javascript" src="js/jPages-master/js/tabifier.js"></script>
   <script src="js/jPages-master/js/jPages.js"></script>
   
    


 <style>

  .holderx  {
     text-align:center; padding-top: 10px  
  }
  .holderx a  {
    font-size: 20px;
    cursor: pointer;
    margin: 0 5px;  
    color: #333 ; cursor:pointer; text-decoration:none; padding:10px;
  }
  .holderx a:hover {text-decoration:none;color: #222 ;opacity: 0.6
 /*   background-color: #222;
    color: #fff;*/
  }
  .holderx a.jp-previous  { margin-right: 10px; padding-left:20px; background-image: url(images/atras.png); background-repeat:no-repeat; vertical-align:middle;    color: #fff ;  }


  .holderx a.jp-next { margin-left: 0px; padding-left:25px;  background-image: url(images/adelante.png); background-repeat:no-repeat; vertical-align:middle;       color: #fff ;  }



  .holderx a.jp-previous:hover   { opacity: 0.6  ;}


  .holderx a.jp-next:hover   {opacity: 0.6   }


  .holderx a.jp-current, a.jp-current:hover    {
    color: #006833;
    font-weight: bold; opacity: 0.6  
  }


  .holderx a.jp-disabled, a.jp-disabled:hover {
    color: #fff ;opacity: 0.3     
  }
  .holderx a.jp-current, a.jp-current:hover,
  .holderx a.jp-disabled, a.jp-disabled:hover ,
   .holderx a.jp-current2, .holder3 a.jp-current, .holder4 a.jp-current, .holder5 a.jp-current, 
  .holderx a.jp-disabled2,.holder3 a.jp-disabled,.holder4 a.jp-disabled,.holder5 a.jp-disabled,
  
  {
    cursor: none;   
     
  }
   .holderx a.jp-current, .holder2 a.jp-current, .holder3 a.jp-current, .holder4 a.jp-current, .holder5 a.jp-current  {
   
    color: #006833;  
  }
   
    
  
   
  .holderx span ,.holder2 span,.holder3 span,.holder4 span,.holder5 span{ margin: 0 5px; }
 
</style>






   <script>
  /* when document is ready */
 jQuery(function() {
    /* initiate plugin */
     jQuery("div.holderx").jPages({
      containerID  : "pagitx",
      perPage      : 8,
      startPage    : 1,
      startRange   : 1,
      midRange     : 8,
      endRange     : 1,
     /* keyBrowse: true,
scrollBrowse: true*/

      
    });

 

jQuery('.holderx a').click(function () {  
        jQuery('html, body').animate({
              scrollTop: (jQuery('#elementx').offset().top)
          },600);
      //  return false;
    });



 
	
  });
  </script>


<!-- Go to www.addthis.com/dashboard to customize your tools --> 
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-56c08630ea85dc35"></script>