<!DOCTYPE html>
<html>
    <head><?php echo $tags; ?></head>
<body style="padding-top: 75px">
    <header>
        <?php echo isset($header)? $header : ''; ?>
    </header>
    <section id="content" class="container-fluid">
        <div class="row">
            <?php echo isset($leftSide)? $leftSide : ''; ?>
            <?php echo isset($content)? $content : ''; ?>
        </div>
    </section>
</body>
</html>