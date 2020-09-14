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

/* /var/www/html/glueup/themes/glueup/partials/site/offices.htm */
class __TwigTemplate_c860c1bd7451f1b27fa2966f9f8416d9c0b9aaa949d510def18b1d24a69a75b0 extends \Twig\Template
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
        $tags = array("if" => 13, "set" => 14);
        $filters = array("escape" => 1, "_" => 7, "media" => 71);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', '_', 'media'],
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
        echo "<section id=\"offices\" class=\"section ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["background"] ?? null), 1, $this->source), "html", null, true);
        echo "\">
        <div class=\"container\">
\t\t\t
            <div class=\"row pb-5\">
                    <div class=\"col-lg-8 mx-auto \">
                        <div class=\"block text-center\">
                             <h2 class=\"mt-3 mb-4 position-relative content-title\">";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Glue Up Office Locations"]);
        echo "</h2>
                             <p class=\"tagline\">";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Glue Up is present in more than 40 countries and has offices across Asia, Europe, and North and Latin America."]);
        echo " </p>
                        </div>
                    </div>
            </div>
            ";
        // line 13
        echo "            ";
        if (twig_in_filter(($context["Location"] ?? null), [0 => "AF", 1 => "AU", 2 => "AW", 3 => "AZ", 4 => "BD", 5 => "BH", 6 => "KH", 7 => "CN", 8 => "CX", 9 => "CC", 10 => "FJ", 11 => "FK", 12 => "FM", 13 => "FO", 14 => "HK", 15 => "ID", 16 => "IN", 17 => "JP", 18 => "KG", 19 => "KP", 20 => "KR", 21 => "KZ", 22 => "LA", 23 => "LK", 24 => "MO", 25 => "MG", 26 => "MY", 27 => "MN", 28 => "MM", 29 => "NP", 30 => "NZ", 31 => "OM", 32 => "PH", 33 => "PK", 34 => "PW", 35 => "QA", 36 => "SG", 37 => "SY", 38 => "TW", 39 => "TJ", 40 => "TH", 41 => "TM", 42 => "AE", 43 => "UZ", 44 => "VU", 45 => "VN"])) {
            // line 14
            echo "             ";
            $context["active3"] = "show active";
            // line 15
            echo "             ";
            $context["active2"] = "";
            // line 16
            echo "             ";
            $context["active1"] = "";
            // line 17
            echo "            <div class=\"row justify-content-center\">
            \t<ul class=\"nav nav-pills pills-dark justify-content-center mx-auto mb-3\" id=\"pills-tab\" role=\"tablist\">
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t\t <a class=\"nav-link\" id=\"pills-america-tab\" data-toggle=\"pill\" href=\"#pills-america\" role=\"tab\" aria-controls=\"pills-america\" aria-selected=\"false\">";
            // line 20
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["The Americas"]);
            echo "</a>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t\t <a class=\"nav-link\" id=\"pills-emea-tab\" data-toggle=\"pill\" href=\"#pills-emea\" role=\"tab\" aria-controls=\"pills-emea\" aria-selected=\"false\">";
            // line 23
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Africa, Europe, the Middle East and Russia"]);
            echo "</a>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t\t <a class=\"nav-link active\" id=\"pills-asia-tab\" data-toggle=\"pill\" href=\"#pills-asia\" role=\"tab\" aria-controls=\"pills-asia\" aria-selected=\"true\">";
            // line 26
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Asia and the Pacific"]);
            echo "</a>
