<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /var/www/html/glueup/plugins/martin/forms/components/partials/flash.htm */
class __TwigTemplate_9f625448e9d6418635be2a18ff4f6f8e45359178429fafbf8bf865ae2a7373ca extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("spaceless" => 1, "if" => 6, "for" => 16);
        $filters = array("escape" => 3, "raw" => 27);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['spaceless', 'if', 'for'],
                ['escape', 'raw'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        ob_start(function () { return ''; });
        // line 2
        echo "
    <div class=\"alert alert-";
        // line 3
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 3, $this->source), "html", null, true);
        echo " alert-dismissible\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>

    ";
        // line 6
        if (($context["title"] ?? null)) {
            // line 7
            echo "        <h4>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 7, $this->source), "html", null, true);
            echo "</h4>
    ";
        }
        // line 9
        echo "
    ";
        // line 10
        if (($context["content"] ?? null)) {
            // line 11
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 11, $this->source), "html", null, true);
            echo "</p>
    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if (($context["list"] ?? null)) {
            // line 15
            echo "        <ul>
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 17
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["item"], 17, $this->source), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        </ul>
    ";
        }
        // line 21
        echo "
    </div>

    ";
        // line 24
        if (($context["jscript"] ?? null)) {
            // line 25
            echo "        <script>
            ";
            // line 26
            if (($context["errors"] ?? null)) {
                // line 27
                echo "                var errors = JSON.parse('";
                echo $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 27, $this->source);
                echo "');
            ";
            }
            // line 29
            echo "            ";
            echo $this->sandbox->ensureToStringAllowed(($context["jscript"] ?? null), 29, $this->source);
            echo "
        </script>
    ";
        }
        // line 32
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/plugins/martin/forms/components/partials/flash.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 32,  135 => 29,  129 => 27,  127 => 26,  124 => 25,  122 => 24,  117 => 21,  113 => 19,  104 => 17,  100 => 16,  97 => 15,  95 => 14,  92 => 13,  86 => 11,  84 => 10,  81 => 9,  75 => 7,  73 => 6,  67 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/plugins/martin/forms/components/partials/flash.htm", "");
    }
}
