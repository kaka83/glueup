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

/* /var/www/html/glueup/themes/glueup/partials/site/footer.htm */
class __TwigTemplate_d35abf508d602b5e9cc125b22e97c375c4b330ea9f8bd02afd2ab9b1e60543d4 extends \Twig\Template
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
        $tags = array("component" => 216, "if" => 233);
        $filters = array("_" => 9, "page" => 13, "staticPage" => 169, "theme" => 231, "escape" => 232, "date" => 232);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component', 'if'],
                ['_', 'page', 'staticPage', 'theme', 'escape', 'date'],
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
        // line 3
        echo "<footer class=\"footer section pb-4\">
    <nav aria-labelledby=\"sitemap\" class=\"\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-3 mr-auto col-sm-6\">
\t\t\t   
    \t\t\t\t\t<h4 class=\"text-capitalize mb-2\">";
        // line 9
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Glue Up"]);
        echo "</h4>
    \t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-35 list-break\">
\t\t\t\t                                 
                                                    <li>
                                                        <a class=\"\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/crm");
        echo "\">
                                                            <span>";
        // line 14
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CRM"]);
        echo "</span>
                                                    </li>
                                                   <li>
                                                        </a>
                                                        <a class=\"\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/community");
        echo "\">
                                                            <span>";
        // line 19
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Community"]);
        echo "</span>
                                                        </a>
                                                   </li>
                                                   <li>
                                                        <a class=\"\" href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/event-management");
        echo "\">
                                                            <span>";
        // line 24
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Online & Offline Events"]);
        echo "</span>
                                                        </a>
                                                    </li>
                                                   <li>
                                                        <a class=\"\" href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/membership-management");
        echo "\">
                                                            <span>";
        // line 29
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Memberships"]);
        echo "</span>
                                                        </a>
                                                    </li>
                                                   <li>
                                                        <a class=\"\" href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/email-campaigns");
        echo "\">
                                                            <span>";
        // line 34
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email Campaigns"]);
        echo "</span>
                                                            
                                                        </a>
                                                    </li>
                                                   <li>
                                                        <a class=\"\" href=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/finance");
        echo "\">
                                                            <span>";
        // line 40
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Finance & Invoicing"]);
        echo "</span>
                                
                                                        </a>
                                                    </li>
                                                   <li>
                                                        <a class=\"\" href=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/tasks");
        echo "\">
                                                            <span>";
        // line 46
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tasks"]);
        echo "</span>
                                    
                                                        </a>
                                                    </li>
                                                   <li>
                                                        <a class=\"\" href=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/surveys");
        echo "\">
                                                            <span>";
        // line 52
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Surveys"]);
        echo "</span>
                                                        </a>
                                                    </li>
                                                   <li>
                                                        <a class=\"\" href=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/cpe-cpd");
        echo "\">
                                                            <span>";
        // line 57
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CPE/CPD Credits"]);
        echo "</span>
                                                        </a>
                                                    </li>
                                                   <li>
                                                        <a class=\"\" href=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/website");
        echo "\">
                                                            <span>";
        // line 62
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Website"]);
        echo "</span>
                                                        </a>
                                                    </li>
                                                   <li>
                                                        <a class=\"\" href=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/integrations");
        echo "\">
                                                            <span>";
        // line 67
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Integrations"]);
        echo "</span>
                                                        </a>
                                                    </li>
                                                   ";
        // line 75
        echo "                                                   </ul>
                                        <h4 class=\"text-capitalize mb-2\">";
        // line 76
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Mobile Apps"]);
        echo "</h4>
                                        <ul class=\"list-unstyled footer-menu lh-35\">
\t\t\t\t                                 <li>
                                                        <a class=\"\" href=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/glue-up-app");
        echo "\">
                                                            <span>";
        // line 80
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["My Glue"]);
        echo "</span>
                                                        </a>
                                                    </li>
                                                <li>
                                                        <a class=\"\" href=\"";
        // line 84
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/glue-up-manager-app");
        echo "\">
                                                            <span>";
        // line 85
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Manager Up"]);
        echo "</span>
                                                        </a>
                                                    </li>
                                        </ul>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 mr-auto col-sm-6\">
