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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/discount_list.html.twig */
class __TwigTemplate_c73ecd589a69c172a14e564d8ba54596436a4e62a64dd9c4ffedf3906eb1de76 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/discount_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/discount_list.html.twig"));

        // line 25
        echo "<table class=\"table discountList";
        if (twig_test_empty(($context["discounts"] ?? $this->getContext($context, "discounts")))) {
            echo " d-none";
        }
        echo "\">
  <thead>
  <tr>
    <th>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "Admin.Global"), "html", null, true);
        echo "</th>
    <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Value", [], "Admin.Global"), "html", null, true);
        echo "</th>
    <th class=\"text-right d-print-none\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "Admin.Global"), "html", null, true);
        echo "</th>
  </tr>
  </thead>
  <tbody>
  ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? $this->getContext($context, "discounts")));
        foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
            // line 35
            echo "    <tr>
      <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "name", []), "html", null, true);
            echo "</td>
      <td>
        ";
            // line 38
            if ($this->getAttribute($this->getAttribute($context["discount"], "amountRaw", []), "greaterThan", [0 => $this->env->getExtension('PrestaShopBundle\Twig\Extension\NumberExtension')->createNumber(0)], "method")) {
                echo "-";
            }
            // line 39
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "amountFormatted", []), "html", null, true);
            echo "
      </td>
      <td class=\"text-right d-print-none\">
        <a class=\"delete-cart-rule btn btn-text\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_remove_cart_rule", ["orderId" => ($context["orderId"] ?? $this->getContext($context, "orderId")), "orderCartRuleId" => $this->getAttribute($context["discount"], "orderCartRuleId", [])]), "html", null, true);
            echo "\">
          <i class=\"material-icons\">delete</i>
        </a>
      </td>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "  </tbody>
</table>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/discount_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 48,  83 => 42,  76 => 39,  72 => 38,  67 => 36,  64 => 35,  60 => 34,  53 => 30,  49 => 29,  45 => 28,  36 => 25,);
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
<table class=\"table discountList{% if discounts is empty %} d-none{% endif %}\">
  <thead>
  <tr>
    <th>{{ 'Name'|trans({}, 'Admin.Global') }}</th>
    <th>{{ 'Value'|trans({}, 'Admin.Global') }}</th>
    <th class=\"text-right d-print-none\">{{ 'Actions'|trans({}, 'Admin.Global') }}</th>
  </tr>
  </thead>
  <tbody>
  {% for discount in discounts %}
    <tr>
      <td>{{ discount.name }}</td>
      <td>
        {% if discount.amountRaw.greaterThan(number(0)) %}-{% endif %}
        {{ discount.amountFormatted }}
      </td>
      <td class=\"text-right d-print-none\">
        <a class=\"delete-cart-rule btn btn-text\" href=\"{{ path('admin_orders_remove_cart_rule', {'orderId': orderId, 'orderCartRuleId': discount.orderCartRuleId}) }}\">
          <i class=\"material-icons\">delete</i>
        </a>
      </td>
    </tr>
  {% endfor %}
  </tbody>
</table>
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/discount_list.html.twig", "C:\\laragon\\www\\testPrestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Order\\Order\\Blocks\\View\\discount_list.html.twig");
    }
}
