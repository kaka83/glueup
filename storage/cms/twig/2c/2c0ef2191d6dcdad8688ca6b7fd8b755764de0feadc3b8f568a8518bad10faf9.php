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

/* /var/www/html/glueup/themes/glueup/partials/awards/default.htm */
class __TwigTemplate_1f35522ec3588bc8b0ae9510c17ab869bf628767a86f5cbfe5e1a74ea976d07e extends \Twig\Template
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
        $tags = array("partial" => 282);
        $filters = array("escape" => 5, "_" => 14);
        $functions = array("form_token" => 7);

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                ['escape', '_'],
                ['form_token']
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
        echo "<!-- // form -->
 
                                     ";
        // line 5
        echo "                        <form data-request=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 5, $this->source), "html", null, true);
        echo "::onFormSubmit\" id=\"awards\">
                        
                            ";
        // line 7
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "
                        
                            <div id=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 9, $this->source), "html", null, true);
        echo "_forms_flash\"></div>
                     



<h3 class=\"pb-5\">";
        // line 14
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Application Form"]);
        echo "</h3>


<label for=\"full_name\">";
        // line 17
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Your full name"]);
        echo "</label>
<input type=\"text\" id=\"full_name\" name=\"full_name\" class=\"form-control\"><br>

<label for=\"position\">";
        // line 20
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Your Title"]);
        echo "</label>
<input type=\"text\" id=\"position\" name=\"position\" class=\"form-control\"><br>


<label for=\"email\">";
        // line 24
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email Address"]);
        echo "</label>
<input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\" value=\"\"><br>

<label for=\"email\">";
        // line 27
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Phone Number"]);
        echo "</label>
<input type=\"text\" id=\"phone\" name=\"phone\" class=\"form-control\"><br>


<input type=\"checkbox\" name=\"assoc_authorization\" value=\"Yes\" /><label for=\"assoc_authorization\" class=\"pb-5\" style=\"display:inline; margin-left:1rem;\">";
        // line 31
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["I am authorized to submit nominations and have approval from all interested parties (association and other stakeholders)."]);
        echo "</label>
<br>
<div class=\"py-5\"></div>
<h3 class=\"pb-5\">";
        // line 34
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["About Your Association"]);
        echo "</h3>


<label for=\"assoc_name\">";
        // line 37
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["What is the name of the association you are nominating?"]);
        echo "</label>
<input type=\"text\" id=\"assoc_name\" name=\"assoc_name\" class=\"form-control\"><br>

<label for=\"assoc_web\">";
        // line 40
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Please provide link to your association's website"]);
        echo "</label>
<input type=\"text\" id=\"assoc_web\" name=\"assoc_web\" class=\"form-control\"><br>

<label for=\"assoc_head\">";
        // line 43
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Who is the head of your association? Full name and official title"]);
        echo "</label>
<input type=\"text\" id=\"assoc_head\" name=\"assoc_head\" class=\"form-control\"><br>


<label for=\"email_assoc\">";
        // line 47
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Please provide their email"]);
        echo "</label>
<input type=\"text\" id=\"email_assoc\" name=\"email_assoc\" class=\"form-control\" value=\"\"><br>

<label for=\"phone_assoc\">";
        // line 50
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Please provide their phone number"]);
        echo "</label>
<input type=\"text\" id=\"phone_assoc\" name=\"phone_assoc\" class=\"form-control\"><br>


<div class=\"form-group\">
  <label class=\"d-block\" for=\"radio-buttons\">";
        // line 55
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["What are the main services of the association?"]);
        echo "</label>
 <input type=\"radio\" id=\"for-profit\" name=\"for-profit\" value=\"for-profit\">
  <label for=\"\">";
        // line 57
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Business (for-profit)"]);
        echo "</label><br>
 <input type=\"radio\" id=\"Non-profit\" name=\"Non-profit\" value=\"Non-profit\">
  <label for=\"\">";
        // line 59
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Non-profit"]);
        echo "</label><br>
 <input type=\"radio\" id=\"Leadership\" name=\"Leadership\" value=\"Leadership\">
  <label for=\"\">";
        // line 61
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Leadership Development"]);
        echo "</label><br>
 <input type=\"radio\" id=\"Training\" name=\"Training\" value=\"Training\">
  <label for=\"\">";
        // line 63
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Training & Development"]);
        echo "</label><br>
 <input type=\"radio\" id=\"Education\" name=\"Education\" value=\"Education\">
  <label for=\"\">";
        // line 65
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Education Development & Acitation"]);
        echo "</label><br>
 <input type=\"radio\" id=\"Networking\" name=\"Networking\" value=\"Networking\">
  <label for=\"\">";
        // line 67
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Professional Networking"]);
        echo "</label><br>
 <input type=\"radio\" id=\"Others\" name=\"Others\" value=\"Others\">
  <label for=\"\">";
        // line 69
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Others"]);
        echo "</label><br>
 </div>