\t\t\t\t  </li>
\t\t\t\t</ul>
            </div>
            ";
        } elseif (twig_in_filter(        // line 30
($context["Location"] ?? null), [0 => "AL", 1 => "DZ", 2 => "BF", 3 => "BW", 4 => "CZ", 5 => "CM", 6 => "CF", 7 => "TD", 8 => "CG", 9 => "CI", 10 => "CD", 11 => "DJ", 12 => "EG", 13 => "TP", 14 => "GQ", 15 => "ER", 16 => "ET", 17 => "GA", 18 => "GM", 19 => "GH", 20 => "IR", 21 => "JO", 22 => "KE", 23 => "LR", 24 => "LS", 25 => "LY", 26 => "MZ", 27 => "NA", 28 => "NE", 29 => "NG", 30 => "RU", 31 => "RW", 32 => "SN", 33 => "SL", 34 => "SO", 35 => "ZA", 36 => "SD", 37 => "SR", 38 => "SJ", 39 => "SZ", 40 => "TZ", 41 => "TL", 42 => "TG", 43 => "TK", 44 => "TO", 45 => "TT", 46 => "TN", 47 => "TR", 48 => "TC", 49 => "TV", 50 => "UA", 51 => "UG", 52 => "EH", 53 => "YE", 54 => "ZM", 55 => "ZW"])) {
            // line 31
            echo "             ";
            $context["active2"] = "show active";
            // line 32
            echo "             ";
            $context["active3"] = "";
            // line 33
            echo "             ";
            $context["active1"] = "";
            // line 34
            echo "            <div class=\"row justify-content-center\">
            \t<ul class=\"nav nav-pills pills-dark justify-content-center mx-auto mb-3\" id=\"pills-tab\" role=\"tablist\">
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t\t <a class=\"nav-link\" id=\"pills-america-tab\" data-toggle=\"pill\" href=\"#pills-america\" role=\"tab\" aria-controls=\"pills-america\" aria-selected=\"false\">";
            // line 37
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["The Americas"]);
            echo "</a>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t\t <a class=\"nav-link active\" id=\"pills-emea-tab\" data-toggle=\"pill\" href=\"#pills-emea\" role=\"tab\" aria-controls=\"pills-emea\" aria-selected=\"true\">";
            // line 40
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Africa, Europe, the Middle East and Russia"]);
            echo "</a>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t\t <a class=\"nav-link\" id=\"pills-asia-tab\" data-toggle=\"pill\" href=\"#pills-asia\" role=\"tab\" aria-controls=\"pills-asia\" aria-selected=\"false\">";
            // line 43
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Asia and the Pacific"]);
            echo "</a>
\t\t\t\t  </li>
\t\t\t\t</ul>
            </div>
            ";
        } else {
            // line 48
            echo "            ";
            $context["active1"] = "show active";
            // line 49
            echo "             ";
            $context["active3"] = "";
            // line 50
            echo "             ";
            $context["active2"] = "";
            // line 51
            echo "            <div class=\"row justify-content-center\">
            \t<ul class=\"nav nav-pills pills-dark justify-content-center mx-auto mb-3\" id=\"pills-tab\" role=\"tablist\">
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t\t <a class=\"nav-link active\" id=\"pills-america-tab\" data-toggle=\"pill\" href=\"#pills-america\" role=\"tab\" aria-controls=\"pills-america\" aria-selected=\"true\">";
            // line 54
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["The Americas"]);
            echo "</a>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t\t <a class=\"nav-link\" id=\"pills-emea-tab\" data-toggle=\"pill\" href=\"#pills-emea\" role=\"tab\" aria-controls=\"pills-emea\" aria-selected=\"false\">";
            // line 57
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Africa, Europe, the Middle East and Russia"]);
            echo "</a>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t\t <a class=\"nav-link\" id=\"pills-asia-tab\" data-toggle=\"pill\" href=\"#pills-asia\" role=\"tab\" aria-controls=\"pills-asia\" aria-selected=\"false\">";
            // line 60
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Asia and the Pacific"]);
            echo "</a>
\t\t\t\t  </li>
\t\t\t\t</ul>
            </div>
            ";
        }
        // line 65
        echo "            <div class=\"row justify-content-center\">
            \t<div class=\"tab-content\" id=\"pills-tabContent\">
\t\t\t\t  <div class=\"tab-pane fade ";
        // line 67
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["active1"] ?? null), 67, $this->source), "html", null, true);
        echo "\" id=\"pills-america\" role=\"tabpanel\" aria-labelledby=\"pills-america-tab\">
\t\t\t\t  \t\t<div class=\"row justify-content-center\">
\t\t\t\t  \t\t\t<div class=\"col-md-4 pt-4\">
\t\t\t\t            \t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t\t\t  <img class=\"card-img-top\" src=\"";
        // line 71
        echo $this->extensions['System\Twig\Extension']->mediaFilter("offices/usa.png");
        echo "\" alt=\"Glue Up Office in the USA\">
