<?php

/* modular/02videos.html.twig */
class __TwigTemplate_636e8ef991b3bb54c0e693d95091656edace7b970a2df7a101c34bf64f99a9f1 extends Twig_Template
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
            $context["category_index"] = $this->getAttribute($context["loop"], "index", array());
            // line 7
            echo "            ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 0)) {
                // line 8
                echo "              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_slice($this->env, $this->getAttribute($context["item"], "items", array()), 0, 3)));
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
                    // line 9
                    echo "                <div class=\"columns videos-item\">
                  <div class=\"item-wrap\">
                    <a href=\"#modal-";
                    // line 11
                    echo ($context["category_index"] ?? null);
                    echo "-";
                    echo (4 - $this->getAttribute($context["loop"], "index", array()));
                    echo "\" title=\"\">
                      ";
                    // line 12
                    echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["item"], "img", array()), array(), "array"), "cropZoom", array(0 => 300, 1 => 300), "method");
                    echo "
                      <div class=\"overlay\">
                        <h1>";
                    // line 14
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</h1>
                        <h2>";
                    // line 15
                    echo $this->getAttribute($context["item"], "description", array());
                    echo "</h2>
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
                // line 21
                echo "              <div class=\"columns videos-item\">
                <div class=\"category-wrap\">
                  ";
                // line 23
                echo $this->getAttribute($context["item"], "title", array());
                echo "
                </div>
              </div>
            ";
            } elseif (($this->getAttribute(            // line 26
$context["loop"], "index", array()) % 2 == 1)) {
                // line 27
                echo "              <div class=\"columns videos-item\">
                <div class=\"category-wrap\">  
                  ";
                // line 29
                echo $this->getAttribute($context["item"], "title", array());
                echo "
                </div>
              </div>
              ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute($context["item"], "items", array()), 0, 3));
                $context['_iterated'] = false;
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
                    // line 33
                    echo "                <div class=\"columns videos-item\">
                  <div class=\"item-wrap\">
                    <a href=\"#modal-";
                    // line 35
                    echo ($context["category_index"] ?? null);
                    echo "-";
                    echo $this->getAttribute($context["loop"], "index", array());
                    echo "\" title=\"\">
                      ";
                    // line 36
                    echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["item"], "img", array()), array(), "array"), "cropZoom", array(0 => 300, 1 => 300), "method");
                    echo "
                      <div class=\"overlay\">
                        <h1>";
                    // line 38
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</h1>
                        <h2>";
                    // line 39
                    echo $this->getAttribute($context["item"], "description", array());
                    echo "</h2>
                      </div>
                    </a>
                  </div>
                </div>
              ";
                    $context['_iterated'] = true;
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                if (!$context['_iterated']) {
                    // line 45
                    echo "                ";
                    echo "Something went wrong";
                    echo "
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
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
        // line 49
        echo "      </div>
    </div>
    ";
        // line 51
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
            // line 52
            echo "      ";
            $context["category_index"] = $this->getAttribute($context["loop"], "index", array());
            // line 53
            echo "      ";
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
                // line 54
                echo "        <div id=\"modal-";
                echo ($context["category_index"] ?? null);
                echo "-";
                echo $this->getAttribute($context["loop"], "index", array());
                echo "\" class=\"videos-popup-modal mfp-hide\">
          ";
                // line 55
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["item"], "img", array()), array(), "array");
                echo "
          <div class=\"description-box\">
            ";
                // line 57
                echo $this->getAttribute($context["item"], "title", array());
                echo "
          </div>

          ";
                // line 66
                echo "
          <div class=\"two columns\">
            <div id=\"link-wrapper\" class=\"bgrid-halves s-bgrid-halves cf\">
              <div class=\"columns link-play\">
                <a href=\"";
                // line 70
                echo $this->getAttribute($context["item"], "title", array());
                echo "\">play</a>
              </div>
              <div class=\"columnslink-close\">
                <a class=\"popup-modal-dismiss\">close</a>
              </div>
            </div>
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
            // line 80
            echo "    ";
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
        // line 81
        echo "  </div>
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
        return array (  313 => 81,  299 => 80,  275 => 70,  269 => 66,  263 => 57,  258 => 55,  251 => 54,  233 => 53,  230 => 52,  213 => 51,  209 => 49,  192 => 47,  183 => 45,  164 => 39,  160 => 38,  155 => 36,  149 => 35,  145 => 33,  127 => 32,  121 => 29,  117 => 27,  115 => 26,  109 => 23,  105 => 21,  85 => 15,  81 => 14,  76 => 12,  70 => 11,  66 => 9,  48 => 8,  45 => 7,  42 => 6,  25 => 5,  19 => 1,);
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
            {% set category_index = loop.index %}
            {% if loop.index is even %}
              {% for item in item.items|slice(0,3)|reverse %}
                <div class=\"columns videos-item\">
                  <div class=\"item-wrap\">
                    <a href=\"#modal-{{ category_index }}-{{ (4 - loop.index) }}\" title=\"\">
                      {{ page.media[item.img].cropZoom(300,300) }}
                      <div class=\"overlay\">
                        <h1>{{ item.title }}</h1>
                        <h2>{{ item.description }}</h2>
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
            {% elseif loop.index is odd %}
              <div class=\"columns videos-item\">
                <div class=\"category-wrap\">  
                  {{ item.title }}
                </div>
              </div>
              {% for item in item.items|slice(0,3) %}
                <div class=\"columns videos-item\">
                  <div class=\"item-wrap\">
                    <a href=\"#modal-{{ category_index }}-{{ loop.index }}\" title=\"\">
                      {{ page.media[item.img].cropZoom(300,300) }}
                      <div class=\"overlay\">
                        <h1>{{ item.title }}</h1>
                        <h2>{{ item.description }}</h2>
                      </div>
                    </a>
                  </div>
                </div>
              {% else %}
                {{ \"Something went wrong\" }}
              {% endfor %}
            {% endif %} 
          {% endfor %}
      </div>
    </div>
    {% for item in page.header.videos %}
      {% set category_index = loop.index %}
      {% for item in item.items %}
        <div id=\"modal-{{ category_index }}-{{ loop.index }}\" class=\"videos-popup-modal mfp-hide\">
          {{ page.media[item.img] }}
          <div class=\"description-box\">
            {{ item.title }}
          </div>

          {#
          <div class=\"link-box\">
            <a href=\"{{ item.title }}\">play</a>
            <a class=\"popup-modal-dismiss\">close</a>
          </div>
          #}

          <div class=\"two columns\">
            <div id=\"link-wrapper\" class=\"bgrid-halves s-bgrid-halves cf\">
              <div class=\"columns link-play\">
                <a href=\"{{ item.title }}\">play</a>
              </div>
              <div class=\"columnslink-close\">
                <a class=\"popup-modal-dismiss\">close</a>
              </div>
            </div>
          </div>

        </div>
      {% endfor %}
    {% endfor %}
  </div>
</section>







", "modular/02videos.html.twig", "/home/riedbergtv/www.riedberg.tv/grav/user/themes/ceevee/templates/modular/02videos.html.twig");
    }
}
