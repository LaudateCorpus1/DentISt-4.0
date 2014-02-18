<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyAddPatientChecklist extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('patient','',TRUE);
   $this->load->model('user','',TRUE);
 }

function index(){
		$session_data = $this->session->userdata('logged_in');
			if($this->session->userdata('logged_in'))
		   	{
				$bool = false;
				$sec = $session_data['section'];
				foreach($sec as $row){
					if($row == "Oral Diagnosis"){
						$bool = true;
						break;
					}
				}
 
			if($bool){
		//This method will have the credentials validation
	   			$this->load->library('form_validation');

			$this->form_validation->set_rules('hbp', 'High blood pressure', 'trim|required|xss_clean');
			$this->form_validation->set_rules('pij', 'Pain in joints', 'trim|required|xss_clean');
			$this->form_validation->set_rules('ha', 'Heart attack', 'trim|required|xss_clean');
			$this->form_validation->set_rules('trem', 'Tremors', 'trim|required|xss_clean');
		   	$this->form_validation->set_rules('apcp', 'Angia Pectoris, chest pain', 'trim|required|xss_clean');
		   	$this->form_validation->set_rules('bt', 'Blood transfusion', 'trim|required|xss_clean');
		   	$this->form_validation->set_rules('sa', 'Swollen ankles', 'trim|required|xss_clean');
		   	$this->form_validation->set_rules('dptgb', 'Denied permission to give blood', 'trim|required|xss_clean');
		   	$this->form_validation->set_rules('fhf', 'Frequent high fever', 'trim|required|xss_clean');
		   	$this->form_validation->set_rules('pal', 'Pallor', 'trim|required|xss_clean');
			$this->form_validation->set_rules('pahv', 'Pacemakers, artificial heart valves', 'trim|required|xss_clean');
			$this->form_validation->set_rules('dia', 'Diabetes', 'trim|required|xss_clean');
			$this->form_validation->set_rules('emp', 'Emphysema', 'trim|required|xss_clean');
			$this->form_validation->set_rules('goi', 'Goiter', 'trim|required|xss_clean');
			$this->form_validation->set_rules('af', 'Afternoon Fever', 'trim|required|xss_clean');
			$this->form_validation->set_rules('bobt', 'Bleeding or bruising tendency', 'trim|required|xss_clean');
			$this->form_validation->set_rules('cc', 'Chronic cough', 'trim|required|xss_clean');
			$this->form_validation->set_rules('swlog', 'Sudden weight loss or gain', 'trim|required|xss_clean');
			$this->form_validation->set_rules('brp', 'Breathing problems', 'trim|required|xss_clean');
			$this->form_validation->set_rules('ft', 'Frequent thirst', 'trim|required|xss_clean');
			$this->form_validation->set_rules('bs', 'Bloody sputum', 'trim|required|xss_clean');
			$this->form_validation->set_rules('fh', 'Frequent hunger', 'trim|required|xss_clean');
			$this->form_validation->set_rules('sin', 'Sinusitis', 'trim|required|xss_clean');
			$this->form_validation->set_rules('fur', 'Frequent urination', 'trim|required|xss_clean');
			$this->form_validation->set_rules('fha', 'Frequent headaches', 'trim|required|xss_clean');
			$this->form_validation->set_rules('che', 'Chemotherapy', 'trim|required|xss_clean');
			$this->form_validation->set_rules('diz', 'Dizziness', 'trim|required|xss_clean');
			$this->form_validation->set_rules('puu', 'Pain upon urination', 'trim|required|xss_clean');
			$this->form_validation->set_rules('fslc', 'Fainting spells or loss of consciousness', 'trim|required|xss_clean');
			$this->form_validation->set_rules('biu', 'Blood/pus in urine', 'trim|required|xss_clean');
			$this->form_validation->set_rules('vi', 'Visual impairment', 'trim|required|xss_clean');
			$this->form_validation->set_rules('hep', 'Hepatitis', 'trim|required|xss_clean');
			$this->form_validation->set_rules('hi', 'Hearing impairment', 'trim|required|xss_clean');
			$this->form_validation->set_rules('hiv', 'HIV positive', 'trim|required|xss_clean');
			$this->form_validation->set_rules('art', 'Arthritis', 'trim|required|xss_clean');
			$this->form_validation->set_rules('pad', 'Pelvic/lower abdominal discomfort', 'trim|required|xss_clean');
			$this->form_validation->set_rules('ner', 'Nervousness', 'trim|required|xss_clean');
			$this->form_validation->set_rules('dep', 'Depression', 'trim|required|xss_clean');
			$this->form_validation->set_rules('anx', 'Anxiety', 'trim|required|xss_clean');
			$this->form_validation->set_rules('oth', 'Patient Checklist Others', 'trim|required|xss_clean');
			$this->form_validation->set_rules('ast', 'Asthma', 'trim|required|xss_clean');
			$this->form_validation->set_rules('cloth', 'Patient Checklist Others Text', 'trim|xss_clean|callback_check_dependency');
			$this->form_validation->set_rules('diaf', 'Family Diabetes', 'trim|required|xss_clean|callback_alpha_dash_space');
			$this->form_validation->set_rules('bdf', 'Bleeding Disorders', 'trim|required|xss_clean|callback_alpha_dash_space');
			$this->form_validation->set_rules('hdf', 'Heart Diseases', 'trim|required|xss_clean|callback_alpha_dash_space');
			$this->form_validation->set_rules('canf', 'Cancer', 'trim|required|xss_clean|callback_alpha_dash_space');
			$this->form_validation->set_rules('famoth', 'Family Others', 'trim|required|xss_clean|callback_alpha_dash_space');
			$this->form_validation->set_rules('famotht', 'Family Others Text', 'trim|xss_clean|callback_check_dependency');
			$this->form_validation->set_rules('druga', 'Drugs', 'trim|required|xss_clean|callback_alpha_dash_space');
			$this->form_validation->set_rules('fooda', 'Food', 'trim|required|xss_clean|callback_alpha_dash_space');
			$this->form_validation->set_rules('ruba', 'Rubber', 'trim|required|xss_clean|callback_alpha_dash_space');
			$this->form_validation->set_rules('aloth', 'Allergy Others', 'trim|required|xss_clean|callback_alpha_dash_space');
			$this->form_validation->set_rules('alotht', 'Allergy Others Text', 'trim|xss_clean|callback_check_dependency');
			$this->form_validation->set_rules('pregfe', 'Pregnant', 'trim|required|xss_clean|callback_alpha_dash_space');
			$this->form_validation->set_rules('bffe', 'Breastfeeding', 'trim|required|xss_clean|callback_alpha_dash_space');
			$this->form_validation->set_rules('hrtfe', 'Hormone replacement therapy', 'trim|required|xss_clean|callback_alpha_dash_space');
			$this->form_validation->set_rules('mensfe', 'Menstruation', 'trim|required|xss_clean|callback_alpha_dash_space');
			$this->form_validation->set_rules('confe', 'Contraceptive', 'trim|required|xss_clean|callback_alpha_dash_space');

			if($this->form_validation->run() == FALSE)
		 	{
		     	//Field validation failed.  User redirected to login page
				if(form_error('hbp')) $message = form_error('hbp');
				elseif(form_error('pij')) $message = form_error('pij');
				elseif(form_error('ha')) $message = form_error('ha');
				elseif(form_error('trem')) $message = form_error('trem');
				elseif(form_error('apcp')) $message = form_error('apcp');
				elseif(form_error('bt')) $message = form_error('bt');
				elseif(form_error('sa')) $message = form_error('sa');	
				elseif(form_error('dptgb')) $message = form_error('dptgb');
				elseif(form_error('fhf')) $message = form_error('fhf');
				elseif(form_error('pal')) $message = form_error('pal');
				elseif(form_error('pahv')) $message = form_error('pahv');
				elseif(form_error('dia')) $message = form_error('dia');
				elseif(form_error('emp')) $message = form_error('emp');
				elseif(form_error('goi')) $message = form_error('goi');
				elseif(form_error('af')) $message = form_error('af');	
				elseif(form_error('bobt')) $message = form_error('bobt');
				elseif(form_error('cc')) $message = form_error('cc');	
				elseif(form_error('swlog')) $message = form_error('swlog');	
				elseif(form_error('brp')) $message = form_error('brp');	
				elseif(form_error('ft')) $message = form_error('ft');	
				elseif(form_error('bs')) $message = form_error('bs');
				elseif(form_error('fh')) $message = form_error('fh');
				elseif(form_error('sin')) $message = form_error('sin');
				elseif(form_error('fur')) $message = form_error('fur');	
				elseif(form_error('fha')) $message = form_error('fha');	
				elseif(form_error('che')) $message = form_error('che');	
				elseif(form_error('diz')) $message = form_error('diz');	
				elseif(form_error('puu')) $message = form_error('puu');
				elseif(form_error('fslc')) $message = form_error('fslc');	
				elseif(form_error('biu')) $message = form_error('biu');	
				elseif(form_error('vi')) $message = form_error('vi');	
				elseif(form_error('hep')) $message = form_error('hep');	
				elseif(form_error('hi')) $message = form_error('hi');	
				elseif(form_error('hiv')) $message = form_error('hiv');
				elseif(form_error('art')) $message = form_error('art');	
				elseif(form_error('pad')) $message = form_error('pad');	
				elseif(form_error('ner')) $message = form_error('ner');	
				elseif(form_error('dep')) $message = form_error('dep');
				elseif(form_error('anx')) $message = form_error('anx');	
				elseif(form_error('ast')) $message = form_error('ast');
				elseif(form_error('oth')) $message = form_error('oth');			
				elseif(form_error('cloth')) $message = form_error('cloth');
				elseif(form_error('diaf')) $message = form_error('diaf');
				elseif(form_error('bdf')) $message = form_error('bdf');
				elseif(form_error('hdf')) $message = form_error('hdf');
				elseif(form_error('canf')) $message = form_error('canf');
				elseif(form_error('famoth')) $message = form_error('famoth');
				elseif(form_error('famotht')) $message = form_error('famotht');	
				elseif(form_error('druga')) $message = form_error('druga');	
				elseif(form_error('fooda')) $message = form_error('fooda');	
				elseif(form_error('ruba')) $message = form_error('ruba');	
				elseif(form_error('aloth')) $message = form_error('aloth');	
				elseif(form_error('alotht')) $message = form_error('alotht');	
				elseif(form_error('pregfe')) $message = form_error('pregfe');	
				elseif(form_error('bffe')) $message = form_error('bffe');	
				elseif(form_error('hrtfe')) $message = form_error('hrtfe');	
				elseif(form_error('mensfe')) $message = form_error('mensfe');	
				elseif(form_error('confe')) $message = form_error('confe');		
					

				$data = array(
					'hbp' => $this->input->post('hbp'),
					'pij' => $this->input->post('pij'),
					'ha' => $this->input->post('ha'),
					'trem' => $this->input->post('trem'),
					'apcp' => $this->input->post('apcp'),
					'bt' => $this->input->post('bt'),
					'sa' => $this->input->post('sa'),
					'dptgb' => $this->input->post('dptgb'),
					'fhf' => $this->input->post('fhf'),
					'pal' => $this->input->post('pal'),
					'pahv' => $this->input->post('pahv'),
					'dia' => $this->input->post('dia'),
					'emp' => $this->input->post('emp'),
					'goi' => $this->input->post('goi'),
					'af' => $this->input->post('af'),
					'bobt' => $this->input->post('bobt'),
					'cc' => $this->input->post('cc'),
					'swlog' => $this->input->post('swlog'),
					'brp' => $this->input->post('brp'),
					'ft' => $this->input->post('ft'),
					'bs' => $this->input->post('bs'),
					'fh' => $this->input->post('fh'),
					'sin' => $this->input->post('sin'),
					'fur' => $this->input->post('fur'),
					'fha' => $this->input->post('fha'),
					'che' => $this->input->post('che'),
					'diz' => $this->input->post('diz'),
					'puu' => $this->input->post('puu'),
					'fslc' => $this->input->post('fslc'),
					'biu' => $this->input->post('biu'),
					'vi' => $this->input->post('vi'),
					'hep' => $this->input->post('hep'),
					'hi' => $this->input->post('hi'),
					'hiv' => $this->input->post('hiv'),
					'art' => $this->input->post('art'),
					'pad' => $this->input->post('pad'),
					'ner' => $this->input->post('ner'),
					'dep' => $this->input->post('dep'),
					'anx' => $this->input->post('anx'),
					'ast' => $this->input->post('ast'),
					'oth' => $this->input->post('oth'),
					'checklist' => $this->input->post('cloth'),
					'diaf' => $this->input->post('diaf'),
					'bdf' => $this->input->post('bdf'),
					'hdf' => $this->input->post('hdf'),
					'canf' => $this->input->post('canf'),
					'famoth' => $this->input->post('famoth'),
					'family' => $this->input->post('famotht'),
					'druga' => $this->input->post('druga'),
					'fooda' => $this->input->post('fooda'),
					'ruba' => $this->input->post('ruba'),
					'aloth' => $this->input->post('aloth'),
					'allergy' => $this->input->post('alotht'),
					'pregfe' => $this->input->post('pregfe'),
					'bffe' => $this->input->post('bffe'),
					'hrtfe' => $this->input->post('hrtfe'),
					'mensfe' => $this->input->post('mensfe'),
					'confe' => $this->input->post('confe'),
					'error' => $message,
					'invalid_input' => true);			

				$session_data = $this->session->userdata('current_patient');
				$id = $session_data['id'];

			       	$this->session->set_userdata('has_error', $data);

		     		redirect('/patientchecklist/patient/'.$id.'/');
		   	}
		   	else
		   	{
		     		//Go to private area
								// TAB2 - Patient Checklist 
				$hbp = $this->input->post('hbp');
				$pij = $this->input->post('pij');
				$ha = $this->input->post('ha');
				$trem = $this->input->post('trem');
				$apcp = $this->input->post('apcp');
				$bt = $this->input->post('bt');
				$sa = $this->input->post('sa');
				$dptgb = $this->input->post('dptgb');
				$fhf = $this->input->post('fhf');
				$pal = $this->input->post('pal');
				$pahv = $this->input->post('pahv');
				$dia = $this->input->post('dia');
				$emp = $this->input->post('emp');
				$goi = $this->input->post('goi');
				$af = $this->input->post('af');
				$bobt = $this->input->post('bobt');
				$cc = $this->input->post('cc');
				$swlog = $this->input->post('swlog');
				$brp = $this->input->post('brp');
				$ft = $this->input->post('ft');
				$bs = $this->input->post('bs');
				$fh = $this->input->post('fh');
				$sin = $this->input->post('sin');
				$fur = $this->input->post('fur');
				$fha = $this->input->post('fha');
				$che = $this->input->post('che');
				$diz = $this->input->post('diz');
				$puu = $this->input->post('puu');
				$fslc = $this->input->post('fslc');
				$biu = $this->input->post('biu');
				$vi = $this->input->post('vi');
				$hep = $this->input->post('hep');
				$hi = $this->input->post('hi');
				$hiv = $this->input->post('hiv');
				$art = $this->input->post('art');
				$pad = $this->input->post('pad');
				$ner = $this->input->post('ner');
				$dep = $this->input->post('dep');
				$anx = $this->input->post('anx');
				$ast = $this->input->post('ast');
				$oth = $this->input->post('oth');
				$checklist = "";
				if($oth == 'Yes'){
					$checklist = $this->input->post('cloth');
				}
				$diaf = $this->input->post('diaf');
				$bdf = $this->input->post('bdf');
				$hdf = $this->input->post('hdf');
				$canf = $this->input->post('canf');
				$famoth = $this->input->post('famoth');
				$family = "";
				if($famoth == 'Yes'){
					$family = $this->input->post('famotht');
				}
				$druga = $this->input->post('druga');
				$fooda = $this->input->post('fooda');
				$ruba = $this->input->post('ruba');
				$aloth = $this->input->post('aloth');
				$allergy = "";
				if($aloth == 'Yes'){
					$allergy = $this->input->post('alotht');
				}
				$pregfe = $this->input->post('pregfe');
				$bffe = $this->input->post('bffe');
				$hrtfe = $this->input->post('hrtfe');
				$mensfe = $this->input->post('mensfe');
				$confe = $this->input->post('confe');

				
				$session_data = $this->session->userdata('current_patient');
				$id = $session_data['id'];

				$this->session->unset_userdata('has_error');
				$this->patient->addPatientInfo_tab2($id, $hbp, $pij, $ha, $trem, $apcp, $bt, $sa, $dptgb, $fhf, $pal, $pahv, $dia, $emp, $goi, $af, $bobt, $cc, $swlog, $brp, $ft, $bs, $fh, $sin, $fur, $fha, $che, $diz, $puu, $fslc, $biu, $vi, $hep, $hi, $hiv, $art, $pad, $ner, $dep, $anx, $ast, $oth, $checklist, $diaf, $bdf, $hdf, $canf, $famoth, $family, $druga, $fooda, $ruba, $aloth, $allergy, $pregfe, $bffe, $hrtfe, $mensfe, $confe);

				$session_data2 = $this->session->userdata('current_patient');
				$session_data3 = $this->session->userdata('logged_in');
				$id = $session_data2['id'];

				$username = $session_data3['username'];
				$info = $this->user->getUserInfo3($username);

				foreach($info as $row2){
					$name = $row2['userFName']." ".substr($row2['userMName'], 0, 1).". ".$row2['userLName']; 
				}
				

				$date = date("Y-m-d");
				$status = "Pending";
				$approver = "Pending";

				//echo "$id, $name, $date, $status, $approver";

				$this->patient->addPatientChecklistVersion($id, $name, $date, $status, $approver);

				redirect('/loaddashboard/patientdb/'.$id.'/');
				
		   	}
		}
		else{
			redirect('home', 'refresh');
		}
	}else{
		//If no session, redirect to login page
     		redirect('login', 'refresh');
		}
	}

	function check_dependency($str){
		$clotht = $this->input->post('cloth');
		$famotht = $this->input->post('famotht');
		$alotht = $this->input->post('alotht');

		if($this->input->post('oth') == 'Yes' && $clotht == ""){
			$this->form_validation->set_message('check_dependency', 'Patient checklist others text is required.');
			return false;
		}
		elseif($this->input->post('famoth') == 'Yes' && $famotht == ""){
			$this->form_validation->set_message('check_dependency', 'Family checklist others text is required.');
			return false;
		}
		elseif($this->input->post('aloth') == 'Yes' && $alotht == ""){
			$this->form_validation->set_message('check_dependency', 'Allergy checklist others text is required.');
			return false;
		}
	}

}
?>
