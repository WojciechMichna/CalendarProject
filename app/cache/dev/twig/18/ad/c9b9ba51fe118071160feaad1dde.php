<?php

/* AcmeCallendarBundle:Default:createevent.html.twig */
class __TwigTemplate_18adc9b9ba51fe118071160feaad1dde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeCallendarBundle:Default:home.html.twig");

        $this->blocks = array(
            'adminlinks' => array($this, 'block_adminlinks'),
            'post' => array($this, 'block_post'),
            'title' => array($this, 'block_title'),
            'title_inside' => array($this, 'block_title_inside'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeCallendarBundle:Default:home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_adminlinks($context, array $blocks = array())
    {
        // line 5
        echo "      <li class=\"home\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("app_dev.php/user/new"), "html", null, true);
        echo "\">New Event</a></li>
";
    }

    // line 9
    public function block_post($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"single_post\">
\t<article>
\t\t<div class=\"art\">\t\t\t\t
\t\t\t<header class=\"post_head\">
\t\t\t\t<h2>AddEvent</h2>\t\t\t\t\t
\t\t\t</header>
\t\t\t\t<form action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_new"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t\t\t    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t\t    <input type=\"submit\" />
\t\t\t\t</form>
\t\t\t</div>\t\t\t\t\t\t
\t\t</article>
\t</div>

";
    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        // line 27
        echo "\tLoginPage
";
    }

    // line 30
    public function block_title_inside($context, array $blocks = array())
    {
        // line 31
        echo "\t<h3>LoginPage</h3>
";
    }

    public function getTemplateName()
    {
        return "AcmeCallendarBundle:Default:createevent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 31,  78 => 30,  73 => 27,  70 => 26,  58 => 17,  52 => 16,  44 => 10,  41 => 9,  34 => 5,  31 => 4,);
    }
}
