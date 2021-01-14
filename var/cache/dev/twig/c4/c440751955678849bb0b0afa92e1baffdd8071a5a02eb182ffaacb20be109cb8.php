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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/Create/summary.html.twig */
class __TwigTemplate_b37b35b335d35cd55feb16304188216c8abee54d6a66d78fe139bf7f2c87aae6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/summary.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/summary.html.twig"));

        // line 25
        echo "
<div class=\"card d-none\" id=\"summary-block\">
  <h3 class=\"card-header\">
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Summary", [], "Admin.Global"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"alert alert-success d-none\" id=\"js-summary-success-block\">
      <div class=\"alert-text\"></div>
    </div>
    <div class=\"alert alert-danger d-none\" id=\"js-summary-error-block\">
      <div class=\"alert-text\"></div>
    </div>
    <div class=\"row\">
      <div class=\"col\">
        <div class=\"card\">
          <div class=\"card-body\">
            <div class=\"row\">
              <div class=\"col text-center\">
                <p class=\"mb-0 text-muted\">
                  <strong>";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total products", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</strong>
                </p>
                <strong class=\"js-total-products\"></strong>
              </div>
              <div class=\"col text-center\">
                <p class=\"mb-0 text-muted\">
                  <strong>";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total vouchers (Tax excl.)", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</strong>
                </p>
                <strong class=\"js-total-discounts\"></strong>
              </div>
              <div class=\"col text-center\">
                <p class=\"mb-0 text-muted\">
                  <strong>";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total shipping (Tax excl.)", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</strong>
                </p>
                <strong class=\"js-total-shipping\"></strong>
              </div>
              <div class=\"col text-center\">
                <p class=\"mb-0 text-muted\">
                  <strong>";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total taxes", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</strong>
                </p>
                <strong class=\"js-total-taxes\"></strong>
              </div>
              <div class=\"col text-center\">
                <p class=\"mb-0 text-muted\">
                  <strong>";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total (Tax excl.)", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</strong>
                </p>
                <strong class=\"js-total-without-tax\"></strong>
              </div>
              <div class=\"col text-center\">
                <p class=\"mb-0 text-muted\">
                  <strong>";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total (Tax incl.)", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</strong>
                </p>
                <span class=\"js-total-with-tax badge rounded badge-dark\"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    ";
        // line 84
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["summaryForm"] ?? $this->getContext($context, "summaryForm")), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_place")]);
        echo "
      <div class=\"row mt-3\">
        <div class=\"col col-10\">

          <div id=\"js-order-message-wrap\">
            ";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "form_group_row", [0 => $this->getAttribute(($context["summaryForm"] ?? $this->getContext($context, "summaryForm")), "order_message", []), 1 => [], 2 => ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order message", [], "Admin.Orderscustomers.Feature")]], "method"), "html", null, true);
        // line 91
        echo "
          </div>

          <div class=\"form-group row mb-2\">
            <div class=\"col-sm offset-sm-4\">
              <button type=\"button\" class=\"btn btn-outline-primary\" id=\"js-send-process-order-email-btn\">
                ";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Send an email to the customer with the link to process the payment.", [], "Admin.Orderscustomers.Help"), "html", null, true);
        echo "
              </button>
              <a id=\"js-process-order-link\" href=\"#\" target=\"_blank\">
                ";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Go on payment page to process the payment.", [], "Admin.Orderscustomers.Help"), "html", null, true);
        echo "
              </a>
            </div>
          </div>

          ";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "form_group_row", [0 => $this->getAttribute(($context["summaryForm"] ?? $this->getContext($context, "summaryForm")), "payment_module", []), 1 => [], 2 => ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Payment", [], "Admin.Global")]], "method"), "html", null, true);
        // line 107
        echo "

          ";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "form_group_row", [0 => $this->getAttribute(($context["summaryForm"] ?? $this->getContext($context, "summaryForm")), "order_state", []), 1 => [], 2 => ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order status", [], "Admin.Orderscustomers.Feature")]], "method"), "html", null, true);
        // line 111
        echo "

          <div class=\"form-group row mt-4\">
            <div class=\"col-sm offset-sm-4\">
              <button class=\"btn btn-primary\" type=\"submit\">
                ";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create the order", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
              </button>
              ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["summaryForm"] ?? $this->getContext($context, "summaryForm")), "cart_id", []), 'row', ["attr" => ["class" => "js-place-order-cart-id"]]);
        echo "
            </div>
          </div>
        </div>
      </div>
    ";
        // line 123
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["summaryForm"] ?? $this->getContext($context, "summaryForm")), 'form_end');
        echo "

  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 123,  170 => 118,  165 => 116,  158 => 111,  156 => 109,  152 => 107,  150 => 105,  142 => 100,  136 => 97,  128 => 91,  126 => 89,  118 => 84,  105 => 74,  96 => 68,  87 => 62,  78 => 56,  69 => 50,  60 => 44,  41 => 28,  36 => 25,);
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

