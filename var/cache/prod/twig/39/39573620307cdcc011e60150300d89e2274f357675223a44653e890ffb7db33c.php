<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/Create/addresses.html.twig */
class __TwigTemplate_2ead8834697ad928200b3bc8bdcb774e25960c71d5aa5792438c2814cf9035da extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
<div class=\"card d-none\" id=\"addresses-block\">
  <h3 class=\"card-header\">
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Addresses", [], "Admin.Global"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"row d-none\" id=\"addresses-warning\">
      <div class=\"col\">
        <div class=\"alert alert-warning\">
          <div class=\"alert-text\">
            ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You must add at least one address to process the order.", [], "Admin.Orderscustomers.Notification"), "html", null, true);
        echo "
          </div>
        </div>
      </div>
    </div>
    <div class=\"row d-none\" id=\"addresses-content\">
      <div class=\"col\">
        <span>";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delivery", [], "Admin.Global"), "html", null, true);
        echo "</span>
        <select class=\"form-control js-address-select custom-select\" id=\"delivery-address-select\"></select>

        <div class=\"card mt-3\">
          <div class=\"card-body clearfix\">
            <a class=\"btn btn-outline-primary float-right\" id=\"js-delivery-address-edit-btn\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit", [], "Admin.Actions"), "html", null, true);
        echo "</a>
            <div id=\"delivery-address-details\"></div>
          </div>
        </div>
      </div>
      <div class=\"col\">
        <span>";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice", [], "Admin.Global"), "html", null, true);
        echo "</span>
        <select class=\"form-control js-address-select custom-select\" id=\"invoice-address-select\"></select>

        <div class=\"card mt-3\">
          <div class=\"card-body clearfix\">
            <a class=\"btn btn-outline-primary float-right\" id=\"js-invoice-address-edit-btn\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit", [], "Admin.Actions"), "html", null, true);
        echo "</a>
            <div id=\"invoice-address-details\"></div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col\">
        <a class=\"btn btn-primary\" id=\"js-add-address-btn\" href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_addresses_create", ["liteDisplaying" => 1, "submitFormAjax" => 1]), "html", null, true);
        echo "\">
          ";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a new address", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
        </a>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/addresses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 67,  91 => 66,  80 => 58,  72 => 53,  63 => 47,  55 => 42,  45 => 35,  35 => 28,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/addresses.html.twig", "C:\\laragon\\www\\testPrestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Order\\Order\\Blocks\\Create\\addresses.html.twig");
    }
}
