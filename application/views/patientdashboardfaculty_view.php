<?php 
	include('header.php'); 
	include('navigation.php');
	
	echo "<link rel=\"stylesheet\" type=\"text/css\" href='".base_url()."css/style.css'>";
	echo "<script type\"text/javascript\" src=\"".base_url()."js/dynamic.js\"></script>";
	echo "<script type\"text/javascript\" src=\"".base_url()."js/patientdb.js\"></script>"
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
<link href="<?php echo base_url(); ?>css/ui-lightness/jquery-ui-1.10.3.custom.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>js/jquery-1.9.1.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery-ui-1.10.3.custom.js"></script>

   <title>Patient Dashboard - Oral Diagnosis</title>
	
<script type="text/javascript">
	function visibility(element){
		if(element == "patientinfocb"){
			if(document.getElementById(element).checked){
				document.getElementById('patientinfodiv').style.display = "block";
			} 
			else
				document.getElementById('patientinfodiv').style.display = "none";
		}
		else if(element == "patientchecklistcb"){
			if(document.getElementById(element).checked){
				document.getElementById('patientchecklistdiv').style.display = "block";
			} 
			else
				document.getElementById('patientchecklistdiv').style.display = "none";
		}
		else if(element == "medandsochistocb"){
			if(document.getElementById(element).checked){
				document.getElementById('medandsochistodiv').style.display = "block";
			} 
			else
				document.getElementById('medandsochistodiv').style.display = "none";
		}
		else if(element == "dentaldatacb"){
			if(document.getElementById(element).checked){
				document.getElementById('dentaldatadiv').style.display = "block";
			} 
			else
				document.getElementById('dentaldatadiv').style.display = "none";
		}
		else if(element == "dentalchartcb"){
			if(document.getElementById(element).checked){
				document.getElementById('dentalchartdiv').style.display = "block";
			} 
			else
				document.getElementById('dentalchartdiv').style.display = "none";
		}
		else if(element == "treatmentplancb"){
			if(document.getElementById(element).checked){
				document.getElementById('treatmentplandiv').style.display = "block";
			} 
			else
				document.getElementById('treatmentplandiv').style.display = "none";
		}
		

	}

	function decide(txt){
		document.getElementById('decision').value = txt;
		document.getElementById('CONFIRMPATIENTDB').submit();
	}

	/*document.getElementById('accept-button').addEventListener("click", function () {
    	var hiddenid = document.getElementById('decision');
    	var formid = document.getElementById('CONFIRMPATIENTDB');
    	hiddenid.value = 'Accepted';
    	formid.submit();
});*/
	
</script>
 </head>
<?php 
	$session_data = $this->session->userdata('logged_in');
     	$usernamelog = $session_data['username'];

	$session_data2 = $this->session->userdata('has_error');
	$invalid_input = $session_data2['invalid_input'];
?>
 <body>
  
<div class="validation" style="display:<?if(validation_errors() == true) echo 'block'; else echo 'none'?>">
   <?php echo validation_errors(); ?>
</div>
<div class="maindiv" style="border:0px;">
	<?php include('patient_header.php'); ?>

	<?php 
		$id = $this->uri->segment(3); 

		if($remarkVisible){
			foreach($remarks as $row){
				$patientinfo = $row['patientinfo'];
				$patientchecklist = $row['patientchecklist'];
				$medandsochisto = $row['medandsochisto'];
				$dentaldata = $row['dentaldata'];
				$dentalchart = $row['dentalchart'];
				$treatmentplan = $row['treatmentplan'];
			}
		}

	?>
	<center>
		<?php 	
			$session_data = $this->session->userdata('logged_in');
			$sec = $session_data['section'];
			$sect = "";
			foreach($sec as $row){
			if($row != "System Maintenance"){
			$sect = $row;
			}
		} ?>

		<?php if($remarkVisible){
			echo "<h4><font color='red'> This revision has been marked '$status'. </font></h4>";
		}else
			echo "<h2> $sect Faculty Approval </h2>";
?>
		<h3><a href="<?php echo base_url(); ?>index.php/patientinformation/view/<?php echo $id; ?>"> Patient Information </a></h3>
		<h3><a href="<?php echo base_url(); ?>index.php/patientchecklist/view/<?php echo $id; ?>"> Patient Checklist </a></h3>
		<h3><a href="<?php echo base_url(); ?>index.php/medandsochistory/view/<?php echo $id; ?>"> Medical and Social History </a></h3>
		<h3><a href="<?php echo base_url(); ?>index.php/dentaldata/view/<?php echo $id; ?>"> Dental Data </a></h3>
		<h3><a href="<?php echo base_url(); ?>index.php/dentalchart/view/<?php echo $id; ?>"> Dental Status Chart </a></h3>
		<h3><a href="<?php echo base_url(); ?>index.php/treatmentplan/view/<?php echo $id; ?>"> Treatment Plan </a></h3><br>

		<!-- action="<?php //echo base_url().'index.php/verifypatientrecord';?>" -->

		<form id="CONFIRMPATIENTDB" method="post" onSubmit="<?php echo base_url().'index.php/verifypatientrecord';?>" action="<?php echo base_url().'index.php/verifypatientrecord';?>">
		<input type="hidden" name="id" name="id" value="<?php echo $id;?>">
		<input type="hidden" name="decision" id="decision">
		<?php 
			$section = "";
			$ptnt = $this->patient->getSection($id, $sect);
			foreach($ptnt as $row){
				$section = $row['section7'];
			}
 		?>
			<b>Refer to section: <?php echo $section; ?> </b><br><br>
				
				Remarks:<br>
			<table>
				<tr>
					<td><input type="checkbox" name="sctn[]" id="patientinfocb" value="Patient Information" onClick="visibility(this.id)" <?php if($remarkVisible && $patientinfo != "") echo " checked"; if($status == 'Approved' || $status == 'Rejected') echo " readonly";
