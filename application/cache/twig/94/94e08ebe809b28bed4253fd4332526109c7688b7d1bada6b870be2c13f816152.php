<?php

/* template/main.twig */
class __TwigTemplate_f3fb7a525eba84b0f43b06a26de457ee0790e73cbb010ffa0ea6068769fdbc33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<head>
    <meta charset=\"UTF-8\">
    <title>Hydra Auth</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/consent/css/style.css\"/>
</head>
<body>
<div class=\"wrapper\">
    <h1><img src=\"/consent/images/elte-auth-modern-v1.png\" alt=\"Hydra Auth\" width=\"80px\"/> Hydra Auth</h1>
    <div id=\"content\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
</div>

</body>
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "template/main.twig";
    }

    public function getDebugInfo()
    {
        return array (  42 => 11,  34 => 12,  32 => 11,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<head>
    <meta charset=\"UTF-8\">
    <title>Hydra Auth</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/consent/css/style.css\"/>
</head>
<body>
<div class=\"wrapper\">
    <h1><img src=\"/consent/images/elte-auth-modern-v1.png\" alt=\"Hydra Auth\" width=\"80px\"/> Hydra Auth</h1>
    <div id=\"content\">
        {% block content %}{% endblock %}
    </div>
</div>

</body>
", "template/main.twig", "/srv/consent/application/views/template/main.twig");
    }
}
