<?php
//'' for dev
//wordpress for my local
require ($_SERVER["DOCUMENT_ROOT"]."/wp-blog-header.php");
require ( $_SERVER["DOCUMENT_ROOT"]. "/wp-includes/pluggable.php" );

if(isset($_GET['action']) && !empty($_GET['action'])) {
    $action = $_GET['action'];
    switch($action) {
        case 'event_metadata' : event_metadata();break;
        case 'wg_forum' : wg_forum();break;
        case 'metadata_roster' : metadata_roster(); break;
        case 'metadata_meeting' : metadata_meeting(); break;
        case 'metadata_resource' : metadata_resource(); break;
        case 'metadata_front' : metadata_front(); break;
    }
}
if(isset($_POST['op']) && !empty($_POST['op'])) {
	if ($_POST['op'] == "Add to Metadata Group" && isset($_POST['selected']) && !empty($_POST['selected'])) {
		if (current_user_can("working_groups_manager")) {
			$wp_selected = $_POST['selected'];
			for ($i = 0; $i < count($wp_selected); $i++)
			{
				$wpdb->insert('wp_groups_user_group',array('user_id'=>$wp_selected[$i],'group_id'=>'2'),array('%d','%d'));
			}
		}
	}
	else if ($_POST['op'] == "Remove from Metadata Group" && isset($_POST['selected']) && !empty($_POST['selected'])) {
		if (current_user_can("working_groups_manager")) {
			$wp_selected = $_POST['selected'];
			for ($i = 0; $i < count($wp_selected); $i++)
			{
				$wpdb->delete('wp_groups_user_group',array('user_id'=>$wp_selected[$i],'group_id'=>'2'),array('%d','%d'));
			}
		}
	}
	echo "<script>window.history.back();</script>";
}

function metadata_front() {
//189 local
//496 dev
$p = get_post(496);
?>
    <div style="margin-left:20px;">
    <div style="font-size: 25px;"><?php echo $p->post_title; ?></div>
    <?php if (has_post_thumbnail( $p->ID ) ): ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $p->ID ), 'single-post-thumbnail' ); ?>
    <div style="margin-top:20px;width:100%;height:200px;background-image: url('<?php echo $image[0]; ?>');"></div>
    <?php endif; ?>
    <div style="margin-top:30px;"><?php echo $p->post_content; ?></div>
    </div>
