<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Individual Examination:</title>

    <!-- Styles -->
    <style type="text/css">
    </style>
</head>

<body>
    <div>
        <h1>Mark Genesis' Blog</h1>
    </div>

    <ul>
        <?php foreach ($blog_data as $row): ?>
        <li>
            <h3>
                <?php echo $row->blog_title; ?>
            </h3>
            <p>
                <?php echo $row->blog_description; ?>
            </p>
            <p>
                <?php echo $row->date_posted; ?>
            </p>
        </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>