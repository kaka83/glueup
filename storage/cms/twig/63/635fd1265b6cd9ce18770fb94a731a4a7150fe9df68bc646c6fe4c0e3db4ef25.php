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

/* /var/www/html/glueup/themes/glueup/partials/landing/toolkit.htm */
class __TwigTemplate_a760f39481b2ce0127f04a44cb6dd3fb044f24eea20861df81bc044e7306ea23 extends \Twig\Template
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
        $filters = array("media" => 19, "theme" => 31, "page" => 104);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['media', 'theme', 'page'],
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
        echo "<section id=\"us\" class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-8 d-flex align-items-center text-center mx-auto\">
                    <p class=\"mb-4 sentence mx-auto\">What is <span class=\"line\"><ins> changing </ins></span></p>
                </div>
            </div>
        </div>
</section>
<section class=\"section pt-0\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
            
            \t<div class=\"col-md-8 pt-4 mx-auto\">
\t            \t\t
<div data-spy=\"scroll\" data-target=\"#navbar-example3\" data-offset=\"0\">

<h5 id=\"item-1-1\">A new brand </h5>
<img src=\"";
        // line 19
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-community-feature.svg");
        echo "\" class=\"paygage-visual py-2\" style=\"max-height: 300px; width: auto;\" alt=\"logo\">
<p>EventBank is now Glue Up! EventBank has been transforming professional communities through digital solutions focusing on automation and engagement since 2013. The new name <span style=\"color:#001C6C;\">Glue Up</span> represents the strength of our solutions, our growth, and our commitment to bring communities and engagement to the center of attention, making your success our mission.</p>

<p>Today, our platform empowers organizations in more than 50 countries worldwide, revolutionizing relationships, delivering long-term business value, and making modern engagement more purposeful.</p>

<p>With an intuitive SaaS platform, we are the leading provider of the cloud solutions that provide associations, event organizers, Chambers of Commerce, agencies, marketers, businesses, and NGOs with a full suite of tools designed to streamline operations, modernize processes, and eliminate engagement challenges.</p>





<h5 id=\"item-1-2\" class=\"pt-5\">Our new Glue Up logo  </h5>
<img src=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/glueup-logo-en.svg");
        echo "\" class=\"paygage-visual py-5 px-5\" style=\"max-height: 300px; width: auto;\" alt=\"logo\">
<p>Our new logo is bolder, simpler, and better structured. It is composed of three dots, two of them interconnected. It represents the relationship between our software, the organizations we work with and their communities.</p>

<p>We want to convey the importance of that relationship between organizations (our customers) and their members as that is the main mission of Glue Up.</p>

<p>Our new color scheme brings a strength and clarity to our communication, making it easier to read and understand for everyone.</p>

<p>Our new font is Ubuntu. It is bold, simple, and universal. Just like our Glue Up platform. We have decided for Ubuntu - an open source fontset that meets all these criteria and further emphasizes our focus on communities and open society.</p>

<p>The new logo will be updated on the platform and in our mobile apps. Our system emails will also include our new Glue Up logo. Download web-friendly versions of our logo in black, white, and color in multiple formats and learn more about how to use our logos in our new branding guidelines.</p>

<div class=\"alert alert-light\" role=\"alert\">
\t\t\t\t\t\t\t\t  <i class=\"bullet-icon icon-documents px-0\" style=\"background-color:transparent; color:#0D62FE; position: absolute; align-self: center; margin: -20px 0 0 -5px;\"></i>    
\t\t\t\t\t\t\t<span style=\"margin-left: 40px; color:#0D62FE;\"> <a style=\"color:#0D62FE;\" href=\"https://eventbank-my.sharepoint.com/:u:/g/personal/alex_eventbank_com1/EfcsR2KqOatBtlPsdzfp6fgBptjRd1JRp-ocTClrEkW7Ng\">Download Glue Up Visual Identity Guidelines and Logo Formats</a></span>
\t\t\t\t\t\t\t</div>

