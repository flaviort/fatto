<?php $url = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1); ?>

<li>
    <a href="./" class="hover <?php active(''); ?>">
        Home
    </a>
</li>

<li>
    <a href="who-we-are" class="hover <?php active('who-we-are'); ?>">
        Who we Are
    </a>
</li>

<li>
    <a href="team" class="hover <?php active('team'); ?>">
        Team
    </a>
</li>

<li>
    <a href="services" class="hover <?php active('services'); ?>">
        Services
    </a>
</li>

<li>
    <a href="contact" class="hover <?php active('contact'); ?>">
        Contact
    </a>
</li>