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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig */
class __TwigTemplate_581400c5ebf48f575811aa460af5d58ad9c72508a5d2b58d88ee056fdda29b9d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig"));

        // line 25
        echo "
";
        // line 26
        ob_start();
        // line 27
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "Admin.Global"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "history", []), "statuses", [])), "html", null, true);
        echo ")
";
        $context["statusTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
";
        // line 30
        ob_start();
        // line 31
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Documents", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo " (<span class=\"count\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "documents", []), "documents", [])), "html", null, true);
        echo "</span>)
";
        $context["documentsTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 33
        echo "
";
        // line 34
        ob_start();
        // line 35
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Carriers", [], "Admin.Shipping.Feature"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "shipping", []), "carriers", [])), "html", null, true);
        echo ")
";
        $context["carriersTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 37
        echo "
";
        // line 38
        ob_start();
        // line 39
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Merchandise returns", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "returns", []), "orderReturns", [])), "html", null, true);
        echo ")
";
        $context["merchantReturnsTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 41
        echo "
<div class=\"mt-2\">
  <ul class=\"nav nav nav-tabs d-print-none\" role=\"tablist\">
    <li class=\"nav-item\">
      <a class=\"nav-link active show\" id=\"historyTab\" data-toggle=\"tab\" href=\"#historyTabContent\" role=\"tab\" aria-controls=\"historyTabContent\" aria-expanded=\"true\" aria-selected=\"false\">
        <i class=\"material-icons\">history</i>
        ";
        // line 47
        echo twig_escape_filter($this->env, ($context["statusTitle"] ?? $this->getContext($context, "statusTitle")), "html", null, true);
        echo "
      </a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" id=\"orderDocumentsTab\" data-toggle=\"tab\" href=\"#orderDocumentsTabContent\" role=\"tab\" aria-controls=\"orderDocumentsTabContent\" aria-expanded=\"true\" aria-selected=\"false\">
        <i class=\"material-icons\">note</i>
        ";
        // line 53
        echo twig_escape_filter($this->env, ($context["documentsTitle"] ?? $this->getContext($context, "documentsTitle")), "html", null, true);
        echo "
      </a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" id=\"orderShippingTab\" data-toggle=\"tab\" href=\"#orderShippingTabContent\" role=\"tab\" aria-controls=\"orderShippingTabContent\" aria-expanded=\"true\" aria-selected=\"false\">
        <i class=\"material-icons\">local_shipping</i>
        ";
        // line 59
        echo twig_escape_filter($this->env, ($context["carriersTitle"] ?? $this->getContext($context, "carriersTitle")), "html", null, true);
        echo "
      </a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" id=\"orderReturnsTab\" data-toggle=\"tab\" href=\"#orderReturnsTabContent\" role=\"tab\" aria-controls=\"orderReturnsTabContent\" aria-expanded=\"true\" aria-selected=\"false\">
        <i class=\"material-icons\">replay</i>
        ";
        // line 65
        echo twig_escape_filter($this->env, ($context["merchantReturnsTitle"] ?? $this->getContext($context, "merchantReturnsTitle")), "html", null, true);
        echo "
      </a>
    </li>
  </ul>

  <div class=\"tab-content\">
    <div class=\"tab-pane d-print-block fade show active\" id=\"historyTabContent\" role=\"tabpanel\" aria-labelledby=\"historyTab\">
      ";
        // line 72
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", 72, "1694525243")->display($context);
        // line 80
        echo "    </div>
    <div class=\"tab-pane d-print-block fade\" id=\"orderDocumentsTabContent\" role=\"tabpanel\" aria-labelledby=\"orderDocumentsTab\">
      ";
        // line 82
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", 82, "1461336475")->display($context);
        // line 90
        echo "    </div>
    <div class=\"tab-pane d-print-block fade\" id=\"orderShippingTabContent\" role=\"tabpanel\" aria-labelledby=\"orderShippingTab\">
      ";
        // line 92
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", 92, "768228196")->display($context);
        // line 100
        echo "    </div>
    <div class=\"tab-pane d-print-block fade\" id=\"orderReturnsTabContent\" role=\"tabpanel\" aria-labelledby=\"orderReturnsTab\">
      ";
        // line 102
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", 102, "43439176")->display($context);
        // line 110
        echo "    </div>
  </div>
</div>

";
        // line 114
        $context["displayAdminOrderTabLink"] = $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminOrderTabLink", ["id_order" => $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "id", [])]);
        // line 115
        $context["displayAdminOrderTabContent"] = $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminOrderTabContent", ["id_order" => $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "id", [])]);
        // line 116
        if (( !twig_test_empty(($context["displayAdminOrderTabLink"] ?? $this->getContext($context, "displayAdminOrderTabLink"))) ||  !twig_test_empty(($context["displayAdminOrderTabContent"] ?? $this->getContext($context, "displayAdminOrderTabContent"))))) {
            // line 117
            echo "  <div class=\"mt-2\" id=\"order_hook_tabs\">
    <ul class=\"nav nav nav-tabs\" role=\"tablist\">
      ";
            // line 120
            echo "      ";
            echo ($context["displayAdminOrderTabLink"] ?? $this->getContext($context, "displayAdminOrderTabLink"));
            echo "
    </ul>

    <div class=\"tab-content\">
      ";
            // line 125
            echo "      ";
            echo ($context["displayAdminOrderTabContent"] ?? $this->getContext($context, "displayAdminOrderTabContent"));
            echo "
    </div>
  </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 125,  169 => 120,  165 => 117,  163 => 116,  161 => 115,  159 => 114,  153 => 110,  151 => 102,  147 => 100,  145 => 92,  141 => 90,  139 => 82,  135 => 80,  133 => 72,  123 => 65,  114 => 59,  105 => 53,  96 => 47,  88 => 41,  80 => 39,  78 => 38,  75 => 37,  67 => 35,  65 => 34,  62 => 33,  54 => 31,  52 => 30,  49 => 29,  41 => 27,  39 => 26,  36 => 25,);
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

{% set statusTitle %}
  {{ 'Status'|trans({}, 'Admin.Global') }} ({{ orderForViewing.history.statuses|length }})
{% endset %}

{% set documentsTitle %}
  {{ 'Documents'|trans({}, 'Admin.Orderscustomers.Feature') }} (<span class=\"count\">{{ orderForViewing.documents.documents|length }}</span>)
{% endset %}

{% set carriersTitle %}
  {{ 'Carriers'|trans({}, 'Admin.Shipping.Feature') }} ({{ orderForViewing.shipping.carriers|length }})
{% endset %}

{% set merchantReturnsTitle %}
  {{ 'Merchandise returns'|trans({}, 'Admin.Orderscustomers.Feature') }} ({{ orderForViewing.returns.orderReturns|length }})
{% endset %}

<div class=\"mt-2\">
  <ul class=\"nav nav nav-tabs d-print-none\" role=\"tablist\">
    <li class=\"nav-item\">
      <a class=\"nav-link active show\" id=\"historyTab\" data-toggle=\"tab\" href=\"#historyTabContent\" role=\"tab\" aria-controls=\"historyTabContent\" aria-expanded=\"true\" aria-selected=\"false\">
        <i class=\"material-icons\">history</i>
        {{ statusTitle }}
      </a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" id=\"orderDocumentsTab\" data-toggle=\"tab\" href=\"#orderDocumentsTabContent\" role=\"tab\" aria-controls=\"orderDocumentsTabContent\" aria-expanded=\"true\" aria-selected=\"false\">
        <i class=\"material-icons\">note</i>
        {{ documentsTitle }}
      </a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" id=\"orderShippingTab\" data-toggle=\"tab\" href=\"#orderShippingTabContent\" role=\"tab\" aria-controls=\"orderShippingTabContent\" aria-expanded=\"true\" aria-selected=\"false\">
        <i class=\"material-icons\">local_shipping</i>
        {{ carriersTitle }}
      </a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" id=\"orderReturnsTab\" data-toggle=\"tab\" href=\"#orderReturnsTabContent\" role=\"tab\" aria-controls=\"orderReturnsTabContent\" aria-expanded=\"true\" aria-selected=\"false\">
        <i class=\"material-icons\">replay</i>
        {{ merchantReturnsTitle }}
      </a>
    </li>
  </ul>

  <div class=\"tab-content\">
    <div class=\"tab-pane d-print-block fade show active\" id=\"historyTabContent\" role=\"tabpanel\" aria-labelledby=\"historyTab\">
      {% embed '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details_card.html.twig' %}
        {% block header %}
          {{ statusTitle }}
        {% endblock %}
        {% block body %}
          {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/history.html.twig' %}
        {% endblock %}
      {% endembed %}
    </div>
    <div class=\"tab-pane d-print-block fade\" id=\"orderDocumentsTabContent\" role=\"tabpanel\" aria-labelledby=\"orderDocumentsTab\">
      {% embed '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details_card.html.twig' %}
        {% block header %}
          {{ documentsTitle }}
        {% endblock %}
        {% block body %}
          {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/documents.html.twig' %}
        {% endblock %}
      {% endembed %}
    </div>
    <div class=\"tab-pane d-print-block fade\" id=\"orderShippingTabContent\" role=\"tabpanel\" aria-labelledby=\"orderShippingTab\">
      {% embed '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details_card.html.twig' %}
        {% block header %}
          {{ carriersTitle }}
        {% endblock %}
        {% block body %}
          {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/shipping.html.twig' %}
        {% endblock %}
      {% endembed %}
    </div>
    <div class=\"tab-pane d-print-block fade\" id=\"orderReturnsTabContent\" role=\"tabpanel\" aria-labelledby=\"orderReturnsTab\">
      {% embed '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details_card.html.twig' %}
        {% block header %}
          {{ merchantReturnsTitle }}
        {% endblock %}
        {% block body %}
          {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/merchandise_returns.html.twig' %}
        {% endblock %}
      {% endembed %}
    </div>
  </div>
</div>

{% set displayAdminOrderTabLink = renderhook('displayAdminOrderTabLink', {'id_order': orderForViewing.id}) %}
{% set displayAdminOrderTabContent = renderhook('displayAdminOrderTabContent', {'id_order': orderForViewing.id}) %}
{% if displayAdminOrderTabLink is not empty or displayAdminOrderTabContent is not empty%}
  <div class=\"mt-2\" id=\"order_hook_tabs\">
    <ul class=\"nav nav nav-tabs\" role=\"tablist\">
      {# Rendering of hook displayAdminOrderTabLink, we expect tab links #}
      {{ displayAdminOrderTabLink|raw }}
    </ul>

    <div class=\"tab-content\">
      {# Rendering of hook displayAdminOrderTabContent, we expect tab contents #}
      {{ displayAdminOrderTabContent|raw }}
    </div>
  </div>
{% endif %}
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", "C:\\laragon\\www\\testPrestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Order\\Order\\Blocks\\View\\details.html.twig");
    }
}


/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig */
class __TwigTemplate_581400c5ebf48f575811aa460af5d58ad9c72508a5d2b58d88ee056fdda29b9d___1694525243 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 72
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details_card.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", 72);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 73
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 74
        echo "          ";
        echo twig_escape_filter($this->env, ($context["statusTitle"] ?? $this->getContext($context, "statusTitle")), "html", null, true);
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 77
        echo "          ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/history.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", 77)->display($context);
        // line 78
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 78,  419 => 77,  410 => 76,  397 => 74,  388 => 73,  366 => 72,  177 => 125,  169 => 120,  165 => 117,  163 => 116,  161 => 115,  159 => 114,  153 => 110,  151 => 102,  147 => 100,  145 => 92,  141 => 90,  139 => 82,  135 => 80,  133 => 72,  123 => 65,  114 => 59,  105 => 53,  96 => 47,  88 => 41,  80 => 39,  78 => 38,  75 => 37,  67 => 35,  65 => 34,  62 => 33,  54 => 31,  52 => 30,  49 => 29,  41 => 27,  39 => 26,  36 => 25,);
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

{% set statusTitle %}
  {{ 'Status'|trans({}, 'Admin.Global') }} ({{ orderForViewing.history.statuses|length }})
{% endset %}

{% set documentsTitle %}
  {{ 'Documents'|trans({}, 'Admin.Orderscustomers.Feature') }} (<span class=\"count\">{{ orderForViewing.documents.documents|length }}</span>)
{% endset %}

{% set carriersTitle %}
  {{ 'Carriers'|trans({}, 'Admin.Shipping.Feature') }} ({{ orderForViewing.shipping.carriers|length }})
{% endset %}

{% set merchantReturnsTitle %}
  {{ 'Merchandise returns'|trans({}, 'Admin.Orderscustomers.Feature') }} ({{ orderForViewing.returns.orderReturns|length }})
{% endset %}

<div class=\"mt-2\">
  <ul class=\"nav nav nav-tabs d-print-none\" role=\"tablist\">
    <li class=\"nav-item\">
      <a class=\"nav-link active show\" id=\"historyTab\" data-toggle=\"tab\" href=\"#historyTabContent\" role=\"tab\" aria-controls=\"historyTabContent\" aria-expanded=\"true\" aria-selected=\"false\">
        <i class=\"material-icons\">history</i>
        {{ statusTitle }}
      </a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" id=\"orderDocumentsTab\" data-toggle=\"tab\" href=\"#orderDocumentsTabContent\" role=\"tab\" aria-controls=\"orderDocumentsTabContent\" aria-expanded=\"true\" aria-selected=\"false\">
        <i class=\"material-icons\">note</i>
        {{ documentsTitle }}
      </a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" id=\"orderShippingTab\" data-toggle=\"tab\" href=\"#orderShippingTabContent\" role=\"tab\" aria-controls=\"orderShippingTabContent\" aria-expanded=\"true\" aria-selected=\"false\">
        <i class=\"material-icons\">local_shipping</i>
        {{ carriersTitle }}
      </a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" id=\"orderReturnsTab\" data-toggle=\"tab\" href=\"#orderReturnsTabContent\" role=\"tab\" aria-controls=\"orderReturnsTabContent\" aria-expanded=\"true\" aria-selected=\"false\">
        <i class=\"material-icons\">replay</i>
        {{ merchantReturnsTitle }}
      </a>
    </li>
  </ul>

  <div class=\"tab-content\">
    <div class=\"tab-pane d-print-block fade show active\" id=\"historyTabContent\" role=\"tabpanel\" aria-labelledby=\"historyTab\">
      {% embed '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details_card.html.twig' %}
        {% block header %}
          {{ statusTitle }}
        {% endblock %}
        {% block body %}
          {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/history.html.twig' %}
        {% endblock %}
      {% endembed %}
    </div>
    <div class=\"tab-pane d-print-block fade\" id=\"orderDocumentsTabContent\" role=\"tabpanel\" aria-labelledby=\"orderDocumentsTab\">
      {% embed '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details_card.html.twig' %}
        {% block header %}
          {{ documentsTitle }}
        {% endblock %}
        {% block body %}
          {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/documents.html.twig' %}
        {% endblock %}
      {% endembed %}
    </div>
    <div class=\"tab-pane d-print-block fade\" id=\"orderShippingTabContent\" role=\"tabpanel\" aria-labelledby=\"orderShippingTab\">
      {% embed '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details_card.html.twig' %}
        {% block header %}
          {{ carriersTitle }}
        {% endblock %}
        {% block body %}
          {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/shipping.html.twig' %}
        {% endblock %}
      {% endembed %}
    </div>
    <div class=\"tab-pane d-print-block fade\" id=\"orderReturnsTabContent\" role=\"tabpanel\" aria-labelledby=\"orderReturnsTab\">
      {% embed '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details_card.html.twig' %}
        {% block header %}
          {{ merchantReturnsTitle }}
        {% endblock %}
        {% block body %}
          {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/merchandise_returns.html.twig' %}
        {% endblock %}
      {% endembed %}
    </div>
  </div>
</div>

{% set displayAdminOrderTabLink = renderhook('displayAdminOrderTabLink', {'id_order': orderForViewing.id}) %}
{% set displayAdminOrderTabContent = renderhook('displayAdminOrderTabContent', {'id_order': orderForViewing.id}) %}
{% if displayAdminOrderTabLink is not empty or displayAdminOrderTabContent is not empty%}
  <div class=\"mt-2\" id=\"order_hook_tabs\">
    <ul class=\"nav nav nav-tabs\" role=\"tablist\">
      {# Rendering of hook displayAdminOrderTabLink, we expect tab links #}
      {{ displayAdminOrderTabLink|raw }}
    </ul>

    <div class=\"tab-content\">
      {# Rendering of hook displayAdminOrderTabContent, we expect tab contents #}
      {{ displayAdminOrderTabContent|raw }}
    </div>
  </div>
{% endif %}
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", "C:\\laragon\\www\\testPrestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Order\\Order\\Blocks\\View\\details.html.twig");
    }
}


/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig */
class __TwigTemplate_581400c5ebf48f575811aa460af5d58ad9c72508a5d2b58d88ee056fdda29b9d___1461336475 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 82
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details_card.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", 82);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 83
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 84
        echo "          ";
        echo twig_escape_filter($this->env, ($context["documentsTitle"] ?? $this->getContext($context, "documentsTitle")), "html", null, true);
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 86
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 87
        echo "          ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/documents.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", 87)->display($context);
        // line 88
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  661 => 88,  658 => 87,  649 => 86,  636 => 84,  627 => 83,  605 => 82,  422 => 78,  419 => 77,  410 => 76,  397 => 74,  388 => 73,  366 => 72,  177 => 125,  169 => 120,  165 => 117,  163 => 116,  161 => 115,  159 => 114,  153 => 110,  151 => 102,  147 => 100,  145 => 92,  141 => 90,  139 => 82,  135 => 80,  133 => 72,  123 => 65,  114 => 59,  105 => 53,  96 => 47,  88 => 41,  80 => 39,  78 => 38,  75 => 37,  67 => 35,  65 => 34,  62 => 33,  54 => 31,  52 => 30,  49 => 29,  41 => 27,  39 => 26,  36 => 25,);
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

{% set statusTitle %}
  {{ 'Status'|trans({}, 'Admin.Global') }} ({{ orderForViewing.history.statuses|length }})
{% endset %}

{% set documentsTitle %}
  {{ 'Documents'|trans({}, 'Admin.Orderscustomers.Feature') }} (<span class=\"count\">{{ orderForViewing.documents.documents|length }}</span>)
{% endset %}

{% set carriersTitle %}
  {{ 'Carriers'|trans({}, 'Admin.Shipping.Feature') }} ({{ orderForViewing.shipping.carriers|length }})
{% endset %}

{% set merchantReturnsTitle %}
  {{ 'Merchandise returns'|trans({}, 'Admin.Orderscustomers.Feature') }} ({{ orderForViewing.returns.orderReturns|length }})
{% endset %}

<div class=\"mt-2\">
  <ul class=\"nav nav nav-tabs d-print-none\" role=\"tablist\">
    <li class=\"nav-item\">
      <a class=\"nav-link active show\" id=\"historyTab\" data-toggle=\"tab\" href=\"#historyTabContent\" role=\"tab\" aria-controls=\"historyTabContent\" aria-expanded=\"true\" aria-selected=\"false\">
        <i class=\"material-icons\">history</i>
        {{ statusTitle }}
      </a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" id=\"orderDocumentsTab\" data-toggle=\"tab\" href=\"#orderDocumentsTabContent\" role=\"tab\" aria-controls=\"orderDocumentsTabContent\" aria-expanded=\"true\" aria-selected=\"false\">
        <i class=\"material-icons\">note</i>
        {{ documentsTitle }}
      </a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" id=\"orderShippingTab\" data-toggle=\"tab\" href=\"#orderShippingTabContent\" role=\"tab\" aria-controls=\"orderShippingTabContent\" aria-expanded=\"true\" aria-selected=\"false\">
        <i class=\"material-icons\">local_shipping</i>
        {{ carriersTitle }}
      </a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" id=\"orderReturnsTab\" data-toggle=\"tab\" href=\"#orderReturnsTabContent\" role=\"tab\" aria-controls=\"orderReturnsTabContent\" aria-expanded=\"true\" aria-selected=\"false\">
        <i class=\"material-icons\">replay</i>
        {{ merchantReturnsTitle }}
      </a>
    </li>
  </ul>

  <div class=\"tab-content\">
    <div class=\"tab-pane d-print-block fade show active\" id=\"historyTabContent\" role=\"tabpanel\" aria-labelledby=\"historyTab\">
      {% embed '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details_card.html.twig' %}
        {% block header %}
          {{ statusTitle }}
        {% endblock %}
        {% block body %}
          {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/history.html.twig' %}
        {% endblock %}
      {% endembed %}
    </div>
    <div class=\"tab-pane d-print-block fade\" id=\"orderDocumentsTabContent\" role=\"tabpanel\" aria-labelledby=\"orderDocumentsTab\">
      {% embed '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details_card.html.twig' %}
        {% block header %}
          {{ documentsTitle }}
        {% endblock %}
        {% block body %}
          {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/documents.html.twig' %}
        {% endblock %}
      {% endembed %}
    </div>
    <div class=\"tab-pane d-print-block fade\" id=\"orderShippingTabContent\" role=\"tabpanel\" aria-labelledby=\"orderShippingTab\">
      {% embed '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details_card.html.twig' %}
        {% block header %}
          {{ carriersTitle }}
        {% endblock %}
        {% block body %}
          {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/shipping.html.twig' %}
        {% endblock %}
      {% endembed %}
    </div>
    <div class=\"tab-pane d-print-block fade\" id=\"orderReturnsTabContent\" role=\"tabpanel\" aria-labelledby=\"orderReturnsTab\">
      {% embed '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details_card.html.twig' %}
        {% block header %}
          {{ merchantReturnsTitle }}
        {% endblock %}
        {% block body %}
          {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/merchandise_returns.html.twig' %}
        {% endblock %}
      {% endembed %}
    </div>
  </div>
</div>

{% set displayAdminOrderTabLink = renderhook('displayAdminOrderTabLink', {'id_order': orderForViewing.id}) %}
{% set displayAdminOrderTabContent = renderhook('displayAdminOrderTabContent', {'id_order': orderForViewing.id}) %}
{% if displayAdminOrderTabLink is not empty or displayAdminOrderTabContent is not empty%}
  <div class=\"mt-2\" id=\"order_hook_tabs\">
    <ul class=\"nav nav nav-tabs\" role=\"tablist\">
      {# Rendering of hook displayAdminOrderTabLink, we expect tab links #}
      {{ displayAdminOrderTabLink|raw }}
    </ul>

    <div class=\"tab-content\">
      {# Rendering of hook displayAdminOrderTabContent, we expect tab contents #}
      {{ displayAdminOrderTabContent|raw }}
    </div>
  </div>
{% endif %}
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", "C:\\laragon\\www\\testPrestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Order\\Order\\Blocks\\View\\details.html.twig");
    }
}


/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig */
class __TwigTemplate_581400c5ebf48f575811aa460af5d58ad9c72508a5d2b58d88ee056fdda29b9d___768228196 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 92
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details_card.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", 92);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 93
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 94
        echo "          ";
        echo twig_escape_filter($this->env, ($context["carriersTitle"] ?? $this->getContext($context, "carriersTitle")), "html", null, true);
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 96
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 97
        echo "          ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/shipping.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", 97)->display($context);
        // line 98
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  900 => 98,  897 => 97,  888 => 96,  875 => 94,  866 => 93,  844 => 92,  661 => 88,  658 => 87,  649 => 86,  636 => 84,  627 => 83,  605 => 82,  422 => 78,  419 => 77,  410 => 76,  397 => 74,  388 => 73,  366 => 72,  177 => 125,  169 => 120,  165 => 117,  163 => 116,  161 => 115,  159 => 114,  153 => 110,  151 => 102,  147 => 100,  145 => 92,  141 => 90,  139 => 82,  135 => 80,  133 => 72,  123 => 65,  114 => 59,  105 => 53,  96 => 47,  88 => 41,  80 => 39,  78 => 38,  75 => 37,  67 => 35,  65 => 34,  62 => 33,  54 => 31,  52 => 30,  49 => 29,  41 => 27,  39 => 26,  36 => 25,);
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

{% set statusTitle %}
  {{ 'Status'|trans({}, 'Admin.Global') }} ({{ orderForViewing.history.statuses|length }})
{% endset %}

{% set documentsTitle %}
  {{ 'Documents'|trans({}, 'Admin.Orderscustomers.Feature') }} (<span class=\"count\">{{ orderForViewing.documents.documents|length }}</span>)
{% endset %}

{% set carriersTitle %}
  {{ 'Carriers'|trans({}, 'Admin.Shipping.Feature') }} ({{ orderForViewing.shipping.carriers|length }})
{% endset %}

{% set merchantReturnsTitle %}
  {{ 'Merchandise returns'|trans({}, 'Admin.Orderscustomers.Feature') }} ({{ orderForViewing.returns.orderReturns|length }})
{% endset %}

<div class=\"mt-2\">
  <ul class=\"nav nav nav-tabs d-print-none\" role=\"tablist\">
    <li class=\"nav-item\">
      <a class=\"nav-link active show\" id=\"historyTab\" data-toggle=\"tab\" href=\"#historyTabContent\" role=\"tab\" aria-controls=\"historyTabContent\" aria-expanded=\"true\" aria-selected=\"false\">
        <i class=\"material-icons\">history</i>
        {{ statusTitle }}
      </a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" id=\"orderDocumentsTab\" data-toggle=\"tab\" href=\"#orderDocumentsTabContent\" role=\"tab\" aria-controls=\"orderDocumentsTabContent\" aria-expanded=\"true\" aria-selected=\"false\">
        <i class=\"material-icons\">note</i>
        {{ documentsTitle }}
      </a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" id=\"orderShippingTab\" data-toggle=\"tab\" href=\"#orderShippingTabContent\" role=\"tab\" aria-controls=\"orderShippingTabContent\" aria-expanded=\"true\" aria-selected=\"false\">
        <i class=\"material-icons\">local_shipping</i>
        {{ carriersTitle }}
      </a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" id=\"orderReturnsTab\" data-toggle=\"tab\" href=\"#orderReturnsTabContent\" role=\"tab\" aria-controls=\"orderReturnsTabContent\" aria-expanded=\"true\" aria-selected=\"false\">
        <i class=\"material-icons\">replay</i>
        {{ merchantReturnsTitle }}
      </a>
    </li>
  </ul>

  <div class=\"tab-content\">
    <div class=\"tab-pane d-print-block fade show active\" id=\"historyTabContent\" role=\"tabpanel\" aria-labelledby=\"historyTab\">
      {% embed '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details_card.html.twig' %}
        {% block header %}
          {{ statusTitle }}
        {% endblock %}
        {% block body %}
          {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/history.html.twig' %}
        {% endblock %}
      {% endembed %}
    </div>
    <div class=\"tab-pane d-print-block fade\" id=\"orderDocumentsTabContent\" role=\"tabpanel\" aria-labelledby=\"orderDocumentsTab\">
      {% embed '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details_card.html.twig' %}
        {% block header %}
          {{ documentsTitle }}
        {% endblock %}
        {% block body %}
          {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/documents.html.twig' %}
        {% endblock %}
      {% endembed %}
    </div>
    <div class=\"tab-pane d-print-block fade\" id=\"orderShippingTabContent\" role=\"tabpanel\" aria-labelledby=\"orderShippingTab\">
      {% embed '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details_card.html.twig' %}
        {% block header %}
          {{ carriersTitle }}
        {% endblock %}
        {% block body %}
          {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/shipping.html.twig' %}
        {% endblock %}
      {% endembed %}
    </div>
    <div class=\"tab-pane d-print-block fade\" id=\"orderReturnsTabContent\" role=\"tabpanel\" aria-labelledby=\"orderReturnsTab\">
      {% embed '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details_card.html.twig' %}
        {% block header %}
          {{ merchantReturnsTitle }}
        {% endblock %}
        {% block body %}
          {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/merchandise_returns.html.twig' %}
        {% endblock %}
      {% endembed %}
    </div>
  </div>
</div>

{% set displayAdminOrderTabLink = renderhook('displayAdminOrderTabLink', {'id_order': orderForViewing.id}) %}
{% set displayAdminOrderTabContent = renderhook('displayAdminOrderTabContent', {'id_order': orderForViewing.id}) %}
{% if displayAdminOrderTabLink is not empty or displayAdminOrderTabContent is not empty%}
  <div class=\"mt-2\" id=\"order_hook_tabs\">
    <ul class=\"nav nav nav-tabs\" role=\"tablist\">
      {# Rendering of hook displayAdminOrderTabLink, we expect tab links #}
      {{ displayAdminOrderTabLink|raw }}
    </ul>

    <div class=\"tab-content\">
      {# Rendering of hook displayAdminOrderTabContent, we expect tab contents #}
      {{ displayAdminOrderTabContent|raw }}
    </div>
  </div>
{% endif %}
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", "C:\\laragon\\www\\testPrestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Order\\Order\\Blocks\\View\\details.html.twig");
    }
}


/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig */
class __TwigTemplate_581400c5ebf48f575811aa460af5d58ad9c72508a5d2b58d88ee056fdda29b9d___43439176 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 102
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details_card.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", 102);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 103
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 104
        echo "          ";
        echo twig_escape_filter($this->env, ($context["merchantReturnsTitle"] ?? $this->getContext($context, "merchantReturnsTitle")), "html", null, true);
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 106
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 107
        echo "          ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/merchandise_returns.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", 107)->display($context);
        // line 108
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1139 => 108,  1136 => 107,  1127 => 106,  1114 => 104,  1105 => 103,  1083 => 102,  900 => 98,  897 => 97,  888 => 96,  875 => 94,  866 => 93,  844 => 92,  661 => 88,  658 => 87,  649 => 86,  636 => 84,  627 => 83,  605 => 82,  422 => 78,  419 => 77,  410 => 76,  397 => 74,  388 => 73,  366 => 72,  177 => 125,  169 => 120,  165 => 117,  163 => 116,  161 => 115,  159 => 114,  153 => 110,  151 => 102,  147 => 100,  145 => 92,  141 => 90,  139 => 82,  135 => 80,  133 => 72,  123 => 65,  114 => 59,  105 => 53,  96 => 47,  88 => 41,  80 => 39,  78 => 38,  75 => 37,  67 => 35,  65 => 34,  62 => 33,  54 => 31,  52 => 30,  49 => 29,  41 => 27,  39 => 26,  36 => 25,);
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

{% set statusTitle %}
  {{ 'Status'|trans({}, 'Admin.Global') }} ({{ orderForViewing.history.statuses|length }})
{% endset %}

{% set documentsTitle %}
  {{ 'Documents'|trans({}, 'Admin.Orderscustomers.Feature') }} (<span class=\"count\">{{ orderForViewing.documents.documents|length }}</span>)
{% endset %}

{% set carriersTitle %}
  {{ 'Carriers'|trans({}, 'Admin.Shipping.Feature') }} ({{ orderForViewing.shipping.carriers|length }})
{% endset %}

{% set merchantReturnsTitle %}
  {{ 'Merchandise returns'|trans({}, 'Admin.Orderscustomers.Feature') }} ({{ orderForViewing.returns.orderReturns|length }})
{% endset %}

<div class=\"mt-2\">
  <ul class=\"nav nav nav-tabs d-print-none\" role=\"tablist\">
    <li class=\"nav-item\">
      <a class=\"nav-link active show\" id=\"historyTab\" data-toggle=\"tab\" href=\"#historyTabContent\" role=\"tab\" aria-controls=\"historyTabContent\" aria-expanded=\"true\" aria-selected=\"false\">
        <i class=\"material-icons\">history</i>
        {{ statusTitle }}
      </a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" id=\"orderDocumentsTab\" data-toggle=\"tab\" href=\"#orderDocumentsTabContent\" role=\"tab\" aria-controls=\"orderDocumentsTabContent\" aria-expanded=\"true\" aria-selected=\"false\">
        <i class=\"material-icons\">note</i>
        {{ documentsTitle }}
      </a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" id=\"orderShippingTab\" data-toggle=\"tab\" href=\"#orderShippingTabContent\" role=\"tab\" aria-controls=\"orderShippingTabContent\" aria-expanded=\"true\" aria-selected=\"false\">
        <i class=\"material-icons\">local_shipping</i>
        {{ carriersTitle }}
      </a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" id=\"orderReturnsTab\" data-toggle=\"tab\" href=\"#orderReturnsTabContent\" role=\"tab\" aria-controls=\"orderReturnsTabContent\" aria-expanded=\"true\" aria-selected=\"false\">
        <i class=\"material-icons\">replay</i>
        {{ merchantReturnsTitle }}
      </a>
    </li>
  </ul>

  <div class=\"tab-content\">
    <div class=\"tab-pane d-print-block fade show active\" id=\"historyTabContent\" role=\"tabpanel\" aria-labelledby=\"historyTab\">
      {% embed '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details_card.html.twig' %}
        {% block header %}
          {{ statusTitle }}
        {% endblock %}
        {% block body %}
          {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/history.html.twig' %}
        {% endblock %}
      {% endembed %}
    </div>
    <div class=\"tab-pane d-print-block fade\" id=\"orderDocumentsTabContent\" role=\"tabpanel\" aria-labelledby=\"orderDocumentsTab\">
      {% embed '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details_card.html.twig' %}
        {% block header %}
          {{ documentsTitle }}
        {% endblock %}
        {% block body %}
          {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/documents.html.twig' %}
        {% endblock %}
      {% endembed %}
    </div>
    <div class=\"tab-pane d-print-block fade\" id=\"orderShippingTabContent\" role=\"tabpanel\" aria-labelledby=\"orderShippingTab\">
      {% embed '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details_card.html.twig' %}
        {% block header %}
          {{ carriersTitle }}
        {% endblock %}
        {% block body %}
          {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/shipping.html.twig' %}
        {% endblock %}
      {% endembed %}
    </div>
    <div class=\"tab-pane d-print-block fade\" id=\"orderReturnsTabContent\" role=\"tabpanel\" aria-labelledby=\"orderReturnsTab\">
      {% embed '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details_card.html.twig' %}
        {% block header %}
          {{ merchantReturnsTitle }}
        {% endblock %}
        {% block body %}
          {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/merchandise_returns.html.twig' %}
        {% endblock %}
      {% endembed %}
    </div>
  </div>
</div>

{% set displayAdminOrderTabLink = renderhook('displayAdminOrderTabLink', {'id_order': orderForViewing.id}) %}
{% set displayAdminOrderTabContent = renderhook('displayAdminOrderTabContent', {'id_order': orderForViewing.id}) %}
{% if displayAdminOrderTabLink is not empty or displayAdminOrderTabContent is not empty%}
  <div class=\"mt-2\" id=\"order_hook_tabs\">
    <ul class=\"nav nav nav-tabs\" role=\"tablist\">
      {# Rendering of hook displayAdminOrderTabLink, we expect tab links #}
      {{ displayAdminOrderTabLink|raw }}
    </ul>

    <div class=\"tab-content\">
      {# Rendering of hook displayAdminOrderTabContent, we expect tab contents #}
      {{ displayAdminOrderTabContent|raw }}
    </div>
  </div>
{% endif %}
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", "C:\\laragon\\www\\testPrestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Order\\Order\\Blocks\\View\\details.html.twig");
    }
}
