<?php

/* @Page:/Users/emilkarlsson/Downloads/grav-skeleton-helium-site 2/user/plugins/error/pages */
class __TwigTemplate_280bd7125b75de9f9688dc10fc14b23a600355f8e7b70ee751640333e524428d extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_ERROR.ERROR_MESSAGE"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/emilkarlsson/Downloads/grav-skeleton-helium-site 2/user/plugins/error/pages";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ 'PLUGIN_ERROR.ERROR_MESSAGE'|t }}

", "@Page:/Users/emilkarlsson/Downloads/grav-skeleton-helium-site 2/user/plugins/error/pages", "");
    }
}
