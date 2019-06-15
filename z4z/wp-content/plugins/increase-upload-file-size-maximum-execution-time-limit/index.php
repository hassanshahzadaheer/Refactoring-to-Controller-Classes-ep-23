<?php
/*
Plugin Name: Increase upload file size & Maximum Execution Time limit
Description: Ability to increase upload file size (more than 2mb) & maximum execution time limit (more than 30 seconds). (P.S.  OTHER MUST-HAVE PLUGINS FOR EVERYONE: https://protectpages.com/blog/must-have-wordpress-plugins/  )
Version: 1.1
Author: TazoTodua
Author URI: http://www.protectpages.com/profile
Plugin URI: http://www.protectpages.com/
Donate link: http://paypal.me/tazotodua
*/




class IncreaseUploadFileSizeLimit_IUFSL{
	public $version;
	public $plugin_slug;
	public $plugin_page_url;
	public $optspagetitle;
	public $opts;
		//other plugin custom options
	public $ini_exists;


	public function __construct($arg1=false){
		
				  //=========  default options ============//
					$this->version			= 1.1;
					$this->optspagetitle	= 'Increase filesize & time limits ';
					$this->has_opts			= true;
					///////
					$this->menu_pagePHP	= 'options-general.php';
					$this->required_role= 'manage_options';
					$this->plugin_slug	= $this->translation = str_replace( array(' ','-', '+', '&'), '_', $this->optspagetitle)  ;
					$this->plugin_page_url= admin_url( 'options-general.php'). '?page='.$this->plugin_slug;
					$this->donate_url	= 'http://paypal.me/tazotodua';
					$this->opts= $this->refresh_options(); //add_action('plugins_loaded', array($this, 'refresh_options'), 1); 
					
						//If plugin has options
						if($this->has_opts) { 
						  //add admin menu
							add_action('admin_menu', function(){ add_submenu_page( $this->menu_pagePHP, $this->optspagetitle, $this->optspagetitle, $this->required_role , $this->plugin_slug,  array($this, 'opts_page_output') );} ); 
						  //redirect to settings page after activation (if not bulk activation)
							add_action( 'activated_plugin', function($plugin ) { if ( $plugin == plugin_basename( __FILE__ ) && !((new WP_Plugins_List_Table())->current_action() == 'activate-selected')) { exit( wp_redirect( $this->plugin_page_url.'&isactivation'  ) ); } } ); 
						  //add settings button in plugins list
						  add_filter( "plugin_action_links_".plugin_basename( __FILE__ ), function ( $links ) {  $links[] = '<a href="'.$this->plugin_page_url.'">Settings</a>';  return $links; } );
						}
						// p.s. Donate button
						add_filter( "plugin_action_links_".plugin_basename( __FILE__ ), function ( $links ) { $links[] = '<a href="'.$this->donate_url.'">Donate</a>';  return $links; } );
					//=========finish of defaults============//	
						 
		$this->uploadsize= 0;				 
			 
			 
	  //=========other plugin custom options============//
		//register_activation_hook( __FILE__, array($this, 'install')   );
		//register_deactivation_hook( __FILE__, array($this, 'uninstall'));
		//add_action('init', array($this, 'plugin_initialize_my'), 11);
		add_action('plugins_loaded', array($this, 'plugin_loaded_my'), 11);
	}
	
					
	public function refresh_options(){
		$this->opts	= $initial = get_option($this->plugin_slug, array());
	  // Defaults
		$InitialArray = array( 
			'max_uploadsize'		=> 10,
			'max_executiomtime'		=> 10,
			'force_ini_set'			=> false
		);
			foreach($InitialArray as $name=>$value){if (!array_key_exists($name, $this->opts)) {$this->opts[$name]=$value; } }
		$this->opts['version']	= $this->version;
		if($initial!=$this->opts) {	update_option($this->plugin_slug, $this->opts);	}
		return $this->opts;
	}		
	
	
	
	
	public function plugin_loaded_my(){
		add_filter('upload_size_limit',	function() {  return $this->opts['max_uploadsize']*1024*1024; }, 11);	
		
		$this->ini_exists = (function_exists('ini_get') && function_exists('ini_set'));
		if($this->opts['force_ini_set']){
			@ini_set('upload_max_filesize',	$this->opts['max_uploadsize'].'M'); 
			@ini_set('post_max_size',		$this->opts['max_uploadsize'].'M');  
		}
		
		//@ini_set('max_execution_time', $this->opts['max_executiomtime']);  //4000 seconds
		//@ini_set('memory_limit', '256M'); 
		
		//@ini_set('upload_max_size',		$sz.'M');
		//to-do: @ini_set( 'max_execution_time', '300' ); 
	}

	

	

	public function opts_page_output(){ 
		if (!empty($_POST['form_updated']) && check_admin_referer("plugin_nonce")) 	{
			$this->opts['max_uploadsize'] = (int) sanitize_text_field($_POST['myplugin']['max_uploadsize']) ;
		  //	$this->opts['max_executiomtime'] = (int) sanitize_text_field($_POST['myplugin']['max_executiomtime']) ;
			update_option($this->plugin_slug, $this->opts);
		}
		?>	
		<style>
		#my-panel input{width:100%;}
		</style>
		<div class="clear"></div>
		<div id="my-panel" class="welcome-panel">
			<div class="welcome-panel-content">
			<h3><?php echo __('Plugin Settings Page!', $this->translation);?></h3>
			<div class="welcome-panel-column-container">
				<div class="welcome-panel-column" style="width:80%;">
					<h4>_</h4>
					<form method="post" action="">
					<table class="form-table">
						<tr>
							<td><?php echo __('Insert desired amount (of MegaBytes) for upload file-size limit', $this->translation);?></td>
							<td>
								<div id="def_block">
									<input type="text" name="myplugin[max_uploadsize]" value="<?php echo $this->opts['max_uploadsize']; ?>"  />
								</div>
							</td>
							<?php 
							/*
							<td><?php echo __('Insert maximum allowed exectuion time (of seconds) for script-executions.', $this->translation);?></td>
							<td>
								<div id="def_block">
									<input type="text" name="myplugin[max_executiomtime]" value="<?php echo $this->opts['max_executiomtime']; ?>"  />
								</div>
							</td>
							*/
							?>
						</tr>
					</table>
					<?php 
					wp_nonce_field("plugin_nonce");
					submit_button(  __('Save Settings', $this->translation), 'primary', 'myplugin-save-settings', true,  $attrib= array( 'id' => 'myplugin-submit-button' )   );
					?>
					<input type="hidden" name="form_updated" value="1" />
					</form>
				</div>
			</div>
			</div>
			
			<div class="newBlock">
				<p>
				
				</p>
				
				<div class="welcome-panel-column welcome-panel-last Additionals" style="width:15%; margin:3%; ">
					<style>.Additionals a{font-weight:bold;font-size:1.1em; color:blue;}</style>
					<h3><?php echo __('More Actions', $this->translation);?></h3>	
					<ul>
						<li>
						<p class="about-description"><?php echo __('You can check other useful plugins at: <a href="http://j.mp/musthavewordpressplugins">Must have free plugins for everyone</a>', ecfp_dtrans);?> </p>
						</li>
					</ul>
					<ul>
						<li><div class="welcome-icon welcome-widgets-menus"><?php echo __('If you found the plugin useful, you can <a href="http://paypal.me/tazotodua" target="_blank">donate here</a>', ecfp_dtrans);?></div></li>
					</ul>
				</div>
				
			</div>
		</div>
			

	<?php
	}

}



new IncreaseUploadFileSizeLimit_IUFSL;
	
?>