<h5 id=\"item-1-3\" class=\"pt-5\">Our Website</h5>
<img src=\"";
        // line 48
        echo $this->extensions['System\Twig\Extension']->mediaFilter("web@2x.png");
        echo "\" class=\"rounded mb-3\" alt=\"Glueup.com\">
<p>Our new website, <a href=\"https://www.glueup.com\"><span style=\" align-self: center;\">glueup.com</span></a> (http://glueup.com/) is consistent with the new and improved brand direction. You can find comprehensive information about our products and features, industries we serve and many valuable resources that can help you become better there.</p>

<h5 id=\"item-1-3\" class=\"pt-5\">New ‘My Glue\"’ Engagement Hub</h5>

<img src=\"";
        // line 53
        echo $this->extensions['System\Twig\Extension']->mediaFilter("user-intro-step2-en@2x.png");
        echo "\" class=\"rounded mb-3\" alt=\"My Glue \">
<p>‘My Glue’ (formerly My EventBank) is a new digital space for your community where they can share ideas, discuss various topics, and stay social even when meeting in person is not an option. In addition, all your events, subscriptions and memberships you host on Glue Up are available in My Glue too, so your attendees and members can find the information they need and update their preferences fast.</p>

<div class=\"row\">
  <div class=\"col-md-3 mx-auto text-center\">
  <a class=\"btn btn-primary btn-round-full pointer mx-auto\" style=\"padding: .5rem 1rem;\" href=\"https://www.glueup.com/my/home/\"><span style=\" align-self: center;\">Explore 'My Glue' Engagement Hub</span></a>
  </div>
  </div>


</div>
\t            \t
\t            
\t            \t</div>
            \t</div>
            \t\t\t\t
           \t</div>
        </div>
</section>
<section id=\"same\" class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-8 d-flex align-items-center text-center mx-auto\">
                    <p class=\"mb-4 sentence mx-auto\">What is <span class=\"line\"><ins> not </ins></span> changing</p>
                </div>
            </div>
        </div>
</section>

<section  class=\"section pt-0\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
            
            \t<div class=\"col-md-8 pt-4 mx-auto\">
\t            \t\t
<div data-spy=\"scroll\" data-target=\"#navbar-example3\" data-offset=\"80\">

<h5 id=\"item-11-1\"  class=\"pt-5\">Our Mission </h5>
<p><span style=\"color:#001C6C;\">Glue Up</span> takes EventBank's heritage to bring communities and engagement to its very center making your success our mission. We believe that with our new name; we are able to better communicate what we do and how we fulfill our mission to <span style=\"color:#001C6C;\">transform the way professional communities enable and enrich relationships</span>.</p>

<h5 id=\"item-11-1\"  class=\"pt-5\">Our Service </h5>
<p>Our team is made up of experts from 20 countries who are dedicated to providing the highest level of innovation and service to every customer. Our Customer Success team around the globe is working hard to ensure we provide an unparalleled level of service and support to ensure the success of our customers. We will of course continue to release improvements and new features with the same if not more brilliance, and professionalism you've come to experience over the years.</p>

<h5 id=\"item-11-1\"  class=\"pt-5\">Our Commitment</h5>

<p>We at <span style=\"color:#001C6C;\">Glue Up</span> are deeply committed to our customers, partners, and professional communities worldwide to create a world where every person and organization uses our technology to create opportunities for success. </p>

<p>Technology has changed how businesses and people interact and get their information. Many organizations have been left behind by not keeping up with the times and new ways of doing business and therefore are experiencing challenges to engage and drive revenue. Glue Up’s all-in-one engagement management software is able to reverse that trend and ensure all organizations stay on top of technology trends that are shaping our world today and tomorrow.</p>

<h5 id=\"item-11-1\"  class=\"pt-5\">Your Agreement & Our Legal Entities</h5>

