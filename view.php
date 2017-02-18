<?php include 'header.php';

if (isset($_GET['view'])) {
	$page = $_GET['view'];

	if ($page == 'img') {
		include 'views/view_img.php';

	} elseif ($page == 'audio') {
		include 'views/view_audio.php';

	} elseif ($page == 'video') {
		include 'views/view_video.php';
		
	} elseif ($page == 'file') {
		include 'views/view_file.php';
	
	} else {
		echo "error: no such page";
		exit;
	}
} else {
	echo "error: no such item";
	exit;
}
?>

<?php include 'footer.php'; ?>