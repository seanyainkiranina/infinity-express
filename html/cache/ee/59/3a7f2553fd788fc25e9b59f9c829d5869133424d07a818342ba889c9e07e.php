<?php

/* index.html */
class __TwigTemplate_ee593a7f2553fd788fc25e9b59f9c829d5869133424d07a818342ba889c9e07e extends Twig_Template
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
<h1>test 2</h1>
 
";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", null, "America/Chicago"), "html", null, true);
        echo "

";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "zip", array()), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 13,  37 => 11,  33 => 10,  28 => 8,  19 => 1,);
    }
}
