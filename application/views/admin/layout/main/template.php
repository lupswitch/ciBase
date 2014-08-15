<!DOCTYPE html>
<html>
    <head><?php echo $tags; ?></head>
<body style="padding-top: 75px">
    <header>
        <?php echo isset($header)? $header : ''; ?>
    </header>
    <section id="content" class="container">
        <?php echo isset($content)? $content : ''; ?>
    </section>
    <footer>
        <?php echo isset($footer)? $footer : ''; ?>
    </footer>
</body>
</html>