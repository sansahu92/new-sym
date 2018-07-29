<?php

/* configurator_items/index.html.twig */
class __TwigTemplate_2ff07735c869c7181dced9416933d57f6024b02634abd205777e11aeb935d1da extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "configurator_items/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "configurator_items/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "configurator_items/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hello!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
<div class=\"form-group row col-md-12\">
<div class=\"col-md-8\">
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["configurator_items"]) || array_key_exists("configurator_items", $context) ? $context["configurator_items"] : (function () { throw new Twig_Error_Runtime('Variable "configurator_items" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
            // line 13
            if ((twig_get_attribute($this->env, $this->source, $context["items"], "type", array()) == "select")) {
                // line 14
                echo "<div class=\"form-group row\">
  <label class=\"col-sm-2 col-form-label\">";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["items"], "name", array()), "html", null, true);
                echo "</label>
  <div class=\"col-md-3\">
  <select class=\"form-control ";
                // line 17
                if ((twig_get_attribute($this->env, $this->source, $context["items"], "name", array()) == "Colour")) {
                    echo "colourAttr";
                }
                echo "\" name=\"profile\" id=\"FormControlSelect-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["items"], "id", array()), "html", null, true);
                echo "\">
  ";
                // line 18
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["configurator_items_all"]) || array_key_exists("configurator_items_all", $context) ? $context["configurator_items_all"] : (function () { throw new Twig_Error_Runtime('Variable "configurator_items_all" does not exist.', 18, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["itemsAll"]) {
                    // line 19
                    echo "    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["itemsAll"], "configuratorItemId", array()) == twig_get_attribute($this->env, $this->source, $context["items"], "id", array()))) {
                        // line 20
                        echo "    <option ";
                        if ((twig_get_attribute($this->env, $this->source, $context["items"], "name", array()) == "Colour")) {
                            echo "data-color=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itemsAll"], "colour", array()), "html", null, true);
                            echo "\"";
                        }
                        echo " value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itemsAll"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itemsAll"], "name", array()), "html", null, true);
                        echo "</option>
    ";
                    }
                    // line 22
                    echo "  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemsAll'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "  </select>
  </div>
</div>
";
            }
            // line 27
            if ((twig_get_attribute($this->env, $this->source, $context["items"], "type", array()) == "select hidden")) {
                // line 28
                echo "<div class=\"form-group row d-none\">
  <label class=\"col-sm-2 col-form-label\">";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["items"], "name", array()), "html", null, true);
                echo "</label>
  <div class=\"col-md-3\">
  <select class=\"form-control\" name=\"profile\" id=\"FormControlSelectHidden-";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["items"], "id", array()), "html", null, true);
                echo "\">
  ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["configurator_items_all"]) || array_key_exists("configurator_items_all", $context) ? $context["configurator_items_all"] : (function () { throw new Twig_Error_Runtime('Variable "configurator_items_all" does not exist.', 32, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["itemsAll"]) {
                    // line 33
                    echo "    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["itemsAll"], "configuratorItemId", array()) == twig_get_attribute($this->env, $this->source, $context["items"], "id", array()))) {
                        // line 34
                        echo "    <option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itemsAll"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itemsAll"], "name", array()), "html", null, true);
                        echo "</option>
    ";
                    }
                    // line 36
                    echo "  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemsAll'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "  </select>
  </div>
</div>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
</div>
  <div class=\"col-md-4\">
    <div id=\"colour-box\" style=\"background:#fff;border:3px solid #000;height:300px;width:300px:margin:auto;\" class=\"square-box\">

    </div>
  </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "configurator_items/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 42,  170 => 37,  164 => 36,  156 => 34,  153 => 33,  149 => 32,  145 => 31,  140 => 29,  137 => 28,  135 => 27,  129 => 23,  123 => 22,  109 => 20,  106 => 19,  102 => 18,  94 => 17,  89 => 15,  86 => 14,  84 => 13,  80 => 12,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Hello!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
<div class=\"form-group row col-md-12\">
<div class=\"col-md-8\">
{% for items in configurator_items %}
{% if(items.type=='select')%}
<div class=\"form-group row\">
  <label class=\"col-sm-2 col-form-label\">{{ items.name}}</label>
  <div class=\"col-md-3\">
  <select class=\"form-control {%if(items.name=='Colour')%}colourAttr{% endif %}\" name=\"profile\" id=\"FormControlSelect-{{items.id}}\">
  {% for itemsAll in configurator_items_all %}
    {% if(itemsAll.configuratorItemId==items.id)%}
    <option {%if(items.name=='Colour')%}data-color=\"{{itemsAll.colour}}\"{% endif %} value=\"{{itemsAll.id}}\">{{itemsAll.name}}</option>
    {% endif %}
  {% endfor %}
  </select>
  </div>
</div>
{% endif %}
{% if(items.type=='select hidden')%}
<div class=\"form-group row d-none\">
  <label class=\"col-sm-2 col-form-label\">{{ items.name}}</label>
  <div class=\"col-md-3\">
  <select class=\"form-control\" name=\"profile\" id=\"FormControlSelectHidden-{{items.id}}\">
  {% for itemsAll in configurator_items_all %}
    {% if(itemsAll.configuratorItemId==items.id)%}
    <option value=\"{{itemsAll.id}}\">{{itemsAll.name}}</option>
    {% endif %}
  {% endfor %}
  </select>
  </div>
</div>
{% endif %}
{% endfor %}

</div>
  <div class=\"col-md-4\">
    <div id=\"colour-box\" style=\"background:#fff;border:3px solid #000;height:300px;width:300px:margin:auto;\" class=\"square-box\">

    </div>
  </div>
</div>

{% endblock %}
", "configurator_items/index.html.twig", "/var/www/html/new-sym/templates/configurator_items/index.html.twig");
    }
}
