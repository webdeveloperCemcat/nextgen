<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d65b39e4206693397dd2d21bc7b0d2f54d9726291ae46b56472a18a3ff527cbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_914ce913d5aef7f7bfb94030e57e98b59ac550b8cfd3655aafcf897932bd0425 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_914ce913d5aef7f7bfb94030e57e98b59ac550b8cfd3655aafcf897932bd0425->enter($__internal_914ce913d5aef7f7bfb94030e57e98b59ac550b8cfd3655aafcf897932bd0425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_50bf17bfe9c0447b994f1017f40b14665522b0d644a520bdb8bd48d18b3ff028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50bf17bfe9c0447b994f1017f40b14665522b0d644a520bdb8bd48d18b3ff028->enter($__internal_50bf17bfe9c0447b994f1017f40b14665522b0d644a520bdb8bd48d18b3ff028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_914ce913d5aef7f7bfb94030e57e98b59ac550b8cfd3655aafcf897932bd0425->leave($__internal_914ce913d5aef7f7bfb94030e57e98b59ac550b8cfd3655aafcf897932bd0425_prof);

        
        $__internal_50bf17bfe9c0447b994f1017f40b14665522b0d644a520bdb8bd48d18b3ff028->leave($__internal_50bf17bfe9c0447b994f1017f40b14665522b0d644a520bdb8bd48d18b3ff028_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b393900fe56965003c1030417dcbdd822c852a931ac6e7ba681edf08af4bec47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b393900fe56965003c1030417dcbdd822c852a931ac6e7ba681edf08af4bec47->enter($__internal_b393900fe56965003c1030417dcbdd822c852a931ac6e7ba681edf08af4bec47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e23760b5a99c7396769efc232e197b30021097c4d9b67775f815d116a145650d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e23760b5a99c7396769efc232e197b30021097c4d9b67775f815d116a145650d->enter($__internal_e23760b5a99c7396769efc232e197b30021097c4d9b67775f815d116a145650d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e23760b5a99c7396769efc232e197b30021097c4d9b67775f815d116a145650d->leave($__internal_e23760b5a99c7396769efc232e197b30021097c4d9b67775f815d116a145650d_prof);

        
        $__internal_b393900fe56965003c1030417dcbdd822c852a931ac6e7ba681edf08af4bec47->leave($__internal_b393900fe56965003c1030417dcbdd822c852a931ac6e7ba681edf08af4bec47_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d5b1189b928d309dde88b590a388ccfc0863b17d9023a3fcc276ba30521531a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5b1189b928d309dde88b590a388ccfc0863b17d9023a3fcc276ba30521531a6->enter($__internal_d5b1189b928d309dde88b590a388ccfc0863b17d9023a3fcc276ba30521531a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1b8a02a92fa7e2d756cac596c31b1b3d8aa5aadce5b7a560246e58522f8749b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b8a02a92fa7e2d756cac596c31b1b3d8aa5aadce5b7a560246e58522f8749b1->enter($__internal_1b8a02a92fa7e2d756cac596c31b1b3d8aa5aadce5b7a560246e58522f8749b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_1b8a02a92fa7e2d756cac596c31b1b3d8aa5aadce5b7a560246e58522f8749b1->leave($__internal_1b8a02a92fa7e2d756cac596c31b1b3d8aa5aadce5b7a560246e58522f8749b1_prof);

        
        $__internal_d5b1189b928d309dde88b590a388ccfc0863b17d9023a3fcc276ba30521531a6->leave($__internal_d5b1189b928d309dde88b590a388ccfc0863b17d9023a3fcc276ba30521531a6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_79400154bdc47f0b6438d48904308c596a389213b59090ce0acb00ba1d7e706f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79400154bdc47f0b6438d48904308c596a389213b59090ce0acb00ba1d7e706f->enter($__internal_79400154bdc47f0b6438d48904308c596a389213b59090ce0acb00ba1d7e706f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f0de42dfeea7baaf58b47f8911e921e77535f638a2b33defbeb7e7604660664b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0de42dfeea7baaf58b47f8911e921e77535f638a2b33defbeb7e7604660664b->enter($__internal_f0de42dfeea7baaf58b47f8911e921e77535f638a2b33defbeb7e7604660664b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_f0de42dfeea7baaf58b47f8911e921e77535f638a2b33defbeb7e7604660664b->leave($__internal_f0de42dfeea7baaf58b47f8911e921e77535f638a2b33defbeb7e7604660664b_prof);

        
        $__internal_79400154bdc47f0b6438d48904308c596a389213b59090ce0acb00ba1d7e706f->leave($__internal_79400154bdc47f0b6438d48904308c596a389213b59090ce0acb00ba1d7e706f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/sergiovergara/PhpstormProjects/nextgen/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
