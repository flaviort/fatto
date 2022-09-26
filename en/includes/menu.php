<?php $url = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1); ?>

<li>
    <a href="./" class="hover <?php active(''); ?>">
        Home
    </a>
</li>

<li>
    <a href="about-us" class="hover <?php active('about-us'); ?>">
        About us
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