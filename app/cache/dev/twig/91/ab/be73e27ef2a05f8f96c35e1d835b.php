<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_91abbe73e27ef2a05f8f96c35e1d835b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    -moz-border-radius: 16px;
    -webkit-border-radius: 16px;
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    -moz-border-radius: 6px;
    -webkit-border-radius: 6px;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  344 => 119,  332 => 116,  327 => 114,  324 => 113,  321 => 112,  318 => 111,  315 => 110,  306 => 107,  303 => 106,  300 => 105,  291 => 102,  288 => 101,  274 => 97,  265 => 96,  263 => 95,  255 => 93,  243 => 92,  231 => 83,  212 => 78,  202 => 77,  190 => 76,  185 => 74,  174 => 65,  191 => 67,  178 => 66,  175 => 65,  161 => 63,  791 => 473,  788 => 472,  777 => 470,  773 => 469,  769 => 467,  756 => 466,  730 => 461,  727 => 460,  708 => 458,  691 => 457,  687 => 455,  683 => 454,  679 => 453,  675 => 452,  671 => 451,  667 => 450,  663 => 449,  660 => 448,  658 => 447,  641 => 446,  630 => 445,  615 => 440,  610 => 438,  606 => 437,  603 => 436,  601 => 435,  587 => 434,  550 => 399,  532 => 396,  515 => 395,  512 => 394,  510 => 393,  505 => 391,  500 => 389,  244 => 136,  188 => 90,  170 => 84,  20 => 1,  348 => 322,  346 => 321,  343 => 320,  299 => 278,  297 => 104,  113 => 48,  104 => 32,  100 => 39,  77 => 25,  65 => 11,  127 => 28,  97 => 41,  76 => 31,  63 => 18,  90 => 42,  232 => 113,  227 => 110,  213 => 100,  205 => 97,  201 => 95,  195 => 92,  186 => 90,  172 => 64,  153 => 77,  110 => 22,  102 => 40,  59 => 22,  137 => 46,  134 => 54,  129 => 42,  124 => 30,  58 => 14,  53 => 15,  118 => 49,  81 => 43,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 332,  355 => 106,  341 => 118,  337 => 103,  322 => 101,  314 => 99,  312 => 109,  309 => 108,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 100,  278 => 98,  268 => 85,  264 => 84,  258 => 94,  252 => 80,  247 => 78,  241 => 77,  235 => 85,  229 => 73,  224 => 81,  220 => 70,  214 => 69,  208 => 68,  169 => 86,  143 => 51,  140 => 58,  132 => 51,  128 => 49,  119 => 40,  107 => 36,  38 => 7,  71 => 23,  177 => 88,  165 => 83,  160 => 61,  135 => 62,  126 => 61,  114 => 42,  84 => 40,  70 => 24,  67 => 24,  61 => 15,  87 => 34,  21 => 2,  94 => 34,  89 => 30,  85 => 24,  75 => 19,  68 => 30,  56 => 11,  28 => 3,  24 => 3,  25 => 35,  93 => 38,  88 => 25,  78 => 18,  46 => 10,  44 => 9,  27 => 3,  31 => 4,  26 => 6,  196 => 92,  183 => 70,  171 => 61,  166 => 71,  163 => 82,  158 => 62,  156 => 62,  151 => 59,  142 => 59,  138 => 57,  136 => 48,  121 => 50,  117 => 39,  105 => 18,  91 => 33,  62 => 27,  49 => 11,  19 => 1,  79 => 21,  72 => 18,  69 => 17,  47 => 21,  40 => 8,  37 => 7,  22 => 2,  246 => 32,  157 => 82,  145 => 52,  139 => 49,  131 => 45,  123 => 61,  120 => 20,  115 => 61,  111 => 47,  108 => 47,  101 => 31,  98 => 30,  96 => 37,  83 => 33,  74 => 27,  66 => 25,  55 => 13,  52 => 12,  50 => 22,  43 => 12,  41 => 8,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 78,  199 => 93,  193 => 73,  189 => 91,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 66,  164 => 59,  162 => 84,  154 => 60,  149 => 79,  147 => 75,  144 => 53,  141 => 73,  133 => 55,  130 => 41,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 35,  106 => 51,  103 => 37,  99 => 53,  95 => 39,  92 => 27,  86 => 28,  82 => 28,  80 => 32,  73 => 33,  64 => 23,  60 => 20,  57 => 20,  54 => 19,  51 => 37,  48 => 16,  45 => 9,  42 => 11,  39 => 6,  36 => 5,  33 => 4,  30 => 5,);
    }
}