\t\t\t\t\t\t\t\t  <div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t\t    <h4 class=\"card-title link-title\">";
        // line 73
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Washington DC"]);
        echo "</h4>
\t\t\t\t\t\t\t\t    <p class=\"card-text pb-2\">";
        // line 74
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["1775 Tysons Blvd, 5th Floor<br>Tysons, VA 22102"]);
        echo "</p>
\t\t\t\t\t\t\t\t    <a href=\"tel:1-888-218-1354\" class=\"pb-4\"><i class=\"icon-phone-number\" style=\"font-size: 22px; position: absolute;\"></i><span class=\"pl-4\">1-888-218-1354</span></a>
\t\t\t\t\t\t\t\t    <a href=\"#\" class=\"btn mt-auto btn-outline-light d-block mt-4\" value=\"Submit\" id=\"office-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#general\">";
        // line 76
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact"]);
        echo "</a>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 pt-4\">
\t\t\t\t            \t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t\t\t  <img class=\"card-img-top\" src=\"";
        // line 82
        echo $this->extensions['System\Twig\Extension']->mediaFilter("offices/mexico.png");
        echo "\" alt=\"Glue Up Office in Mexico\">
\t\t\t\t\t\t\t\t  <div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t\t    <h4 class=\"card-title link-title\">";
        // line 84
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Mexico City"]);
        echo "</h4>
\t\t\t\t\t\t\t\t    ";
        // line 86
        echo "\t\t\t\t\t\t\t\t    <a href=\"mailto:salesmx@glueup.com\" class=\"pb-4\"><i class=\"icon-email-campaigns\" style=\"font-size: 22px; position: absolute;\"></i><span class=\"pl-4\">salesmx@glueup.com</span></a>
\t\t\t\t\t\t\t\t    <a href=\"#\" class=\"btn mt-auto btn-outline-light d-block mt-4\" value=\"Submit\" id=\"office-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#general\">";
        // line 87
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact"]);
        echo "</a>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 pt-4\">
\t\t\t\t            \t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t\t\t  <img class=\"card-img-top\" src=\"";
        // line 93
        echo $this->extensions['System\Twig\Extension']->mediaFilter("offices/brazil.png");
        echo "\" alt=\"Glue Up Office in Brazil\">
\t\t\t\t\t\t\t\t  <div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t\t    <h4 class=\"card-title link-title\">";
        // line 95
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Sâo Paulo"]);
        echo "</h4>
\t\t\t\t\t\t\t\t    ";
        // line 97
        echo "\t\t\t\t\t\t\t\t    <a href=\"mailto:salesbr@glueup.com\" class=\"pb-4\"><i class=\"icon-email-campaigns\" style=\"font-size: 22px; position: absolute;\"></i><span class=\"pl-4\">salesbr@glueup.com</span></a>
\t\t\t\t\t\t\t\t    <a href=\"#\" class=\"btn mt-auto btn-outline-light d-block mt-4\" value=\"Submit\" id=\"office-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#general\">";
        // line 98
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact"]);
        echo "</a>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"tab-pane fade ";
        // line 105
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["active2"] ?? null), 105, $this->source), "html", null, true);
        echo "\" id=\"pills-emea\" role=\"tabpanel\" aria-labelledby=\"pills-emea-tab\">
\t\t\t\t  \t\t
\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t<div class=\"col-md-4 pt-4\">
\t\t\t\t\t\t\t\t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t\t\t  <img class=\"card-img-top\" src=\"";
        // line 110
        echo $this->extensions['System\Twig\Extension']->mediaFilter("offices/nairobi.png");
        echo "\" alt=\"Glue Up Office in Kenya\">
\t\t\t\t\t\t\t\t  <div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t\t    <h4 class=\"card-title link-title\">";
        // line 112
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Nairobi"]);
        echo "</h4>
