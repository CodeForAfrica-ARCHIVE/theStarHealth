<?php
/** sidebar.php
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0.0	- 05.02.2012
 */

tha_sidebars_before(); ?>

<section id="secondary" class="widget-area span4" role="complementary">
	<aside style='display:none;' id="text-2" class="widget well widget_text"><h2 class="widget-title">Visualizations</h2>
	<div class="textwidget">
	<form>
	<select value='county' style='width:100%' name="URL" onchange="window.location.href= '<?php bloginfo('home');?>?dataset='+this.form.URL.options[this.form.URL.selectedIndex].value">
	<option>Select Dataset</option>
	<option value='facilities'>Health Facilities</option>
	<option value='illnessvspoverty'>Illness vs poverty</option>
	<option value='disability'>Disability</option>
	</select>
	</form>
	</div>
		<h2 class="widget-title">County News</h2>
	<div class="textwidget">
	 <form  style='display:inline;'>
	 <select value='county' style='width:100%' name="URL" onchange="window.location.href= '?counties='+this.form.URL.options[this.form.URL.selectedIndex].value">
	 <option>Select County</option>
	 <option value="Nairobi">Nairobi</option>
<option value="Mombasa">Mombasa</option>
<option value="Kisumu">Kisumu</option>
<option value="Nakuru">Nakuru</option>
<option value="Kwale">Kwale</option>
<option value="Kilifi">Kilifi</option>
<option value="Tana River">Tana River</option>
<option value="Lamu">Lamu</option>
<option value="Taita/Taveta">Taita/Taveta</option>
<option value="Garissa">Garissa</option>

<option value="Wajir">Wajir</option>
<option value="Mandera">Mandera</option>
<option value="Marsabit">Marsabit</option>
<option value="Isiolo">Isiolo</option>
<option value="Meru">Meru</option>
<option value="Tharaka Nithi">Tharaka-Nithi</option>
<option value="Embu">Embu</option>
<option value="Kitui">Kitui</option>
<option value="Machakos">Machakos</option>

<option value="Makueni">Makueni</option>
<option value="Nyandarua">Nyandarua</option>
<option value="Nyeri">Nyeri</option>
<option value="Kirinyaga">Kirinyaga</option>
<option value="Murang'a">Muranga</option>
<option value="Kiambu">Kiambu</option>
<option value="Turkana">Turkana</option>
<option value="West Pokot">West Pokot</option>
<option value="Samburu">Samburu</option>

<option value="Trans Nzoia">Trans Nzoia</option>
<option value="Uasin Gishu">Uasin Gishu</option>
<option value="Elgeyo/Marakwet">Elgeyo Marakwet</option>
<option value="Nandi">Nandi</option>
<option value="Baringo">Baringo</option>
<option value="Laikipia">Laikipia</option>

<option value="Narok">Narok</option>
<option value="Kajiado">Kajiado</option>

<option value="Kericho">Kericho</option>
<option value="Bomet">Bomet</option>
<option value="Kakamega">Kakamega</option>
<option value="Vihiga">Vihiga</option>
<option value="Bungoma">Bungoma</option>
<option value="Busia">Busia</option>
<option value="Siaya">Siaya</option>

<option value="Homa Bay">Homa Bay</option>

<option value="Migori">Migori</option>
<option value="Nyamira">Nyamira</option>
	 </select>
	 </form>
	</div>
		</aside>
			<div class='span4'>
	<div id='contspan'>
	
<div align='center'><h2>Latest News</h2></div>
<table class="zebra-striped">
        <tbody>
        
		 <?php
		 $args = array(
		 'cat'=>'1',
	'post_type'=> 'post',
	'posts_per_page'=>5
);

 // The Query
query_posts( $args );
while ( have_posts() ) : the_post();
	echo '<tr><td><a href="?p=';
	the_id();
	
	echo '">';
	the_title();
	
	echo '</a></td></tr>';
endwhile;

// Reset Query
wp_reset_query();
?>
        </tbody>
      </table>
<div align='center'><a href="?cat=1" class="btn primary">More</a></div><br>
</div>
	</div>
	<div class='span4'>
	<table class="zebra-striped">
        <tbody>
        
	<div align='center'><h2>Health News</h2></div>
			 <?php
		 $args = array(
		 'cat'=>'4',
	'post_type'=> 'post',
	'posts_per_page'=>5
);

 // The Query
query_posts( $args );
while ( have_posts() ) : the_post();
	echo '<tr><td><a href="?p=';
	the_id();
	
	echo '">';
	the_title();
	
	echo '</a></td></tr>';
endwhile;

// Reset Query
wp_reset_query();
?> </tbody>
      </table>
	<div align='center'><a href="?cat=4" class="btn primary">More</a></div><br>
	</div>
	<div class='span4'>
	<table class="zebra-striped">
        <tbody>
		<div align='center'><h2>County News</h2></div>
				 <?php
		 $args = array(
		 'cat'=>'5',
	'post_type'=> 'post',
	'posts_per_page'=>5
);

 // The Query
query_posts( $args );
while ( have_posts() ) : the_post();
	echo '<tr><td><a href="?p=';
	the_id();
	
	echo '">';
	the_title();
	
	echo '</a></td></tr>';
endwhile;

// Reset Query
wp_reset_query();
?> </tbody>
      </table>
	<div align='center'>	<a href="?cat=5" class="btn primary">More</a></div><br>
	</div>
	</section>
<section id="secondary" class="widget-area span4" role="complementary" style='display:none;'>
	<?php tha_sidebar_top();
	
	if ( ! dynamic_sidebar( 'main' ) ) {
		the_widget( 'WP_Widget_Archives', array(
			'count'		=>	0,
			'dropdown'	=>	0
		), array(
			'before_widget'	=>	'<aside id="archives" class="widget well widget_archives">',
			'after_widget'	=>	'</aside>',
			'before_title'	=>	'<h3 class="widget-title">',
			'after_title'	=>	'</h3>',
		) );
		the_widget( 'WP_Widget_Meta', array(), array(
			'before_widget'	=>	'<aside id="meta" class="widget well widget_meta">',
			'after_widget'	=>	'</aside>',
			'before_title'	=>	'<h3 class="widget-title">',
			'after_title'	=>	'</h3>',
		) );
	} // end sidebar widget area
	
	tha_sidebar_bottom(); ?>
</section><!-- #secondary .widget-area -->
<?php tha_sidebars_after();


/* End of file sidebar.php */
/* Location: ./wp-content/themes/the-bootstrap/sidebar.php */