<?php

/* gray-template.html */
class __TwigTemplate_058cf472e8f6af111ee17fea98719be743040a66e5910a3893557a7af959d432 extends Twig_Template
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
        // line 13
        echo "
";
    }

    // line 1
    public function getheader()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "
   <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">

    <link href=\"css/grayscale.css\" rel=\"stylesheet\">

    <link href=\"font-awesome/css/font-awesone.min.vss\" rel=\"stylesheet\" type=\"test/css\">

    <link href=\"http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">

";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "gray-template.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 2,  24 => 1,  19 => 13,);
    }
}
