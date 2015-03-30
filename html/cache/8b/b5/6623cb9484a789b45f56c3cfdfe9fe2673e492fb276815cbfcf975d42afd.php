<?php

/* index.html */
class __TwigTemplate_8bb56623cb9484a789b45f56c3cfdfe9fe2673e492fb276815cbfcf975d42afd extends Twig_Template
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
<h1>test</h1>
 
";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", null, "Europe/Paris"), "html", null, true);
        echo "
";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["zip"]) ? $context["zip"] : null), "html", null, true);
        echo "

";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 12
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
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
        return array (  49 => 14,  41 => 12,  37 => 11,  32 => 9,  28 => 8,  19 => 1,);
    }
}
