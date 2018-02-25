<?php require_once 'app.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Job Board</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="header">
    <h1>PHP Job Postings</h1>
</div>

<div class="container">
    <ul class="jobs">
        <?php foreach($jobs as $job): ?>
            <li class="job">
                <div class="date">
                    <?=date( 'F jS, Y', strtotime($job->created_at) );?><br>
                    <?=$job->location;?>
                </div>

                <h3 class="job_title">
                    <?=$job->title;?>
                    <span><small>( <?=$job->type;?> )</small></span>
                </h3>

                <div class="company_logo">
                    <img src="<?=$job->company_logo;?>" alt="">
                </div>

                <a href="<?=$job->url;?>" target="_blank" class="view_job">
                    Apply For Job
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
    
</body>
</html>