<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 20/07/2018
 * Time: 4:15 CH
 */

namespace Packt\Magenest\Controller\Adminhtml\Magenest;

use Magento\Backend\App\Action\Context;
use Packt\Magenest\Model\MagenestMovieFactory;

class Save extends \Magento\Framework\App\Action\Action
{
    protected $magenestMovieFactory;

    public function __construct(
        Context $context,
        MagenestMovieFactory $magenestMovieFactory)
    {
        $this->magenestMovieFactory = $magenestMovieFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $data = $this->getRequest()->getPostValue();


        $resultRedirect = $this->resultRedirectFactory->create();

        if ($data) {
//            try
//            {
            $id = $this->getRequest()->getParam('movie_info');
            $model = $this->magenestMovieFactory->create();
            $n = $id['name'];
            $n2 = $id['description'];
            $n3 = $id['rating'];
            $n4 = $id['director_id'];
            $model->setMovieId("");
            $model->setName($n);
            $model->setDescription($n2);
            $model->setRating($n3);
            $model->setDirectorId($n4);
            $model->save();
            $this->messageManager->addSuccessMessage(__('Update Slide Successfully.'));
            $resultRedirect->setPath('magenest/movietable/new');
            return $resultRedirect;

        }
    }
}