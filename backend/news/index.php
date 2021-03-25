<?php
    $host = 'localhost'; // адрес сервера 
    $database = 'titt'; // имя базы данных
    $user = 'root'; // имя пользователя
    $password = ''; // пароль
	$link = mysqli_connect($host, $user, $password, $database); 

	if (isset($_GET['delete'])){
		$id = (int)$_GET['delete'];
		
		mysqli_query($link, "DELETE FROM titos WHERE id=$id LIMIT 1");
	}
	
	if (isset($_GET['update'])){
		$id = (int)$_GET['update'];
		
		$result = mysqli_query($link, "SELECT * FROM titos WHERE id = $id LIMIT 1");
		$oneNews = mysqli_fetch_all($result, MYSQLI_ASSOC);
		$oneNews = reset($oneNews);
		//print_r($oneNews);
		//die();
	}

if (!empty($_POST)){
	if(!empty($_FILES['picture']['tmp_name'])){
		$filesname = md5(rand(10000, 99999) . microtime()) . $_FILES['picture']['name'];
	
	copy($_FILES['picture']['tmp_name'], __DIR__ . '/../../upoad/news/' 
	. $filesname);
	}
	//print "<pre>";
	//print_r($_POST);
	//print "</pre>";
	//$connect = mysql_connect("localhost", "root", "", "titt");
	$id = intval($_POST['id']);
	$title = htmlspecialchars($_POST['title']);
    $preview = htmlspecialchars($_POST['preview']);
    $picture = htmlspecialchars($filesname ?? '');
    $body = $_POST['body'];
	$created = date('Y-m-d H:i:s', time());
	$updated = date('Y-m-d H:i:s', time());
	
	if($id > 0){
		$query = "UPDATE titos SET title='$title',  preview='$preview', body='$body', updated='$updated' WHERE id = $id LIMIT 1";
	}
	else{
		$query = "INSERT INTO titos VALUES(null, '$title', '$picture', '$preview', '$body', '$created', '$updated')";
	}
	$result = mysqli_query($link, $query);
	/*var_dump($result);
	
	print "<pre>";
	print_r($_FILES);
	print "</pre>";
	die();*/	
}
$result = mysqli_query($link, "SELECT * FROM titos ORDER BY id");
	$allNews = mysqli_fetch_all($result, MYSQLI_ASSOC);
	/*print "<pre>";
	print_r($allNews);
	print "</pre>";
	die();*/
?>

<!doctype html>
	<html>
		<head>
			<title>Create News</title>
			 <link rel="stylesheet" href="../../frontend/css/bootstrap.css">
			
			<style>
				form{
					width:500px;
					margin:20px auto;
				}
				h1{
					text-align:center;
				}
				img{
					width:100px;
					height:auto;
				}
				
			</style>
		</head>
		
		<body>
			<div id="news">
				<table class="table" border="1">
					<thead>
						<th>ID</th>
						<th>Picture</th>
						<th>Title</th>
						<th>Preview</th>
						<th>Created</th>
						<th>Updated</th>
						<th>Action</th>
					</thead>
					<tbody>
						<?php foreach($allNews as $news) : ?>
							<tr>
								<td><?=$news['id']?></td>
								<td><img src="//fourthweek/shop1/upoad/news/<?=$news['picture']?>"></td>
								<td><?=$news['title']?></td>
								<td><?=$news['preview']?></td>
								<td><?=$news['created']?></td>
								<td><?=$news['updated']?></td>
								<td style="width:200px;">
								<a href="?delete=<?=$news['id']?>" class="btn btn-danger">Delete</a>
								<a href="?update=<?=$news['id']?>" class="btn btn-warning">Update</a></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
			<h1>Create News</h1>
			<div>
				<form action="index.php" method="post" enctype="multipart/form-data">
				<input type="hidden" value="<?=$oneNews['id'] ?? '' ?>" name="id">
					<div class="form-group">
						<label>Title</label>
						<input type="text" value="<?=$oneNews['title'] ?? '' ?>" name="title" class="form-control">
					</div>
					<div class="form-group">
						<label>Picture</label>
						<input type="file" name="picture" class="form-control">
					</div>
					<div class="form-group">
						<label>Preview</label>
						<input type="text" value="<?=$oneNews['preview'] ?? '' ?>" name="preview" class="form-control">
					</div>
					<div class="form-group">
						<label>Body</label>
						<textarea rows="7" name="body" class="form-control"><?=$oneNews['body'] ?? '' ?></textarea>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-success">
					</div>
				</form>
			</div>
		</body>
	</html>
