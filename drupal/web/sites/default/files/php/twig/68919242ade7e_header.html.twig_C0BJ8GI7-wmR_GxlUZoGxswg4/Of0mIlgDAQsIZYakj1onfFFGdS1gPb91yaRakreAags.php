<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @kart/parts/header/header.html.twig */
class __TwigTemplate_737400f6c581fd1e263e9e55300cf0a5 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<header class=\"header full-width\">
  ";
        // line 2
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top", [], "any", false, false, true, 2)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            yield "    <div class=\"header-top full-width\">
      <div class=\"container\">
        <div class=\"header-top-blocks full-width\">
          ";
            // line 6
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top", [], "any", false, false, true, 6), "html", null, true);
            yield "
        </div>
      </div>
    </div>
  ";
        }
        // line 11
        yield "  <div class=\"header-main full-width\">
    <div class=\"container\">
      <div class=\"header-main-container full-width\">
        ";
        // line 14
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "site_branding", [], "any", false, false, true, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "          <div class=\"site-branding-region\">
            ";
            // line 16
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "site_branding", [], "any", false, false, true, 16), "html", null, true);
            yield "
          </div> <!--/.site-branding -->
        ";
        }
        // line 19
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "search_box", [], "any", false, false, true, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 20
            yield "          <div class=\"header-search\">
            ";
            // line 21
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "search_box", [], "any", false, false, true, 21), "html", null, true);
            yield "
          </div>
        ";
        }
        // line 24
        yield "        <div class=\"header-right\">
          ";
        // line 25
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "            ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 26), "html", null, true);
            yield "
          ";
        }
        // line 28
        yield "          ";
        yield from $this->load("@kart/parts/header/user-menu.html.twig", 28)->unwrap()->yield($context);
        // line 29
        yield "          ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 30
            yield "            <div class=\"mobile-menu-icon\">
              <span></span>
              <span></span>
              <span></span>
            </div>
          ";
        }
        // line 36
        yield "        </div>";
        // line 37
        yield "      </div><!--/header-main-container -->
    </div><!--/container-->
  </div><!--/header-main-->
  ";
        // line 40
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "  <div class=\"header-menu full-width\">
    <div class=\"container\">
      <div class=\"primary-menu-wrapper\">
        <div class=\"menu-wrap\">
          <div class=\"close-mobile-menu\" aria-label=\"close menu\" ><i class=\"bi bi-x\"></i></div>
          ";
            // line 46
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 46), "html", null, true);
            yield "
         </div>";
            // line 48
            yield "      </div>";
            // line 49
            yield "    </div>";
            // line 50
            yield "  </div>";
            // line 51
            yield "  ";
        }
        yield "    
</header>
";
        // line 53
        if ((($tmp =  !($context["is_front"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 54
            yield "  <div class=\"page-header\">
    <div class=\"container\">
      ";
            // line 56
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "page_header", [], "any", false, false, true, 56), "html", null, true);
            yield "
    </div>
  </div>
";
        }
        // line 60
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 60)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 61
            yield "  ";
            yield from $this->load("@kart/parts/header/hero.html.twig", 61)->unwrap()->yield($context);
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "is_front"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@kart/parts/header/header.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  162 => 61,  160 => 60,  153 => 56,  149 => 54,  147 => 53,  141 => 51,  139 => 50,  137 => 49,  135 => 48,  131 => 46,  124 => 41,  122 => 40,  117 => 37,  115 => 36,  107 => 30,  104 => 29,  101 => 28,  95 => 26,  93 => 25,  90 => 24,  84 => 21,  81 => 20,  78 => 19,  72 => 16,  69 => 15,  67 => 14,  62 => 11,  54 => 6,  49 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@kart/parts/header/header.html.twig", "/var/www/html/web/themes/contrib/kart/templates/parts/header/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 2, "include" => 28];
        static $filters = ["escape" => 6];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['escape'],
                [],
                $this->source
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
