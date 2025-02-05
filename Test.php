<?php

namespace Apps\Fintech\Packages\Test;

use System\Base\BasePackage;

class Test extends BasePackage
{
    //protected $modelToUse = ::class;

    protected $packageName = 'test';

    public $test;

    public function getTestById($id)
    {
        $test = $this->getById($id);

        if ($test) {
            //
            $this->addResponse('Success');

            return;
        }

        $this->addResponse('Error', 1);
    }

    public function addTest($data)
    {
        //
    }

    public function updateTest($data)
    {
        $test = $this->getById($id);

        if ($test) {
            //
            $this->addResponse('Success');

            return;
        }

        $this->addResponse('Error', 1);
    }

    public function removeTest($data)
    {
        $test = $this->getById($id);

        if ($test) {
            //
            $this->addResponse('Success');

            return;
        }

        $this->addResponse('Error', 1);
    }
}