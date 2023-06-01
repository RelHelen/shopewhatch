<?php

namespace app\controllers;

use ishop\Cache;

class MainController extends AppController {

    public function indexAction(){
        //echo __METHOD__;
       // debug($this->route);
         //debug($this->controller);
         
        $brands = \R::find('brand', 'LIMIT 3');
        $hits = \R::find('product', "hit = '1' AND status = '1' LIMIT 4");
        $sale = \R::find('product', "sale = '1' AND status = '1' LIMIT 4");
        $this->setMeta('Главная страница', 'Описание...', 'Ключевики...');
        $this->set(compact('brands', 'hits','sale'));
    }

}