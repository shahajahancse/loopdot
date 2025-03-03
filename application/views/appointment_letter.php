<!DOCTYPE html>
<html>
<head>
	<title>Appointment Letter</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<style>
	#wrapper{
          margin:0 auto;		  
		  width:700px;
		  overflow:hidden;
  		  margin-bottom:225px;
		 }
#header{
          width:700px;
		  height:42px;
		  /*background-color: #CCCCCC;*/
        } 
#h_left {
         width:500px;
		 height:auto;
		 float:left;
		 }
#h_right {
         width:200px;
		 height:auto;
		 float:right;
		 }
#nav {
         float:left;
		 width:700px;
		 height:auto;
		 padding:10px;
     }
#nav_inner {
         width:190px;
		 height:30px;
		 font-size:20px;
		 font-weight:bold;
		 padding-top:5px;
		 border:1px solid #333333;
		 border-collapse:collapse;
		 border-radius:18px;
		 -moz-border-radius:18px;
		 -webkit-border-radius:18px;
		 background-color:#999999;
		 }
#nav_bottom {
         float:left;
         width:700px;
		 height:auto;
		 text-align:justify;
		 } 
.body {
         float:left;
         width:700px;
		 height:auto;
		 text-align:justify;
		}
#body_inner_left {
         float:left;
		 width:200px;
		 height:auto;
		 text-align:left;
		 } 
#body_inner_center {
         float:left;
		 width:100px;
		 height:auto;
		 }
#body_inner_right {
         float:left;
		 width:200px;
		 height:auto;
		 text-align:left;
		 } 
#body_inner_left_ep {
         float:left;
		 width:200px;
		 height:auto;
		 text-align:right;
		 } 
#break { 
         float:left;
		 width:700px;
		 height:auto;
       } 
#footer {
         float:left;
		 width:700px;
		 height:auto;
		 background:red;   
         }  
#footer_left {
         float:left;
		 width:300px;
		 height:auto;   
         } 
#footer_right {
         float:right;
		 width:300px;
		 height:auto;   
         }       
      

</style>		 
</head>
		   
