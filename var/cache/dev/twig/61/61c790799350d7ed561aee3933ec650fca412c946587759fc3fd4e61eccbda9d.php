<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_ec4f5cd4f90b89748d6ad0eec9c6fa3e95008d5a544b4da584c6cbb18d40ea0a extends Twig_Template
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
        $__internal_19a6de4ff7165513dbe1d9c514cdf7333cac307bed9bb6ff72eb6aa46f18954e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19a6de4ff7165513dbe1d9c514cdf7333cac307bed9bb6ff72eb6aa46f18954e->enter($__internal_19a6de4ff7165513dbe1d9c514cdf7333cac307bed9bb6ff72eb6aa46f18954e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_ef03d61ce78e21dbf29ddf10321ee99cc4f450589a043ad189f344d2220896d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef03d61ce78e21dbf29ddf10321ee99cc4f450589a043ad189f344d2220896d9->enter($__internal_ef03d61ce78e21dbf29ddf10321ee99cc4f450589a043ad189f344d2220896d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_19a6de4ff7165513dbe1d9c514cdf7333cac307bed9bb6ff72eb6aa46f18954e->leave($__internal_19a6de4ff7165513dbe1d9c514cdf7333cac307bed9bb6ff72eb6aa46f18954e_prof);

        
        $__internal_ef03d61ce78e21dbf29ddf10321ee99cc4f450589a043ad189f344d2220896d9->leave($__internal_ef03d61ce78e21dbf29ddf10321ee99cc4f450589a043ad189f344d2220896d9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/Users/sergiovergara/PhpstormProjects/nextgen/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
