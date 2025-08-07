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

/* themes/contrib/kart/templates/layout/page.html.twig */
class __TwigTemplate_1ca21ee307d8036a3ae409855f082b3f extends Template
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
        // line 34
        yield from $this->load("@kart/parts/header/header.html.twig", 34)->unwrap()->yield($context);
        // line 35
        yield from $this->load("@kart/parts/highlighted.html.twig", 35)->unwrap()->yield($context);
        // line 36
        yield "<div id=\"main-wrapper\" class=\"main-wrapper\">
  <div class=\"container\">
    <div class=\"main-container\">
      <main id=\"main\" class=\"main\">
        <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 41
        yield "        ";
        if ((($context["is_front"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_home", [], "any", false, false, true, 41))) {
            // line 42
            yield "          ";
            yield from $this->load("@kart/parts/content/content_home.html.twig", 42)->unwrap()->yield($context);
            // line 43
            yield "        ";
        }
        // line 44
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 45
            yield "          ";
            yield from $this->load("@kart/parts/content/content_top.html.twig", 45)->unwrap()->yield($context);
            // line 46
            yield "        ";
        }
        // line 47
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 47), "html", null, true);
        yield "
        ";
        // line 48
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 49
            yield "          ";
            yield from $this->load("@kart/parts/content/content_bottom.html.twig", 49)->unwrap()->yield($context);
            // line 50
            yield "        ";
        }
        // line 51
        yield "      </main>
      ";
        // line 52
        yield from $this->load("@kart/parts/sidebar/sidebar-left.html.twig", 52)->unwrap()->yield($context);
        // line 53
        yield "      ";
        yield from $this->load("@kart/parts/sidebar/sidebar-right.html.twig", 53)->unwrap()->yield($context);
        // line 54
        yield "    </div> ";
        // line 55
        yield "  </div> ";
        // line 56
        yield "</div>";
        // line 57
        yield from $this->load("@kart/parts/footer.html.twig", 57)->unwrap()->yield($context);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["is_front", "page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/kart/templates/layout/page.html.twig";
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
        return array (  99 => 57,  97 => 56,  95 => 55,  93 => 54,  90 => 53,  88 => 52,  85 => 51,  82 => 50,  79 => 49,  77 => 48,  72 => 47,  69 => 46,  66 => 45,  63 => 44,  60 => 43,  57 => 42,  54 => 41,  48 => 36,  46 => 35,  44 => 34,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/kart/templates/layout/page.html.twig", "/var/www/html/web/themes/contrib/kart/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["include" => 34, "if" => 41];
        static $filters = ["escape" => 47];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
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
