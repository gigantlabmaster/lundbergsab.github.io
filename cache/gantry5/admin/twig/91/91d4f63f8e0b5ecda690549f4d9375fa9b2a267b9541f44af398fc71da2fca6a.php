<?php

/* @gantry-admin/partials/php_unsupported.html.twig */
class __TwigTemplate_9656064bc015162561584fa79bfd6bce263f5f811f87b123dea7251415736763 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["php_version"] = twig_constant("PHP_VERSION");
        // line 2
        echo "
";
        // line 3
        if ((is_string($__internal_3511d0ad186420ce95ec789c62fb4733a8f83d5a06c2054d8230a9887585fca2 = (isset($context["php_version"]) ? $context["php_version"] : null)) && is_string($__internal_7059412d6357edb6e99e6e2caa3351ec01774edc881d4fdc461e01f5d3111d27 = "5.4") && ('' === $__internal_7059412d6357edb6e99e6e2caa3351ec01774edc881d4fdc461e01f5d3111d27 || 0 === strpos($__internal_3511d0ad186420ce95ec789c62fb4733a8f83d5a06c2054d8230a9887585fca2, $__internal_7059412d6357edb6e99e6e2caa3351ec01774edc881d4fdc461e01f5d3111d27)))) {
            // line 4
            echo "<div class=\"g-grid\">
    <div class=\"g-block alert alert-warning g-php-outdated\">
        ";
            // line 6
            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PHP54_WARNING", (isset($context["php_version"]) ? $context["php_version"] : null));
            echo "
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@gantry-admin/partials/php_unsupported.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/partials/php_unsupported.html.twig", "/Users/emilkarlsson/Code/lundbergsab/user/plugins/gantry5/admin/templates/partials/php_unsupported.html.twig");
    }
}
