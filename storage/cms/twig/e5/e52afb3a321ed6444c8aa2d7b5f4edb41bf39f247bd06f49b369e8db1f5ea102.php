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

/* /var/www/html/glueup/themes/glueup/partials/site/header.htm */
class __TwigTemplate_69e657b25ac577072495f2642becf04322f2118993d8a6014f1190b988e51f32 extends \Twig\Template
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
        $tags = array("partial" => 1, "if" => 8, "component" => 15);
        $filters = array("_" => 9, "page" => 28, "theme" => 28, "media" => 40);
        $functions = array("url" => 9);

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'if', 'component'],
                ['_', 'page', 'theme', 'media'],
                ['url']
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/alert.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "<div class=\"secondary-top-nav navbar-light d-none d-sm-block\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <nav class=\"navbar navbar-light navbar-expand-lg\">
                    <ul class=\"navbar-nav ml-auto\">
                    \t";
        // line 8
        if ((($context["activeLocale"] ?? null) === "zh")) {
            // line 9
            echo "\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            echo url("/account/login");
            echo "\"><i class=\"icon-lock\"></i>";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Log In"]);
            echo "</a></li>
\t\t\t\t\t\t";
        } else {
            // line 11
            echo "                    ";
            // line 12
            echo "                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            echo url("/account/login");
            echo "\"><i class=\"icon-lock\"></i>";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Log In"]);
            echo "</a></li>
                        ";
        }
        // line 14
        echo "                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"\" value=\"Submit\" id=\"pricing-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#support\"><i class=\"icon-support\"></i>";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Support"]);
        echo "</a></li>
                        <li class=\"nav-item lang\"><i class=\"icon-world-map\"></i>";
        // line 15
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("localePicker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class=\"nav-menu fixed-top\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <nav class=\"navbar navbar-expand-lg\">
                    ";
        // line 27
        if ((($context["activeLocale"] ?? null) === "zh")) {
            // line 28
            echo "                    <a class=\"navbar-brand\" href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
            echo "\"><img src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/glueup-logo-zh.svg");
            echo "\" class=\"logo img-fluid lazyload\" alt=\"logo\" /></a>
                    ";
        } else {
            // line 30
            echo "                     <a class=\"navbar-brand\" href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
            echo "\"><img src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/glueup-logo-en.svg");
            echo "\" class=\"logo img-fluid lazyload\" alt=\"logo\" /></a>
                     ";
        }
        // line 32
        echo "                     <div class=\"navbar-brand eb\" style=\"    padding: 0;
    text-align: left;
    height: 35px;
    display: grid;\"href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\"><span style=\"    font-size: 10px;
    font-weight: 300;
    height:15px;
    float: left;
    text-align: left;
    display: inline;\">";
        // line 40
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Formerly"]);
        echo "</span> <img src=\"";
        echo $this->extensions['System\Twig\Extension']->mediaFilter("eventbank-logo.svg");
        echo "\" class=\"logo lazyload\" style=\"\" alt=\"logo\" /></div>
                    <button class=\"navbar-toggler hambutton\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-controls=\"navbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        ";
        // line 43
        echo "                        <div id=\"nav-icon3\">
                          <span></span>
                          <span></span>
                          <span></span>
                          <span></span>
                        </div>
                    </button>
                    ";
        // line 51
        echo "                    <div class=\"collapse navbar-collapse\" id=\"navbar\">
                        <ul class=\"navbar-nav ml-auto\">
                            <li class=\"nav-item dropdown position-static d-none d-sm-block\">
                                <a class=\"nav-link different ";
        // line 54
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 54), "nav_highlight", [], "any", false, false, true, 54) == "features")) {
            echo "active";
        }
        echo "\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Why Glue Up?"]);
        echo " </a>

                                <ul class=\"dropdown-menu w-100 shadow p-0\" id=\"navbarDropdownMega\">
                                    <li class=\"glueupmenu\">
                                        <div class=\"row\">
                                            <div class=\"col-md-8 pr-5 pb-4\">
                                                <div class=\"row pt-2 pb-3\">
                                                    <div class=\"col-md-12 mr-auto\">
                                                        <h6 class=\"intro\">";
        // line 62
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Platform Modules"]);
        echo "</h6>
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"col-md-6\">
                                                        <a class=\"dropdown-item with-icon\" href=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/crm");
        echo "\">
                                                            <i class=\"icon-crm\"></i>
                                                            <span>";
        // line 69
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CRM"]);
        echo "</span>
            
                                                        </a>
                                                    </div>
                                                     <div class=\"col-md-6\">
                                                        <a class=\"dropdown-item with-icon\" href=\"";
        // line 74
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/community");
        echo "\">
                                                            <i class=\"icon-social-share\"></i>
                                                            <span>";
        // line 76
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Community"]);
        echo "</span>
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-6\">
                                                        <a class=\"dropdown-item with-icon\" href=\"";
        // line 80
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/event-management");
        echo "\">
                                                            <i class=\"icon-events\"></i>
                                                            <span>";
        // line 82
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Online & Offline Events"]);
        echo "</span>
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-6\">
                                                        <a class=\"dropdown-item with-icon\" href=\"";
        // line 86
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/membership-management");
        echo "\">
                                                            <i class=\"icon-memberships\"></i>
                                                            <span>";
        // line 88
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Memberships"]);
        echo "</span>
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-6\">
                                                        <a class=\"dropdown-item with-icon\" href=\"";
        // line 92
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/email-campaigns");
        echo "\">
                                                            <i class=\"icon-email-campaigns\"></i>
                                                            <span>";
        // line 94
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email Campaigns"]);
        echo "</span>
                                                            
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-6\">
                                                        <a class=\"dropdown-item with-icon\" href=\"";
        // line 99
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/finance");
        echo "\">
                                                            <i class=\"icon-invoice\"></i>
                                                            <span>";
        // line 101
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Finance & Invoicing"]);
        echo "</span>
                                
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-6\">
                                                        <a class=\"dropdown-item with-icon\" href=\"";
        // line 106
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/tasks");
        echo "\">
                                                            <i class=\"icon-task-icon\"></i>
                                                            <span>";
        // line 108
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tasks"]);
        echo "</span>
                                    
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-6\">
                                                        <a class=\"dropdown-item with-icon\" href=\"";
        // line 113
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/surveys");
        echo "\">
                                                            <i class=\"icon-thumb-full\"></i>
                                                            <span>";
        // line 115
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Surveys"]);
        echo "</span>
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-6\">
                                                        <a class=\"dropdown-item with-icon\" href=\"";
        // line 119
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/cpe-cpd");
        echo "\">
                                                            <i class=\"icon-credits\"></i>
                                                            <span>";
        // line 121
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CPE/CPD Credits"]);
        echo "</span>
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-6\">
                                                        <a class=\"dropdown-item with-icon\" href=\"";
        // line 125
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/website");
        echo "\">
                                                            <i class=\"icon-website-dev\"></i>
                                                            <span>";
        // line 127
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Website"]);
        echo "</span>
                                                        </a>
                                                    </div>
                                                    ";
        // line 142
        echo "                                                </div>
                                            </div>
                                            <div class=\"col-md-4 bg-grey right\">
                                                <div class=\"row pt-2\">
                                                    <div class=\"col-md-12 mr-auto\">
                                                        <h6 class=\"intro\">";
        // line 147
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Mobile Apps"]);
        echo "</h6>
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"col-md-10 pb-2 right-panel\">
                                                        <a class=\"dropdown-item\" href=\"";
        // line 152
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/glue-up-app");
        echo "\">
                                                        <img src=\"";
        // line 153
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/glueup-app-icon.svg");
        echo "\" class=\"app-icon img-fluid lazyload\" alt=\"logo\" />
                                                        <p class=\"link-title mt-3 mb-2\">";
        // line 154
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["My Glue"]);
        echo "</p>
                                                            <p class=\"small mb-0\">";
        // line 155
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["User-friendly mobile app for your attendees and members. "]);
        echo "</p>
                                                        </a>
                                                        <a class=\"dropdown-item\" href=\"";
        // line 157
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/glue-up-manager-app");
        echo "\">
                                                        <img src=\"";
        // line 158
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/glueup-manager-icon.svg");
        echo "\" class=\"app-icon img-fluid lazyload\" alt=\"logo\" />
                                                        <p class=\"link-title mt-3 mb-2\">";
        // line 159
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Manager App"]);
        echo "</p>
                                                            <p class=\"small mb-0\">";
        // line 160
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Manage your operations and stay in the know from anywhere."]);
        echo "</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item dropdown position-static d-none d-sm-block\">
                                <a class=\"nav-link different ";
        // line 170
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 170), "nav_highlight", [], "any", false, false, true, 170) == "products")) {
            echo "active";
        }
        echo "\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Products"]);
        echo " </a>

                                <ul class=\"dropdown-menu w-100 shadow p-0\" id=\"navbarDropdownMega\">
                                    <li class=\"glueupmenu\">
                                        <div class=\"row\">
                                            <div class=\"col-md-8 pb-4\">
                                                <div class=\"row pt-2\">
                                                    <div class=\"col-md-12 mr-auto\">
                                                        <h6 class=\"intro\">";
        // line 178
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["All-in-One Solutions"]);
        echo "</h6>
                                                    </div>
                                                </div>

                                                <div class=\"row\">
                                                    <div class=\"col-md-6\">
                                                        <a class=\"dropdown-item\" href=\"";
        // line 184
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("solutions/event-management-suite");
        echo "\">
                                                            <p class=\"link-title mb-2\">";
        // line 185
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Management Suite"]);
        echo "</p>
                                                            <p class=\"small mb-0\">";
        // line 186
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Plan, promote, execute and evaluate all of your events. "]);
        echo "</p>
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-6\">
                                                        <a class=\"dropdown-item\" href=\"";
        // line 190
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("solutions/membership-management-suite");
        echo "\">
                                                            <p class=\"link-title mb-2\">";
        // line 191
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Membership Management Suite"]);
        echo "</p>
                                                            <p class=\"small mb-0\">";
        // line 192
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Retain, engage and grow your member community. "]);
        echo "</p>
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-6\">
                                                        <a class=\"dropdown-item\" href=\"";
        // line 196
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("solutions/virtual-events-management-suite");
        echo "\">
                                                            <p class=\"link-title mb-2\">";
        // line 197
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Virtual Events Management Suite"]);
        echo "</p>
                                                            <p class=\"small mb-0\">";
        // line 198
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Monetize and enhance your online events and webinars. "]);
        echo "</p>
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-6\">
                                                        <a class=\"dropdown-item\" href=\"";
        // line 202
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("solutions/community-management-suite");
        echo "\">
                                                            <p class=\"link-title mb-2\">";
        // line 203
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Community Management Suite"]);
        echo "</p>
                                                            <p class=\"small mb-0\">";
        // line 204
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Enable your community to thrive and amplify engagement. "]);
        echo "</p>
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-6\">
                                                        <a class=\"dropdown-item\" href=\"";
        // line 208
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("solutions/training-management-suite");
        echo "\">
                                                            <p class=\"link-title mb-2\">";
        // line 209
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Training Management Suite"]);
        echo "</p>
                                                            <p class=\"small mb-0\">";
        // line 210
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Build, market, sell, and analyze courses with ease."]);
        echo "</p>
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-6\">
                                                        <a class=\"dropdown-item disabled\" href=\"\" disabled>
                                                            <p class=\"link-title mb-2\">";
        // line 215
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Donations Management Suite"]);
        echo " <span class=\"badge badge-soon\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Coming Soon"]);
        echo "</span></p>
                                                            <p class=\"small mb-0\">";
        // line 216
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Collect and manage all your donations effortlessly. "]);
        echo "</p>
                                                        </a>
                                                    </div>
                                                </div>
                                                ";
        // line 236
        echo "                                            </div>
                                            <div class=\"col ml-5 bg-grey right\">
                                                <div class=\"row pt-2\">
                                                    <div class=\"col-md-12 mr-auto\">
                                                        <h6 class=\"intro\">";
        // line 240
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["For your Industry"]);
        echo "</h6>
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                        <div class=\"col-md-10 pb-2\">
                                                        <a class=\"dropdown-item \" href=\"";
        // line 245
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("industries/association-management-software");
        echo "\">
                                                        ";
        // line 246
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Associations"]);
        echo "</a>
                                                        <a class=\"dropdown-item\" href=\"";
        // line 247
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("industries/chamber-management-software");
        echo "\">
                                                        ";
        // line 248
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Chambers of Commerce"]);
        echo "</a>
                                                        <a class=\"dropdown-item\" href=\"";
        // line 249
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("industries/conference-management-software");
        echo "\">
                                                        ";
        // line 250
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Conference Organizers"]);
        echo "</a>
                                                        <a class=\"dropdown-item\" href=\"";
        // line 251
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("industries/corporations-management-software");
        echo "\">
                                                        ";
        // line 252
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Corporations"]);
        echo "</a>
                                                        <a class=\"dropdown-item\" href=\"";
        // line 253
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("industries/non-profit-management-software");
        echo "\">
                                                        ";
        // line 254
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Non-Profits"]);
        echo "</a>
                                                        <a class=\"dropdown-item\" href=\"";
        // line 255
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("industries/financial-services-management-software");
        echo "\">
                                                        ";
        // line 256
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Financial Services"]);
        echo "</a>
                                                        <a class=\"dropdown-item\" href=\"";
        // line 257
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("industries/consultancy-firm-management-software");
        echo "\">
                                                        ";
        // line 258
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Consultancy Firms"]);
        echo "</a>
                                                        <a class=\"dropdown-item\" href=\"";
        // line 259
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("industries/training-management-software");
        echo "\">
                                                        ";
        // line 260
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Training & Development"]);
        echo "</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item d-none d-sm-block\"><a class=\"nav-link different  ";
        // line 268
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 268), "id", [], "any", false, false, true, 268) == "pricing")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pricing");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Pricing"]);
        echo "</a></li>
                            <li class=\"nav-item d-none d-sm-block\"><a class=\"nav-link different ";
        // line 269
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 269), "id", [], "any", false, false, true, 269) == "about")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["About"]);
        echo "</a></li>
                            <li class=\"nav-item dropdown position-static d-none d-sm-block\">
                                <a class=\"nav-link different ";
        // line 271
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 271), "nav_highlight", [], "any", false, false, true, 271) == "resources")) {
            echo "active";
        }
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 271), "id", [], "any", false, false, true, 271) == "blog") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 271), "id", [], "any", false, false, true, 271) == "case-studies"))) {
            echo "active";
        }
        echo "\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Resources"]);
        echo " </a>

                                <ul class=\"dropdown-menu w-100 shadow p-0\" id=\"navbarDropdownMega\">
                                    <li class=\"glueupmenu\">
                                        <div class=\"row\">
                                            <div class=\"col-md-8 pr-5 pb-4\">
                                                <div class=\"row pt-2\">
                                                    <div class=\"col-md-12 mr-auto\">
                                                        <h6 class=\"intro\">";
        // line 279
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Resources"]);
        echo "</h6>
                                                    </div>
                                                </div>
                                                <div class=\"row pb-4\">
                                                    <div class=\"col-md-6\">
                                                        <a class=\"dropdown-item with-icon\" href=\"";
        // line 284
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\">
                                                                <i class=\"align-middle icon-content\"></i>
                                                            <span class=\"align-middle\">";
        // line 286
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Blog"]);
        echo "</span>
                                                            <p class=\"small pt-2 mb-0 d-flex\">";
        // line 287
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Expert insights, tips, and articles to help you become smarter."]);
        echo "</p>
    
                                                        </a>
                                                    </div>
                                                    ";
        // line 299
        echo "                                                    <div class=\"col-md-6\">
                                                        <a class=\"dropdown-item with-icon\" href=\"";
        // line 300
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("resources/case-studies");
        echo "\">
                                                                <i class=\"align-middle icon-documents\"></i>
                                                            <span class=\"align-middle\">";
        // line 302
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Case Studies"]);
        echo "</span>
                                                            <p class=\"small pt-2 mb-0 d-flex\">";
        // line 303
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Find out why customers stick with Glue Up."]);
        echo "</p>
        
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-6\">
                                                        <a class=\"dropdown-item with-icon\" href=\"";
        // line 308
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("resources/whitepapers");
        echo "\">
                                                                <i class=\"align-middle icon-documents\"></i>
                                                            <span class=\"align-middle\">";
        // line 310
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Whitepapers"]);
        echo "</span>
                                                            <p class=\"small pt-2 mb-0 d-flex\">";
        // line 311
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Broaden your knowledge with industry whitepapers."]);
        echo "</p>
        
                                                        </a>
                                                    </div>
                                                   ";
        // line 330
        echo "                                                    ";
        // line 337
        echo "                                                    <div class=\"col-md-6\">
                                                        <a class=\"dropdown-item with-icon\" href=\"";
        // line 338
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/integrations");
        echo "\">
                                                                <i class=\"align-middle icon-overview\"></i>
                                                            <span class=\"align-middle\">";
        // line 340
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Integrations"]);
        echo "</span>
                                                            <p class=\"small pt-2 mb-0 d-flex\">";
        // line 341
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Connect the tools you love and use every day with Glue Up."]);
        echo "</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                           <div class=\"col-md-4 bg-grey right pr-5 pb-4\">
                                               <div class=\"row pt-2\">
                                                    <div class=\"col-md-12 mr-auto\">
                                                        <h6 class=\"intro\"><span style=\"color:#fafafa;\">_</span> ";
        // line 349
        echo " </h6>
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"col-md-12 pb-2 right-panel\">
                                                            ";
        // line 360
        echo "                                                            <a class=\"dropdown-item with-icon py-4 my-2\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/security");
        echo "\">
                                                                <i class=\"align-middle icon-lock\"></i>
                                                            <span class=\"align-middle\">";
        // line 362
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Security"]);
        echo "</span>
                                                            <p class=\"small pt-2 mb-0 d-flex\">";
        // line 363
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Learn about how we protect you and your data."]);
        echo "</p>
                                                            </a>
                                                            <a class=\"dropdown-item with-icon py-4 my-2\" href=\"";
        // line 365
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">
                                                                <i class=\"align-middle icon-chat\"></i>
                                                            <span class=\"align-middle\">";
        // line 367
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact"]);
        echo "</span>
                                                            <p class=\"small pt-2 mb-0 d-flex\">";
        // line 368
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["We're here for you. Get in touch if you have any questions or feedback."]);
        echo "</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                              ";
        // line 377
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/mobile-nav.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 378
        echo "                        </ul>
