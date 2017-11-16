<?php

/**
 *
 */
namespace app\TestWidgets;

class ProgressWidget extends \yii\base\Widget
{
    public $message;

    public function init()
    {
        parent::init();
        if($this->message === null){
            $this->message = '<div class="color:red;">Hello World</div>';
        }else{
            $this->message = '<div style="color:red;">'.$this->message.'</div>';
        }
    }

    public function run(){

        //        return $this->render('hello');
        return 123;
    }

    public function ttt(){
        return 3333;
    }
}