<?php

/* infinity-express.html */
class __TwigTemplate_12035abaf5dabdb69958a8ad8c1e22ef5178ad546ec7b43ccb2c4065ee1525b8 extends Twig_Template
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
        // line 32
        echo "

";
        // line 64
        echo "
";
        // line 83
        echo "

";
        // line 111
        echo "

";
    }

    // line 1
    public function gethead($__appName__ = null, $__title__ = null, $__description__ = null, $__author__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "appName" => $__appName__,
            "title" => $__title__,
            "description" => $__description__,
            "author" => $__author__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "<!DOCTYPE html>
<html lang=\"en\" ng-app=\"";
            // line 3
            echo twig_escape_filter($this->env, (isset($context["appName"]) ? $context["appName"] : null), "html", null, true);
            echo "\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
            echo "\">
    <meta name=\"author\" content=\"";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["author"]) ? $context["author"] : null), "html", null, true);
            echo "\">

    <title>";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"css/grayscale.css\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">


</head>

<body id=\"page-top\" data-spy=\"scroll\" data-target=\".navbar-fixed-top\">

";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 34
    public function getnavigation()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 35
            echo "    <!-- Navigation -->
    <nav class=\"navbar navbar-custom navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                    <i class=\"fa fa-bars\"></i>
                </button>
                <a class=\"navbar-brand page-scroll\" href=\"#page-top\">
                    <i class=\"fa fa-play-circle\"></i> 
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse navbar-right navbar-main-collapse\">
                <ul class=\"nav navbar-nav\">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class=\"hidden\">
                        <a href=\"#page-top\"></a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#about\">About</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 65
    public function getheader($__h1__ = null, $__intro__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "h1" => $__h1__,
            "intro" => $__intro__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 66
            echo "    <!-- Intro Header -->
    <header class=\"intro\">
        <div class=\"intro-body\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-8 col-md-offset-2\">
                        <h1 class=\"brand-heading\">";
            // line 72
            echo twig_escape_filter($this->env, (isset($context["h1"]) ? $context["h1"] : null), "html", null, true);
            echo "</h1>
                        <p class=\"intro-text\">";
            // line 73
            echo twig_escape_filter($this->env, (isset($context["intro"]) ? $context["intro"] : null), "html", null, true);
            echo "</p>
                        <a href=\"#about\" class=\"btn btn-circle page-scroll\">
                            <i class=\"fa fa-angle-double-down animated\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 85
    public function getabout($__ctrlName__ = null, $__h2__ = null, $__item__ = null, $__container__ = null, $__props__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "ctrlName" => $__ctrlName__,
            "h2" => $__h2__,
            "item" => $__item__,
            "container" => $__container__,
            "props" => $__props__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 86
            echo "
  ";
            // line 87
            $context["ang"] = $this->env->loadTemplate("ng.html");
            // line 88
            echo "
    <!-- About Section -->
    <section id=\"about\" class=\"container content-section text-center\">
        <div class=\"row\" ng-controller=\"";
            // line 91
            echo twig_escape_filter($this->env, (isset($context["ctrlName"]) ? $context["ctrlName"] : null), "html", null, true);
            echo "\">
            <div class=\"col-lg-8 col-lg-offset-2\">
                <h2>";
            // line 93
            echo twig_escape_filter($this->env, (isset($context["h2"]) ? $context["h2"] : null), "html", null, true);
            echo "</h2>
\t\t<ul ng-repeat=\"";
            // line 94
            echo twig_escape_filter($this->env, (isset($context["item"]) ? $context["item"] : null), "html", null, true);
            echo " in ";
            echo twig_escape_filter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true);
            echo "\">
\t\t<li>
\t\t     <ul>
\t\t\t";
            // line 97
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["props"]) ? $context["props"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["prop"]) {
                // line 98
                echo "\t\t\t\t<li>
\t\t\t";
                // line 99
                echo $context["ang"]->getrenderAngularItem((isset($context["item"]) ? $context["item"] : null), $context["prop"]);
                echo "
                 \t\t</li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prop'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "\t\t    </ul>

               </li>
\t       </ul>
\t\t
            </div>
        </div>
    </section>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 113
    public function getfooter($__appName__ = null, $__ctrlName__ = null, $__ctrlUrl__ = null, $__ctrlContainer__ = null, $__copyRight__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "appName" => $__appName__,
            "ctrlName" => $__ctrlName__,
            "ctrlUrl" => $__ctrlUrl__,
            "ctrlContainer" => $__ctrlContainer__,
            "copyRight" => $__copyRight__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 114
            echo "    <!-- Footer -->
    <footer>
        <div class=\"container text-center\">
            <p>Copyright &copy; ";
            // line 117
            echo twig_escape_filter($this->env, (isset($context["copyRight"]) ? $context["copyRight"] : null), "html", null, true);
            echo "</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src=\"js/jquery.js\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"js/bootstrap.min.js\"></script>

    <!-- Plugin JavaScript -->
    <script src=\"js/jquery.easing.min.js\"></script>


    <!-- Custom Theme JavaScript -->
    <script src=\"js/grayscale.js\"></script>
    <script src=\"js/angular.min.js\"></script>
    <script type=\"text/javascript\">

var ";
            // line 136
            echo twig_escape_filter($this->env, (isset($context["appName"]) ? $context["appName"] : null), "html", null, true);
            echo "  = angular.module('";
            echo twig_escape_filter($this->env, (isset($context["appName"]) ? $context["appName"] : null), "html", null, true);
            echo "', []);

";
            // line 138
            echo twig_escape_filter($this->env, (isset($context["appName"]) ? $context["appName"] : null), "html", null, true);
            echo ".controller('";
            echo twig_escape_filter($this->env, (isset($context["ctrlName"]) ? $context["ctrlName"] : null), "html", null, true);
            echo "', function (\$scope,\$http){



         \$http.get('";
            // line 142
            echo twig_escape_filter($this->env, (isset($context["ctrlUrl"]) ? $context["ctrlUrl"] : null), "html", null, true);
            echo "').
\t\tsuccess(function(data){

\t\t\t\$scope.";
            // line 145
            echo twig_escape_filter($this->env, (isset($context["ctrlContainer"]) ? $context["ctrlContainer"] : null), "html", null, true);
            echo "=data;



\t\t});



});
</script>

</body>

</html>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "infinity-express.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 145,  330 => 142,  321 => 138,  314 => 136,  292 => 117,  287 => 114,  272 => 113,  253 => 102,  244 => 99,  241 => 98,  237 => 97,  229 => 94,  225 => 93,  220 => 91,  215 => 88,  213 => 87,  210 => 86,  195 => 85,  174 => 73,  170 => 72,  162 => 66,  150 => 65,  111 => 35,  102 => 34,  72 => 13,  67 => 11,  63 => 10,  53 => 3,  50 => 2,  36 => 1,  30 => 111,  26 => 83,  23 => 64,  19 => 32,);
    }
}
