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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/product.html.twig */
class __TwigTemplate_568ebb266fa252c5a877aa89dac76cfcf2e1bb7994758c0968f11a4f9db7f6b2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/product.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/product.html.twig"));

        // line 25
        $context["rowIsDisplayed"] = (((isset($context["productIndex"]) || array_key_exists("productIndex", $context)) && (isset($context["paginationNum"]) || array_key_exists("paginationNum", $context))) && (($context["productIndex"] ?? $this->getContext($context, "productIndex")) > ($context["paginationNum"] ?? $this->getContext($context, "paginationNum"))));
        // line 26
        echo "<tr id=\"orderProduct_";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "orderDetailId", []), "html", null, true);
        echo "\" class=\"cellProduct";
        if (($context["rowIsDisplayed"] ?? $this->getContext($context, "rowIsDisplayed"))) {
            echo " d-none d-print-table-row";
        }
        echo "\">
  <td class=\"cellProductImg\">
    ";
        // line 28
        if ($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "imagePath", [])) {
            // line 29
            echo "      <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "imagePath", []), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "name", []), "html", null, true);
            echo "\" />
    ";
        }
        // line 31
        echo "  </td>
  <td class=\"cellProductName\">
    <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_form", ["id" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", [])]), "html", null, true);
        echo "\">
      <p class=\"mb-0 productName\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "name", []), "html", null, true);
        echo "</p>
      ";
        // line 35
        if ($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "reference", [])) {
            // line 36
            echo "        <p class=\"mb-0 productReference\">
          ";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reference number:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
          ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "reference", []), "html", null, true);
            echo "
        </p>
      ";
        }
        // line 41
        echo "      ";
        if ( !twig_test_empty($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "supplierReference", []))) {
            // line 42
            echo "        <p class=\"mb-0 productSupplierReference\">
          ";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Supplier reference:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
          ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "supplierReference", []), "html", null, true);
            echo "
        </p>
      ";
        }
        // line 47
        echo "    </a>
    ";
        // line 48
        if ((($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "type", []) == twig_constant("PrestaShop\\PrestaShop\\Core\\Domain\\Order\\QueryResult\\OrderProductForViewing::TYPE_PACK")) && (null === $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "customizations", [])))) {
            // line 49
            echo "      <span class=\"btn-product-pack-modal d-print-none\" data-toggle=\"modal\" data-target=\"#product-pack-modal\" data-pack-items=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "packItems", [])), "html", null, true);
            echo "\">
        <strong>";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View pack content", [], "Admin.Actions"), "html", null, true);
            echo "</strong>
      </span>
    ";
        }
        // line 53
        echo "  </td>
  <td class=\"cellProductUnitPrice\">";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "unitPrice", []), "html", null, true);
        echo "</td>
  <td class=\"cellProductQuantity text-center\">
    ";
        // line 56
        if (($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "quantity", []) > 1)) {
            // line 57
            echo "      <span class=\"badge badge-secondary rounded-circle\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "quantity", []), "html", null, true);
            echo "</span>
    ";
        } else {
            // line 59
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "quantity", []), "html", null, true);
            echo "
    ";
        }
        // line 61
        echo "
    <div class=\"d-none js-product-quantity\">
      <input type=\"text\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "quantity", []), "html", null, true);
        echo "\" class=\"form-control\">
    </div>
  </td>
  <td class=\"cellProductLocation";
        // line 66
        if ( !($context["isColumnLocationDisplayed"] ?? $this->getContext($context, "isColumnLocationDisplayed"))) {
            echo " d-none";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "location", []), "html", null, true);
        echo "</td>
  <td class=\"cellProductRefunded";
        // line 67
        if ( !($context["isColumnRefundedDisplayed"] ?? $this->getContext($context, "isColumnRefundedDisplayed"))) {
            echo " d-none";
        }
        echo "\">
    ";
        // line 68
        if (($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "quantityRefunded", []) > 0)) {
            // line 69
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "quantityRefunded", []), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "amountRefunded", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Refunded", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo ")
    ";
        }
        // line 71
        echo "  </td>
  <td class=\"cellProductAvailableQuantity text-center\">";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "availableQuantity", []), "html", null, true);
        echo "</td>
  <td class=\"cellProductTotalPrice\">";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "totalPrice", []), "html", null, true);
        echo "</td>
  ";
        // line 74
        if ($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "hasInvoice", [], "method")) {
            // line 75
            echo "    <td>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "orderInvoiceNumber", []), "html", null, true);
            echo "</td>
  ";
        }
        // line 77
        echo "  ";
        if ( !$this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "delivered", [])) {
            // line 78
            echo "    <td class=\"text-right cellProductActions\">
      <button
        type=\"button\"
        class=\"btn tooltip-link js-order-product-edit-btn\"
        data-toggle=\"pstooltip\"
        data-placement=\"top\"
        data-original-title=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit", [], "Admin.Actions"), "html", null, true);
            echo "\"
        data-order-detail-id=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "orderDetailId", []), "html", null, true);
            echo "\"
        data-product-id=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", []), "html", null, true);
            echo "\"
        data-combination-id=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "combinationId", []), "html", null, true);
            echo "\"
        data-product-quantity=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "quantity", []), "html", null, true);
            echo "\"
        data-product-price-tax-incl=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "unitPriceTaxInclRaw", []), "html", null, true);
            echo "\"
        data-product-price-tax-excl=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "unitPriceTaxExclRaw", []), "html", null, true);
            echo "\"
        data-tax-rate=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "taxRate", []), "html", null, true);
            echo "\"
        data-location=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "location", []), "html", null, true);
            echo "\"
        data-available-quantity=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "availableQuantity", []), "html", null, true);
            echo "\"
        data-available-out-of-stock=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "availableOutOfStock", []), "html", null, true);
            echo "\"
        data-order-invoice-id=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "orderInvoiceId", []), "html", null, true);
            echo "\">
        <i class=\"material-icons\">edit</i>
      </button>
      <button
        type=\"button\"
        class=\"btn tooltip-link js-order-product-delete-btn\"
        data-toggle=\"pstooltip\"
        data-placement=\"top\"
        data-order-id=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "id", []), "html", null, true);
            echo "\"
        data-order-detail-id=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "orderDetailId", []), "html", null, true);
            echo "\"
        data-delete-message=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Are you sure?", [], "Admin.Notifications.Warning"), "html", null, true);
            echo "\"
        data-original-title=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete", [], "Admin.Actions"), "html", null, true);
            echo "\">
        <i class=\"material-icons\">delete</i>
      </button>
    </td>
  ";
        }
        // line 111
        echo "  <td class=\"text-right cancel-product-element\">
    <div class=\"cancel-product-cell cancel-product-element";
        // line 112
        if (($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "refundable", []) == false)) {
            echo " hidden";
        }
        echo "\">
      <div class=\"cancel-product-cell-elements\">
        <div class=\"cancel-product-selector form-group\">
          ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? $this->getContext($context, "cancelProductForm")), ("selected_" . $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "orderDetailId", [])), [], "array"), 'widget');
        echo "
        </div>
        <div class=\"cancel-product-quantity form-group\">
          ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? $this->getContext($context, "cancelProductForm")), ("quantity_" . $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "orderDetailId", [])), [], "array"), 'label');
        echo "
          <div class=\"input-group\">
            ";
        // line 120
        $context["quantityInputOptions"] = ["attr" => ["data-product-price-tax-incl" => $this->getAttribute(        // line 122
($context["product"] ?? $this->getContext($context, "product")), "unitPriceTaxInclRaw", []), "data-product-price-tax-excl" => $this->getAttribute(        // line 123
($context["product"] ?? $this->getContext($context, "product")), "unitPriceTaxExclRaw", []), "data-amount-refundable" => $this->getAttribute(        // line 124
($context["product"] ?? $this->getContext($context, "product")), "amountRefundableRaw", []), "data-quantity-refundable" => $this->getAttribute(        // line 125
($context["product"] ?? $this->getContext($context, "product")), "quantityRefundable", [])]];
        // line 128
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? $this->getContext($context, "cancelProductForm")), ("quantity_" . $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "orderDetailId", [])), [], "array"), 'widget', ($context["quantityInputOptions"] ?? $this->getContext($context, "quantityInputOptions")));
        echo "
            <div class=\"input-group-append\"><div class=\"input-group-text\">/ ";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "quantityRefundable", []), "html", null, true);
        echo "</div></div>
          </div>
        </div>
        <div class=\"cancel-product-amount form-group\">
          ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? $this->getContext($context, "cancelProductForm")), ("amount_" . $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "orderDetailId", [])), [], "array"), 'label');
        echo "
          <div class=\"input-group\">
            ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? $this->getContext($context, "cancelProductForm")), ("amount_" . $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "orderDetailId", [])), [], "array"), 'widget');
        echo "
            <div class=\"input-group-append\"><div class=\"input-group-text\">";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderCurrency"] ?? $this->getContext($context, "orderCurrency")), "symbol", []), "html", null, true);
        echo "</div></div>
            <small class=\"max-refund text-left\">
              ";
        // line 138
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("(Max %amount_refundable% %tax_method%)", ["%amount_refundable%" => $this->getAttribute(        // line 139
($context["product"] ?? $this->getContext($context, "product")), "amountRefundable", []), "%tax_method%" => $this->getAttribute(        // line 140
($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "taxMethod", [])], "Admin.Orderscustomers.Help");
        // line 141
        echo "
            </small>
          </div>
        </div>
      </div>
    </div>
  </td>
</tr>
";
        // line 149
        if ( !(null === $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "customizations", []))) {
            // line 150
            echo "  <tr class=\"order-product-customization";
            if (($context["rowIsDisplayed"] ?? $this->getContext($context, "rowIsDisplayed"))) {
                echo " d-none";
            }
            echo "\">
    <td class=\"border-top-0\"></td>
    ";
            // line 152
            $context["colspan"] = 8;
            // line 153
            echo "    ";
            $context["colspan"] = (($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "hasInvoice", [], "method")) ? ((($context["colspan"] ?? $this->getContext($context, "colspan")) + 1)) : (($context["colspan"] ?? $this->getContext($context, "colspan"))));
            // line 154
            echo "    ";
            $context["colspan"] = (( !$this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "delivered", [])) ? ((($context["colspan"] ?? $this->getContext($context, "colspan")) + 1)) : (($context["colspan"] ?? $this->getContext($context, "colspan"))));
            // line 155
            echo "    <td colspan=\"";
            echo twig_escape_filter($this->env, ($context["colspan"] ?? $this->getContext($context, "colspan")), "html", null, true);
            echo "\" class=\"border-top-0 text-muted\">
      ";
            // line 156
            if ($this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "customizations", []), "fileCustomizations", [])) {
                // line 157
                echo "        <div class=\"d-flex flex-row flex-wrap\">
          ";
                // line 158
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "customizations", []), "fileCustomizations", []));
                foreach ($context['_seq'] as $context["_key"] => $context["customization"]) {
                    // line 159
                    echo "              <div class=\"mr-4\">
                <p><strong>";
                    // line 160
                    echo twig_escape_filter($this->env, $this->getAttribute($context["customization"], "name", []), "html", null, true);
                    echo "</strong></p>
                <p>
                  <a href=\"";
                    // line 162
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_display_customization_image", ["orderId" => $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "id", []), "name" => twig_replace_filter(twig_urlencode_filter($this->getAttribute($context["customization"], "name", [])), ["%" => "_"]), "value" => $this->getAttribute($context["customization"], "value", [])]), "html", null, true);
                    echo "\" download>
                    <img src=\"";
                    // line 163
                    echo twig_escape_filter($this->env, $this->getAttribute($context["customization"], "image", []), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["customization"], "name", []), "html", null, true);
                    echo "\">
                  </a>
                </p>
              </div>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customization'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 168
                echo "        </div>
      ";
            }
            // line 170
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "customizations", []), "textCustomizations", []));
            foreach ($context['_seq'] as $context["_key"] => $context["customization"]) {
                // line 171
                echo "        <p><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["customization"], "name", []), "html", null, true);
                echo " :</strong> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["customization"], "value", []), "html", null, true);
                echo "</p>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customization'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            echo "      ";
            if (($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "type", []) == twig_constant("PrestaShop\\PrestaShop\\Core\\Domain\\Order\\QueryResult\\OrderProductForViewing::TYPE_PACK"))) {
                // line 174
                echo "        <div class=\"btn-product-pack-modal mb-3 d-print-none\" data-toggle=\"modal\" data-target=\"#product-pack-modal\" data-pack-items=\"";
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "packItems", [])), "html", null, true);
                echo "\">
          <strong>";
                // line 175
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View pack content", [], "Admin.Actions"), "html", null, true);
                echo "</strong>
        </div>
      ";
            }
            // line 178
            echo "    </td>
  </tr>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  439 => 178,  433 => 175,  428 => 174,  425 => 173,  414 => 171,  409 => 170,  405 => 168,  392 => 163,  388 => 162,  383 => 160,  380 => 159,  376 => 158,  373 => 157,  371 => 156,  366 => 155,  363 => 154,  360 => 153,  358 => 152,  350 => 150,  348 => 149,  338 => 141,  336 => 140,  335 => 139,  334 => 138,  329 => 136,  325 => 135,  320 => 133,  313 => 129,  308 => 128,  306 => 125,  305 => 124,  304 => 123,  303 => 122,  302 => 120,  297 => 118,  291 => 115,  283 => 112,  280 => 111,  272 => 106,  268 => 105,  264 => 104,  260 => 103,  249 => 95,  245 => 94,  241 => 93,  237 => 92,  233 => 91,  229 => 90,  225 => 89,  221 => 88,  217 => 87,  213 => 86,  209 => 85,  205 => 84,  197 => 78,  194 => 77,  188 => 75,  186 => 74,  182 => 73,  178 => 72,  175 => 71,  165 => 69,  163 => 68,  157 => 67,  149 => 66,  143 => 63,  139 => 61,  133 => 59,  127 => 57,  125 => 56,  120 => 54,  117 => 53,  111 => 50,  106 => 49,  104 => 48,  101 => 47,  95 => 44,  91 => 43,  88 => 42,  85 => 41,  79 => 38,  75 => 37,  72 => 36,  70 => 35,  66 => 34,  62 => 33,  58 => 31,  50 => 29,  48 => 28,  38 => 26,  36 => 25,);
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
{% set rowIsDisplayed =  (productIndex is defined and paginationNum is defined and productIndex > paginationNum) %}
<tr id=\"orderProduct_{{ product.orderDetailId }}\" class=\"cellProduct{% if rowIsDisplayed %} d-none d-print-table-row{% endif %}\">
  <td class=\"cellProductImg\">
    {% if product.imagePath %}
      <img src=\"{{ product.imagePath }}\" alt=\"{{ product.name }}\" />
    {% endif %}
  </td>
  <td class=\"cellProductName\">
    <a href=\"{{ path('admin_product_form', {'id': product.id}) }}\">
      <p class=\"mb-0 productName\">{{ product.name }}</p>
      {% if product.reference %}
        <p class=\"mb-0 productReference\">
          {{ 'Reference number:'|trans({}, 'Admin.Orderscustomers.Feature') }}
          {{ product.reference }}
        </p>
      {% endif %}
      {% if product.supplierReference is not empty %}
        <p class=\"mb-0 productSupplierReference\">
          {{ 'Supplier reference:'|trans({}, 'Admin.Orderscustomers.Feature') }}
          {{ product.supplierReference }}
        </p>
      {% endif %}
    </a>
    {% if product.type == constant('PrestaShop\\\\PrestaShop\\\\Core\\\\Domain\\\\Order\\\\QueryResult\\\\OrderProductForViewing::TYPE_PACK') and product.customizations is null %}
      <span class=\"btn-product-pack-modal d-print-none\" data-toggle=\"modal\" data-target=\"#product-pack-modal\" data-pack-items=\"{{ product.packItems|json_encode }}\">
        <strong>{{ 'View pack content'|trans({}, 'Admin.Actions') }}</strong>
      </span>
    {% endif %}
  </td>
  <td class=\"cellProductUnitPrice\">{{ product.unitPrice }}</td>
  <td class=\"cellProductQuantity text-center\">
    {% if product.quantity > 1 %}
      <span class=\"badge badge-secondary rounded-circle\">{{ product.quantity }}</span>
    {% else %}
      {{ product.quantity }}
    {% endif %}

    <div class=\"d-none js-product-quantity\">
      <input type=\"text\" value=\"{{ product.quantity }}\" class=\"form-control\">
    </div>
  </td>
  <td class=\"cellProductLocation{% if not isColumnLocationDisplayed %} d-none{% endif %}\">{{ product.location }}</td>
  <td class=\"cellProductRefunded{% if not isColumnRefundedDisplayed %} d-none{% endif %}\">
    {% if product.quantityRefunded > 0 %}
      {{ product.quantityRefunded }} ({{ product.amountRefunded }} {{ 'Refunded'|trans({}, 'Admin.Orderscustomers.Feature') }})
    {% endif %}
  </td>
  <td class=\"cellProductAvailableQuantity text-center\">{{ product.availableQuantity }}</td>
  <td class=\"cellProductTotalPrice\">{{ product.totalPrice }}</td>
  {% if orderForViewing.hasInvoice() %}
    <td>{{ product.orderInvoiceNumber }}</td>
  {% endif %}
  {% if not orderForViewing.delivered %}
    <td class=\"text-right cellProductActions\">
      <button
        type=\"button\"
        class=\"btn tooltip-link js-order-product-edit-btn\"
        data-toggle=\"pstooltip\"
        data-placement=\"top\"
        data-original-title=\"{{ 'Edit'|trans({}, 'Admin.Actions') }}\"
        data-order-detail-id=\"{{ product.orderDetailId }}\"
        data-product-id=\"{{ product.id }}\"
        data-combination-id=\"{{ product.combinationId }}\"
        data-product-quantity=\"{{ product.quantity }}\"
        data-product-price-tax-incl=\"{{ product.unitPriceTaxInclRaw }}\"
        data-product-price-tax-excl=\"{{ product.unitPriceTaxExclRaw }}\"
        data-tax-rate=\"{{ product.taxRate }}\"
        data-location=\"{{ product.location }}\"
        data-available-quantity=\"{{ product.availableQuantity }}\"
        data-available-out-of-stock=\"{{ product.availableOutOfStock }}\"
        data-order-invoice-id=\"{{ product.orderInvoiceId }}\">
        <i class=\"material-icons\">edit</i>
      </button>
      <button
        type=\"button\"
        class=\"btn tooltip-link js-order-product-delete-btn\"
        data-toggle=\"pstooltip\"
        data-placement=\"top\"
        data-order-id=\"{{ orderForViewing.id }}\"
        data-order-detail-id=\"{{ product.orderDetailId }}\"
        data-delete-message=\"{{ 'Are you sure?'|trans({}, 'Admin.Notifications.Warning') }}\"
        data-original-title=\"{{ 'Delete'|trans({}, 'Admin.Actions') }}\">
        <i class=\"material-icons\">delete</i>
      </button>
    </td>
  {% endif %}
  <td class=\"text-right cancel-product-element\">
    <div class=\"cancel-product-cell cancel-product-element{% if product.refundable == false %} hidden{% endif %}\">
      <div class=\"cancel-product-cell-elements\">
        <div class=\"cancel-product-selector form-group\">
          {{ form_widget(cancelProductForm['selected_' ~ product.orderDetailId]) }}
        </div>
        <div class=\"cancel-product-quantity form-group\">
          {{ form_label(cancelProductForm['quantity_' ~ product.orderDetailId]) }}
          <div class=\"input-group\">
            {% set quantityInputOptions = {
              'attr': {
                'data-product-price-tax-incl': product.unitPriceTaxInclRaw,
                'data-product-price-tax-excl': product.unitPriceTaxExclRaw,
                'data-amount-refundable': product.amountRefundableRaw,
                'data-quantity-refundable': product.quantityRefundable,
              }
            } %}
            {{ form_widget(cancelProductForm['quantity_' ~ product.orderDetailId], quantityInputOptions) }}
            <div class=\"input-group-append\"><div class=\"input-group-text\">/ {{ product.quantityRefundable }}</div></div>
          </div>
        </div>
        <div class=\"cancel-product-amount form-group\">
          {{ form_label(cancelProductForm['amount_' ~ product.orderDetailId]) }}
          <div class=\"input-group\">
            {{ form_widget(cancelProductForm['amount_' ~ product.orderDetailId]) }}
            <div class=\"input-group-append\"><div class=\"input-group-text\">{{ orderCurrency.symbol }}</div></div>
            <small class=\"max-refund text-left\">
              {{ '(Max %amount_refundable% %tax_method%)'|trans({
                '%amount_refundable%': product.amountRefundable,
                '%tax_method%': orderForViewing.taxMethod
              }, 'Admin.Orderscustomers.Help')|raw }}
            </small>
          </div>
        </div>
      </div>
    </div>
  </td>
