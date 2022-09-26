<?php $url = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1); ?>

<li>
    <a href="./" class="hover <?php active(''); ?>">
        Inicio
    </a>
</li>

<li>
    <a href="quienes-somos" class="hover <?php active('quienes-somos'); ?>">
        Quiénes somos
    </a>
</li>

<li>
    <a href="equipo" class="hover <?php active('equipo'); ?>">
        Equipo
    </a>
</li>

<li>
    <a href="servicios" class="hover <?php active('servicios'); ?>">
        Servicios
    </a>
</li>

<li>
    <a href="contacto" class="hover <?php active('contacto'); ?>">
        Contacto
    </a>
</li>