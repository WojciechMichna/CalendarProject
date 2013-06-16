<?php

/* AcmeCallendarBundle:Default:getdates.html.twig */
class __TwigTemplate_26755eb998d2a874a171640b86cbcf34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeCallendarBundle:Default:home.html.twig");

        $this->blocks = array(
            'additional_style' => array($this, 'block_additional_style'),
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
    public function block_additional_style($context, array $blocks = array())
    {
        // line 5
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
\twidth: 35px;
\theight: 35px;
}

";
    }

    // line 39
    public function block_adminlinks($context, array $blocks = array())
    {
        // line 40
        echo "      <li class=\"home\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("app_dev.php/user/new"), "html", null, true);
        echo "\">New Event</a></li>
";
    }

    // line 43
    public function block_post($context, array $blocks = array())
    {
        // line 44
        echo "<div class=\"single_post\">
\t<article>
\t\t<div class=\"art\">\t\t\t\t
\t\t\t<header class=\"post_head\">
\t\t\t\t<h2>Dates:</h2>\t\t\t\t\t
\t\t\t</header>
\t\t\t\t<table id=\"table-3\">
\t\t\t\t <tbody>
\t\t\t\t";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dates"]) ? $context["dates"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
            // line 53
            echo "\t\t\t\t\t<tr><td>
\t\t\t\t\t\t";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["date"]) ? $context["date"] : null), "getDate", array(), "method"), "html", null, true);
            echo "</td>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t<td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["date"]) ? $context["date"] : null), "getNiceEvent", array(), "method"), "html", null, true);
            echo "</td>\t\t\t
\t\t\t\t\t\t  <td><li><a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("app_dev.php/user/del/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["date"]) ? $context["date"] : null), "getDate", array(), "method"), "html", null, true);
            echo "\">delete</a></li></td>
\t\t\t\t\t</tr>\t\t\t\t
\t\t\t      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 59
            echo "\t\t\t\t    <li>No Events</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 61
        echo "\t\t\t\t</tbody>
\t\t\t\t</table> \t
\t\t\t</div>\t\t\t\t\t\t
\t\t</article>
\t</div>

\t

<div class=\"single_post\">
\t<article>
\t\t<div class=\"art\">\t\t\t\t
\t\t\t<header class=\"post_head\">
\t\t\t\t<h2>Monthyly Events</h2>\t\t\t\t\t
\t\t\t</header>
\t\t\t\t<table id=\"table-3\">
\t\t\t\t <tbody>
\t\t\t\t <tr>
\t\t\t\t";
        // line 78
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 79
            echo "\t\t\t\t
\t\t\t\t\t<td>
\t\t\t\t\t";
            // line 81
            if (((((isset($context["i"]) ? $context["i"] : null) - (isset($context["start"]) ? $context["start"] : null)) > 0) && (((isset($context["i"]) ? $context["i"] : null) - (isset($context["start"]) ? $context["start"] : null)) <= (isset($context["stop"]) ? $context["stop"] : null)))) {
                echo " 
\t\t\t\t\t      ";
                // line 82
                echo twig_escape_filter($this->env, ((isset($context["i"]) ? $context["i"] : null) - (isset($context["start"]) ? $context["start"] : null)), "html", null, true);
                echo "
\t\t\t\t\t ";
            }
            // line 84
            echo "\t\t\t\t\t <br>
\t\t\t\t\t ";
            // line 85
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dates"]) ? $context["dates"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
                // line 86
                echo "\t\t\t\t\t      ";
                if ((((isset($context["i"]) ? $context["i"] : null) - (isset($context["start"]) ? $context["start"] : null)) == $this->getAttribute((isset($context["date"]) ? $context["date"] : null), "getDate", array(), "method"))) {
                    // line 87
                    echo "\t\t\t\t\t\t    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["date"]) ? $context["date"] : null), "getExploded", array(), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["exploded"]) {
                        // line 88
                        echo "\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, (isset($context["exploded"]) ? $context["exploded"] : null), "html", null, true);
                        echo "<br>
\t\t\t\t\t\t    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exploded'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 90
                    echo "\t\t\t\t\t      ";
                }
                // line 91
                echo "\t\t\t\t\t ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 92
            echo "\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t\t";
            // line 94
            if ((((isset($context["i"]) ? $context["i"] : null) % 7) == 0)) {
                // line 95
                echo "\t\t\t\t\t  </tr><tr>
\t\t\t\t\t";
            }
            // line 97
            echo "\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 100
        echo "\t\t\t\t</tr>\t
\t\t\t\t</tbody>
\t\t\t\t</table> \t
\t\t\t</div>\t\t\t\t\t\t
\t\t</article>
\t</div>

";
    }

    // line 109
    public function block_title($context, array $blocks = array())
    {
        // line 110
        echo "\tLoginPage
";
    }

    // line 113
    public function block_title_inside($context, array $blocks = array())
    {
        // line 114
        echo "\t<h3>LoginPage</h3>
";
    }

    public function getTemplateName()
    {
        return "AcmeCallendarBundle:Default:getdates.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 113,  227 => 110,  213 => 100,  205 => 97,  201 => 95,  195 => 92,  186 => 90,  172 => 87,  157 => 82,  153 => 81,  145 => 78,  110 => 56,  102 => 54,  74 => 40,  59 => 22,  52 => 16,  137 => 46,  134 => 45,  129 => 42,  124 => 30,  120 => 19,  58 => 17,  53 => 16,  118 => 62,  81 => 43,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 114,  229 => 73,  224 => 109,  220 => 70,  214 => 69,  208 => 68,  169 => 86,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 59,  111 => 37,  107 => 36,  38 => 6,  71 => 39,  177 => 88,  165 => 85,  160 => 61,  139 => 50,  135 => 47,  126 => 61,  114 => 42,  84 => 44,  70 => 26,  67 => 15,  61 => 13,  47 => 13,  87 => 20,  55 => 15,  21 => 2,  35 => 5,  94 => 52,  89 => 20,  85 => 47,  79 => 18,  75 => 31,  72 => 16,  68 => 37,  56 => 9,  50 => 10,  41 => 11,  28 => 3,  24 => 1,  25 => 3,  98 => 31,  93 => 42,  88 => 48,  78 => 30,  46 => 7,  44 => 10,  27 => 4,  43 => 6,  40 => 8,  31 => 4,  29 => 3,  26 => 6,  22 => 2,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 58,  151 => 57,  142 => 59,  138 => 57,  136 => 56,  123 => 65,  121 => 46,  117 => 18,  115 => 61,  105 => 53,  101 => 47,  91 => 31,  69 => 25,  66 => 15,  62 => 23,  49 => 19,  32 => 4,  19 => 1,  209 => 82,  203 => 78,  199 => 94,  193 => 73,  189 => 91,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 84,  154 => 54,  149 => 79,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 36,  112 => 5,  109 => 41,  106 => 55,  103 => 37,  99 => 53,  95 => 43,  92 => 33,  86 => 28,  82 => 22,  80 => 32,  73 => 27,  64 => 14,  60 => 19,  57 => 11,  54 => 19,  51 => 18,  48 => 8,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 5,  30 => 4,);
    }
}
