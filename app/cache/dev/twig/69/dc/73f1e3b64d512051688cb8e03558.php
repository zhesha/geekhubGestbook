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
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
        <input type=\"submit\">
    </form>

    ";
        // line 19
        echo "    <div style=\"height: 500px; overflow: auto;\">
        ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "records"));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 21
            echo "            <div style=\"border-top: 1px solid black;\">
                ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "record"), "name"), "html", null, true);
            echo "
                <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("geekhub_gestbook_edit", array("id" => $this->getAttribute($this->getContext($context, "record"), "id"))), "html", null, true);
            echo "\">edit</a>
                <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("geekhub_gestbook_del", array("id" => $this->getAttribute($this->getContext($context, "record"), "id"))), "html", null, true);
            echo "\" onclick=\"if(confirm('do you realy want delete it?')){return true} else {return false}\">delete</a>
                <br>
                ";
            // line 26
            if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "record"), "body")) > 10)) {
                // line 27
                echo "                    ";
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getContext($context, "record"), "body"), 0, 10), "html", null, true);
                echo "...
                ";
            } else {
                // line 29
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "record"), "body"), "html", null, true);
                echo "
                ";
            }
            // line 31
            echo "                <br>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 34
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
        return array (  88 => 34,  80 => 31,  74 => 29,  68 => 27,  66 => 26,  61 => 24,  57 => 23,  53 => 22,  50 => 21,  46 => 20,  43 => 19,  36 => 5,  29 => 4,  26 => 3,);
    }
}
