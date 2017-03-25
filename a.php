
<?php
		$result = mysql_query("SELECT * FROM object");
	    while($row = mysql_fetch_row($result)){
		?>
			('<?php echo $row['mac']?>')
		<?php }?>
