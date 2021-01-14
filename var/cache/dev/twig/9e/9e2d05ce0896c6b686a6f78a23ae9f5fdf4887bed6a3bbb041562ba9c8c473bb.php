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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/customer.html.twig */
class __TwigTemplate_7b8262f3af0a341b9089f110ae7aa249bdcb02f2236ea2895d61274751c23123 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/customer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/customer.html.twig"));

        // line 25
        echo "
<div class=\"customer card\">
  <div class=\"card-header\">
    <h3 class=\"card-header-title\">
      ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer", [], "Admin.Global"), "html", null, true);
        echo "
    </h3>
  </div>

  <div class=\"card-body\">
    <div class=\"info-block\">
      <div class=\"row\">
        ";
        // line 36
        if ( !(null === $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []))) {
            // line 37
            echo "        <div class=\"col-md-6\">
          <h2 class=\"mb-0\">
            <i class=\"material-icons\">account_box</i>

            ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "gender", []), "html", null, true);
            echo "
            ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "firstName", []), "html", null, true);
            echo "
            ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "lastName", []), "html", null, true);
            echo "

            <strong class=\"text-muted ml-2\">#";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "id", []), "html", null, true);
            echo "</strong>
          </h2>
          ";
            // line 47
            if ($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "isGuest", [])) {
                // line 48
                echo "            <strong class=\"text-muted\">Guest</strong>
          ";
            }
            // line 50
            echo "        </div>
        <div class=\"col-md-6 text-right\">
          <a class=\"d-print-none\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_customers_view", ["customerId" => $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "id", [])]), "html", null, true);
            echo "\">
            ";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View full details", [], "Admin.Actions"), "html", null, true);
            echo "
          </a>
        </div>
        ";
        } else {
            // line 57
            echo "        <div class=\"col\">
          <h2 class=\"mb-0\">";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deleted customer", [], "Admin.Global"), "html", null, true);
            echo "</h2>
        </div>
        ";
        }
        // line 61
        echo "      </div>
    </div>
    ";
        // line 63
        if ( !(null === $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []))) {
            // line 64
            echo "    <div class=\"row mt-3\">
      <div class=\"col-md-6\">
        <p class=\"mb-1\">
          <strong>";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email:", [], "Admin.Global"), "html", null, true);
            echo "</strong>
        </p>
        <p>
          <a href=\"mailto:";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "email", []), "html", null, true);
            echo "\">
            ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "email", []), "html", null, true);
            echo "
          </a>
        </p>

        ";
            // line 75
            if (($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "isGuest", []) === false)) {
                // line 76
                echo "          <p class=\"mb-1\">
            <strong>";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Account registered:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "</strong>
          </p>
          <p>";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\Extension\LocalizationExtension')->dateFormatFull($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "accountRegistrationDate", [])), "html", null, true);
                echo "</p>
        ";
            }
            // line 81
            echo "      </div>
      <div class=\"col-md-6\">
        <p class=\"mb-1\">
          <strong>";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Validated orders placed:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</strong>
        </p>
        <p>
          <span class=\"badge rounded badge-dark\">";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "validOrdersPlaced", []), "html", null, true);
            echo "</span>
        </p>

        ";
            // line 90
            if (($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "isGuest", []) === false)) {
                // line 91
                echo "          <p class=\"mb-1\">
            <strong>";
                // line 92
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total spent since registration:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "</strong>
          </p>
          <p>
            <span class=\"badge rounded badge-dark\">";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "totalSpentSinceRegistration", []), "html", null, true);
                echo "</span>
          </p>
        ";
            }
            // line 98
            echo "      </div>
    </div>
    ";
        }
        // line 101
        echo "    <div class=\"info-block mt-2\">
      <div class=\"row\">
        ";
        // line 103
        if (($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "virtual", []) === false)) {
            // line 104
            echo "        <div id=\"addressShipping\" class=\"info-block-col col-xl-6\">
          <div class=\"row justify-content-between no-gutters\">
            <strong>";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shipping address", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</strong>
            ";
            // line 107
            if ( !(null === $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []))) {
                // line 108
                echo "            <a class=\"tooltip-link d-print-none\" href=\"#\" data-toggle=\"dropdown\">
              <i class=\"material-icons\">more_vert</i>
            </a>

            <div class=\"dropdown-menu dropdown-menu-right\">
              <a class=\"dropdown-item\" id=\"js-delivery-address-edit-btn\"
                 href=\"";
                // line 114
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_addresses_edit", ["orderId" => $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "id", []), "addressType" => "delivery", "liteDisplaying" => 1, "submitFormAjax" => 1]), "html", null, true);
                echo "\"
              >
                ";
                // line 116
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit existing address", [], "Admin.Actions"), "html", null, true);
                echo "
              </a>

              <a href=\"#\"
                class=\"dropdown-item js-update-customer-address-modal-btn\"
                data-toggle=\"modal\"
                data-target=\"#updateCustomerAddressModal\"
                data-address-type=\"shipping\"
              >
                ";
                // line 125
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select another address", [], "Admin.Actions"), "html", null, true);
                echo "
              </a>
            </div>
            ";
            }
            // line 129
            echo "          </div>

          <p class=\"mb-0\">";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "shippingAddress", []), "fullName", []), "html", null, true);
            echo "</p>
          ";
            // line 132
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "shippingAddress", []), "companyName", []))) {
                // line 133
                echo "            <p class=\"mb-0\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "shippingAddress", []), "companyName", []), "html", null, true);
                echo "</p>
          ";
            }
            // line 135
            echo "          <p class=\"mb-0\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "shippingAddress", []), "address1", []), "html", null, true);
            echo "</p>
          ";
            // line 136
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "shippingAddress", []), "address2", []))) {
                // line 137
                echo "            <p class=\"mb-0\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "shippingAddress", []), "address2", []), "html", null, true);
                echo "</p>
          ";
            }
            // line 139
            echo "          <p class=\"mb-0\">
            ";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "shippingAddress", []), "cityName", []), "html", null, true);
            echo ",
            ";
            // line 141
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "shippingAddress", []), "stateName", []))) {
                // line 142
                echo "              ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "shippingAddress", []), "stateName", []), "html", null, true);
                echo "
            ";
            }
            // line 144
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "shippingAddress", []), "postCode", []), "html", null, true);
            echo "
          </p>
          <p class=\"mb-0\">";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "shippingAddress", []), "countryName", []), "html", null, true);
            echo "</p>
          <p>
            ";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "shippingAddress", []), "phoneNumber", []), "html", null, true);
            echo "
            ";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "shippingAddress", []), "mobilePhoneNumber", []), "html", null, true);
            echo "
          </p>
        </div>
        ";
        }
        // line 153
        echo "        <div id=\"addressInvoice\" class=\"info-block-col ";
        if ($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "virtual", [])) {
            echo "col-md-12";
        } else {
            echo "col-md-6";
        }
        echo "\">
          <div class=\"row justify-content-between no-gutters\">
            <strong>";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice address", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</strong>

            ";
        // line 157
        if ( !(null === $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []))) {
            // line 158
            echo "            <a class=\"tooltip-link d-print-none\" href=\"#\" data-toggle=\"dropdown\">
              <i class=\"material-icons\">more_vert</i>
            </a>

            <div class=\"dropdown-menu dropdown-menu-right\">
              <a class=\"dropdown-item\" id=\"js-invoice-address-edit-btn\"
                 href=\"";
            // line 164
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_addresses_edit", ["orderId" => $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "id", []), "addressType" => "invoice", "liteDisplaying" => 1, "submitFormAjax" => 1]), "html", null, true);
            echo "\"
              >
                ";
            // line 166
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit existing address", [], "Admin.Actions"), "html", null, true);
            echo "
              </a>

              <a href=\"#\"
                class=\"dropdown-item js-update-customer-address-modal-btn\"
                data-toggle=\"modal\"
                data-target=\"#updateCustomerAddressModal\"
                data-address-type=\"invoice\"
              >
                ";
            // line 175
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select another address", [], "Admin.Actions"), "html", null, true);
            echo "
              </a>
            </div>
            ";
        }
        // line 179
        echo "          </div>

          <p class=\"mb-0\">";
        // line 181
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "invoiceAddress", []), "fullName", []), "html", null, true);
        echo "</p>
          ";
        // line 182
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "invoiceAddress", []), "companyName", []))) {
            // line 183
            echo "            <p class=\"mb-0\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "invoiceAddress", []), "companyName", []), "html", null, true);
            echo "</p>
          ";
        }
        // line 185
        echo "          <p class=\"mb-0\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "invoiceAddress", []), "address1", []), "html", null, true);
        echo "</p>
          ";
        // line 186
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "invoiceAddress", []), "address2", []))) {
            // line 187
            echo "            <p class=\"mb-0\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "invoiceAddress", []), "address2", []), "html", null, true);
            echo "</p>
          ";
        }
        // line 189
        echo "          <p class=\"mb-0\">
            ";
        // line 190
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "invoiceAddress", []), "cityName", []), "html", null, true);
        echo ",
            ";
        // line 191
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "invoiceAddress", []), "stateName", []))) {
            // line 192
            echo "              ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "invoiceAddress", []), "stateName", []), "html", null, true);
            echo "
            ";
        }
        // line 194
        echo "            ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "invoiceAddress", []), "postCode", []), "html", null, true);
        echo "
          </p>
          <p class=\"mb-0\">";
        // line 196
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "invoiceAddress", []), "countryName", []), "html", null, true);
        echo "</p>
          <p>
            ";
        // line 198
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "invoiceAddress", []), "phoneNumber", []), "html", null, true);
        echo "
            ";
        // line 199
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "invoiceAddress", []), "mobilePhoneNumber", []), "html", null, true);
        echo "
          </p>
        </div>
      </div>
    </div>
    ";
        // line 204
        if ( !(null === $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []))) {
            // line 205
            echo "    <div class=\"mt-2 info-block\">
      <div class=\"row\">
        ";
            // line 207
            $context["isPrivateNoteOpen"] =  !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "privateNote", []));
            // line 208
            echo "
        <div class=\"col-md-6\">
          <h3 class=\"mb-0";
            // line 210
            echo (( !($context["isPrivateNoteOpen"] ?? $this->getContext($context, "isPrivateNoteOpen"))) ? (" d-print-none") : (""));
            echo "\">
            ";
            // line 211
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Private note", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
          </h3>
        </div>
        <div class=\"col-md-6 text-right d-print-none\">
          <a href=\"#\"
             class=\"float-right tooltip-link js-private-note-toggle-btn ";
            // line 216
            if (($context["isPrivateNoteOpen"] ?? $this->getContext($context, "isPrivateNoteOpen"))) {
                echo "is-opened";
            }
            echo "\"
          >
            ";
            // line 218
            if (($context["isPrivateNoteOpen"] ?? $this->getContext($context, "isPrivateNoteOpen"))) {
                // line 219
                echo "              <i class=\"material-icons\">remove</i>
            ";
            } else {
                // line 221
                echo "              <i class=\"material-icons\">add</i>
            ";
            }
            // line 223
            echo "          </a>
        </div>

        <div class=\"col-md-12 mt-3 js-private-note-block ";
            // line 226
            if ( !($context["isPrivateNoteOpen"] ?? $this->getContext($context, "isPrivateNoteOpen"))) {
                echo "d-none";
            }
            echo "\">
          ";
            // line 227
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["privateNoteForm"] ?? $this->getContext($context, "privateNoteForm")), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_customers_set_private_note", ["customerId" => $this->getAttribute($this->getAttribute(            // line 229
($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "id", []), "back" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_view", ["orderId" => $this->getAttribute(            // line 230
($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "id", [])])])]);
            // line 232
            echo "

          ";
            // line 234
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["privateNoteForm"] ?? $this->getContext($context, "privateNoteForm")), "note", []), 'widget');
            echo "
            <div class=\"d-none\">
              ";
            // line 236
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["privateNoteForm"] ?? $this->getContext($context, "privateNoteForm")), 'rest');
            echo "
            </div>

            <div class=\"mt-2 text-right\">
              <button type=\"submit\"
                      class=\"btn btn-primary btn-sm js-private-note-btn\"
                      ";
            // line 242
            if (twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "privateNote", []))) {
                echo "disabled";
            }
            // line 243
            echo "              >
                ";
            // line 244
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
            echo "
              </button>
            </div>
          ";
            // line 247
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["privateNoteForm"] ?? $this->getContext($context, "privateNoteForm")), 'form_end');
            echo "
        </div>
      </div>
    </div>
    ";
        }
        // line 252
        echo "  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/customer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  515 => 252,  507 => 247,  501 => 244,  498 => 243,  494 => 242,  485 => 236,  480 => 234,  476 => 232,  474 => 230,  473 => 229,  472 => 227,  466 => 226,  461 => 223,  457 => 221,  453 => 219,  451 => 218,  444 => 216,  436 => 211,  432 => 210,  428 => 208,  426 => 207,  422 => 205,  420 => 204,  412 => 199,  408 => 198,  403 => 196,  397 => 194,  391 => 192,  389 => 191,  385 => 190,  382 => 189,  376 => 187,  374 => 186,  369 => 185,  363 => 183,  361 => 182,  357 => 181,  353 => 179,  346 => 175,  334 => 166,  329 => 164,  321 => 158,  319 => 157,  314 => 155,  304 => 153,  297 => 149,  293 => 148,  288 => 146,  282 => 144,  276 => 142,  274 => 141,  270 => 140,  267 => 139,  261 => 137,  259 => 136,  254 => 135,  248 => 133,  246 => 132,  242 => 131,  238 => 129,  231 => 125,  219 => 116,  214 => 114,  206 => 108,  204 => 107,  200 => 106,  196 => 104,  194 => 103,  190 => 101,  185 => 98,  179 => 95,  173 => 92,  170 => 91,  168 => 90,  162 => 87,  156 => 84,  151 => 81,  146 => 79,  141 => 77,  138 => 76,  136 => 75,  129 => 71,  125 => 70,  119 => 67,  114 => 64,  112 => 63,  108 => 61,  102 => 58,  99 => 57,  92 => 53,  88 => 52,  84 => 50,  80 => 48,  78 => 47,  73 => 45,  68 => 43,  64 => 42,  60 => 41,  54 => 37,  52 => 36,  42 => 29,  36 => 25,);
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

