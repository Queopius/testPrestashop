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

/* @PrestaShop/Admin/Sell/Address/Blocks/form.html.twig */
class __TwigTemplate_e6625d4f01ac0e084fd62006b4203739594cf34435431b6d7f1d49c85caf6ce2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'customer_information' => [$this, 'block_customer_information'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Address/Blocks/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Address/Blocks/form.html.twig"));

        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Sell/Address/Blocks/form.html.twig", 26)->unwrap();
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["addressForm"] ?? $this->getContext($context, "addressForm")), 'form_start');
        echo "
<div class=\"card\">
  <div class=\"card-header\">
    <i class=\"material-icons\">mail_outline</i>
    ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Addresses", [], "Admin.Navigation.Menu"), "html", null, true);
        echo "
  </div>

  <div class=\"card-block row\">
    <div class=\"card-text\">
      ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["addressForm"] ?? $this->getContext($context, "addressForm")), 'errors');
        echo "

      ";
        // line 39
        $this->displayBlock('customer_information', $context, $blocks);
        // line 63
        echo "
      ";
        // line 64
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["addressForm"] ?? $this->getContext($context, "addressForm")), "dni", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Identification number", [], "Admin.Orderscustomers.Feature"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The national ID card number of this person, or a unique tax identification number.", [], "Admin.Orderscustomers.Help")]);
        // line 67
        echo "

      ";
        // line 69
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["addressForm"] ?? $this->getContext($context, "addressForm")), "alias", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Address alias", [], "Admin.Orderscustomers.Feature"), "help" => ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid characters:", [], "Admin.Notifications.Info") . " <>;=#{}")]);
        // line 72
        echo "

      ";
        // line 74
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["addressForm"] ?? $this->getContext($context, "addressForm")), "first_name", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("First name", [], "Admin.Global"), "help" => ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid characters:", [], "Admin.Notifications.Info") . " 0-9!<>,;?=+()@#\"�{}_\$%:")]);
        // line 77
        echo "

      ";
        // line 79
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["addressForm"] ?? $this->getContext($context, "addressForm")), "last_name", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last name", [], "Admin.Global"), "help" => ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid characters:", [], "Admin.Notifications.Info") . " 0-9!<>,;?=+()@#\"�{}_\$%:")]);
        // line 82
        echo "

      ";
        // line 84
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["addressForm"] ?? $this->getContext($context, "addressForm")), "company", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Company", [], "Admin.Global"), "help" => ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid characters:", [], "Admin.Notifications.Info") . " <>;=#{}")]);
        // line 87
        echo "

      ";
        // line 89
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["addressForm"] ?? $this->getContext($context, "addressForm")), "vat_number", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("VAT number", [], "Admin.Orderscustomers.Feature")]);
        // line 91
        echo "

      ";
        // line 93
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["addressForm"] ?? $this->getContext($context, "addressForm")), "address1", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Address", [], "Admin.Global")]);
        // line 95
        echo "

      ";
        // line 97
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["addressForm"] ?? $this->getContext($context, "addressForm")), "address2", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Address (2)", [], "Admin.Global")]);
        // line 99
        echo "

      ";
        // line 101
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["addressForm"] ?? $this->getContext($context, "addressForm")), "postcode", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Zip/postal code", [], "Admin.Global")]);
        // line 103
        echo "

      ";
        // line 105
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["addressForm"] ?? $this->getContext($context, "addressForm")), "city", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("City", [], "Admin.Global")]);
        // line 107
        echo "

      ";
        // line 109
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["addressForm"] ?? $this->getContext($context, "addressForm")), "id_country", []), ["attr" => ["class" => "js-customer-country-select", "data-states-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_country_states")]], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Country", [], "Admin.Global")]);
        // line 113
        echo "

      <div class=\"js-address-state-select";
        // line 115
        if (twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["addressForm"] ?? $this->getContext($context, "addressForm")), "id_state", []), "vars", []), "choices", []))) {
            echo " d-none";
        }
        echo "\">
        ";
        // line 116
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["addressForm"] ?? $this->getContext($context, "addressForm")), "id_state", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("State", [], "Admin.Global")]);
        // line 118
        echo "
      </div>

      ";
        // line 121
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["addressForm"] ?? $this->getContext($context, "addressForm")), "phone", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Phone", [], "Admin.Global")]);
        // line 123
        echo "

      ";
        // line 125
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["addressForm"] ?? $this->getContext($context, "addressForm")), "phone_mobile", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mobile phone", [], "Admin.Global")]);
        // line 127
        echo "

      ";
        // line 129
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["addressForm"] ?? $this->getContext($context, "addressForm")), "other", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Other", [], "Admin.Global"), "help" => ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid characters:", [], "Admin.Notifications.Info") . " <>;=#{}")]);
        // line 132
        echo "

      ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["addressForm"] ?? $this->getContext($context, "addressForm")), 'rest');
        echo "
    </div>
  </div>

  <div class=\"card-footer\">
    <div class=\"d-inline-flex\">
      ";
        // line 140
        if (((isset($context["displayInIframe"]) || array_key_exists("displayInIframe", $context)) && (($context["displayInIframe"] ?? $this->getContext($context, "displayInIframe")) == true))) {
            // line 141
            echo "        <a href=\"javascript:window.parent.\$.fancybox.close();\" class=\"btn btn-outline-secondary\">
      ";
        } else {
            // line 143
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, (((isset($context["cancelPath"]) || array_key_exists("cancelPath", $context))) ? (_twig_default_filter(($context["cancelPath"] ?? $this->getContext($context, "cancelPath")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_addresses_index"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_addresses_index"))), "html", null, true);
            echo "\" class=\"btn btn-outline-secondary\">
      ";
        }
        // line 145
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
      </a>
    </div>
    <div class=\"d-inline-flex float-right\">
      <button class=\"btn btn-primary\">";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
    </div>
  </div>
