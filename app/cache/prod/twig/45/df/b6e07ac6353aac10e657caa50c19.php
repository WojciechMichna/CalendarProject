<?php

/* AcmeCallendarBundle:Default:home.html.twig */
class __TwigTemplate_45dfb6e07ac6353aac10e657caa50c19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'additional_style' => array($this, 'block_additional_style'),
            'adminlinks' => array($this, 'block_adminlinks'),
            'title_inside' => array($this, 'block_title_inside'),
            'post' => array($this, 'block_post'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
\t<title> ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/callendar/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />

\t<style type=\"text/css\">
\t\tbody {
\t\t\tbackground: #f6f6ee url(";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/callendar/images/bck.jpg"), "html", null, true);
        echo ");
\t\t}\t
\t\theader#site_head {
\t\t\tbackground: url(";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/callendar/images/bck_head.jpg"), "html", null, true);
        echo ");
\t\t}
\t\t.section_tit h3 {
\t\t\tbackground: url(";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/callendar/images/line.png"), "html", null, true);
        echo ") no-repeat center center; 
\t\t}
\t";
        // line 18
        $this->displayBlock('additional_style', $context, $blocks);
        // line 19
        echo "\t
\t</style>

</head>
<body>

\t\t
\t\t<header id=\"site_head\">
\t\t\t<div class=\"header_cont\">
\t\t\t\t<nav class=\"head_nav\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
        // line 30
        $this->displayBlock('adminlinks', $context, $blocks);
        // line 31
        echo "\t\t\t\t\t\t<li class=\"home\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("app_dev.php/user"), "html", null, true);
        echo "\">Home</a></li>
\t\t\t\t\t\t<li class=\"home\"><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("app_dev.php/logout"), "html", null, true);
        echo "\">Logout</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t</div>
\t\t</header>


\t<div id=\"main_content\">
\t\t<section id=\"last_posts\">
\t\t\t<header class=\"section_tit\">
\t\t\t\t";
        // line 42
        $this->displayBlock('title_inside', $context, $blocks);
        // line 43
        echo "\t\t\t</header>

\t\t\t";
        // line 45
        $this->displayBlock('post', $context, $blocks);
        // line 47
        echo "\t\t\t
\t\t
\t\t</section>
\t</div><!--/main_container-->

</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 18
    public function block_additional_style($context, array $blocks = array())
    {
        // line 19
        echo "\t";
    }

    // line 30
    public function block_adminlinks($context, array $blocks = array())
    {
    }

    // line 42
    public function block_title_inside($context, array $blocks = array())
    {
    }

    // line 45
    public function block_post($context, array $blocks = array())
    {
        // line 46
        echo "\t\t\t";
    }

    public function getTemplateName()
    {
        return "AcmeCallendarBundle:Default:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 46,  134 => 45,  129 => 42,  124 => 30,  120 => 19,  58 => 18,  53 => 16,  118 => 62,  81 => 46,  34 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 42,  111 => 37,  107 => 36,  38 => 6,  71 => 38,  177 => 65,  165 => 64,  160 => 61,  139 => 50,  135 => 47,  126 => 66,  114 => 42,  84 => 28,  70 => 20,  67 => 15,  61 => 13,  47 => 13,  87 => 20,  55 => 15,  21 => 2,  35 => 5,  94 => 22,  89 => 20,  85 => 47,  79 => 18,  75 => 31,  72 => 16,  68 => 37,  56 => 9,  50 => 10,  41 => 10,  28 => 3,  24 => 1,  25 => 3,  98 => 31,  93 => 42,  88 => 48,  78 => 21,  46 => 7,  44 => 12,  27 => 4,  43 => 6,  40 => 8,  31 => 4,  29 => 3,  26 => 6,  22 => 2,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 58,  151 => 57,  142 => 59,  138 => 57,  136 => 56,  123 => 65,  121 => 46,  117 => 18,  115 => 61,  105 => 53,  101 => 47,  91 => 31,  69 => 25,  66 => 15,  62 => 23,  49 => 19,  32 => 4,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 36,  112 => 5,  109 => 41,  106 => 33,  103 => 37,  99 => 45,  95 => 43,  92 => 33,  86 => 28,  82 => 22,  80 => 32,  73 => 30,  64 => 14,  60 => 19,  57 => 11,  54 => 10,  51 => 14,  48 => 8,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 5,);
    }
}
