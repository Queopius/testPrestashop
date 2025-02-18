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
class __TwigTemplate_727fef33a8845d80888985769119b38e4195e28f6a127a9365528e07dc3b47dd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/shipping.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/shipping.html.twig"));

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
        if ( !($context["recycledPackagingEnabled"] ?? $this->getContext($context, "recycledPackagingEnabled"))) {
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
        if ( !($context["giftSettingsEnabled"] ?? $this->getContext($context, "giftSettingsEnabled"))) {
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
        if ( !($context["giftSettingsEnabled"] ?? $this->getContext($context, "giftSettingsEnabled"))) {
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  185 => 118,  170 => 106,  162 => 103,  151 => 95,  146 => 93,  137 => 87,  129 => 84,  121 => 79,  116 => 77,  107 => 71,  99 => 68,  91 => 63,  86 => 61,  77 => 55,  64 => 45,  51 => 35,  40 => 27,  36 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}
<div class=\"card d-none\" id=\"shipping-block\">
  <h3 class=\"card-header\">
    {{ 'Shipping'|trans({}, 'Admin.Actions') }}
  </h3>
  <div class=\"card-body\">

    <form class=\"js-shipping-form d-none\">
      <div class=\"form-group row\">
        <div class=\"col-3\">
        <span class=\"float-right\">
          {{ 'Delivery option'|trans({}, 'Admin.Orderscustomers.Feature') }}
        </span>
        </div>
        <div class=\"col-4\">
          <select class=\"form-control\" id=\"delivery-option-select\" name=\"carrier-id\"></select>
        </div>
      </div>
      <div class=\"form-group row\">
        <div class=\"col-3\">
        <span class=\"float-right\">
          {{ 'Shipping price (Tax incl.)'|trans({}, 'Admin.Orderscustomers.Feature') }}
        </span>
        </div>
        <div class=\"col-4\">
          <p><strong class=\"js-total-shipping-tax-inc\"></strong></p>
        </div>
      </div>
      <div class=\"form-group row\">
        <div class=\"col-3\">
        <span class=\"float-right\">
          {{ 'Free shipping'|trans({}, 'Admin.Shipping.Feature') }}
        </span>
        </div>
        <div class=\"col-4\">
        <span class=\"ps-switch\">
          <input id=\"free-shipping_0\" class=\"js-free-shipping-switch\" name=\"free_shipping\" value=\"0\" type=\"radio\">
          <label for=\"free-shipping_0\">{{ 'No'|trans({}, 'Admin.Global') }}</label>
          <input id=\"free-shipping_1\" class=\"js-free-shipping-switch\" name=\"free_shipping\" value=\"1\" checked=\"\" type=\"radio\">
          <label for=\"free-shipping_1\">{{ 'Yes'|trans({}, 'Admin.Global') }}</label>
          <span class=\"slide-button\"></span>
        </span>
        </div>
      </div>
      <div class=\"form-group row {% if not recycledPackagingEnabled %}d-none{% endif %}\">
        <div class=\"col-3\">
        <span class=\"float-right\">
          {{ 'Recycled packaging'|trans({}, 'Admin.Orderscustomers.Feature') }}
        </span>
        </div>
        <div class=\"col-4\">
          <span class=\"ps-switch\">
            <input id=\"recycled-packaging_0\" class=\"js-recycled-packaging-switch\" name=\"recycled_packaging\" value=\"0\" checked=\"\" type=\"radio\">
            <label for=\"recycled-packaging_0\">{{ 'No'|trans({}, 'Admin.Global') }}</label>
            <input id=\"recycled-packaging_1\" class=\"js-recycled-packaging-switch\" name=\"recycled_packaging\" value=\"1\" type=\"radio\">
            <label for=\"recycled-packaging_1\">{{ 'Yes'|trans({}, 'Admin.Global') }}</label>
            <span class=\"slide-button\"></span>
          </span>
        </div>
      </div>
      <div class=\"form-group row {% if not giftSettingsEnabled %}d-none{% endif %}\">
        <div class=\"col-3\">
        <span class=\"float-right\">
          {{ 'Gift'|trans({}, 'Admin.Orderscustomers.Feature') }}
        </span>
        </div>
        <div class=\"col-4\">
          <span class=\"ps-switch\">
            <input id=\"is-gift_0\" class=\"js-is-gift-switch\" name=\"is_gift\" value=\"0\" checked=\"\" type=\"radio\">
            <label for=\"is-gift_0\">{{ 'No'|trans({}, 'Admin.Global') }}</label>
            <input id=\"is-gift_1\" class=\"js-is-gift-switch\" name=\"is_gift\" value=\"1\" type=\"radio\">
            <label for=\"is-gift_1\">{{ 'Yes'|trans({}, 'Admin.Global') }}</label>
            <span class=\"slide-button\"></span>
          </span>
        </div>

    </span>

      </div>
      <div class=\"form-group row type-text {% if not giftSettingsEnabled %}d-none{% endif %}\">
        <div class=\"col-3\">
        <label class=\"float-right\">
          {{ 'Gift message'|trans({}, 'Admin.Orderscustomers.Feature') }}
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
          {{ 'No carrier can be applied to this order'|trans({}, 'Admin.Orderscustomers.Notification') }}
        </div>
      </div>
    </div>
  </div>
</div>
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/shipping.html.twig", "C:\\laragon\\www\\testPrestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Order\\Order\\Blocks\\Create\\shipping.html.twig");
    }
}