<body style="font-family:SolaimanLipi;">
	<?php  foreach($values->result() as $row){ ?>
	<div id="wrapper">
		<div id="header" align="center" style="border-bottom:3px solid #000; min-height: 60px;">
			<div style="float: left; width: 20%;">
				
				<img width="55" height="55" src="<?php  echo base_url();?>images/<?php echo $company_logo = $this->common_model->company_information("company_logo"); ?>" />
			</div>
			<div style="float: left; width: 80%;">
				
				<span style="text-align:center"><span style="font-size:18px; font-weight:bold;">
	        		<?php echo $company_logo = $this->common_model->company_information("company_name_bangla"); ?></span><br>
	        		<?php echo $company_logo = $this->common_model->company_information("company_add_bangla"); ?>
				</span>
				 <?php //$this->load->view('head_bangla'); ?>  
				 <br>
			</div>
		</div>
		<div id="nav" align="center" >
			<div id="nav_inner">
				বিষয়ঃ  নিয়োগ পত্র 
			</div>
		</div>
		<div id="nav_bottom" style="line-height:20px; font-size:13px;">
        <?php $emp_id_salary_grade = $this->db->where("gr_id",$row->emp_sal_gra_id)->get('pr_grade')->row()->gr_name; ?>
			<br>
			নাম : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $row->bangla_nam; ?></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;পিতার নাম:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $row->emp_fname?></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  মাতার নাম : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $row->emp_mname?></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;স্বামীর নাম:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $row->spouse_name?></b> <br />
পদবী :&nbsp;&nbsp;&nbsp; <b><?php echo $row->desig_bangla; ?></b> &nbsp;&nbsp;&nbsp;কার্ড নং : &nbsp;&nbsp;&nbsp;<b style="font-family: SutonnyMj"><?php echo $row->proxi_id; ?> </b>&nbsp;&nbsp;&nbsp;সেকশন :&nbsp;&nbsp;&nbsp;<b><?php echo $row->sec_bangla; ?> </b>&nbsp;&nbsp;&nbsp;লাইন : &nbsp;&nbsp;&nbsp;<b><?php echo $row->line_bangla; ?> </b> &nbsp;&nbsp;&nbsp; যোগদানের তারিখ : &nbsp;&nbsp;&nbsp; <b style="font-weight: bold;font-family: SutonnyMj;"><?php $join_date = date('d-m-Y', strtotime($row->emp_join_date));
echo $join_date; ?> </b><br />
বর্তমান ঠিকানা : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $row->emp_pre_add_ban; ?></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
স্থায়ী ঠিকানা গ্রাম :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b><?php echo $row->emp_par_add_ban; ?></b><br />  <!--পোষ্ঠ : ............................................&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;থানা :........................................&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;জেলা :...................................................-->
</div> <br/>
<div style="line-height:15px; font-size:12px;">
<u style="font-size:12px;">১। নিয়োগের কার্যকারীতা ও শর্তাবলী :</u><br />
ক) আপনার আবেদন সাক্ষাৎকার এবং যোগ্যতা যাচাইয়ের পরিপ্রেক্ষিতে  আপনাকে  <b style="font-weight: bold;font-family: SutonnyMj;"><?php $join_date = date('d-m-Y', strtotime($row->emp_join_date));
echo $join_date; ?> </b> ইং তারিখ হইতে <b style="font-weight:bold; "><?php echo $row->desig_bangla; ?></b> পদে  <b style=""><?php echo $row->gr_name;?></b> নং গ্রেড নিম্নলিখিত শর্ত সাপেক্ষে নিয়োগ প্রদান করছি । নিয়োগ প্রাপ্তির প্রথম তিন মাস প্রাথমিক/শিক্ষানবিশ পর্যায় হিসাবে গন্য করা হবে । ইহা আরও তিন মাস বর্ধিত করা হবে, যদি দেখা যায় যে আপনি সম্পূর্ণ যোগ্যতা অর্জন করতে পারেন নাই । এই সময়ের পর আপনাকে স্থায়ী শ্রমিক হিসাবে গন্য হবে না এবং ইহার জন্য কোন চিঠি পএ দেওয়া হবে না ।<br />
খ) ১০০০ টাকার বেশী যে কোন বেতন ,ওটি , বোনাস ইত্যাদি টাকা আপনাকে প্রদান করার জন্য আপনার নিকট থেকে রাজস্ব বাবদ ১০ টাকা নেওয়া হবে । <br />
গ) কর্তৃপক্ষ প্রয়োজনবোধে আপনাকে এই প্রতিষ্ঠানের যে কোন বিভাগে বা কারখানায় বদলি করতে পারে ।<br />
ঘ) কাটার, সিজার, ইত্যাদি সরঞ্জাম ফিতা দিয়ে বেধে রাখতে হবে । বিদ্যুৎ চলে গেলে এবং কাজ শেষে বিদ্যুত চালিত যন্ত্রের সুইচ বন্ধ করতে হবে । প্রযোজ্য ক্ষেত্রে ক্যাপ, মুখোশ,গগলস, গ্লাভস, আয়রন,ও রাবার ম্যাট ইত্যাদি ব্যবহার করতে হবে । ফায়ার সেফটি ও ভাঙ্গা নিডেল সম্পর্কিত নির্দেশনা মানতে হবে । বিশুদ্ধ খাবার পানির স্থান ব্যতিত অন্য কোন স্থান থেকে পানি পান করা যাবে না ।টয়লেট সঠিক ভাবে ব্যবহার করতে হবে এবং কাজের স্থান ও টয়লেট পরিচ্ছন্ন রাখতে হবে । আগুন লাগলে অথবা অগ্নি মহড়া কালে বহিরাগমনের পথ দিয়ে সুন্দর ভাবে বের হয়ে সমাবেশ স্থলে যেতে হবে ।<br />

