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
        return array (  78 => 39,  64 => 41,  62 => 38,  25 => 4,  56 => 30,  44 => 21,  19 => 1,  26 => 2,  20 => 1,  189 => 72,  186 => 71,  146 => 33,  142 => 32,  138 => 31,  134 => 30,  130 => 29,  126 => 28,  122 => 27,  118 => 26,  114 => 25,  110 => 24,  106 => 23,  102 => 22,  98 => 21,  94 => 20,  89 => 17,  86 => 16,  76 => 13,  72 => 12,  68 => 11,  63 => 10,  60 => 9,  54 => 5,  45 => 71,  38 => 16,  36 => 9,  29 => 5,  23 => 1,  103 => 25,  100 => 24,  97 => 23,  93 => 20,  90 => 19,  87 => 18,  83 => 15,  80 => 40,  77 => 13,  73 => 38,  70 => 7,  67 => 6,  61 => 26,  59 => 23,  55 => 21,  53 => 18,  49 => 16,  47 => 75,  41 => 69,  39 => 23,  35 => 4,  32 => 12,);
    }
}
