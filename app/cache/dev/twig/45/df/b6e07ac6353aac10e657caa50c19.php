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
        return array (  137 => 46,  134 => 45,  129 => 42,  124 => 30,  120 => 19,  117 => 18,  112 => 5,  101 => 47,  99 => 45,  95 => 43,  93 => 42,  80 => 32,  75 => 31,  73 => 30,  58 => 18,  53 => 16,  47 => 13,  41 => 10,  34 => 6,  24 => 1,  90 => 41,  87 => 40,  82 => 37,  79 => 36,  68 => 27,  60 => 19,  54 => 15,  45 => 8,  39 => 6,  37 => 5,  33 => 3,  30 => 5,);
    }
}
