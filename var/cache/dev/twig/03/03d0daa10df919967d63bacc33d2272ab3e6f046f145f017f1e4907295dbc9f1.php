<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_35021cfe1c541c7480ec2602bc86e93cc56b3f957ee975d9262a7214aa46a213 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ab116d5aec040161eb007addb0928c20dce40daa88a59d46e53fb08a2ace205 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ab116d5aec040161eb007addb0928c20dce40daa88a59d46e53fb08a2ace205->enter($__internal_8ab116d5aec040161eb007addb0928c20dce40daa88a59d46e53fb08a2ace205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_d1b988ece3614e1102ecdad8d0a03c97a092a4a87e97d6e48cea8164e5591fc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1b988ece3614e1102ecdad8d0a03c97a092a4a87e97d6e48cea8164e5591fc3->enter($__internal_d1b988ece3614e1102ecdad8d0a03c97a092a4a87e97d6e48cea8164e5591fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ab116d5aec040161eb007addb0928c20dce40daa88a59d46e53fb08a2ace205->leave($__internal_8ab116d5aec040161eb007addb0928c20dce40daa88a59d46e53fb08a2ace205_prof);

        
        $__internal_d1b988ece3614e1102ecdad8d0a03c97a092a4a87e97d6e48cea8164e5591fc3->leave($__internal_d1b988ece3614e1102ecdad8d0a03c97a092a4a87e97d6e48cea8164e5591fc3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_901453d332606b6f9e4279e66c1d216525ddb3a9fb113a7716d81b4b5272fcfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_901453d332606b6f9e4279e66c1d216525ddb3a9fb113a7716d81b4b5272fcfc->enter($__internal_901453d332606b6f9e4279e66c1d216525ddb3a9fb113a7716d81b4b5272fcfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_71899f4058c5cf948afad16e7908b433641ba54d58fbe5038eed1bcb9770275d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71899f4058c5cf948afad16e7908b433641ba54d58fbe5038eed1bcb9770275d->enter($__internal_71899f4058c5cf948afad16e7908b433641ba54d58fbe5038eed1bcb9770275d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_71899f4058c5cf948afad16e7908b433641ba54d58fbe5038eed1bcb9770275d->leave($__internal_71899f4058c5cf948afad16e7908b433641ba54d58fbe5038eed1bcb9770275d_prof);

        
        $__internal_901453d332606b6f9e4279e66c1d216525ddb3a9fb113a7716d81b4b5272fcfc->leave($__internal_901453d332606b6f9e4279e66c1d216525ddb3a9fb113a7716d81b4b5272fcfc_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7808f003ce6ae39cfc80d6851ec3b04c17a100fe0f1e014bda70f7ba57470c2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7808f003ce6ae39cfc80d6851ec3b04c17a100fe0f1e014bda70f7ba57470c2d->enter($__internal_7808f003ce6ae39cfc80d6851ec3b04c17a100fe0f1e014bda70f7ba57470c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2fba999fa56b344967a0653077ad3f27b061e95853c4f191eaf926c324b68cd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fba999fa56b344967a0653077ad3f27b061e95853c4f191eaf926c324b68cd7->enter($__internal_2fba999fa56b344967a0653077ad3f27b061e95853c4f191eaf926c324b68cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_2fba999fa56b344967a0653077ad3f27b061e95853c4f191eaf926c324b68cd7->leave($__internal_2fba999fa56b344967a0653077ad3f27b061e95853c4f191eaf926c324b68cd7_prof);

        
        $__internal_7808f003ce6ae39cfc80d6851ec3b04c17a100fe0f1e014bda70f7ba57470c2d->leave($__internal_7808f003ce6ae39cfc80d6851ec3b04c17a100fe0f1e014bda70f7ba57470c2d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/Users/sergiovergara/PhpstormProjects/nextgen/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
