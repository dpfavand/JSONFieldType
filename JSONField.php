<?php

namespace Bolt\Extension\Dpfavand\Jsonfieldtype;

use Bolt\Field\FieldInterface;

class JSONField implements FieldInterface
{
    
    public function getName()
    {
        return 'json';
    }
    
    public function getTemplate()
    {
        return '_jsonfield.twig';
    }
    
    public function getStorageType()
    {
        return 'text';
    }
    
    public function getStorageOptions()
    {
        return array('default'=>'');
    }
    
}
