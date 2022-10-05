<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @tara/template-parts/slider.html.twig */
class __TwigTemplate_1826e6146033dfc03b6258cfab7359050dac569705959643485fe4ec04c32e50 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("tara/slider"), "html", null, true);
        echo "
<section id=\"slider\">
  <div class=\"container\">
    <div class=\"testing\">MrJay's 7 feelings</div><div>Testing</div>
    <ul class=\"owl-carousel home-slider\">
      ";
        // line 6
        if ((($context["slider_code"] ?? null) != "")) {
            // line 7
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_striptags($this->sandbox->ensureToStringAllowed(($context["slider_code"] ?? null), 7, $this->source), "<ol>,<ul>,<li>,<p>,<a>,<img>,<video>,<h1>,<h2>,<h3>,<h4>,<h5>,<h6>,<em>,<strong>,<br>,<i>,<div>,<span>,<button>"));
            echo "
      ";
        } else {
            // line 9
            echo "      <li>
        <h1>Love</h1>
        <p>MrJay's Lovey Dovey-ness</p>
        <br />
        <a class=\"button\" href=\"#\">read more</a>
      </li>

      <li>
        <h1>Hungry</h1>
        <p>Keep your food away from me!</p>
        <br />
        <a class=\"button\" href=\"#\">read more</a>
      </li>

      <li>
        <h1>Greed</h1>
        <p>More is just not enough!</p>
        <br />
        <a class=\"button\" href=\"#\">read more</a>
      </li>

      <li>
        <h1>Lazy</h1>
        <p>I am so lazy</p>
        <br />
        <p>I will automate my work soon.</p>
        <br />
        <a class=\"button\" href=\"#\">read more</a>
      </li>

      <li>
        <h1>Anger</h1>
        <p>You don't want that!</p>
        <br />
        <a class=\"button\" href=\"#\">read more</a>
      </li>
      <li>
        <h1>Envy</h1>
        <p>I envy your code</p>
        <br />
        <p>I will fork it later!</p>
        <br />
        <a class=\"button\" href=\"#\">read more</a>
      </li>
      <li>
        <h1>Proud</h1>
        <p>I am different! Proud of it!</p> 
        <br />
        <a class=\"button\" href=\"#\">read more</a>
      </li>
    
      
      ";
        }
        // line 62
        echo "    </ul> <!--/.home-slider -->
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "@tara/template-parts/slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 62,  55 => 9,  49 => 7,  47 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@tara/template-parts/slider.html.twig", "/app/themes/contrib/tara/templates/template-parts/slider.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 6);
        static $filters = array("escape" => 1, "raw" => 7, "striptags" => 7);
        static $functions = array("attach_library" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'raw', 'striptags'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
