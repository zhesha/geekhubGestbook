<?php

/* GeekhubGestbookBundle:Default:index.html.twig */
class __TwigTemplate_69dc73f1e3b64d512051688cb8e03558 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("geekhub_gestbook_add"), "html", null, true);
        echo "\" method=\"POST\" class=\"addForm\">
        <label for=\"name\">name</label>
        <input type=\"text\" id=\"name\" name=\"name\">
        <label for=\"email\">email</label>
        <input type=\"email\" id=\"email\" name=\"email\">
        <input type=\"submit\" class=\"btn\">
        <br><br>
        <label for=\"body\">body</label>
        <textarea id=\"body\" name=\"body\"></textarea>
    </form>
    <div style=\"height: 500px; overflow: auto;\">
        ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "records"));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 16
            echo "            <div style=\"border-top: 1px solid black;\">
                ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "record"), "name"), "html", null, true);
            echo "
                <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("geekhub_gestbook_edit", array("id" => $this->getAttribute($this->getContext($context, "record"), "id"))), "html", null, true);
            echo "\">edit</a>
                <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("geekhub_gestbook_del", array("id" => $this->getAttribute($this->getContext($context, "record"), "id"))), "html", null, true);
            echo "\" onclick=\"if(confirm('do you realy want delete it?')){return true} else {return false}\">delete</a>
                <br>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 23
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "GeekhubGestbookBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 23,  59 => 19,  55 => 18,  51 => 17,  48 => 16,  44 => 15,  29 => 4,  26 => 3,);
    }
}