<div class=\"customer card\">
  <div class=\"card-header\">
    <h3 class=\"card-header-title\">
      {{ 'Customer'|trans({}, 'Admin.Global') }}
    </h3>
  </div>

  <div class=\"card-body\">
    <div class=\"info-block\">
      <div class=\"row\">
        {% if orderForViewing.customer is not null %}
        <div class=\"col-md-6\">
          <h2 class=\"mb-0\">
            <i class=\"material-icons\">account_box</i>

            {{ orderForViewing.customer.gender }}
            {{ orderForViewing.customer.firstName }}
            {{ orderForViewing.customer.lastName }}

            <strong class=\"text-muted ml-2\">#{{ orderForViewing.customer.id }}</strong>
          </h2>
          {%  if orderForViewing.customer.isGuest %}
            <strong class=\"text-muted\">Guest</strong>
          {% endif %}
        </div>
        <div class=\"col-md-6 text-right\">
          <a class=\"d-print-none\" href=\"{{ path('admin_customers_view', {'customerId': orderForViewing.customer.id }) }}\">
            {{ 'View full details'|trans({}, 'Admin.Actions') }}
          </a>
        </div>
        {% else %}
        <div class=\"col\">
          <h2 class=\"mb-0\">{{ 'Deleted customer'|trans({}, 'Admin.Global') }}</h2>
        </div>
        {% endif %}
      </div>
    </div>
    {% if orderForViewing.customer is not null %}
    <div class=\"row mt-3\">
      <div class=\"col-md-6\">
        <p class=\"mb-1\">
          <strong>{{ 'Email:'|trans({}, 'Admin.Global') }}</strong>
        </p>
        <p>
          <a href=\"mailto:{{ orderForViewing.customer.email }}\">
            {{ orderForViewing.customer.email }}
          </a>
        </p>

        {%  if orderForViewing.customer.isGuest is same as(false) %}
          <p class=\"mb-1\">
            <strong>{{ 'Account registered:'|trans({}, 'Admin.Orderscustomers.Feature') }}</strong>
          </p>
          <p>{{ orderForViewing.customer.accountRegistrationDate|date_format_full }}</p>
        {% endif %}
      </div>
      <div class=\"col-md-6\">
        <p class=\"mb-1\">
          <strong>{{ 'Validated orders placed:'|trans({}, 'Admin.Orderscustomers.Feature') }}</strong>
        </p>
        <p>
          <span class=\"badge rounded badge-dark\">{{ orderForViewing.customer.validOrdersPlaced }}</span>
        </p>

        {%  if orderForViewing.customer.isGuest is same as(false) %}
          <p class=\"mb-1\">
            <strong>{{ 'Total spent since registration:'|trans({}, 'Admin.Orderscustomers.Feature') }}</strong>
          </p>
          <p>
            <span class=\"badge rounded badge-dark\">{{ orderForViewing.customer.totalSpentSinceRegistration }}</span>
          </p>
        {% endif %}
      </div>
    </div>
    {% endif %}
    <div class=\"info-block mt-2\">
      <div class=\"row\">
        {% if orderForViewing.virtual is same as(false) %}
        <div id=\"addressShipping\" class=\"info-block-col col-xl-6\">
          <div class=\"row justify-content-between no-gutters\">
            <strong>{{ 'Shipping address'|trans({}, 'Admin.Orderscustomers.Feature') }}</strong>
            {% if orderForViewing.customer is not null %}
            <a class=\"tooltip-link d-print-none\" href=\"#\" data-toggle=\"dropdown\">
              <i class=\"material-icons\">more_vert</i>
            </a>

            <div class=\"dropdown-menu dropdown-menu-right\">
              <a class=\"dropdown-item\" id=\"js-delivery-address-edit-btn\"
                 href=\"{{ path('admin_order_addresses_edit', {'orderId': orderForViewing.id, 'addressType': 'delivery', 'liteDisplaying': 1, 'submitFormAjax': 1}) }}\"
              >
                {{ 'Edit existing address'|trans({}, 'Admin.Actions') }}
              </a>

              <a href=\"#\"
                class=\"dropdown-item js-update-customer-address-modal-btn\"
                data-toggle=\"modal\"
                data-target=\"#updateCustomerAddressModal\"
                data-address-type=\"shipping\"
              >
                {{ 'Select another address'|trans({}, 'Admin.Actions') }}
              </a>
            </div>
            {% endif %}
          </div>

          <p class=\"mb-0\">{{ orderForViewing.shippingAddress.fullName }}</p>
          {% if orderForViewing.shippingAddress.companyName is not empty %}
            <p class=\"mb-0\">{{ orderForViewing.shippingAddress.companyName }}</p>
          {% endif %}
          <p class=\"mb-0\">{{ orderForViewing.shippingAddress.address1 }}</p>
          {% if orderForViewing.shippingAddress.address2 is not empty %}
            <p class=\"mb-0\">{{ orderForViewing.shippingAddress.address2 }}</p>
          {% endif %}
          <p class=\"mb-0\">
            {{ orderForViewing.shippingAddress.cityName }},
            {% if orderForViewing.shippingAddress.stateName is not empty %}
              {{ orderForViewing.shippingAddress.stateName }}
            {% endif %}
            {{ orderForViewing.shippingAddress.postCode }}
          </p>
          <p class=\"mb-0\">{{ orderForViewing.shippingAddress.countryName }}</p>
          <p>
            {{ orderForViewing.shippingAddress.phoneNumber }}
            {{ orderForViewing.shippingAddress.mobilePhoneNumber }}
          </p>
        </div>
        {% endif %}
        <div id=\"addressInvoice\" class=\"info-block-col {% if orderForViewing.virtual %}col-md-12{% else %}col-md-6{% endif %}\">
          <div class=\"row justify-content-between no-gutters\">
            <strong>{{ 'Invoice address'|trans({}, 'Admin.Orderscustomers.Feature') }}</strong>

            {% if orderForViewing.customer is not null %}
            <a class=\"tooltip-link d-print-none\" href=\"#\" data-toggle=\"dropdown\">
              <i class=\"material-icons\">more_vert</i>
            </a>

            <div class=\"dropdown-menu dropdown-menu-right\">
              <a class=\"dropdown-item\" id=\"js-invoice-address-edit-btn\"
                 href=\"{{ path('admin_order_addresses_edit', {'orderId': orderForViewing.id, 'addressType': 'invoice', 'liteDisplaying': 1, 'submitFormAjax': 1}) }}\"
              >
                {{ 'Edit existing address'|trans({}, 'Admin.Actions') }}
              </a>

              <a href=\"#\"
                class=\"dropdown-item js-update-customer-address-modal-btn\"
                data-toggle=\"modal\"
                data-target=\"#updateCustomerAddressModal\"
                data-address-type=\"invoice\"
              >
                {{ 'Select another address'|trans({}, 'Admin.Actions') }}
              </a>
            </div>
            {% endif %}
          </div>

          <p class=\"mb-0\">{{ orderForViewing.invoiceAddress.fullName }}</p>
          {% if orderForViewing.invoiceAddress.companyName is not empty %}
            <p class=\"mb-0\">{{ orderForViewing.invoiceAddress.companyName }}</p>
          {% endif %}
          <p class=\"mb-0\">{{ orderForViewing.invoiceAddress.address1 }}</p>
          {% if orderForViewing.invoiceAddress.address2 is not empty %}
            <p class=\"mb-0\">{{ orderForViewing.invoiceAddress.address2 }}</p>
          {% endif %}
          <p class=\"mb-0\">
            {{ orderForViewing.invoiceAddress.cityName }},
            {% if orderForViewing.invoiceAddress.stateName is not empty %}
              {{ orderForViewing.invoiceAddress.stateName }}
            {% endif %}
            {{ orderForViewing.invoiceAddress.postCode }}
          </p>
          <p class=\"mb-0\">{{ orderForViewing.invoiceAddress.countryName }}</p>
          <p>
            {{ orderForViewing.invoiceAddress.phoneNumber }}
            {{ orderForViewing.invoiceAddress.mobilePhoneNumber }}
          </p>
        </div>
      </div>
    </div>
    {% if orderForViewing.customer is not null %}
    <div class=\"mt-2 info-block\">
      <div class=\"row\">
        {% set isPrivateNoteOpen = not orderForViewing.customer.privateNote is empty %}

        <div class=\"col-md-6\">
          <h3 class=\"mb-0{{ not isPrivateNoteOpen ? ' d-print-none': '' }}\">
            {{ 'Private note'|trans({}, 'Admin.Orderscustomers.Feature') }}
          </h3>
        </div>
        <div class=\"col-md-6 text-right d-print-none\">
          <a href=\"#\"
             class=\"float-right tooltip-link js-private-note-toggle-btn {% if isPrivateNoteOpen %}is-opened{% endif %}\"
          >
            {% if isPrivateNoteOpen %}
              <i class=\"material-icons\">remove</i>
            {% else %}
              <i class=\"material-icons\">add</i>
            {% endif %}
          </a>
        </div>

        <div class=\"col-md-12 mt-3 js-private-note-block {% if not isPrivateNoteOpen %}d-none{% endif %}\">
          {{ form_start(privateNoteForm, {
            'action': path('admin_customers_set_private_note', {
              'customerId': orderForViewing.customer.id,
              'back': path('admin_orders_view', {'orderId': orderForViewing.id})
            })
          }) }}

          {{ form_widget(privateNoteForm.note) }}
            <div class=\"d-none\">
              {{ form_rest(privateNoteForm) }}
            </div>

            <div class=\"mt-2 text-right\">
              <button type=\"submit\"
                      class=\"btn btn-primary btn-sm js-private-note-btn\"
                      {% if orderForViewing.customer.privateNote is empty %}disabled{% endif %}
              >
                {{ 'Save'|trans({}, 'Admin.Actions') }}
              </button>
            </div>
          {{ form_end(privateNoteForm) }}
        </div>
      </div>
    </div>
    {% endif %}
  </div>
</div>
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/customer.html.twig", "C:\\laragon\\www\\testPrestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Order\\Order\\Blocks\\View\\customer.html.twig");
    }
}