</div>
";
        // line 153
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["addressForm"] ?? $this->getContext($context, "addressForm")), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 39
    public function block_customer_information($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customer_information"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customer_information"));

        // line 40
        echo "        ";
        if ( !(null === ($context["customerInformation"] ?? $this->getContext($context, "customerInformation")))) {
            // line 41
            echo "          ";
            if ($this->getAttribute(($context["addressForm"] ?? null), "id_customer", [], "any", true, true)) {
                // line 42
                echo "            ";
                echo $context["ps"]->getform_widget_with_error($this->getAttribute(($context["addressForm"] ?? $this->getContext($context, "addressForm")), "id_customer", []));
                echo "
          ";
            }
            // line 44
            echo "          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              ";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer", [], "Admin.Global"), "html", null, true);
            echo "
            </label>
            <div class=\"col-sm\">
              <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_customers_view", ["customerId" => ($context["customerId"] ?? $this->getContext($context, "customerId"))]), "html", null, true);
            echo "\" class=\"btn btn-outline-secondary\">
                <i class=\"material-icons\">remove_red_eye</i>
                ";
            // line 51
            echo twig_escape_filter($this->env, ($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "html", null, true);
            echo "
              </a>
            </div>
          </div>
        ";
        }
        // line 56
        echo "        ";
        if ($this->getAttribute(($context["addressForm"] ?? null), "customer_email", [], "any", true, true)) {
            // line 57
            echo "          ";
            echo $context["ps"]->getform_group_row($this->getAttribute(($context["addressForm"] ?? $this->getContext($context, "addressForm")), "customer_email", []), ["attr" => ["data-customer-information-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_customer_for_address_information")]], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer email", [], "Admin.Orderscustomers.Feature")]);
            // line 60
            echo "
        ";
        }
        // line 62
        echo "      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Address/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 62,  265 => 60,  262 => 57,  259 => 56,  251 => 51,  246 => 49,  240 => 46,  236 => 44,  230 => 42,  227 => 41,  224 => 40,  215 => 39,  203 => 153,  196 => 149,  188 => 145,  182 => 143,  178 => 141,  176 => 140,  167 => 134,  163 => 132,  161 => 129,  157 => 127,  155 => 125,  151 => 123,  149 => 121,  144 => 118,  142 => 116,  136 => 115,  132 => 113,  130 => 109,  126 => 107,  124 => 105,  120 => 103,  118 => 101,  114 => 99,  112 => 97,  108 => 95,  106 => 93,  102 => 91,  100 => 89,  96 => 87,  94 => 84,  90 => 82,  88 => 79,  84 => 77,  82 => 74,  78 => 72,  76 => 69,  72 => 67,  70 => 64,  67 => 63,  65 => 39,  60 => 37,  52 => 32,  45 => 28,  42 => 27,  40 => 26,  37 => 25,);
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

{% import '@PrestaShop/Admin/macros.html.twig' as ps %}

{{ form_start(addressForm) }}
<div class=\"card\">
  <div class=\"card-header\">
    <i class=\"material-icons\">mail_outline</i>
    {{ 'Addresses'|trans({}, 'Admin.Navigation.Menu') }}
  </div>

  <div class=\"card-block row\">
    <div class=\"card-text\">
      {{ form_errors(addressForm) }}

      {% block customer_information %}
        {% if customerInformation is not null %}
          {% if addressForm.id_customer is defined %}
            {{ ps.form_widget_with_error(addressForm.id_customer) }}
          {% endif %}
          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              {{ 'Customer'|trans({}, 'Admin.Global') }}
            </label>
            <div class=\"col-sm\">
              <a href=\"{{ path('admin_customers_view', {'customerId': customerId}) }}\" class=\"btn btn-outline-secondary\">
                <i class=\"material-icons\">remove_red_eye</i>
                {{ customerInformation }}
              </a>
            </div>
          </div>
        {% endif %}
        {% if addressForm.customer_email is defined %}
          {{ ps.form_group_row(addressForm.customer_email, {'attr': {
            'data-customer-information-url': path('admin_customer_for_address_information') }}, {
            'label': 'Customer email'|trans({}, 'Admin.Orderscustomers.Feature'),
          }) }}
        {% endif %}
      {% endblock %}

      {{ ps.form_group_row(addressForm.dni, {}, {
        'label': 'Identification number'|trans({}, 'Admin.Orderscustomers.Feature'),
        'help' : 'The national ID card number of this person, or a unique tax identification number.'|trans({}, 'Admin.Orderscustomers.Help')
      }) }}

      {{ ps.form_group_row(addressForm.alias, {}, {
        'label': 'Address alias'|trans({}, 'Admin.Orderscustomers.Feature'),
        'help' : 'Invalid characters:'|trans({}, 'Admin.Notifications.Info') ~ ' <>;=#{}'
      }) }}

      {{ ps.form_group_row(addressForm.first_name, {}, {
        'label': 'First name'|trans({}, 'Admin.Global'),
        'help' : 'Invalid characters:'|trans({}, 'Admin.Notifications.Info') ~ ' 0-9!<>,;?=+()@#\"�{}_\$%:'
      }) }}

      {{ ps.form_group_row(addressForm.last_name, {}, {
        'label': 'Last name'|trans({}, 'Admin.Global'),
        'help' : 'Invalid characters:'|trans({}, 'Admin.Notifications.Info') ~ ' 0-9!<>,;?=+()@#\"�{}_\$%:'
      }) }}

      {{ ps.form_group_row(addressForm.company, {}, {
        'label': 'Company'|trans({}, 'Admin.Global'),
        'help' : 'Invalid characters:'|trans({}, 'Admin.Notifications.Info') ~ ' <>;=#{}'
      }) }}

      {{ ps.form_group_row(addressForm.vat_number, {}, {
        'label': 'VAT number'|trans({}, 'Admin.Orderscustomers.Feature'),
      }) }}

      {{ ps.form_group_row(addressForm.address1, {}, {
        'label': 'Address'|trans({}, 'Admin.Global'),
      }) }}

      {{ ps.form_group_row(addressForm.address2, {}, {
        'label': 'Address (2)'|trans({}, 'Admin.Global'),
      }) }}

      {{ ps.form_group_row(addressForm.postcode, {}, {
        'label': 'Zip/postal code'|trans({}, 'Admin.Global')
      }) }}

      {{ ps.form_group_row(addressForm.city, {}, {
        'label': 'City'|trans({}, 'Admin.Global')
      }) }}

      {{ ps.form_group_row(addressForm.id_country, {'attr': {
        'class': 'js-customer-country-select',
        'data-states-url': path('admin_country_states') }}, {
        'label': 'Country'|trans({}, 'Admin.Global'),
      }) }}

      <div class=\"js-address-state-select{% if addressForm.id_state.vars.choices is empty %} d-none{% endif %}\">
        {{ ps.form_group_row(addressForm.id_state, {}, {
          'label': 'State'|trans({}, 'Admin.Global'),
        }) }}
      </div>

      {{ ps.form_group_row(addressForm.phone, {}, {
        'label': 'Phone'|trans({}, 'Admin.Global')
      }) }}

      {{ ps.form_group_row(addressForm.phone_mobile, {}, {
        'label': 'Mobile phone'|trans({}, 'Admin.Global')
      }) }}

      {{ ps.form_group_row(addressForm.other, {}, {
        'label': 'Other'|trans({}, 'Admin.Global'),
        'help' : 'Invalid characters:'|trans({}, 'Admin.Notifications.Info') ~ ' <>;=#{}'
      }) }}

      {{ form_rest(addressForm) }}
    </div>
  </div>

  <div class=\"card-footer\">
    <div class=\"d-inline-flex\">
      {% if (displayInIframe is defined and displayInIframe == true) %}
        <a href=\"javascript:window.parent.\$.fancybox.close();\" class=\"btn btn-outline-secondary\">
      {% else %}
        <a href=\"{{ cancelPath|default(path('admin_addresses_index')) }}\" class=\"btn btn-outline-secondary\">
      {% endif %}
        {{ 'Cancel'|trans({}, 'Admin.Actions') }}
      </a>
    </div>
    <div class=\"d-inline-flex float-right\">
      <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
    </div>
  </div>
</div>
{{ form_end(addressForm) }}
", "@PrestaShop/Admin/Sell/Address/Blocks/form.html.twig", "C:\\laragon\\www\\testPrestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Address\\Blocks\\form.html.twig");
    }
}
