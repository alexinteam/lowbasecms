<?php
/**
 *  @var $documentRoot string
 *  @var $serverName string
 */
?>

<VirtualHost *:80>
    DocumentRoot "<?= $documentRoot ?>"
	ServerName <?= $serverName ?>

    <Directory "<?= $documentRoot ?>">
        Options Indexes FollowSymLinks
        AllowOverride All
        Order allow,deny
        allow from all
    </Directory>
</VirtualHost>
