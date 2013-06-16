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
        $context['_seq'] = twig_ensure_traversable((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
            // line 53
            echo "\t\t\t\t\t<tr><td>
\t\t\t\t\t\t";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "getDate", array(), "method"), "html", null, true);
            echo "</td>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t<td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "getNiceEvent", array(), "method"), "html", null, true);
            echo "</td>\t\t\t
\t\t\t\t\t\t  <td><li><a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("app_dev.php/user/del/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "getDate", array(), "method"), "html", null, true);
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
            if (((((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) - (isset($context["start"]) ? $context["start"] : $this->getContext($context, "start"))) > 0) && (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) - (isset($context["start"]) ? $context["start"] : $this->getContext($context, "start"))) <= (isset($context["stop"]) ? $context["stop"] : $this->getContext($context, "stop"))))) {
                echo " 
\t\t\t\t\t      ";
                // line 82
                echo twig_escape_filter($this->env, ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) - (isset($context["start"]) ? $context["start"] : $this->getContext($context, "start"))), "html", null, true);
                echo "
\t\t\t\t\t ";
            }
            // line 84
            echo "\t\t\t\t\t <br>
\t\t\t\t\t ";
            // line 85
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")));
            foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
                // line 86
                echo "\t\t\t\t\t      ";
                if ((((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) - (isset($context["start"]) ? $context["start"] : $this->getContext($context, "start"))) == $this->getAttribute((isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "getDate", array(), "method"))) {
                    // line 87
                    echo "\t\t\t\t\t\t    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "getExploded", array(), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["exploded"]) {
                        // line 88
                        echo "\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, (isset($context["exploded"]) ? $context["exploded"] : $this->getContext($context, "exploded")), "html", null, true);
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
            if ((((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) % 7) == 0)) {
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
        return array (  235 => 114,  232 => 113,  227 => 110,  224 => 109,  213 => 100,  205 => 97,  201 => 95,  199 => 94,  195 => 92,  189 => 91,  186 => 90,  177 => 88,  172 => 87,  169 => 86,  165 => 85,  162 => 84,  157 => 82,  153 => 81,  149 => 79,  145 => 78,  126 => 61,  119 => 59,  110 => 56,  106 => 55,  102 => 54,  99 => 53,  94 => 52,  84 => 44,  81 => 43,  74 => 40,  71 => 39,  35 => 5,  32 => 4,);
    }
}