<label for=\"assoc_employees\">";
        // line 72
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["How many full-time employees do you have?"]);
        echo "</label>
<input type=\"number\" id=\"assoc_employees\" name=\"assoc_employees\" class=\"form-control\"><br>

<label for=\"assoc_pt_employees\">";
        // line 75
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["How many part-time employees do you have?"]);
        echo "</label>
<input type=\"number\" id=\"assoc_pt_employees\" name=\"assoc_pt_employees\" class=\"form-control\"><br>

<label for=\"assoc_members\">";
        // line 78
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["How many members do you have?"]);
        echo "</label>
<input type=\"number\" id=\"assoc_members\" name=\"assoc_members\" class=\"form-control\"><br>

<label for=\"assoc_new_members\">";
        // line 81
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["How many new members joined your association in 2020?"]);
        echo "</label>
<input type=\"number\" id=\"assoc_new_members\" name=\"assoc_new_members\" class=\"form-control\"><br>

<label for=\"assoc_ren_rate\">";
        // line 84
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["What is the renewal rate in 2020 Please indicate in %"]);
        echo "</label>
<input type=\"number\" id=\"assoc_ren_rate\" name=\"assoc_ren_rate\" class=\"form-control\"><br>

<label for=\"assoc_events_year\">";
        // line 87
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["How many events (virtual or face-to-face) do you organize per year?"]);
        echo "</label>
<input type=\"number\" id=\"assoc_events_year\" name=\"assoc_events_year\" class=\"form-control\"><br>

<label for=\"assoc_emails_month\">";
        // line 90
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["How many email campaigns are you sending out per month?"]);
        echo "</label>
<input type=\"number\" id=\"assoc_emails_month\" name=\"assoc_emails_month\" class=\"form-control\"><br>



<div class=\"py-5\"></div>
<div class=\"form-group\">
  <label  class=\"d-block\" for=\"radio-buttons\"><h3 class=\"pb-5\">";
        // line 97
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Which award(s) are you applying for?"]);
        echo "</h3></label>

 <input type=\"checkbox\" id=\"assoc_large\" name=\"awardsApplyingfor1\" value=\"assoc_large\">
  <label for=\"assoc_large\">";
        // line 100
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Large Association of the Year Award"]);
        echo "</label><br>

 <input type=\"checkbox\" id=\"assoc_small\" name=\"awardsApplyingfor2\" value=\"assoc_small\">
  <label for=\"assoc_small\">";
        // line 103
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Small Association of the Year Award"]);
        echo "</label><br>

 <input type=\"checkbox\" id=\"assoc_pro\" name=\"awardsApplyingfor3\" value=\"assoc_pro\">
  <label for=\"assoc_pro\">";
        // line 106
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Professional Association of the Year Award"]);
        echo "</label><br>

 <input type=\"checkbox\" id=\"assoc_industry\" name=\"awardsApplyingfor4\" value=\"assoc_industry\">
  <label for=\"assoc_industry\">";
        // line 109
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Industry Association of the Year Award"]);
        echo "</label><br>

 <input type=\"checkbox\" id=\"assoc_covid\" name=\"awardsApplyingfor5\" value=\"assoc_covid\">
  <label for=\"assoc_covid\">";
        // line 112
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["COVID-19 Hero Association Awards"]);
        echo "</label><br>

 <input type=\"checkbox\" id=\"assoc_star\" name=\"awardsApplyingfor6\" value=\"assoc_star\">
  <label for=\"assoc_star\">";
        // line 115
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Rising Star of the Year Award"]);
        echo "</label><br>

 <input type=\"checkbox\" id=\"assoc_executive\" name=\"awardsApplyingfor7\" value=\"assoc_executive\">
  <label for=\"assoc_executive\">";
        // line 118
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["The Executive of the Year Award"]);
        echo "</label><br>

 <input type=\"checkbox\" id=\"assoc_excellence\" name=\"awardsApplyingfor8\" value=\"assoc_excellence\">
  <label for=\"assoc_excellence\">";
        // line 121
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Excellence in Technology & Innovation Award "]);
        echo "</label><br>

 <input type=\"checkbox\" id=\"assoc_virtual\" name=\"awardsApplyingfor9\" value=\"assoc_virtual\">
  <label for=\"assoc_virtual\">";
        // line 124
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Best Virtual Event of the Year Award "]);
        echo "</label><br>

 <input type=\"checkbox\" id=\"assoc_engagement\" name=\"awardsApplyingfor10\" value=\"assoc_engagement\">
  <label for=\"assoc_engagement\">";
        // line 127
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Best Community Engagement Programme Award"]);
        echo "</label><br>
