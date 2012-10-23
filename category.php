<?php
/** category.php
 *
 * The template for displaying Category Archive pages.
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0.0 - 05.02.2012
 */

get_header(); ?>
<?php
function show_diseases()
{
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

	<?php tha_content_before(); ?>
	<div id="content" role="main">
	<?php
	if($_GET['cat']==82)
	{
	show_specialties();
	}
	if($_GET['cat']==83)
	{
	show_diseases();
	}
	?>
		<?php tha_content_top();

		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php
					printf( __( 'Category Archives: %s', 'the-bootstrap' ), '<span>' . single_cat_title( '', false ) . '</span>' );
				?></h1>
	
				<?php if ( $category_description = category_description() ) {
					echo apply_filters( 'category_archive_meta', '<div class="category-archive-meta">' . $category_description . '</div>' );
				} ?>
			</header><!-- .page-header -->
	
			<?php
			while ( have_posts() ) {
				the_post();
				get_template_part( '/partials/content', get_post_format() );
			}
			the_bootstrap_content_nav();
		else :
			get_template_part( '/partials/content', 'not-found' );
		endif;
		
		tha_content_bottom(); ?>
	</div><!-- #content -->
	<?php tha_content_after(); ?>
</section><!-- #primary -->

<?php
get_sidebar();
get_footer();


/* End of file index.php */
/* Location: ./wp-content/themes/the-bootstrap/category.php */