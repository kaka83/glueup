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

/* /var/www/html/glueup/themes/glueup/partials/platform/features-nav.htm */
class __TwigTemplate_dcf891a34b11731a2a4b476e8279439fbac4e4f65f9bb2f842c837829ff4addf extends \Twig\Template
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
        $tags = array();
        $filters = array("_" => 6, "page" => 19);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['_', 'page'],
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
        echo "<section>
    <div class=\"container\">
   <div class=\"row no-gutters\">
                    <div class=\"col-md-8 mx-auto pb-2 pt-5\">
                        <div class=\"block text-center\">
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["We mean it when we say it’s <span class=\"line\"><ins>all-in-one</ins></span>"]);
        echo "</h2>
                        </div>
                    </div>
            </div>
    <div class=\"row no-gutters\">
                                            <div class=\"col-md-12 pb-4\">
                                                <div class=\"row pt-2 no-gutters\">
                                                    <div class=\"col-md-12 mr-auto\">
                                                        ";
        // line 15
        echo "                                                    </div>
                                                </div>
                                                <div class=\"row pb-5\">
                                                    <div class=\"col-md-3\">
                                                        <a class=\"dropdown-item with-icon d-flex py-4 px-4 h-100\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/crm");
        echo "\">
                                                            <i class=\"icon-crm\"></i>
                                                            <span>";
        // line 21
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CRM"]);
        echo "<p class=\"small mb-0\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Manage all your contacts in one place and leverage analytics. "]);
        echo "</p></span>
                                                            
                                                        </a>
            
                                                        </a>
                                                    </div>
                                                     <div class=\"col-md-3\">
                                                        <a class=\"dropdown-item with-icon d-flex py-4 px-4 h-100\" href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/community");
        echo "\">
                                                            <i class=\"icon-social-share\"></i>
                                                            <span>";
        // line 30
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Community"]);
        echo "<p class=\"small mb-0\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Give your community a digital place where they can engage."]);
        echo "</p></span>
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-3\">
                                                        <a class=\"dropdown-item with-icon d-flex py-4 px-4 h-100\" href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/event-management");
        echo "\">
                                                            <i class=\"icon-events\"></i>
                                                            <span>";
        // line 36
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Online & Offline Events"]);
        echo "<p class=\"small mb-0\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Plan, promote, execute and evaluate all your events. "]);
        echo "</p></span>
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-3\">
                                                        <a class=\"dropdown-item with-icon d-flex py-4 px-4 h-100\" href=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/membership-management");
        echo "\">
                                                            <i class=\"icon-memberships\"></i>
                                                            <span>";
        // line 42
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Memberships"]);
        echo "<p class=\"small mb-0\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Automate membership processes and provide members premium experience."]);
        echo "</p></span>
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-3\">
                                                        <a class=\"dropdown-item with-icon d-flex py-4 px-4 h-100\" href=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/email-campaigns");
        echo "\">
                                                            <i class=\"icon-email-campaigns\"></i>
                                                            <span>";
        // line 48
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email Campaigns"]);
        echo "<p class=\"small mb-0\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Create, send, and deliver professional email campaigns of any kind. "]);
        echo "</p></span>
                                                            
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-3\">
                                                        <a class=\"dropdown-item with-icon d-flex py-4 px-4 h-100\" href=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/finance");
        echo "\">
                                                            <i class=\"icon-invoice\"></i>
                                                            <span>";
        // line 55
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Finance & Invoicing"]);
        echo "<p class=\"small mb-0\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Streamline all your finance-related processes and grow revenue."]);
        echo "</p></span>
                                
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-3\">
                                                        <a class=\"dropdown-item with-icon d-flex py-4 px-4 h-100\" href=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/tasks");
        echo "\">
                                                            <i class=\"icon-task-icon\"></i>
                                                            <span>";
        // line 62
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tasks"]);
        echo "<p class=\"small mb-0\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Get things done from an idea to a successful completion."]);
        echo "</p></span>
                                    
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-3\">
                                                        <a class=\"dropdown-item with-icon d-flex py-4 px-4 h-100\" href=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/surveys");
        echo "\">
                                                            <i class=\"icon-thumb-full\"></i>
                                                            <span>";
        // line 69
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Surveys"]);
        echo "<p class=\"small mb-0\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Find answers to your questions with surveys, quizzes, and polls."]);
        echo "</p></span>
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-3\">
                                                        <a class=\"dropdown-item with-icon d-flex py-4 px-4 h-100\" href=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/cpe-cpd");
        echo "\">
                                                            <i class=\"icon-event-tags\"></i>
                                                            <span>";
        // line 75
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CPE/CPD Credits"]);
        echo "<p class=\"small mb-0\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Manage and scale up your trainings and certification courses."]);
        echo "</p></span>
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-3\">
                                                        <a class=\"dropdown-item with-icon d-flex py-4 px-4 h-100\" href=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/website");
        echo "\">
                                                            <i class=\"icon-article-left\"></i>
                                                            <span>";
        // line 81
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Website"]);
        echo "<p class=\"small mb-0\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Upgrade your online presence with a fully integrated website."]);
        echo "</p></span>
                                                        </a>
                                                    </div>
                                                    ";
        // line 90
        echo "                                                    ";
        // line 96
        echo "                                                    <div class=\"col-md-3\">
                                                        <a class=\"dropdown-item with-icon d-flex py-4 px-4 h-100\" href=\"";
        // line 97
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/glue-up-app");
        echo "\">
                                                            <i class=\"icon-glue-up-app\"></i>
                                                            <span>";
        // line 99
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["My Glue"]);
        echo "<p class=\"small mb-0\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Provide attendees and members mobile app to engage anywhere."]);
        echo "</p></span>
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-3\">
                                                        <a class=\"dropdown-item with-icon d-flex py-4 px-4 h-100\" href=\"";
        // line 103
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/glue-up-manager-app");
        echo "\">
                                                            <i class=\"icon-glue-up-manager-app\"></i>
                                                            <span>";
        // line 105
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Manager App"]);
        echo "<p class=\"small mb-0\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Manage your operations and stay in the know on the go."]);
        echo "</p></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            ";
        // line 136
        echo "                                        </div>
    </div>
";
        // line 139
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/platform/features-nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 139,  265 => 136,  255 => 105,  250 => 103,  241 => 99,  236 => 97,  233 => 96,  231 => 90,  223 => 81,  218 => 79,  209 => 75,  204 => 73,  195 => 69,  190 => 67,  180 => 62,  175 => 60,  165 => 55,  160 => 53,  150 => 48,  145 => 46,  136 => 42,  131 => 40,  122 => 36,  117 => 34,  108 => 30,  103 => 28,  91 => 21,  86 => 19,  80 => 15,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/platform/features-nav.htm", "");
    }
}
