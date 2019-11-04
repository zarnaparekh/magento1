<?php


namespace SimplifiedMagento\FirstModule\Plugin;


class PluginSolution3
{
    public function beforeExecute(\SimplifiedMagento\FirstModule\Controller\Page\HelloWorld $subject)
    {
        echo "before execute sort order 30 " ."</br>";
    }

    public function afterExecute(\SimplifiedMagento\FirstModule\Controller\Page\HelloWorld $subject)
    {
        echo "after execute sort order 30". "</br>";
    }

    public function aroundExecute(\SimplifiedMagento\FirstModule\Controller\Page\HelloWorld $subject, callable $proceed)
    {
        echo "before proceed sort order 30"."</br>";
        $proceed();
        echo "after proceed sort order 30"."</br>";
    }
}