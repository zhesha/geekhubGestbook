<?php

/* GeekhubGestbookBundle::layout.html.twig */
class __TwigTemplate_0f4b4d4ebe572871955df1d06dfa354d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/geekhubgestbook/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/geekhubgestbook/bootstrap/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
    <style type=\"text/css\">
            /*html, body{
                height: 100%;
            }*/
        .body{
            /*height: 100%;*/
            padding: 80px 0;
        }
        .addForm{
            padding: 10px 0;
        }
        .addForm [type=\"text\"], .addForm [type=\"email\"]{
            width: 100px;
            vertical-align: top;
        }
        .addForm [type=\"submit\"]{
            vertical-align: top;
        }
        .addForm textarea{
            vertical-align: top;
            width: 385px;
        }
        label{
            display: inline;
        }
    </style>
</head>
<body>
<div class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"navbar-inner\">
        <div class=\"container\">
            HEADER
        </div>
    </div>
</div>

";
        // line 50
        echo "<div class=\"body container\">
    ";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "</div>

<div class=\"navbar navbar-inverse navbar-fixed-bottom\">
    <div class=\"navbar-inner\">
        <div class=\"container\">
            FOOTER
        </div>
    </div>
</div>

";
        // line 66
        $this->displayBlock('javascripts', $context, $blocks);
        // line 67
        echo "</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "GeekhubGestbookBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 66,  117 => 51,  112 => 6,  106 => 5,  101 => 67,  99 => 66,  87 => 52,  85 => 51,  82 => 50,  42 => 9,  38 => 8,  33 => 7,  31 => 6,  27 => 5,  21 => 1,);
    }
}
