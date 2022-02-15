<?php 
	if(isset($_REQUEST['submit'])){
		if($_REQUEST['bloodG'] == null){
			echo "Select a blood";
		}else{
			echo "Blood Group : ".$_REQUEST['bloodG'];;
		}
	}
?>