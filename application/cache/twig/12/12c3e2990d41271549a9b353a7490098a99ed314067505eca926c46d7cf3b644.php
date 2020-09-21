<?php

/* consent/index.twig */
class __TwigTemplate_879053155629fc03b4905c895b84356fde2857f5dcd2e73e2ebb63c0c0b37a44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template/main.twig", "consent/index.twig", 1);
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
        echo "    <h2>Please choose an authentication method</h2>
    <div class='providers'>
        <ul>
            <li class='provider'><a href=\"/consent/auth/eduid\">Login with EDUID</a></li>
        </ul>
</br>
Alternatively login with your other accounts:
        <ul>
            <li><a href=\"/consent/auth/elte\">Neptun or Caesar</a></li>
            <li><a href=\"/consent/home/login\">Kooplex User</a></li>
        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "consent/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
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
    <h2>Please choose an authentication method</h2>
    <div class='providers'>
        <ul>
            <li class='provider'><a href=\"/consent/auth/eduid\">Login with EDUID</a></li>
        </ul>
</br>
Alternatively login with your other accounts:
        <ul>
            <li><a href=\"/consent/auth/elte\">Neptun or Caesar</a></li>
            <li><a href=\"/consent/home/login\">Kooplex User</a></li>
        </ul>
    </div>
{% endblock %}
", "consent/index.twig", "/srv/consent/application/views/consent/index.twig");
    }
}
