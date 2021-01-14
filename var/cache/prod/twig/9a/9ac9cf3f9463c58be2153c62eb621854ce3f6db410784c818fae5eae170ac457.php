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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/Create/shipping.html.twig */
class __TwigTemplate_27db8f17e9817436e1ea2fb800cfbedaac7d7eaee34e355acb3bcdd069188024 extends \Twig\Template
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
        echo "<div class=\"card d-none\" id=\"shipping-block\">
  <h3 class=\"card-header\">
    ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shipping", [], "Admin.Actions"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">

    <form class=\"js-shipping-form d-none\">
      <div class=\"form-group row\">
        <div class=\"col-3\">
        <span class=\"float-right\">
          ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delivery option", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
        </span>
        </div>
        <div class=\"col-4\">
          <select class=\"form-control\" id=\"delivery-option-select\" name=\"carrier-id\"></select>
        </div>
      </div>
      <div class=\"form-group row\">
        <div class=\"col-3\">
        <span class=\"float-right\">
          ";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shipping price (Tax incl.)", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
        </span>
        </div>
        <div class=\"col-4\">
          <p><strong class=\"js-total-shipping-tax-inc\"></strong></p>
        </div>
      </div>
      <div class=\"form-group row\">
        <div class=\"col-3\">
        <span class=\"float-right\">
          ";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Free shipping", [], "Admin.Shipping.Feature"), "html", null, true);
        echo "
        </span>
        </div>
        <div class=\"col-4\">
        <span class=\"ps-switch\">
          <input id=\"free-shipping_0\" class=\"js-free-shipping-switch\" name=\"free_shipping\" value=\"0\" type=\"radio\">
          <label for=\"free-shipping_0\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No", [], "Admin.Global"), "html", null, true);
        echo "</label>
          <input id=\"free-shipping_1\" class=\"js-free-shipping-switch\" name=\"free_shipping\" value=\"1\" checked=\"\" type=\"radio\">
          <label for=\"free-shipping_1\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes", [], "Admin.Global"), "html", null, true);
        echo "</label>
          <span class=\"slide-button\"></span>
        </span>
        </div>
      </div>
      <div class=\"form-group row ";
        // line 68
        if ( !($context["recycledPackagingEnabled"] ?? null)) {
            echo "d-none";
        }
        echo "\">
        <div class=\"col-3\">
        <span class=\"float-right\">
          ";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Recycled packaging", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
        </span>
        </div>
        <div class=\"col-4\">
          <span class=\"ps-switch\">
            <input id=\"recycled-packaging_0\" class=\"js-recycled-packaging-switch\" name=\"recycled_packaging\" value=\"0\" checked=\"\" type=\"radio\">
            <label for=\"recycled-packaging_0\">";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No", [], "Admin.Global"), "html", null, true);
        echo "</label>
            <input id=\"recycled-packaging_1\" class=\"js-recycled-packaging-switch\" name=\"recycled_packaging\" value=\"1\" type=\"radio\">
            <label for=\"recycled-packaging_1\">";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes", [], "Admin.Global"), "html", null, true);
        echo "</label>
            <span class=\"slide-button\"></span>
          </span>
        </div>
      </div>
      <div class=\"form-group row ";
        // line 84
        if ( !($context["giftSettingsEnabled"] ?? null)) {
            echo "d-none";
        }
        echo "\">
        <div class=\"col-3\">
        <span class=\"float-right\">
          ";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gift", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
        </span>
        </div>
        <div class=\"col-4\">
          <span class=\"ps-switch\">
            <input id=\"is-gift_0\" class=\"js-is-gift-switch\" name=\"is_gift\" value=\"0\" checked=\"\" type=\"radio\">
            <label for=\"is-gift_0\">";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No", [], "Admin.Global"), "html", null, true);
        echo "</label>
            <input id=\"is-gift_1\" class=\"js-is-gift-switch\" name=\"is_gift\" value=\"1\" type=\"radio\">
            <label for=\"is-gift_1\">";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes", [], "Admin.Global"), "html", null, true);
        echo "</label>
            <span class=\"slide-button\"></span>
          </span>
        </div>

    </span>

      </div>
      <div class=\"form-group row type-text ";
        // line 103
        if ( !($context["giftSettingsEnabled"] ?? null)) {
            echo "d-none";
        }
        echo "\">
        <div class=\"col-3\">
        <label class=\"float-right\">
          ";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gift message", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
        </label>
        </div>
        <div class=\"col-4\">
          <textarea id=\"cart_gift_message\" name=\"cart_gift_message\" class=\"form-control\" cols=\"40\" rows=\"4\"></textarea>
        </div>
      </div>
    </form>

    <div class=\"js-no-carrier-block d-none\">
      <div class=\"alert alert-warning\">
        <div class=\"alert-text\">
          ";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No carrier can be applied to this order", [], "Admin.Orderscustomers.Notification"), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/shipping.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 118,  164 => 106,  156 => 103,  145 => 95,  140 => 93,  131 => 87,  123 => 84,  115 => 79,  110 => 77,  101 => 71,  93 => 68,  85 => 63,  80 => 61,  71 => 55,  58 => 45,  45 => 35,  34 => 27,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/shipping.html.twig", "C:\\laragon\\www\\testPrestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Order\\Order\\Blocks\\Create\\shipping.html.twig");
    }
}
