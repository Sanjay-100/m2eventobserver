<?php
 
namespace Sanjay\m2eventobserver\Observer;
 
// use Magento\Framework\ObjectManager\ObjectManager;
 
class cmsobs implements \Magento\Framework\Event\ObserverInterface {
 
   
    public function execute(\Magento\Framework\Event\Observer $observer ) {        
        
        // $pd = $observer->getEvent()->getProduct();
        
        echo 'pd  == ' ; exit();
        
    }
}