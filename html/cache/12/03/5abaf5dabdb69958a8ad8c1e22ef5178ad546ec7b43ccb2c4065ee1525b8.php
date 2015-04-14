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
        // line 38
        echo "

";
        // line 70
        echo "
";
        // line 89
        echo "

";
        // line 125
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
<style>
  table tr td{
\tcolor:#000000;
    }

</style>


</head>

<body id=\"page-top\" data-spy=\"scroll\" data-target=\".navbar-fixed-top\">

";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 40
    public function getnavigation()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 41
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

    // line 71
    public function getheader($__h1__ = null, $__intro__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "h1" => $__h1__,
            "intro" => $__intro__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 72
            echo "    <!-- Intro Header -->
    <header class=\"intro\">
        <div class=\"intro-body\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-8 col-md-offset-2\">
                        <h1 class=\"brand-heading\">";
            // line 78
            echo twig_escape_filter($this->env, (isset($context["h1"]) ? $context["h1"] : null), "html", null, true);
            echo "</h1>
                        <p class=\"intro-text\">";
            // line 79
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

    // line 91
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
            // line 92
            echo "
  ";
            // line 93
            $context["ang"] = $this->env->loadTemplate("ng.html");
            // line 94
            echo "
    <!-- About Section -->
    <section id=\"about\" class=\"container content-section text-center\">
        <div class=\"row\" ng-controller=\"";
            // line 97
            echo twig_escape_filter($this->env, (isset($context["ctrlName"]) ? $context["ctrlName"] : null), "html", null, true);
            echo "\">
            <div class=\"col-lg-8 col-lg-offset-2\">
                <h2>";
            // line 99
            echo twig_escape_filter($this->env, (isset($context["h2"]) ? $context["h2"] : null), "html", null, true);
            echo "</h2>
                  <table st-table=\"";
            // line 100
            echo twig_escape_filter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true);
            echo "\" 
class=\"table table-striped\">
                   <thead>
                   <tr>
\t\t\t";
            // line 104
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["props"]) ? $context["props"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["prop"]) {
                // line 105
                echo "                          <th>";
                echo twig_escape_filter($this->env, $context["prop"], "html", null, true);
                echo "</th>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prop'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "                   </tr>
                   </thead>
                   <tbody>
\t\t<tr ng-repeat=\"";
            // line 110
            echo twig_escape_filter($this->env, (isset($context["item"]) ? $context["item"] : null), "html", null, true);
            echo " in ";
            echo twig_escape_filter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true);
            echo "\">
\t\t\t";
            // line 111
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["props"]) ? $context["props"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["prop"]) {
                // line 112
                echo "\t\t\t\t<td>
\t\t\t";
                // line 113
                echo $context["ang"]->getrenderAngularItem((isset($context["item"]) ? $context["item"] : null), $context["prop"]);
                echo "
                 \t\t</td>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prop'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "               </tr>
                   </tbody>

                  </table>
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

    // line 127
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
            // line 128
            echo "    <!-- Footer -->
    <footer>
        <div class=\"container text-center\">
            <p>Copyright &copy; ";
            // line 131
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
    <script src=\"js/smart-table.min.js\"></script>
    <script type=\"text/javascript\">

var ";
            // line 151
            echo twig_escape_filter($this->env, (isset($context["appName"]) ? $context["appName"] : null), "html", null, true);
            echo "  = angular.module('";
            echo twig_escape_filter($this->env, (isset($context["appName"]) ? $context["appName"] : null), "html", null, true);
            echo "', []);

";
            // line 153
            echo twig_escape_filter($this->env, (isset($context["appName"]) ? $context["appName"] : null), "html", null, true);
            echo ".controller('";
            echo twig_escape_filter($this->env, (isset($context["ctrlName"]) ? $context["ctrlName"] : null), "html", null, true);
            echo "', function (\$scope,\$http){



         \$http.get('";
            // line 157
            echo twig_escape_filter($this->env, (isset($context["ctrlUrl"]) ? $context["ctrlUrl"] : null), "html", null, true);
            echo "').
\t\tsuccess(function(data){

\t\t\t\$scope.";
            // line 160
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
        return array (  366 => 160,  360 => 157,  351 => 153,  344 => 151,  321 => 131,  316 => 128,  301 => 127,  282 => 116,  273 => 113,  270 => 112,  266 => 111,  260 => 110,  255 => 107,  246 => 105,  242 => 104,  235 => 100,  231 => 99,  226 => 97,  221 => 94,  219 => 93,  216 => 92,  201 => 91,  180 => 79,  176 => 78,  168 => 72,  156 => 71,  117 => 41,  108 => 40,  72 => 13,  67 => 11,  63 => 10,  53 => 3,  50 => 2,  36 => 1,  30 => 125,  26 => 89,  23 => 70,  19 => 38,);
    }
}