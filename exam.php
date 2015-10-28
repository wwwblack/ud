<?php 
$result_set = mysql_query("SELECT users.id, users.name, users.pass, users.email, users.usertype_id, usertypes.type as typecategory FROM users JOIN usertypes ON (usertypes.id=users.usertype_id)");
	
while ($result = mysql_fetch_array($result_set)) { 
echo "<tr><form method=\"POST\">"; 
echo "<td>".$result["name"]."</td>"; 
echo "<td>".$result["pass"]."</td>"; 
echo "<td>".$result["email"]."</td>"; 
echo "<td>".$result["typecategory"]."</td>"; 
echo "<td><input type=\"submit\" method=\"post\" name=\"del\" value= ".$result["id"]." /></td> "; 

echo "</tr> </form>"; 
}
?>
