<?php

/* @NelmioApiDoc/SwaggerUi/index.html.twig */
class __TwigTemplate_5768877ffb936e4d8ee81f972d020fa11c7072970fea7d2253b4806619334a2b extends Twig_Template
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
        $__internal_ecf38709054b88fd5cf4213a011459b19a46b5e1ee63cbeb2beef02d01b0360f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecf38709054b88fd5cf4213a011459b19a46b5e1ee63cbeb2beef02d01b0360f->enter($__internal_ecf38709054b88fd5cf4213a011459b19a46b5e1ee63cbeb2beef02d01b0360f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NelmioApiDoc/SwaggerUi/index.html.twig"));

        $__internal_692012f1e8afeabd9fbb8440cfed681ca206ac0093ded2b19d4c85181c7932cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_692012f1e8afeabd9fbb8440cfed681ca206ac0093ded2b19d4c85181c7932cf->enter($__internal_692012f1e8afeabd9fbb8440cfed681ca206ac0093ded2b19d4c85181c7932cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NelmioApiDoc/SwaggerUi/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>API</title>

    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,700|Source+Code+Pro:300,600|Titillium+Web:400,600,700\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/nelmioapidoc/swagger-ui/swagger-ui.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/nelmioapidoc/style.css"), "html", null, true);
        echo "\">

    ";
        // line 12
        echo "    <script id=\"swagger-data\" type=\"application/json\">";
        echo twig_jsonencode_filter(($context["swagger_data"] ?? $this->getContext($context, "swagger_data")), 65);
        echo "</script>
</head>
<body>
    <style>
    \theader #logo img, header:before {
\t\t  background-color:transparent;
\t\t}
    </style>
    <header>
        <a id=\"logo\" href=\"https://wwww.cem-cat.org\"><img src=\"//www.cem-cat.org/sites/all/themes/Cemcat/logo.png\" alt=\"NelmioApiDocBundle\"></a>
    </header>

    <div id=\"swagger-ui\" class=\"api-platform\"></div>

    <div class=\"swagger-ui-wrap\" style=\"margin: 20px;\">
        &copy; 2018-";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " <a href=\"https://wwww.cem-cat.org\">MS Center of Catalonia (Cemcat)</a>
    </div>

    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/nelmioapidoc/swagger-ui/swagger-ui-bundle.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/nelmioapidoc/swagger-ui/swagger-ui-standalone-preset.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/nelmioapidoc/init-swagger-ui.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
        
        $__internal_ecf38709054b88fd5cf4213a011459b19a46b5e1ee63cbeb2beef02d01b0360f->leave($__internal_ecf38709054b88fd5cf4213a011459b19a46b5e1ee63cbeb2beef02d01b0360f_prof);

        
        $__internal_692012f1e8afeabd9fbb8440cfed681ca206ac0093ded2b19d4c85181c7932cf->leave($__internal_692012f1e8afeabd9fbb8440cfed681ca206ac0093ded2b19d4c85181c7932cf_prof);

    }

    public function getTemplateName()
    {
        return "@NelmioApiDoc/SwaggerUi/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 32,  72 => 31,  68 => 30,  62 => 27,  43 => 12,  38 => 9,  34 => 8,  25 => 1,);
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
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>API</title>

    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,700|Source+Code+Pro:300,600|Titillium+Web:400,600,700\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/nelmioapidoc/swagger-ui/swagger-ui.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/nelmioapidoc/style.css') }}\">

    {# json_encode(65) is for JSON_UNESCAPED_SLASHES|JSON_HEX_TAG to avoid JS XSS #}
    <script id=\"swagger-data\" type=\"application/json\">{{ swagger_data|json_encode(65)|raw }}</script>
</head>
<body>
    <style>
    \theader #logo img, header:before {
\t\t  background-color:transparent;
\t\t}
    </style>
    <header>
        <a id=\"logo\" href=\"https://wwww.cem-cat.org\"><img src=\"//www.cem-cat.org/sites/all/themes/Cemcat/logo.png\" alt=\"NelmioApiDocBundle\"></a>
    </header>

    <div id=\"swagger-ui\" class=\"api-platform\"></div>

    <div class=\"swagger-ui-wrap\" style=\"margin: 20px;\">
        &copy; 2018-{{ \"now\"|date(\"Y\") }} <a href=\"https://wwww.cem-cat.org\">MS Center of Catalonia (Cemcat)</a>
    </div>

    <script src=\"{{ asset('bundles/nelmioapidoc/swagger-ui/swagger-ui-bundle.js') }}\"></script>
    <script src=\"{{ asset('bundles/nelmioapidoc/swagger-ui/swagger-ui-standalone-preset.js') }}\"></script>
    <script src=\"{{ asset('bundles/nelmioapidoc/init-swagger-ui.js') }}\"></script>
</body>
</html>
", "@NelmioApiDoc/SwaggerUi/index.html.twig", "/Users/sergiovergara/PhpstormProjects/nextgen/app/Resources/NelmioApiDocBundle/views/SwaggerUi/index.html.twig");
    }
}
