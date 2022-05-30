<?php

class MainController
{
    public function index()
    {
        echo Resource::json('Привед',200);
    }
}