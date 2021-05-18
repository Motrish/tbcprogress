<?php
/*	Project:			EQdkp-Plus
 *	Package:			TBC Progress Module - Portal

 *
 *	Copyright (C) 2021 Motrish	
 *
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}

class tbcprogress_portal extends portal_generic {

	protected static $path		= 'tbcprogress';
	protected static $data		= array(
		'name'			=> 'TBC Progress',
		'version'		=> '1.1.3',
		'author'		=> 'Motrish',
		'icon'			=> 'fa-code',
		'contact'		=> 'nehmer.michael@gmx.de',
		'description'	=> 'Shows the actual progress of the tbc Raid',
		'multiple'		=> false,
		'lang_prefix'	=> 'tbcprogress_'
	);

	protected static $positions = array( 'left1', 'left2', 'right');
	public function get_settings($state){
		$settings	= array(
				#MOLTEN CORE
			'boss1'	=> array(
				'type'		=> 'dropdown',
				'class'		=> 'js_reload',
				'options'	=> array(
					'tbc_phase1'	=> $this->user->lang('tbc_phase1'),
					'tbc_0_11'	=> $this->user->lang('tbc_0_11'),
					'tbc_1_11'	=> $this->user->lang('tbc_1_11'),
					'tbc_2_11'	=> $this->user->lang('tbc_2_11'),
					'tbc_3_11'	=> $this->user->lang('tbc_3_11'),
					'tbc_4_11'	=> $this->user->lang('tbc_4_11'),
					'tbc_5_11'	=> $this->user->lang('tbc_5_11'),
					'tbc_6_11'	=> $this->user->lang('tbc_6_11'),
					'tbc_8_11'	=> $this->user->lang('tbc_8_11'),	
					'tbc_8_11'	=> $this->user->lang('tbc_8_11'),		
					'tbc_9_11'	=> $this->user->lang('tbc_9_11'),
					'tbc_10_11'	=> $this->user->lang('tbc_10_11'),	
					'tbc_clear'	=> $this->user->lang('tbc_clear'),
					
				),
			),
				#Gruuls Lair
			'boss2'	=> array(
				'type'		=> 'dropdown',
				'class'		=> 'js_reload',			
				'options'	=> array(
					'tbc_phase1'	=> $this->user->lang('tbc_phase1'),
					'tbc_0_2'	=> $this->user->lang('tbc_0_2'),
					'tbc_1_2'	=> $this->user->lang('tbc_1_2'),
					'tbc_clear'	=> $this->user->lang('tbc_clear'),
				),
			),				
				#Magtheridon
			'boss3'	=> array(
				'type'		=> 'dropdown',	
				'class'		=> 'js_reload',			
				'options'	=> array(
					'tbc_phase1'	=> $this->user->lang('tbc_phase1'),					
					'tbc_0_1'	=> $this->user->lang('tbc_0_1'),
					'tbc_clear'	=> $this->user->lang('tbc_clear'),

				),
			),
				#SSC
			'boss4'	=> array(
				'type'		=> 'dropdown',		
				'class'		=> 'js_reload',
				'options'	=> array(
					'tbc_phase2'	=> $this->user->lang('tbc_phase2'),					
					'tbc_0_6'	=> $this->user->lang('tbc_0_6'),
					'tbc_1_6'	=> $this->user->lang('tbc_1_6'),
					'tbc_2_6'	=> $this->user->lang('tbc_2_6'),
					'tbc_3_6'	=> $this->user->lang('tbc_3_6'),
					'tbc_4_6'	=> $this->user->lang('tbc_4_6'),
					'tbc_5_6'	=> $this->user->lang('tbc_5_6'),	
					'tbc_clear'	=> $this->user->lang('tbc_clear'),
				),
			),

				#Eye
			'boss5'	=> array(
				'type'		=> 'dropdown',	
				'class'		=> 'js_reload',			
				'options'	=> array(
					'tbc_phase2'	=> $this->user->lang('tbc_phase2'),
					'tbc_0_4'	=> $this->user->lang('tbc_0_4'),
					'tbc_1_4'	=> $this->user->lang('tbc_1_4'),
					'tbc_2_4'	=> $this->user->lang('tbc_2_4'),
					'tbc_3_4'	=> $this->user->lang('tbc_3_4'),
					'tbc_clear'	=> $this->user->lang('tbc_clear'),

				),
			),
			#Hyjal
			'boss6'	=> array(
				'type'		=> 'dropdown',	
				'class'		=> 'js_reload',			
				'options'	=> array(
					'tbc_phase3'	=> $this->user->lang('tbc_phase3'),
					'tbc_0_5'	=> $this->user->lang('tbc_0_5'),
					'tbc_1_5'	=> $this->user->lang('tbc_1_5'),
					'tbc_2_5'	=> $this->user->lang('tbc_2_5'),
					'tbc_3_5'	=> $this->user->lang('tbc_3_5'),
					'tbc_4_5'	=> $this->user->lang('tbc_4_5'),
					'tbc_clear'	=> $this->user->lang('tbc_clear'),
				),
			),
			#BT
			'boss7'	=> array(
				'type'		=> 'dropdown',	
				'class'		=> 'js_reload',			
				'options'	=> array(
					'tbc_phase3'	=> $this->user->lang('tbc_phase3'),
					'tbc_0_9'	=> $this->user->lang('tbc_0_9'),
					'tbc_1_9'	=> $this->user->lang('tbc_1_9'),
					'tbc_2_9'	=> $this->user->lang('tbc_2_9'),
					'tbc_3_9'	=> $this->user->lang('tbc_3_9'),
					'tbc_4_9'	=> $this->user->lang('tbc_4_9'),
					'tbc_5_9'	=> $this->user->lang('tbc_5_9'),
					'tbc_6_9'	=> $this->user->lang('tbc_6_9'),
					'tbc_7_9'	=> $this->user->lang('tbc_7_9'),
					'tbc_8_9'	=> $this->user->lang('tbc_8_9'),
					'tbc_clear'	=> $this->user->lang('tbc_clear'),
				),
			),	
			#ZA
			'boss8'	=> array(
				'type'		=> 'dropdown',	
				'class'		=> 'js_reload',			
				'options'	=> array(
					'tbc_phase4'	=> $this->user->lang('tbc_phase4'),
					'tbc_0_9'	=> $this->user->lang('tbc_0_9'),
					'tbc_1_9'	=> $this->user->lang('tbc_1_9'),
					'tbc_2_9'	=> $this->user->lang('tbc_2_9'),
					'tbc_3_9'	=> $this->user->lang('tbc_3_9'),
					'tbc_4_9'	=> $this->user->lang('tbc_4_9'),
					'tbc_5_9'	=> $this->user->lang('tbc_5_9'),
					'tbc_6_9'	=> $this->user->lang('tbc_6_9'),
					'tbc_7_9'	=> $this->user->lang('tbc_7_9'),
					'tbc_8_9'	=> $this->user->lang('tbc_8_9'),
					'tbc_clear'	=> $this->user->lang('tbc_clear'),
				),
			),		
			#Sunwell
			'boss9'	=> array(
				'type'		=> 'dropdown',	
				'class'		=> 'js_reload',			
				'options'	=> array(
					'tbc_phase5'	=> $this->user->lang('tbc_phase5'),
					'tbc_0_9'	=> $this->user->lang('tbc_0_9'),
					'tbc_1_9'	=> $this->user->lang('tbc_1_9'),
					'tbc_2_9'	=> $this->user->lang('tbc_2_9'),
					'tbc_3_9'	=> $this->user->lang('tbc_3_9'),
					'tbc_4_9'	=> $this->user->lang('tbc_4_9'),
					'tbc_5_9'	=> $this->user->lang('tbc_5_9'),
					'tbc_6_9'	=> $this->user->lang('tbc_6_9'),
					'tbc_7_9'	=> $this->user->lang('tbc_7_9'),
					'tbc_8_9'	=> $this->user->lang('tbc_8_9'),
					'tbc_clear'	=> $this->user->lang('tbc_clear'),
				),
			),		
		
		
		
		);
		
		return $settings;
	}
	protected static $install	= array(
		'autoenable'		=> '0',
		'defaultposition'	=> 'left',
		'defaultnumber'		=> '8',
	);
	
	protected static $apiLevel = 20;

	public function output() {
		$Imagepath=$this->server_path."portal/tbcprogress/media/images/";
		$arrSettingsArray=array();
		$out="<table style='width:280px;'>";
		$actualBoss=1;		
		while($this->config('boss'.$actualBoss)){
			$arrSettingsArray .= $this->config('boss'.$actualBoss);
			if($this->config('boss'.$actualBoss) == "tbc_phase1"){$Down="<font color='red'>".$this->user->lang('tbc_phase1')."</font>";}	
			if($this->config('boss'.$actualBoss) == "tbc_phase2"){$Down="<font color='red'>".$this->user->lang('tbc_phase2')."</font>";}	
			if($this->config('boss'.$actualBoss) == "tbc_phase3"){$Down="<font color='red'>".$this->user->lang('tbc_phase3')."</font>";}	
			if($this->config('boss'.$actualBoss) == "tbc_phase4"){$Down="<font color='red'>".$this->user->lang('tbc_phase4')."</font>";}	
			if($this->config('boss'.$actualBoss) == "tbc_phase5"){$Down="<font color='red'>".$this->user->lang('tbc_phase5')."</font>";}
			if($this->config('boss'.$actualBoss) == "tbc_phase6"){$Down="<font color='red'>".$this->user->lang('tbc_phase6')."</font>";}		
						
			if($this->config('boss'.$actualBoss) == "tbc_clear"){$Down="<font color='lime'>".$this->user->lang('tbc_clear')."</font>";}				

			if($this->config('boss'.$actualBoss) == "tbc_0_1"){$Down="<font color='red'>".$this->user->lang('tbc_0_1')."</font>";}					 

			if($this->config('boss'.$actualBoss) == "tbc_0_2"){$Down="<font color='red'>".$this->user->lang('tbc_0_2')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "tbc_1_2"){$Down="<font color='yellow'>".$this->user->lang('tbc_1_2')."</font>";}					 

			if($this->config('boss'.$actualBoss) == "tbc_0_3"){$Down="<font color='red'>".$this->user->lang('tbc_0_3')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "tbc_1_3"){$Down="<font color='yellow'>".$this->user->lang('tbc_1_3')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "tbc_2_3"){$Down="<font color='yellow'>".$this->user->lang('tbc_2_3')."</font>";}					 

			if($this->config('boss'.$actualBoss) == "tbc_0_4"){$Down="<font color='red'>".$this->user->lang('tbc_0_4')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "tbc_1_4"){$Down="<font color='yellow'>".$this->user->lang('tbc_1_4')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "tbc_2_4"){$Down="<font color='yellow'>".$this->user->lang('tbc_2_4')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "tbc_3_4"){$Down="<font color='yellow'>".$this->user->lang('tbc_3_4')."</font>";}					 

			if($this->config('boss'.$actualBoss) == "tbc_0_5"){$Down="<font color='red'>".$this->user->lang('tbc_0_5')."</font>";}					
			if($this->config('boss'.$actualBoss) == "tbc_1_5"){$Down="<font color='yellow'>".$this->user->lang('tbc_1_5')."</font>";}					
			if($this->config('boss'.$actualBoss) == "tbc_2_5"){$Down="<font color='yellow'>".$this->user->lang('tbc_2_5')."</font>";}					
			if($this->config('boss'.$actualBoss) == "tbc_3_5"){$Down="<font color='yellow'>".$this->user->lang('tbc_3_5')."</font>";}					
			if($this->config('boss'.$actualBoss) == "tbc_4_5"){$Down="<font color='yellow'>".$this->user->lang('tbc_4_5')."</font>";}					

			if($this->config('boss'.$actualBoss) == "tbc_0_6"){$Down="<font color='red'>".$this->user->lang('tbc_0_6')."</font>";}					
			if($this->config('boss'.$actualBoss) == "tbc_1_6"){$Down="<font color='yellow'>".$this->user->lang('tbc_1_6')."</font>";}					
			if($this->config('boss'.$actualBoss) == "tbc_2_6"){$Down="<font color='yellow'>".$this->user->lang('tbc_2_6')."</font>";}					
			if($this->config('boss'.$actualBoss) == "tbc_3_6"){$Down="<font color='yellow'>".$this->user->lang('tbc_3_6')."</font>";}					
			if($this->config('boss'.$actualBoss) == "tbc_4_6"){$Down="<font color='yellow'>".$this->user->lang('tbc_4_6')."</font>";}					
			if($this->config('boss'.$actualBoss) == "tbc_5_6"){$Down="<font color='yellow'>".$this->user->lang('tbc_5_6')."</font>";}					

			if($this->config('boss'.$actualBoss) == "tbc_0_7"){$Down="<font color='red'>".$this->user->lang('tbc_0_7')."</font>";}					
			if($this->config('boss'.$actualBoss) == "tbc_1_7"){$Down="<font color='yellow'>".$this->user->lang('tbc_1_7')."</font>";}					
			if($this->config('boss'.$actualBoss) == "tbc_2_7"){$Down="<font color='yellow'>".$this->user->lang('tbc_2_7')."</font>";}					
			if($this->config('boss'.$actualBoss) == "tbc_3_7"){$Down="<font color='yellow'>".$this->user->lang('tbc_3_7')."</font>";}					
			if($this->config('boss'.$actualBoss) == "tbc_4_7"){$Down="<font color='yellow'>".$this->user->lang('tbc_4_7')."</font>";}					
			if($this->config('boss'.$actualBoss) == "tbc_5_7"){$Down="<font color='yellow'>".$this->user->lang('tbc_5_7')."</font>";}					
			if($this->config('boss'.$actualBoss) == "tbc_6_7"){$Down="<font color='yellow'>".$this->user->lang('tbc_6_7')."</font>";}					

			if($this->config('boss'.$actualBoss) == "tbc_0_8"){$Down="<font color='red'>".$this->user->lang('tbc_0_8')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "tbc_1_8"){$Down="<font color='yellow'>".$this->user->lang('tbc_1_8')."</font>";}					
			if($this->config('boss'.$actualBoss) == "tbc_2_8"){$Down="<font color='yellow'>".$this->user->lang('tbc_2_8')."</font>";}					
			if($this->config('boss'.$actualBoss) == "tbc_3_8"){$Down="<font color='yellow'>".$this->user->lang('tbc_3_8')."</font>";}					
			if($this->config('boss'.$actualBoss) == "tbc_4_8"){$Down="<font color='yellow'>".$this->user->lang('tbc_4_8')."</font>";}					
			if($this->config('boss'.$actualBoss) == "tbc_5_8"){$Down="<font color='yellow'>".$this->user->lang('tbc_5_8')."</font>";}					
			if($this->config('boss'.$actualBoss) == "tbc_6_8"){$Down="<font color='yellow'>".$this->user->lang('tbc_6_8')."</font>";}
			if($this->config('boss'.$actualBoss) == "tbc_7_8"){$Down="<font color='yellow'>".$this->user->lang('tbc_7_8')."</font>";}				
			if($this->config('boss'.$actualBoss) == "tbc_8_8"){$Down="<font color='yellow'>".$this->user->lang('tbc_8_8')."</font>";}					

			if($this->config('boss'.$actualBoss) == "tbc_0_9"){$Down="<font color='red'>".$this->user->lang('tbc_0_9')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "tbc_1_9"){$Down="<font color='yellow'>".$this->user->lang('tbc_1_9')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "tbc_2_9"){$Down="<font color='yellow'>".$this->user->lang('tbc_2_9')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "tbc_3_9"){$Down="<font color='yellow'>".$this->user->lang('tbc_3_9')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "tbc_4_9"){$Down="<font color='yellow'>".$this->user->lang('tbc_4_9')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "tbc_5_9"){$Down="<font color='yellow'>".$this->user->lang('tbc_5_9')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "tbc_6_9"){$Down="<font color='yellow'>".$this->user->lang('tbc_6_9')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "tbc_7_9"){$Down="<font color='yellow'>".$this->user->lang('tbc_7_9')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "tbc_8_9"){$Down="<font color='yellow'>".$this->user->lang('tbc_8_10')."</font>";}					 

			if($this->config('boss'.$actualBoss) == "tbc_0_10"){$Down="<font color='red'>".$this->user->lang('tbc_0_10')."</font>";}					
			if($this->config('boss'.$actualBoss) == "tbc_1_10"){$Down="<font color='yellow'>".$this->user->lang('tbc_1_10')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "tbc_2_10"){$Down="<font color='yellow'>".$this->user->lang('tbc_2_10')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "tbc_3_10"){$Down="<font color='yellow'>".$this->user->lang('tbc_3_10')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "tbc_4_10"){$Down="<font color='yellow'>".$this->user->lang('tbc_4_10')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "tbc_5_10"){$Down="<font color='yellow'>".$this->user->lang('tbc_5_10')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "tbc_6_10"){$Down="<font color='yellow'>".$this->user->lang('tbc_6_10')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "tbc_7_10"){$Down="<font color='yellow'>".$this->user->lang('tbc_7_10')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "tbc_8_10"){$Down="<font color='yellow'>".$this->user->lang('tbc_8_10')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "tbc_9_10"){$Down="<font color='yellow'>".$this->user->lang('tbc_9_10')."</font>";}	
			
			if($this->config('boss'.$actualBoss) == "tbc_0_11"){$Down="<font color='red'>".$this->user->lang('tbc_0_11')."</font>";}					
			if($this->config('boss'.$actualBoss) == "tbc_1_11"){$Down="<font color='yellow'>".$this->user->lang('tbc_1_11')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "tbc_2_11"){$Down="<font color='yellow'>".$this->user->lang('tbc_2_11')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "tbc_3_11"){$Down="<font color='yellow'>".$this->user->lang('tbc_3_11')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "tbc_4_11"){$Down="<font color='yellow'>".$this->user->lang('tbc_4_11')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "tbc_5_11"){$Down="<font color='yellow'>".$this->user->lang('tbc_5_11')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "tbc_6_11"){$Down="<font color='yellow'>".$this->user->lang('tbc_6_11')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "tbc_7_11"){$Down="<font color='yellow'>".$this->user->lang('tbc_7_11')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "tbc_8_11"){$Down="<font color='yellow'>".$this->user->lang('tbc_8_11')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "tbc_9_11"){$Down="<font color='yellow'>".$this->user->lang('tbc_9_11')."</font>";}	
			if($this->config('boss'.$actualBoss) == "tbc_10_11"){$Down="<font color='yellow'>".$this->user->lang('tbc_10_11')."</font>";}

			$out.="<tr style='border-bottom: 1px solid grey;background:url(".$Imagepath."".$actualBoss.".jpg);background-size:cover;'>
			<td style='text-shadow:1px 1px 5px black;line-height:30px'>
			<font color='white'>
			".$this->user->lang("tbcprogress_f_boss".$actualBoss)."
			</font>
			</td>
			<td style='text-shadow:1px 1px 5px black;line-height:30px;align=center'>
			".$Down."
			</td>
			</tr>";
			$actualBoss++;
		}		
		$out.="</table>";
		return $out;
	}
}
?>
