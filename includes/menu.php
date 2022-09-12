<?php $url = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1); ?>

<li>
    <a href="./" class="hover <?php active(''); ?>">
        Início
    </a>
</li>

<li>
    <a href="quem-somos.php" class="hover <?php active('quem-somos.php'); ?>">
        Quem Somos
    </a>
</li>

<li>
    <a href="equipe.php" class="hover <?php active('equipe.php'); ?>">
        Equipe
    </a>
</li>

<li>
    <a href="servicos.php" class="hover <?php active('servicos.php'); ?>">
        Serviços
    </a>
</li>

<li>
    <a href="contato.php" class="hover <?php active('contato.php'); ?>">
        Contato
    </a>
</li>