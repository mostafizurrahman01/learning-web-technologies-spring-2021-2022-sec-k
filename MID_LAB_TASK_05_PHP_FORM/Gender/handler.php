<?php 
	if(isset($_REQUEST['submit'])){
		if($_REQUEST['gender'] == null){
			echo "Please select a gender";
		}
        else{
			echo "Gender : ".$_REQUEST['gender'];
		}
	}
?>