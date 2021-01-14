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

/* @PrestaShop/Admin/Sell/Order/Order/preview.html.twig */
class __TwigTemplate_b4071b5d48ecfbb3da67bf67d059144c3d1975a2113160d0d21960622492feef extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'order_preview' => [$this, 'block_order_preview'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('order_preview', $context, $blocks);
        // line 193
        echo "
";
    }

    // line 26
    public function block_order_preview($context, array $blocks = [])
    {
        // line 27
        echo "  <div class=\"row order-preview-content mt-2\">
    <div class=\"col-5\">
      <div class=\"row\">
        <div class=\"col\">
          <div class=\"row\">
            <div class=\"col-1\">
              <p class=\"mb-0\">
                <i class=\"material-icons pr-1\">local_shipping</i>
              </p>
            </div>
            <div class=\"col\">
              <p class=\"mb-0\">
                <strong>";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Carrier", [], "Admin.Global"), "html", null, true);
        echo ":</strong>
                ";
        // line 40
        if ( !$this->getAttribute(($context["orderPreview"] ?? null), "isVirtual", [])) {
            // line 41
            echo "                  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? null), "shippingDetails", []), "carrierName", []), "html", null, true);
            echo "
                ";
        } else {
            // line 43
            echo "                  -
                ";
        }
        // line 45
        echo "              </p>

              <p class=\"mb-0\">
                <strong>";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tracking number", [], "Admin.Shipping.Feature"), "html", null, true);
        echo ":</strong>
                ";
        // line 49
        if (( !$this->getAttribute(($context["orderPreview"] ?? null), "isVirtual", []) &&  !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderPreview"] ?? null), "shippingDetails", []), "trackingNumber", [])))) {
            // line 50
            echo "                  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? null), "shippingDetails", []), "trackingNumber", []), "html", null, true);
            echo "
                ";
        } else {
            // line 52
            echo "                  -
                ";
        }
        // line 54
        echo "              </p>

              <p class=\"mb-2\">
                <strong>";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shipping details", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo ":</strong>
                ";
        // line 58
        if ($this->getAttribute(($context["orderPreview"] ?? null), "virtual", [])) {
            // line 59
            echo "                  -
                ";
        }
        // line 61
        echo "              </p>

              ";
        // line 63
        if ( !$this->getAttribute(($context["orderPreview"] ?? null), "virtual", [])) {
            // line 64
            echo "                <p class=\"mb-0\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? null), "shippingDetails", []), "firstName", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? null), "shippingDetails", []), "lastName", []), "html", null, true);
            echo "</p>
                ";
            // line 65
            if ($this->getAttribute($this->getAttribute(($context["orderPreview"] ?? null), "shippingDetails", []), "company", [])) {
                // line 66
                echo "                  <p class=\"mb-0\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? null), "shippingDetails", []), "company", []), "html", null, true);
                echo "</p>
                ";
            }
            // line 68
            echo "                ";
            if ($this->getAttribute($this->getAttribute(($context["orderPreview"] ?? null), "shippingDetails", []), "vatNumber", [])) {
                // line 69
                echo "                  <p class=\"mb-0\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? null), "shippingDetails", []), "vatNumber", []), "html", null, true);
                echo "</p>
                ";
            }
            // line 71
            echo "                <p class=\"mb-0\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? null), "shippingDetails", []), "address1", []), "html", null, true);
            echo "</p>
                <p class=\"mb-0\">";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? null), "shippingDetails", []), "address2", []), "html", null, true);
            echo "</p>
                <p class=\"mb-0\">
                  ";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? null), "shippingDetails", []), "city", []), "html", null, true);
            echo ",
                  ";
            // line 75
            if ($this->getAttribute($this->getAttribute(($context["orderPreview"] ?? null), "shippingDetails", []), "stateName", [])) {
                // line 76
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? null), "shippingDetails", []), "stateName", []), "html", null, true);
                echo "
                  ";
            }
            // line 78
            echo "                  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? null), "shippingDetails", []), "postalCode", []), "html", null, true);
            echo "
                </p>
                <p class=\"mb-0\">";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? null), "shippingDetails", []), "country", []), "html", null, true);
            echo "</p>
                <p>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? null), "shippingDetails", []), "phone", []), "html", null, true);
            echo "</p>
              ";
        }
        // line 83
        echo "            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"row\">
            <div class=\"col-1\">
              <p class=\"mb-0\">
                <i class=\"material-icons pr-1\">receipt</i>
              </p>
            </div>
            <div class=\"col\">
              <p class=\"mb-1\">
                <strong>";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice details", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo ":</strong>
              </p>

              <p class=\"mb-0\">";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? null), "invoiceDetails", []), "firstName", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? null), "invoiceDetails", []), "lastName", []), "html", null, true);
        echo "</p>
              ";
        // line 99
        if ($this->getAttribute($this->getAttribute(($context["orderPreview"] ?? null), "invoiceDetails", []), "company", [])) {
            // line 100
            echo "                <p class=\"mb-0\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? null), "invoiceDetails", []), "company", []), "html", null, true);
            echo "</p>
              ";
        }
        // line 102
        echo "              ";
        if ($this->getAttribute($this->getAttribute(($context["orderPreview"] ?? null), "invoiceDetails", []), "vatNumber", [])) {
            // line 103
            echo "                <p class=\"mb-0\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? null), "invoiceDetails", []), "vatNumber", []), "html", null, true);
            echo "</p>
              ";
        }
        // line 105
        echo "              <p class=\"mb-0\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? null), "invoiceDetails", []), "address1", []), "html", null, true);
        echo "</p>
              <p class=\"mb-0\">";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? null), "invoiceDetails", []), "address2", []), "html", null, true);
        echo "</p>
              <p class=\"mb-0\">";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? null), "invoiceDetails", []), "country", []), "html", null, true);
        echo "</p>
              <p class=\"mb-0\">
                ";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? null), "invoiceDetails", []), "city", []), "html", null, true);
        echo ",
                ";
        // line 110
        if ($this->getAttribute($this->getAttribute(($context["orderPreview"] ?? null), "invoiceDetails", []), "stateName", [])) {
            // line 111
            echo "                  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? null), "invoiceDetails", []), "stateName", []), "html", null, true);
            echo "
                ";
        }
        // line 113
        echo "                ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? null), "invoiceDetails", []), "postalCode", []), "html", null, true);
        echo "
              </p>
              <p class=\"mb-0\">";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? null), "invoiceDetails", []), "phone", []), "html", null, true);
        echo "</p>
              <p>";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? null), "invoiceDetails", []), "email", []), "html", null, true);
        echo "</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-7\">
      <div class=\"table-responsive\">
        <table class=\"table product table-borderless border-bottom-0\">
          <thead>
          <tr>
            ";
        // line 127
        if ($this->getAttribute(($context["orderPreview"] ?? null), "taxIncluded", [])) {
            // line 128
            echo "              ";
            $context["taxInclusion"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tax included", [], "Admin.Global");
            // line 129
            echo "            ";
        } else {
            // line 130
            echo "              ";
            $context["taxInclusion"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tax excluded", [], "Admin.Global");
            // line 131
            echo "            ";
        }
        // line 132
        echo "
            <th>
              ";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products", [], "Admin.Global"), "html", null, true);
        echo "
              (";
        // line 135
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["orderPreview"] ?? null), "productDetails", [])), "html", null, true);
        echo ")
            </th>
            <th>";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reference", [], "Admin.Global"), "html", null, true);
        echo "</th>
            <th class=\"js-cell-product-stock-location\">";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Stock location", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</th>
            ";
        // line 139
        if (($this->getAttribute(($context["orderPreview"] ?? null), "taxIncluded", []) == false)) {
            // line 140
            echo "              <th class=\"text-center\">
                ";
            // line 141
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tax", [], "Admin.Global"), "html", null, true);
            echo "
              </th>
            ";
        }
        // line 144
        echo "            <th class=\"text-center\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", [], "Admin.Global"), "html", null, true);
        echo "</th>
            <th class=\"text-center\">
              ";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total", [], "Admin.Global"), "html", null, true);
        echo "
              <small>";
        // line 147
        echo twig_escape_filter($this->env, ($context["taxInclusion"] ?? null), "html", null, true);
        echo "</small>
            </th>
          </tr>
          </thead>
          <tbody>
          ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["orderPreview"] ?? null), "productDetails", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["productDetail"]) {
            // line 153
            echo "            <tr class=\"";
            if (($this->getAttribute($context["loop"], "index", []) > ($context["productsPreviewLimit"] ?? null))) {
                echo "js-product-preview-more d-none";
            }
            echo "\">
              <td class=\"p-1\">";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute($context["productDetail"], "name", []), "html", null, true);
            echo "</td>
              <td class=\"p-1\">";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute($context["productDetail"], "reference", []), "html", null, true);
            echo "</td>
              <td class=\"p-1 js-cell-product-stock-location\">
                ";
            // line 157
            if ( !twig_test_empty($this->getAttribute($context["productDetail"], "location", []))) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["productDetail"], "location", []), "html", null, true);
            }
            // line 158
            echo "              </td>
              ";
            // line 159
            if (($this->getAttribute(($context["orderPreview"] ?? null), "taxIncluded", []) == false)) {
                // line 160
                echo "                <td class=\"p-1 text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["productDetail"], "totalTax", []), "html", null, true);
                echo "</td>
              ";
            }
            // line 162
            echo "              <td class=\"p-1 text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["productDetail"], "quantity", []), "html", null, true);
            echo "</td>
              <td class=\"p-1 text-center\">";
            // line 163
            echo twig_escape_filter($this->env, $this->getAttribute($context["productDetail"], "totalPrice", []), "html", null, true);
            echo "</td>
            </tr>
          ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productDetail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "
          ";
        // line 167
        if ((twig_length_filter($this->env, $this->getAttribute(($context["orderPreview"] ?? null), "productDetails", [])) > ($context["productsPreviewLimit"] ?? null))) {
            // line 168
            echo "            <tr>
              <td colspan=\"6\">
                <a href=\"#\" class=\"js-preview-more-products-btn text-dark\">
                  <i class=\"material-icons\">more_horiz</i>
                  ";
            // line 172
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("(%count% more)", ["%count%" => (twig_length_filter($this->env, $this->getAttribute(            // line 173
($context["orderPreview"] ?? null), "productDetails", [])) - ($context["productsPreviewLimit"] ?? null))], "Admin.Global"), "html", null, true);
            // line 174
            echo "
                </a>
              </td>
            </tr>
          ";
        }
        // line 179
        echo "          </tbody>
        </table>
      </div>

      <div class=\"text-right\">
        <a href=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_view", ["orderId" => ($context["orderId"] ?? null)]), "html", null, true);
        echo "\" class=\"btn btn-primary btn-sm mb-3\">
          ";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Open details", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
          <i class=\"material-icons\">arrow_right_alt</i>
        </a>
      </div>
    </div>
  </div>
  ";
        // line 191
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayOrderPreview", ["order_id" => ($context["orderId"] ?? null)]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/preview.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  445 => 191,  436 => 185,  432 => 184,  425 => 179,  418 => 174,  416 => 173,  415 => 172,  409 => 168,  407 => 167,  404 => 166,  387 => 163,  382 => 162,  376 => 160,  374 => 159,  371 => 158,  367 => 157,  362 => 155,  358 => 154,  351 => 153,  334 => 152,  326 => 147,  322 => 146,  316 => 144,  310 => 141,  307 => 140,  305 => 139,  301 => 138,  297 => 137,  292 => 135,  288 => 134,  284 => 132,  281 => 131,  278 => 130,  275 => 129,  272 => 128,  270 => 127,  256 => 116,  252 => 115,  246 => 113,  240 => 111,  238 => 110,  234 => 109,  229 => 107,  225 => 106,  220 => 105,  214 => 103,  211 => 102,  205 => 100,  203 => 99,  197 => 98,  191 => 95,  177 => 83,  172 => 81,  168 => 80,  162 => 78,  156 => 76,  154 => 75,  150 => 74,  145 => 72,  140 => 71,  134 => 69,  131 => 68,  125 => 66,  123 => 65,  116 => 64,  114 => 63,  110 => 61,  106 => 59,  104 => 58,  100 => 57,  95 => 54,  91 => 52,  85 => 50,  83 => 49,  79 => 48,  74 => 45,  70 => 43,  64 => 41,  62 => 40,  58 => 39,  44 => 27,  41 => 26,  36 => 193,  34 => 26,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/preview.html.twig", "C:\\laragon\\www\\testPrestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Order\\Order\\preview.html.twig");
    }
}