</div>



<label for=\"assoc_accomplishment\">";
        // line 132
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Describe the association's biggest accomplishment from the past year:"]);
        echo "</label>
<input type=\"textarea\" rows=\"4\" style=\"height:100px;\" id=\"assoc_accomplishment\" name=\"assoc_accomplishment\" class=\"form-control\"><br>

<label for=\"assoc_3_programs\">";
        // line 135
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Describe three programs / services/ events that you are most proud of:"]);
        echo "</label>
<input type=\"textarea\" rows=\"4\" style=\"height:100px;\" id=\"assoc_3_programs\" name=\"assoc_3_programs\" class=\"form-control\"><br>

<label for=\"assoc_strategy\">";
        // line 138
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["What is the engagement strategy? Please describe how the association engages with members:"]);
        echo "</label>
<input type=\"textarea\" rows=\"4\" style=\"height:100px;\" id=\"assoc_strategy\" name=\"assoc_strategy\" class=\"form-control\"><br>

<label for=\"assoc_changes_challenges\">";
        // line 141
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["What are the biggest challenges dealing with the COVID-19 pandemic in your association and your community in general?"]);
        echo "</label>
<input type=\"textarea\" rows=\"4\" style=\"height:100px;\" id=\"assoc_changes_challenges\" name=\"assoc_changes_challenges\" class=\"form-control\"><br>

<label for=\"assoc_changes_pandemic\">";
        // line 144
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["What changes have been made or achievements within the association to cope with the pandemic?"]);
        echo "</label>
<input type=\"textarea\" rows=\"4\" style=\"height:100px;\" id=\"assoc_changes_pandemic\" name=\"assoc_changes_pandemic\" class=\"form-control\"><br>

<label for=\"assoc_forward\">";
        // line 147
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["How is the association helping the industry/profession move forward?"]);
        echo "</label>
<input type=\"textarea\" rows=\"4\" style=\"height:100px;\" id=\"assoc_forward\" name=\"assoc_forward\" class=\"form-control\"><br>

<label for=\"assoc_success\">";
        // line 150
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Describe how successful the association was in fulfilling plans and how has it improved in comparison with previous year"]);
        echo "</label>
<input type=\"textarea\" rows=\"4\" style=\"height:100px;\" id=\"assoc_success\" name=\"assoc_success\" class=\"form-control\"><br>

<label for=\"assoc_goals\">";
        // line 153
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["What are association's goals for the next two years? How will you continue to propel your industry/profession forward?"]);
        echo "</label>
<input type=\"textarea\" rows=\"4\" style=\"height:100px;\" id=\"assoc_goals\" name=\"assoc_goals\" class=\"form-control\"><br>

<label for=\"assoc_extra\">";
        // line 156
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Is there anything else you would like to share?"]);
        echo "</label>
<input type=\"textarea\" rows=\"4\" style=\"height:100px;\" id=\"assoc_extra\" name=\"assoc_extra\" class=\"form-control\"><br>



<div class=\"assoc_star box\" style=\"display:none;\">
<div class=\"py-5\"></div>
<h3 class=\"pb-5\">";
        // line 163
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Rising Star of the Year Award"]);
        echo "</h3>
