<?php

/* modular/07contact.html.twig */
class __TwigTemplate_313b7ba11bbe302da044bd0d742ba0810bcce447867ce596e5f53ca16a00d4f7 extends Twig_Template
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
        echo "<section id=\"07contact\">
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
        return "modular/07contact.html.twig";
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
        return new Twig_Source("<section id=\"07contact\">
  <div class=\"row\">
    {{ page.title }}
  </div>
</section>
", "modular/07contact.html.twig", "/home/riedbergtv/www.riedberg.tv/grav/user/themes/ceevee/templates/modular/07contact.html.twig");
    }
}