\t\t\t\t\t\t\t\t    <p class=\"card-text pb-2\">";
        // line 113
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Mirage Towers, Waiyaki Way <br> Westlands, Floor M2 <br> Nairobi <br> Kenya"]);
        echo "</p>
\t\t\t\t\t\t\t\t    <a href=\"tel:+254 734-698-114\" class=\"pb-4\"><i class=\"icon-phone-number\" style=\"font-size: 22px; position: absolute;\"></i><span class=\"pl-4\">+254 734-698-114</span></a>
\t\t\t\t\t\t\t\t    <a href=\"#\" class=\"btn mt-auto btn-outline-light d-block mt-4\" value=\"Submit\" id=\"office-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#general\">";
        // line 115
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact"]);
        echo "</a>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 pt-4\">
\t\t\t\t\t\t\t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t\t  <img class=\"card-img-top\" src=\"";
        // line 121
        echo $this->extensions['System\Twig\Extension']->mediaFilter("offices/moscow.png");
        echo "\" alt=\"Glue Up Office in the USA\">
\t\t\t\t\t\t\t  <div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t    <h4 class=\"card-title link-title\">";
        // line 123
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Moscow"]);
        echo "</h4>
\t\t\t\t\t\t\t    <p class=\"card-text pb-2\">";
        // line 124
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Aviamotornaya Street 8,<br>Moscow"]);
        echo "</p>
\t\t\t\t\t\t\t    <a href=\"tel:+7(495)260-14-25\" class=\"pb-4\"><i class=\"icon-phone-number\" style=\"font-size: 22px; position: absolute;\"></i><span class=\"pl-4\">+7(495)260-14-25</span></a>
\t\t\t\t\t\t\t    <a href=\"#\" class=\"btn mt-auto btn-outline-light d-block mt-4\" value=\"Submit\" id=\"office-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#general\">";
        // line 126
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact"]);
        echo "</a>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 pt-4\">
\t\t\t\t\t\t\t\t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t\t\t  <img class=\"card-img-top\" src=\"";
        // line 132
        echo $this->extensions['System\Twig\Extension']->mediaFilter("offices/za.png");
        echo "\" alt=\"Glue Up Office in South Africa\">
\t\t\t\t\t\t\t\t  <div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t\t    <h4 class=\"card-title link-title\">";
        // line 134
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Cape Town"]);
        echo "</h4>
\t\t\t\t\t\t\t\t    <p class=\"card-text pb-2\">";
        // line 135
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["1 Bridgeway Road, Bridgeways Precinct,<br>Century City<br>Cape Town 7441<br>South Africa"]);
        echo "</p>
\t\t\t\t\t\t\t\t    <a href=\"tel:+27 62-971-3405\" class=\"pb-4\"><i class=\"icon-phone-number\" style=\"font-size: 22px; position: absolute;\"></i><span class=\"pl-4\">+27 62-971-3405</span></a>
\t\t\t\t\t\t\t\t    <a href=\"#\" class=\"btn mt-auto btn-outline-light d-block mt-4\" value=\"Submit\" id=\"office-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#general\">";
        // line 137
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact"]);
        echo "</a>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 pt-4\">
\t\t\t\t\t\t\t\t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t\t\t  <img class=\"card-img-top\" src=\"";
        // line 143
        echo $this->extensions['System\Twig\Extension']->mediaFilter("offices/istanbul.png");
        echo "\" alt=\"Glue Up Office in Turkey\">
\t\t\t\t\t\t\t\t  <div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t\t    <h4 class=\"card-title link-title\">";
        // line 145
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Istanbul"]);
        echo "</h4>
\t\t\t\t\t\t\t\t    <p class=\"card-text pb-2\">";
        // line 146
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Göktürk Cad. No:9 Kat:3 D:13,<br>Neo Yaşam İş Merkezi, Göktürk,<br>Istanbul, Turkey"]);
        echo "</p>
\t\t\t\t\t\t\t\t    <a href=\"tel:+90 212 322 9210\" class=\"pb-4\"><i class=\"icon-phone-number\" style=\"font-size: 22px; position: absolute;\"></i><span class=\"pl-4\">+90 212 322 9210</span></a>
\t\t\t\t\t\t\t\t    <a href=\"#\" class=\"btn mt-auto btn-outline-light d-block mt-4\" value=\"Submit\" id=\"office-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#general\">";
        // line 148
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact"]);
        echo "</a>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>";
        // line 154
        echo "\t\t\t\t  </div>
