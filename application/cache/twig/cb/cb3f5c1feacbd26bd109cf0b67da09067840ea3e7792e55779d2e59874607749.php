<?php

/* consent/consent_form.twig */
class __TwigTemplate_952b1215b85ff190d71cc10f489a5f4fedc58ba3c0e03ed583be7e03f0df0129 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template/main.twig", "consent/consent_form.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template/main.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<h1>Successful authentication</h1>
    ";
        // line 4
        echo form_open("/consent/handle");
        echo "

     <p><label for=\"accept\"></label>
         <input type=\"checkbox\" name=\"accept\" id=\"accept\" checked hidden /></p>
     <input type=\"submit\" value=\"Click to continue\"/>

    ";
        // line 10
        echo form_close();
        echo "

 ";
    }

    public function getTemplateName()
    {
        return "consent/consent_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 10,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'template/main.twig' %}
{% block content %}
<h1>Successful authentication</h1>
    {{ form_open('/consent/handle') }}

     <p><label for=\"accept\"></label>
         <input type=\"checkbox\" name=\"accept\" id=\"accept\" checked hidden /></p>
     <input type=\"submit\" value=\"Click to continue\"/>

    {{ form_close() }}

 {% endblock %}
", "consent/consent_form.twig", "/srv/consent/application/views/consent/consent_form.twig");
    }
}
