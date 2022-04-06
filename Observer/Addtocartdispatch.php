<?php
 
namespace Sanjay\m2eventobserver\Observer;
 
use Magento\Framework\ObjectManager\ObjectManager;
 
class Addtocartdispatch implements \Magento\Framework\Event\ObserverInterface {
 
    /** @var \Magento\Framework\Logger\Monolog */
    protected $_logger;
    
    /**
     * @var \Magento\Framework\ObjectManager\ObjectManager
     */
    protected $_objectManager;
    
    protected $_orderFactory;    
    protected $_checkoutSession;
    
    public function __construct(        
        \Psr\Log\LoggerInterface $loggerInterface,
        \Magento\Checkout\Model\Session $checkoutSession,
        \Magento\Sales\Model\OrderFactory $orderFactory,
        \Magento\Framework\ObjectManager\ObjectManager $objectManager
    ) {
        $this->_logger = $loggerInterface;
        $this->_objectManager = $objectManager;        
        $this->_orderFactory = $orderFactory;
        $this->_checkoutSession = $checkoutSession;        
    }
 
    /**
     * 
     *
     * @param \Magento\Framework\Event\Observer $observer
     */
    public function execute(\Magento\Framework\Event\Observer $observer ) {        
        
        // $pd = $observer->getEvent()->getProduct();
        dd("test the");
        echo 'pd  == ' ; exit();
        
    }
}