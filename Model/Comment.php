<?php

class Comment extends AppModel
{
    public $belongsTo = array('Article');
}