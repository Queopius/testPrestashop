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
class __TwigTemplate_4f079949c608abd1dd09be1b6a9e15b31603554c9c52b0030f93fe22fe78bd84 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/preview.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/preview.html.twig"));

        // line 25
        echo "
";
        // line 26
        $this->displayBlock('order_preview', $context, $blocks);
        // line 193
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 26
    public function block_order_preview($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "order_preview"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "order_preview"));

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
        if ( !$this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "isVirtual", [])) {
            // line 41
            echo "                  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "shippingDetails", []), "carrierName", []), "html", null, true);
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
        if (( !$this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "isVirtual", []) &&  !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "shippingDetails", []), "trackingNumber", [])))) {
            // line 50
            echo "                  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "shippingDetails", []), "trackingNumber", []), "html", null, true);
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
        if ($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "virtual", [])) {
            // line 59
            echo "                  -
                ";
        }
        // line 61
        echo "              </p>

              ";
        // line 63
        if ( !$this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "virtual", [])) {
            // line 64
            echo "                <p class=\"mb-0\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "shippingDetails", []), "firstName", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "shippingDetails", []), "lastName", []), "html", null, true);
            echo "</p>
                ";
            // line 65
            if ($this->getAttribute($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "shippingDetails", []), "company", [])) {
                // line 66
                echo "                  <p class=\"mb-0\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "shippingDetails", []), "company", []), "html", null, true);
                echo "</p>
                ";
            }
            // line 68
            echo "                ";
            if ($this->getAttribute($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "shippingDetails", []), "vatNumber", [])) {
                // line 69
                echo "                  <p class=\"mb-0\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "shippingDetails", []), "vatNumber", []), "html", null, true);
                echo "</p>
                ";
            }
            // line 71
            echo "                <p class=\"mb-0\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "shippingDetails", []), "address1", []), "html", null, true);
            echo "</p>
                <p class=\"mb-0\">";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "shippingDetails", []), "address2", []), "html", null, true);
            echo "</p>
                <p class=\"mb-0\">
                  ";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "shippingDetails", []), "city", []), "html", null, true);
            echo ",
                  ";
            // line 75
            if ($this->getAttribute($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "shippingDetails", []), "stateName", [])) {
                // line 76
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "shippingDetails", []), "stateName", []), "html", null, true);
                echo "
                  ";
            }
            // line 78
            echo "                  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "shippingDetails", []), "postalCode", []), "html", null, true);
            echo "
                </p>
                <p class=\"mb-0\">";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "shippingDetails", []), "country", []), "html", null, true);
            echo "</p>
                <p>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "shippingDetails", []), "phone", []), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "invoiceDetails", []), "firstName", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "invoiceDetails", []), "lastName", []), "html", null, true);
        echo "</p>
              ";
        // line 99
        if ($this->getAttribute($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "invoiceDetails", []), "company", [])) {
            // line 100
            echo "                <p class=\"mb-0\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "invoiceDetails", []), "company", []), "html", null, true);
            echo "</p>
              ";
        }
        // line 102
        echo "              ";
        if ($this->getAttribute($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "invoiceDetails", []), "vatNumber", [])) {
            // line 103
            echo "                <p class=\"mb-0\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "invoiceDetails", []), "vatNumber", []), "html", null, true);
            echo "</p>
              ";
        }
        // line 105
        echo "              <p class=\"mb-0\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "invoiceDetails", []), "address1", []), "html", null, true);
        echo "</p>
              <p class=\"mb-0\">";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "invoiceDetails", []), "address2", []), "html", null, true);
        echo "</p>
              <p class=\"mb-0\">";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "invoiceDetails", []), "country", []), "html", null, true);
        echo "</p>
              <p class=\"mb-0\">
                ";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "invoiceDetails", []), "city", []), "html", null, true);
        echo ",
                ";
        // line 110
        if ($this->getAttribute($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "invoiceDetails", []), "stateName", [])) {
            // line 111
            echo "                  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "invoiceDetails", []), "stateName", []), "html", null, true);
            echo "
                ";
        }
        // line 113
        echo "                ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "invoiceDetails", []), "postalCode", []), "html", null, true);
        echo "
              </p>
              <p class=\"mb-0\">";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "invoiceDetails", []), "phone", []), "html", null, true);
        echo "</p>
              <p>";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "invoiceDetails", []), "email", []), "html", null, true);
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
        if ($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "taxIncluded", [])) {
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
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "productDetails", [])), "html", null, true);
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
        if (($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "taxIncluded", []) == false)) {
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
        echo twig_escape_filter($this->env, ($context["taxInclusion"] ?? $this->getContext($context, "taxInclusion")), "html", null, true);
        echo "</small>
            </th>
          </tr>
          </thead>
          <tbody>
          ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "productDetails", []));
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
            if (($this->getAttribute($context["loop"], "index", []) > ($context["productsPreviewLimit"] ?? $this->getContext($context, "productsPreviewLimit")))) {
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
            if (($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "taxIncluded", []) == false)) {
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
        if ((twig_length_filter($this->env, $this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "productDetails", [])) > ($context["productsPreviewLimit"] ?? $this->getContext($context, "productsPreviewLimit")))) {
            // line 168
            echo "            <tr>
              <td colspan=\"6\">
                <a href=\"#\" class=\"js-preview-more-products-btn text-dark\">
                  <i class=\"material-icons\">more_horiz</i>
                  ";
            // line 172
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("(%count% more)", ["%count%" => (twig_length_filter($this->env, $this->getAttribute(            // line 173
($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "productDetails", [])) - ($context["productsPreviewLimit"] ?? $this->getContext($context, "productsPreviewLimit")))], "Admin.Global"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_view", ["orderId" => ($context["orderId"] ?? $this->getContext($context, "orderId"))]), "html", null, true);
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
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayOrderPreview", ["order_id" => ($context["orderId"] ?? $this->getContext($context, "orderId"))]);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/preview.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  463 => 191,  454 => 185,  450 => 184,  443 => 179,  436 => 174,  434 => 173,  433 => 172,  427 => 168,  425 => 167,  422 => 166,  405 => 163,  400 => 162,  394 => 160,  392 => 159,  389 => 158,  385 => 157,  380 => 155,  376 => 154,  369 => 153,  352 => 152,  344 => 147,  340 => 146,  334 => 144,  328 => 141,  325 => 140,  323 => 139,  319 => 138,  315 => 137,  310 => 135,  306 => 134,  302 => 132,  299 => 131,  296 => 130,  293 => 129,  290 => 128,  288 => 127,  274 => 116,  270 => 115,  264 => 113,  258 => 111,  256 => 110,  252 => 109,  247 => 107,  243 => 106,  238 => 105,  232 => 103,  229 => 102,  223 => 100,  221 => 99,  215 => 98,  209 => 95,  195 => 83,  190 => 81,  186 => 80,  180 => 78,  174 => 76,  172 => 75,  168 => 74,  163 => 72,  158 => 71,  152 => 69,  149 => 68,  143 => 66,  141 => 65,  134 => 64,  132 => 63,  128 => 61,  124 => 59,  122 => 58,  118 => 57,  113 => 54,  109 => 52,  103 => 50,  101 => 49,  97 => 48,  92 => 45,  88 => 43,  82 => 41,  80 => 40,  76 => 39,  62 => 27,  53 => 26,  42 => 193,  40 => 26,  37 => 25,);
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

{% block order_preview %}
  <div class=\"row order-preview-content mt-2\">
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
                <strong>{{ 'Carrier'|trans({}, 'Admin.Global') }}:</strong>
                {% if not orderPreview.isVirtual %}
                  {{ orderPreview.shippingDetails.carrierName }}
                {% else %}
                  -
                {% endif %}
              </p>

              <p class=\"mb-0\">
                <strong>{{ 'Tracking number'|trans({}, 'Admin.Shipping.Feature') }}:</strong>
                {% if not orderPreview.isVirtual and orderPreview.shippingDetails.trackingNumber is not empty %}
                  {{ orderPreview.shippingDetails.trackingNumber }}
                {% else %}
                  -
                {% endif %}
              </p>

              <p class=\"mb-2\">
                <strong>{{ 'Shipping details'|trans({}, 'Admin.Orderscustomers.Feature') }}:</strong>
                {% if orderPreview.virtual %}
                  -
                {% endif %}
              </p>

              {% if not orderPreview.virtual %}
                <p class=\"mb-0\">{{ orderPreview.shippingDetails.firstName }} {{ orderPreview.shippingDetails.lastName }}</p>
                {% if orderPreview.shippingDetails.company %}
                  <p class=\"mb-0\">{{ orderPreview.shippingDetails.company }}</p>
                {% endif %}
                {% if orderPreview.shippingDetails.vatNumber %}
                  <p class=\"mb-0\">{{ orderPreview.shippingDetails.vatNumber }}</p>
                {% endif %}
                <p class=\"mb-0\">{{ orderPreview.shippingDetails.address1 }}</p>
                <p class=\"mb-0\">{{ orderPreview.shippingDetails.address2 }}</p>
                <p class=\"mb-0\">
                  {{ orderPreview.shippingDetails.city }},
                  {% if orderPreview.shippingDetails.stateName %}
                    {{ orderPreview.shippingDetails.stateName }}
                  {% endif %}
                  {{ orderPreview.shippingDetails.postalCode }}
                </p>
                <p class=\"mb-0\">{{ orderPreview.shippingDetails.country }}</p>
                <p>{{ orderPreview.shippingDetails.phone }}</p>
              {% endif %}
            </div>
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
                <strong>{{ 'Invoice details'|trans({}, 'Admin.Orderscustomers.Feature') }}:</strong>
              </p>

              <p class=\"mb-0\">{{ orderPreview.invoiceDetails.firstName }} {{ orderPreview.invoiceDetails.lastName }}</p>
              {% if orderPreview.invoiceDetails.company %}
                <p class=\"mb-0\">{{ orderPreview.invoiceDetails.company }}</p>
              {% endif %}
              {% if orderPreview.invoiceDetails.vatNumber %}
                <p class=\"mb-0\">{{ orderPreview.invoiceDetails.vatNumber }}</p>
              {% endif %}
              <p class=\"mb-0\">{{ orderPreview.invoiceDetails.address1 }}</p>
              <p class=\"mb-0\">{{ orderPreview.invoiceDetails.address2 }}</p>
              <p class=\"mb-0\">{{ orderPreview.invoiceDetails.country }}</p>
              <p class=\"mb-0\">
                {{ orderPreview.invoiceDetails.city }},
                {% if orderPreview.invoiceDetails.stateName %}
                  {{ orderPreview.invoiceDetails.stateName }}
                {% endif %}
                {{ orderPreview.invoiceDetails.postalCode }}
              </p>
              <p class=\"mb-0\">{{ orderPreview.invoiceDetails.phone }}</p>
              <p>{{ orderPreview.invoiceDetails.email }}</p>
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
            {% if orderPreview.taxIncluded %}
              {% set taxInclusion = 'Tax included'|trans({}, 'Admin.Global') %}
            {% else %}
              {% set taxInclusion = 'Tax excluded'|trans({}, 'Admin.Global') %}
            {% endif %}

            <th>
              {{ 'Products'|trans({}, 'Admin.Global') }}
              ({{ orderPreview.productDetails|length }})
            </th>
            <th>{{ 'Reference'|trans({}, 'Admin.Global') }}</th>
            <th class=\"js-cell-product-stock-location\">{{ 'Stock location'|trans({}, 'Admin.Orderscustomers.Feature') }}</th>
            {% if orderPreview.taxIncluded == false %}
              <th class=\"text-center\">
                {{ 'Tax'|trans({}, 'Admin.Global') }}
              </th>
            {% endif %}
            <th class=\"text-center\">{{ 'Quantity'|trans({}, 'Admin.Global') }}</th>
            <th class=\"text-center\">
              {{ 'Total'|trans({}, 'Admin.Global') }}
              <small>{{ taxInclusion }}</small>
            </th>
          </tr>
          </thead>
          <tbody>
          {% for productDetail in orderPreview.productDetails %}
            <tr class=\"{% if loop.index > productsPreviewLimit %}js-product-preview-more d-none{% endif %}\">
              <td class=\"p-1\">{{ productDetail.name }}</td>
              <td class=\"p-1\">{{ productDetail.reference }}</td>
              <td class=\"p-1 js-cell-product-stock-location\">
                {% if productDetail.location is not empty %}{{ productDetail.location }}{% endif %}
              </td>
              {% if orderPreview.taxIncluded == false %}
                <td class=\"p-1 text-center\">{{ productDetail.totalTax }}</td>
              {% endif %}
              <td class=\"p-1 text-center\">{{ productDetail.quantity }}</td>
              <td class=\"p-1 text-center\">{{ productDetail.totalPrice }}</td>
            </tr>
          {% endfor %}

          {% if orderPreview.productDetails|length > productsPreviewLimit %}
            <tr>
              <td colspan=\"6\">
                <a href=\"#\" class=\"js-preview-more-products-btn text-dark\">
                  <i class=\"material-icons\">more_horiz</i>
                  {{ '(%count% more)'|trans({
                    '%count%': orderPreview.productDetails|length - productsPreviewLimit
                  }, 'Admin.Global') }}
                </a>
              </td>
            </tr>
          {% endif %}
          </tbody>
        </table>
      </div>

      <div class=\"text-right\">
        <a href=\"{{ path('admin_orders_view', {'orderId': orderId}) }}\" class=\"btn btn-primary btn-sm mb-3\">
          {{ 'Open details'|trans({}, 'Admin.Orderscustomers.Feature') }}
          <i class=\"material-icons\">arrow_right_alt</i>
        </a>
      </div>
    </div>
  </div>
  {{ renderhook('displayOrderPreview', {'order_id': orderId}) }}
{% endblock %}

", "@PrestaShop/Admin/Sell/Order/Order/preview.html.twig", "C:\\laragon\\www\\testPrestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Order\\Order\\preview.html.twig");
    }
}