<p>There will be no changes to the agreement you have signed with EventBank as our legal entities stay the same. “Glue Up” refers to Glue Up, Inc. or EventBank Inc., and its affiliates, and subsidiaries. For full information about our entities, view our <a href=\"";
        // line 104
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("legal/terms-and-conditions-organizations");
        echo "\">Terms and Conditions for Organizations</a> page. </p>



</div>
\t            \t
\t            
\t            \t</div>
            \t</div>
            \t\t\t\t
           \t</div>
        </div>
</section>

<section id=\"org\"  class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-8 d-flex align-items-center text-center mx-auto\">
                    <p class=\"mb-4 sentence mx-auto\">What changes for <span class=\"line\"><ins> you</ins></span> as an organization</p>
                </div>
            </div>
        </div>
</section>
<section class=\"section pt-0\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
            \t<div class=\"col-md-8 pt-4 mx-auto\">
\t            \t\t
<div data-spy=\"scroll\" data-target=\"#navbar-example3\"  data-offset=\"80\">

<h5 id=\"item-2-1\">How will this affect my organization? </h5>

<p>All event pages, campaigns, and other links will be <strong>automatically</strong> redirected to the new corresponding page in the new domain to ensure there is no disruption in the service. If users try to access the service using former EventBank links, they will be redirected to the new page on Glue Up instead.</p>

<p>If you were using EventBank API before, <a class=\"\" href=\"#item-2-10\">check the instructions on how to change it</a>.</p>




<h5 id=\"item-2-2\" class=\"pt-5\">What happens with my published events?</h5>
<p>All published events will be <strong>automatically</strong> redirected to new links. You don’t need to amend any links even if you have promoted your events on your official website, on a third party website or on your social media.</p>
<h5 id=\"item-2-3\" class=\"pt-5\">What happens if I have linked certain pages of EventBank on my website?</h5>
<p>Your visitors will be automatically redirected to the corresponding page on Glue Up. If you prefer, you may update the links, but this is not a mandatory step.</p>
<h5 id=\"item-2-4\" class=\"pt-5\">What happens if I have integrated other apps such as Xero, Quickbooks, Zoom, or Google Analytics?</h5>
<p>If you have integrated your EventBank account with Xero, Quickbooks, Zoom or Google Analytics before, you don’t need to take any action and you can continue using these integrations without any changes. </p>
<h5 id=\"item-2-5\" class=\"pt-5\">What happens if I am using an EventBank sender domain?</h5>
<p>EventBank sender domain (i.e. abc.xyz@companyname.eventbankmail.com)  will be  <strong>gradually</strong> updated to the new abc.xyz@companyname.glueupmail.com sender domain. The whole migration process to the new Glue Up sender domain should be completed by September 7th, 2020. All new Glue Up customers who start onboarding after August 24, 2020 and update their DNS settings will be automatically using new Glue Up sender domain (i.e. abc@yourcompanyname.glueupmail.com). </p>
<h5 id=\"item-2-6\" class=\"pt-5 pb-2\">What happens with EventBank Manager App?</h5> 
<img src=\"";
        // line 152
        echo $this->extensions['System\Twig\Extension']->mediaFilter("manager-app@2x.png");
        echo "\" class=\"rounded mb-3\" alt=\"Glue Up Manager App \">
<p>The EventBank Manager App is now Glue Up Manager. If you have downloaded the EventBank Manager App before, you don’t need to install or download anything again, simply update the EventBank Manager App from the App Store or Google Play. Then, log back in, choose your corresponding server and start managing your community from the palm of your hand.
 <div class=\"row\">
  <div class=\"col-md-5 mx-auto\">
  <a class=\"btn btn-primary btn-round-full pointer d-flex center-block mx-auto\" style=\"padding: .5rem 1rem;\" href=\"https://apps.apple.com/us/app/eventbank-manager/id740353437\"><i class=\"icon-apple\" style=\"    font-size: 30px; margin-right:10px; align-self: center;\"></i><span style=\" align-self: center;\">Glue Up Manager on the App Store</span></a>
  <a class=\"btn btn-primary btn-round-full pointer d-flex center-block mx-auto mt-3\"  style=\"padding: .5rem 1rem;\" href=\"https://play.google.com/store/apps/details?id=com.eventbank.android\"><i class=\"icon-android\" style=\"    font-size: 30px; margin-right:10px; align-self: center;\"></i><span style=\" align-self: center;\">Glue Up Manager on Google Play</span></a></div>
  </div>
