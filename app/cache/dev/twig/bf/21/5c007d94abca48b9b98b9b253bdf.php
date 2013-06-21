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
        return array (  126 => 66,  123 => 65,  118 => 62,  115 => 61,  105 => 53,  95 => 50,  88 => 48,  85 => 47,  81 => 46,  71 => 38,  68 => 37,  34 => 4,  31 => 3,);
    }
}
