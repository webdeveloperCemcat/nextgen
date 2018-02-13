<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_711981281956c9595012d3200cf6df1120ec4e29538590673ec3a419a6f57daa extends Twig_Template
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
        $__internal_b736eeaa0d6b8417cd889602bed35cc14a23636ffa2a35f091bb924805b7d5c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b736eeaa0d6b8417cd889602bed35cc14a23636ffa2a35f091bb924805b7d5c3->enter($__internal_b736eeaa0d6b8417cd889602bed35cc14a23636ffa2a35f091bb924805b7d5c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_8c91f8a1268e1a4d25e58a3799bc9411e16d9713a7cbe1eb1c5e6621e18d35cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c91f8a1268e1a4d25e58a3799bc9411e16d9713a7cbe1eb1c5e6621e18d35cb->enter($__internal_8c91f8a1268e1a4d25e58a3799bc9411e16d9713a7cbe1eb1c5e6621e18d35cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_b736eeaa0d6b8417cd889602bed35cc14a23636ffa2a35f091bb924805b7d5c3->leave($__internal_b736eeaa0d6b8417cd889602bed35cc14a23636ffa2a35f091bb924805b7d5c3_prof);

        
        $__internal_8c91f8a1268e1a4d25e58a3799bc9411e16d9713a7cbe1eb1c5e6621e18d35cb->leave($__internal_8c91f8a1268e1a4d25e58a3799bc9411e16d9713a7cbe1eb1c5e6621e18d35cb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/Users/sergiovergara/PhpstormProjects/nextgen/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
