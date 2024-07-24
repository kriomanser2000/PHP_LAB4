<?php
$resources = [
    [
        'image' => 'youtube.png',
        'link' => 'https://www.youtube.com',
        'alt' => 'YouTube'
    ],
    [
        'image' => 'facebook.png',
        'link' => 'https://www.facebook.com',
        'alt' => 'Facebook'
    ],
    [
        'image' => 'google.png',
        'link' => 'https://www.google.com',
        'alt' => 'Google'
    ],
    [
        'image' => 'gmail.png',
        'link' => 'https://mail.google.com',
        'alt' => 'Gmail'
    ]
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .image-link
    {
        display: inline-block;
        margin: 10px;
    }
    .image-link img
    {
        width: 100px;
        height: auto;
    }
</style>
<body>
<?php foreach ($resources as $resource): ?>
    <div class="image-link">
        <a href="<?php echo htmlspecialchars($resource['link']); ?>" target="_blank">
            <img src="<?php echo htmlspecialchars($resource['image']); ?>" alt="<?php echo htmlspecialchars($resource['alt']); ?>">
        </a>
    </div>
<?php endforeach; ?>
</body>
</html>