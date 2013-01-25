<?php
	/*
		Theme Settings:
	*/
	/*
		after_setup_theme

		adds environmental variables for theme settings
	*/
	function nmsu_theme_settings_setup() {


	}
	//add_action( 'after_setup_theme', 'nmsu_theme_custom_header_setup' );
	
	/*
		setup_theme_settings_menu

		adds in a link under the theme menu to view theme settings.
	*/
	function setup_theme_settings_menu ( ) {
	    add_submenu_page('themes.php',
	        'NMSU Theme Settings', 'NMSU Theme Settings', 'manage_options',
	        'settings', 'theme_settings');
	}
	add_action("admin_menu", "setup_theme_settings_menu");  

	/*
		Theme
	*/
	function theme_settings ( ) {
		//Check that the user has sufficient permissions
		/*
		if ( !current_user_can('manage_options') ) {
			//If user doesn't end execution of this function
			wp_die ( "You don't have sufficient permissions to access this page." );
		}
		*/
		//We will now break out of PHP to save processing of raw HTML.
?>
		<div class="wrap">  
			<?php $settings = get_option('nmsu_theme_options'); ?>
			<?php if(isset($_POST['search_method'])):
				$settings['search_method'] = $_POST['search_method'];
				update_option('nmsu_theme_options', $settings);
			endif; ?>

	        <?php screen_icon('themes'); ?> <h2>Front page elements</h2>  
	        <form method="POST" action="">  
	            <table class="form-table">
	            	<!--Header type so we can designate how we want it to work.-->
	            	<!--This feature should also be available when adding a page-->  
	                <tr valign="top">  
	                    <th scope="row">  
	                        <label for="header_type">  
	                            Header Type:  
	                        </label>  
	                    </th>  
	                    <td>  
	                        <select name="header_type">
	                        	<option value="0"<?php echo (get_option("header_type")==0? " selected='selected'" : "");?>>Image</option>
	                        	<option value="1"<?php echo (get_option("header_type")==1? " selected='selected'" : "");?>>Image+Text</option>
	                        	<option value="2"<?php echo (get_option("header_type")==2? " selected='selected'" : "");?>>Shortcode</option>
	                        </select>
	                    </td>  
	                    <th scope="row">
	                    	<label for="header_change">
	                    		Header:
	                    	</label>
	                    </th>
	                    <td>
	                    	[HEADER_CHANGE_AREA]
	                    </td>	
	                </tr>  
	                <tr valign="top">  
	                    <th scope="row">  
	                        <label for="search_method">  
	                            Search Method:  
	                        </label>  
	                    </th>  
	                    <td>
	                        <select name="search_method">
	                        	<option value="default"			<?php echo (!isset($settings['search_method']) || $settings['search_method']=='default'? " selected='selected'" : "");?>>Wordpress Default</option>
	                        	<option value="google"			<?php echo ($settings['search_method']=='google'? " selected='selected'" : "");?>>Google Search</option>
	                        	<!--<option value="google_custom"	<?php echo ($settings['search_method']=='google_custom'? " selected='selected'" : "");?>>Google Custom</option>-->
	                        </select>
	                    </td>  
	                </tr>  
	            </table>
	            <input type="submit" label="Submit">  
	        </form>  
	    </div>  
<?php

	}

?>