?> > Patient Information 
					<td><div id="patientinfodiv" style="display:<?php if($remarkVisible && $patientinfo != '') echo 'block'; else echo 'none'; ?>;"><textarea name="patientinfotxt" cols="30" <?php if($status == 'Approved' || $status == 'Rejected') echo "readonly";?>><?php if($remarkVisible) echo $patientinfo; ?></textarea></div>
				</tr>
				<tr>
					<td><input type="checkbox" name="sctn[]" id="patientchecklistcb" value="Patient Checklist" onClick="visibility(this.id)" <?php if($remarkVisible && $patientchecklist != "") echo " checked"; if($status == 'Approved' || $status == 'Rejected') echo " readonly";?>> Patient Checklist 
					<td><div id="patientchecklistdiv" style="display:<?if($remarkVisible && $patientchecklist != '') echo 'block'; else echo 'none'; ?>;"><textarea name="patientchecklisttxt" cols="30" <?php if($status == 'Approved' || $status == 'Rejected') echo "readonly";?>><?php if($remarkVisible) echo $patientchecklist; ?></textarea></div>
				</tr>
				<tr>
					<td><input type="checkbox" name="sctn[]" id="medandsochistocb" value="Medical & Social History" onClick="visibility(this.id)" <?php if($remarkVisible && $medandsochisto != "" ) echo " checked"; if($status == 'Approved' || $status == 'Rejected') echo "  readonly"; ?>> Medical & Social History 
					<td><div id="medandsochistodiv" style="display:<?if($remarkVisible && $medandsochisto != '') echo 'block'; else echo 'none'; ?>;"><textarea name="medandsochistotxt" cols="30" <?php if($status == 'Approved' || $status == 'Rejected') echo "readonly"; ?>><?php if($remarkVisible) echo $medandsochisto; ?></textarea></div>
				</tr>
				<tr>
					<td><input type="checkbox" name="sctn[]" id="dentaldatacb" value="Dental Data" onClick="visibility(this.id)" <?php if($remarkVisible && $dentaldata != "") echo " checked"; if($status == 'Approved' || $status == 'Rejected') echo " readonly"; ?>> Dental Data 
					<td><div id="dentaldatadiv" style="display:<?php if($remarkVisible && $dentaldata != '') echo 'block'; else echo 'none'; ?>;"><textarea name="dentaldatatxt" cols="30" <?php if($status == 'Approved' || $status == 'Rejected') echo "readonly"; ?>><?php if($remarkVisible) echo $dentaldata; ?></textarea></div>
				</tr>
				<tr>
					<td><input type="checkbox" name="sctn[]" id="dentalchartcb" value="Dental Status Chart" onClick="visibility(this.id)" <?php if($remarkVisible && $dentalchart != "") echo " checked"; if($status == 'Approved' || $status == 'Rejected') echo " readonly"; ?>> Dental Status Chart
					<td><div id="dentalchartdiv" style="display:<?php if($remarkVisible && $dentalchart != '') echo 'block'; else echo 'none'; ?>;"><textarea name="dentalcharttxt" cols="30" <?php if($status == 'Approved' || $status == 'Rejected') echo "readonly"; ?>><?php if($remarkVisible) echo $dentalchart; ?></textarea></div> 
				</tr>
				<tr>
					<td><input type="checkbox" name="sctn[]" id="treatmentplancb" value="Treatment Plan" onClick="visibility(this.id)" <?php if($remarkVisible && $treatmentplan != "") echo " checked"; if($status == 'Approved' || $status == 'Rejected') echo " readonly"; ?>> Treatment Plan
					<td><div id="treatmentplandiv" style="display:<?php if($remarkVisible && $treatmentplan != '') echo 'block'; else echo 'none'; ?>;"><textarea name="treatmentplantxt" cols="30" <?php if($status == 'Approved' || $status == 'Rejected') echo "readonly"; ?>><?php if($remarkVisible) echo $treatmentplan; ?></textarea></div>
				</tr>
			</table><br>

			<?php if($status == 'Temporary' || $status == ''){
				echo "<input type='button' name='Save' value='Save Remarks' onClick='decide(\"Temporary\")'>&nbsp;<input type='button' name='Approve' value='Approve' onClick='decide(\"Approved\")'>&nbsp;<input type='button' name='Reject' value='Reject' onClick='decide(\"Rejected\")'>";
			}

			?>
		</form>
	</center>


</div>
<?php //include('footer.php') ?>
 </body>

</html>


