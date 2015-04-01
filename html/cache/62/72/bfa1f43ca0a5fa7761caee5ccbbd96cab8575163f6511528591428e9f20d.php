<?php

/* index2.html */
class __TwigTemplate_6272bfa1f43ca0a5fa7761caee5ccbbd96cab8575163f6511528591428e9f20d extends Twig_Template
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
<table>
<thead>
<tr>
<th>
Zip
</th>
<th>
State
</th>
<th>
City
</th>
<th>
Lat
</th>
<th>
Lon
</th>
</thead>
<tbody>
";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 30
            echo "<tr>
<td>
";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "zip", array()), "html", null, true);
            echo "
</td>
<td>
";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "state", array()), "html", null, true);
            echo "
</td>
<td>
";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "city", array()), "html", null, true);
            echo "
</td>
<td>
";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "lat", array()), "html", null, true);
            echo "
</td>
<td>
";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "lng", array()), "html", null, true);
            echo "
</td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "</tbody>
</table>

</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "index2.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 48,  84 => 44,  78 => 41,  72 => 38,  66 => 35,  60 => 32,  56 => 30,  52 => 29,  28 => 8,  19 => 1,);
    }
}
