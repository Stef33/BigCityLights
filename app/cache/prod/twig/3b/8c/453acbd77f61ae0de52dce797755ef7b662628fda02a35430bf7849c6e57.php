<?php

/* BigCityBundle:Default:contact.html.twig */
class __TwigTemplate_3b8c453acbd77f61ae0de52dce797755ef7b662628fda02a35430bf7849c6e57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"contact\"> 
    <div id=\"slide3\">
        <div class=\"content slide-inside slide\">
            <form id=\"signupform\" method=\"post\" novalidate=\"novalidate\" action=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("big_city_send"), "html", null, true);
        echo "\">
                    
                    <div class=\"jingle\">Contactez-nous !</div>
                    
                 <table>   
                    <tr>
                        <td>Nom:</td>
                        <td><input id=\"nom\" name=\"nom\" type=\"text\" value=\"Nom\" required=\"required\" onblur=\"if(this.value==''){this.value='Nom';}\" onfocus=\"if(this.value=='Nom'){this.value='';}\"/></td>
                    </tr>
                    <tr>
                        <td>Prenom:</td>
                        <td><input id=\"prenom\" name=\"prenom\" type=\"text\" value=\"Prenom\" required=\"required\" onblur=\"if(this.value==''){this.value='Prenom';}\" onfocus=\"if(this.value=='Prenom'){this.value='';}\"/></td>
                    </tr>
                    <tr>
                        <td>Telephone:</td>
                        <td><input id=\"phone\" name=\"phone\" type=\"tel\" value=\"Telephone\" required=\"required\" onblur=\"if(this.value==''){this.value='Telephone';}\" onfocus=\"if(this.value=='Telephone'){this.value='';}\"/></td>
                    </tr>
                    <tr>
                        <td><label for=\"email\">Email:</label></td>
                        <td><input id=\"email\" name=\"email\" type=\"email\" value=\"Email\" required=\"required\" onblur=\"if(this.value==''){this.value='Email';}\" onfocus=\"if(this.value=='Email'){this.value='';}\"/></td>\t
                    </tr>
                    <tr>
                        <td>Message:</td>
                        <td><textarea id=\"message\" name=\"message\" required=\"required\" onblur=\"if(this.value==''){this.value='Message';}\" onfocus=\"if(this.value=='Message'){this.value='';}\" rows=\"8\" cols=\"45\">Message</textarea></td>
                    </tr>
                    <tr>
                        <td><input id=\"name\" name=\"name\" type=\"hidden\" value=\"\"/></td>
                    </tr>
                </table>
                <div class=\"bouton\">
                    <input id=\"submit\" type=\"submit\" name=\"submit\" value=\"Envoyer\" onclick=\"submitContactForm(); return false;\"/>
                    <input id=\"reset\" type=\"reset\" value=\"Effacer\"/>
                </div>
                
                ";
        // line 38
        $this->displayBlock('footer', $context, $blocks);
        // line 41
        echo "                
                <div class=\"clear\"></div>
            </form>   
        </div>
    </div>
</div>";
    }

    // line 38
    public function block_footer($context, array $blocks = array())
    {
        echo "\t
                    ";
        // line 39
        $this->env->loadTemplate("BigCityBundle:Default:footer.html.twig")->display($context);
        // line 40
        echo "                ";
    }

    public function getTemplateName()
    {
        return "BigCityBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 40,  62 => 38,  20 => 1,  40 => 4,  37 => 3,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  131 => 51,  128 => 50,  125 => 44,  107 => 36,  38 => 6,  155 => 58,  144 => 53,  141 => 51,  139 => 55,  135 => 47,  126 => 45,  109 => 41,  103 => 37,  101 => 32,  70 => 20,  67 => 15,  61 => 13,  47 => 9,  105 => 24,  96 => 21,  93 => 28,  83 => 18,  76 => 16,  72 => 14,  68 => 12,  50 => 10,  27 => 2,  91 => 20,  84 => 28,  74 => 16,  66 => 15,  55 => 15,  94 => 39,  88 => 6,  79 => 17,  59 => 22,  21 => 1,  46 => 7,  29 => 3,  44 => 12,  35 => 5,  31 => 8,  43 => 7,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  163 => 59,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 46,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 34,  78 => 39,  75 => 23,  71 => 19,  63 => 24,  58 => 9,  41 => 10,  34 => 11,  26 => 6,  24 => 3,  32 => 6,  25 => 4,  22 => 2,  19 => 1,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 53,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 43,  119 => 42,  116 => 35,  111 => 37,  108 => 31,  102 => 30,  98 => 31,  95 => 34,  92 => 33,  89 => 19,  85 => 25,  81 => 40,  73 => 38,  64 => 41,  60 => 23,  57 => 11,  54 => 10,  51 => 14,  48 => 16,  45 => 8,  42 => 7,  39 => 9,  36 => 10,  33 => 4,  30 => 3,);
    }
}