\t\t\t\t  <div class=\"tab-pane fade ";
        // line 155
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["active3"] ?? null), 155, $this->source), "html", null, true);
        echo "\" id=\"pills-asia\" role=\"tabpanel\" aria-labelledby=\"pills-asia-tab\">
\t\t\t\t  \t\t<div class=\"row justify-content-center\">
\t\t\t\t  \t\t<div class=\"col-md-4 pt-4\">
\t\t\t\t\t\t\t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t\t  <img class=\"card-img-top\" src=\"";
        // line 159
        echo $this->extensions['System\Twig\Extension']->mediaFilter("offices/beijing.png");
        echo "\" alt=\"Glue Up Office in Beijing, China\">
\t\t\t\t\t\t\t  <div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t    <h4 class=\"card-title link-title\">";
        // line 161
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Beijing"]);
        echo "</h4>
\t\t\t\t\t\t\t    <p class=\"card-text pb-2\">";
        // line 162
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Room 3-1, Tower D,<br>Guanghualu SOHO2<br>No. 9 Guanghua Road,<br>Chaoyang District<br>Beijing 100020"]);
        echo "</p>
\t\t\t\t\t\t\t    <a href=\"tel:010 5642 1015\" class=\"pb-4\"><i class=\"icon-phone-number\" style=\"font-size: 22px; position: absolute;\"></i><span class=\"pl-4\">010 - 5642 1015</span></a>
\t\t\t\t\t\t\t    <a href=\"#\" class=\"btn mt-auto btn-outline-light d-block mt-4\" value=\"Submit\" id=\"office-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#general\">";
        // line 164
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact"]);
        echo "</a>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 pt-4\">
\t\t\t\t\t\t\t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t\t  <img class=\"card-img-top\" src=\"";
        // line 170
        echo $this->extensions['System\Twig\Extension']->mediaFilter("offices/shanghai.png");
        echo "\" alt=\"Glue Up Office in Shanghai, China\">
\t\t\t\t\t\t\t  <div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t    <h4 class=\"card-title link-title\">";
        // line 172
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Shanghai"]);
        echo "</h4>
\t\t\t\t\t\t\t    <p class=\"card-text pb-2\">";
        // line 173
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["9th Floor, Tower B<br>China Overseas Building<br>838 S. Huangpi Road<br>Huangpu District<br>Shanghai 200025"]);
        echo "</p>
\t\t\t\t\t\t\t    <a href=\"tel:(+86) 152-2117-7322\" class=\"pb-4\"><i class=\"icon-phone-number\" style=\"font-size: 22px; position: absolute;\"></i><span class=\"pl-4\">(+86) 152-2117-7322</span></a>
\t\t\t\t\t\t\t    <a href=\"#\" class=\"btn mt-auto btn-outline-light d-block mt-4\" value=\"Submit\" id=\"office-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#general\">";
        // line 175
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact"]);
        echo "</a>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t  \t\t\t
\t\t\t            <div class=\"col-md-4 pt-4\">
\t\t\t            \t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t\t  <img class=\"card-img-top\" src=\"";
        // line 182
        echo $this->extensions['System\Twig\Extension']->mediaFilter("offices/hk.png");
        echo "\" alt=\"Glue Up Office in the Hong Kong\">
\t\t\t\t\t\t\t  <div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t    <h4 class=\"card-title link-title\">";
        // line 184
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Hong Kong"]);
        echo "</h4>
\t\t\t\t\t\t\t    <p class=\"card-text pb-2\">";
        // line 185
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["10/F, YF Life Tower,<br>33 Lockhart Road, Unit 7114,<br>Wanchai, Hong Kong"]);
        echo "</p>
