<?php

/* flash/danger.twig */
class __TwigTemplate_d9417cdec035424685a938fbc96bf7bdf7427135061bacf785df72b8db3bcbb3 extends Twig_Template
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
        if ($this->env->getExtension('Knlv\Slim\Views\TwigMessages')->getMessages("danger")) {
            // line 2
            echo "<div class=\"alert alert-danger alert-dismissible\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
  ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Knlv\Slim\Views\TwigMessages')->getMessages("danger"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 5
                echo "  ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "flash/danger.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if flash('danger') %}
<div class=\"alert alert-danger alert-dismissible\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
  {% for msg in flash('danger') %}
  {{ msg }}
  {% endfor %}
</div>
{% endif %}
", "flash/danger.twig", "/var/www/html/slim3-skeleton/app/templates/flash/danger.twig");
    }
}