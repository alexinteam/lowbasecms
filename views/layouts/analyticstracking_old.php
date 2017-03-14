<?php
if(isset($this->params['site'])){
    $site = $this->params['site'];
}
?>

<!-- Google Analytics -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-91359010-1', 'auto');

    <?php if(isset($this->params['site'])){
        $site = $this->params['site'];

        ?>

        ga('send', 'pageview', {
            'dimension1':  <?= $site->id ?>
        });

        <?php
    }
    else{
        ?>

        ga('send', 'pageview');

        <?php
    }
    ?>

    //ga('send', 'pageview');

    /*ga('send', 'pageview'{
        'dimension1':  age,
            'dimension2':  gender
    });*/
</script>
<!-- End Google Analytics -->