<div class=\"card d-none\" id=\"summary-block\">
  <h3 class=\"card-header\">
    {{ 'Summary'|trans({}, 'Admin.Global') }}
  </h3>
  <div class=\"card-body\">
    <div class=\"alert alert-success d-none\" id=\"js-summary-success-block\">
      <div class=\"alert-text\"></div>
    </div>
    <div class=\"alert alert-danger d-none\" id=\"js-summary-error-block\">
      <div class=\"alert-text\"></div>
    </div>
    <div class=\"row\">
      <div class=\"col\">
        <div class=\"card\">
          <div class=\"card-body\">
            <div class=\"row\">
              <div class=\"col text-center\">
                <p class=\"mb-0 text-muted\">
                  <strong>{{ 'Total products'|trans({}, 'Admin.Orderscustomers.Feature') }}</strong>
                </p>
                <strong class=\"js-total-products\"></strong>
              </div>
              <div class=\"col text-center\">
                <p class=\"mb-0 text-muted\">
                  <strong>{{ 'Total vouchers (Tax excl.)'|trans({}, 'Admin.Orderscustomers.Feature') }}</strong>
                </p>
                <strong class=\"js-total-discounts\"></strong>
              </div>
              <div class=\"col text-center\">
                <p class=\"mb-0 text-muted\">
                  <strong>{{ 'Total shipping (Tax excl.)'|trans({}, 'Admin.Orderscustomers.Feature') }}</strong>
                </p>
                <strong class=\"js-total-shipping\"></strong>
              </div>
              <div class=\"col text-center\">
                <p class=\"mb-0 text-muted\">
                  <strong>{{ 'Total taxes'|trans({}, 'Admin.Orderscustomers.Feature') }}</strong>
                </p>
                <strong class=\"js-total-taxes\"></strong>
              </div>
              <div class=\"col text-center\">
                <p class=\"mb-0 text-muted\">
                  <strong>{{ 'Total (Tax excl.)'|trans({}, 'Admin.Orderscustomers.Feature') }}</strong>
                </p>
                <strong class=\"js-total-without-tax\"></strong>
              </div>
              <div class=\"col text-center\">
                <p class=\"mb-0 text-muted\">
                  <strong>{{ 'Total (Tax incl.)'|trans({}, 'Admin.Orderscustomers.Feature') }}</strong>
                </p>
                <span class=\"js-total-with-tax badge rounded badge-dark\"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{ form_start(summaryForm, {'action': path('admin_orders_place')}) }}
      <div class=\"row mt-3\">
        <div class=\"col col-10\">

          <div id=\"js-order-message-wrap\">
            {{ ps.form_group_row(summaryForm.order_message, {}, {
              'label': 'Order message'|trans({}, 'Admin.Orderscustomers.Feature'),
            }) }}
          </div>

          <div class=\"form-group row mb-2\">
            <div class=\"col-sm offset-sm-4\">
              <button type=\"button\" class=\"btn btn-outline-primary\" id=\"js-send-process-order-email-btn\">
                {{ 'Send an email to the customer with the link to process the payment.'|trans({}, 'Admin.Orderscustomers.Help') }}
              </button>
              <a id=\"js-process-order-link\" href=\"#\" target=\"_blank\">
                {{ 'Go on payment page to process the payment.'|trans({}, 'Admin.Orderscustomers.Help') }}
              </a>
            </div>
          </div>

          {{ ps.form_group_row(summaryForm.payment_module, {}, {
            'label': 'Payment'|trans({}, 'Admin.Global'),
          }) }}

          {{ ps.form_group_row(summaryForm.order_state, {}, {
            'label': 'Order status'|trans({}, 'Admin.Orderscustomers.Feature'),
          }) }}

          <div class=\"form-group row mt-4\">
            <div class=\"col-sm offset-sm-4\">
              <button class=\"btn btn-primary\" type=\"submit\">
                {{ 'Create the order'|trans({}, 'Admin.Orderscustomers.Feature') }}
              </button>
              {{ form_row(summaryForm.cart_id, {'attr': {'class': 'js-place-order-cart-id'}}) }}
            </div>
          </div>
        </div>
      </div>
    {{ form_end(summaryForm) }}

  </div>
</div>
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/summary.html.twig", "C:\\laragon\\www\\testPrestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Order\\Order\\Blocks\\Create\\summary.html.twig");
    }
}
