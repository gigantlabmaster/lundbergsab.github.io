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
        if ((is_string($__internal_9dbd023ef99620233fc13358c72442dd2c14050a8ef24e7e186b61a854ad4ede = (isset($context["php_version"]) ? $context["php_version"] : null)) && is_string($__internal_9ce80ede74e80015027aa262e12acb22310e11a3d12c49ecedb16ab998cb970a = "5.4") && ('' === $__internal_9ce80ede74e80015027aa262e12acb22310e11a3d12c49ecedb16ab998cb970a || 0 === strpos($__internal_9dbd023ef99620233fc13358c72442dd2c14050a8ef24e7e186b61a854ad4ede, $__internal_9ce80ede74e80015027aa262e12acb22310e11a3d12c49ecedb16ab998cb970a)))) {
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
