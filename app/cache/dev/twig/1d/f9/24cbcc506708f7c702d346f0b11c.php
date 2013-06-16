<?php

/* AcmeSecurityBundle:Security:login.html.twig */
class __TwigTemplate_1df924cbcc506708f7c702d346f0b11c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeCallendarBundle:Default:home.html.twig");

        $this->blocks = array(
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

    // line 2
    public function block_post($context, array $blocks = array())
    {
        // line 3
        echo "

";
        // line 5
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
";
        }
        // line 8
        echo "
<div class=\"single_post\">
\t<article>
\t\t<div class=\"art\">\t\t\t\t
\t\t\t<header class=\"post_head\">
\t\t\t\t<h2>Login</h2>\t\t\t\t\t
\t\t\t</header>
\t\t\t\t<form action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_check"), "html", null, true);
        echo "\" method=\"post\">
\t\t\t\t<p>
\t\t\t\t    <label for=\"username\">Username:</label>
\t\t\t\t    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
\t\t\t\t</p><p>\t
\t\t\t\t    <label for=\"password\">Password:</label>
\t\t\t\t    <input type=\"password\" id=\"password\" name=\"_password\" />
\t\t\t\t
\t\t\t\t    ";
        // line 27
        echo "\t\t\t\t</p>
\t\t\t\t    <button type=\"submit\">login</button>
\t\t\t\t</form>
\t\t\t</div>\t\t\t\t\t\t
\t\t</article>
\t</div>

";
    }

    // line 36
    public function block_title($context, array $blocks = array())
    {
        // line 37
        echo "\tLoginPage
";
    }

    // line 40
    public function block_title_inside($context, array $blocks = array())
    {
        // line 41
        echo "\t<h3>LoginPage</h3>
";
    }

    public function getTemplateName()
    {
        return "AcmeSecurityBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 41,  87 => 40,  82 => 37,  79 => 36,  68 => 27,  60 => 18,  54 => 15,  45 => 8,  39 => 6,  37 => 5,  33 => 3,  30 => 2,);
    }
}
