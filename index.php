<?php
include "page.php";

class content implements i_content
{
    function show_content()
    {
        echo "Содержание страницы";
    }

    function get_title()
    {
        return "Первая страница сайта";
    }
}
$page = new page(new content());