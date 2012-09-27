<?php
namespace App\Form{
  
  use Symfony\Component\Form\FormBuilderInterface;
  use Symfony\Component\Form\AbstractType;
  
  class CaptchaType extends AbstractType
  {

    public function buildForm(FormBuilderInterface $builder,array $options){
      /**
       * EN : @note @silex use a custom field type
       * FR : @note @silex utiliser un champ personalisé
       */
      $builder->add("image",new ImageType());
      $builder->add("text","text");
    }
    
    function getDefaultOptions(array $options){
      return array();
    }

    function getName(){
      return "captcha";
    }

    function getParent(){
      return "form";
    }
  }
}