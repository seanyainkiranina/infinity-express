<?php

/* index3.html */
class __TwigTemplate_4a0d8951caafd2c3bb629cd195a7c66f156108d6a0c144b5bd067f5fe5c38be3 extends Twig_Template
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
        echo "<html>

<head>
</head>
<body>
<h1>test 3</h1>
 
";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", null, "America/Chicago"), "html", null, true);
        echo "


</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "index3.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 8,  19 => 1,);
    }
}
