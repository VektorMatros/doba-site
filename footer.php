</div><!-- CLOSING CONTAINER -->
</div><!-- CLOSING WRAPPER -->

		<div class="footer-wrapper">

		        <!-- BEGINNING FOOTER -->
		        <div class="footer">

		        		<!-- WIDGETIZED AREA 1 FOOTER -->
		                <div class="footer-col footer-col1">
		                		<?php
								if ( ! dynamic_sidebar( 'Footer Col1' )) :
								endif;
								?>
		                </div>

		                <!-- WIDGETIZED AREA 2 FOOTER -->
		                <div class="footer-col">
		                		<?php
								if ( ! dynamic_sidebar( 'Footer Col2' )) :
								endif;
								?>
		                </div>

		                <!-- WIDGETIZED AREA 3 FOOTER -->
		                <div class="footer-col">
		                		<?php
								if ( ! dynamic_sidebar( 'Footer Col3' )) :
								endif;
								?>
		                </div>


		        </div><!-- CLOSING FOOTER -->

		        <!-- BEGINNING BOTTOM BAR -->
		        <div class="bottombar-wrapper">
				       <div class="bottom-bar">

								<!-- FOOTER NAVIGATION -->
								<?php
								if ( has_nav_menu( 'footer-menu' ) )
								{
									wp_nav_menu( array(
										 'theme_location' => 'footer-menu',
										 'container' => false,
										 'menu_class'=>'footer-nav'
										 )
									);
								}
								?>

				               	<!-- FOOTER LOGO -->
<center>
<div><a href="#" target="_blank"><img style="height: 40px; margin-top: 12px; opacity: 0.6;" src="https://irpin.doba.in.ua/wp-content/uploads/2017/10/dobovolog.png" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"></a></div><div style="font-size: 11px;"><a href="#" target="_blank">ссылка на отзывы</a></div></center>
		                        <a href="<?php echo home_url(); ?>">
										<?php
												if( function_exists( 'ot_get_option' ))
												{
													?>
							                        
													<?php
												}
										?>
								</a>

		                       <!-- COPYRIGTH TEXT FOOTER -->
		                       <div class="copy-right-wrapper">
							   			<p class="developed-by">
												<a href="https://matros.uno">Розробка сайту та автоматизація процессів, CRM, IP телефонія</a>
						                </p>
						                <p class="copy-right">
		                                        <?php
												if( function_exists( 'ot_get_option' ))
												{
													echo "Квартири подобово у Ірпіні";
												}
														$parametr = get_post_custom(1146);
														echo "<!-- <pre>";
														print_r ($parametr);
														echo "</pre> -->";
												?>
						                </p>
				               </div>

		               </div>

		        </div><!-- CLOSING BOTOMBAR -->

		</div><!-- FOOTER WRAPPER CLOSED -->

		<?php wp_footer(); ?>



		<script type="text/javascript">
		jQuery(document).ready(function(){

		/*-----------------------------------------------------------------------------------*/
		/*	Search Slider in Footer -- Settings can be changed from theme options
		/*-----------------------------------------------------------------------------------*/
			<?php
			if (isset($_GET['min_price']) &&  isset($_GET['max_price'])) {
				?>
				var min_val = parseInt(<?php echo ot_get_option( 'min_val', 0 ); ?>);
				var max_val = parseInt(<?php echo ot_get_option( 'max_val', 1000000 ); ?>);
				var ini_min_val = parseInt(<?=$_GET['min_price']?>);
				var ini_max_val = parseInt(<?=$_GET['max_price']?>);
				var step = parseInt(<?php echo ot_get_option( 'step', 5000 ); ?>);
				<?
			}

			else if( function_exists( 'ot_get_option' ))
			{
				?>
				var min_val = parseInt(<?php echo ot_get_option( 'min_val', 0 ); ?>);
				var max_val = parseInt(<?php echo ot_get_option( 'max_val', 1000000 ); ?>);
				var ini_min_val = parseInt(<?php echo ot_get_option( 'ini_min_val', 100000 ); ?>);
				var ini_max_val = parseInt(<?php echo ot_get_option( 'ini_max_val', 500000 ); ?>);
				var step = parseInt(<?php echo ot_get_option( 'step', 5000 ); ?>);
				<?php
			}
			else
			{
				?>
				var min_val = 0;
				var max_val = 1000000;
				var ini_min_val = 100000;
				var ini_max_val = 500000;
				var step = 5000;
				<?php
			}
			?>


			$("#slider-range").slider({
				range: true,
				min: min_val,
				max: max_val,
				values: [ ini_min_val, ini_max_val ],
				step: step,
				slide: function( event, ui ) {
					$( "#min-price" ).val( ui.values[ 0 ]);
					$( "#max-price" ).val( ui.values[ 1 ]);
					$( "#amount" ).val( ui.values[ 0 ] + " - " + ui.values[ 1 ] );
				}
			});

			$( "#amount" ).val( $( "#slider-range" ).slider( "values", 0 ) + " - " + $( "#slider-range" ).slider( "values",1 ) );

			$( "#min-price" ).val( $( "#slider-range" ).slider( "values", 0 ) );
			$( "#max-price" ).val( $( "#slider-range" ).slider( "values", 1 ) );
		});
		</script>


<?php
switch(get_bloginfo('language')) {
  case 'en-US':
    $bn_w_arr = array('lang' => 'en', 'title' => 'Booking online', 'arrival' => 'Arrival', 'departure' => 'Departure', 'avail' => 'Show availability');
    break;
  case 'de-DE':
    $bn_w_arr = array('lang' => 'de', 'title' => 'Online-Buchung', 'arrival' => 'Anreise', 'departure' => 'Abreise', 'avail' => 'Verfügbarkeit prüfen');
    break;
  case 'uk':
    $bn_w_arr = array('lang' => 'uk', 'title' => 'Забронювати онлайн', 'arrival' => 'Заїзд', 'departure' => 'Виїзд', 'avail' => 'Перевірити наявність');
    break;
  default:
    $bn_w_arr = array('lang' => 'ru', 'title' => 'Забронировать онлайн', 'arrival' => 'Заезд', 'departure' => 'Выезд', 'avail' => 'Показать наличие');
}
?>

</body>
</html>
