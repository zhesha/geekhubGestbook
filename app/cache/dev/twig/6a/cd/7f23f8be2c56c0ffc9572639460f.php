<?php

/* GeekhubGestbookBundle:Default:edit.html.twig */
class __TwigTemplate_6acd7f23f8be2c56c0ffc9572639460f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("GeekhubGestbookBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GeekhubGestbookBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("geekhub_gestbook_change", array("id" => $this->getAttribute($this->getContext($context, "record"), "id"))), "html", null, true);
        echo "\" method=\"POST\" class=\"addForm\">
        <label for=\"name\">name</label>
        <input type=\"text\" id=\"name\" name=\"name\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "record"), "name"), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "record"), "id"), "html", null, true);
        echo "\">
        <label for=\"email\">email</label>
        <input type=\"email\" id=\"email\" name=\"email\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "record"), "email"), "html", null, true);
        echo "\">
        <input type=\"submit\">
        <br><br>
        <label for=\"body\">body</label>
        <textarea id=\"body\" name=\"body\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "record"), "body"), "html", null, true);
        echo "</textarea>
    </form>
";
    }

    public function getTemplateName()
    {
        return "GeekhubGestbookBundle:Default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 13,  44 => 9,  39 => 7,  35 => 6,  29 => 4,  26 => 3,);
    }
}
