<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_82e7300e663589a5b49557abd3ddbe9c797553d298f77d72c046112d1fb25667 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\"/>
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 73,  160 => 59,  204 => 71,  188 => 67,  185 => 68,  174 => 67,  167 => 64,  164 => 63,  356 => 163,  347 => 160,  343 => 159,  335 => 157,  333 => 156,  325 => 150,  323 => 149,  316 => 145,  309 => 141,  302 => 137,  295 => 133,  288 => 129,  281 => 125,  274 => 121,  259 => 109,  252 => 105,  245 => 101,  238 => 97,  217 => 83,  214 => 82,  211 => 81,  206 => 78,  203 => 77,  192 => 72,  182 => 64,  158 => 56,  148 => 58,  140 => 49,  113 => 40,  69 => 20,  134 => 54,  110 => 42,  86 => 29,  23 => 1,  97 => 23,  90 => 28,  87 => 34,  77 => 24,  53 => 18,  49 => 13,  56 => 13,  62 => 16,  20 => 1,  40 => 4,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 158,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 89,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 69,  181 => 66,  176 => 61,  170 => 60,  168 => 60,  146 => 33,  142 => 32,  128 => 45,  125 => 44,  107 => 36,  38 => 7,  144 => 53,  141 => 51,  135 => 47,  126 => 28,  109 => 41,  103 => 25,  67 => 23,  61 => 26,  47 => 11,  105 => 24,  93 => 31,  76 => 13,  72 => 22,  68 => 19,  27 => 3,  91 => 35,  84 => 25,  94 => 20,  88 => 6,  79 => 23,  59 => 23,  21 => 1,  44 => 10,  31 => 4,  28 => 3,  225 => 88,  216 => 90,  212 => 88,  205 => 71,  201 => 83,  196 => 80,  194 => 79,  191 => 70,  189 => 72,  186 => 71,  180 => 72,  172 => 64,  159 => 61,  154 => 54,  147 => 58,  132 => 47,  127 => 52,  121 => 45,  118 => 26,  114 => 25,  104 => 35,  100 => 35,  78 => 39,  75 => 23,  71 => 20,  58 => 14,  34 => 5,  26 => 2,  24 => 3,  25 => 4,  19 => 1,  70 => 24,  63 => 16,  46 => 12,  22 => 2,  163 => 59,  155 => 58,  152 => 49,  149 => 48,  145 => 57,  139 => 55,  131 => 46,  123 => 41,  120 => 50,  115 => 44,  106 => 23,  101 => 32,  96 => 21,  83 => 28,  80 => 32,  74 => 21,  66 => 19,  55 => 21,  52 => 14,  50 => 10,  43 => 7,  41 => 69,  37 => 3,  35 => 6,  32 => 5,  29 => 5,  184 => 70,  178 => 62,  171 => 66,  165 => 60,  162 => 57,  157 => 60,  153 => 62,  151 => 53,  143 => 56,  138 => 55,  136 => 50,  133 => 43,  130 => 53,  122 => 51,  119 => 45,  116 => 41,  111 => 37,  108 => 41,  102 => 34,  98 => 32,  95 => 31,  92 => 33,  89 => 29,  85 => 25,  81 => 24,  73 => 8,  64 => 41,  60 => 15,  57 => 16,  54 => 12,  51 => 13,  48 => 11,  45 => 71,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
