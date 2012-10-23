<?php
function show_archive(){
function show_posts($offset)
{

		$args = array(

			'offset'=>$offset,
			'post_type'=> $_GET['type'],
			'posts_per_page'=>3

		);
	


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
 <form><select value='cat' style='width:100%' name="URL" onchange="window.location.href= '?type=ps_Specialty&cat='+this.form.URL.options[this.form.URL.selectedIndex].value">
	 <option>Select Specialty</option>
	 <option value='1'>General</option>
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
<?php

$args = array(
	
	'post_type'=> $_GET['type'],
	'posts_per_page'=>1
);


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
<?php
}
?>