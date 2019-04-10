<?php

namespace Packt\Magenest\Controller\Index;

class MagenestActor extends \magento\Framework\App\Action\Action
{
    public function execute()
    {
        $magenestmovie = $this->_objectManager ->create('Packt\Magenest\Model\MagenestActor');
        $magenestmovie->setActorId('');
        $magenestmovie->setName('Nguyen Van b');


        $magenestmovie->save();
        $this->getResponse()->setBody('success');
    }
}