<?php


class View
{

    function __construct($page)
    {
        $this->page = $page;
    }


    public function showPage() {
        include $this->page;
    }

}