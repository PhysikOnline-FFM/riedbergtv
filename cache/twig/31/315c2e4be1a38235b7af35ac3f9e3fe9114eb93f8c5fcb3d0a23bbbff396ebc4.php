<?php

/* partials/header.html.twig */
class __TwigTemplate_e1c22bbbeffe0e9a36e8d244d51e884b79fb0d6daaec108461b0e455bd96baee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navigation' => array($this, 'block_navigation'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<header id=\"home\">
  ";
        // line 2
        $this->displayBlock('navigation', $context, $blocks);
        // line 5
        echo "</header>
";
    }

    // line 2
    public function block_navigation($context, array $blocks = array())
    {
        // line 3
        echo "  ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/header.html.twig", 3)->display($context);
        // line 4
        echo "  ";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  36 => 4,  33 => 3,  30 => 2,  25 => 5,  23 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header id=\"home\">
  {% block navigation %}
  {% include 'partials/navigation.html.twig' %}
  {% endblock %}
</header>
", "partials/header.html.twig", "/home/riedbergtv/www.riedberg.tv/grav/user/themes/ceevee/templates/partials/header.html.twig");
    }
}
