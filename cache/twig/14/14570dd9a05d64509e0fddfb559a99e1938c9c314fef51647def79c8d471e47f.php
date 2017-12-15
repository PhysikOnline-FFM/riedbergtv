<?php

/* modular/04schwifty.html.twig */
class __TwigTemplate_659d4f7658e5465add20eb6a47a2977819b5dc989601897ac73fa21317b1a931 extends Twig_Template
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
        echo "<section id=\"04schwifty\">
  <div class=\"row\">
    ";
        // line 3
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/04schwifty.html.twig";
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
        return new Twig_Source("<section id=\"04schwifty\">
  <div class=\"row\">
    {{ page.title }}
  </div>
</section>
", "modular/04schwifty.html.twig", "/home/riedbergtv/www.riedberg.tv/grav/user/themes/ceevee/templates/modular/04schwifty.html.twig");
    }
}
