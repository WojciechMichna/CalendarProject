<?php

/* AcmeCallendarBundle:Default:adminlinks.html.twig */
class __TwigTemplate_4f0c36462d820429f62d2e6dd53fb11d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeCallendarBundle:Default:home.html.twig");

        $this->blocks = array(
            'adminlinks' => array($this, 'block_adminlinks'),
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

    // line 3
    public function block_adminlinks($context, array $blocks = array())
    {
        // line 4
        echo "\t\t\t\t\t\t<li class=\"home\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("app_dev.php/admin/user_new/"), "html", null, true);
        echo "\">AddUser</a></li>
\t\t\t\t\t\t<li class=\"home\"><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("app_dev.php/admin/user_get/"), "html", null, true);
        echo "\">Users</a></li>
";
    }

    public function getTemplateName()
    {
        return "AcmeCallendarBundle:Default:adminlinks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  28 => 3,  126 => 66,  123 => 65,  118 => 62,  115 => 61,  105 => 53,  95 => 50,  88 => 48,  85 => 47,  81 => 46,  71 => 38,  68 => 37,  34 => 4,  31 => 4,);
    }
}