\t\t\t\t\t\t\t    <a href=\"tel:+852 3905 2030\" class=\"pb-4\"><i class=\"icon-phone-number\" style=\"font-size: 22px; position: absolute;\"></i><span class=\"pl-4\">+852 3905 2030</span></a>
\t\t\t\t\t\t\t    <a href=\"#\" class=\"btn mt-auto btn-outline-light d-block mt-4\" value=\"Submit\" id=\"office-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#general\">";
        // line 187
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact"]);
        echo "</a>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 pt-4\">
\t\t\t\t\t\t\t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t\t  <img class=\"card-img-top\" src=\"";
        // line 193
        echo $this->extensions['System\Twig\Extension']->mediaFilter("offices/jakarta.png");
        echo "\" alt=\"Glue Up Office in the Jakarta Indonesia\">
\t\t\t\t\t\t\t  <div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t    <h4 class=\"card-title link-title\">";
        // line 195
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Jakarta"]);
        echo "</h4>
\t\t\t\t\t\t\t    <p class=\"card-text pb-2\">";
        // line 196
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["The Plaza Office Tower 41F,<br>Jl. M. H. Thamrin Kav. 28-30,<br>Jakarta, 10350,<br>Indonesia"]);
        echo "</p>
\t\t\t\t\t\t\t    <a href=\"tel:+62 21 2992 6654\" class=\"pb-4\"><i class=\"icon-phone-number\" style=\"font-size: 22px; position: absolute;\"></i><span class=\"pl-4\">+62 21 2992 6654</span></a>
\t\t\t\t\t\t\t    <a href=\"#\" class=\"btn mt-auto btn-outline-light d-block mt-4\" value=\"Submit\" id=\"office-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#general\">";
        // line 198
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact"]);
        echo "</a>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 pt-4\">
\t\t\t\t\t\t\t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t\t  <img class=\"card-img-top\" src=\"";
        // line 204
        echo $this->extensions['System\Twig\Extension']->mediaFilter("offices/seoul.png");
        echo "\" alt=\"Glue Up Office in the Seoul Korea\">
\t\t\t\t\t\t\t  <div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t    <h4 class=\"card-title link-title\">";
        // line 206
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Seoul"]);
        echo "</h4>
\t\t\t\t\t\t\t    <p class=\"card-text pb-2\">";
        // line 207
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["5, Yongmasan-ro 32 gil,<br>Gwangjin-gu<br>Seoul 04938,<br>South Korea"]);
        echo "</p>
\t\t\t\t\t\t\t    <a href=\"tel:+82-02-455-3700\" class=\"pb-4\"><i class=\"icon-phone-number\" style=\"font-size: 22px; position: absolute;\"></i><span class=\"pl-4\">+82-02-455-3700</span></a>
\t\t\t\t\t\t\t    <a href=\"#\" class=\"btn mt-auto btn-outline-light d-block mt-4\" value=\"Submit\" id=\"office-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#general\">";
        // line 209
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact"]);
        echo "</a>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 224
        echo "\t\t\t            <div class=\"col-md-4 pt-4\">
\t\t\t            \t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t\t  <img class=\"card-img-top\" src=\"";
        // line 226
        echo $this->extensions['System\Twig\Extension']->mediaFilter("offices/manila.png");
        echo "\" alt=\"Glue Up Office in The Philippines\">
\t\t\t\t\t\t\t  <div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t    <h4 class=\"card-title link-title\">";
        // line 228
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Manila"]);
        echo "</h4>
\t\t\t\t\t\t\t    <p class=\"card-text pb-2\">";
        // line 229
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["928 Arnaiz Avenue<br>Barangay San Lorenzo<br>Makati City<br>Manila, 1223<br>Philippines"]);
        echo "</p>
\t\t\t\t\t\t\t    <a href=\"tel:+63 (2) 8396-5621\" class=\"pb-4\"><i class=\"icon-phone-number\" style=\"font-size: 22px; position: absolute;\"></i><span class=\"pl-4\">+63 (2) 8396-5621</span></a>
\t\t\t\t\t\t\t    <a href=\"#\" class=\"btn mt-auto btn-outline-light d-block mt-4\" value=\"Submit\" id=\"office-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#general\">";
        // line 231
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact"]);
        echo "</a>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 pt-4\">
