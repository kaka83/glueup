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

/* /var/www/html/glueup/themes/glueup/pages/home.htm */
class __TwigTemplate_7e8f1aae331a5026b4aae6376474fbb5b3cbf0dc97cf2e073322154fc32c4186 extends \Twig\Template
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
        $tags = array("partial" => 23);
        $filters = array("_" => 8, "media" => 19, "page" => 40);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                ['_', 'media', 'page'],
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
        echo "<header id=\"hero\" class=\"d-flex align-self-center\">

        <div class=\"container paygage-hero-container align-items-center align-self-center\">
        \t 
            <div class=\"row mx-auto\">
                
                <div class=\"col-lg-8 mx-auto hero home align-self-center text-center\" style=\"padding-top:5vh;\">
\t\t\t\t\t<h1>";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["All-in-One Software<br> for <span class=\"line\"><ins> Growing</ins></span> Your Community "]);
        echo "</h1>
                       <p class=\"tagline\"> ";
        // line 9
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Glue Up is an all-in-one platform that helps you build and grow your community through events, memberships, CRM, email campaigns, finance and marketing tools. "]);
        echo " </p><br>
                       <div class=\"row\">
                            <div class=\"col-md-7 mx-auto input-group mt-3 d-flex\">
                                <input type=\"text\" id=\"email\" name=\"email\" placeholder=\"";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Your Email"]);
        echo "\" aria-label=\"email\" class=\"form-control has_background\">
                                <div class=\"input-group-append\">
                                    <button class=\"btn btn-primary btn-round-full pointer\" value=\"Submit\" id=\"emailtomodal\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#contact-paygage\">";
        // line 14
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Get Started"]);
        echo "</button>
                                </div>
                            </div>
                        </div>
                </div>
                <img class=\"col-md-offset-12 img-fluid hero-home text-center mx-auto d-none d-sm-block\" style=\"\" src=\"";
        // line 19
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-hero3.svg");
        echo "\" alt=\"Glue Up helps you with events, memberships, CRM, email campaigns, finance and marketing tools.\">
            </div>
        </div> 
    </header>
