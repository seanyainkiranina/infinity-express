<?php

/* error.html */
class __TwigTemplate_eabd0ec80bb8e5fad8488ef2f15dfededef2cb2d26af659f265410af4127719d extends Twig_Template
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
<h1>An Error Occured</h1>
 
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
        return "error.html";
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