\t\t\t\t\t\t\t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t\t  <img class=\"card-img-top\" src=\"";
        // line 237
        echo $this->extensions['System\Twig\Extension']->mediaFilter("offices/singapore.png");
        echo "\" alt=\"Glue Up Office in Singapore\">
\t\t\t\t\t\t\t  <div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t    <h4 class=\"card-title link-title\">";
        // line 239
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Singapore"]);
        echo "</h4>
\t\t\t\t\t\t\t    <p class=\"card-text pb-2\">";
        // line 240
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["9 Battery Road<br>MYP Centre<br>Office #27-107<br>Singapore 049910"]);
        echo "</p>
\t\t\t\t\t\t\t    <a href=\"tel:+65 6815 0656\" class=\"pb-4\"><i class=\"icon-phone-number\" style=\"font-size: 22px; position: absolute;\"></i><span class=\"pl-4\">+65 6815 0656</span></a>
\t\t\t\t\t\t\t    <a href=\"#\" class=\"btn mt-auto btn-outline-light d-block mt-4\" value=\"Submit\" id=\"office-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#general\">";
        // line 242
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact"]);
        echo "</a>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 pt-4\">
\t\t\t\t\t\t\t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t\t  <img class=\"card-img-top\" src=\"";
        // line 248
        echo $this->extensions['System\Twig\Extension']->mediaFilter("offices/bangalore.png");
        echo "\" alt=\"Glue Up Office in India\">
\t\t\t\t\t\t\t  <div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t    <h4 class=\"card-title link-title\">";
        // line 250
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Bangalore"]);
        echo "</h4>
\t\t\t\t\t\t\t    <p class=\"card-text pb-2\">";
        // line 251
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["43 - Residency Rd, Shanthala Nagar,<br>Ashok Nagar, Bengaluru,<br>Karnataka 560025 India"]);
        echo "</p>
\t\t\t\t\t\t\t    <a href=\"tel:+91-984-414-1817\" class=\"pb-4\"><i class=\"icon-phone-number\" style=\"font-size: 22px; position: absolute;\"></i><span class=\"pl-4\">+91-984-414-1817</span></a>
\t\t\t\t\t\t\t    <a href=\"#\" class=\"btn mt-auto btn-outline-light d-block mt-4\" value=\"Submit\" id=\"office-button\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#general\">";
        // line 253
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact"]);
        echo "</a>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t  </div>
\t\t\t\t  </div>
\t\t\t\t</div>
\t            
            </div>
            </div>
       </div>
   </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/site/offices.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  553 => 253,  548 => 251,  544 => 250,  539 => 248,  530 => 242,  525 => 240,  521 => 239,  516 => 237,  507 => 231,  502 => 229,  498 => 228,  493 => 226,  489 => 224,  482 => 209,  477 => 207,  473 => 206,  468 => 204,  459 => 198,  454 => 196,  450 => 195,  445 => 193,  436 => 187,  431 => 185,  427 => 184,  422 => 182,  412 => 175,  407 => 173,  403 => 172,  398 => 170,  389 => 164,  384 => 162,  380 => 161,  375 => 159,  368 => 155,  365 => 154,  357 => 148,  352 => 146,  348 => 145,  343 => 143,  334 => 137,  329 => 135,  325 => 134,  320 => 132,  311 => 126,  306 => 124,  302 => 123,  297 => 121,  288 => 115,  283 => 113,  279 => 112,  274 => 110,  266 => 105,  256 => 98,  253 => 97,  249 => 95,  244 => 93,  235 => 87,  232 => 86,  228 => 84,  223 => 82,  214 => 76,  209 => 74,  205 => 73,  200 => 71,  193 => 67,  189 => 65,  181 => 60,  175 => 57,  169 => 54,  164 => 51,  161 => 50,  158 => 49,  155 => 48,  147 => 43,  141 => 40,  135 => 37,  130 => 34,  127 => 33,  124 => 32,  121 => 31,  119 => 30,  112 => 26,  106 => 23,  100 => 20,  95 => 17,  92 => 16,  89 => 15,  86 => 14,  83 => 13,  76 => 8,  72 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/site/offices.htm", "");
    }
}