";
        // line 23
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("logos/logobar-home.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 24
        echo "

<section id=\"product-display\" class=\"py-5\">
    <div class=\"py-5 container\">
        <div class=\"row flex-row\">
                                                    <div class=\"col-md-8 mx-auto\">
                                                       <div class=\"block text-center\">
                                                             <h2 class=\"mt-3 mb-4 sentence  position-relative\">";
        // line 31
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["All-in-one Solutions for Every Team"]);
        echo "</h2>
                                                             <p class=\"tagline\">";
        // line 32
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["No matter your needs, our solutions are powerful yet flexible to empower you to grow your organization and your community."]);
        echo " </p>
                                                        </div>
                                                    </div>
        </div>
        <div class=\"row flex-row mt-5\">
                   <div id=\"solutions-display\" class=\"col-md-12 align-self-center\">
                                                <div class=\"row align-self-center\">
                                                    <div class=\"col-md-6\">
                                                        <a class=\"dropdown-item \" href=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("solutions/event-management-suite");
        echo "\">
                                                            <img src=\"";
        // line 41
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-event.svg");
        echo "\" class=\"dropdown-visual\" alt=\"Glue Up helps you plan, promote and execute events.\">
                                                            <p class=\"link-title mb-2\">";
        // line 42
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Management Suite"]);
        echo "</p>
                                                            <p class=\"small mb-0 d-flex\">";
        // line 43
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Plan, promote, execute and evaluate all of your events. "]);
        echo "</p>
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-6\">
                                                        <a class=\"dropdown-item \" href=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("solutions/membership-management-suite");
        echo "\">
                                                            <img src=\"";
        // line 48
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-membership.svg");
        echo "\" class=\"dropdown-visual\" alt=\"Glue Up helps you manage your memberships\"  style=\"max-height:100px;\">
                                                            <p class=\"link-title mb-2\">";
        // line 49
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Membership Management Suite"]);
        echo "</p>
                                                            <p class=\"small mb-0 d-flex\">";
        // line 50
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Retain, engage and grow your member community. "]);
        echo "</p>
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-6\">
                                                        <a class=\"dropdown-item \" href=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("solutions/virtual-events-management-suite");
        echo "\">
                                                            <img src=\"";
        // line 55
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-online-events.svg");
        echo "\" class=\"dropdown-visual\" alt=\"Glue Up helps you plan, promote and execute online events\">
                                                            <p class=\"link-title mb-2\">";
        // line 56
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Virtual Events Management Suite"]);
        echo "</p>
                                                            <p class=\"small mb-0 d-flex\">";
        // line 57
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Monetize and enhance your online events and webinars. "]);
        echo "</p>
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-6\">
                                                        <a class=\"dropdown-item \" href=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("solutions/community-management-suite");
        echo "\">
                                                            <img src=\"";
        // line 62
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-community-feature.svg");
        echo "\" class=\"dropdown-visual\" alt=\"Glue Up helps you engage your community\">
                                                            <p class=\"link-title mb-2\">";
        // line 63
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Community Management Suite"]);
        echo "</p>
                                                            <p class=\"small mb-0 d-flex\">";
        // line 64
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Enable your community to thrive and amplify engagement. "]);
        echo "</p>
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-6\">
                                                        <a class=\"dropdown-item \" href=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("solutions/training-management-suite");
        echo "\">
                                                            <img src=\"";
        // line 69
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-learning.svg");
        echo "\" class=\"dropdown-visual pb-4\" alt=\"Glue Up helps you deliver and monetize your courses and CPE/CPD Credits\">
                                                            <p class=\"link-title mb-2\">";
        // line 70
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Training Management Suite"]);
        echo "</p>
                                                            <p class=\"small mb-0 d-flex\">";
        // line 71
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Build, market, sell, and analyze courses with ease."]);
        echo "</p>
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-6\">
                                                        <a class=\"dropdown-item pointer btn-block\" value=\"Submit\" id=\"comming-soon-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#pricing\" href=\"";
        // line 75
        echo "\">
                                                        <img src=\"";
        // line 76
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-donations.svg");
        echo "\" class=\"dropdown-visual\" alt=\"Glue Up helps you manage donations\" style=\"max-height:100px;\">
                                                            <p class=\"link-title mb-2\">";
        // line 77
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Donations Management Suite"]);
        echo " <span class=\"badge badge-soon\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Coming Soon"]);
        echo "</span></p>
                                                            <p class=\"small mb-0 d-flex\">";
        // line 78
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Collect and manage all your donations effortlessly. "]);
        echo "</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
        </div>
    </div>

</section>

";
        // line 89
        echo "
<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 94
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-event-management.svg");
        echo "\" alt=\"Glue Up helps you manage events big and small\" class=\"img-fluid mx-auto lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color \">";
        // line 98
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Events"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  \">";
        // line 99
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Scale Up Events,<br> Not Workload."]);
        echo "</h2>
                            <div class=\"about-content  \">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 101
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Plan, promote, and execute one or hundreds of events, large and small, from the first idea to attendee follow-up and evaluate with surveys after your event."]);
        echo "
    \t\t\t\t\t\t     </p>
                             <a href=\"";
        // line 103
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/event-management");
        echo "\" class=\"read-more d-flex\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Learn More"]);
        echo " <i class=\"read-more-icon icon-arrow\"></i></a>
\t\t\t\t</div>
                            ";
        // line 106
        echo "                             <p class=\"quote-home pt-5\">
                             \"";
        // line 107
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" We host hundreds of events and manage tens of thousands of contacts using Glue Up."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" The platform's professional look and ease of use has enabled us to stand out as a premier forum for convening thought leaders."]);
        echo "\"</p>
                             <span class=\"h6 text-color \">";
        // line 108
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Carol Li Rafferty, "]);
        echo "<span style=\"font-weight:300;\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Managing Director, Yale Center"]);
        echo "</span></span>
                             <div class=\"align-self-center\">
                                 <img src=\"";
        // line 110
        echo $this->extensions['System\Twig\Extension']->mediaFilter("clients/yale-center.svg");
        echo "\" class=\"img-fluid\" style=\"display: block; max-width: 127px; max-height: 320px; padding: 10px 0;\" alt=\"logo\">
                             </div>
                  </div>
                </div>
                
            </div>

        </div>
</section>

