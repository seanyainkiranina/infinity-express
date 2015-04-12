<?php

/* gray.html */
class __TwigTemplate_1a7defcc2dca4196378b774b97a7ba941a8ddb1c57256401129f01437aa58012 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["ie"] = $this->env->loadTemplate("infinity-express.html");
        echo "A

";
        // line 3
        echo $context["ie"]->gethead($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "appName", array()), $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "title", array()), $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "description", array()), $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "author", array()));
        echo "

";
        // line 5
        echo $context["ie"]->getnavigation();
        echo "

";
        // line 7
        echo $context["ie"]->getheader($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "h1", array()), $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "title", array()));
        echo "

";
        // line 9
        echo $context["ie"]->getabout($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "appCtrl", array()), $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ctrlTitle", array()), $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "appItem", array()), $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "appContainer", array()), $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "itemProps", array()));
        echo "

";
        // line 11
        echo $context["ie"]->getfooter($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "appName", array()), $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "appCtrl", array()), $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "appDataSrc", array()), $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "appContainer", array()), $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "author", array()));
        echo "






";
    }

    public function getTemplateName()
    {
        return "gray.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 11,  39 => 9,  34 => 7,  29 => 5,  24 => 3,  19 => 1,);
    }
}
