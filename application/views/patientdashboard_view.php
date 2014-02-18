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
	
	
</script>
 </head>
<?php 
	$session_data = $this->session->userdata('logged_in');
     	$usernamelog = $session_data['username'];

	$session_data2 = $this->session->userdata('has_error');
	$invalid_input = $session_data2['invalid_input'];

/*	if($recordexist){
		foreach($info as $row){
			$civstat = $row['civstat']; 
			$phonenum = $row['phonenum'];
			$edattain = $row['edattain'];
			$occ = $row['occupation'];
			$ptnicoe = $row['persontonotify'];
			$ptnicoenum = $row['persontonotifynum'];
			$histo = $row['histo'];
			$gait = $row['gait'];
			$appear = $row['appear'];
			$dfcts = $row['dfcts'];
			$bp = $row['bp'];
			$pr = $row['pr'];
			$rr = $row['rr'];
			$temp = $row['temp'];
			$wt = $row['weight'];

			$hbp = $row['highbloodpressure'];
			$pij = $row['joint_pain'];
			$ha = $row['heart_attack'];
			$trem = $row['tremors'];
			$apcp = $row['chest_pain'];
			$bt = $row['blood_transfusion'];
			$sa = $row['swollen_ankles'];
			$dptgb = $row['denied_blood'];
			$fhf = $row['high_fever'];
			$pal = $row['pallor'];
			$pahv = $row['pacemaker'];
			$dia = $row['diabetes'];
			$emp = $row['emphysema'];
			$goi = $row['goiter'];
			$af = $row['afternoon_fever'];
			$bobt = $row['bruising_tendency'];
			$cc = $row['chronic_cough'];
			$swlog = $row['weight_change'];
			$brp = $row['breathing_problem'];
			$ft = $row['frequent_thirst'];
			$bs = $row['bloody_sputum'];
			$fh = $row['frequent_hunger'];
			$sin = $row['sinusitis'];
			$fur = $row['frequent_urination'];
			$fha = $row['frequent_headaches'];
			$che = $row['chemotherapy'];
			$diz = $row['dizziness'];
			$puu = $row['pain_urination'];
			$fslc = $row['loss_consciousness'];
			$biu = $row['urine_blood'];
			$vi = $row['visual_impairment'];
			$hep = $row['hepatitis'];
			$hi = $row['hearing_impairment'];
			$hiv = $row['HIV_positive'];
			$art = $row['arthritis'];
			$pad = $row['pelvic_discomfort'];
			$ner = $row['nervousness'];
			$dep = $row['depression'];
			$anx = $row['anxiety'];
			$ast = $row['asthma'];
			$patientoth = $row['patientothers'];
			$patientotht = $row['patientothers_text'];
			$diaf = $row['familydiabetes'];
			$bdf = $row['bleeding_disorder'];
			$hdf = $row['heart_diseases'];
			$canf = $row['cancer'];
			$familyoth = $row['familyothers'];
			$familyotht = $row['familyothers_text'];
			$druga = $row['familydiabetes'];
			$fooda = $row['familydiabetes'];
			$ruba = $row['familydiabetes'];
			$allergyoth = $row['allergyothers'];
			$allergyotht = $row['allergyothers_text'];
			$pregfe = $row['pregnant'];
			$bffe = $row['breastfeeding'];
			$hrtfe = $row['hormonetherapy'];
			$mensfe = $row['menstruation'];
			$confe = $row['contraceptive'];

			$phyname = $row['physician_name'];
			$phynum = $row['physician_phone'];
			$hospdate = $row['dateoflatesthospitalization'];
			$hospreason = $row['hospitalizationreason'];
			$allergies = $row['allergies'];
			$illnesses = $row['illnesses'];
			$med = $row['medications'];
			$ci = $row['childhood_illnesses'];
			$cig = $row['cigarette'];
			$cigkind = $row['cigarette_type'];
			$cigfreq = $row['cigarette_frequency'];
			$cigdur = $row['cigarette_duration'];
			$cigdole = $row['cigarette_dateoflastexposure'];
			$alco = $row['alcohol'];
			$alcokind = $row['alcohol_type'];
			$alcofreq = $row['alcohol_frequency'];
			$alcodur = $row['alcohol_duration'];
			$alcodole = $row['alcohol_dateoflastexposure'];
			$drug = $row['drug'];
			$drugkind = $row['drug_type'];
			$drugfreq = $row['drug_frequency'];
			$drugdur = $row['drug_duration'];
			$drugdole = $row['drug_dateoflastexposure'];

			$dolv = $row['dateoflastvisit'];
			$pdolv = $row['proceduresonlastvisit'];
			$fodv = $row['frequencyofvisit'];
			$eortle = $row['anesthesia_exposure'];
			$cdaoadp = $row['dental_complications'];
			$hnt = $row['headneckTMJ'];
			$lfn = $row['lipsfrenum'];
			$muc = $row['mucosa'];
			$plt = $row['palate'];
			$prx = $row['pharynx'];
			$ftm = $row['floorofthemouth'];
			$tng = $row['tongue'];
			$lym = $row['lymphnodes'];
			$sal = $row['salivarygland'];
			$thy = $row['thyroid'];
			$ggv = $row['gingiva'];

			$chiefcomp = $row['chiefcomplaints'];
			$perio = $row['perio'];
			$rpd = $row['rpd'];
			$resto = $row['resto'];
			$os = $row['os'];
			$fpd = $row['fpd'];
			$pedo = $row['pedo'];
			$endo = $row['endo'];
			$cd = $row['cd'];
			$ortho = $row['ortho'];
			$ptp = $row['proposedtreatment'];
			
		}
	}*/
?>
 <body>
  
<div class="validation" style="display:<?if(validation_errors() == true) echo 'block'; else echo 'none'?>">
   <?php echo validation_errors(); ?>
</div>
<div class="maindiv" style="border:0px;">
	<?php include('patient_header.php'); ?>

	<?php 
		$id = $this->uri->segment(3); 

	?>
	<!--<a href="<?php echo base_url();?>index.php/viewversions"> View Versions </a><br><br>

	<div id="Tabs">
	<ul>
	<li id="li_tab1" onclick="tab('tab1')" class="selected"><a>Patient Information</a></li>
	<li id="li_tab2" onclick="tab('tab2')"><a>Patient Checklist</a></li>
	<li id="li_tab3" onclick="tab('tab3')"><a>Patient History</a></li>
	<li id="li_tab4" onclick="tab('tab4')"><a>Dental Data</a></li>
	<li id="li_tab5" onclick="tab('tab5')"><a>Dental Chart</a></li>
	<li id="li_tab6" onclick="tab('tab6')"><a>Treatment Plan</a></li>
	</ul>
