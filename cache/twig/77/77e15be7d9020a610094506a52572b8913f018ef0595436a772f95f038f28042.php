<?php

/* modular/showcase.html.twig */
class __TwigTemplate_17b04b976f5226944d4464923873abb75b512509ef6e23778fc3dc653de89b25 extends Twig_Template
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
        $context["showcase_image"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "grayscale", array(), "method"), "contrast", array(0 => 20), "method"), "brightness", array(0 =>  -125), "method"), "colorize", array(0 =>  -35, 1 => 81, 2 => 122), "method");
        // line 2
        if ((isset($context["showcase_image"]) ? $context["showcase_image"] : null)) {
            // line 3
            echo "\t<div class=\"modular-row showcase flush-top\" style=\"background-image: url(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["showcase_image"]) ? $context["showcase_image"] : null), "url", array()), "html", null, true);
            echo ");\">
";
        } else {
            // line 5
            echo "<div class=\"modular-row showcase\">
";
        }
        // line 7
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "

    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "buttons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 10
            echo "        <a class=\"button";
            if ($this->getAttribute($context["button"], "primary", array())) {
                echo " primary";
            }
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "text", array()), "html", null, true);
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/showcase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 12,  43 => 10,  39 => 9,  33 => 7,  29 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set showcase_image = page.media.images|first.grayscale().contrast(20).brightness(-125).colorize(-35,81,122) %}
{% if showcase_image %}
\t<div class=\"modular-row showcase flush-top\" style=\"background-image: url({{ showcase_image.url }});\">
{% else %}
<div class=\"modular-row showcase\">
{% endif %}
    {{ content|raw }}

    {% for button in page.header.buttons %}
        <a class=\"button{% if button.primary %} primary{% endif %}\" href=\"{{ button.url }}\">{{ button.text }}</a>
    {% endfor %}

</div>
", "modular/showcase.html.twig", "/Users/emilkarlsson/Downloads/grav-skeleton-helium-site 2/user/plugins/gantry5/engines/nucleus/templates/modular/showcase.html.twig");
    }
}
