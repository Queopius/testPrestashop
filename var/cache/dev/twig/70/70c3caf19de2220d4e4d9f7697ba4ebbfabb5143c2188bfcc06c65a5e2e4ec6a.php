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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments.html.twig */
class __TwigTemplate_77bb10f865588b5a13f1642e378c3dc7756ebe5cfc32824e6721e780d11b77fc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments.html.twig"));

        // line 25
        echo "
<div class=\"card mt-2\" id=\"view_order_payments_block\">
  <div class=\"card-header\">
    <h3 class=\"card-header-title\">
      ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Payment", [], "Admin.Global"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "payments", []), "payments", [])), "html", null, true);
        echo ")
    </h3>
  </div>

  <div class=\"card-body\">
    ";
        // line 34
        if (($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "payments", []), "amountToPay", []) && $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "payments", []), "paidAmount", []))) {
            // line 35
            echo "      <div class=\"alert alert-danger mb-0\" role=\"alert\">
        <p class=\"alert-text\">
          ";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Warning", [], "Admin.Global"), "html", null, true);
            echo "
          <strong>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "payments", []), "paidAmount", []), "html", null, true);
            echo "</strong>
          ";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paid instead of", [], "Admin.Orderscustomers.Notification"), "html", null, true);
            echo "
          <strong>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "payments", []), "amountToPay", []), "html", null, true);
            echo "</strong>

          ";
            // line 42
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "linkedOrders", []), "linkedOrders", []))) {
                // line 43
                echo "            ";
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "linkedOrders", []), "linkedOrders", [])) == 1)) {
                    // line 44
                    echo "              <br/>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This warning also concerns order:", [], "Admin.Orderscustomers.Notification"), "html", null, true);
                    echo "
            ";
                } else {
                    // line 46
                    echo "              <br/>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This warning also concerns the following orders:", [], "Admin.Orderscustomers.Notification"), "html", null, true);
                    echo "
            ";
                }
                // line 48
                echo "
            ";
                // line 49
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "linkedOrders", []), "linkedOrders", []));
                foreach ($context['_seq'] as $context["_key"] => $context["linkedOrder"]) {
                    // line 50
                    echo "              <a target=\"_blank\" rel=\"noopener noreferrer\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_view", ["orderId" => $this->getAttribute($context["linkedOrder"], "orderId", [])]), "html", null, true);
                    echo "\">
                #";
                    // line 51
                    echo twig_escape_filter($this->env, $this->getAttribute($context["linkedOrder"], "orderId", []), "html", null, true);
                    echo "
              </a>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['linkedOrder'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "          ";
            }
            // line 55
            echo "        </p>
      </div>
    ";
        }
        // line 58
        echo "
    <table class=\"table\">
      <thead>
        <tr>
          <th class=\"table-head-date\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th class=\"table-head-payment\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Payment method", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</th>
          <th class=\"table-head-transaction\">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Transaction ID", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</th>
          <th class=\"table-head-amount\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Amount", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th class=\"table-head-invoice\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
      ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "payments", []), "payments", []));
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 72
            echo "        <tr>
          <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\Extension\LocalizationExtension')->dateFormatFull($this->getAttribute($context["payment"], "date", [])), "html", null, true);
            echo "</td>
          <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["payment"], "paymentMethod", []), "html", null, true);
            echo "</td>
          <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["payment"], "transactionId", []), "html", null, true);
            echo "</td>
          <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["payment"], "amount", []), "html", null, true);
            echo "</td>
          <td>";
            // line 77
            if ($this->getAttribute($context["payment"], "invoiceNumber", [])) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["payment"], "invoiceNumber", []), "html", null, true);
            }
            echo "</td>
          <td class=\"text-right\">
            <button class=\"btn btn-sm btn-outline-secondary js-payment-details-btn\">
              ";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Details", [], "Admin.Global"), "html", null, true);
            echo "
            </button>
          </td>
        </tr>
        <tr class=\"d-none\">
          <td colspan=\"6\">
            <p class=\"mb-0\">
              <strong>";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Card number", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</strong>
              ";
            // line 88
            if ($this->getAttribute($context["payment"], "cardNumber", [])) {
                // line 89
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["payment"], "cardNumber", []), "html", null, true);
                echo "
              ";
            } else {
                // line 91
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Not defined", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "
              ";
            }
            // line 93
            echo "            </p>
            <p class=\"mb-0\">
              <strong>";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Card type", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</strong>&nbsp;
              ";
            // line 96
            if ($this->getAttribute($context["payment"], "cardBrand", [])) {
                // line 97
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["payment"], "cardBrand", []), "html", null, true);
                echo "
              ";
            } else {
                // line 99
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Not defined", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "
              ";
            }
            // line 101
            echo "            </p>
            <p class=\"mb-0\">
              <strong>";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Expiration date", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</strong>&nbsp;
              ";
            // line 104
            if ($this->getAttribute($context["payment"], "cardExpiration", [])) {
                // line 105
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["payment"], "cardExpiration", []), "html", null, true);
                echo "
              ";
            } else {
                // line 107
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Not defined", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "
              ";
            }
            // line 109
            echo "            </p>
            <p class=\"mb-0\">
              <strong>";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cardholder name", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</strong>&nbsp;
              ";
            // line 112
            if ($this->getAttribute($context["payment"], "cardHolder", [])) {
                // line 113
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["payment"], "cardHolder", []), "html", null, true);
                echo "
              ";
            } else {
                // line 115
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Not defined", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "
              ";
            }
            // line 117
            echo "            </p>
          </td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "      <tr class=\"d-print-none\">
        ";
        // line 122
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["addOrderPaymentForm"] ?? $this->getContext($context, "addOrderPaymentForm")), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_add_payment", ["orderId" => $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "id", [])])]);
        echo "
          <td>
            ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addOrderPaymentForm"] ?? $this->getContext($context, "addOrderPaymentForm")), "date", []), 'widget');
        echo "
          </td>
          <td>
            ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addOrderPaymentForm"] ?? $this->getContext($context, "addOrderPaymentForm")), "payment_method", []), 'widget');
        echo "
          </td>
          <td>
            ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addOrderPaymentForm"] ?? $this->getContext($context, "addOrderPaymentForm")), "transaction_id", []), 'widget');
        echo "
          </td>
          <td>
            <div class=\"input-group\">
              ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addOrderPaymentForm"] ?? $this->getContext($context, "addOrderPaymentForm")), "amount", []), 'widget');
        echo "
              ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addOrderPaymentForm"] ?? $this->getContext($context, "addOrderPaymentForm")), "id_currency", []), 'widget');
        echo "
            </div>
          </td>
          <td>
            <div ";
        // line 139
        if (twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["addOrderPaymentForm"] ?? $this->getContext($context, "addOrderPaymentForm")), "id_invoice", []), "vars", []), "choices", []))) {
            echo "class=\"d-none\"";
        }
        echo ">
              ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addOrderPaymentForm"] ?? $this->getContext($context, "addOrderPaymentForm")), "id_invoice", []), 'widget');
        echo "
            </div>
          </td>
          <td>
            <button type=\"submit\" class=\"btn btn-primary btn-sm\">";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add", [], "Admin.Actions"), "html", null, true);
        echo "</button>
          </td>
        ";
        // line 146
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["addOrderPaymentForm"] ?? $this->getContext($context, "addOrderPaymentForm")), 'form_end');
        echo "
      </tr>
      </tbody>
    </table>

    ";
        // line 151
        if (( !$this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "valid", []) && twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["changeOrderCurrencyForm"] ?? $this->getContext($context, "changeOrderCurrencyForm")), "new_currency_id", []), "vars", []), "choices", [])))) {
            // line 152
            echo "      ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["changeOrderCurrencyForm"] ?? $this->getContext($context, "changeOrderCurrencyForm")), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_change_currency", ["orderId" => $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "id", [])])]);
            echo "
        <div class=\"form-group row d-print-none\">
          <label class=\"form-control-label\">";
            // line 154
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Change currency", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</label>
          <div class=\"col-sm\">
            <div class=\"input-group\">
              ";
            // line 157
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["changeOrderCurrencyForm"] ?? $this->getContext($context, "changeOrderCurrencyForm")), "new_currency_id", []), 'widget');
            echo "
              <button class=\"btn btn-outline-secondary btn-sm ml-2\">
                ";
            // line 159
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Change", [], "Admin.Actions"), "html", null, true);
            echo "
              </button>
            </div>

            <div class=\"d-none\">
              ";
            // line 164
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["changeOrderCurrencyForm"] ?? $this->getContext($context, "changeOrderCurrencyForm")), 'rest');
            echo "
            </div>

            <small class=\"text-muted\">
              ";
            // line 168
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Do not forget to update your exchange rate before making this change.", [], "Admin.Orderscustomers.Help"), "html", null, true);
            echo "
            </small>
          </div>
        </div>
      ";
            // line 172
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["changeOrderCurrencyForm"] ?? $this->getContext($context, "changeOrderCurrencyForm")), 'form_end');
            echo "
    ";
        }
        // line 174
        echo "  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  395 => 174,  390 => 172,  383 => 168,  376 => 164,  368 => 159,  363 => 157,  357 => 154,  351 => 152,  349 => 151,  341 => 146,  336 => 144,  329 => 140,  323 => 139,  316 => 135,  312 => 134,  305 => 130,  299 => 127,  293 => 124,  288 => 122,  285 => 121,  276 => 117,  270 => 115,  264 => 113,  262 => 112,  258 => 111,  254 => 109,  248 => 107,  242 => 105,  240 => 104,  236 => 103,  232 => 101,  226 => 99,  220 => 97,  218 => 96,  214 => 95,  210 => 93,  204 => 91,  198 => 89,  196 => 88,  192 => 87,  182 => 80,  174 => 77,  170 => 76,  166 => 75,  162 => 74,  158 => 73,  155 => 72,  151 => 71,  143 => 66,  139 => 65,  135 => 64,  131 => 63,  127 => 62,  121 => 58,  116 => 55,  113 => 54,  104 => 51,  99 => 50,  95 => 49,  92 => 48,  86 => 46,  80 => 44,  77 => 43,  75 => 42,  70 => 40,  66 => 39,  62 => 38,  58 => 37,  54 => 35,  52 => 34,  42 => 29,  36 => 25,);
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

