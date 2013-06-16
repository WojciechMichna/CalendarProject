<?php

/* AcmeCallendarBundle:Default:getuser.html.twig */
class __TwigTemplate_bf215c007d94abca48b9b98b9b253bdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeCallendarBundle:Default:adminlinks.html.twig");

        $this->blocks = array(
            'additional_style' => array($this, 'block_additional_style'),
            'post' => array($this, 'block_post'),
            'title' => array($this, 'block_title'),
            'title_inside' => array($this, 'block_title_inside'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeCallendarBundle:Default:adminlinks.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_additional_style($context, array $blocks = array())
    {
        // line 4
        echo "#table-3 {
\tborder: 1px solid #DFDFDF;
\tbackground-color: #F9F9F9;
\twidth: 100%;
\t-moz-border-radius: 3px;
\t-webkit-border-radius: 3px;
\tborder-radius: 3px;
\tfont-family: Arial,\"Bitstream Vera Sans\",Helvetica,Verdana,sans-serif;
\tcolor: #333;
}
#table-3 td, #table-3 th {
\tborder-top-color: white;
\tborder-bottom: 1px solid #DFDFDF;
\tcolor: #555;
}
#table-3 th {
\ttext-shadow: rgba(255, 255, 255, 0.796875) 0px 1px 0px;
\tfont-family: Georgia,\"Times New Roman\",\"Bitstream Charter\",Times,serif;
\tfont-weight: normal;
\tpadding: 7px 7px 8px;
\ttext-align: left;
\tline-height: 1.3em;
\tfont-size: 14px;
}
#table-3 td {
\tfont-size: 12px;
\tpadding: 4px 7px 2px;
\tvertical-align: top;
}

";
    }

    // line 37
    public function block_post($context, array $blocks = array())
    {
        // line 38
        echo "<div class=\"single_post\">
\t<article>
\t\t<div class=\"art\">\t\t\t\t
\t\t\t<header class=\"post_head\">
\t\t\t\t<h2>GetUser</h2>\t\t\t\t\t
\t\t\t</header>
\t\t\t\t<table id=\"table-3\">
\t\t\t\t <tbody>
\t\t\t\t";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 47
            echo "\t\t\t\t\t<tr><td>
\t\t\t\t\t\t";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getUsername", array(), "method"), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getPassword", array(), "method"), "html", null, true);
            echo "\t\t\t
\t\t\t\t\t</td><td>
\t\t\t\t\t\t<li><a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("app_dev.php/admin/del/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getID", array(), "method"), "html", null, true);
            echo "\">delete</a></li>
\t\t\t\t\t</td></tr>\t\t\t\t
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 53
        echo "\t\t\t\t</tbody>
\t\t\t\t</table> \t
\t\t\t</div>\t\t\t\t\t\t
\t\t</article>
\t</div>

";
    }

    // line 61
    public function block_title($context, array $blocks = array())
    {
        // line 62
        echo "\tLoginPage
";
    }

    // line 65
    public function block_title_inside($context, array $blocks = array())
    {
        // line 66
        echo "\t<h3>LoginPage</h3>
";
    }

    public function getTemplateName()
    {
        return "AcmeCallendarBundle:Default:getuser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 62,  81 => 46,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 42,  107 => 36,  38 => 6,  71 => 38,  177 => 65,  165 => 64,  160 => 61,  135 => 47,  126 => 66,  114 => 42,  84 => 28,  70 => 20,  67 => 15,  61 => 13,  87 => 20,  21 => 2,  94 => 22,  89 => 20,  85 => 47,  75 => 23,  68 => 37,  56 => 9,  28 => 3,  24 => 3,  25 => 3,  93 => 28,  88 => 48,  78 => 21,  46 => 7,  44 => 12,  27 => 4,  31 => 3,  26 => 6,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 58,  151 => 57,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  117 => 44,  105 => 53,  91 => 31,  62 => 23,  49 => 19,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 42,  123 => 65,  120 => 40,  115 => 61,  111 => 37,  108 => 37,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 6,  41 => 9,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 36,  112 => 42,  109 => 41,  106 => 36,  103 => 37,  99 => 30,  95 => 50,  92 => 33,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 14,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 8,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
