<html>
    <head>
        <title><?php echo $title ?></title>
    </head>
    <body>
        <h1><?php echo $title ?></h1>
        <?php foreach($pages as $page): ?>
            <h2><?php echo $page['title'] ?></h2>
            <p><?php echo $page['description'] ?></p>
            <p><?php echo anchor('page/contents/'.$page['page_id'],'View Contents') ?></p>
            <hr/>
        <?php endforeach ?>
    </body>
</html>