<?php
}
function event_metadata() {
	//33 for my local
	//364 for dev
	$groups_user = new Groups_User( get_current_user_id() );
	$c = $groups_user->can( 'metadata' );
	if ($c)
	{
			echo do_shortcode('[ecwd id="364" type="full" page_items="5" event_search="yes" display="full" displays="full,list,week,day" filters=""]');
	}
	else
	{
		echo "<div style='text-align:center;font-size:20px;'>Access denied</div>";
		echo "<div style='text-align:center;font-size:20px;'>You are not in the proper group :)</div>";
	}
}
function wg_forum() {
	if (is_user_logged_in())
	{
		echo do_shortcode('[bbp-forum-index]');
	}
	else
	{
		echo "<div style='text-align:center;font-size:20px;'>Access denied</div>";
		echo "<div style='text-align:center;font-size:20px;'>Please log in first :)</div>";
	}
}
function metadata_roster() {
	$groups_user = new Groups_User( get_current_user_id() );
	$c = $groups_user->can( 'metadata' );
	if ($c)
	{
			global $wpdb;
			$querystr = "SELECT wgroup.user_id FROM wp_groups_user_group wgroup
			WHERE wgroup.group_id = 2";
			$users = $wpdb->get_results($querystr, ARRAY_N);
			if ($users) {
				echo "<table style='margin-top:5px;'><tr><th style='font-weight:bold;'>First Name</th><th style='font-weight:bold;'>Last Name</th><th style='font-weight:bold;'>Institution</th></tr>";
				$i = 0;
				while ($users[$i][0]) {
					echo "<tr>";
					$user_info = get_userdata($users[$i][0]);
					if ($user_info->first_name == "")
					{
						$user_info->first_name = "N/A";
					}
					if ($user_info->last_name == "")
					{
						$user_info->last_name = "N/A";
					}
					if ($user_info->Institution == "")
					{
						$user_info->Institution = "N/A";
					}
					echo "<td>" . $user_info->first_name . "</td>";
					echo "<td>" . $user_info->last_name . "</td>";
					echo "<td>" . $user_info->Institution . "</td>";
					echo "</tr>";
					$i++;
				}
				echo "</table>";
			}
			else {
				echo "<div style='text-align:center;font-size:20px;'>Nobody is in this group</div>";
			}

			if (current_user_can("working_group_manager")) {
				?>
				<div id="metadata_member_menu"><a href="javascript:void();">Manage members</a></div>
				<script>$("#metadata_member_menu").click(function() {$("#metadata_member_manager").slideDown();});</script>
				<div id="metadata_member_manager" style="display:none;">
				<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
				<?php
				$querystr = "SELECT ID FROM wp_users";
				$users = $wpdb->get_results($querystr, ARRAY_N);
				if ($users) {
					echo "<table style='margin-top:5px;'><tr><th style='font-weight:bold;'>First Name</th><th style='font-weight:bold;'>Last Name</th><th style='font-weight:bold;'>Email</th><th style='font-weight:bold;'>Institution</th><th style='font-weight:bold;'>Action</th></tr>";
					$i = 0;
					while ($users[$i][0]) {
					echo "<tr>";
					$user_info = get_userdata($users[$i][0]);
					if ($user_info->first_name == "")
					{
						$user_info->first_name = "N/A";
					}
					if ($user_info->last_name == "")
					{
						$user_info->last_name = "N/A";
					}
					if ($user_info->Institution == "")
					{
						$user_info->Institution = "N/A";
					}
					echo "<td>" . $user_info->first_name . "</td>";
					echo "<td>" . $user_info->last_name . "</td>";
					echo "<td>" . $user_info->user_email . "</td>";
					echo "<td>" . $user_info->Institution . "</td>";
					echo '<td><input type="checkbox" name="selected[]" value="' . $users[$i][0] . '"></input></td>';
					echo "</tr>";
					$i++;
				}
				echo "</table>";
				echo "<SELECT NAME='op'><OPTION SELECTED>Add to Metadata Group</OPTION><OPTION>Remove from Metadata Group</OPTION></SELECT>";
				echo '<div style="display:block;margin-top:30px;"><input type="submit" value="Update"></div>';
				echo "</form></div>";

			}
			}

	}
	else
	{
		echo "<div style='text-align:center;font-size:20px;'>Access denied</div>";
		echo "<div style='text-align:center;font-size:20px;'>You are not in the proper group :)</div>";
	}
}

function metadata_meeting() {
	$groups_user = new Groups_User( get_current_user_id() );
	$c = $groups_user->can( 'metadata' );
	if ($c)
	{
		echo "<div id='wg_link'>";
    	echo get_post(498)->post_content;//175 for local 489 for dev
    	echo "</div>";

	}
	else
	{
		echo "<div style='text-align:center;font-size:20px;'>Access denied</div>";
		echo "<div style='text-align:center;font-size:20px;'>You are not in the proper group :)</div>";
	}
}
function metadata_resource() {
	$groups_user = new Groups_User( get_current_user_id() );
	$c = $groups_user->can( 'metadata' );
	if ($c)
	{
		echo "<div id='wg_link'>";
    	echo get_post(499)->post_content;//179 for local 491 for dev
    	echo "</div>";

	}
	else
	{
		echo "<div style='text-align:center;font-size:20px;'>Access denied</div>";
		echo "<div style='text-align:center;font-size:20px;'>You are not in the proper group :)</div>";
	}
}