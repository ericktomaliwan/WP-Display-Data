<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       ericktomaliwan.net
 * @since      1.0.0
 *
 * @package    Wp_data_display
 * @subpackage Wp_data_display/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<?php

#Start Wrapper
function html_start_wrap_row() {
	?>
        <div class="wrapper">
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <div class="container-fluid">
                        <div class="row mb-3">
    <?php
}

#Start Card
function html_start_wrap_card() {
	?>
        <div class="col-sm-12 col-sm-6 col-md-4">
            <div class="card shadow mb-3">
                <div class="card-body text-center">
	<?php
}

#End Card
function html_end_wrap_card() {
	?>
                </div><!--card-body text-center shadow-->
            </div><!--card mb-3-->
        </div><!--col-lg-4-->
	<?php
}

#End Wrapper
function html_analytics_end_wrap_row() {
	?>
                        </div><!--row mb-3 -->
                    </div><!--container-fluid-->
                </div><!--content-->
            </div><!--content-wrapper-->
        </div><!--wrapper-->
	<?php
}

/* Display Leadeboard Upload Form */
function display_upload_form() {
	?>
	<div class="wpdisplay_upload-container">
		<div class="row">
			<div id="import_wpdisplay_success"></div>

			<div class="notewarning">
				<span class="message">
					If you're unsure how to upload the file, please contact
					<a href="mailto:hi@ericktomaliwan.me">hi@ericktomaliwan.me</a>
				</span>
			</div>	

			<form id="import_wpdisplay_form" name="wpdisplay-add-leaderboard" method="post" enctype="multipart/form-data">
				<div class="form-field form-required csv-wrap">
					<label for="csv"><?php _e( 'Upload', EATF_LB_DISP_ID ); ?></label><br>
					<input type="file" name="wpdisplay_filename" id="csv" size="40"/>
				</div><br>
				<p class="submit">
					<input type="submit" name="submit_wpdisplay_import" onclick="return confirm('Are you sure you want to upload this file?')" id="submit_wpdisplay_import_btn" class="button button-primary" value="Upload"/>
					<span class="waitspinner"></span>
					<span class="wait-text" style="display: none">data processing..please wait..</span>
				</p>
			</form>
		</div>
	</div>
	<?php
}
