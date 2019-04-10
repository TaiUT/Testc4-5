<?php

namespace Packt\Magenest\Controller\Index;

class MagenestMovie extends \magento\Framework\App\Action\Action
{
    public function execute()
    {
        $magenestmovie = $this->_objectManager ->create('Packt\Magenest\Model\MagenestMovie');
        $magenestmovie->setMovieId('');
        $magenestmovie->setName('Herro');
        $magenestmovie->setDescription('herro1');
        $magenestmovie->setRatting('50');
        $magenestmovie->setDirectorId('2');

        $magenestmovie->save();
        $this->getResponse()->setBody('success');


    }
}