</tr>
{% if product.customizations is not null %}
  <tr class=\"order-product-customization{% if rowIsDisplayed %} d-none{% endif %}\">
    <td class=\"border-top-0\"></td>
    {% set colspan = 8 %}
    {% set colspan = (orderForViewing.hasInvoice() ? colspan + 1 : colspan) %}
    {% set colspan = (not orderForViewing.delivered ? colspan + 1 : colspan) %}
    <td colspan=\"{{ colspan }}\" class=\"border-top-0 text-muted\">
      {% if product.customizations.fileCustomizations %}
        <div class=\"d-flex flex-row flex-wrap\">
          {% for customization in product.customizations.fileCustomizations %}
              <div class=\"mr-4\">
                <p><strong>{{ customization.name }}</strong></p>
                <p>
                  <a href=\"{{ path('admin_orders_display_customization_image', {'orderId': orderForViewing.id, 'name': customization.name|url_encode|replace({'%': '_'}), \"value\": customization.value})}}\" download>
                    <img src=\"{{ customization.image }}\" alt=\"{{ customization.name }}\">
                  </a>
                </p>
              </div>
          {% endfor %}
        </div>
      {% endif %}
      {% for customization in product.customizations.textCustomizations %}
        <p><strong>{{ customization.name }} :</strong> {{ customization.value }}</p>
      {% endfor %}
      {% if product.type == constant('PrestaShop\\\\PrestaShop\\\\Core\\\\Domain\\\\Order\\\\QueryResult\\\\OrderProductForViewing::TYPE_PACK') %}
        <div class=\"btn-product-pack-modal mb-3 d-print-none\" data-toggle=\"modal\" data-target=\"#product-pack-modal\" data-pack-items=\"{{ product.packItems|json_encode }}\">
          <strong>{{ 'View pack content'|trans({}, 'Admin.Actions') }}</strong>
        </div>
      {% endif %}
    </td>
  </tr>
{% endif %}
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/product.html.twig", "C:\\laragon\\www\\testPrestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Order\\Order\\Blocks\\View\\product.html.twig");
    }
}