<div class=\"card mt-2\" id=\"view_order_payments_block\">
  <div class=\"card-header\">
    <h3 class=\"card-header-title\">
      {{ 'Payment'|trans({}, 'Admin.Global') }} ({{ orderForViewing.payments.payments|length }})
    </h3>
  </div>

  <div class=\"card-body\">
    {% if orderForViewing.payments.amountToPay and orderForViewing.payments.paidAmount %}
      <div class=\"alert alert-danger mb-0\" role=\"alert\">
        <p class=\"alert-text\">
          {{ 'Warning'|trans({}, 'Admin.Global') }}
          <strong>{{ orderForViewing.payments.paidAmount }}</strong>
          {{ 'paid instead of'|trans({}, 'Admin.Orderscustomers.Notification') }}
          <strong>{{ orderForViewing.payments.amountToPay }}</strong>

          {% if orderForViewing.linkedOrders.linkedOrders is not empty %}
            {% if orderForViewing.linkedOrders.linkedOrders|length == 1 %}
              <br/>{{ 'This warning also concerns order:'|trans({}, 'Admin.Orderscustomers.Notification') }}
            {% else %}
              <br/>{{ 'This warning also concerns the following orders:'|trans({}, 'Admin.Orderscustomers.Notification') }}
            {% endif %}

            {% for linkedOrder in orderForViewing.linkedOrders.linkedOrders %}
              <a target=\"_blank\" rel=\"noopener noreferrer\" href=\"{{ path('admin_orders_view', {'orderId': linkedOrder.orderId}) }}\">
                #{{ linkedOrder.orderId }}
              </a>
            {% endfor %}
          {% endif %}
        </p>
      </div>
    {% endif %}

    <table class=\"table\">
      <thead>
        <tr>
          <th class=\"table-head-date\">{{ 'Date'|trans({}, 'Admin.Global') }}</th>
          <th class=\"table-head-payment\">{{ 'Payment method'|trans({}, 'Admin.Orderscustomers.Feature') }}</th>
          <th class=\"table-head-transaction\">{{ 'Transaction ID'|trans({}, 'Admin.Orderscustomers.Feature') }}</th>
          <th class=\"table-head-amount\">{{ 'Amount'|trans({}, 'Admin.Global') }}</th>
          <th class=\"table-head-invoice\">{{ 'Invoice'|trans({}, 'Admin.Global') }}</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
      {% for payment in orderForViewing.payments.payments %}
        <tr>
          <td>{{ payment.date|date_format_full }}</td>
          <td>{{ payment.paymentMethod }}</td>
          <td>{{ payment.transactionId }}</td>
          <td>{{ payment.amount }}</td>
          <td>{% if payment.invoiceNumber %}{{ payment.invoiceNumber }}{% endif %}</td>
          <td class=\"text-right\">
            <button class=\"btn btn-sm btn-outline-secondary js-payment-details-btn\">
              {{ 'Details'|trans({}, 'Admin.Global') }}
            </button>
          </td>
        </tr>
        <tr class=\"d-none\">
          <td colspan=\"6\">
            <p class=\"mb-0\">
              <strong>{{ 'Card number'|trans({}, 'Admin.Orderscustomers.Feature') }}</strong>
              {% if payment.cardNumber %}
                {{ payment.cardNumber }}
              {% else %}
                {{ 'Not defined'|trans({}, 'Admin.Orderscustomers.Feature') }}
              {% endif %}
            </p>
            <p class=\"mb-0\">
              <strong>{{ 'Card type'|trans({}, 'Admin.Orderscustomers.Feature') }}</strong>&nbsp;
              {% if payment.cardBrand %}
                {{ payment.cardBrand }}
              {% else %}
                {{ 'Not defined'|trans({}, 'Admin.Orderscustomers.Feature') }}
              {% endif %}
            </p>
            <p class=\"mb-0\">
              <strong>{{ 'Expiration date'|trans({}, 'Admin.Catalog.Feature') }}</strong>&nbsp;
              {% if payment.cardExpiration %}
                {{ payment.cardExpiration }}
              {% else %}
                {{ 'Not defined'|trans({}, 'Admin.Orderscustomers.Feature') }}
              {% endif %}
            </p>
            <p class=\"mb-0\">
              <strong>{{ 'Cardholder name'|trans({}, 'Admin.Orderscustomers.Feature') }}</strong>&nbsp;
              {% if payment.cardHolder %}
                {{ payment.cardHolder }}
              {% else %}
                {{ 'Not defined'|trans({}, 'Admin.Orderscustomers.Feature') }}
              {% endif %}
            </p>
          </td>
        </tr>
      {% endfor %}
      <tr class=\"d-print-none\">
        {{ form_start(addOrderPaymentForm, {'action': path('admin_orders_add_payment', {'orderId': orderForViewing.id})}) }}
          <td>
            {{ form_widget(addOrderPaymentForm.date) }}
          </td>
          <td>
            {{ form_widget(addOrderPaymentForm.payment_method) }}
          </td>
          <td>
            {{ form_widget(addOrderPaymentForm.transaction_id) }}
          </td>
          <td>
            <div class=\"input-group\">
              {{ form_widget(addOrderPaymentForm.amount) }}
              {{ form_widget(addOrderPaymentForm.id_currency) }}
            </div>
          </td>
          <td>
            <div {% if addOrderPaymentForm.id_invoice.vars.choices is empty %}class=\"d-none\"{% endif %}>
              {{ form_widget(addOrderPaymentForm.id_invoice) }}
            </div>
          </td>
          <td>
            <button type=\"submit\" class=\"btn btn-primary btn-sm\">{{ 'Add'|trans({}, 'Admin.Actions') }}</button>
          </td>
        {{ form_end(addOrderPaymentForm) }}
      </tr>
      </tbody>
    </table>

    {% if not orderForViewing.valid and changeOrderCurrencyForm.new_currency_id.vars.choices|length %}
      {{ form_start(changeOrderCurrencyForm, {'action': path('admin_orders_change_currency', {'orderId': orderForViewing.id})}) }}
        <div class=\"form-group row d-print-none\">
          <label class=\"form-control-label\">{{ 'Change currency'|trans({}, 'Admin.Orderscustomers.Feature') }}</label>
          <div class=\"col-sm\">
            <div class=\"input-group\">
              {{ form_widget(changeOrderCurrencyForm.new_currency_id) }}
              <button class=\"btn btn-outline-secondary btn-sm ml-2\">
                {{ 'Change'|trans({}, 'Admin.Actions') }}
              </button>
            </div>

            <div class=\"d-none\">
              {{ form_rest(changeOrderCurrencyForm) }}
            </div>

            <small class=\"text-muted\">
              {{ 'Do not forget to update your exchange rate before making this change.'|trans({}, 'Admin.Orderscustomers.Help') }}
            </small>
          </div>
        </div>
      {{ form_end(changeOrderCurrencyForm) }}
    {% endif %}
  </div>
</div>
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments.html.twig", "C:\\laragon\\www\\testPrestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Order\\Order\\Blocks\\View\\payments.html.twig");
    }
}
