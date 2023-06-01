<?php

namespace ishop\base;

abstract class Controller{

    public $route;
    public $controller;
    public $model;
    public $view;
    public $prefix;
    public $layout;
    public $data = [];
    public $meta = ['title' => '', 'desc' => '', 'keywords' => ''];
   
      public $title = 'Просмотр данных';  
      
     
       
    public function __construct($route){
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->model = $route['controller'];
        $this->view = $route['action'];
        $this->prefix = $route['prefix'];
        //debug($this->route);
    }

    public function getView(){
        $viewObject = new View($this->route, $this->layout, $this->view, $this->meta, $this->title);
        $viewObject->render($this->data);

           }

    public function set($data){
        $this->data = $data;
    }

    public function setMeta($title = '', $desc = '', $keywords = ''){
        $this->meta['title'] = h($title);
        $this->meta['desc'] = h($desc);
        $this->meta['keywords'] = h($keywords);
    }

   /**
   * метод установки Заголоквка на странице
   */
  public function setTitle($title)
  {
    return $this->title = $title;
  }
  /**
   * метод чтения Заголокка на странице
   */
  public function getTitle()
  {

    return $this->title;
  }

  /**
   * проверка что пришел ajax запрос
   */
  public function isAjax()
  {
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest';
  }

  /**Подключаем вид при Ajax запросе
   * принимает вид $view, который должны подключить (Main/test)
   * $vars - параметры при подключения
   * 
   */
  public function loadView($view, $vars = [])
  {
    //извлекаем из массива переменные
    extract($vars);

    require APP."/views/{$this->route['prefix']}{$this->route['controller']}/{$view}.php";
    die;
  }

}