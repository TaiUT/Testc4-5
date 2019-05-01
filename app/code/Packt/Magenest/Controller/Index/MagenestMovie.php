<?php

namespace Packt\Magenest\Controller\Index;

class MagenestMovie extends \magento\Framework\App\Action\Action
{
    public function execute()
    {
        $magenestmovie = $this->_objectManager ->create('Packt\Magenest\Model\MagenestMovie');
        $magenestmovie->setMovieId('');
        $magenestmovie->setName('Herro2');
        $magenestmovie->setDescription('herro2');
        $magenestmovie->setRating('50');
        $magenestmovie->setDirectorId('2');
        $magenestmovie->save();
        $this->getResponse()->setBody('success');

    }
}