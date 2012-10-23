<?php
/** archive.php
 *
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0.0 - 07.02.2012
 */

get_header(); ?>
<?php
function show_diseases(){
?>
<form><select value='cat' style='width:100%' name="URL" onchange="window.location.href= '?diseases='+this.form.URL.options[this.form.URL.selectedIndex].value">
	 <option>Select Disease</option>
	 <option value='Malaria'>Malaria</option>
	 </select>
	 </form>
<?php
}
function show_specialties()
{?>
<form><select value='cat' style='width:100%' name="URL" onchange="window.location.href= '?specialities='+this.form.URL.options[this.form.URL.selectedIndex].value">
	 <option>Select Specialty</option>
	
<option value='Pathology'>Pathology</option>
<option value='Internal'>Internal</option>
<option value='Ophthalmology'>Ophthalmology</option>
<option value='Paediatrics'>Paediatrics</option>
<option value='Radiology'>Radiology</option>
<option value='Obstetrics'>Obstetrics</option>
<option value='Anaesthesia'>Anaesthesia</option>
<option value='Orthopaedics'>Orthopaedics</option>
<option value='ENT'>ENT</option>
<option value='Psychiatry'>Psychiatry</option>
<option value='Public Health'>Public Health</option>
<option value='Dermatology</'>Dermatology</option>
<option value='Microbiology'>Microbiology</option>
<option value='Family'>Family</option>
<option value='Radiotherapy'>Radiotherapy</option>
<option value='Oncology/Radiotherapy'>Oncology/Radiotherapy</option>
<option value='Geriatrics'>Geriatrics</option>
	 </select>
	 </form>
<?php }
?>
<section id="primary" class="span8">
<?php if(isset($_GET['counties'])){?>
<form>
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
	 <?php }
	 else if (isset($_GET['specialities']))
{	 
	  show_specialties();
	 }
	 else if (isset($_GET['diseases']))
{	 
	  show_diseases();
	 }?>
	<?php tha_content_before(); ?>
	<div id="content" role="main">
		<?php tha_content_top();
		
		 ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					if ( is_day() ) :
						printf( __( 'Daily Archives: %s', 'the-bootstrap' ), '<span>' . get_the_date() . '</span>' );
					elseif ( is_month() ) :
						printf( __( 'Monthly Archives: %s', 'the-bootstrap' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );
					elseif ( is_year() ) :
						printf( __( 'Yearly Archives: %s', 'the-bootstrap' ), '<span>' . get_the_date( 'Y' ) . '</span>' );
					
					elseif(isset($_GET['counties'])) :
					$counties=$_GET['counties'];
					if($counties=='All'){} else{
					 _e(ucfirst($_GET['counties']).' County News', 'the-bootstrap');}
					
					elseif(isset($_GET['specialities'])) :
					$sp=$_GET['specialities'];
					if($sp=='All'){} else{
					 _e(ucfirst($_GET['specialities']), 'the-bootstrap');}
					 
					 elseif(isset($_GET['diseases'])) :
					$ds=$_GET['diseases'];
					if($ds=='All'){} else{
					 _e(ucfirst($_GET['diseases']), 'the-bootstrap');}
					
					else :
						_e( 'Blog Archives', 'the-bootstrap' );
					endif; ?>
				</h1>
			</header><!-- .page-header -->

			
	</div><!-- #content -->
	<?php tha_content_after(); ?>
	<?php
function show_posts($offset)
{
	if(isset($_GET['counties'])||isset($_GET['specialities'])||isset($_GET['diseases']))
	{
		if(isset($_GET['counties']))
		{
			$argue=$_GET['counties'];
			$key='counties';
		}
		elseif(isset($_GET['diseases']))
		{
			$argue=$_GET['diseases'];
			$key='diseases';
		}elseif(isset($_GET['specialities']))
		{
			$argue=$_GET['specialities'];
			$key='specialities';
		}
	
		if($argue=='All'){
				$args = array(
					'offset'=>$offset,
					'posts_per_page'=>3
				);
		}
		else
		{
				$args = array(
					'offset'=>$offset,
					$key=>$argue,
					'posts_per_page'=>3
				);
		}
	}
// The Query
query_posts( $args );

// The Loop
while ( have_posts() ) : the_post();
	
	echo '<div class="span4"><h4><a href="?p=';
	the_id();
	
	echo '">';
	the_title();
	echo '</a></h4>';
		
the_excerpt();

	echo '</div>';
endwhile;

// Reset Query
wp_reset_query();

}
?>
<div id="content" role="main">
<?php
if(isset($_GET['counties'])||isset($_GET['specialities'])||isset($_GET['diseases']))
	{
	$offset=0;
		if(isset($_GET['counties']))
		{
			$argue=$_GET['counties'];
			$key='counties';
		}
		elseif(isset($_GET['diseases']))
		{
			$argue=$_GET['diseases'];
			$key='diseases';
		}elseif(isset($_GET['specialities']))
		{
			$argue=$_GET['specialities'];
			$key='specialities';
		}
	
		if($argue=='All'){
				$args = array(
					'offset'=>$offset,
					'posts_per_page'=>3
				);
		}
		else
		{
				$args = array(
					'offset'=>$offset,
					$key=>$argue,
					'posts_per_page'=>3
				);
		}
	}
	else 
	{$args = array(
	
	'post_type'=> $_GET['type'],
	'posts_per_page'=>1
);}

// The Query
query_posts( $args );

// The Loop
if ( have_posts() ) : 
	
	while ( have_posts() ) {
				the_post();
				get_template_part( '/partials/content', get_post_format() );
			}
		
		else :
			get_template_part( '/partials/content', 'not-found' );
		endif;


?>
</div>
<div class='row-fluid'>
<?php
show_posts(1);
?>
</div>
<div style='height:30px;'></div>
<div class='row-fluid'>
<?php
show_posts(4);
?>
</div>
<div style='height:30px;'></div>

</section><!-- #primary -->

<?php
get_sidebar();
get_footer();


/* End of file archive.php */
/* Location: ./wp-content/themes/the-bootstrap/archive.php */