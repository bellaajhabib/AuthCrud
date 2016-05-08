<?php
/**
 * Created by PhpStorm.
 * User: habib bellaaj
 * Date: 07/05/2016
 * Time: 11:07
 */

namespace Stocks\AchatBundle\Form\Handler;


use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;

class DemandeHandler {
protected $form;
protected $request;
public function __construct(Form $form,Request $request){
$this->form=$form;
$this->request=$request;

}
public  function process(){
    $this->form->handleRequest($this->request);
    if ($this->request->isMethod('post') && $this->form->isValid()) {
        $this->onSuccess();
        return true;
    }

    return false;
}
    /**
     * @return Form
     */
    public function getForm()
    {
        return $this->form;
    }

    protected function onSuccess(){

 }
} 