\t\t\t";
        // line 379
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 379), "url", [], "any", false, false, true, 379) == "/download-my-glue")) {
            echo "                         
\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 380
($context["this"] ?? null), "page", [], "any", false, false, true, 380), "url", [], "any", false, false, true, 380) == "/legal/privacy-policy")) {
            echo "  
\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 381
($context["this"] ?? null), "page", [], "any", false, false, true, 381), "url", [], "any", false, false, true, 381) == "/download-manager-app")) {
            echo "  
                        ";
        } else {
            // line 383
            echo "                         <li class=\"nav-item\">
                                <a href=\"\" class=\"btn btn-outline-light my-3 my-sm-0 ml-lg-3 ml-auto\" data-toggle=\"modal\" data-target=\"#contact-paygage\">";
            // line 384
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Book a Demo"]);
            echo "</a>
                            </li> 
                        ";
        }
        // line 386
        echo "                       
                     </div>
                </nav>
            </div>
        </div>
    </div>
     ";
        // line 392
        if (twig_get_attribute($this->env, $this->source, ($context["blogPost"] ?? null), "post", [], "any", false, false, true, 392)) {
            // line 393
            echo "     <div class=\"progress-container\">
                            <div class=\"progress-bar\" id=\"myBar\" value=\"0\" max=\"100\"></div>
                      </div>
    ";
        }
        // line 397
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  781 => 397,  775 => 393,  773 => 392,  765 => 386,  759 => 384,  756 => 383,  751 => 381,  747 => 380,  743 => 379,  740 => 378,  736 => 377,  724 => 368,  720 => 367,  715 => 365,  710 => 363,  706 => 362,  700 => 360,  693 => 349,  682 => 341,  678 => 340,  673 => 338,  670 => 337,  668 => 330,  661 => 311,  657 => 310,  652 => 308,  644 => 303,  640 => 302,  635 => 300,  632 => 299,  625 => 287,  621 => 286,  616 => 284,  608 => 279,  590 => 271,  579 => 269,  569 => 268,  558 => 260,  554 => 259,  550 => 258,  546 => 257,  542 => 256,  538 => 255,  534 => 254,  530 => 253,  526 => 252,  522 => 251,  518 => 250,  514 => 249,  510 => 248,  506 => 247,  502 => 246,  498 => 245,  490 => 240,  484 => 236,  477 => 216,  471 => 215,  463 => 210,  459 => 209,  455 => 208,  448 => 204,  444 => 203,  440 => 202,  433 => 198,  429 => 197,  425 => 196,  418 => 192,  414 => 191,  410 => 190,  403 => 186,  399 => 185,  395 => 184,  386 => 178,  371 => 170,  358 => 160,  354 => 159,  350 => 158,  346 => 157,  341 => 155,  337 => 154,  333 => 153,  329 => 152,  321 => 147,  314 => 142,  308 => 127,  303 => 125,  296 => 121,  291 => 119,  284 => 115,  279 => 113,  271 => 108,  266 => 106,  258 => 101,  253 => 99,  245 => 94,  240 => 92,  233 => 88,  228 => 86,  221 => 82,  216 => 80,  209 => 76,  204 => 74,  196 => 69,  191 => 67,  183 => 62,  168 => 54,  163 => 51,  154 => 43,  147 => 40,  139 => 35,  134 => 32,  126 => 30,  118 => 28,  116 => 27,  99 => 15,  94 => 14,  86 => 12,  84 => 11,  76 => 9,  74 => 8,  66 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/site/header.htm", "");
    }
}
