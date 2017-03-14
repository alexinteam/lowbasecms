<?php

$site = isset($this->params['site']) ? $this->params['site'] : null;

if(isset($site->ga_account)){ ?>
    <!-- Google Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-91359010-1', 'auto');
        ga('create', '<?= $site->ga_account; ?>', 'auto');
    </script>
    <!-- End Google Analytics -->
<?php }