<u style="font-size:12px;">২। বেতন ও ভাতা :        </u>
<div style="float:left; width:100%;">
	  <table style="" class="sal" width="100%" cellpadding="5" cellspacing="0" border="1" >
		<tr>
			<th>মোট বেতন	<br /> Gross Salary				</th>
			<th>মুল বেতন	<br /> Basic Salary			</th>
			<th>বাড়ি ভাড়া	<br /> House Rent		</th>
			<th>চিকিৎসা ভাতা <br /> Medical	</th>
			<th>যাতায়াত ভাতা	<br /> Conveyance	</th>
            <th>খাদ্য ভাতা<br />	Food</th>
            <th>	প্রতি ঘণ্টা ওটি <br /> Hourly O.T Rate	</th>
		</tr>
		<?php 
		
		{ ?>
        <tr>
        	<?php echo $salary_strc = $this->common_model->salary_structure($row->gross_sal); ?>
        	<td style="text-align:center;font-family: SutonnyMj"><?php echo $salary_strc['gross_salary'];?> </td>
            <td style="text-align:center; font-weight:bold;font-family: SutonnyMj"><?php echo number_format($salary_strc['basic_sal']) ;?></td>
            <?php  
            		$number = $salary_strc['gross_salary'];
            		$no = round($number);
			        $point = round($number - $no, 2) * 100;
			        $hundred = null;
			        $digits_1 = strlen($no);
			        $i = 0;
			        $str = array();
			        $words = array('0' => '', '1' => 'এক', '2' => 'দুই',
			            '3' => 'তিন', '4' => 'চার', '5' => 'পাঁচ', '6' => 'ছয়',
			            '7' => 'সাত', '8' => 'আট', '9' => 'নয়',
			            '10' => 'দশ', '11' => 'এগার', '12' => 'বার',
			            '13' => 'তের', '14' => 'চোদ্দ',
			            '15' => 'পনের', '16' => 'ষোল', '17' => 'সতের',
			            '18' => 'আঠার', '19' => 'উনিশ', '20' => 'বিশ',
			            '21' => 'একুশ', '22' => 'বাইস', '23' => 'তেইশ', '24' => 'চব্বশি', '25' => 'পঁচশি', '26' => 'ছাব্বশি', '27' => 'সাতাশ', '28' => 'আঠাশ', '29' => 'ঊনত্রশি',
			            '31' => 'একত্রিশ', '32' => 'বত্রিশ', '33' => 'তেত্রিশ', '34' => 'চৌত্রিশ', '35' => 'পঁয়ত্রিশ', '36' => 'ছত্রিশ', '37' => 'সাঁইত্রিশ', '38' => 'আটত্রিশ', '39' => 'ঊনচল্লিশ',
			            '41' => 'একচল্লিশ', '42' => 'বিয়াল্লিশ', '43' => 'তেতাল্লিশ', '44' => 'চুয়াল্লিশ', '45' => 'পঁয়তাল্লিশ', '46' => 'ছেচল্লিশ', '47' => 'সাতচল্লিশ', '48' => 'আটচল্লিশ', '49' => 'ঊনপঞ্চাশ',
			            '51' => 'একান্ন',  '52' => 'বায়ান্ন',  '53' => 'তিপ্পান্ন', '54' => 'চুয়ান্ন',  '55' => 'পঞ্চান্ন',  '56' => 'ছাপ্পান্ন',  '57' => 'সাতান্ন',  '58' => 'আটান্ন',  '59' => 'ঊনষাট',
			            '61' => 'একষট্টি', '62' => 'বাষট্টি', '63' => 'তেষট্টি', '64' => 'চৌষট্টি', '65' => 'পঁয়ষট্টি', '66' => 'ছেষট্টি', '67' => 'সাতষট্টি', '68' => 'আটষট্টি', '69' => 'ঊনসত্তর',
			            '71' => 'একাত্তর', '72' => 'বাহাত্তর', '73' => 'তিয়াত্তর', '74' => 'চুয়াত্তর', '75' => 'পঁচাত্তর', '76' => 'ছিয়াত্তর', '77' => 'সাতাত্তর', '78' => 'আটাত্তর', '79' => 'ঊনআশি',
			            '81' => 'একাশি', '82' => 'বিরাশি', '83' => 'তিরাশি', '84' => 'চুরাশি', '85' => 'পঁচাশি', '86' => 'ছিয়াশি', '87' => 'সাতাশি', '88' => 'আটাশি', '89' => 'ঊননব্বই',
			            '91' => 'একানব্বই', '92' => 'বিরানব্বই', '93' => 'তিরানব্বই', '94' => 'চুরানব্বই', '95' => 'পঁচানব্বই', '96' => 'ছিয়ানব্বই', '97' => 'সাতানব্বই', '98' => 'আটানব্বই', '99' => 'নিরানব্বই',
			            '30' => 'ত্রিশ', '40' => 'চল্লিশ', '50' => 'পঞ্চাশ',
			            '60' => 'ষাট', '70' => 'সত্তর',
			            '80' => 'আশি', '90' => 'নব্বয়');
			        $digits = array('', 'শত', 'হাজার', 'লক্ষ', 'কোটি');
			        while ($i < $digits_1) {
			            $divider = ($i == 2) ? 10 : 100;
			            $number = floor($no % $divider);
			            $no = floor($no / $divider);
			            $i += ($divider == 10) ? 1 : 2;
			            if ($number) {
			                $plural = (($counter = count($str)) && $number > 9) ? '' : null;
			                $hundred = ($counter == 1 && $str[0]) ? '' : null;
			                $str [] = ($number < 100) ? $words[$number] .
			                        " " . $digits[$counter] . $plural . " " . $hundred :
			                        $words[floor($number / 10) * 10]
			                        . " " . $words[$number % 10] . " "
			                        . $digits[$counter] . $plural . " " . $hundred;
			            } else
			                $str[] = null;
			        }
			        $str = array_reverse($str);
			        $result = implode('', $str);
			        $points = ($point) ?
			                "." . $words[$point / 10] . " " .
			                $words[$point = $point % 10] : '';
			        $numtoword = $result . "টাকা মাত্র.";
            
            ?>
            <?php { ?>
            	<td style="text-align:center;font-family: SutonnyMj"> <?php echo number_format($salary_strc['house_rent']);?>	</td>
                <td style="text-align:center;font-family: SutonnyMj"> <?php echo number_format($salary_strc['medical_allow']);?>	</td>
                <td style="text-align:center;font-family: SutonnyMj"> <?php echo number_format($salary_strc['trans_allow']);?> 	</td>
                <td style="text-align:center;font-family: SutonnyMj"> <?php echo number_format($salary_strc['food_allow']);?>	</td>
                <td style="text-align:center;font-family: SutonnyMj"> <?php echo number_format($salary_strc['ot_rate']);?>	</td>
                
            <?php 
				
			
			} ?>
        </tr>
       
        <?php } ?>
         
	  </table>       
	</div>	
