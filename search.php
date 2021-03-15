<!-- <?php
	if(ISSET($_POST['search'])){
		$keyword = $_POST['keyword'];
?>
<div>
	<h2>Result</h2>
	<hr style="border-top:2px dotted #ccc;"/>
	<?php
        require __DIR__.'/./src/config/db.php';
        $db = new db();
        $pdo = $db->connect();
		$query = mysqli_query($conn, "SELECT * FROM `users` WHERE `name` LIKE '%$keyword%' ORDER BY `title`") or die(mysqli_error($pdo));
		while($fetch = mysqli_fetch_array($query)){
	?>
	<div style="word-wrap:break-word;">
		<a href="/get_blog?id=<?php echo $fetch['blog_id']?>"><h4><?php echo $fetch['title']?></h4></a>
		<p><?php echo substr($fetch['content'], 0, 100)?>...</p>
	</div>
	<hr style="border-bottom:1px solid #ccc;"/>
	<?php
		}
	?>
</div>
<?php
	}
?> -->