<label for=\"assoc_star_name\">";
        // line 164
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Full name of the nominee including the official title"]);
        echo "</label>
<input type=\"text\" id=\"assoc_star_name\" name=\"assoc_star_name\" class=\"form-control\"><br>

<label for=\"assoc_star_years\">";
        // line 167
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Number of years working at the association"]);
        echo "</label>
<input type=\"number\" id=\"assoc_star_years\" name=\"assoc_star_years\" class=\"form-control\"><br>

<label for=\"assoc_star_birth\">";
        // line 170
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Year of birth"]);
        echo "</label>
<input type=\"number\" id=\"assoc_star_birth\" name=\"assoc_star_birth\" class=\"form-control\"><br>

<label class=\"pt-3\" for=\"assoc_star_sm\">";
        // line 173
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Link to the nominee's social media (LinkedIn, Twitter or other)"]);
        echo "</label>
<input type=\"text\" id=\"assoc_star_sm\" name=\"assoc_star_sm\" class=\"form-control\"><br>

<label for=\"assoc_star_orgs\">";
        // line 176
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Please list other organizations to which the nominee belongs and his/her positions"]);
        echo "</label>
<input type=\"textarea\" rows=\"4\" style=\"height:100px;\" id=\"assoc_star_orgs\" name=\"assoc_star_orgs\" class=\"form-control\"><br>

<label for=\"assoc_star_awards\">";
        // line 179
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Please list other recognitions & awards the nominee has received"]);
        echo "</label>
<input type=\"textarea\" rows=\"4\" style=\"height:100px;\" id=\"assoc_star_awards\" name=\"assoc_star_awards\" class=\"form-control\"><br>

<label for=\"assoc_star_accomplishments\">";
        // line 182
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Describe the nominee's accomplishments from last year. What challenges has the nominee overcome?"]);
        echo "</label>
<input type=\"textarea\" rows=\"4\" style=\"height:100px;\" id=\"assoc_star_accomplishments\" name=\"assoc_star_accomplishments\" class=\"form-control\"><br>

<label for=\"assoc_star_impact\">";
        // line 185
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["How has the nominee has made an impact on the association and its members?"]);
        echo "</label>
<input type=\"textarea\" rows=\"4\" style=\"height:100px;\" id=\"assoc_star_impact\" name=\"assoc_star_impact\" class=\"form-control\"><br>
</div>


<div class=\"assoc_executive box\" style=\"display:none;\">
<div class=\"py-5\"></div>
<h3 class=\"pb-5\">";
        // line 192
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["The Executive of the Year Award"]);
        echo "</h3>
<label for=\"assoc_executive_name\">";
        // line 193
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Full name of the nominee including the official title"]);
        echo "</label>
<input type=\"text\" id=\"assoc_executive_name\" name=\"assoc_executive_name\" class=\"form-control\"><br>

<label for=\"assoc_executive_years\">";
        // line 196
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Number of years working at the association"]);
        echo "</label>
<input type=\"number\" id=\"assoc_executive_years\" name=\"assoc_executive_years\" class=\"form-control\"><br>

<label class=\"pt-3\" for=\"assoc_executive_sm\">";
        // line 199
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Link to the nominee's social media (LinkedIn, Twitter or other)"]);
        echo "</label>
<input type=\"textarea\" rows=\"4\" style=\"height:100px;\" id=\"assoc_executive_sm\" name=\"assoc_executive_sm\" class=\"form-control\"><br>

<label for=\"assoc_executive_orgs\">";
        // line 202
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Please list other organizations to which the nominee belongs and his/her positions"]);
        echo "</label>
<input type=\"textarea\" rows=\"4\" style=\"height:100px;\" id=\"assoc_executive_orgs\" name=\"assoc_executive_orgs\" class=\"form-control\"><br>

<label for=\"assoc_executive_awards\">";
        // line 205
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Please list other recognitions & awards the nominee has received"]);
        echo "</label>
<input type=\"texarea\" id=\"assoc_executive_awards\" name=\"assoc_executive_awards\" class=\"form-control\"><br>