\t\t\t\t\t<h4 class=\"text-capitalize mb-2\">";
        // line 91
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Products"]);
        echo "</h4>
\t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-35\">
\t\t\t\t\t\t                        
                                                <li>
                                                        <a class=\"\" href=\"";
        // line 95
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("solutions/event-management-suite");
        echo "\">
                                                            <span>";
        // line 96
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Management Suite"]);
        echo "</span>
                                                        </a>
                                                    </li>
                                                   <li>
                                                        <a class=\"\" href=\"";
        // line 100
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("solutions/membership-management-suite");
        echo "\">
                                                            <span>";
        // line 101
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Membership Management Suite"]);
        echo "</span>
                                                        </a>
                                                   </li>
                                                   <li>
                                                        <a class=\"\" href=\"";
        // line 105
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("solutions/virtual-events-management-suite");
        echo "\">
                                                            <span>";
        // line 106
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Virtual Events Management Suite"]);
        echo "</span>
                                                        </a>
                                                   </li>
                                                   <li>
                                                        <a class=\"\" href=\"";
        // line 110
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("solutions/community-management-suite");
        echo "\">
                                                            <span>";
        // line 111
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Community Management Suite"]);
        echo "</span>
                                                        </a>
                                                   </li>
                                                   <li>
                                                        <a class=\"\" href=\"";
        // line 115
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("solutions/training-management-suite");
        echo "\">
                                                            <span>";
        // line 116
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Training Management Suite"]);
        echo "</span>
                                                        </a>
                                                   </li>
                                                   <li>
                                                        <a class=\"\" href=\"";
        // line 120
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("solutions/donations-management-suite");
        echo "\">
                                                            <span>";
        // line 121
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Donations Management Suite"]);
        echo "</span>
                                                        </a>
                                                   </li>
                                                   <li>
                                                        <a class=\"\" href=\"";
        // line 125
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pricing");
        echo "\">
                                                            <span>";
        // line 126
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Pricing"]);
        echo "</span>
                                                    </li>
                                                 </ul>
                    <h4 class=\"text-capitalize mb-2\">";
        // line 129
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Per Industry"]);
        echo "</h4>
\t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-35\">
\t\t\t\t\t\t
                                                <li>
                                                       <a class=\"\" href=\"";
        // line 133
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("industries/association-management-software");
        echo "\">
                                                        <span>";
        // line 134
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Associations"]);
        echo "</span></a>
                                                    </li>
                                                    <li>
                                                        <a class=\"\" href=\"";
        // line 137
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("industries/chamber-management-software");
        echo "\">
                                                        <span>";
        // line 138
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Chambers of Commerce"]);
        echo "</span></a>
                                                    </li>
                                                    <li>
                                                        <a class=\"\" href=\"";
        // line 141
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("industries/conference-management-software");
        echo "\">
                                                        <span>";
        // line 142
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Conference Organizers"]);
        echo "</span></a>
                                                    </li>
                                                    <li>
                                                        <a class=\"\" href=\"";
        // line 145
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("industries/corporations-management-software");
        echo "\">
                                                        <span>";
        // line 146
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Corporations"]);
        echo "</span></a>
                                                    </li>
                                                    <li>
                                                        <a class=\"\" href=\"";
        // line 149
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("industries/non-profit-management-software");
        echo "\">
                                                        <span>";
        // line 150
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Non-Profits"]);
        echo "</span></a>
                                                    </li>
                                                    <li>
                                                        <a class=\"\" href=\"";
        // line 153
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("industries/financial-services-management-software");
        echo "\">
                                                        <span>";
        // line 154
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Financial Services"]);
        echo "</span></a>
                                                    </li>
                                                    <li>
                                                        <a class=\"\" href=\"";
        // line 157
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("industries/consultancy-firm-management-software");
        echo "\">
                                                        <span>";
        // line 158
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Consultancy Firms"]);
        echo "</span></a>
                                                    </li>
                                                    <li>
                                                        <a class=\"\" href=\"";
        // line 161
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("industries/training-management-software");
        echo "\">
                                                        <span>";
        // line 162
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Training & Development"]);
        echo "</span></a>
                                                        </li>
                                                 </ul>
            </div>              