<table>
<tr>
<td>সর্বমোট বেতন কথায় :</td><td><b><?= $numtoword;?></b> </td></tr></table>

<div style="font-size:12px;">
<u style="font-size:12px;">৩।  কর্মঘন্টা ও ওভারটাইম :        </u> <br />
ক) দৈনিক কর্মঘন্টা : ৮ ঘন্টা । বিরতি : ১ ঘন্টা আহার ও বিশ্রামের জন্য ।<br />
খ) দৈনিক ওভার টাইম : দৈনিক ৮ ঘন্টার বেশী কাজ ওটি হিসাবে গণ্য হবে শ্রমিকদের সম্মতি ক্রমে সর্বোচ্চ ২ ঘন্টা প্রতিদিন ।<br />
গ) ওভার টাইম হিসাব : মূল বিতনের দিগুন হারে হিসাব করা হয় । হিসাব : ((মূল বেতন * ২)/ ২০৮) ও.টি ঘন্টা ।<br />
ঘ) বেতন প্রদানের সময় : প্রতি মাসের প্রথম ০৭ র্কমদিবসের মধ্যে বেতন ও ওভার টাইম প্রদান করা হয় । <br />
ঙ) আইডি কার্ড : প্রত্যেককে একটি ছবি সহ আইডি / পাঞ্চ কার্ড প্রদান করা হয় । উক্ত কার্ড ফ্যাক্টরীতে আসা ও যাওয়ার সময় পাঞ্চ করতে হবে এবং পাঞ্চ এর মাধ্যমেই হাজিরা নির্ধারন করা হয় ।<br />
<u style="font-size:12px;">৪।  সাধারন ছুটি :     </u> <br />
ক) সাপ্তাহিক ছুটি : সপ্তাহে ০১ (এক) দিন (সাধারনত শুক্রবার ) ।<br />
খ ) উৎসবজনিত ছুটি : বছরে ( ১১ ) এগারদিন ( পূর্ণ বেতনে)<br />
গ) নৈমিওিক ছুটি : বছরে ১০ (দশ) দিন (পূর্ণ বেতনে) । <br />
ঘ) চিকিৎসা ছুটি : বছরে ১৪  (চৌদ্দ) দিন (পূর্ণ বেতনে) । <br />
ঙ) অর্জিত ছুটি : প্রতি আঠার (১৮) কর্মদিবসের জন্য ০১(এক) দিন (পূর্ণ বেতনে) কমপক্ষে ০১(এক) বছর চাকুরী পূর্ণ করলে ভোগযোগ্য । <br />
চ) মাতৃত্বকালীন ছুটি : ১৬ সপ্তাহ বা ১১২ (একশত বার) দিন। (পূর্ণ বেতনে) শ্রম আইন অনুযায়ী ।<br />