<label for=\"assoc_executive_accomplishments\">";
        // line 208
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Describe the nominee's accomplishments from last year. What challenges has the nominee overcome?"]);
        echo "</label>
<input type=\"textarea\" rows=\"4\" style=\"height:100px;\" id=\"assoc_executive_accomplishments\" name=\"assoc_executive_accomplishments\" class=\"form-control\"><br>

<label for=\"assoc_executive_impact\">";
        // line 211
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["How has the nominee has made an impact on the association and its members?"]);
        echo "</label>
<input type=\"textarea\" rows=\"4\" style=\"height:100px;\" id=\"assoc_executive_impact\" name=\"assoc_executive_impact\" class=\"form-control\"><br>
</div>


<div class=\"assoc_excellence box\" style=\"display:none;\">
<div class=\"py-5\"></div>
<h3 class=\"pb-5\">";
        // line 218
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Excellence in Technology & Innovation Award"]);
        echo " </h3>
<label for=\"assoc_excellence_innovations\">";
        // line 219
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["What innovations have been introduced in the association in 2020 so far."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" What impact did they have on your industry/profession? (i.e. software used, process innovation, etc.)"]);
        echo "</label>
<input type=\"textarea\" rows=\"4\" style=\"height:100px;\" id=\"assoc_excellence_innovations\" name=\"assoc_excellence_innovations\" class=\"form-control\"><br>

<label for=\"assoc_excellence_pandemic\">";
        // line 222
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Are there any services or suppliers that could help you (or have helped you) through the pandemic?"]);
        echo "</label>
<input type=\"textarea\" rows=\"4\" style=\"height:100px;\" id=\"assoc_excellence_pandemic\" name=\"assoc_excellence_pandemic\" class=\"form-control\"><br>

</div>


<div class=\"assoc_virtual box\" style=\"display:none;\">
<div class=\"py-5\"></div>
<h3 class=\"pb-5\">";
        // line 230
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Best Virtual Event of the Year Award"]);
        echo "</h3>
<label for=\"assoc_virtual_name\">";
        // line 231
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Name the event that had the greatest impact on your respective profession/industry"]);
        echo "</label>
<input type=\"text\" id=\"assoc_virtual_name\" name=\"assoc_virtual_name\" class=\"form-control\"><br>

<label for=\"assoc_virtual_date\">";
        // line 234
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["When did the event take place?"]);
        echo "</label>
<input type=\"date\" id=\"assoc_virtual_date\" name=\"assoc_virtual_date\"
       value=\"\"
       min=\"\" max=\"\">

<label for=\"assoc_virtual_tools\">";
        // line 239
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["What tools are you using to conduct online events (webinars)?"]);
        echo "</label>
<input type=\"text\" id=\"assoc_virtual_tools\" name=\"assoc_virtual_tools\" class=\"form-control\"><br>

<label for=\"assoc_virtual_attendees\">";
        // line 242
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["How many attendees attended the event?"]);
        echo "</label>
<input type=\"number\" id=\"assoc_virtual_attendees\" name=\"assoc_virtual_attendees\" class=\"form-control\"><br>

<label for=\"assoc_virtual_link\">";
        // line 245
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Link to the event (registration) page"]);
        echo "</label>
<input type=\"text\" id=\"assoc_virtual_link\" name=\"assoc_virtual_link\" class=\"form-control\"><br>

<label for=\"assoc_virtual_description\">";
        // line 248
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Describe the success of the event. Outline the success of the event in terms of the audience size, profile and feedback from delegates, speakers, sponsors and members and non members."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" Include anything else you feel qualifies or quantifies the success of the event and how you achieved your goals."]);
        echo "</label>
<input type=\"textarea\" rows=\"4\" style=\"height:100px;\" id=\"assoc_virtual_description\" name=\"assoc_virtual_description\" class=\"form-control\"><br>

<label for=\"assoc_virtual_promotion\">";
        // line 251
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["How did you promote this event to your audiences?"]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" Outline your marketing strategy including any novel approaches and techniques you used in the development of the event and its' promotion – including key partnerships with third parties."]);
        echo "</label>
<input type=\"text\" id=\"assoc_virtual_promotion\" name=\"assoc_virtual_promotion\" class=\"form-control\"><br>

