<?php


include "connection.php";
include "header.php";

$page_title = 'Best freelance platform | Meetfreelancers 

';
$seo_title = 'Best freelance platform | Meetfreelancers 

';
$seo_description = "Meetfreelancers.com is the world's best freelancing and marketplace to meet and invite freelancers in your area and around the world.";
$seo_keywords = 'meetfreelancers,jobs,meet,hire,work,employee,Design,freelancers,money,web development';

$about_query = mysql_query("SELECT * FROM freelancer_mmv_aboutus WHERE id='1'");
$about_res = mysql_fetch_array($about_query);
?>
<!--start main-->
<div class="main">	
	<div class="about-main">
		<h2>About US</h2>
		<?php echo $about_res[content]; ?>
	</div>	
</div>
<!--end main-->
<?php include "footer.php"; ?>