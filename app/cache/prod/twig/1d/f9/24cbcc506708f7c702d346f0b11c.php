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
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 6
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message"), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
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
        return array (  90 => 41,  37 => 5,  232 => 113,  227 => 110,  213 => 100,  205 => 97,  201 => 95,  195 => 92,  186 => 90,  172 => 87,  157 => 82,  153 => 81,  145 => 78,  110 => 56,  102 => 54,  74 => 40,  59 => 20,  52 => 16,  137 => 46,  134 => 45,  129 => 42,  124 => 30,  120 => 19,  58 => 17,  53 => 16,  118 => 62,  81 => 43,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 114,  229 => 73,  224 => 109,  220 => 70,  214 => 69,  208 => 68,  169 => 86,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 59,  111 => 37,  107 => 36,  38 => 6,  71 => 39,  177 => 88,  165 => 85,  160 => 61,  139 => 50,  135 => 47,  126 => 61,  114 => 42,  84 => 44,  70 => 25,  67 => 24,  61 => 13,  47 => 11,  87 => 40,  55 => 15,  21 => 2,  35 => 5,  94 => 52,  89 => 20,  85 => 47,  79 => 36,  75 => 31,  72 => 16,  68 => 27,  56 => 9,  50 => 10,  41 => 10,  28 => 3,  24 => 1,  25 => 3,  98 => 31,  93 => 42,  88 => 48,  78 => 30,  46 => 7,  44 => 10,  27 => 4,  43 => 6,  40 => 8,  31 => 4,  29 => 3,  26 => 6,  22 => 2,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 58,  151 => 57,  142 => 59,  138 => 57,  136 => 56,  123 => 65,  121 => 46,  117 => 18,  115 => 61,  105 => 53,  101 => 47,  91 => 31,  69 => 25,  66 => 15,  62 => 21,  49 => 19,  32 => 4,  19 => 1,  209 => 82,  203 => 78,  199 => 94,  193 => 73,  189 => 91,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 84,  154 => 54,  149 => 79,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 36,  112 => 5,  109 => 41,  106 => 55,  103 => 37,  99 => 53,  95 => 43,  92 => 33,  86 => 28,  82 => 37,  80 => 32,  73 => 27,  64 => 14,  60 => 18,  57 => 11,  54 => 15,  51 => 18,  48 => 8,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 3,  30 => 2,);
    }
}