<label for=\"assoc_virtual_implications\">";
        // line 254
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["What are the future implications of the event? How will this event affect the future of the profession or industry?"]);
        echo "</label>
<input type=\"text\" id=\"assoc_virtual_implications\" name=\"assoc_virtual_implications\" class=\"form-control\"><br>
</div>

<div class=\"assoc_engagement box\" style=\"display:none;\">
<div class=\"py-5\"></div>
<h3 class=\"pb-5\">";
        // line 260
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Best Community Engagement Programme Award"]);
        echo "</h3>

\t<label for=\"assoc_engagement_name\">";
        // line 262
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Name the programme that had the greatest impact to a specific need in your community"]);
        echo "</label>
\t<input type=\"textarea\" rows=\"4\" style=\"height:100px;\" id=\"assoc_engagement_name\" name=\"assoc_engagement_name\" class=\"form-control\"><br>
\t
\t<label for=\"assoc_engagement_how\">";
        // line 265
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["How do you communicate and engage with your community when you can't meet in-person? Describe your engagement strategy:"]);
        echo "</label>
\t<input type=\"textarea\" rows=\"4\" style=\"height:100px;\" id=\"assoc_engagement_how\" name=\"assoc_engagement_how\" class=\"form-control\"><br>
\t
\t<label for=\"assoc_engagement_description\">";
        // line 268
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Describe the success of the programme."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" Outline the success of the programme in terms of how it links within your communities, did it demonstrated positive impact and what are the measures taken to engage with the community."]);
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" Include anything else you feel qualifies or quantifies the success of the programme and how you achieved your goals."]);
        echo "</label>
\t<input type=\"textarea\" rows=\"4\" style=\"height:100px;\" id=\"assoc_engagement_description\" name=\"assoc_engagement_description\" class=\"form-control\"><br>
\t
\t<label for=\"assoc_engagement_implications\">";
        // line 271
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["What are the future implications of the programme? How will this programme affect the future of the profession or industry?"]);
        echo "</label>
\t<input type=\"text\" id=\"assoc_engagement_implications\" name=\"assoc_engagement_implications\" class=\"form-control\"><br>
</div>
<div class=\"py-5\"></div>
<br>
<input type=\"checkbox\" name=\"assoc_verification\" value=\"Yes\" />
<label for=\"assoc_verification\" style=\"display:inline; margin-left:1rem;\">";
        // line 277
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["I certify my answers are true and complete to the best of my knowledge."]);
        echo "</label>
<div class=\"py-2\"></div>



                             ";
        // line 282
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/hidden-fields-form.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 283
        echo "                          \t \t
                        
                            <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-primary\">Send</button>
                        
                        </form>
            <!-- // Modal -->";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/awards/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  608 => 283,  604 => 282,  596 => 277,  587 => 271,  579 => 268,  573 => 265,  567 => 262,  562 => 260,  553 => 254,  546 => 251,  539 => 248,  533 => 245,  527 => 242,  521 => 239,  513 => 234,  507 => 231,  503 => 230,  492 => 222,  485 => 219,  481 => 218,  471 => 211,  465 => 208,  459 => 205,  453 => 202,  447 => 199,  441 => 196,  435 => 193,  431 => 192,  421 => 185,  415 => 182,  409 => 179,  403 => 176,  397 => 173,  391 => 170,  385 => 167,  379 => 164,  375 => 163,  365 => 156,  359 => 153,  353 => 150,  347 => 147,  341 => 144,  335 => 141,  329 => 138,  323 => 135,  317 => 132,  309 => 127,  303 => 124,  297 => 121,  291 => 118,  285 => 115,  279 => 112,  273 => 109,  267 => 106,  261 => 103,  255 => 100,  249 => 97,  239 => 90,  233 => 87,  227 => 84,  221 => 81,  215 => 78,  209 => 75,  203 => 72,  197 => 69,  192 => 67,  187 => 65,  182 => 63,  177 => 61,  172 => 59,  167 => 57,  162 => 55,  154 => 50,  148 => 47,  141 => 43,  135 => 40,  129 => 37,  123 => 34,  117 => 31,  110 => 27,  104 => 24,  97 => 20,  91 => 17,  85 => 14,  77 => 9,  72 => 7,  66 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/awards/default.htm", "");
    }
}