\t\t\t<div class=\"col-lg-3 mr-auto col-sm-6\">
    \t\t\t        <h4 class=\"text-capitalize mb-2\">";
        // line 167
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Resources"]);
        echo "</h4>
    \t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-35 list-break\">
    \t\t\t\t\t    <li><a href=\"";
        // line 169
        echo RainLab\Pages\Classes\Page::url("demo");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Request a Demo"]);
        echo "</a></li>
    \t\t\t\t\t\t<li><a href=\"";
        // line 170
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Blog"]);
        echo "</a></li>
    \t\t\t\t\t\t<li><a href=\"";
        // line 171
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("resources/case-studies");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Case Studies"]);
        echo "</a></li>
    \t\t\t\t\t\t<li><a href=\"";
        // line 172
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("resources/whitepapers");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Whitepapers"]);
        echo "</a></li>
    \t\t\t\t\t";
        // line 174
        echo "    \t\t\t\t\t";
        // line 175
        echo "    \t\t\t\t\t";
        // line 176
        echo "    \t\t\t\t\t\t<li><a href=\"#support\" value=\"Submit\" id=\"support-link\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#support\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Support"]);
        echo "</a></li>
    \t\t\t\t\t\t<li><a href=\"";
        // line 177
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/security");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Security"]);
        echo "</a></li>
    \t\t\t\t\t\t
    \t\t\t\t\t\t";
        // line 180
        echo "    \t\t\t\t\t</ul>
    \t\t\t\t\t<h4 class=\"text-capitalize mb-2\">";
        // line 181
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Legal"]);
        echo "</h4>
    \t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-35 list-break\">
    \t\t\t\t\t\t<li><a href=\"";
        // line 183
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("legal/terms-and-conditions-organizations");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Organizations Terms"]);
        echo "</a></li>
    \t\t\t\t\t\t<li><a href=\"";
        // line 184
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("legal/terms-and-conditions-users");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["User Terms"]);
        echo "</a></li>
    \t\t\t\t\t\t";
        // line 186
        echo "    \t\t\t\t\t\t<li><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("legal/privacy-policy");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Privacy Policy"]);
        echo "</a></li>
    \t\t\t\t\t\t<li><a href=\"";
        // line 187
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("legal/cookie-policy");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Cookie Policy"]);
        echo "</a></li>
    \t\t\t\t\t\t<li><a href=\"";
        // line 188
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("legal/legal-notice");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Legal Notice"]);
        echo "</a></li>
    \t\t\t\t\t\t<li><a href=\"";
        // line 189
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("legal/privacy-policy");
        echo "#transfers_data\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["GDPR"]);
        echo "</a></li>
    \t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t\t";
        // line 197
        echo "\t\t\t<div class=\"col-lg-2 ml-auto col-sm-6\">