<h5 id=\"item-2-8\" class=\"pt-5\">What will happen to my contract with EventBank?</h5>
<p>There will be no changes to the agreement you have signed with EventBank as our legal entities stay the same. </p>
<h5 id=\"item-2-9\" class=\"pt-5\">Has EventBank been acquired by another company?</h5>
<p>No, EventBank hasn’t been acquired by another company.  </p>
<h5 id=\"item-2-10\" class=\"pt-5\">How to update EventBank API?</h5>

<p>If you have integrated certain parts of our platform with your website via EventBank API, make sure to update your endpoints from EventBank to Glue Up (the page will be redirecting to the corresponding server on .COM / .CN / .RU).</p> <p>Make sure to update your end-points in the next month following our new brand release, as the temporary redirection of end-points will be discontinued after that date.</p>
<div class=\"alert alert-warning\" role=\"alert\">
\t\t\t\t\t\t\t\t  <i class=\"bullet-icon icon-alert px-0\" style=\"background-color:transparent; color:#FF8100; position: absolute; align-self: center; margin: -20px 0 0 -5px;\"></i>    
\t\t\t\t\t\t\t<span class=\"font-weight-light d-block\" style=\"margin-left: 40px;\">If you are currently using our API, you will have to take action. Make sure to update your end-points using new Glue Up API by <span style=\"color:#FB3640;\">September 30, 2020</span></span>
\t\t\t\t\t\t\t</div>
<p>Check out the new <a href=\"https://glueupapi.docs.apiary.io/\">Glue Up API documentation</a>.</p>
<p>Here is a step by step guide to help you migrate to new Glue Up API:<br>
<div class=\"pl-3\">
<p>• From the API files, in EventBank.php, update the part of the variable *\$API_endpoint* from “eventbank.com/cn/ru\" to “glueup.com/cn/ru”.</p>
<p>• In any code that redirects the user from your website to EventBank (Glue Up), update any URL containing “eventbank.com/cn/ru\" to “glueup.com/cn/ru”.</p>
<p>• In any of the widget code, update any URL containing “eventbank.com/cn/ru\" to “glueup.com/cn/ru (http://glueup.com/cn/ru).\"</p>
</div>
<p>If you need any help, please <a href=\"#support\" value=\"Submit\" id=\"support-link\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#support\">contact us</a> or send us an email at <a href=\"mailto: support@glueup.com\">support@glueup.com</a> or <a href=\"mailto: support@glueup.com\">support@eventbank.com</a>.</p>


</div>
\t            \t
\t            
\t            \t</div>
            \t</div>
            \t\t\t\t
           \t</div>
        </div>
</section>
<section  id=\"user\" class=\"section \">
        <div class=\"container\">
            <div class=\"row flex-row\">
                <div class=\"col-lg-8 d-flex align-items-center text-center mx-auto\">
                    <p class=\"mb-4 sentence mx-auto\">What changes for your <span class=\"line\"><ins> community</ins></span></p>
                </div>
            </div>
        </div>
</section>

<section class=\"section pt-0\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
            \t<div class=\"col-md-8 pt-4 mx-auto\">
\t            \t\t
<div data-spy=\"scroll\" data-target=\"#navbar-example3\" data-offset=\"80\">

<h5 id=\"item-3-1\">New Login Page</h5>

