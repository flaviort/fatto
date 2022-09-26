<?php $url = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1); ?>

<li>
    <a href="./" class="hover <?php active(''); ?>">
        Início
    </a>
</li>

<li>
    <a href="sobre-nos" class="hover <?php active('sobre-nos'); ?>">
        Sobre nós
    </a>
</li>

<li>
    <a href="equipe" class="hover <?php active('equipe'); ?>">
        Equipe
    </a>
</li>

<li>
    <a href="servicos" class="hover <?php active('servicos'); ?>">
        Serviços
    </a>
</li>

<li>
    <a href="contato" class="hover <?php active('contato'); ?>">
        Contato
    </a>
</li>