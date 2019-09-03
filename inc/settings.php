<?php

class ControlPanel {

// Default Values
var $default_settings = array(
 'phone1' => '+1 800 450 17 04',
 'phone-1' => '+18004501704',
 'phone2' => '(415) 124-5678',
 'phone-2' => '4151245678',
 'email' => 'support@yourname.com'
 );

 var $options;

 function ControlPanel() {
	 add_action('admin_menu', array(&$this, 'add_menu'));
	 if (!is_array(get_option('themadmin'))) {
	 	add_option('themadmin', $this->default_settings);
	 }
	 $this->options = get_option('themadmin');
 }

 function add_menu() {
 	add_theme_page('WP Theme Options', 'Theme Options', 8, "themadmin", array(&$this, 'optionsmenu'));
 }

 // Save form values with settings 
 function optionsmenu() {
	 if ($_POST['ss_action'] == 'save') {
		 $this->options["phone1"] = $_POST['cp_phone1'];
		 $this->options["phone-1"] = $_POST['cp_phone-1'];
		 $this->options["phone2"] = $_POST['cp_phone2'];
		 $this->options["phone-2"] = $_POST['cp_phone-2'];
		 $this->options["email"] = $_POST['cp_email'];
		 $this->options["facebook"] = $_POST['cp_facebook'];
		 $this->options["twitter"] = $_POST['cp_twitter'];
		 $this->options["skype"] = $_POST['cp_skype'];		 
		 $this->options["googleplus"] = $_POST['cp_googleplus'];		 
		 $this->options["vimeo"] = $_POST['cp_vimeo'];		 
		 $this->options["linkedin"] = $_POST['cp_linkedin'];		 
		 $this->options["instagram"] = $_POST['cp_instagram'];		 
		 $this->options["metrika"] = $_POST['cp_metrika'];
		 update_option('themadmin', $this->options);
		 echo '<div class="updated fade" id="message" style="background-color: rgb(255, 251, 204); width: 400px; margin-left: 17px; margin-top: 17px;"><p>Ваши изменения <strong>сохранены</strong>.</p></div>';
 	}

	// Create settings form
	echo '<form action="" method="post" class="themeform">';
	echo '<input type="hidden" id="ss_action" name="ss_action" value="save">';
	print '<div class="cptab"><br />
	<h1>Theme Settings</h1>
	<br />

	<h3>Contacts</h3>
	<p><input placeholder="Phone" style="width:300px;" name="cp_phone1" id="cp_phone1" value="'.$this->options["phone1"].'"><label> - Header Site Phone</label></p>
	<p><input placeholder="Phone for calling" style="width:300px;" name="cp_phone-1" id="cp_phone-1" value="'.$this->options["phone-1"].'"><label> - Header Site Phone for Calling</label></p>
	<p><input placeholder="Phone" style="width:300px;" name="cp_phone2" id="cp_phone2" value="'.$this->options["phone2"].'"><label> - Footer Site Phone/Fax</label></p>
	<p><input placeholder="Phone for calling" style="width:300px;" name="cp_phone-2" id="cp_phone-2" value="'.$this->options["phone-2"].'"><label> - Footer Site Phone/Fax for calling</label></p>
	<p><input placeholder="Email" style="width:300px;" name="cp_email" id="cp_email" value="'.$this->options["email"].'"><label> - Contact Email</label></p>

	<h3>Socials</h3>
	<p><input placeholder="Facebook Link" style="width:300px;" name="cp_facebook" id="cp_facebook" value="'.$this->options["facebook"].'"><label> - Site Facebook Link</label></p>
	<p><input placeholder="Twitter Link" style="width:300px;" name="cp_twitter" id="cp_twitter" value="'.$this->options["twitter"].'"><label> - Site Twitter Link</label></p>
	<p><input placeholder="Skype Link" style="width:300px;" name="cp_skype" id="cp_skype" value="'.$this->options["skype"].'"><label> - Site Skype Link</label></p>
	<p><input placeholder="Google Plus Link" style="width:300px;" name="cp_googleplus" id="cp_googleplus" value="'.$this->options["googleplus"].'"><label> - Site Google Plus Link</label></p>
	<p><input placeholder="Vimeo Link" style="width:300px;" name="cp_vimeo" id="cp_vimeo" value="'.$this->options["vimeo"].'"><label> - Site Vimeo Link</label></p>
	<p><input placeholder="LinkedIn Link" style="width:300px;" name="cp_linkedin" id="cp_linkedin" value="'.$this->options["linkedin"].'"><label> - Site LinkedIn Link</label></p>
	<p><input placeholder="Instagram Link" style="width:300px;" name="cp_instagram" id="cp_instagram" value="'.$this->options["instagram"].'"><label> - Site Instagram Link</label></p>				

	<h3>Footer Code</h3>
	<p><textarea placeholder="Здесь можно прописать коды счетчиков или дополнительных скриптов" style="width:300px;" name="cp_metrika" id="cp_metrika">'.stripslashes($this->options["metrika"]).'</textarea><label></label></p>
	</div><br />';
	echo '<input type="submit" value="Сохранить" name="cp_save" class="dochanges" />';
	echo '</form>';
 }

}

$cpanel = new ControlPanel();
$mytheme = get_option('themadmin');