\t\t\t            <h4 class=\"text-capitalize mb-2\">";
        // line 198
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Company"]);
        echo "</h4>
    \t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-35 list-break\">
    \t\t\t\t\t\t<li><a href=\"";
        // line 200
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["About"]);
        echo "</a></li>
    \t\t\t\t\t\t<li><a href=\"";
        // line 201
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("culture");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Culture"]);
        echo "</a></li>
    \t\t\t\t\t";
        // line 203
        echo "    \t\t\t\t\t";
        // line 204
        echo "    \t\t\t\t\t\t<li><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact Us"]);
        echo "</a></li>
    \t\t\t\t\t\t";
        // line 206
        echo "    \t\t\t\t\t</ul>
    \t\t\t\t\t<h4 class=\"text-capitalize mb-2\">";
        // line 207
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Follow Us"]);
        echo "</h4>
    \t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-35\">
        \t\t\t\t\t<li><a href=\"https://www.facebook.com/eventbank\"><i class=\"icon-facebook mr-2\"></i>";
        // line 209
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Facebook"]);
        echo "</a></li>
    \t\t\t\t\t\t<li><a href=\"https://twitter.com/Glue_Up\"><i class=\"icon-twitter mr-2\"></i>";
        // line 210
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Twitter"]);
        echo "</a></li>
    \t\t\t\t\t\t<li><a href=\"https://www.linkedin.com/company/glue-up\"><i class=\"icon-linkedin mr-2 \"></i>";
        // line 211
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Linked In"]);
        echo "</a></li>
    \t\t\t\t\t</ul>
    \t\t\t\t\t <ul class=\"list-unstyled footer-menu lh-35 mb-0 footer-lang\">
        \t\t\t\t<li><h4 class=\"text-capitalize mb-2\"><i class=\"icon-language mr-1\"></i>";
        // line 214
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Language"]);
        echo "</h4></li>
    \t\t\t
\t\t        ";
        // line 216
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("extendedLocalePicker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 217
        echo "\t\t        \t\t</ul>
\t\t\t</div>
\t\t\t";
        // line 226
        echo "\t\t
\t\t
\t</div>
\t<div class=\"row pb-0\">
\t\t\t<div class=\"col-lg-3 mx-auto text-center d-block flow-column pb-0\">
\t\t    \t<img src=\"";
        // line 231
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Glueup-symbol.svg");
        echo "\" style=\"width:50px; height:auto;\" class=\"logo img-fluid lazyload pb-2\" alt=\"Glue Up Official Logo\" /><br>
\t\t    \t<span style=\"color:#7a7a7a;\" class=\"pt-3 pb-0\">&copy;Glue Up ";
        // line 232
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</span>
\t\t    \t";
        // line 233
        if ((($context["CurrentLanguage"] ?? null) === "cn")) {
        }
        // line 234
        echo "\t\t\t</div>
\t\t</div>
</nav>
</footer>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  581 => 234,  578 => 233,  574 => 232,  570 => 231,  563 => 226,  559 => 217,  555 => 216,  550 => 214,  544 => 211,  540 => 210,  536 => 209,  531 => 207,  528 => 206,  521 => 204,  519 => 203,  513 => 201,  507 => 200,  502 => 198,  499 => 197,  489 => 189,  483 => 188,  477 => 187,  470 => 186,  464 => 184,  458 => 183,  453 => 181,  450 => 180,  443 => 177,  438 => 176,  436 => 175,  434 => 174,  428 => 172,  422 => 171,  416 => 170,  410 => 169,  405 => 167,  397 => 162,  393 => 161,  387 => 158,  383 => 157,  377 => 154,  373 => 153,  367 => 150,  363 => 149,  357 => 146,  353 => 145,  347 => 142,  343 => 141,  337 => 138,  333 => 137,  327 => 134,  323 => 133,  316 => 129,  310 => 126,  306 => 125,  299 => 121,  295 => 120,  288 => 116,  284 => 115,  277 => 111,  273 => 110,  266 => 106,  262 => 105,  255 => 101,  251 => 100,  244 => 96,  240 => 95,  233 => 91,  224 => 85,  220 => 84,  213 => 80,  209 => 79,  203 => 76,  200 => 75,  194 => 67,  190 => 66,  183 => 62,  179 => 61,  172 => 57,  168 => 56,  161 => 52,  157 => 51,  149 => 46,  145 => 45,  137 => 40,  133 => 39,  125 => 34,  121 => 33,  114 => 29,  110 => 28,  103 => 24,  99 => 23,  92 => 19,  88 => 18,  81 => 14,  77 => 13,  70 => 9,  62 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/site/footer.htm", "");
    }
}
