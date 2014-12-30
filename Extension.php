<?php

namespace Bolt\Extension\Dpfavand\Jsonfieldtype;

use Bolt\Application;
use Bolt\BaseExtension;

include_once "JSONField.php";

class Extension extends BaseExtension
{
    
    public function __construct(Application $app)
    {
        parent::__construct($app);
        $this->app['config']->fields->addField(new JSONField());
        if ($this->app['config']->getWhichEnd()=='backend') {
            $this->app['htmlsnippets'] = true;
            $this->app['twig.loader.filesystem']->prependPath(__DIR__."/twig");
        }
    }
  

    public function initialize() {
        $this->addCss('assets/jquery.json-editor.css');
        $this->addJavascript('assets/jquery.json-editor.js', true);
        $this->addJavascript('assets/json2.js', true);
    }

    public function getName()
    {
        return "jsonfieldtype";
    }

}