<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-8 mx-auto d-flex align-items-center text-center mx-auto\">
                    <p class=\"mb-4 sentence text-center mx-auto\">";
        // line 124
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Create events <span class=\"line\"><ins>80%</ins></span> faster with <span style=\"color:#0d62fe;\">Glue Up</span>."]);
        echo "</p>
                </div>
            </div>
        </div>
</section>
";
        // line 130
        echo "<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-7 d-flex align-items-center pb-3 pb-md-0\">
                    <img src=\"";
        // line 134
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-membership-management.svg");
        echo "\" alt=\"Glue Up helps you manage memberships of any kind\" class=\"img-fluid mx-auto lazy fadeIn\">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                 <div>
                            <span class=\"h6 text-color \">";
        // line 138
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Memberships"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  \">";
        // line 139
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Retain, engage and grow your community."]);
        echo "</h2>
                            <div class=\"about-content  \">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 141
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Automate your membership management processes, maximize retention, and pamper your members with a premium experience they deserve."]);
        echo "<br>
                \t\t\t     </p>
\t\t\t\t<a href=\"";
        // line 143
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/membership-management");
        echo "\" class=\"read-more d-flex\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Learn More"]);
        echo " <i class=\"read-more-icon icon-arrow\"></i></a>
                             </div>
                             <p class=\"quote-home pt-5\">
                             \"";
        // line 146
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" We are very pleased with the simplicity of the system. We rarely spend time training staff as most users simply “get it\""]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["  Its simple and fast out-of-the-box solution. We now have 4 client accounts running on Glue Up software."]);
        echo "\"</p>
                             <span class=\"h6 text-color \">";
        // line 147
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Marcel Ewals, "]);
        echo "<span style=\"font-weight:300;\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Director, Community Development, MCI Group"]);
        echo "</span></span>
                             <div class=\"align-self-center\">
                                 <img src=\"";
        // line 149
        echo $this->extensions['System\Twig\Extension']->mediaFilter("clients/mci.svg");
        echo "\" class=\"img-fluid\" style=\"display: block; max-width: 66px; max-height: 320px; padding: 10px 0;\" alt=\"logo\">
                             </div>
                  </div>
                </div>
                
            </div>

        </div>

</section>
";
        // line 160
        echo "<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-8 d-flex align-items-center text-center mx-auto\">
                    <p class=\"mb-4 sentence mx-auto text-center\">";
        // line 164
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["With <span style=\"color:#0d62fe;\">Glue Up</span>, members stick around. <br> Average retention rate of our clients is <span class=\"line\"><ins> 82%</ins></span>."]);
        echo "</p>
                </div>
            </div>
        </div>
</section>
";
        // line 170
        echo "<section class=\"section\">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-7 d-flex align-items-center align-self-center pb-3 pb-md-0\">
                  <img src=\"";
        // line 174
        echo $this->extensions['System\Twig\Extension']->mediaFilter("features/glueup-engage.svg");
        echo "\" alt=\"Glue Up Helps your community thrive\" class=\"img-fluid mx-auto lazy \">
                </div>
                <div class=\"col-lg-5 align-self-center\">
                    <div>
                            <span class=\"h6 text-color \">";
        // line 178
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Communities"]);
        echo "</span>
                            <h2 class=\"mt-3 mb-4 position-relative content-title  \">";
        // line 179
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Enable Your Community To Thrive"]);
        echo "</h2>
                            <div class=\"about-content  \">
    \t\t\t\t\t\t     <p class=\"mb-4\">";
        // line 181
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Give your audience a digital place where they can connect with you and your mission 365 days a year even when meeting face to face isn’t possible."]);
        echo "
    \t\t\t\t\t\t     </p>
