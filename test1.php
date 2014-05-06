<?php
$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4);
$json = json_encode($arr);
echo $json;

var_dump(json_decode($json));
Var_dump(json_decode($json, true));

?>
<html>
	<form action method="get" >
		<input type="text" name="id" value="Enter ID">
		<input type="submit" name="submit" value="GO!">
	</form>
</html>

<?php
	if (!empty($_GET['id'])) {
		$id = $_GET['id'];
		$url = 'http://api.vk.com/method/users.get?user_ids='.$id.'&fields=photo_200,city,last_seen';
		$json = file_get_contents($url);
		$json=json_decode($json, true);
		var_dump($json);
		
		$user_pic = $json["response"][0]["photo_200"];
		echo '<img src="'.$user_pic.'">';
		}