<div id="Content_Area" style="border: solid 1px #7F00FF;">
<div id="tab1">
<form id="ADDPATIENT1" name="ADDPATIENT1" action="<?php echo base_url();?>index.php/verifyaddpatientinfo/tab1" method="post">
	<br>
	<div class="validationexc" style="display: <?php if($this->session->userdata('has_error')) echo 'block'; else 'none' ?>;">
   		<?php $session_data = $this->session->userdata('has_error');
     		echo $session_data['error'];
	?>
</div>
	<table frame="box" class="frame">
	<tr class="header">
		<td colspan=2>Additional Demographics
	</tr>
	<tr>
		<td><label for="civstat">Civil Status: </td>
		<td><select name="civstat" id="civstat">
		<option value="Select one.." selected> Select one.. </option>		
		<option value="Single" <?php if($invalid_input){ 
						if($session_data2['civstat'] == "Single") echo "selected";
					}	
					elseif($recordexist == true && $civstat == 'Single') echo 'selected'; ?>> Single </option>
		<option value="Married" <?php if($invalid_input){ 
						if($session_data2['civstat'] == "Married") echo "selected";
					}	
					elseif($recordexist == true && $civstat == 'Married') echo 'selected'; ?>> Married </option>
		<option value="Separated" <?php if($invalid_input){ 
						if($session_data2['civstat'] == "Separated") echo "selected";
					}	
					elseif($recordexist == true && $civstat == 'Separated') echo 'selected'; ?>> Separated </option>
		<option value="Divorced" <?php if($invalid_input){ 
						if($session_data2['civstat'] == "Divorced") echo "selected";
					}	
					elseif($recordexist == true && $civstat == 'Divorced') echo 'selected'; ?>> Divorced </option>
		<option value="Widowed" <?php if($invalid_input){ 
						if($session_data2['civstat'] == "Widowed") echo "selected";
					}	
					elseif($recordexist == true && $civstat == 'Widowed') echo 'selected'; ?>> Widowed </option>
		</select></td>
	</tr>
	<tr>
		<td><label for="phone">Phone:</td>
		<td><input type="text" name="phone" placeholder="Phone Number" value="<?php if($invalid_input) echo $session_data2['phone']; elseif($recordexist == true) echo $phonenum; ?>"></td>
	</tr>
	<tr>
		<td><label for="edattain">Educational Attainment:
		<td><select name="edattain">
			<option value="Select one..">Select one..</option>
			<option value="Elementary Graduate" <?php if($invalid_input){ 
						if($session_data2['edattain'] == "Elementary Graduate") echo "selected";
						}	
						elseif($recordexist == true && $edattain == 'Elementary Graduate') echo 'selected'; ?>>Elementary Graduate</option>
			<option value="High School Graduate" <?php if($invalid_input){ 
						if($session_data2['edattain'] == "High School Graduate") echo "selected";
					}	
					elseif($recordexist == true && $edattain == 'High School Graduate') echo 'selected'; ?>>High School Graduate</option>
			<option value="College Graduate" <?php if($invalid_input){ 
						if($session_data2['edattain'] == "College Graduate") echo "selected";
					}	
					elseif($recordexist == true && $edattain == 'College Graduate') echo 'selected'; ?>>College Graduate</option>
			<option value="Master's Decree" <?php if($invalid_input){ 
						if($session_data2['edattain'] == "Masters Decree") echo "selected";
					}	
					elseif($recordexist == true && $edattain == 'Masters Decree') echo 'selected'; ?>>Master's Decree</option>
	</tr>
	<tr>
		<td><label for="occupation">Occupation:
		<td><input type="text" name="occupation" value="<?php if($invalid_input) echo $session_data2['occupation']; elseif($recordexist == true) echo $occ; ?>">
	</tr>
	<tr>
		<td><label for="ptnicoe">Person to notify in-case of emergency:</td>
		<td><input type="text" name="ptnicoe" value="<?php if($invalid_input) echo $session_data2['ptnicoe']; elseif($recordexist == true) echo $ptnicoe; ?>">
	</tr>
	<tr>
		<td><label for="ptnicoenum">Phone:
		<td><input type="text" name="ptnicoenum" value="<?php if($invalid_input) echo $session_data2['ptnicoenum']; elseif($recordexist == true) echo $ptnicoenum; ?>">
	</tr>
	<tr>
		<td> History of Present Illness:
		<td><textarea name="hopi" id="hopi" cols=50><?php if($invalid_input) echo $session_data2['hopi']; elseif($recordexist == true) echo $histo; ?></textarea>
	</tr>	
</table><br>


		<table frame="box" class="frame">
			<tr class="header">
				<td colspan=2>Physical Assessment
			</tr>
			<tr>
				<td>Gait:
				<td><input type="text" name="gait" size=12px value="<?php if($invalid_input) echo $session_data2['gait']; elseif($recordexist == true) echo $gait; ?>">
			</tr>
			<tr> 
				<td>Appearance:
				<td><input type="text" name="appear" size=12px value="<?php if($invalid_input) echo $session_data2['appear']; elseif($recordexist == true) echo $appear; ?>">
			</tr>
			<tr>
				<td>Defects:
				<td><input type="text" name="dfcts" size=12px value="<?php if($invalid_input) echo $session_data2['dfcts']; elseif($recordexist == true) echo $dfcts; ?>">
			</tr> 
		</table><br>

	
		<table frame="box" class="frame">
		<tr class="header">
			<td colspan=2>Vital Signs
		<tr>
			<td>Blood Pressure (mmHg):
			<td><input type="text" name="bp" value="<?php if($invalid_input) echo $session_data2['bp']; elseif($recordexist == true) echo $bp; ?>">
		</tr>
		<tr>
			<td>Pulse Rate (bpm):
			<td><input type="text" name="pr" value="<?php if($invalid_input) echo $session_data2['pr']; elseif($recordexist == true) echo $pr; ?>">
		</tr>
		<tr>
			<td>Respiration Rate (RR):
			<td><input type="text" name="rr" value="<?php if($invalid_input) echo $session_data2['rr']; elseif($recordexist == true) echo $rr; ?>">
		</tr>
		<tr>
			<td>Temperature (celsius):
			<td><input type="text" name="temp" value="<?php if($invalid_input) echo $session_data2['temp']; elseif($recordexist == true) echo $temp; ?>">
		</tr>
		<tr>
			<td>Weight (kg):
			<td><input type="text" name="wt" id="wt" value="<?php if($invalid_input) echo $session_data2['wt']; elseif($recordexist == true) echo $wt; ?>">
		</tr>
		</table><br><br>

		<input type="submit" value="Save"/> <input type="reset" value="Clear entries"/><br><br>
	
	