<u style="font-size:12px;">৫।  সাধারন ছুটি :     </u> <br />
ক) ০২ (দুই) ঈদে কোম্পানীর নিয়ম অনুযায়ী উৎসব বোনাস (Festival Bonus) প্রদান করা হয় । অন্যান্য ধর্মালম্বীদেরকেও উৎসব বোনাস প্রদান করা হয় ।
 খ) মাসের প্রতিটি কর্মদিবসে সঠিক সময়ে ফ্যাক্টরীতে উপস্থিত হলে কোম্পানীর প্রচলিত নিয়ম অনুযায়ী হাজিরা বোনাস বা পুরস্কার প্রদান করা হয় । 
 গ) বিভিন্ন সময়ে ভালো ও প্রতিয়োগিতা মূলক কাজের জন্য কোম্পানীর প্রচলীত নিয়ম অনুযায়ী উৎসব বোনাস বা পুস্কার প্রদান করা হয় ।
 ঘ) বিনা খরচে প্রাথমিক চিকিৎসা : কোম্পানীর নিয়োগকৃত মহিলা ও পুরুষ ডাক্তার দ্বারা প্রতিদিন সাধারন চিকিৎসা প্রদান করা হয় । 
 ঙ) কোম্পানীর খরচে শিশু পরিচর্যা (Child Care) কেন্দ্রে ৬ মাস হতে ৬বছর পর্যন্ত শিশু প্রতিপালনের সুবিধা প্রধান করা হয় । <br />
<u style="font-size:12px;">৬। কর্মী কর্তৃক   সেচ্ছায় চাকুরীচ্যুতি :     </u> <br />
ক) ৬০ দিনের লিখিত নোটিশ : স্থায়ী কর্মীর ক্ষেএে ।
খ) ৩০ দিনের লিখিত নোটিশ : মাসিক মজুরী  ভিওিতে  নিয়োজিত অস্থায়ী কর্মীর ক্ষেএে এবং গ) ১৪ দিনের লিখিত নোটিশ : অন্যান্য কর্মীর ক্ষেএে ।<br />
<u style="font-size:12px;">৭।  কর্মী কর্তৃক সেচ্ছায় চাকুরীচ্যুতি :     </u> <br />
মালিক কর্তৃক শ্রমিকের অবসান : মালিক কর্তৃক শ্রমিকের অবসান করিতে চাহিলে বাংলাদেশ শ্রম আইন ২০০৬ ও ২০১৩ গেজেট অনুযায়ী পরিচালিত হইবে । <br />
<u style="font-size:12px;"> ৮। বাংলাদেশ শ্রম ও কারখানা আইনের আলোকে অএ কোম্পানীর নিতিমালার অধিনে আপনার চাকুরি পরিচালিত হইবে ।</u> <br />
আমি অএ নিয়োগপএ পাঠ করেছি/আমাকে পাঠ করে শুনানো হয়েছে । এতে বর্ণিত শর্তাদি আমিসম্পূণরুপে অবগত হয়ে,কারো দ্বারা প্ররোচিত না হয়ে , কার কোনরুপ জোর জবরদস্তি ছাড়াই ,স্বেচ্ছায় ও স্বজ্ঞানে উপরোক্ত শর্ত মেনে নিয়ে,এই নিয়োগ পএে স্বাক্ষর করে নিয়োগ পএ এবং একটি শ্রমিক সহায়িকা গ্রহণ করছি এবং কাজে যোগদান করছি । <br />
</div>

<div style="height: 50px;"></div>
<table>
<tr style="width: 100px">
<!-- <img style="height: 50px;margin-left: 600px;" src="<?php echo base_url();?>images/dir_sign.jpg" /> -->
<td width="300">তারিখ</td><td width="300">শ্রমিকের স্বাক্ষর</td><td width="100">নিয়োগকারীর স্বাক্ষর।</td></tr>


</table>
</div>
</div>
<?php } ?>
</body>
</html>