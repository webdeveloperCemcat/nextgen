<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_298bbe6cd00a6c543ed71361d37ff0c223ec649adc6f9b8e945465c9677cddd6 extends Twig_Template
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
        $__internal_2573fa6c65eb354db8eb4cbc71d99c74e89a24073528ba2c6083de990a9b3f1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2573fa6c65eb354db8eb4cbc71d99c74e89a24073528ba2c6083de990a9b3f1f->enter($__internal_2573fa6c65eb354db8eb4cbc71d99c74e89a24073528ba2c6083de990a9b3f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_52bfbd9c48b7e6ae5ae1df7000d1361cfe0bcfe587969e2d214b51c3ddd18925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52bfbd9c48b7e6ae5ae1df7000d1361cfe0bcfe587969e2d214b51c3ddd18925->enter($__internal_52bfbd9c48b7e6ae5ae1df7000d1361cfe0bcfe587969e2d214b51c3ddd18925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_2573fa6c65eb354db8eb4cbc71d99c74e89a24073528ba2c6083de990a9b3f1f->leave($__internal_2573fa6c65eb354db8eb4cbc71d99c74e89a24073528ba2c6083de990a9b3f1f_prof);

        
        $__internal_52bfbd9c48b7e6ae5ae1df7000d1361cfe0bcfe587969e2d214b51c3ddd18925->leave($__internal_52bfbd9c48b7e6ae5ae1df7000d1361cfe0bcfe587969e2d214b51c3ddd18925_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "/Users/sergiovergara/PhpstormProjects/nextgen/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
