<html>
    <head>
        <title><?php echo $title ?></title>
    </head>
    <body>
        <h1><?php echo $title ?></h1>
        <?php foreach($contents as $content): ?>
            <p><?php echo $content['content'] ?></p>
            <p><?php echo anchor('pages','Back to Pages') ?></p>
            <hr/>
        <?php endforeach ?>
        
        <?php echo form_open('pages/insert_content') ?>
        <?php echo form_hidden('page_id', $this->uri->segment(3)) ?>
        <p>Enter your content below:</p>
        <p><textarea name="content" rows="10"></textarea></p>
        <p><input type="submit" value="Submit Content" /></p>
        </form>
    </body>
</html>