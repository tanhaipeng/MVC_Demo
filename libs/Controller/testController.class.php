<?php

class testController{
    function show(){
        
        
        // viewչʾ
        global $view;
        $view->assign('str','hello world');
        $view->display('index.html');
    }
}