<p>On August 24th, 2020 all users will be logged out of the platform. To log back in you simply need to go to <a href=\"https://glueup.com/account/login\">log in</a> Glue Up (https://glueup.com/account/login) and use your former login credentials. All your data stored on ‘My EventBank’ such as previous events, newsletters and memberships will be available in your personal engagement hub ‘<span style=\"color:#001C6C;\">My Glue</span>', and the same will apply for all registered users.</p>


<h5 id=\"item-3-2\" class=\"pt-5\">How to communicate this change with my members, attendees and other stakeholders?</h5>

<p>As with every change, it’s important to explain the impact of the transition to your community and answer any questions they might have. To make it easier for you, we have prepared a draft of an <a  href=\"https://www.eventbank.com/organization/170/campaign/50739/\">email campaign</a> with the most relevant information that you can use to update your community about Glue Up and what it means to them. Feel free to use and edit this content the way you like.</p>

<h5 id=\"item-3-3\" class=\"pt-5 pb-2\">What happens to the EventBank App for attendees and members?</h5>
<img src=\"";
        // line 216
        echo $this->extensions['System\Twig\Extension']->mediaFilter("my-glue@2x.png");
        echo "\" class=\"rounded mb-3\" alt=\"Glue Up Manager App \">
<p>The EventBank App for attendees and members is now My Glue. If you have downloaded the EventBank App before, you don’t need to install or download anything again, simply update the EventBank App from the App Store or Google Play. Then, log back in, choose your corresponding server and engage with your organization from anywhere.
 <div class=\"row\">
  <div class=\"col-md-5 mx-auto\">
  <a class=\"btn btn-primary btn-round-full pointer d-flex center-block mx-auto\" style=\"padding: .5rem 1rem;\" href=\"https://apps.apple.com/us/app/eventbank/id958545893\"><i class=\"icon-apple\" style=\"    font-size: 30px; margin-right:10px; align-self: center;\"></i><span style=\" align-self: center;\">My Glue on the App Store</span></a>
  <a class=\"btn btn-primary btn-round-full pointer d-flex center-block mx-auto mt-3\"  style=\"padding: .5rem 1rem;\" href=\"https://play.google.com/store/apps/details?id=com.eventbank.android.attendee\"><i class=\"icon-android\" style=\"    font-size: 30px; margin-right:10px; align-self: center;\"></i><span style=\" align-self: center;\">My Glue on Google Play</span></a></div>
  </div>

<h5 id=\"item-3-4\" class=\"pt-5\">What should I tell my members/registered attendees/other stakeholders?</h5>
<p>On August 24, 2020, your members, event attendees, and all other registered users will be logged out of EventBank and redirected to the new <a href=\"https://glueup.com/account/login\">login page</a> on Glue Up (https://glueup.com/account/login) that will display the information about the changes, and from where users can log in using their former login credentials they used on EventBank. The redirection will be automatic, so you don’t need to take any action.</p>
<h5 id=\"item-3-5\" class=\"pt-5\">If I am a member of an organization, what happens to my profile?</h5>
<p>If you are a member of an organization, you will have to <a href=\"https://glueup.com/account/login\">log in</a> from the Glue Up page (https://glueup.com/account/login). Your member details and access to the information from organizations you are a member of will be available there. If you have received emails to apply or renew a membership, you can still click on those links, and you will be redirected to the corresponding page on Glue Up to complete the remaining steps.</p>
<h5 id=\"item-3-6\" class=\"pt-5\">If I have registered for an event, what happens to my future and past event registrations?</h5>
<p>If you have registered for an event, you can still access your registrations via My Glue. You will have to <a href=\"https://glueup.com/account/login\">log in</a> from Glue Up (https://glueup.com/account/login), where your profile and all information related to your account such as previous events, memberships, subscriptions will be available.</p>

</div>
\t            \t
\t            
\t            \t</div>
            \t</div>
            \t\t\t\t
           \t</div>
        </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/landing/toolkit.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 216,  230 => 152,  179 => 104,  125 => 53,  117 => 48,  97 => 31,  82 => 19,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/landing/toolkit.htm", "");
    }
}
