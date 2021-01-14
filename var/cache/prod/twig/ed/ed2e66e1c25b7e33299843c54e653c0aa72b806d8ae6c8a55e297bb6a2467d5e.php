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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/Create/cart_rules.html.twig */
class __TwigTemplate_a8dffecfabe1a7e27f4c308e749951d625493e2f47db6cd10eb74b5f84e214f5 extends \Twig\Template
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
        // line 25
        echo "
<div class=\"card d-none\" id=\"cart-rules-block\">
  <h3 class=\"card-header\">
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Vouchers", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"row\">
      <div class=\"col-3\">
        <span class=\"float-right\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search for a voucher", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</span>
      </div>
      <div class=\"col-4\" id=\"cart-rules-search-block\">
        <div class=\"col p-0\">
          <input type=\"text\" class=\"form-control\" id=\"search-cart-rules-input\">
          <ul id=\"search-cart-rules-result-box\" class=\"position-absolute bg-white w-100 form-control d-none list-unstyled\"></ul>
          <div class=\"text-danger align-top d-none\" id=\"js-cart-rule-error-block\">
            <i class=\"material-icons form-error-icon\">error_outline</i>
            <span id=\"js-cart-rule-error-text\"></span>
          </div>
        </div>
      </div>
      <div class=\"col\">
        <span class=\"mr-2\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("or", [], "Admin.Global"), "html", null, true);
        echo "</span>
        <a
          class=\"btn btn-primary\"
          id=\"js-add-cart-rule-btn\"
          href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminCartRules", true, ["liteDisplaying" => 1, "submitFormAjax" => 1, "addcart_rule" => 1]), "html", null, true);
        echo "\"
        >
          ";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new voucher", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
        </a>
      </div>
    </div>

    <table class=\"table d-none mt-2\" id=\"cart-rules-table\">
      <thead>
      <tr>
        <th>";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "Admin.Global"), "html", null, true);
        echo "</th>
        <th>";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description", [], "Admin.Global"), "html", null, true);
        echo "</th>
        <th>";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Value", [], "Admin.Global"), "html", null, true);
        echo "</th>
        <th></th>
      </tr>
      </thead>
      <tbody></tbody>
    </table>
  </div>
</div>

<script id=\"cart-rules-table-row-template\" type=\"text/template\">
  <tr>
    <td class=\"js-cart-rule-name\"></td>
    <td class=\"js-cart-rule-description\"></td>
    <td class=\"js-cart-rule-value\"></td>
    <td class=\"text-right\">
      <button class=\"btn btn-outline-danger js-cart-rule-delete-btn\">";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Remove", [], "Admin.Global"), "html", null, true);
        echo "</button>
    </td>
  </tr>
</script>

<script id=\"cart-rules-not-found-template\" type=\"text/template\">
  <li>";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No voucher was found", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</li>
</script>

<script id=\"found-cart-rule-template\" type=\"text/template\">
  <li data-cart-rule-id=\"\" class=\"js-found-cart-rule found-cart-rule\"></li>
</script>

";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/cart_rules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 83,  108 => 77,  90 => 62,  86 => 61,  82 => 60,  71 => 52,  66 => 50,  59 => 46,  43 => 33,  35 => 28,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/cart_rules.html.twig", "C:\\laragon\\www\\testPrestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Order\\Order\\Blocks\\Create\\cart_rules.html.twig");
    }
}
