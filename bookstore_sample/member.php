<?php 
/**
 * Bookstore
 * a sample web application for php security course
 *
 * @author		Sumardi Shukor <smd@php.net.my>
 * @license		GNU GPL
 * @version		0.0.1
 * 
 * You can redistribute it and/or modify it under the terms of 
 * the GNU General Public License as published by the Free Software Foundation; either version 2 
 * of the License, or (at your option) any later version.
 * 
 * You should have received a copy of the GNU General Public License along with this application. 
 * If not, see <http://www.gnu.org/licenses/>
 *
 * WARNING: This application contains multiple vulnerabilities. DO NOT use for your production site.
 */
require_once("dbconnect.php");

if(isset($_GET['id'])) : 
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM customers WHERE id = {$id}";
	$query = mysql_query($sql) or die(mysql_error());

	while($row = mysql_fetch_assoc($query)) :
?>

<fieldset>
	<legend>Member Profile</legend>
	<p>
		<b>Full Name</b> : <?php echo $row['name'] ?>
	</p>
	<p>
		<b>Email</b> : <?php echo $row['email'] ?>
	</p>
</fieldset>

<?php 
	endwhile;
endif;
?>