<!DOCTYPE html>
<html>
    <head><?php echo $tags; ?></head>
<body style="padding-top: 75px">
    <header>
        <?php echo isset($header)? $header : ''; ?>
    </header>
    <section id="content" class="container">
        <div class="row">
            <div class="col-xs-2">
                <?php echo isset($leftSide)? $leftSide : ''; ?>
            </div>
            <div class="col-xs-8">
                <?php echo isset($content)? $content : ''; ?>
            </div>
            <div class="col-xs-2">
                <?php echo isset($rightSide)? $rightSide : ''; ?>
            </div>
        </div>
    </section>
    <footer>
        <?php echo isset($footer)? $footer : ''; ?>
    </footer>
</body>
</html>