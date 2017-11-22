<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Donald Trump's Tweets</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>
<h1 align="center">Latest Tweets By Trump</h1>

<div class="row" style="margin-top: 30px;">
<?php foreach($data['tweets'] as $tweets): ?>
	
       <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="panel-group">
    <div class="panel panel-success">
      <div class="panel-heading"><br><p>Tweeted at: <?= substr_replace($tweets->created_at,"",19,18); ?></p></div>
      <div class="panel-body"><?= $tweets->text ?> </div>
    </div>
    </div>
     </div>
	<?php endforeach; ?>	
 </div> 




<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>