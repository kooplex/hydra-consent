<?php

/* manage/index.twig */
class __TwigTemplate_9496f9682f9f6ece65b2e4332321167295849a8352dc0365a37c499ef1971d37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template/main.twig", "manage/index.twig", 1);
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<!--meta http-equiv=\"refresh\"
   content=\"0; url=https://idp.elte.hu\">
\tRedirecting to idp.elte.hu
\t-->
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vars"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["var"]) {
            // line 9
            echo "        <pre>
        ";
            // line 10
            echo twig_escape_filter($this->env, twig_var_dump($this->env, $context, $context["var"]), "html", null, true);
            echo "
        </pre>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['var'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "manage/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 10,  41 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
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
<!--meta http-equiv=\"refresh\"
   content=\"0; url=https://idp.elte.hu\">
\tRedirecting to idp.elte.hu
\t-->
    {% for var in vars %}
        <pre>
        {{ dump(var) }}
        </pre>
    {% endfor %}
{% endblock %}
", "manage/index.twig", "/srv/consent/application/views/manage/index.twig");
    }
}
