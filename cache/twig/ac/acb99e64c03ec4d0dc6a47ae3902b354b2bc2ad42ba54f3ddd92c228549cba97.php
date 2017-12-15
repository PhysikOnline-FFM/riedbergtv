<?php

/* modular/05join.html.twig */
class __TwigTemplate_289ffbead45e75acefd3e008747d0f9bb3c597587754c75c2f73d8fc1d13221d extends Twig_Template
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
        echo "<section id=\"05join\">
  <div class=\"row\">
    ";
        // line 3
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "
  </div>
</Section>

";
    }

    public function getTemplateName()
    {
        return "modular/05join.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"05join\">
  <div class=\"row\">
    {{ page.title }}
  </div>
</Section>

", "modular/05join.html.twig", "/home/riedbergtv/www.riedberg.tv/grav/user/themes/ceevee/templates/modular/05join.html.twig");
    }
}
