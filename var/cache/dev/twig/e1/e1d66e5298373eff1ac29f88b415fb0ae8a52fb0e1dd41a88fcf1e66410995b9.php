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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/identifier.html.twig */
class __TwigTemplate_fe659a7c68519b992a9b05a03bbdd327a1e1b7da287c6ef8ad25cd95d13cd0ae extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/identifier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/identifier.html.twig"));

        // line 25
        echo "
";
        // line 26
        if ($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "options", []), "with_bulk_field", [])) {
            // line 27
            echo "  <div class=\"md-checkbox d-inline-block\">
    <label>
      <input type=\"checkbox\"
             title=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "name", []), "html", null, true);
            echo "\"
             class=\"js-bulk-action-checkbox\"
             name=\"";
            // line 32
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "id", []) . "_") . $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "id", [])), "html", null, true);
            echo "[]\"
             value=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? $this->getContext($context, "record")), $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "options", []), "bulk_field", []), [], "array"), "html", null, true);
            echo "\"
      >
      <i class=\"md-checkbox-control\"></i>
    </label>
  </div>
";
        }
        // line 39
        echo "
";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? $this->getContext($context, "record")), $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "options", []), "identifier_field", []), [], "array"), "html", null, true);
        echo "

";
        // line 42
        if ( !(null === $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "options", []), "preview", []))) {
            // line 43
            echo "  ";
            $this->loadTemplate("@PrestaShop/Admin/Common/Grid/Columns/Content/preview.html.twig", "@PrestaShop/Admin/Common/Grid/Columns/Content/identifier.html.twig", 43)->display(twig_array_merge($context, ["column" => $this->getAttribute($this->getAttribute(            // line 44
($context["column"] ?? $this->getContext($context, "column")), "options", []), "preview", []), "record" =>             // line 45
($context["record"] ?? $this->getContext($context, "record"))]));
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/identifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 45,  76 => 44,  74 => 43,  72 => 42,  67 => 40,  64 => 39,  55 => 33,  51 => 32,  46 => 30,  41 => 27,  39 => 26,  36 => 25,);
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

{% if column.options.with_bulk_field %}
  <div class=\"md-checkbox d-inline-block\">
    <label>
      <input type=\"checkbox\"
             title=\"{{ column.name }}\"
             class=\"js-bulk-action-checkbox\"
             name=\"{{ grid.id~'_'~column.id }}[]\"
             value=\"{{ record[column.options.bulk_field] }}\"
      >
      <i class=\"md-checkbox-control\"></i>
    </label>
  </div>
{% endif %}

{{ record[column.options.identifier_field] }}

{% if column.options.preview is not null %}
  {% include '@PrestaShop/Admin/Common/Grid/Columns/Content/preview.html.twig' with {
    'column': column.options.preview,
    'record': record,
  }
  %}
{% endif %}
", "@PrestaShop/Admin/Common/Grid/Columns/Content/identifier.html.twig", "C:\\laragon\\www\\testPrestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Columns\\Content\\identifier.html.twig");
    }
}