</div>
</form>


<!--                                                ----------TAB 2------------                           -->
<!--<form id="ADDPATIENT2" name="ADDPATIENT2" action="<?php echo base_url();?>index.php/verifyaddpatientinfo/tab2" method="post">
	<div id="tab2" style="display: none;"><br>
		<table frame="box" class="frame">
			<tr class="header">
				<td colspan=6>Patient Checklist
			</tr>
			<tr>
				<td colspan=6>Do you have or have you had any of the following? 
					<input type=button name="first" value="'Yes' all" onClick="checkAll1(true);"><input type=button value="'No' all" onClick="checkAll1(false);">
			</tr>
			<tr>
				<td> YES
				<td> NO
				<td>
				<td> YES
				<td> NO
				<td>
			</tr>
			<tr>
				<td><input type="radio" name="hbp" id="hbpy" value="Yes" <?php if($recordexist == true && $hbp=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="hbp" id="hbpn" value="No" <?php if($recordexist == true && $hbp=='No') echo 'checked'; ?>>
				<td>High blood pressure
				<td><input type="radio" name="pij" id="pijy" value="Yes" <?php if($recordexist == true && $pij=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="pij" id="pijn" value="No" <?php if($recordexist == true && $pij=='No') echo 'checked'; ?>>
				<td>Pain in joints
			</tr>
			<tr>
				<td><input type="radio" name="ha" id="hay" value="Yes" <?php if($recordexist == true && $ha=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="ha" id="han" value="No" <?php if($recordexist == true && $ha=='No') echo 'checked'; ?>>
				<td>Heart attack
				<td><input type="radio" name="trem" id="tremy" value="Yes" <?php if($recordexist == true && $trem=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="trem" id="tremn" value="No" <?php if($recordexist == true && $trem=='No') echo 'checked'; ?>>
				<td>Tremors
			</tr>
			<tr>
				<td><input type="radio" name="apcp" id="apcpy" value="Yes" <?php if($recordexist == true && $apcp=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="apcp" id="apcpn" value="No" <?php if($recordexist == true && $apcp=='No') echo 'checked'; ?>>
				<td>Angia Pectoris, chest pain
				<td><input type="radio" name="bt" id="bty" value="Yes" <?php if($recordexist == true && $bt=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="bt" id="btn" value="No" <?php if($recordexist == true && $bt=='No') echo 'checked'; ?>> 
				<td>Blood transfusion
			</tr>
			<tr>
				<td><input type="radio" name="sa" id="say" value="Yes" <?php if($recordexist == true && $sa=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="sa" id="san" value="No" <?php if($recordexist == true && $sa=='No') echo 'checked'; ?>>
				<td>Swollen ankles
				<td><input type="radio" name="dptgb" id="dptgby" value="Yes" <?php if($recordexist == true && $dptgb=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="dptgb" id="dptgbn" value="No" <?php if($recordexist == true && $dptgb=='No') echo 'checked'; ?>>
				<td>Denied permission to give blood
			</tr>
			<tr>
				<td><input type="radio" name="fhf" id="fhfy" value="Yes" <?php if($recordexist == true && $fhf=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="fhf" id="fhfn" value="No" <?php if($recordexist == true && $fhf=='No') echo 'checked'; ?>>
				<td>Frequent high fever
				<td><input type="radio" name="pal" id="paly" value="Yes" <?php if($recordexist == true && $pal=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="pal" id="paln" value="No" <?php if($recordexist == true && $pal=='No') echo 'checked'; ?>>
				<td>Pallor
			</tr>
			<tr>
				<td><input type="radio" name="pahv" id="pahvy" value="Yes" <?php if($recordexist == true && $pahv=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="pahv" id="pahvn" value="No" <?php if($recordexist == true && $pahv=='No') echo 'checked'; ?>>
				<td>Pacemakers, artificial heart valves
				<td><input type="radio" name="dia" id="diay" value="Yes" <?php if($recordexist == true && $dia=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="dia" id="dian" value="No" <?php if($recordexist == true && $dia=='No') echo 'checked'; ?>>
				<td>Diabetes
			</tr>
			<tr>
				<td><input type="radio" name="emp" id="empy" value="Yes" <?php if($recordexist == true && $emp=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="emp" id="empn" value="No" <?php if($recordexist == true && $emp=='No') echo 'checked'; ?>>
				<td>Emphysema
				<td><input type="radio" name="goi" id="goiy" value="Yes" <?php if($recordexist == true && $goi=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="goi" id="goin" value="No" <?php if($recordexist == true && $goi=='No') echo 'checked'; ?>>
				<td>Goiter
			</tr>
			<tr>
				<td><input type="radio" name="af" id="afy" value="Yes" <?php if($recordexist == true && $af=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="af" id="afn" value="No" <?php if($recordexist == true && $af=='No') echo 'checked'; ?>>
				<td>Afternoon fever
				<td><input type="radio" name="bobt" id="bobty" value="Yes" <?php if($recordexist == true && $bobt=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="bobt" id="bobtn" value="No" <?php if($recordexist == true && $bobt=='No') echo 'checked'; ?>>
				<td>Bleeding or bruising tendency
			</tr>
			<tr>
				<td><input type="radio" name="cc" id="ccy" value="Yes" <?php if($recordexist == true && $cc=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="cc" id="ccn" value="No" <?php if($recordexist == true && $cc=='No') echo 'checked'; ?>>
				<td>Chronic cough
				<td><input type="radio" name="swlog" id="swlogy" value="Yes" <?php if($recordexist == true && $swlog=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="swlog" id="swlogn" value="No" <?php if($recordexist == true && $swlog=='No') echo 'checked'; ?>>
				<td>Sudden weight loss or gain
			</tr>
			<tr>
				<td><input type="radio" name="brp" id="brpy" value="Yes" <?php if($recordexist == true && $brp=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="brp" id="brpn" value="No" <?php if($recordexist == true && $brp=='No') echo 'checked'; ?>>
				<td>Breathing problems
				<td><input type="radio" name="ft" id="fty" value="Yes" <?php if($recordexist == true && $ft=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="ft" id="ftn" value="No" <?php if($recordexist == true && $ft=='No') echo 'checked'; ?>>
				<td>Frequent thirst
			</tr>
			<tr>
				<td><input type="radio" name="bs" id="bsy" value="Yes" <?php if($recordexist == true && $bs=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="bs" id="bsn" value="No" <?php if($recordexist == true && $bs=='No') echo 'checked'; ?>>
				<td>Bloody sputum
				<td><input type="radio" name="fh" id="fhy" value="Yes" <?php if($recordexist == true && $fh=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="fh" id="fhn" value="No" <?php if($recordexist == true && $fh=='No') echo 'checked'; ?>>
				<td>Frequent hunger
			</tr>
			<tr>
				<td><input type="radio" name="sin" id="siny" value="Yes" <?php if($recordexist == true && $sin=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="sin" id="sinn" value="No" <?php if($recordexist == true && $sin=='No') echo 'checked'; ?>>
				<td>Sinusitis
				<td><input type="radio" name="fur" id="fury" value="Yes" <?php if($recordexist == true && $fur=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="fur" id="furn" value="No" <?php if($recordexist == true && $fur=='No') echo 'checked'; ?>>
				<td>Frequent urination
			</tr>
			<tr>
				<td><input type="radio" name="fha" id="fhay" value="Yes" <?php if($recordexist == true && $fha=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="fha" id="fhan" value="No" <?php if($recordexist == true && $fha=='No') echo 'checked'; ?>>
				<td>Frequent headaches
				<td><input type="radio" name="che" id="chey" value="Yes" <?php if($recordexist == true && $che=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="che" id="chen" value="No" <?php if($recordexist == true && $che=='No') echo 'checked'; ?>>
				<td>Chemotherapy
			</tr>
			<tr>
				<td><input type="radio" name="diz" id="dizy" value="Yes" <?php if($recordexist == true && $diz=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="diz" id="dizn" value="No" <?php if($recordexist == true && $diz=='No') echo 'checked'; ?>>
				<td>Dizziness
				<td><input type="radio" name="puu" id="puuy" value="Yes" <?php if($recordexist == true && $puu=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="puu" id="puun"value="No" <?php if($recordexist == true && $puu=='No') echo 'checked'; ?>>
				<td>Pain upon urination
			</tr>
			<tr>
				<td><input type="radio" name="fslc" id="fslcy" value="Yes" <?php if($recordexist == true && $fslc=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="fslc" id="fslcn" value="No" <?php if($recordexist == true && $fslc=='No') echo 'checked'; ?>>
				<td>Fainting spells or loss of conciousness
				<td><input type="radio" name="biu" id="biuy" value="Yes" <?php if($recordexist == true && $biu=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="biu" id="biun" value="No" <?php if($recordexist == true && $biu=='No') echo 'checked'; ?>>
				<td>Blood/pus in urine
			</tr>
			<tr>
				<td><input type="radio" name="vi" id="viy" value="Yes" <?php if($recordexist == true && $vi=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="vi" id="vin" value="No" <?php if($recordexist == true && $vi=='No') echo 'checked'; ?>>
				<td>Visual impairment
				<td><input type="radio" name="hep" id="hepy" value="Yes" <?php if($recordexist == true && $hep=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="hep" id="hepn" value="No" <?php if($recordexist == true && $hep=='No') echo 'checked'; ?>>
				<td>Hepatitis (A, B, C, D)
			</tr>
			<tr>
				<td><input type="radio" name="hi" id="hiy" value="Yes" <?php if($recordexist == true && $hi=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="hi" id="hin" value="No" <?php if($recordexist == true && $hi=='No') echo 'checked'; ?>>
				<td>Hearing impairment
				<td><input type="radio" name="hiv" id="hivy" value="Yes" <?php if($recordexist == true && $hiv=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="hiv" id="hivn" value="No" <?php if($recordexist == true && $hiv=='No') echo 'checked'; ?>>
				<td>HIV positive?
			</tr>
			<tr>
				<td><input type="radio" name="art" id="arty" value="Yes" <?php if($recordexist == true && $art=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="art" id="artn" value="No" <?php if($recordexist == true && $art=='No') echo 'checked'; ?>>
				<td>Arthritis
				<td><input type="radio" name="pad" id="pady" value="Yes" <?php if($recordexist == true && $pad=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="pad" id="padn" value="No" <?php if($recordexist == true && $pad=='No') echo 'checked'; ?>>
				<td>Pelvic/lower abdominal discomfort
			</tr>
			<tr>
				<td><input type="radio" name="ner" id="nery" value="Yes" <?php if($recordexist == true && $ner=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="ner" id="nern" value="No" <?php if($recordexist == true && $ner=='No') echo 'checked'; ?>>
				<td>Nervousness
				<td><input type="radio" name="dep" id="depy" value="Yes" <?php if($recordexist == true && $dep=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="dep" id="depn" value="No" <?php if($recordexist == true && $dep=='No') echo 'checked'; ?>>
				<td>Depression
			</tr>
			<tr>
				<td><input type="radio" name="anx" id="anxy" value="Yes" <?php if($recordexist == true && $anx=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="anx" id="anxn" value="No" <?php if($recordexist == true && $anx=='No') echo 'checked'; ?>>
				<td>Anxiety
				<td><input type="radio" name="oth" id="othy" value="Yes" onChange="showdiv(this.name, this.value);" <?php if($recordexist == true && $patientoth=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="oth" id="othn" value="No" onChange="showdiv(this.name, this.value);" onLoad="showdiv(this.name, this.value);" <?php if($recordexist == true && $patientoth=='No') echo 'checked'; ?>>
				<td>Others
			</tr>
			<tr>
				<td><input type="radio" name="ast" id="asty" value="Yes" <?php if($recordexist == true && $ast=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="ast" id="astn" value="No" <?php if($recordexist == true && $ast=='No') echo 'checked'; ?>>
				<td>Asthma
				<td>
				<td>
				<td><div id="checklist"
					<?php if($recordexist == true && $patientoth=='Yes'){
						echo "style='display:block;'";
						}
					else
						echo "style='display:none;'";	
					?>><input type="text" name="cloth" placeholder="please specify here" value="<?php if($recordexist == true) echo $patientotht; ?>"></div>
			</tr>
			<tr>
				<td colspan=6><br><b>Family History</b> (Grandparents, Parents, Brothers, Sisters, Children)
						<input type=button value="'Yes' all" onClick="checkAll2(true)"><input type=button value="'No' all" onClick="checkAll2(false)">
			</tr>
			<tr>
				<td>YES
				<td>NO
				<td>
				<td>
				<td>
				<td>
			</tr>
			<tr>
				<td><input type="radio" name="diaf" id="diafy" value="Yes" <?php if($recordexist == true && $diaf=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="diaf" id="diafn" value="No" <?php if($recordexist == true && $diaf=='No') echo 'checked'; ?>>
				<td>Diabetes
				<td>
				<td>
				<td>
			</tr>
			<tr>
				<td><input type="radio" name="bdf" id="bdfy" value="Yes" <?php if($recordexist == true && $bdf=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="bdf" id="bdfn" value="No" <?php if($recordexist == true && $bdf=='No') echo 'checked'; ?>>
				<td>Bleeding disorders
				<td>
				<td>
				<td>
			</tr>
			<tr>
				<td><input type="radio" name="hdf" id="hdfy" value="Yes" <?php if($recordexist == true && $hdf=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="hdf" id="hdfn" value="No" <?php if($recordexist == true && $hdf=='No') echo 'checked'; ?>>
				<td>Heart Diseases
				<td>
				<td>
				<td>
			</tr>
			<tr>
				<td><input type="radio" name="canf" id="canfy" value="Yes" <?php if($recordexist == true && $canf=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="canf" id="canfn" value="No" <?php if($recordexist == true && $canf=='No') echo 'checked'; ?>>
				<td>Cancer
				<td>
				<td>
				<td>
			</tr>
			<tr>
				<td><input type="radio" name="famoth" id="famothy" value="Yes" onClick="showdiv(this.name, this.value);" <?php if($recordexist == true && $familyoth=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="famoth" id="famothn" value="No" onClick="showdiv(this.name, this.value);" <?php if($recordexist == true && $familyoth=='No') echo 'checked'; ?>>
				<td>Others
				<td>
				<td>
				<td>
			</tr>
			<tr>
				<td>
				<td>
				<td><div id="family" <?php if($recordexist == true && $familyoth=='Yes'){
						echo "style='display:block;'";
						}
					else
						echo "style='display:none;'";	
					?>><input type="text" name="famotht" placeholder="please specify here" value="<?php if($recordexist == true) echo $familyotht; ?>"></div>
				<td>
				<td>
				<td>
			</tr>
			<tr>
				<td colspan=6><br><b>Allergies</b>
						<input type=button value="'Yes' all" onClick="checkAll3(true)"><input type=button value="'No' all" onClick="checkAll3(false)">
			</tr>
			<tr>
				<td>YES
				<td>NO
				<td>
				<td>
				<td>
				<td>
			</tr>
			<tr>
				<td><input type="radio" name="druga" id="drugay" value="Yes" <?php if($recordexist == true && $druga=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="druga" id="drugan" value="No" <?php if($recordexist == true && $druga=='No') echo 'checked'; ?>>
				<td>Drugs
				<td>
				<td>
				<td>
			</tr>
			<tr>
				<td><input type="radio" name="fooda" id="fooday" value="Yes" <?php if($recordexist == true && $fooda=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="fooda" id="foodan" value="No" <?php if($recordexist == true && $fooda=='No') echo 'checked'; ?>>
				<td>Food
				<td>
				<td>
				<td>
			</tr>
			<tr>
				<td><input type="radio" name="ruba" id="rubay" value="Yes" <?php if($recordexist == true && $ruba=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="ruba" id="ruban" value="No" <?php if($recordexist == true && $ruba=='No') echo 'checked'; ?>>
				<td>Rubber
				<td>
				<td>
				<td>
			</tr>
			<tr>
				<td><input type="radio" name="aloth" id="alothy" value="Yes" onClick="showdiv(this.name, this.value);" <?php if($recordexist == true && $allergyoth=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="aloth" id="alothn" value="No" onClick="showdiv(this.name, this.value);" <?php if($recordexist == true && $allergyoth=='No') echo 'checked'; ?>>
				<td>Others
				<td>
				<td>
				<td>
			</tr>
			<tr>
				<td>
				<td>
				<td><div id="allergy" <?php if($recordexist == true && $allergyoth=='Yes'){
						echo "style='display:block;'";
						}
					else
						echo "style='display:none;'";	
					?>><input type="text" name="alotht" placeholder="please specify here" value="<?php if($recordexist == true) echo $allergyotht; ?>"></div>
				<td>
				<td>
				<td>
			</tr>
			<tr>
				<td colspan=6><br><b>Females</b>
						<input type=button value="'Yes' all" onClick="checkAll4(true)"><input type=button value="'No' all" onClick="checkAll4(false)">
			</tr>
			<tr>
				<td>YES
				<td>NO
				<td>
				<td>
				<td>
				<td>
			</tr>
			<tr>
				<td><input type="radio" name="pregfe" id="pregfey" value="Yes" <?php if($recordexist == true && $pregfe=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="pregfe" id="pregfen" value="No" <?php if($recordexist == true && $pregfe=='No') echo 'checked'; ?>>
				<td>Are you pregnant now?
				<td>
				<td>
				<td>
			</tr>
			<tr>
				<td><input type="radio" name="bffe" id="bffey" value="Yes" <?php if($recordexist == true && $bffe=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="bffe" id="bffen" value="No" <?php if($recordexist == true && $bffe=='No') echo 'checked'; ?>>
				<td>Are you breastfeeding now?
				<td>
				<td>
				<td>
			</tr>
			<tr>
				<td><input type="radio" name="hrtfe" id="hrtfey" value="Yes" <?php if($recordexist == true && $hrtfe=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="hrtfe" id="hrtfen" value="No" <?php if($recordexist == true && $hrtfe=='No') echo 'checked'; ?>>
				<td>Under hormone replacement therapy?
				<td>
				<td>
				<td>
			</tr>
			<tr>
				<td><input type="radio" name="mensfe" id="mensfey" value="Yes" <?php if($recordexist == true && $mensfe=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="mensfe" id="mensfen" value="No" <?php if($recordexist == true && $mensfe=='No') echo 'checked'; ?>>
				<td>Menstruation?
				<td>
				<td>
				<td>
			</tr>
			<tr>
				<td><input type="radio" name="confe" id="confey" value="Yes" <?php if($recordexist == true && $confe=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="confe" id="confen" value="No" <?php if($recordexist == true && $confe=='No') echo 'checked'; ?>>
				<td>Taking any form of contraceptive?
				<td>
				<td>
				<td>
			</tr>
		</table>
		
		<br><br>

		<input type="submit" value="Save"/> <input type="reset" value="Clear entries"/><br><br>
		

	</div>
</form>
<!--                                                ----------TAB 3------------                           -->
<!--<form id="ADDPATIENT3" name="ADDPATIENT3" action="<?php echo base_url();?>index.php/verifyaddpatientinfo" method="post">
	<div id="tab3" style="display: none;"><br>

		<table frame="box" class="frame">
		<tr class="header">
			<td colspan=2>Medical History
		</tr>
		<tr>
			<td>Physician Name: 
			<td><input type="text" name="physicianname" value="<?php if($recordexist == true) echo $phyname; ?>">
		</tr>
		<tr>
			<td>Phone number: 
			<td><input type="text" name="physicianphone" value="<?php if($recordexist == true) echo $phynum; ?>">
		</tr>
		<tr>
			<td>Date of latest hospitalization: 
			<td><input type="text" name="hospdate" id="hospdate" class="datepicker" value="<?php if($recordexist == true) echo $hospdate; ?>">
		</tr>
		<tr>
			<td>Reason: 
			<td><input type="text" name="hospreason" value="<?php if($recordexist == true) echo $hospreason; ?>">
		</tr>
		<tr>
			<td>Allergies: 
			<td><input type="text" name="allergies" value="<?php if($recordexist == true) echo $allergies; ?>">
		</tr>
		<tr>
			<td>Illnesses
			<td><input type="text" name="illnesses" value="<?php if($recordexist == true) echo $illnesses; ?>">
		</tr>
		<tr>
			<td>Medications
			<td><input type="text" name="medications" value="<?php if($recordexist == true) echo $med; ?>">
		</tr>
		<tr>
			<td>Childhood illnesses (below 18 y.o.)
			<td><input type="text" name="ci" value="<?php if($recordexist == true) echo $ci; ?>">
		</tr>
		</table><br>
		
		<table frame="box" class="frame">
		<tr class="header">
			<td colspan=2>Social History
		</tr>
		<tr>
			<td width=75%>Are you using or have you used tobacco/cigarettes?
			<td><input type="radio" name="cig" value="Yes" onClick="showHosp(this.name, this.value)" <?php if($recordexist == true && $cig=='Yes') echo 'checked'; ?>> Yes <input type="radio" name="cig" value="No" onClick="showHosp(this.name, this.value)" <?php if($recordexist == true && $cig=='No') echo 'checked'; ?>> No 
		</tr>
		<tr>
			<td colspan=2><div id="cigtb"  
					<?php if($recordexist == true && $cig=='Yes'){
						echo "style='display:block; left:15%; position: relative;'";
						}
					else
						echo "style='display:none; left:15%; position: relative;'";	
					?>>
				<table>
				<tr>
					<td>Type: 
					<td><input type="text" name="cigkind" value="<?php if($recordexist == true && $cig=='Yes') echo $cigkind; ?>">
				</tr>
				<tr>
					<td>Frequency: 
					<td><input type="text" name="cigfreq" value="<?php if($recordexist == true && $cig=='Yes') echo $cigfreq; ?>">
				</tr>
				<tr>
					<td>Duration: 
					<td><input type="text" name="cigdur" value="<?php if($recordexist == true && $cig=='Yes') echo $cigdur; ?>">
				</tr>
				<tr>
					<td>Date of last exposure: 
					<td><input type="text" name="cigdole" id="cigdole" class=datepicker value="<?php if($recordexist == true && $cig=='Yes') echo $cigdole; ?>">
				</tr>
				</table>
			</div></td>
		</tr>
		<tr>
			<td width=75%>Do you drink alcoholic beverages? 
			<td><input type="radio" name="alco" value="Yes" onClick="showHosp(this.name, this.value)" <?php if($recordexist == true && $alco=='Yes') echo 'checked'; ?>> Yes <input type="radio" name="alco" value="No" onClick="showHosp(this.name, this.value)" <?php if($recordexist == true && $alco=='No') echo 'checked'; ?>> No 
		</tr>
		<tr>
			<td colspan=2><div id="alcotb" 
					<?php if($recordexist == true && $alco=='Yes'){
						echo "style='display:block; left:15%; position: relative;'";
						}
					else
						echo "style='display:none; left:15%; position: relative;'";	
					?>>
				<table>
				<tr>
					<td>Type: 
					<td><input type="text" name="alcokind" value="<?php if($recordexist == true && $alco=='Yes') echo $alcokind; ?>">
				</tr>
				<tr>
					<td>Frequency: 
					<td><input type="text" name="alcofreq" value="<?php if($recordexist == true && $alco=='Yes') echo $alcofreq; ?>">
				</tr>
				<tr>
					<td>Duration: 
					<td><input type="text" name="alcodur" value="<?php if($recordexist == true && $alco=='Yes') echo $alcodur; ?>">
				</tr>
				<tr>
					<td>Date of last exposure: 
					<td><input type="text" name="alcodole" id="alcodole" class="datepicker" value="<?php if($recordexist == true && $cig=='Yes') echo $alcodole; ?>">
				</tr>
				</table>
			</div></td>
		</tr>
		<tr>
			<td width="75%">Have you ever used drugs for recreation or non-therapeutic purposes? 
			<td><input type="radio" name="drug" value="Yes" onClick="showHosp(this.name, this.value)" <?php if($recordexist == true && $drug=='Yes') echo 'checked'; ?>> Yes <input type="radio" name="drug" value="No" onClick="showHosp(this.name, this.value)" <?php if($recordexist == true && $drug=='No') echo 'checked'; ?>> No 
		</tr>
		<tr>
			<td colspan=2><div id="drugtb" <?php if($recordexist == true && $drug=='Yes'){
						echo "style='display:block; left:15%; position: relative;'";
						}
					else
						echo "style='display:none; left:15%; position: relative;'";	
					?>>
				<table>
				<tr>
					<td>Type: 
					<td><input type="text" name="drugkind" value="<?php if($recordexist == true && $drug=='Yes') echo $drugkind; ?>">
				</tr>
				<tr>
					<td>Frequency: 
					<td><input type="text" name="drugfreq" value="<?php if($recordexist == true && $drug=='Yes') echo $drugfreq; ?>">
				</tr>
				<tr>
					<td>Duration: 
					<td><input type="text" name="drugdur" value="<?php if($recordexist == true && $drug=='Yes') echo $drugdur; ?>">
				</tr>
				<tr>
					<td>Date of last exposure: 
					<td><input type="text" name="drugdole" class="datepicker" id="drugdole" value="<?php if($recordexist == true && $drug=='Yes') echo $drugdole; ?>">
				</tr>
				</table>
			</div></td>
		</tr>
	</table>

		<!--
		<h3 align="center">Radiographic Examination</h3>
		<table id="radio" align="center" style="text-align:center;">
			<tr>
				<td>
				<td>Date
				<td>Tooth No.
				<td>Findings
				<td>Clinician Name
			</tr>
			<tr>
				<td><input type="checkbox" name=0 id="ck0" /></td>
				<td><input type="text" name="date[]" class="datepicker" id="date0" /></td>
				<td><input type="text" name="tooth[]" id="toothnum_0" size=1px /></td>
				<td><textarea name="findings[]" id="findings_0"></textarea></td>
				<td><input type="text" name="clinician[]" id="clinician_0" /></td>
			</tr>
		</table>
		<input type="button" onClick="addRadio('radio')" value="Add Row">
		<input type="button" onClick="deleteRadio('radio')" value="Delete Row/s"><br><br>
		-->
	<!--<br><br>

		<input type="submit" value="Save"/> <input type="reset" value="Clear entries"/><br><br>
</div>
</form>

<!--                                                ----------TAB 4------------                           -->
<!--<form id="ADDPATIENT4" name="ADDPATIENT4" action="<?php echo base_url();?>index.php/verifyaddpatientinfo" method="post">
	<div id="tab4" style="display: none;"><br>

		<table frame="box" class="frame">
		<tr class=header>
			<td colspan=2>Dental History
		</tr>
		<tr>
			<td>Date of last visit:
			<td><input type="text" class="datepicker" name="dolv" id="dolv" value="<?php if($recordexist == true) echo $dolv; ?>">
		</tr>
		<tr>
			<td>Procedures done on last visit:
			<td><input type="text" name="pdolv" id="pdolv" value="<?php if($recordexist == true) echo $pdolv; ?>">
		</tr>
		<tr>
			<td>Frequency of dental visit:
			<td><input type="text" name="fodv" value="<?php if($recordexist == true) echo $fodv; ?>">
		</tr>
		<tr>
			<td>Exposure or response to local anesthesia</td>
			<td><input type="text" name="eortle" value="<?php if($recordexist == true) echo $eortle; ?>">
		</tr>
		<tr>
			<td>Complications during and or after dental procedure</td>
			<td><input type="text" name="cdaoadp" value="<?php if($recordexist == true) echo $cdaoadp; ?>">
		</tr>
		</table><br>

		<table frame="box" class="frame">
			<tr class="header">
				<td colspan=4>Soft Tissue Examination
			</tr>
			<tr>
				<td>Head, neck and TMJ
				<td><textarea id="hntd" name="hntd" cols=30><?php if($recordexist == true) echo $hnt; ?></textarea>
				<td>Lips/Frenum
				<td><textarea id="lfnd" name="lfnd" cols=30><?php if($recordexist == true) echo $lfn; ?></textarea>
			</tr>
			<tr>
				<td>Mucosa
				<td><textarea id="mucd" name="mucd" cols=30><?php if($recordexist == true) echo $muc; ?></textarea>
				<td>Palate
				<td><textarea id="pltd" name="pltd" cols=30><?php if($recordexist == true) echo $plt; ?></textarea>
			</tr>
			<tr>
				<td>Pharynx
				<td><textarea id="prxd" name="prxd" cols=30><?php if($recordexist == true) echo $prx; ?></textarea>
				<td>Floor of the mouth
				<td><textarea id="ftmd" name="ftmd" cols=30><?php if($recordexist == true) echo $ftm; ?></textarea>
			</tr>
			<tr>
				<td>Tongue
				<td><textarea id="tngd" name="tngd" cols=30><?php if($recordexist == true) echo $tng; ?></textarea>
				<td>Lymph nodes
				<td><textarea id="lymd" name="lymd" cols=30><?php if($recordexist == true) echo $lym; ?></textarea>
			</tr>
			<tr>
				<td>Salivary Gland
				<td><textarea id="sald" name="sald" cols=30><?php if($recordexist == true) echo $sal; ?></textarea>
				<td>Thyroid
				<td><textarea id="thyd" name="thyd" cols=30><?php if($recordexist == true) echo $thy; ?></textarea>
			</tr>
			<tr>
				<td>Gingiva
				<td><textarea id="ggvd" name="ggvd" cols=30><?php if($recordexist == true) echo $ggv; ?></textarea>
			</tr>
		</table><br><br>

		<input type="submit" value="Save"/> <input type="reset" value="Clear entries"/><br><br>
		
	</div>
</form>

<!--                                                ----------TAB 5------------                           -->
<!--<form id="ADDPATIENT5" name="ADDPATIENT5" action="<?php echo base_url();?>index.php/verifyaddpatientinfo" method="post">
	<div id="tab5" style="display: none;">
		<h3 align="center">Dental Status Chart</h3>
		<!--<h3 align="center">Consultation or Referral</h3><br>
		<table id="consult" align="center" style="text-align:center;">
			<tr>
				<td>
				<td>Date
				<td>Reason for<br>Consult
				<td>From
				<td>To
				<td>Findings or<br>Recommendation
				<td>Clinician Name
				<td>Clinician Nature
				<td>Faculty
			</tr>
			<tr>
				<td><input type='checkbox' name='0' id='ck0'>
				<td><input type='text' name='date[]' class='datepicker' id='date_0' size=2px>
				<td><input type='text' name='reason[]' id='reason_0' size=7px>
				<td><input type='text' name='startdate[]' class='datepicker' id='startdate_0' size=2px>
				<td><input type='text' name='enddate[]' class='datepicker' id='enddate_0' size=2px>
				<td><textarea name='findings2[]' id='findings2_0'></textarea>
				<td><input type='text' name='clinician2[]' id='clinician2_0' size=7px>
				<td><input type='text' name='clinician2_nat[]' id='clinician2nat_0' size=7px>
				<td><input type='text' name='fac[]' id='fac_0' size=7px>
			</tr>
		</table>
		<input type="button" onClick="addConsult('consult')" value="Add Row">
		<input type="button" onClick="deleteConsult('consult')" value="Delete Row/s"><br><br><br>
		-->
<!--	<br><br>

	<input type="submit" value="Save"/> <input type="reset" value="Clear entries"/><br><br>
	</div>
</form>

<!--                                                ----------TAB 6------------                           -->
<!--<form id="ADDPATIENT6" name="ADDPATIENT6" action="<?php echo base_url();?>index.php/verifyaddpatientinfo" method="post">
	<div id="tab6" style="display: none;"><br>
		<table frame="box" class="frame">
			<tr class="header">
				<td colspan=2>Treatment Plan
			</tr>
			<tr>
				<td> Chief Complaints:
				<td><input type="text" name="chiefcomp" id="chiefcomp" value="<?php if($recordexist == true) echo $chiefcomp; ?>">
			</tr>
			<tr>
				<td><label for="servcode">Service Code: 
				<td>
				<table>
				<tr>
					<td><input type="checkbox" name="servcode[]" value="PERIO" <?php if($recordexist == true && $perio=="Yes") echo 'checked'; ?>> PERIO	
					<td><input type="checkbox" name="servcode[]" value="RPD" <?php if($recordexist == true && $rpd=="Yes") echo 'checked'; ?>> RPD
					<td><input type="checkbox" name="servcode[]" value="Resto" <?php if($recordexist == true && $resto=="Yes") echo 'checked'; ?>> Resto 
				</tr>
				<tr>
					<td><input type="checkbox" name="servcode[]" value="OS" <?php if($recordexist == true && $os=="Yes") echo 'checked'; ?>> OS 
					<td><input type="checkbox" name="servcode[]" value="FPD" <?php if($recordexist == true && $fpd=="Yes") echo 'checked'; ?>> FPD 
					<td><input type="checkbox" name="servcode[]" value="PEDO" <?php if($recordexist == true && $pedo=="Yes") echo 'checked'; ?>> PEDO 
				</tr>
					<td><input type="checkbox" name="servcode[]" value="ENDO" <?php if($recordexist == true && $endo=="Yes") echo 'checked'; ?>> ENDO 
					<td><input type="checkbox" name="servcode[]" value="CD" <?php if($recordexist == true && $cd=="Yes") echo 'checked'; ?>> CD
					<td><input type="checkbox" name="servcode[]" value="Ortho" <?php if($recordexist == true && $ortho=="Yes") echo 'checked'; ?>> Ortho
				</tr>
				</table>
			</tr>
			<tr>
				<td>Proposed Treatment Plan
				<td><textarea id="ptp" name="ptp" cols=30><?php if($recordexist == true) echo $ptp; ?></textarea>
			<tr>
			
		</table><br><br>

		<input type="submit" value="Save"/> <input type="reset" value="Clear entries"/><br><br>
	</div>
   </form>

	

</div>
</div>-->
	<center>

		<?php 	$OM = false;
			$session_data = $this->session->userdata('logged_in');
     			$section = $session_data['section'];
			if(in_array("Oral Medicine", $section)) $OM = true;
		?>
		<h3><a href="<?php echo base_url(); ?>index.php/patientinformation/patient/<?php echo $id; ?>"> Patient Information </a></h3>
		<h3><a href="<?php echo base_url(); ?>index.php/patientchecklist/patient/<?php echo $id; ?>"> Patient Checklist </a></h3>
		<h3><a href="<?php echo base_url(); ?>index.php/medandsochistory/patient/<?php echo $id; ?>"> Medical and Social History </a></h3>
		<h3><a href="<?php echo base_url(); ?>index.php/dentaldata/patient/<?php echo $id; ?>"> Dental Data </a></h3>
		<h3><a href="<?php echo base_url(); ?>index.php/dentalchart/patient/<?php echo $id; ?>"> Dental Status Chart </a></h3>
		<h3><a href="<?php echo base_url(); ?>index.php/treatmentplan/patient/<?php echo $id; ?>"> Treatment Plan </a></h3>
		<?if($OM){
			echo "<h3><a href='".base_url()."index.php/servicesrendered/patient/$id'> Services Rendered </a></h3>";
			echo "<h3><a href='".base_url()."index.php/conandfind/patient/$id'> Consultation and Findings </a></h3>";
		
		} ?>
		<br>

		<form name="PATIENTDB" method="post" action="<?php echo base_url().'index.php/verifyreferpatient';?>">
			<input type="hidden" name="id" value="<?php echo $id;?>">
			Refer to: <select name="refertosection">
				
				<?php if($servicetrue){
					foreach($services as $row){
						if($row['perio'] == "Yes" || $row['os'] == "Yes" || $row['endo'] == "Yes"){
							echo "<option value='Oral Medicine'> Oral Medicine </option>";
						}
						if($row['resto'] == "Yes" || $row['fpd'] == "Yes" || $row['pedo'] == "Yes"){
							echo "<option value='Operative Dentistry'> Operative Dentistry </option>";
						}
						if($row['rpd'] == "Yes" || $row['cd'] == "Yes"){
							echo "<option value='Prosthodontics'> Prosthodontics </option>";
						}
					}
				}
				else echo "<option value='Select services needed first'> Select services needed first </option>";
				?>				
			</select><br><br><br><br>

			<input type="submit" value="Submit">
		</form>
	</center>


</div>
<?php //include('footer.php') ?>
 </body>

</html>


