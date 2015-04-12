<?php

/* ng.html */
class __TwigTemplate_a7df7c6a1a0c0d0eedca81ea49bad0b72d31ba6c2d6c2c09adb2866e365bac66 extends Twig_Template
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
        // line 7
        echo "

";
    }

    // line 1
    public function getrenderAngularItem($__item__ = null, $__prop__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "prop" => $__prop__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "\t\t\t";
            echo " {{ ";
            echo "
\t\t\t";
            // line 3
            echo twig_escape_filter($this->env, (isset($context["item"]) ? $context["item"] : null), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, (isset($context["prop"]) ? $context["prop"] : null), "html", null, true);
            echo "
\t\t\t";
            // line 4
            echo " }} ";
            echo "

";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "ng.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 4,  42 => 3,  37 => 2,  25 => 1,  19 => 7,);
    }
}
