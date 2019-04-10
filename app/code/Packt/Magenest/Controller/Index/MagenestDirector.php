<?php

namespace Packt\Magenest\Controller\Index;

class MagenestDirector extends \magento\Framework\App\Action\Action
{
    public function execute()
    {
        $magenestmovie = $this->_objectManager ->create('Packt\Magenest\Model\MagenestDirector');
        $magenestmovie->setDirectorId('');
        $magenestmovie->setName('Nguyen Van Dao Dien 2');

        $magenestmovie->save();
        $this->getResponse()->setBody('success');
    }
}