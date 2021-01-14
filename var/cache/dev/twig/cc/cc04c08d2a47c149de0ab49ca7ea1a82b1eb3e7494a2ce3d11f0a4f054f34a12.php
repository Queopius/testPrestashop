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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/products.html.twig */
class __TwigTemplate_2de077831834165790fc102ebaea7a0a1427e5d82a5fe1346fb64587565f5ec1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/products.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/products.html.twig"));

        // line 25
        echo "
";
        // line 26
        $context["isColumnLocationDisplayed"] = false;
        // line 27
        $context["isColumnRefundedDisplayed"] = false;
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "products", []), "products", []), 0, ($context["paginationNum"] ?? $this->getContext($context, "paginationNum"))));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 29
            echo "  ";
            if ( !twig_test_empty($this->getAttribute($context["product"], "location", []))) {
                // line 30
                echo "    ";
                $context["isColumnLocationDisplayed"] = true;
                // line 31
                echo "  ";
            }
            // line 32
            echo "  ";
            if (($this->getAttribute($context["product"], "quantityRefunded", []) > 0)) {
                // line 33
                echo "    ";
                $context["isColumnRefundedDisplayed"] = true;
                // line 34
                echo "  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "<div class=\"card\" id=\"orderProductsPanel\">
  <div class=\"card-header\">
    <h3 class=\"card-header-title\">
      ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products", [], "Admin.Global"), "html", null, true);
        echo " (<span id=\"orderProductsPanelCount\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "products", []), "products", [])), "html", null, true);
        echo "</span>)
    </h3>
  </div>

  <div class=\"card-body\">
    ";
        // line 44
        $context["formOptions"] = ["attr" => ["data-order-id" => $this->getAttribute(        // line 46
($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "id", []), "data-is-delivered" => $this->getAttribute(        // line 47
($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "isDelivered", []), "data-is-tax-included" => $this->getAttribute(        // line 48
($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "isTaxIncluded", []), "data-discounts-amount" => $this->getAttribute($this->getAttribute(        // line 49
($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "prices", []), "discountsAmountRaw", []), "data-price-specification" => twig_replace_filter(twig_jsonencode_filter(        // line 50
($context["priceSpecification"] ?? $this->getContext($context, "priceSpecification"))), "'", "&#39;")]];
        // line 53
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["cancelProductForm"] ?? $this->getContext($context, "cancelProductForm")), 'form_start', ($context["formOptions"] ?? $this->getContext($context, "formOptions")));
        echo "
    <table class=\"table\" id=\"orderProductsTable\" data-currency-precision=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderCurrency"] ?? $this->getContext($context, "orderCurrency")), "precision", []), "html", null, true);
        echo "\">
      <thead>
      <tr>
        <th>
          <p>";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product", [], "Admin.Global"), "html", null, true);
        echo "</p>
        </th>
        <th></th>
        <th>
          <p class=\"mb-0\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price per unit", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</p>
          <small class=\"text-muted\">";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "taxMethod", []), "html", null, true);
        echo "</small>
        </th>
        <th>
          <p>";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", [], "Admin.Global"), "html", null, true);
        echo "</p>
        </th>
        <th class=\"cellProductLocation";
        // line 68
        if ( !($context["isColumnLocationDisplayed"] ?? $this->getContext($context, "isColumnLocationDisplayed"))) {
            echo " d-none";
        }
        echo "\">
          <p>";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Stock location", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</p>
        </th>
        <th class=\"cellProductRefunded";
        // line 71
        if ( !($context["isColumnRefundedDisplayed"] ?? $this->getContext($context, "isColumnRefundedDisplayed"))) {
            echo " d-none";
        }
        echo "\">
          <p>";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Refunded", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</p>
        </th>
        <th>
          <p>";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Available", [], "Admin.Global"), "html", null, true);
        echo "</p>
        </th>
        <th>
          <p class=\"mb-0\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total", [], "Admin.Global"), "html", null, true);
        echo "</p>
          <small class=\"text-muted\">";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "taxMethod", []), "html", null, true);
        echo "</small>
        </th>
        ";
        // line 81
        if ($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "hasInvoice", [], "method")) {
            // line 82
            echo "          <th>
            <p>";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice", [], "Admin.Global"), "html", null, true);
            echo "</p>
          </th>
        ";
        }
        // line 86
        echo "        ";
        if ( !$this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "delivered", [])) {
            // line 87
            echo "          <th class=\"text-right product_actions d-print-none\">
            <p>";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "Admin.Global"), "html", null, true);
            echo "</p>
          </th>
        ";
        }
        // line 91
        echo "        <th class=\"text-center cancel-product-element\">
          <p>";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Partial refund", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</p>
        </th>
      </tr>
      </thead>
      <tbody>
      ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "products", []), "products", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 98
            echo "        ";
            $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/product.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/products.html.twig", 98)->display(twig_array_merge($context, ["product" =>             // line 99
