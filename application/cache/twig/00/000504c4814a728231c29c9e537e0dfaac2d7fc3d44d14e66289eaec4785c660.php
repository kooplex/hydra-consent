<?php

/* consent/index.twig */
class __TwigTemplate_303e95f914e8020d2d26c7490f1185d723b2678d04dabc1521a0960c08aa05da extends Twig_Template
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
</br>
</br>
</br>
Alternatively login with a <a href=\"/consent/home/login\">Local User</a>
</br>
<span style=\"font-size:8px\">or even more alternatively with  <a href=\"/consent/auth/elte\">Neptun or Caesar</a></span>

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
</br>
</br>
</br>
Alternatively login with a <a href=\"/consent/home/login\">Local User</a>
</br>
<span style=\"font-size:8px\">or even more alternatively with  <a href=\"/consent/auth/elte\">Neptun or Caesar</a></span>

    </div>
{% endblock %}
", "consent/index.twig", "/srv/consent/application/views/consent/index.twig");
    }
}
