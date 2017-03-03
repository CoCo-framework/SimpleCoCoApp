<?php

namespace app\controllers;
use coco\web\Controller;

/**
 * Index
 * Date: 2015/11/17
 * Time: 18:12
 */
class IndexController extends Controller
{
    public function indexAction(){
        return $this->render('index/index');
    }
}