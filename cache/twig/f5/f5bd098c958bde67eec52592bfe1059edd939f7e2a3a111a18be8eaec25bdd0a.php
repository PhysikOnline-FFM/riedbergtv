<?php

/* modular/02videos.html.twig */
class __TwigTemplate_f1362b6c0fc7fa32f66414c84f2a5cc4bab67995e625f5c3499d8b65349215f5 extends Twig_Template
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
        echo "<section id=\"videos\">
  <div class=\"row\">
    <div class=\"twelve columns collapsed\">
      <div id=\"videos-wrapper\" class=\"bgrid-quaters s-bgrid-thirds cf\">
          ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "videos", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "            ";
            if ((($this->getAttribute($context["loop"], "index", array()) % 2) == 0)) {
                // line 7
                echo "              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "items", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 8
                    echo "                <div class=\"columns videos-item\">
                  <div class=\"item-wrap\">
                    <a href=\"#modal-";
                    // line 10
                    echo $this->getAttribute($context["loop"], "index", array());
                    echo "\" title=\"\">
                      ";
                    // line 11
                    echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["item"], "img", array()), array(), "array"), "cropZoom", array(0 => 300, 1 => 300), "method");
                    echo "
                      <div class=\"overlay\">
                        <h5>";
                    // line 13
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</h5>
                        <p>";
                    // line 14
                    echo $this->getAttribute($context["item"], "description", array());
                    echo "</p>
                      </div>
                    </a>
                  </div>
                </div>
              ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "              <div class=\"columns videos-item\">
                <div class=\"category-wrap\">
                  ";
                // line 22
                echo $this->getAttribute($context["item"], "title", array());
                echo "
                </div>
              </div>
            ";
            } else {
                // line 26
                echo "              <div class=\"columns videos-item\">
                <div class=\"category-wrap\">  
                  ";
                // line 28
                echo $this->getAttribute($context["item"], "title", array());
                echo "
                </div>
              </div>
              ";
                // line 31
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "items", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 32
                    echo "                <div class=\"columns videos-item\">
                  <div class=\"item-wrap\">
                    <a href=\"#modal-";
                    // line 34
                    echo $this->getAttribute($context["loop"], "index", array());
                    echo "\" title=\"\">
                      ";
                    // line 35
                    echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["item"], "img", array()), array(), "array"), "cropZoom", array(0 => 300, 1 => 300), "method");
                    echo "
                      <div class=\"overlay\">
                        <h5>";
                    // line 37
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</h5>
                        <p>";
                    // line 38
                    echo $this->getAttribute($context["item"], "description", array());
                    echo "</p>
                      </div>
                    </a>
                  </div>
                </div>
              ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "            ";
            }
            echo " 
          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "      </div>
    </div>
  </div>
</section>



";
    }

    public function getTemplateName()
    {
        return "modular/02videos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 46,  175 => 44,  155 => 38,  151 => 37,  146 => 35,  142 => 34,  138 => 32,  121 => 31,  115 => 28,  111 => 26,  104 => 22,  100 => 20,  80 => 14,  76 => 13,  71 => 11,  67 => 10,  63 => 8,  45 => 7,  42 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"videos\">
  <div class=\"row\">
    <div class=\"twelve columns collapsed\">
      <div id=\"videos-wrapper\" class=\"bgrid-quaters s-bgrid-thirds cf\">
          {% for item in page.header.videos %}
            {% if (loop.index % 2) == 0 %}
              {% for item in item.items %}
                <div class=\"columns videos-item\">
                  <div class=\"item-wrap\">
                    <a href=\"#modal-{{ loop.index }}\" title=\"\">
                      {{ page.media[item.img].cropZoom(300,300) }}
                      <div class=\"overlay\">
                        <h5>{{ item.title }}</h5>
                        <p>{{ item.description }}</p>
                      </div>
                    </a>
                  </div>
                </div>
              {% endfor %}
              <div class=\"columns videos-item\">
                <div class=\"category-wrap\">
                  {{ item.title }}
                </div>
              </div>
            {% else %}
              <div class=\"columns videos-item\">
                <div class=\"category-wrap\">  
                  {{ item.title }}
                </div>
              </div>
              {% for item in item.items %}
                <div class=\"columns videos-item\">
                  <div class=\"item-wrap\">
                    <a href=\"#modal-{{ loop.index }}\" title=\"\">
                      {{ page.media[item.img].cropZoom(300,300) }}
                      <div class=\"overlay\">
                        <h5>{{ item.title }}</h5>
                        <p>{{ item.description }}</p>
                      </div>
                    </a>
                  </div>
                </div>
              {% endfor %}
            {% endif %} 
          {% endfor %}
      </div>
    </div>
  </div>
</section>



", "modular/02videos.html.twig", "/home/riedbergtv/www.riedberg.tv/grav/user/themes/ceevee/templates/modular/02videos.html.twig");
    }
}