\t\t\t\t<a href=\"";
        // line 183
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("platform/community");
        echo "\" class=\"read-more d-flex\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Learn More"]);
        echo " <i class=\"read-more-icon icon-arrow\"></i></a>
                             </div>
                             <p class=\"quote-home pt-5\">
                             \"";
        // line 186
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Many great features under one umbrella."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" From CRM, Event Management, Social Engagement, Email Marketing Campaigns, Invoicing, Membership Management & Financing, this software enables you run your business effectively and efficiently."]);
        echo "\"</p>
                             <span class=\"h6 text-color \">";
        // line 187
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Edward Ornelas, "]);
        echo "<span style=\"font-weight:300;\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["President & CEO, Inland Empire Regional Chamber of Commerce"]);
        echo "</span></span>
                             <div class=\"align-self-center\">
                                 <img src=\"";
        // line 189
        echo $this->extensions['System\Twig\Extension']->mediaFilter("clients/iechamber.svg");
        echo "\" class=\"img-fluid\" style=\"display: block; max-width: 160px; max-height: 320px; padding: 10px 0;\" alt=\"logo\">
                             </div>
                             
                  </div>
                </div>
                
            </div>

        </div>
</section>
";
        // line 199
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/blogs-sort-home.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 200
        echo "<section class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-lg-8 d-flex align-items-center text-center mx-auto\">
                    <p class=\"mb-4 sentence mx-auto text-center\">";
        // line 204
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Don't take  <span class='line'><ins> our word </ins></span> for it."]);
        echo "</p>
                </div>
            </div>
            <div class=\"row mx-auto\">
            \t<div class=\"col-md-8 mx-auto\">
            \t\t<div class=\"row\">
                        <div class=\"col-md-4 py-3\">
                            <div class=\"card text-center h-100 \">
                              <div class=\"card-body pt-4 \">
                                <img src=\"";
        // line 213
        echo $this->extensions['System\Twig\Extension']->mediaFilter("capterra-top-20-img.png");
        echo "\" alt=\"Glue Up Top 20 Rated in Capterra\" class=\" img-fluid mx-auto lazy fadeIn\" style=\"max-height: 120px;\">
                                ";
        // line 215
        echo "                              </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 py-3\">
                            <div class=\"card text-center h-100 \">
                              <div class=\"card-body pt-4\">
                              \t<img alt=\"Glue Up is one of GetApp Category Leaders for Association Management Jul-20\" title=\"Category Leaders Badge\" style=\"width: 140px; border: 0px\" src=\"https://cdn0.capterra-static.com/assets/images/gdm-badges/GA_Badge_Category%20Leaders_Full%20Color.png\">
                                 ";
        // line 223
        echo "                                ";
        // line 224
        echo "                              </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 py-3\">
                            <div class=\"card text-center h-100 \">
                              <div class=\"card-body pt-4 \">
                                ";
        // line 231
        echo "                                <img alt=\"Glue Up is one of the Software Advice Frontrunners for Association Management Jul-20\" title=\"Frontrunners Badge\" style=\"width: 140px; border: 0px\" src=\"https://cdn0.capterra-static.com/assets/images/gdm-badges/SA_FrontRunners_Full%20Color.png\">
                                ";
        // line 233
        echo "                              </div>
                            </div>
                        </div>
                       </div>
                  </div>
            </div>
</section>

";
        // line 241
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/pricing-modal"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 250
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer-cta.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  521 => 250,  517 => 241,  507 => 233,  504 => 231,  496 => 224,  494 => 223,  485 => 215,  481 => 213,  469 => 204,  463 => 200,  459 => 199,  446 => 189,  439 => 187,  434 => 186,  426 => 183,  421 => 181,  416 => 179,  412 => 178,  405 => 174,  399 => 170,  391 => 164,  385 => 160,  372 => 149,  365 => 147,  360 => 146,  352 => 143,  347 => 141,  342 => 139,  338 => 138,  331 => 134,  325 => 130,  317 => 124,  300 => 110,  293 => 108,  288 => 107,  285 => 106,  278 => 103,  273 => 101,  268 => 99,  264 => 98,  257 => 94,  250 => 89,  237 => 78,  231 => 77,  227 => 76,  224 => 75,  217 => 71,  213 => 70,  209 => 69,  205 => 68,  198 => 64,  194 => 63,  190 => 62,  186 => 61,  179 => 57,  175 => 56,  171 => 55,  167 => 54,  160 => 50,  156 => 49,  152 => 48,  148 => 47,  141 => 43,  137 => 42,  133 => 41,  129 => 40,  118 => 32,  114 => 31,  105 => 24,  101 => 23,  94 => 19,  86 => 14,  81 => 12,  75 => 9,  71 => 8,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/home.htm", "");
    }
}