$context["product"], "productIndex" => $this->getAttribute(            // line 100
$context["loop"], "index", []), "paginationNum" =>             // line 101
($context["paginationNum"] ?? $this->getContext($context, "paginationNum")), "isColumnLocationDisplayed" =>             // line 102
($context["isColumnLocationDisplayed"] ?? $this->getContext($context, "isColumnLocationDisplayed")), "isColumnRefundedDisplayed" =>             // line 103
($context["isColumnRefundedDisplayed"] ?? $this->getContext($context, "isColumnRefundedDisplayed"))]));
            // line 105
            echo "      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/add_product_row.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/products.html.twig", 106)->display($context);
        // line 107
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/edit_product_row.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/products.html.twig", 107)->display($context);
        // line 108
        echo "      </tbody>
    </table>

    <div class=\"row mb-3\">
      <div class=\"col-md-6 text-left d-print-none order-product-pagination\">
        <div class=\"form-group row\">
          <label for=\"paginator_select_page_limit\" class=\"col-form-label ml-3\">";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Items per page:", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
          <div class=\"col\">
            <select id=\"orderProductsTablePaginationNumberSelector\" class=\"pagination-link custom-select\">
              ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["paginationNumOptions"] ?? $this->getContext($context, "paginationNumOptions")));
        foreach ($context['_seq'] as $context["_key"] => $context["numPageOption"]) {
            // line 118
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $context["numPageOption"], "html", null, true);
            echo "\"";
            if (($context["numPageOption"] == ($context["paginationNum"] ?? $this->getContext($context, "paginationNum")))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["numPageOption"], "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['numPageOption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "            </select>
          </div>
        </div>
        ";
        // line 123
        $context["numPages"] = twig_round(max((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "products", []), "products", [])) / ($context["paginationNum"] ?? $this->getContext($context, "paginationNum"))), 1), 0, "ceil");
        // line 124
        echo "        <nav aria-label=\"Products Navigation\"";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "products", []), "products", [])) <= ($context["paginationNum"] ?? $this->getContext($context, "paginationNum")))) {
            echo " class=\"d-none\"";
        }
        echo " id=\"orderProductsNavPagination\">
          <ul class=\"pagination\" id=\"orderProductsTablePagination\" data-num-per-page=\"";
        // line 125
        echo twig_escape_filter($this->env, ($context["paginationNum"] ?? $this->getContext($context, "paginationNum")), "html", null, true);
        echo "\" data-num-pages=\"";
        echo twig_escape_filter($this->env, ($context["numPages"] ?? $this->getContext($context, "numPages")), "html", null, true);
        echo "\">
            <li class=\"page-item disabled\" id=\"orderProductsTablePaginationPrev\">
              <a class=\"page-link\" href=\"javascript:void(0);\" aria-label=\"Previous\">
                <span aria-hidden=\"true\">&laquo;</span>
                <span class=\"sr-only\">Previous</span>
              </a>
            </li>
            ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["numPages"] ?? $this->getContext($context, "numPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["numPage"]) {
            // line 133
            echo "              <li class=\"page-item";
            if (($context["numPage"] == 1)) {
                echo " active";
            }
            echo "\"><span class=\"page-link\" data-order-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "id", []), "html", null, true);
            echo "\" data-page=\"";
            echo twig_escape_filter($this->env, $context["numPage"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["numPage"], "html", null, true);
            echo "</span></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['numPage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "            <li class=\"page-item d-none\"><span class=\"page-link\" data-order-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "id", []), "html", null, true);
        echo "\" data-page=\"\"></span></li>
            <li class=\"page-item\" id=\"orderProductsTablePaginationNext\">
              <a class=\"page-link\" href=\"javascript:void(0);\" aria-label=\"Next\">
                <span aria-hidden=\"true\">&raquo;</span>
                <span class=\"sr-only\">Next</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <div class=\"col-md-6 text-right discount-action\">
        ";
        // line 146
        if ( !$this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "delivered", [])) {
            // line 147
            echo "          <button type=\"button\" class=\"btn btn-outline-secondary js-product-action-btn mr-3\" id=\"addProductBtn\">
            <i class=\"material-icons\">add_circle_outline</i>
            ";
            // line 149
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a product", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
          </button>
        ";
        }
        // line 152
        echo "        <button type=\"button\" class=\"btn btn-outline-secondary js-product-action-btn\" data-toggle=\"modal\" data-target=\"#addOrderDiscountModal\">
          <i class=\"material-icons\">confirmation_number</i>
          ";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a discount", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
        </button>
      </div>
    </div>

    ";
        // line 159
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/discount_list.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/products.html.twig", 159)->display(twig_array_merge($context, ["discounts" => $this->getAttribute($this->getAttribute(        // line 160
($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "discounts", []), "discounts", []), "orderId" => $this->getAttribute(        // line 161
($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "id", [])]));
        // line 163
        echo "
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"info-block\">
          <div class=\"row\">
            <div class=\"col-sm text-center\">
              <p class=\"text-muted mb-0\"><strong>";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products", [], "Admin.Global"), "html", null, true);
        echo "</strong></p>
              <strong id=\"orderProductsTotal\">";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "prices", []), "productsPriceFormatted", []), "html", null, true);
        echo "</strong>
            </div>

            <div id=\"order-discounts-total-container\" class=\"col-sm text-center";
        // line 173
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "prices", []), "discountsAmountRaw", []), "greaterThan", [0 => $this->env->getExtension('PrestaShopBundle\Twig\Extension\NumberExtension')->createNumber(0)], "method")) {
            echo " d-none";
        }
        echo "\">
              <p class=\"text-muted mb-0\"><strong>";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Discounts", [], "Admin.Global"), "html", null, true);
        echo "</strong></p>
              <strong id=\"orderDiscountsTotal\">-";
        // line 175
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "prices", []), "discountsAmountFormatted", []), "html", null, true);
        echo "</strong>
            </div>

            ";
        // line 178
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "prices", []), "wrappingPriceRaw", []), "greaterThan", [0 => $this->env->getExtension('PrestaShopBundle\Twig\Extension\NumberExtension')->createNumber(0)], "method")) {
            // line 179
            echo "              <div class=\"col-sm text-center\">
                <p class=\"text-muted mb-0\"><strong>";
            // line 180
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Wrapping", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</strong></p>
                <strong id=\"orderWrappingTotal\">";
            // line 181
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "prices", []), "wrappingPriceFormatted", []), "html", null, true);
            echo "</strong>
              </div>
            ";
        }
        // line 184
        echo "
            ";
        // line 185
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "prices", []), "shippingPriceRaw", []), "greaterThan", [0 => $this->env->getExtension('PrestaShopBundle\Twig\Extension\NumberExtension')->createNumber(0)], "method")) {
            // line 186
            echo "              <div class=\"col-sm text-center\">
                <p class=\"text-muted mb-0\"><strong>";
            // line 187
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shipping", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</strong></p>
                <div class=\"shipping-price\">
                  <strong id=\"orderShippingTotal\">";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "prices", []), "shippingPriceFormatted", []), "html", null, true);
            echo "</strong>
                  <div class=\"cancel-product-element shipping-refund-amount";
            // line 190
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "prices", []), "shippingRefundableAmountRaw", []), "lowerOrEqualThan", [0 => $this->env->getExtension('PrestaShopBundle\Twig\Extension\NumberExtension')->createNumber(0)], "method")) {
                echo " hidden";
            }
            echo "\">
                    <div class=\"input-group\">
                      ";
            // line 192
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? $this->getContext($context, "cancelProductForm")), "shipping_amount", []), 'widget');
            echo "
                      <div class=\"input-group-append\">
                        <div class=\"input-group-text\">";
            // line 194
            echo twig_escape_filter($this->env, $this->getAttribute(($context["orderCurrency"] ?? $this->getContext($context, "orderCurrency")), "symbol", []), "html", null, true);
            echo "</div>
                      </div>
                    </div>
                    <p class=\"text-center\">(max ";
            // line 197
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "prices", []), "shippingRefundableAmountFormatted", []), "html", null, true);
            echo " tax included)</p>
                  </div>
                </div>
              </div>
            ";
        } else {
            // line 202
            echo "              ";
            // line 203
            echo "              <div class=\"d-none\">
                ";
            // line 204
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? $this->getContext($context, "cancelProductForm")), "shipping_amount", []), 'widget');
            echo "
              </div>
            ";
        }
        // line 207
        echo "
            ";
        // line 208
        if ( !$this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "taxIncluded", [])) {
            // line 209
            echo "              <div class=\"col-sm text-center\">
                <p class=\"text-muted mb-0\"><strong>";
            // line 210
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Taxes", [], "Admin.Global"), "html", null, true);
            echo "</strong></p>
                <strong id=\"orderTaxesTotal\">";
            // line 211
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "prices", []), "taxesAmountFormatted", []), "html", null, true);
            echo "</strong>
              </div>
            ";
        }
        // line 214
        echo "
            <div class=\"col-sm text-center\">
              <p class=\"text-muted mb-0\"><strong>";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total", [], "Admin.Global"), "html", null, true);
        echo "</strong></p>
              <span class=\"badge rounded badge-dark font-size-100\" id=\"orderTotal\">";
        // line 217
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "prices", []), "totalAmountFormatted", []), "html", null, true);
        echo "</span>
            </div>

          </div>
        </div>
      </div>
      <div class=\"col-md-12\">
        <p class=\"mb-0 mt-1 text-center text-muted\">
          <small>
            ";
        // line 226
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("For this customer group, prices are displayed as: [1]%tax_method%[/1]", ["%tax_method%" => $this->getAttribute(        // line 227
($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "taxMethod", []), "[1]" => "<strong>", "[/1]" => "</strong>"], "Admin.Orderscustomers.Notification");
        // line 230
        echo ".

            ";
        // line 232
        if ( !$this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_ORDER_RETURN")) {
            // line 233
            echo "              <strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Merchandise returns are disabled", [], "Admin.Orderscustomers.Notification"), "html", null, true);
            echo "</strong>
            ";
        }
        // line 235
        echo "          </small>
        </p>
        <div class=\"cancel-product-element refund-checkboxes-container\">
          <div class=\"cancel-product-element form-group restock-products\">
            ";
        // line 239
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? $this->getContext($context, "cancelProductForm")), "restock", []), 'widget');
        echo "
          </div>
          <div class=\"cancel-product-element form-group refund-credit-slip\">
            ";
        // line 242
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? $this->getContext($context, "cancelProductForm")), "credit_slip", []), 'widget');
        echo "
          </div>
          <div class=\"cancel-product-element form-group refund-voucher\">
            ";
        // line 245
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? $this->getContext($context, "cancelProductForm")), "voucher", []), 'widget');
        echo "
          </div>
          <div class=\"cancel-product-element shipping-refund";
        // line 247
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "prices", []), "shippingRefundableAmountRaw", []), "lowerOrEqualThan", [0 => $this->env->getExtension('PrestaShopBundle\Twig\Extension\NumberExtension')->createNumber(0)], "method")) {
            echo " hidden";
        }
        echo "\">
            <div class=\"form-group\">
              ";
        // line 249
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? $this->getContext($context, "cancelProductForm")), "shipping", []), 'widget');
        echo "
              <small class=\"shipping-refund-amount\">(";
        // line 250
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "prices", []), "shippingRefundableAmountFormatted", []), "html", null, true);
        echo ")</small>
            </div>
          </div>
          <div class=\"cancel-product-element form-group voucher-refund-type";
        // line 253
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "prices", []), "discountsAmountRaw", []), "lowerOrEqualThan", [0 => $this->env->getExtension('PrestaShopBundle\Twig\Extension\NumberExtension')->createNumber(0)], "method")) {
            echo " hidden";
        }
        echo "\">
            ";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This order has been partially paid by voucher. Choose the amount you want to refund:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
            ";
        // line 255
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? $this->getContext($context, "cancelProductForm")), "voucher_refund_type", []), 'widget');
        echo "
            <div class=\"voucher-refund-type-negative-error\">
              ";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Error. You cannot refund a negative amount.", [], "Admin.Orderscustomers.Notification"), "html", null, true);
        echo "
            </div>
          </div>
        </div>
      </div>
      <div class=\"cancel-product-element form-submit text-right\">
        ";
        // line 263
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? $this->getContext($context, "cancelProductForm")), "cancel", []), 'widget');
        echo "
        ";
        // line 264
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? $this->getContext($context, "cancelProductForm")), "save", []), 'widget');
        echo "
      </div>
    </div>
    ";
        // line 267
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["cancelProductForm"] ?? $this->getContext($context, "cancelProductForm")), 'form_end');
        echo "
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  595 => 267,  589 => 264,  585 => 263,  576 => 257,  571 => 255,  567 => 254,  561 => 253,  555 => 250,  551 => 249,  544 => 247,  539 => 245,  533 => 242,  527 => 239,  521 => 235,  515 => 233,  513 => 232,  509 => 230,  507 => 227,  506 => 226,  494 => 217,  490 => 216,  486 => 214,  480 => 211,  476 => 210,  473 => 209,  471 => 208,  468 => 207,  462 => 204,  459 => 203,  457 => 202,  449 => 197,  443 => 194,  438 => 192,  431 => 190,  427 => 189,  422 => 187,  419 => 186,  417 => 185,  414 => 184,  408 => 181,  404 => 180,  401 => 179,  399 => 178,  393 => 175,  389 => 174,  383 => 173,  377 => 170,  373 => 169,  365 => 163,  363 => 161,  362 => 160,  361 => 159,  353 => 154,  349 => 152,  343 => 149,  339 => 147,  337 => 146,  322 => 135,  305 => 133,  301 => 132,  289 => 125,  282 => 124,  280 => 123,  275 => 120,  260 => 118,  256 => 117,  250 => 114,  242 => 108,  239 => 107,  236 => 106,  222 => 105,  220 => 103,  219 => 102,  218 => 101,  217 => 100,  216 => 99,  214 => 98,  197 => 97,  189 => 92,  186 => 91,  180 => 88,  177 => 87,  174 => 86,  168 => 83,  165 => 82,  163 => 81,  158 => 79,  154 => 78,  148 => 75,  142 => 72,  136 => 71,  131 => 69,  125 => 68,  120 => 66,  114 => 63,  110 => 62,  103 => 58,  96 => 54,  91 => 53,  89 => 50,  88 => 49,  87 => 48,  86 => 47,  85 => 46,  84 => 44,  74 => 39,  69 => 36,  62 => 34,  59 => 33,  56 => 32,  53 => 31,  50 => 30,  47 => 29,  43 => 28,  41 => 27,  39 => 26,  36 => 25,);
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

