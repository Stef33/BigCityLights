<?php

/* BigCityBundle:Contact:sendContact.json.twig */
class __TwigTemplate_03410cb74145dafe6bd5f8e61fee26fa1e223cbea7a7af6290be9da26011d263 extends Twig_Template
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
        echo "{
    \"success\": ";
        // line 2
        if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == true)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
    \"errorMessage\": \"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["errorMessage"]) ? $context["errorMessage"] : $this->getContext($context, "errorMessage")), "html", null, true);
        echo "\"
}";
    }

    public function getTemplateName()
    {
        return "BigCityBundle:Contact:sendContact.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  22 => 2,  48 => 16,  41 => 12,  36 => 10,  31 => 8,  26 => 6,  19 => 1,);
    }
}
