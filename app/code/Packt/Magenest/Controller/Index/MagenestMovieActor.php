<?php

namespace Packt\Magenest\Controller\Index;

class MagenestMovieActor extends \magento\Framework\App\Action\Action
{
    public function execute()
    {
        $magenestmovie = $this->_objectManager ->create('Packt\Magenest\Model\MagenestMovieActor');
        $magenestmovie->setMovieId('5');
        $magenestmovie->setActorId('2');




        $magenestmovie->save();
        $this->getResponse()->setBody('success');
    }
}