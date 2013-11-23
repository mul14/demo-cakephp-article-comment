<?php

class Article extends AppModel
{
    public $hasMany = array('Comment');
}