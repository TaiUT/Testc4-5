<?php
namespace Packt\Magenest\Controller\Adminhtml\Actortable;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
class Index extends \Magento\Backend\App\Action
{
    protected $resultPageFactory;
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Packt_Magenest::actortable');
        $resultPage->addBreadcrumb(__('Magenest'), __('Magenest'));
        $resultPage->addBreadcrumb(__('Manage MovieTable'), __('Manage MovieTable'));
        $resultPage->getConfig()->getTitle()->prepend(__('Actor Table'));
        return $resultPage;
    }

}