<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_bbf7cf0086a14256a6fe44c143d0fc0575991796f423d6638c90e0040718dbee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_c6610430536acad6cfe092c9f9e439935856517996beb5dfdde52abc5876762b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6610430536acad6cfe092c9f9e439935856517996beb5dfdde52abc5876762b->enter($__internal_c6610430536acad6cfe092c9f9e439935856517996beb5dfdde52abc5876762b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_270dc96c508052345c0b750f375d1296e3eb0929f0427828d6196076008b9078 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_270dc96c508052345c0b750f375d1296e3eb0929f0427828d6196076008b9078->enter($__internal_270dc96c508052345c0b750f375d1296e3eb0929f0427828d6196076008b9078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6610430536acad6cfe092c9f9e439935856517996beb5dfdde52abc5876762b->leave($__internal_c6610430536acad6cfe092c9f9e439935856517996beb5dfdde52abc5876762b_prof);

        
        $__internal_270dc96c508052345c0b750f375d1296e3eb0929f0427828d6196076008b9078->leave($__internal_270dc96c508052345c0b750f375d1296e3eb0929f0427828d6196076008b9078_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b67c265b817efe2a9b2327015871f84406842f0651c9dbe5517d0c643e6bb9ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b67c265b817efe2a9b2327015871f84406842f0651c9dbe5517d0c643e6bb9ee->enter($__internal_b67c265b817efe2a9b2327015871f84406842f0651c9dbe5517d0c643e6bb9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b79955290e713e5d8a3f705cc8ede7a7edace9e70828f45c2a9f01681eebab31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b79955290e713e5d8a3f705cc8ede7a7edace9e70828f45c2a9f01681eebab31->enter($__internal_b79955290e713e5d8a3f705cc8ede7a7edace9e70828f45c2a9f01681eebab31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b79955290e713e5d8a3f705cc8ede7a7edace9e70828f45c2a9f01681eebab31->leave($__internal_b79955290e713e5d8a3f705cc8ede7a7edace9e70828f45c2a9f01681eebab31_prof);

        
        $__internal_b67c265b817efe2a9b2327015871f84406842f0651c9dbe5517d0c643e6bb9ee->leave($__internal_b67c265b817efe2a9b2327015871f84406842f0651c9dbe5517d0c643e6bb9ee_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fccc8413cd6a78816196b649da1a253ac8201c4e7f5f3c00b797f99ef8ee20b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fccc8413cd6a78816196b649da1a253ac8201c4e7f5f3c00b797f99ef8ee20b6->enter($__internal_fccc8413cd6a78816196b649da1a253ac8201c4e7f5f3c00b797f99ef8ee20b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ad7814181ee15b8646dae8cc9e14a4e1f2ce1312ac3c5824a15aadf7e991e94d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad7814181ee15b8646dae8cc9e14a4e1f2ce1312ac3c5824a15aadf7e991e94d->enter($__internal_ad7814181ee15b8646dae8cc9e14a4e1f2ce1312ac3c5824a15aadf7e991e94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ad7814181ee15b8646dae8cc9e14a4e1f2ce1312ac3c5824a15aadf7e991e94d->leave($__internal_ad7814181ee15b8646dae8cc9e14a4e1f2ce1312ac3c5824a15aadf7e991e94d_prof);

        
        $__internal_fccc8413cd6a78816196b649da1a253ac8201c4e7f5f3c00b797f99ef8ee20b6->leave($__internal_fccc8413cd6a78816196b649da1a253ac8201c4e7f5f3c00b797f99ef8ee20b6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4b7f6457c030a3a91ba9a863478ebf4e623a08b600f99ec728041eafb0d556bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b7f6457c030a3a91ba9a863478ebf4e623a08b600f99ec728041eafb0d556bd->enter($__internal_4b7f6457c030a3a91ba9a863478ebf4e623a08b600f99ec728041eafb0d556bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_554568b67e79ea36969714f3d56967a1f9e0b4dbf78164716f48fc5474a7e104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_554568b67e79ea36969714f3d56967a1f9e0b4dbf78164716f48fc5474a7e104->enter($__internal_554568b67e79ea36969714f3d56967a1f9e0b4dbf78164716f48fc5474a7e104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_554568b67e79ea36969714f3d56967a1f9e0b4dbf78164716f48fc5474a7e104->leave($__internal_554568b67e79ea36969714f3d56967a1f9e0b4dbf78164716f48fc5474a7e104_prof);

        
        $__internal_4b7f6457c030a3a91ba9a863478ebf4e623a08b600f99ec728041eafb0d556bd->leave($__internal_4b7f6457c030a3a91ba9a863478ebf4e623a08b600f99ec728041eafb0d556bd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/sergiovergara/PhpstormProjects/nextgen/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
