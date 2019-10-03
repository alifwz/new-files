<?php
include "connection.php";
include "header.php";
?>

<select name="selectcountrys" id="selectcountrys" class="bas ic">			
				<!--<option value="118" selected>Kuwait</option>-->
				<?php
					$country_query = mysql_query("SELECT * FROM freelancer_mmv_countries");
					while($country_res = mysql_fetch_array($country_query)){
				?>
					<option value="<?php echo $country_res[countries_id]; ?>"><?php echo $country_res[countries_name]; ?></option>
				<?php } ?>				
			</select>
			
<script> 
$( "#selectcountrys" ).change(function() {	
	var country = $( "#selectcountrys" ).val();
	$.ajax({
			type:"POST",
			data:"id="+country,
			url:"backend.php",
			success:function(data)
			{
				if(data!="")
				{					
					window.location='shopping-bag.php';
				}
			}
		  });	
});
</script>