<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_7d6a536ea4d20cbd4fe73511303be4782c789320af770e9e6c4fb511e2149fb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5abbbfcad91c0dc2c1c07ce047f648c14a8068699aac084040b0b19e0b1ec353 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5abbbfcad91c0dc2c1c07ce047f648c14a8068699aac084040b0b19e0b1ec353->enter($__internal_5abbbfcad91c0dc2c1c07ce047f648c14a8068699aac084040b0b19e0b1ec353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_9074cdae5575590b94da6373a5aa4eec00f343b08c178a0c4eb4358f92b7dd10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9074cdae5575590b94da6373a5aa4eec00f343b08c178a0c4eb4358f92b7dd10->enter($__internal_9074cdae5575590b94da6373a5aa4eec00f343b08c178a0c4eb4358f92b7dd10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5abbbfcad91c0dc2c1c07ce047f648c14a8068699aac084040b0b19e0b1ec353->leave($__internal_5abbbfcad91c0dc2c1c07ce047f648c14a8068699aac084040b0b19e0b1ec353_prof);

        
        $__internal_9074cdae5575590b94da6373a5aa4eec00f343b08c178a0c4eb4358f92b7dd10->leave($__internal_9074cdae5575590b94da6373a5aa4eec00f343b08c178a0c4eb4358f92b7dd10_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7ac9d00a79b88dd47d705f6d7e590eb6537887c4b23318f5ddd444fbbd60414f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ac9d00a79b88dd47d705f6d7e590eb6537887c4b23318f5ddd444fbbd60414f->enter($__internal_7ac9d00a79b88dd47d705f6d7e590eb6537887c4b23318f5ddd444fbbd60414f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_85863b61b17fe0e7959522d2102a49ba911329c21851ce2453c60c3ad0fa34b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85863b61b17fe0e7959522d2102a49ba911329c21851ce2453c60c3ad0fa34b5->enter($__internal_85863b61b17fe0e7959522d2102a49ba911329c21851ce2453c60c3ad0fa34b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_85863b61b17fe0e7959522d2102a49ba911329c21851ce2453c60c3ad0fa34b5->leave($__internal_85863b61b17fe0e7959522d2102a49ba911329c21851ce2453c60c3ad0fa34b5_prof);

        
        $__internal_7ac9d00a79b88dd47d705f6d7e590eb6537887c4b23318f5ddd444fbbd60414f->leave($__internal_7ac9d00a79b88dd47d705f6d7e590eb6537887c4b23318f5ddd444fbbd60414f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/sergiovergara/PhpstormProjects/nextgen/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
