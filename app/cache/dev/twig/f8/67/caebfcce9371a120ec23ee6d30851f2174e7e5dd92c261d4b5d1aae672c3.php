<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_f867caebfcce9371a120ec23ee6d30851f2174e7e5dd92c261d4b5d1aae672c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
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
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" />
    ";
        // line 5
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_menu($context, array $blocks = array())
    {
        // line 9
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/exception.png"), "html", null, true);
        echo "\" alt=\"Exception\" /></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 13
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 14
            echo "            <span>1</span>
        ";
        }
        // line 16
        echo "    </span>
</span>
";
    }

    // line 20
    public function block_panel($context, array $blocks = array())
    {
        // line 21
        echo "    <h2>Exception</h2>

    ";
        // line 23
        if ((!$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception"))) {
            // line 24
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 28
            echo "        ";
            echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Exception:show", array("exception" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "exception"), "format" => "html"), array());
            // line 29
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 71,  188 => 69,  185 => 68,  174 => 67,  167 => 64,  164 => 63,  356 => 163,  347 => 160,  343 => 159,  335 => 157,  333 => 156,  325 => 150,  323 => 149,  316 => 145,  309 => 141,  302 => 137,  295 => 133,  288 => 129,  281 => 125,  274 => 121,  259 => 109,  252 => 105,  245 => 101,  238 => 97,  217 => 83,  214 => 82,  211 => 81,  206 => 78,  203 => 77,  192 => 72,  182 => 69,  158 => 56,  148 => 52,  140 => 49,  113 => 40,  69 => 20,  134 => 54,  110 => 42,  86 => 29,  23 => 1,  97 => 23,  90 => 19,  87 => 34,  77 => 24,  53 => 18,  49 => 13,  56 => 13,  62 => 16,  20 => 1,  40 => 4,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 158,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 89,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 74,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 33,  142 => 32,  128 => 45,  125 => 44,  107 => 36,  38 => 5,  144 => 53,  141 => 51,  135 => 47,  126 => 28,  109 => 41,  103 => 25,  67 => 23,  61 => 26,  47 => 9,  105 => 24,  93 => 31,  76 => 13,  72 => 22,  68 => 20,  27 => 3,  91 => 35,  84 => 33,  94 => 20,  88 => 6,  79 => 17,  59 => 23,  21 => 1,  44 => 8,  31 => 8,  28 => 3,  225 => 88,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 70,  189 => 72,  186 => 71,  180 => 72,  172 => 64,  159 => 61,  154 => 54,  147 => 58,  132 => 48,  127 => 52,  121 => 45,  118 => 26,  114 => 25,  104 => 39,  100 => 35,  78 => 39,  75 => 23,  71 => 21,  58 => 14,  34 => 11,  26 => 2,  24 => 3,  25 => 4,  19 => 1,  70 => 24,  63 => 10,  46 => 12,  22 => 2,  163 => 59,  155 => 58,  152 => 49,  149 => 48,  145 => 46,  139 => 55,  131 => 46,  123 => 41,  120 => 50,  115 => 39,  106 => 23,  101 => 32,  96 => 21,  83 => 28,  80 => 32,  74 => 16,  66 => 19,  55 => 21,  52 => 14,  50 => 10,  43 => 7,  41 => 69,  37 => 3,  35 => 6,  32 => 5,  29 => 5,  184 => 70,  178 => 71,  171 => 66,  165 => 60,  162 => 57,  157 => 60,  153 => 62,  151 => 53,  143 => 54,  138 => 55,  136 => 50,  133 => 43,  130 => 53,  122 => 51,  119 => 43,  116 => 41,  111 => 37,  108 => 41,  102 => 22,  98 => 21,  95 => 36,  92 => 33,  89 => 29,  85 => 25,  81 => 40,  73 => 8,  64 => 41,  60 => 16,  57 => 11,  54 => 13,  51 => 12,  48 => 11,  45 => 71,  42 => 8,  39 => 6,  36 => 9,  33 => 4,  30 => 3,);
    }
}
