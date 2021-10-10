<?php

$about = renderTemplate('about', 777333);
$menu = renderTemplate('menu');
echo renderTemplate('layout', $about, $menu);

function renderTemplate($page, $content = '', $menu = '' )
{
    ob_start();
    include $page . ".php";
    return ob_get_clean();
}