{% set isColumnLocationDisplayed = false %}
{% set isColumnRefundedDisplayed = false %}
{% for product in orderForViewing.products.products|slice(0, paginationNum) %}
  {% if product.location is not empty %}
    {% set isColumnLocationDisplayed = true %}
  {% endif %}
  {% if product.quantityRefunded > 0 %}
    {% set isColumnRefundedDisplayed = true %}
  {% endif %}
{% endfor %}
<div class=\"card\" id=\"orderProductsPanel\">
  <div class=\"card-header\">
    <h3 class=\"card-header-title\">
      {{ 'Products'|trans({}, 'Admin.Global') }} (<span id=\"orderProductsPanelCount\">{{ orderForViewing.products.products|length }}</span>)
    </h3>
  </div>

  <div class=\"card-body\">
    {% set formOptions = {
      'attr': {
        'data-order-id': orderForViewing.id,
        'data-is-delivered': orderForViewing.isDelivered,
        'data-is-tax-included': orderForViewing.isTaxIncluded,
        'data-discounts-amount': orderForViewing.prices.discountsAmountRaw,
        'data-price-specification': priceSpecification|json_encode|replace(\"'\", \"&#39;\")|raw
      }
    } %}
    {{ form_start(cancelProductForm, formOptions) }}
    <table class=\"table\" id=\"orderProductsTable\" data-currency-precision=\"{{ orderCurrency.precision }}\">
      <thead>
      <tr>
        <th>
          <p>{{ 'Product'|trans({}, 'Admin.Global') }}</p>
        </th>
        <th></th>
        <th>
          <p class=\"mb-0\">{{ 'Price per unit'|trans({}, 'Admin.Advparameters.Feature') }}</p>
          <small class=\"text-muted\">{{ orderForViewing.taxMethod }}</small>
        </th>
        <th>
          <p>{{ 'Quantity'|trans({}, 'Admin.Global') }}</p>
        </th>
        <th class=\"cellProductLocation{% if not isColumnLocationDisplayed %} d-none{% endif %}\">
          <p>{{ 'Stock location'|trans({}, 'Admin.Orderscustomers.Feature') }}</p>
        </th>
        <th class=\"cellProductRefunded{% if not isColumnRefundedDisplayed %} d-none{% endif %}\">
          <p>{{ 'Refunded'|trans({}, 'Admin.Orderscustomers.Feature') }}</p>
        </th>
        <th>
          <p>{{ 'Available'|trans({}, 'Admin.Global') }}</p>
        </th>
        <th>
          <p class=\"mb-0\">{{ 'Total'|trans({}, 'Admin.Global') }}</p>
          <small class=\"text-muted\">{{ orderForViewing.taxMethod }}</small>
        </th>
        {% if orderForViewing.hasInvoice() %}
          <th>
            <p>{{ 'Invoice'|trans({}, 'Admin.Global') }}</p>
          </th>
        {% endif %}
        {% if not orderForViewing.delivered %}
          <th class=\"text-right product_actions d-print-none\">
            <p>{{ 'Actions'|trans({}, 'Admin.Global') }}</p>
          </th>
        {% endif %}
        <th class=\"text-center cancel-product-element\">
          <p>{{ 'Partial refund'|trans({}, 'Admin.Orderscustomers.Feature') }}</p>
        </th>
      </tr>
      </thead>
      <tbody>
      {% for product in orderForViewing.products.products %}
        {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/product.html.twig' with {
          'product': product,
          'productIndex': loop.index,
          'paginationNum': paginationNum,
          'isColumnLocationDisplayed': isColumnLocationDisplayed,
          'isColumnRefundedDisplayed': isColumnRefundedDisplayed
        } %}
      {% endfor %}
      {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/add_product_row.html.twig' %}
      {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/edit_product_row.html.twig' %}
      </tbody>
    </table>

    <div class=\"row mb-3\">
      <div class=\"col-md-6 text-left d-print-none order-product-pagination\">
        <div class=\"form-group row\">
          <label for=\"paginator_select_page_limit\" class=\"col-form-label ml-3\">{{ \"Items per page:\"|trans({}, 'Admin.Catalog.Feature') }}</label>
          <div class=\"col\">
            <select id=\"orderProductsTablePaginationNumberSelector\" class=\"pagination-link custom-select\">
              {% for numPageOption in paginationNumOptions %}
                <option value=\"{{ numPageOption }}\"{% if numPageOption == paginationNum %} selected{% endif %}>{{ numPageOption }}</option>
              {% endfor %}
            </select>
          </div>
        </div>
        {% set numPages = max(orderForViewing.products.products|length / paginationNum, 1)|round(0, 'ceil') %}
        <nav aria-label=\"Products Navigation\"{% if orderForViewing.products.products|length <= paginationNum %} class=\"d-none\"{% endif %} id=\"orderProductsNavPagination\">
          <ul class=\"pagination\" id=\"orderProductsTablePagination\" data-num-per-page=\"{{ paginationNum }}\" data-num-pages=\"{{ numPages }}\">
            <li class=\"page-item disabled\" id=\"orderProductsTablePaginationPrev\">
              <a class=\"page-link\" href=\"javascript:void(0);\" aria-label=\"Previous\">
                <span aria-hidden=\"true\">&laquo;</span>
                <span class=\"sr-only\">Previous</span>
              </a>
            </li>
            {% for numPage in 1..numPages %}
              <li class=\"page-item{% if numPage==1 %} active{% endif %}\"><span class=\"page-link\" data-order-id=\"{{ orderForViewing.id }}\" data-page=\"{{ numPage }}\">{{ numPage }}</span></li>
            {% endfor %}
            <li class=\"page-item d-none\"><span class=\"page-link\" data-order-id=\"{{ orderForViewing.id }}\" data-page=\"\"></span></li>
            <li class=\"page-item\" id=\"orderProductsTablePaginationNext\">
              <a class=\"page-link\" href=\"javascript:void(0);\" aria-label=\"Next\">
                <span aria-hidden=\"true\">&raquo;</span>
                <span class=\"sr-only\">Next</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <div class=\"col-md-6 text-right discount-action\">
        {% if not orderForViewing.delivered %}
          <button type=\"button\" class=\"btn btn-outline-secondary js-product-action-btn mr-3\" id=\"addProductBtn\">
            <i class=\"material-icons\">add_circle_outline</i>
            {{ 'Add a product'|trans({}, 'Admin.Orderscustomers.Feature') }}
          </button>
        {% endif %}
        <button type=\"button\" class=\"btn btn-outline-secondary js-product-action-btn\" data-toggle=\"modal\" data-target=\"#addOrderDiscountModal\">
          <i class=\"material-icons\">confirmation_number</i>
          {{ 'Add a discount'|trans({}, 'Admin.Orderscustomers.Feature') }}
        </button>
      </div>
    </div>

    {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/discount_list.html.twig' with {
      'discounts': orderForViewing.discounts.discounts,
      'orderId': orderForViewing.id
    } %}

    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"info-block\">
          <div class=\"row\">
            <div class=\"col-sm text-center\">
              <p class=\"text-muted mb-0\"><strong>{{ 'Products'|trans({}, 'Admin.Global') }}</strong></p>
              <strong id=\"orderProductsTotal\">{{ orderForViewing.prices.productsPriceFormatted }}</strong>
            </div>

            <div id=\"order-discounts-total-container\" class=\"col-sm text-center{% if not orderForViewing.prices.discountsAmountRaw.greaterThan((number(0))) %} d-none{% endif %}\">
              <p class=\"text-muted mb-0\"><strong>{{ 'Discounts'|trans({}, 'Admin.Global') }}</strong></p>
              <strong id=\"orderDiscountsTotal\">-{{ orderForViewing.prices.discountsAmountFormatted }}</strong>
            </div>

            {% if orderForViewing.prices.wrappingPriceRaw.greaterThan(number(0)) %}
              <div class=\"col-sm text-center\">
                <p class=\"text-muted mb-0\"><strong>{{ 'Wrapping'|trans({}, 'Admin.Orderscustomers.Feature') }}</strong></p>
                <strong id=\"orderWrappingTotal\">{{ orderForViewing.prices.wrappingPriceFormatted }}</strong>
              </div>
            {% endif %}

            {% if orderForViewing.prices.shippingPriceRaw.greaterThan(number(0)) %}
              <div class=\"col-sm text-center\">
                <p class=\"text-muted mb-0\"><strong>{{ 'Shipping'|trans({}, 'Admin.Catalog.Feature') }}</strong></p>
                <div class=\"shipping-price\">
                  <strong id=\"orderShippingTotal\">{{ orderForViewing.prices.shippingPriceFormatted }}</strong>
                  <div class=\"cancel-product-element shipping-refund-amount{% if orderForViewing.prices.shippingRefundableAmountRaw.lowerOrEqualThan(number(0)) %} hidden{% endif %}\">
                    <div class=\"input-group\">
                      {{ form_widget(cancelProductForm.shipping_amount) }}
                      <div class=\"input-group-append\">
                        <div class=\"input-group-text\">{{ orderCurrency.symbol }}</div>
                      </div>
                    </div>
                    <p class=\"text-center\">(max {{ orderForViewing.prices.shippingRefundableAmountFormatted }} tax included)</p>
                  </div>
                </div>
              </div>
            {% else %}
              {# No shippping, the form field is hidden in this div to avoid it being displayed through automatic form_rest #}
              <div class=\"d-none\">
                {{ form_widget(cancelProductForm.shipping_amount) }}
              </div>
            {% endif %}

            {% if not orderForViewing.taxIncluded %}
              <div class=\"col-sm text-center\">
                <p class=\"text-muted mb-0\"><strong>{{ 'Taxes'|trans({}, 'Admin.Global') }}</strong></p>
                <strong id=\"orderTaxesTotal\">{{ orderForViewing.prices.taxesAmountFormatted }}</strong>
              </div>
            {% endif %}

            <div class=\"col-sm text-center\">
              <p class=\"text-muted mb-0\"><strong>{{ 'Total'|trans({}, 'Admin.Global') }}</strong></p>
              <span class=\"badge rounded badge-dark font-size-100\" id=\"orderTotal\">{{ orderForViewing.prices.totalAmountFormatted }}</span>
            </div>

          </div>
        </div>
      </div>
      <div class=\"col-md-12\">
        <p class=\"mb-0 mt-1 text-center text-muted\">
          <small>
            {{ 'For this customer group, prices are displayed as: [1]%tax_method%[/1]'|trans({
              '%tax_method%': orderForViewing.taxMethod,
              '[1]': '<strong>',
              '[/1]': '</strong>'
            }, 'Admin.Orderscustomers.Notification')|raw }}.

            {% if not 'PS_ORDER_RETURN'|configuration %}
              <strong>{{ 'Merchandise returns are disabled'|trans({}, 'Admin.Orderscustomers.Notification') }}</strong>
            {% endif %}
          </small>
        </p>
        <div class=\"cancel-product-element refund-checkboxes-container\">
          <div class=\"cancel-product-element form-group restock-products\">
            {{ form_widget(cancelProductForm.restock) }}
          </div>
          <div class=\"cancel-product-element form-group refund-credit-slip\">
            {{ form_widget(cancelProductForm.credit_slip) }}
          </div>
          <div class=\"cancel-product-element form-group refund-voucher\">
            {{ form_widget(cancelProductForm.voucher) }}
          </div>
          <div class=\"cancel-product-element shipping-refund{% if orderForViewing.prices.shippingRefundableAmountRaw.lowerOrEqualThan(number(0)) %} hidden{% endif %}\">
            <div class=\"form-group\">
              {{ form_widget(cancelProductForm.shipping) }}
              <small class=\"shipping-refund-amount\">({{ orderForViewing.prices.shippingRefundableAmountFormatted }})</small>
            </div>
          </div>
          <div class=\"cancel-product-element form-group voucher-refund-type{% if orderForViewing.prices.discountsAmountRaw.lowerOrEqualThan(number(0)) %} hidden{% endif %}\">
            {{ 'This order has been partially paid by voucher. Choose the amount you want to refund:'|trans({}, 'Admin.Orderscustomers.Feature') }}
            {{ form_widget(cancelProductForm.voucher_refund_type) }}
            <div class=\"voucher-refund-type-negative-error\">
              {{ 'Error. You cannot refund a negative amount.'|trans({}, 'Admin.Orderscustomers.Notification') }}
            </div>
          </div>
        </div>
      </div>
      <div class=\"cancel-product-element form-submit text-right\">
        {{ form_widget(cancelProductForm.cancel) }}
        {{ form_widget(cancelProductForm.save) }}
      </div>
    </div>
    {{ form_end(cancelProductForm) }}
  </div>
</div>
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/products.html.twig", "C:\\laragon\\www\\testPrestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Order\\Order\\Blocks\\View\\products.html.twig");
    }
}
